<?php
if(!isset($_POST['key'])){
	exit('����Ĳ������Ϸ�');
}
header("Content-Type:text/html; charset=UTF-8");
define('ROOT_PATH', dirname(__FILE__) . '/../');
date_default_timezone_set('Asia/Shanghai');
$ob = new forumIntface($_POST);
class forumIntface{
	const TYPENONENTITY = '���ʹ���';
	const NOTACCREDITUSER = 'δ��Ȩ�û�';
	const NOTHAVEDATA = '���������';
	const ERRORKEY = '��Կ����';
	const MYSQLERROR = '�������ݿ����';
	const BORROWIDERROR = '��id����';
	const TIMEFORMERROR = 'ʱ���ʽ����';
	const EXCEEDVISITTIMES = '���ʹ���Ƶ��';
	const ACCOUNTLOCK = '����Ƶ�ʳ�������ķ�����ʱ������������ϵ���ǽ���';
	const ACCOUNISTLOCK = '�˺ű�����';
	private $type_arr = array('getNewBorrows','getBorrowsByDate');//���Ʒ��ʷ���
	private $mysql = '';//���ݿ���Դ
	private $host = '';//��վ����
	private $uid = '';//������id
	private $showType = 1;//�ش����ݸ�ʽ1��XML��2��json
	private $accreditInfo = '';//ƽ̨��Ȩ��Ϣ
	private $visitTime = '';//����ʱ��
	public function __construct($data){
		require ROOT_PATH.'core/common.inc.php';
		require ROOT_PATH.'core/mysql.class.php';
		$this->mysql = new Mysql($db_config);
		$this->init($data);
		if($this->mysql instanceof Mysql){
			$this->$data['type']();
		}else{
			$this->error(self::MYSQLERROR);
		}
	}
	/*
	 * �������ݣ���֤
	 */
	private function init($data){
		$this->showType = $data['returnType'];
		if(!in_array($data['type'], $this->type_arr)){
			$this->error(self::TYPENONENTITY);
		}
		//����uid��ȡ��Ӧ��key
		$this->uid = $data['uid'];
		$this->visitTime = time();
		$this->setAccreditInfo();
		$Mkey = $data['key'];
		unset($data['key']);
		$str = '';
		foreach($data as $k=>$v){
			$str.= '&'.$k.'='.$v;
		}
		$str = substr($str, 1);
		$mi = md5($str.$this->accreditInfo['ukey']);
		if($mi!=$Mkey){
			$this->error(self::ERRORKEY);
		}
		$this->isExceedVisitTime();
		unset($data['uid']);
		unset($data['type']);
		foreach($data as $key=>$value){
			$this->$key=$value;
		}
		$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https')  === false ? 'http' : 'https';
		$this->host = $protocol.'://'.$_SERVER['HTTP_HOST'];
	}
	/*
	 * ������Ȩ��Ϣ
	 */
	private function setAccreditInfo(){
		$info = $this->mysql->db_fetch_array('select * from {third_accredit_info} where uid='.$this->uid);
		if(empty($info)){
			$this->error(self::NOTACCREDITUSER);
		}elseif($info['status']!=1){
			$this->error(self::ACCOUNISTLOCK);
		}
		$this->accreditInfo = $info;
	}
	/*
	 * �ж��û��Ƿ񳬹��˷��ʴ���
	 */
	private function isExceedVisitTime(){
		$info = $this->accreditInfo;
		if($info['timeperiod']+60>$this->visitTime){
			if($info['minutetimes']>$info['totaltimes'] && $info['minutetimes']>$info['totaltimes']*1.5){
				$this->mysql->db_query('update {third_accredit_info} set status=0 where uid='.$this->uid);
				$this->error(self::ACCOUNTLOCK);
			}elseif($info['minutetimes']>$info['totaltimes']){
				$this->mysql->db_query('update {third_accredit_info} set minutetimes=minutetimes+1,timeperiod='.$this->visitTime.' where uid='.$this->uid);
				$this->error(self::EXCEEDVISITTIMES);
			}else{
				$this->mysql->db_query('update {third_accredit_info} set minutetimes=minutetimes+1 where uid='.$this->uid);//������ʱ�����ڣ������ڵķ��ʴ�����1
				return true;
			}
		}
		$this->mysql->db_query('update {third_accredit_info} set minutetimes=1,timeperiod='.$this->visitTime.' where uid='.$this->uid);//����ʱ�����ں������ڵķ��ʴ���
		return true;
	}
	/*
	 * ��ȡ��ǰ���ڽ���Ͷ���еı���Ϣ
	 */
	private function getNewBorrows(){
		$fieldArr = array(
					'p1.id',
					'p1.name as title',
					'p1.biao_type as type',
					'p1.style as repaymentType',
					'p1.time_limit',
					'p1.isday',
					'p1.time_limit_day',
					'p1.account as money',
					'p1.account_yes',
					'p1.apr as yearRate',
					'p1.award',
					'p1.funds',
					'p1.part_account',
					'p1.verify_time as startTime',
					'p1.pwd',
					'p2.username as owner'
					);
		$fields = implode(',', $fieldArr);
		$sql = 'select '.$fields.' from {borrow} as p1 left join {user} as p2 on p1.user_id=p2.user_id where p1.status=1 and (p1.verify_time+p1.valid_time*25*60*60)>'.time();
		$data = $this->mysql->db_fetch_arrays($sql);
		$biao_info = $this->getBiaoInfo();
		foreach($data as $key=>$value){
			$data[$key]['bidInfoUrl'] = $data[$key]['bidUrl'] = $this->host.'/invest/a'.$value['id'].'.html';
			$data[$key]['type'] = $this->getBiaoType($value['type']);
			$data[$key]['repaymentType'] = $this->getRepayType($value['repaymentType']);
			if($value['isday']==1){
				$data[$key]['limitTime'] = $value['time_limit_day']/100;
				$data[$key]['dayBid'] = 1;
			}else{
				$data[$key]['dayBid'] = 0;
				$data[$key]['limitTime'] = $value['time_limit'];
			}
			$data[$key]['prize'] = 0;
			$data[$key]['prizeMoney'] = 0;
			if($value['award']==2){
				$data[$key]['prize'] = $value['funds'];
				$data[$key]['prizeMoney'] = 0;
			}else if($value['award']==1){
				$data[$key]['prize'] = 0;
				$data[$key]['prizeMoney'] = $value['part_account'];
			}
			$data[$key]['process'] = round($value['account_yes']/$value['money'],2);
			$data[$key]['loanPlatform'] = $this->uid;
			if($value['isday']==1){
				$borrow_fee=round($value['money']*$biao_info[$value['type']]['borrow_day_fee_rate']/30*$value['time_limit_day'],2);
			}else{
				$_fee_rate = $biao_info[$value['type']]['borrow_fee_rate_start'] + (($value['time_limit'] - $biao_info[$value['type']]['borrow_fee_rate_start_month_num'])>0?($value['time_limit'] - $biao_info[$value['type']]['borrow_fee_rate_start_month_num'])*$biao_info[$value['type']]['borrow_fee_rate']:0);
				$borrow_fee = round($value['money']*$_fee_rate,2);
			}
			$data[$key]['fee'] = $borrow_fee;
			$data[$key]['hasPwd'] = 0;
			if($value['pwd']!=''){
				$data[$key]['hasPwd'] = 1;
			}
			$data[$key]['startTime'] = date("YmdHis",$value['startTime']);
			$data[$key]['endTime'] = '';
			unset($data[$key]['time_limit_day']);
			unset($data[$key]['time_limit']);
			unset($data[$key]['isday']);
			unset($data[$key]['award']);
			unset($data[$key]['funds']);
			unset($data[$key]['part_account']);
			unset($data[$key]['account_yes']);
			unset($data[$key]['pwd']);
		}
		$this->show($data);
	}
	/*
	 * ��ȡĳʱ��εı�
	 */
	private function getBorrowsByDate(){
		$startTime = $this->formatTime($this->startTime, 1);
		$endTime = $this->formatTime($this->endTime, 0);
		if($startTime==false || $endTime==false || $startTime>$endTime){
			return $this->error(self::TIMEFORMERROR);
		}
		$fieldArr = array(
					'p1.id',
					'p1.name as title',
					'p1.biao_type as type',
					'p1.style as repaymentType',
					'p1.time_limit',
					'p1.isday',
					'p1.time_limit_day',
					'p1.account as money',
					'p1.account_yes',
					'p1.apr as yearRate',
					'p1.award',
					'p1.funds',
					'p1.part_account',
					'p1.verify_time as startTime',
					'p1.pwd',
					'p2.username as owner'
					);
		$fields = implode(',', $fieldArr);
		$sql = 'select '.$fields.' from {borrow} as p1 left join {user} as p2 on p1.user_id=p2.user_id where p1.status=3 and p1.verify_time>='.$startTime.' and p1.verify_time<='.$endTime;
		$data = $this->mysql->db_fetch_arrays($sql);
		$biao_info = $this->getBiaoInfo();
		foreach($data as $key=>$value){
			$data[$key]['bidInfoUrl'] = $data[$key]['bidUrl'] = $this->host.'/invest/a'.$value['id'].'.html';
			$data[$key]['type'] = $this->getBiaoType($value['type']);
			$data[$key]['repaymentType'] = $this->getRepayType($value['repaymentType']);
			if($value['isday']==1){
				$data[$key]['limitTime'] = $value['time_limit_day']/100;
				$data[$key]['dayBid'] = 1;
			}else{
				$data[$key]['dayBid'] = 0;
				$data[$key]['limitTime'] = $value['time_limit'];
			}
			$data[$key]['prize'] = 0;
			$data[$key]['prizeMoney'] = 0;
			if($value['award']==2){
				$data[$key]['prize'] = $value['funds'];
				$data[$key]['prizeMoney'] = 0;
			}else if($value['award']==1){
				$data[$key]['prize'] = 0;
				$data[$key]['prizeMoney'] = $value['part_account'];
			}
			$data[$key]['process'] = round($value['account_yes']/$value['money'],2);
			$data[$key]['loanPlatform'] = $this->uid;
			if($value['isday']==1){
				$borrow_fee=round($value['money']*$biao_info[$value['type']]['borrow_day_fee_rate']/30*$value['time_limit_day'],2);
			}else{
				$_fee_rate = $biao_info[$value['type']]['borrow_fee_rate_start'] + (($value['time_limit'] - $biao_info[$value['type']]['borrow_fee_rate_start_month_num'])>0?($value['time_limit'] - $biao_info[$value['type']]['borrow_fee_rate_start_month_num'])*$biao_info[$value['type']]['borrow_fee_rate']:0);
				$borrow_fee = round($value['money']*$_fee_rate,2);
			}
			$data[$key]['fee'] = $borrow_fee;
			$data[$key]['hasPwd'] = 0;
			if($value['pwd']!=''){
				$data[$key]['hasPwd'] = 1;
			}
			$data[$key]['startTime'] = date("YmdHis",$value['startTime']);
			$data[$key]['endTime'] = '';
			unset($data[$key]['time_limit_day']);
			unset($data[$key]['time_limit']);
			unset($data[$key]['isday']);
			unset($data[$key]['award']);
			unset($data[$key]['funds']);
			unset($data[$key]['part_account']);
			unset($data[$key]['account_yes']);
			unset($data[$key]['pwd']);
		}
		$this->show($data);
	}
	/*
	 * ��ȡ��������
	 */
	private function getBiaoInfo(){
		$sql = 'select * from {biao_type}';
		$data = $this->mysql->db_fetch_arrays($sql);
		$biao_type = array();
		foreach($data as $key=>$value){
			$biao_type[$value['biao_type_name']] = $value;
		}
		return $biao_type;
	}
	/*
	 * ��ȡ���ʽ
	 */
	private function getRepayType($type){
		switch($type){
			case 0:
				$id = 1;
				break;
			case 1:
				$id = 2;
				break;
			case 2:
				$id = 4;
				break;
			case 3:
				$id = 3;
				break;
			default:
				$id = 1;
				break;
		}
		return $id;
	}
	/*
	 * ��ʾjson
	 */
	private function show($data){
		if($this->showType==1){
			$this->showXml($data);
		}
		if(is_array($data)){
			$data = $this->gbk_utf8($data);
			echo json_encode($data);
		}else{
			$this->error(self::NOTHAVEDATA);
		}
		exit();
	}
	/*
	 * ��ʾxml
	 */
	private function showXml($data){
		header("Content-type:text/xml");
		$str = '<?xml version="1.0" encoding="utf-8"?>';
		foreach($data as $key=>$value){
			$str .= '<bidInfos>';
			foreach($value as $k=>$v){
				$str .= "<{$k}>".$v."</{$k}>";
			}
			$str .= '</bidInfos>';
		}
		echo $this->gbk_utf8($str);
		exit();
	}
	/*
	 * ��ʾ������Ϣjson
	 */
	private function error($string){
		if($this->showType==1){
			$this->errorXml($string);
		}
		$err = array('error'=>1,'msg'=>$string);
		$err = $this->gbk_utf8($err);
		echo json_encode($err);
		exit();
	}
	/*
	 * ��ʾ������Ϣxml
	 */
	 private function errorXml($string){
		header("Content-type:text/xml");
		$str = '<?xml version="1.0" encoding="UTF-8"?>';
		$str .= "<error>1</error>";
		$str .= "<msg>".$string."</msg>";
		echo $this->gbk_utf8($str);
		exit();
	}
	/*
	 * gbkתutf8
	 */
	private function gbk_utf8($arr){
		if(is_array($arr)){
			foreach($arr as $k=>$v){
				if(is_array($v)){
					$re = $this->gbk_utf8($v);
					$arr[$k] = $re;
				}else{
					$arr[$k] = iconv('gbk','utf-8',$v);
				}
			}
		}else{
			$arr = iconv('gbk','utf-8',$arr);
		}
		return $arr;
	}
	/*
	 * ��ʽ��ʱ��
	 */
	private function formatTime($time,$start=1){
		$time = trim($time);
		preg_match("/^[0-9]{2,4}-[0-9]{1,2}-[0-9]{1,2}\s+[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}$/", $time, $timeArr_1);
		if(empty($timeArr)){
			preg_match("/^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$/", $time, $timeArr_2);
			if(empty($timeArr_2)) return false;
			if($start==1) return strtotime($time.' 00:00:00');
			return strtotime($time.' 23:59:59');
		}else{
			return strtotime($time);
		}
	}
	/*
	 * ��ȡ�������
	 */
	private function getBiaoType($biaoType){
		switch($biaoType){
			case 'jin':
				$type = '��';
				break;
			case 'xin':
				$type = '��';
				break;
			case 'vouch':
				$type = '��';
				break;
			case 'fast':
				$type = 'Ѻ';
				break;
			case 'miao':
				$type = '��';
				break;
			case 'lz':
				$type = '��';
				break;
			default:
				$type = 'δ����';
				break;
		}
		return $type;
	}
}
function ip_address() {
	if(!empty($_SERVER["HTTP_CLIENT_IP"])) {
		$ip_address = $_SERVER["HTTP_CLIENT_IP"];
	}else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
		$ip_address = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
	}else if(!empty($_SERVER["REMOTE_ADDR"])){
		$ip_address = $_SERVER["REMOTE_ADDR"];
	}else{
		$ip_address = '';
	}
	return $ip_address;
}
?>