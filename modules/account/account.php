<?
if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

if ($_A['query_type'] != "listTJ" && $_A['query_type'] != "fs_list" && $_A['query_type'] != "logold"){
	check_rank("account_".$_A['query_type']);//���Ȩ��
}

include_once("account.class.php");
include_once(ROOT_PATH."core/friends.class.php");

$_A['list_purview'] =  array("account"=>array("�ʽ����"=>array("account_ticheng"=>"����б�","account_list"=>"��Ϣ�б�","account_bank"=>"�����ʻ�","account_cash"=>"���ּ�¼","account_recharge"=>"��ֵ��¼","account_log"=>"�ʽ��¼")));//Ȩ��
$_A['list_name'] = $_A['module_result']['name'];
$_A['list_menu'] = "<a href='{$_A['query_url']}/list{$_A['site_url']}'>�ʻ��б�</a> - <a href='{$_A['query_url']}/cashCK&status=0{$_A['site_url']}'>���ֲο�</a> - <a href='{$_A['query_url']}/cash&status=0{$_A['site_url']}'>��������</a> - <a href='{$_A['query_url']}/cash&status=1{$_A['site_url']}'>���ֳɹ�</a> -  - <a href='{$_A['query_url']}/cash&status=2{$_A['site_url']}'>����ʧ��</a> - <a href='{$_A['query_url']}/recharge&status=-2&a=cash'>��ֵ��¼</a>  - <a href='{$_A['query_url']}/log{$_A['site_url']}'>�ʽ��¼</a> - <a href='{$_A['query_url']}/recharge_new{$_A['site_url']}'>��ӳ�ֵ</a> - <a href='{$_A['query_url']}/deduct{$_A['site_url']}'>�۳�����</a> - <a href='{$_A['query_url']}/vipTC{$_A['site_url']}'>�������</a> - <a href='{$_A['query_url']}/moneyCheck{$_A['site_url']}'>�ʽ���˱�</a> - <a href='{$_A['query_url']}/ticheng{$_A['site_url']}'>�û����</a>- <a href='{$_A['query_url']}/fs_list{$_A['site_url']}'>�������</a>";


/**
 * �������Ϊ�յĻ�����ʾ���е��ļ��б�
**/

