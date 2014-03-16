<?php
if(!isset($_POST['sign'])){
	exit('');
}
define('ROOT_PATH', dirname(__FILE__) . '/../');
date_default_timezone_set('Asia/Shanghai');
$ob = new forumIntface($_POST);
class forumIntface{
	const TYPENONENTITY = '���ʹ���';
	const NOTACCREDITUSER = 'δ��Ȩ�û�';
	const NOTHAVEDATA = '���������';
	const MYSQLERROR = '�������ݿ����';
	const ERRORKEY = '��Կ����';
	const BORROWIDERROR = '��id����';
	const TIMEFORMERROR = 'ʱ���ʽ����';
	const ACCOUNISTLOCK = '�˺ű�����';
	const INSUFFICIENTAUTHORITY = 'û��Ȩ�޻�ȡ������';
	const EXCEEDVISITTIMES = '���ʹ���Ƶ��';
	const ACCOUNTLOCK = '����Ƶ�ʳ�������ķ�����ʱ������������ϵ���ǽ���';
	private $mysql = '';//mysqlʵ��
	private $starttime = '';//��ʼʱ��
	private $endtime = '';//����ʱ��
	private $borrowId = '';//��id
	private $host = '';//����
	private $biaoInfo = '';//������
	private $userName = '';//�û�����checkUserInfoʹ�ã�
	private $realName = '';//��ʵ������checkUserInfoʹ�ã�
	private $cardId = '';//���֤�ţ�checkUserInfoʹ�ã�
	private $uid = '';//������id
	private $showType = 2;//�ش����ݸ�ʽ1��XML��2��json
	private $accreditInfo = '';//ƽ̨��Ȩ��Ϣ
	private $visitTime = '';//����ʱ��
	private $repaymentTime = '';//����ʱ��
	public function __construct($data){
		require ROOT_PATH.'core/common.inc.php';
		require ROOT_PATH.'core/mysql.class.php';
		$this->mysql = new Mysql($db_config);
		if($this->mysql instanceof Mysql){
			$this->init($data);
			$this->$data['type']();
		}else{
			$this->error(self::MYSQLERROR);
		}
	}
	/*
	 * �������ݣ���֤
	 */
	private function init($data){
		$this->uid = $data['appkey'];
		$this->visitTime = time();
		$this->setAccreditInfo();
		$authority = unserialize($this->accreditInfo['authority']);
		if(!in_array($data['type'], $authority)){
			$this->error(self::INSUFFICIENTAUTHORITY);
		}
		unset($data['type']);
		$Mkey = $data['sign'];
		unset($data['sign']);
		$data['appsecret'] = $this->accreditInfo['ukey'];
		ksort($data);
		$str = '';
		foreach ($data as $key=>$val) {
			$str.=",{$key}:{$val}";
		}
		$str = substr($str, 1);
		$mi = strtoupper(md5($str));
		if($mi!=$Mkey){
			$this->error(self::ERRORKEY);
		}
		$this->isExceedVisitTime();
		unset($data['appkey']);
		unset($data['appsecret']);
		unset($data['ts']);
		if(isset($data['date'])) $this->repaymentTime = $data['date'];
		foreach($data as $key=>$value){
			if(isset($this->$key)){
				$this->$key=$value;
			}
		}
		$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https')  === false ? 'http' : 'https';
		$this->host = $protocol.'://'.$_SERVER['HTTP_HOST'];
		$this->biaoInfo = $this->getBiaoInfo();
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
	 * �������(1��������,2����ֵ��,3���뻹�� 4����ת��)
	 */
	private function getBiaoType($type){
		switch($type){
			case 'fast':
				$i = 1;
				break;
			case 'jin':
				$i = 2;
				break;
			case 'miao':
				$i = 3;
				break;
			case 'lz':
				$i = 4;
				break;
			case 'xin':
				$i = 5;
				break;
			default:
				$i = 1;
				break;
		}
		return $i;
	}
	/*
	 * �������ͣ�0:���·��ڻ���,1-����ȫ��2-һ���Ի��3-���¸�Ϣ���ڻ�����4-ϵͳ�Զ��������Ǿ�ֵ��꣬����ʾ1���������꣬����ʾ4�����ޣ�������������
	 */
	private function getRepaymentType($style){
		switch($style){
			case 0:
				$i = 0;
				break;
			case 2:
				$i = 1;
				break;
			case 3:
				$i = 3;
				break;
			default:
				$i = 0;
				break;
		}
		return $i;
	}
	/*
	 * ��ȡʡ��
	 */
	private function getProvince($province){
		if($province<1) return false;
		$re = $this->mysql->db_fetch_array('select name from {area} where id='.$province);
		return $re['name'];
	}
	/*
	 * ��ȡ����
	 */
	private function getCity($city){
		if($city<1) return false;
		$re = $this->mysql->db_fetch_array('select name from {area} where id='.$city);
		return $re['name'];
	}
	/*
	 * ��ȡ���õȼ�ͼƬ
	 */
	private function getCreditPic($credit){
		$re = $this->mysql->db_fetch_array('select pic from {credit_rank} where point1<='.$credit.' and point2>='.$credit);
		return $this->host.'/data/images/credit/'.$re['pic'];
	}
	/*
	 * ��ȡ״̬
	 */
	private function getStatus($status,$repaymentAccount,$repaymentYesAccount,$type){
		$i = 1;
		if($status==3){
			if($repaymentAccount > $repaymentYesAccount){
				$i = 4;
			}else{
				$i = 5;
			}
		}
		if($type=='lz') $i=6;
		return $i;
	}
	/*
	 * ��ȡͷ��
	 */
	private function getHeadPic($user_id){
		$i = $this->host.'/data/images/avatar/noavatar_middle.gif';
		if(file_exists(ROOT_PATH.'/data/avatar/'.$user_id.'_avatar_middle.jpg')){
			$i = $this->host.'/data/avatar/'.$user_id.'_avatar_middle.jpg';
		}
		return $i;
	}
	/*
	 * ��ȡ�������
	 */
	private function getBiaoInfo(){
		$re = $this->mysql->db_fetch_arrays('select * from {biao_type}');
		$biao = array();
		foreach($re as $value){
			$biao[$value['biao_type_name']] = $value;
		}
		return $biao;
	}
	 /*
	 * ��ȡ�������
	 */
	private function getBorrowFee($type,$account,$timelimit,$isday,$timelimitday,$borrowid){
		if($type=='lz'){
			return $this->getBorrowFeeLz($type,$account,$timelimit,$isday,$timelimitday,$borrowid);
		}
		$borrow_account = $account;
		$month_times = $timelimit;
		$isday = $isday;
		$time_limit_day = $timelimitday;
		$fee_rate = $this->biaoInfo[$type];
		$borrow_fee_rate_start = $fee_rate['borrow_fee_rate_start'];
		$borrow_fee_rate_start_month_num = $fee_rate['borrow_fee_rate_start_month_num'];
		$borrow_fee_rate = $fee_rate['borrow_fee_rate'];
		$borrow_day_fee_rate = $fee_rate['borrow_day_fee_rate'];
		if($isday==1){
			$borrow_fee=round($borrow_account*$borrow_day_fee_rate/30*$time_limit_day,2);
		}else{
			$_fee_rate = $borrow_fee_rate_start + (($month_times - $borrow_fee_rate_start_month_num)>0?($month_times - $borrow_fee_rate_start_month_num)*$borrow_fee_rate:0);
			$borrow_fee = round($borrow_account*$_fee_rate,2);
		}
		return $borrow_fee;
	}
	 /*
	 * ��ȡ���������ת��
	 */
	private function getBorrowFeeLz($type,$account,$timelimit,$isday,$timelimitday,$borrowid){
		$sql = 'select count(repayment_yesaccount) as repayment_yesaccount from {borrow_tender} where status=1 and borrow_id='.$borrowid;
		$re = $this->mysql->db_fetch_array($sql);
		$biao_result = $this->biaoInfo[$type];
		if($isday==1){
			$borrow_fee = $biao_result['borrow_day_fee_rate'];
		}else{
			$borrow_fee = $biao_result['borrow_fee_rate'];
		}
		$money = round($account*$borrow_fee*$timelimit,2);
		if($isday==1){
			$money=$money/30*$timelimitday;
		}
		return $money;
	}
	/*
	 * ��ȡ��ǰ���ڽ���Ͷ���еı���Ϣ
	 */
	private function getNowBorrows(){
		$fieldArr = array(
					'p1.id as borrowid',
					'p1.name',
					'p1.status',
					'p1.biao_type as type',
					'p1.style as repaymentType',
					'p1.time_limit as timelimit',
					'p1.isday',
					'p1.time_limit_day as timelimitday',
					'p1.account',
					'p1.account_yes',
					'p1.apr',
					'p1.award',
					'p1.funds',
					'p1.part_account as partaccount',
					'p1.verify_time as verifytime',
					'p1.addtime',
					'p1.pwd',
					'p1.repayment_account',
					'p1.repayment_yesaccount',
					'p2.username as owner',
					'p2.user_id',
					'p2.province',
					'p2.city',
					'p3.credit as credictJifen'
					);
		$fields = implode(',', $fieldArr);
		$sql = 'select '.$fields.' from {borrow} as p1 left join {user} as p2 on p1.user_id=p2.user_id left join {user_cache} as p3 on p1.user_id=p3.user_id where p1.status=1 and (p1.verify_time+p1.valid_time*25*60*60)>'.time();
		$data = $this->mysql->db_fetch_arrays($sql);
		foreach($data as $key=>$value){
			$data[$key]['url'] = $this->host.'/invest/a'.$value['borrowid'].'.html';
			$data[$key]['type'] = $this->getBiaoType($value['type']);
			$data[$key]['partaccount'] = 0;//��������
			$data[$key]['funds'] = 0;//�������
			if($value['award']==2){//��������
				$data[$key]['partaccount'] = $value['funds'];
				$data[$key]['funds'] = 0;
			}else if($value['award']==1){//�̶�����
				$data[$key]['partaccount'] = 0;
				$data[$key]['funds'] = $value['partaccount'];
			};
			$data[$key]['type'] = $this->getBiaoType($value['type']);
			$data[$key]['repaymentType'] = $this->getRepaymentType($value['repaymentType']);
			if($value['isday']==1 && $value['type']=='jin'){
				$data[$key]['repaymentType'] = 1;
			}elseif($value['type']=='miao'){
				$data[$key]['repaymentType'] = 4;
			}
			if($value['type']=='lz'){
				$data[$key]['minFlowMoney'] = 100;
				$data[$key]['alreadyFlow'] = $value['account_yes']/100;
				$data[$key]['laveFlow'] = ($value['account_yes']-$value['account'])/100;
			}else{
				$data[$key]['minFlowMoney'] = 0;
				$data[$key]['alreadyFlow'] = 0;
				$data[$key]['laveFlow'] = 0;
			}
			$data[$key]['headPic'] = $this->getHeadPic($value['user_id']);
			$data[$key]['province'] = $this->getProvince($value['province']);
			$data[$key]['city'] = $this->getCity($value['city']);
			$data[$key]['creditPic'] = $this->getCreditPic($value['credictJifen']);
			$data[$key]['schedule'] = round($value['account_yes']/$value['account'],2);
			$data[$key]['leadingBeacon'] = $value['pwd']==''?0:1;
			$data[$key]['status'] = $this->getStatus($value['status'],$value['repayment_account'],$value['repayment_yesaccount'],$value['type']);
			$data[$key]['revenue'] = 0;
			unset($data[$key]['account_yes']);
			unset($data[$key]['repayment_account']);
			unset($data[$key]['repayment_yesaccount']);
			unset($data[$key]['user_id']);
			unset($data[$key]['pwd']);
		}
		$this->show($data);
	}
	/*
	 * ��ȡ����0�㵽������ɵı�
	 */
	private function getTodayBorrows(){
		$fieldArr = array(
					'p1.id as borrowid',
					'p1.name',
					'p1.status',
					'p1.biao_type as type',
					'p1.style as repaymentType',
					'p1.time_limit as timelimit',
					'p1.isday',
					'p1.time_limit_day as timelimitday',
					'p1.account',
					'p1.account_yes',
					'p1.apr',
					'p1.award',
					'p1.funds',
					'p1.part_account as partaccount',
					'p1.verify_time as verifytime',
					'p1.addtime',
					'p1.pwd',
					'p1.repayment_account',
					'p1.repayment_yesaccount',
					'p2.username as owner',
					'p2.user_id',
					'p2.province',
					'p2.city',
					'p3.credit as credictJifen'
					);
		$fields = implode(',', $fieldArr);
		$startTime = strtotime(date('Y-m-d', time()).' 00:00:00');
		$endTime = time();
		$sql = 'select '.$fields.' from {borrow} as p1 left join {user} as p2 on p1.user_id=p2.user_id left join {user_cache} as p3 on p1.user_id=p3.user_id where (p1.status=1 and p1.biao_type="lz" and p1.verify_time>='.$startTime.') or (p1.status=3 and p1.success_time>='.$startTime.')';
		$data = $this->mysql->db_fetch_arrays($sql);
		foreach($data as $key=>$value){
			$data[$key]['url'] = $this->host.'/invest/a'.$value['borrowid'].'.html';
			$data[$key]['type'] = $this->getBiaoType($value['type']);
			$data[$key]['partaccount'] = 0;//��������
			$data[$key]['funds'] = 0;//�������
			if($value['award']==2){//��������
				$data[$key]['partaccount'] = $value['funds'];
				$data[$key]['funds'] = 0;
			}else if($value['award']==1){//�̶�����
				$data[$key]['partaccount'] = 0;
				$data[$key]['funds'] = $value['partaccount'];
			};
			$data[$key]['type'] = $this->getBiaoType($value['type']);
			$data[$key]['repaymentType'] = $this->getRepaymentType($value['repaymentType']);
			if($value['isday']==1 && $value['type']=='jin'){
				$data[$key]['repaymentType'] = 1;
			}elseif($value['type']=='miao'){
				$data[$key]['repaymentType'] = 4;
			}
			if($value['type']=='lz'){
				$data[$key]['minFlowMoney'] = 100;
				$data[$key]['alreadyFlow'] = $value['account_yes']/100;
				$data[$key]['laveFlow'] = ($value['account_yes']-$value['account'])/100;
			}else{
				$data[$key]['minFlowMoney'] = 0;
				$data[$key]['alreadyFlow'] = 0;
				$data[$key]['laveFlow'] = 0;
			}
			$data[$key]['headPic'] = $this->getHeadPic($value['user_id']);
			$data[$key]['province'] = $this->getProvince($value['province']);
			$data[$key]['city'] = $this->getCity($value['city']);
			$data[$key]['creditPic'] = $this->getCreditPic($value['credictJifen']);
			$data[$key]['schedule'] = round($value['account_yes']/$value['account'],2);
			$data[$key]['leadingBeacon'] = $value['pwd']==''?0:1;
			$data[$key]['status'] = $this->getStatus($value['status'],$value['repayment_account'],$value['repayment_yesaccount'],$value['type']);
			$data[$key]['revenue'] = $this->getBorrowFee($value['type'],$value['account'],$value['timelimit'],$value['isday'],$value['timelimitday'],$value['borrowid']);
			unset($data[$key]['account_yes']);
			unset($data[$key]['repayment_account']);
			unset($data[$key]['repayment_yesaccount']);
			unset($data[$key]['user_id']);
			unset($data[$key]['pwd']);
		}
		$this->show($data);
	}
	/*
	 * ��ȡĳʱ��εı�
	 */
	private function getBorrowsByDate(){
		$startTime = $this->formatTime($this->starttime, 1);
		$endTime = $this->formatTime($this->endtime, 0);
		if($startTime==false || $endTime==false || $startTime>$endTime){
			return $this->error(self::TIMEFORMERROR);
		}
		$fieldArr = array(
					'p1.id as borrowid',
					'p1.name',
					'p1.status',
					'p1.biao_type as type',
					'p1.style as repaymentType',
					'p1.time_limit as timelimit',
					'p1.isday',
					'p1.time_limit_day as timelimitday',
					'p1.account',
					'p1.account_yes',
					'p1.apr',
					'p1.award',
					'p1.funds',
					'p1.part_account as partaccount',
					'p1.verify_time as verifytime',
					'p1.addtime',
					'p1.pwd',
					'p1.repayment_account',
					'p1.repayment_yesaccount',
					'p2.username as owner',
					'p2.user_id',
					'p2.province',
					'p2.city',
					'p3.credit as credictJifen'
					);
		$fields = implode(',', $fieldArr);
		$sql = 'select '.$fields.' from {borrow} as p1 left join {user} as p2 on p1.user_id=p2.user_id left join {user_cache} as p3 on p1.user_id=p3.user_id where (p1.status=1 and p1.biao_type="lz" and p1.verify_time>='.$startTime.' and p1.verify_time<='.$endTime.') or (p1.status=3 and p1.success_time>='.$startTime.' and p1.success_time<='.$endTime.')';
		$data = $this->mysql->db_fetch_arrays($sql);
		foreach($data as $key=>$value){
			$data[$key]['url'] = $this->host.'/invest/a'.$value['borrowid'].'.html';
			$data[$key]['type'] = $this->getBiaoType($value['type']);
			$data[$key]['partaccount'] = 0;//��������
			$data[$key]['funds'] = 0;//�������
			if($value['award']==2){//��������
				$data[$key]['partaccount'] = $value['funds'];
				$data[$key]['funds'] = 0;
			}else if($value['award']==1){//�̶�����
				$data[$key]['partaccount'] = 0;
				$data[$key]['funds'] = $value['partaccount'];
			};
			$data[$key]['type'] = $this->getBiaoType($value['type']);
			$data[$key]['repaymentType'] = $this->getRepaymentType($value['repaymentType']);
			if($value['isday']==1 && $value['type']=='jin'){
				$data[$key]['repaymentType'] = 1;
			}elseif($value['type']=='miao'){
				$data[$key]['repaymentType'] = 4;
			}
			if($value['type']=='lz'){
				$data[$key]['minFlowMoney'] = 100;
				$data[$key]['alreadyFlow'] = $value['account_yes']/100;
				$data[$key]['laveFlow'] = ($value['account_yes']-$value['account'])/100;
			}else{
				$data[$key]['minFlowMoney'] = 0;
				$data[$key]['alreadyFlow'] = 0;
				$data[$key]['laveFlow'] = 0;
			}
			$data[$key]['headPic'] = $this->getHeadPic($value['user_id']);
			$data[$key]['province'] = $this->getProvince($value['province']);
			$data[$key]['city'] = $this->getCity($value['city']);
			$data[$key]['creditPic'] = $this->getCreditPic($value['credictJifen']);
			$data[$key]['schedule'] = round($value['account_yes']/$value['account'],2);
			$data[$key]['leadingBeacon'] = $value['pwd']==''?0:1;
			$data[$key]['status'] = $this->getStatus($value['status'],$value['repayment_account'],$value['repayment_yesaccount'],$value['type']);
			$data[$key]['revenue'] = $this->getBorrowFee($value['type'],$value['account'],$value['timelimit'],$value['isday'],$value['timelimitday'],$value['borrowid']);
			unset($data[$key]['account_yes']);
			unset($data[$key]['repayment_account']);
			unset($data[$key]['repayment_yesaccount']);
			unset($data[$key]['user_id']);
			unset($data[$key]['pwd']);
		}
		$this->show($data);
	}
	/*
	 * ��ȡĳ�컹��ı����Ϣ
	 */
	private function getRepaymentByDate(){
		$startTime = $this->formatTime($this->repaymentTime, 1);
		$endTime = $this->formatTime($this->repaymentTime, 0);
		$sql = 'select borrow_id as id,status,repayment_time,repayment_account from {borrow_repayment} where repayment_time>='.$startTime.' and repayment_time<='.$endTime;
		$data = $this->mysql->db_fetch_arrays($sql);
		$this->show($data);
	}
	/*
	 * ��ȡĳ����Ͷ��ɹ��û���Ͷ����Ϣ
	 */
	private function getInvestorByBorrowId(){
		$borrowId = intval($this->borrowId);
		if($borrowId<1) return $this->error(self::BORROWIDERROR);
		$fieldArr = array(
					'p1.borrow_id as borrowid',
					'p1.user_id as id',
					'p1.addtime',
					'p1.money',
					'p1.account as tenderaccount',
					'p1.addtime',
					'p2.username',
					'p3.award',
					'p3.funds',
					'p3.part_account as partaccount',
					'p3.account as borrowaccount'
					);
		$fields = implode(',', $fieldArr);
		$sql = 'select '.$fields.' from {borrow_tender} as p1 left join {user} as p2 on p1.user_id=p2.user_id left join {borrow} as p3 on p1.borrow_id=p3.id where p1.borrow_id='.$borrowId;
		$data = $this->mysql->db_fetch_arrays($sql);
		foreach($data as $key=>$value){
			$data[$key]['tendType'] = 0;
			if ($value['award']==1){
				$data[$key]['award'] = round(($value['tenderaccount']/$value['borrowaccount'])*$value['partaccount'],2);
			}elseif ($value['award']==2){
				$data[$key]['award'] = round((($value['funds']/100)*$value['tenderaccount']),2);
			}else{
				$data[$key]['award'] = 0;
			}
			unset($data[$key]['award']);
			unset($data[$key]['funds']);
			unset($data[$key]['partaccount']);
			unset($data[$key]['borrowaccount']);
		}
		$this->show($data);
	}
	/*
	 * ��֤���û��Ƿ���ƽ̨�û�
	*/
	private function checkUserInfo(){
		$data = $this->mysql->db_fetch_array('select count(1) as resCode from {user} where username=\''.$this->userName.'\' and realname=\''.$this->realName.'\' and card_id=\''.$this->cardId.'\'');
		$data['resCode'] = $data['resCode']>0?1:0;
		$this->show($data);
	}
	/*
	 * ��ʾjson
	 */
	private function show($data){
		if(is_array($data)){
			if($this->showType==1){
				$this->showXml($data);
			}
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
			$str .= '<message>';
			foreach($value as $k=>$v){
				$str .= "<{$k}>".$v."</{$k}>";
			}
			$str .= '</message>';
		}
		echo $this->gbk_utf8($str);
		exit();
	}
	/*
	 * ��ʾ������Ϣ
	 */
	private function error($string){
		$err = array('error'=>1,'msg'=>$string);
		$err = $this->gbk_utf8($err);
		echo json_encode($err);
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
			if(empty($timeArr_2)) $this->error(self::TIMEFORMERROR);
			if($start==1){
				$time = strtotime($time.' 00:00:00');
			}else{
				$time = strtotime($time.' 23:59:59');
			}
		}else{
			$time = strtotime($time);
		}
		if($time==false || $time<1) $this->error(self::TIMEFORMERROR);
		return $time;
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