if ($_A['query_type'] == "list"){
	$_A['list_title'] = "�ʻ���Ϣ�б�";
	if (isset($_GET['user_id']) && $_GET['user_id']!=""){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = accountClass::GetList($data);
        
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
      
		$title = array("���","�û���","��ʵ����","�����","�������","������","���ս��","�������","���ʲ�");
		$data['limit'] = "all";
		$result = accountClass::GetAccListForExport($data);

		exportData("�˻��б�",$title,$result);
		exit;
	}
        
	if (is_array($result)){
		$pages->set_data($result);
		$_A['account_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	
	}else{
		$msg = array($result);
	}
}

/**
 * �������õ�ͳ���˻���Ϣ��ÿ���賿3������ add by jackfeng 2012-09-23
**/
/*
else if ($_A['query_type'] == "listTJ"){
	$_A['list_title'] = "�ʻ���Ϣ�б�";
	if (isset($_REQUEST['user_id']) && $_REQUEST['user_id']!=""){
		$data['user_id'] = $_REQUEST['user_id'];
	}
	if (isset($_REQUEST['username']) && $_REQUEST['username']!=""){
		$data['username'] = $_REQUEST['username'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
		$title = array("���","�û���","��ʵ����","�����","�������","������","���ս��","�������","���ʲ�");
		$data['limit'] = "all";

		$result = accountClass::GetAccListTJForExport($data);

		exportData("�˻��б�",$title,$result);
		exit;
	}
	$result = accountClass::GetListTJ($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['account_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
*/

/***
 * Author:LiuYY
 * 2012-05-04
 * ��̨����б�
 */
else if ($_A['query_type'] == "ticheng"){
$_A['list_title'] = "�ʻ���Ϣ�б�";
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	if (isset($_GET['type']) && $_GET['type']=="excel"){
		$title = array("���","ʱ��","�û���","Ͷ���ܶ�");
		$data['limit'] = "all";
		$result = accountClass::GetTichengForExport($data);
		exportData("��������б�",$title,$result);
		exit;
	}
	$result = accountClass::GetTicheng($data);
	if(is_array($result)){
		$pages->set_data($result);
		$_A['account_ticheng'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * �����Աע�Ტ����VIP��Ա������б�
**/
else if ($_A['query_type'] == "vipTC"){
	$_A['list_title'] = "��Ա����б�";

	$data["user_id"]="-1";
        
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
        $data['user_id']="-1";
        
	if (isset($_REQUEST['username']) && $_REQUEST['username']!=""){
		$data['username'] = $_REQUEST['username'];
	}
        
	if (isset($_REQUEST['username2']) && $_REQUEST['username2']!=""){
		$data['username2'] = $_REQUEST['username2'];
	}
        
	$result = friendsClass::GetFriendsInvite($data);
        $list=$result['list'];
	foreach ($list as $key => $value){
     
                $inviteUserId = $value["invite_userid"];
		$sql = "select username from {user} where `user_id`={$inviteUserId}";
		$resultValue = $mysql->db_fetch_array($sql);               
		$list[$key]['inviteUserName'] = $resultValue["username"];
	}
        $result['list']=$list;
        
	if (is_array($result)){
		$pages->set_data($result);
		$_A['vipTC_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	
	}else{
		$msg = array($result);
	}
}

/*
//�����Ǹ������ 
*/
else if ($_A['query_type'] == "fs_list"){
	$_A['list_title'] = "�������";

	if (isset($_REQUEST['user_id']) && $_REQUEST['user_id']!=""){
		$data['user_id'] = $_REQUEST['user_id'];
	}
	
	if (isset($_REQUEST['username']) && $_REQUEST['username']!=""){
		$data['username'] = $_REQUEST['username'];
	}
	
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = accountClass::GetListFs($data);

	if (is_array($result)){
		$pages->set_data($result);
		$_A['fs_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);

	}else{
		$msg = array($result);
	}
}
/**
 * �û��ʽ���������
 */
else if ($_A['query_type'] == "moneyCheck"){
	$_A['list_title'] = "�ʽ���˱�";

	$data["user_id"]="-1";
        
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
        $data['user_id']="-1";
        
	if (isset($_REQUEST['username']) && $_REQUEST['username']!=""){
		$data['username'] = $_REQUEST['username'];
	}
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
      
		$title = array("�û���","�ʽ��ܶ�","�����ʽ�","�����ʽ�","�����ʽ�(1)","�����ʽ�(2)","��ֵ�ʽ�(1)","��ֵ�ʽ�(2)","���У�����","���У�����1","���У�����2","�ɹ����ֽ��","����ʵ�ʵ���","���ַ���","Ͷ�꽱�����","Ͷ�������ʽ�","Ͷ��������Ϣ","Ͷ�������Ϣ","����ܽ��","���꽱��","�������","�������","����ѻ���Ϣ","ϵͳ�۷�","�ƹ㽱��","VIP�۷�","�ʽ��ܶ�1","�ʽ��ܶ�2");
		//$data['limit'] = "all";
		$result = accountClass::GetUsersMoneyCheckListForExcel($data);

		exportData("�û��ʽ���������",$title,$result);
		exit;
	}
        
        $result = accountClass::GetUsersMoneyCheckList($data);
		if (is_array($result)){
		$pages->set_data($result);
		$_A['moneyCheck_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
	
}
/**
 * ���ֲο�
**/
elseif ($_A['query_type'] == "cashCK"){
	$_A['list_title'] = "���ֲο�";
	if (isset($_GET['user_id']) && $_GET['user_id']!=""){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = accountClass::GetCKList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['account_cashCK_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * ���ּ�¼
**/
elseif ($_A['query_type'] == "cash"){
	$_A['list_title'] = "���ּ�¼";
	if (isset($_GET['user_id'])){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username'])){
		$data['username'] = $_GET['username'];
	}
	if (isset($_GET['status']) && $_GET['status']!=""){
		$data['status'] = $_GET['status'];
	}
	if (isset($_GET['dotime1'])){
		$data['dotime1'] = $_GET['dotime1'];
	}
	if (isset($_GET['dotime2'])){
		$data['dotime2'] = $_GET['dotime2'];
	}
	if(isset($_GET['account'])){
		$data['account'] = $_GET['account'];
	}
	if (isset($_GET['type']) && $_GET['type']=="excel"){
		$title = array("Id","�û�����","��ʵ����","�����˺�","��������","֧��","�����ܶ�","���˽��","������","����ֿ�","����ʱ��","״̬");
		$data['limit'] = "all";
		$result = accountClass::GetCashList($data);
		include_once ROOT_PATH.'modules/borrow/borrow.class.php';
		$borrow = new borrowClass();
		$borrow->borrowListForExcel(array('type'=>'cash','title'=>$title,'excelresult'=>$result,'filename'=>'�����б�'));
		exit;
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = accountClass::GetCashList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['account_cash_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * ������˲鿴
**/
elseif ($_A['query_type'] == "cash_view"){
	$_A['list_title'] = "������˲鿴";
	if (isset($_POST['id'])){
		$var = array("id","status","credited","fee","verify_remark");
		$data = post_var($var);
		$data['user_id']=$_POST['user_id'];
		$re = accountClass::UpdateCash($data);
		if(is_bool($re)){
			if($re==false){
				$msg = array("����ʧ��","",$_A['query_url']."/cash".$_A['site_url']);
			}else{
				$msg = array("�����ɹ�","",$_A['query_url']."/cash".$_A['site_url']);
			}
		}else{
			$msg = array($re,"",$_A['query_url']."/cash".$_A['site_url']);
		}
		$user->add_log($_log,$re);//��¼����
	}else{
		$data['id'] = $_REQUEST['id'];
		$_A['account_cash_result'] = accountClass::GetCashOne($data);
	}
}
/**
 * �˺ų�ֵ���
**/
elseif ($_A['query_type'] == "recharge_view"){
	$_A['list_title'] = "��ֵ�鿴";
	if (isset($_POST['id'])){
		if(strtolower($_POST['valicode'])==$_SESSION['valicode'] && $_POST['valicode']!=""){
			$var = array("id","status","verify_remark");
			$data = post_var($var);
			$re = accountClass::UpdateRecharge($data);
			if(is_bool($re)){
				if($re==false){
					$msg = array("����ʧ��","",$_A['query_url']."/recharge".$_A['site_url']);
				}else{
					$msg = array("�����ɹ�","",$_A['query_url']."/recharge".$_A['site_url']);
				}
			}else{
				$msg = array($re,"",$_A['query_url']."/recharge".$_A['site_url']);
			}
			$user->add_log($_log,$re);//��¼����
		}else{
			$msg = array('��֤����������');
		}
	}else{
		$data['id'] = $_GET['id'];
		$_A['account_recharge_result'] = accountClass::GetRechargeOne($data);
	}
}
/**
 * ��ֵ��¼
**/
elseif ($_A['query_type'] == "recharge"){
	$_A['list_title'] = "��ֵ��¼";
	if (isset($_GET['user_id'])){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username'])){
		$data['username'] = $_GET['username'];
	}
	if (isset($_GET['status'])){
		$data['status'] = $_GET['status'];
	}
	if (isset($_GET['dotime1'])){
		$data['dotime1'] = $_GET['dotime1'];
	}
	if (isset($_GET['dotime2'])){
		$data['dotime2'] = $_GET['dotime2'];
	}
	if (isset($_GET['trade_no'])){
		$data['trade_no'] = $_GET['trade_no'];
	}
	if(isset($_GET['pertainbank'])){
		$data['pertainbank'] = $_GET['pertainbank'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	include_once(ROOT_PATH."modules/payment/payment.class.php");
	$_A['account_payment_list'] = paymentClass::GetList();
	if (isset($_GET['type']) && $_GET['type']=="excel"){
		$title = array("���","��ˮ��","�û�����","��ʵ����","����","��������","��ֵ���","����","���˽��","�������","��ֵʱ��","״̬","���з���");
		$data['limit'] = "all";
		$result = accountClass::GetRechargeList($data);
		include_once ROOT_PATH.'modules/borrow/borrow.class.php';
		$borrow = new borrowClass();
		$borrow->borrowListForExcel(array('type'=>'recharge','title'=>$title,'excelresult'=>$result,'filename'=>'��ֵ��¼'));
		exit;
	}
	$result = accountClass::GetRechargeList($data);
	$pages->set_data($result);
	$_A['account_recharge_list'] = $result['list'];
	$_A['showpage'] = $pages->show(3);
}
/**
 * ��ӳ�ֵ��¼
**/
elseif ($_A['query_type'] == "recharge_new"){
	if(isset($_POST['username']) && $_POST['username']!=""){
		$money = floatval($_POST['money']);
		if($money<=0){
			$msg = array("��������ȷ�Ľ��");
		}else{
			$_data['username'] = $_POST['username'];
			$result = userClass::GetOnes($_data);
			if ($result==false){
				$msg = array("�û�������");
			}else{
				$data['user_id'] = $result['user_id'];
				$data['status'] = 0;
				$data['money'] = $money;
				$data['type'] = 2;
				$data['payment'] = 0;
				$data['fee'] = 0;
				$data['remark'] = $_POST['remark'].",��������ԱID:".$_G['user_id'];
				$data['trade_no'] = time().$result['user_id'].rand(1,9);
				$result = accountClass::AddRecharge($data);
				if ($result !== true){
					$msg = array($result);
				}else{
					$msg = array("�����ɹ�");
				}
			}
		}
	}
}
/*
 * ���������ֵ��¼
 */
elseif($_A['query_type'] == "rechargefromexcel"){
	if($_FILES['excelfile']!=null){
		if($_FILES['excelfile']['error']==0){
			//error_reporting(E_ALL ^ E_NOTICE);
			if(strstr($_FILES['excelfile']['name'],'.')!='.xls'){
				$msg = array("�ļ���ʽ����ȷ����ʹ��xls��ʽ");
			}else{
				$name = ROOT_PATH.'data/upfiles/annexs/'.time().'.xls';
				move_uploaded_file($_FILES['excelfile']['tmp_name'], $name);
				require_once ROOT_PATH.'plugins/excelreader/excel_reader2.php';
				$data = new Spreadsheet_Excel_Reader($name);
				$data->setoutputencoding('GBK');
				$field = '';
				for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
					$username = trim($data->sheets[0]['cells'][$i][1]);
					$result = $mysql->db_fetch_array("select user_id from `{user}` where username='{$username}'");
					if($result['user_id']<=0){
						continue;
					}
					$data_1['user_id'] = $result['user_id'];
					$data_1['status'] = 0;
					$data_1['money'] = trim($data->sheets[0]['cells'][$i][2]);
					$data_1['type']=2;
					$data_1['payment'] = 0;
					$data_1['fee'] = 0;
					$data_1['remark'] = "�������룬��������ԱID:".$_G['user_id'];
					$data_1['trade_no'] = time().$result['user_id'].rand(1,9);
					$result = accountClass::AddRecharge($data_1);
				}
				$msg = array("�����ɹ�");
			}
		}else{
			$msg = array("�ļ�".$_FILES['excelfile']['name']."�ϴ�ʧ��");
		}
	}
}
/**
 * �۳�����
**/
elseif ($_A['query_type'] == "deduct"){
	if(isset($_POST['username']) && $_POST['username']!=""){
		$_data['username'] = $_POST['username'];
		$result = userClass::GetOnes($_data);
		if ($result==false){
			$msg = array("�û���������");
		}elseif (strtolower ($_POST['valicode'])!=$_SESSION['valicode'] || !isset($_POST['valicode'])){
			$msg = array("��֤�벻��ȷ");
		}else{
			$data['user_id'] = $result['user_id'];
			$data['money'] = $_POST['money'];
			$data['type'] = $_POST['type'];
			$data['remark'] = $_POST['remark'].",��������ԱID:".$_G['user_id'];
			$result = accountClass::Deduct($data);
			if ($result !== true){
				$msg = array($result);
			}else{
				$msg = array("�����ѳɹ��۳�","",$_A['query_url']."/deduct&a=cash");
				$_SESSION['valicode'] = "";
			}
		}
	}
}
/**
 * �ʽ�ʹ�ü�¼
**/
elseif ($_A['query_type'] == "log"){
	$_A['list_title'] = "�ʽ�ʹ�ü�¼";
	if (isset($_GET['user_id']) && $_GET['user_id']!=""){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	if (isset($_GET['typeaction'])){
		$data['type'] = $_GET['typeaction'];
	}
	if (isset($_GET['dotime1'])){
		$data['dotime1'] = $_GET['dotime1'];
	}
	if (isset($_GET['dotime2'])){
		$data['dotime2'] = $_GET['dotime2'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
    if (isset($_GET['type']) && $_GET['type']=="excel"){
		$title = array("��¼ʱ��","�û�����","����","�ܽ��","�������","���ý��","������","���ս��","���׶Է�","��ע");
		$data['limit'] = "all";
		$result = accountClass::GetLogListForExcel($data);
		exportData("�ʽ���ˮ��¼",$title,$result);
		exit;
	}
	$result = accountClass::GetLogList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['account_log_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * �鿴
**/
elseif ($_A['query_type'] == "view"){
	$_A['list_title'] = "�鿴��֤";
	if (isset($_POST['id'])){
		$var = array("id","status","verify_remark","jifen");
		$data = post_var($var);
		$data['verify_user'] = $_SESSION['user_id'];
		$result = accountClass::Update($data);
		
		if ($result !== true){
			$msg = array($result);
		}else{
			$msg = array("�����ɹ�");
		}
		$user->add_log($_log,$result);//��¼����
	}else{
		$data['id'] = $_REQUEST['id'];
		$_A['account_result'] = accountClass::GetOne($data);
	}
}
elseif($_A['query_type']=="return_reward"){//�ؿ���Ͷ�����б�
	$data['page'] = isset($_GET['page'])?$_GET['page']:$_A['page'];
	$data['epage'] = isset($_GET['epage'])?$_GET['epage']:$_A['epage'];
	if(isset($_GET['status']) && $_GET['status']!=''){
		$data['status'] = $_GET['status'];
	}
	if(isset($_GET['username']) && $_GET['username']!=''){
		$data['username'] = $_GET['username'];
	}
	$result = accountClass::GetRewardList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['return_reward'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
elseif($_A['query_type']=="return_rewardview"){//�ؿ���Ͷ�������
	if(isset($_POST['id'])){
		if(strtolower($_POST['valicode']) != $_SESSION['valicode']){
			$msg = array("��֤����������");
		}else{
			unset($_SESSION['valicode']);
			$status = $_POST['status']==1?1:5;
			$re = accountClass::ProvideReward(array('id'=>$_POST['id'],'status'=>$status,'remark'=>$_POST['remark'],'verify_user'=>$_G['user_id'],'verify_time'=>time()));
			if($re==true){
				$msg = array("�����ɹ�");
			}else{
				$msg = array("����ʧ��");
			}
		}
	}else{
		$id = $_GET['id'];
		if($id<1){
			$msg = array("���������벻Ҫ�Ҳ���");
		}else{
			$_A['return_rewardview'] = $mysql->db_fetch_array('select p1.*,p2.username from {returned_reward} as p1 left join {user} as p2 on p1.user_id=p2.user_id where id='.$id);
		}
	}
}
elseif($_A['query_type']=="return_account"){//�ؿ���Ͷ�˻��鿴
	$data['page'] = isset($_GET['page'])?$_GET['page']:$_A['page'];
	$data['epage'] = isset($_GET['epage'])?$_GET['epage']:$_A['epage'];
	if(isset($_GET['username']) && $_GET['username']!=''){
		$data['username'] = $_GET['username'];
	}
	$result = accountClass::GetReturnAccountList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['return_account'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
elseif($_A['query_type']=="return_log"){//�ؿ���Ͷ��־
	$data['page'] = isset($_GET['page'])?$_GET['page']:$_A['page'];
	$data['epage'] = isset($_GET['epage'])?$_GET['epage']:$_A['epage'];
	if(isset($_GET['username']) && $_GET['username']!=''){
		$data['username'] = $_GET['username'];
	}
	$result = accountClass::GetReturnLog($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['return_log'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
//��ֹ�Ҳ���
else{
	$msg = array("���������벻Ҫ�Ҳ���");
}
?>