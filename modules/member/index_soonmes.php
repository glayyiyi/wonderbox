<?php
if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

$_U = array();//�û��Ĺ�ͬ���ñ���

//�û�����ģ�����������
$magic->left_tag = "{";
$magic->right_tag = "}";
//$magic->force_compile = true;
$temlate_dir = "themes/soonmes_member";
$magic->template_dir = $temlate_dir;
$magic->assign("tpldir",$temlate_dir);


//�û����ĵĹ����ַ
$member_url = "index.php?".$_G['query_site'];
$_U['member_url'] = $member_url;

//ģ�飬��ҳ��ÿҳ��ʾ����
$_U['page'] = empty($_REQUEST['page'])?"1":$_REQUEST['page'];//��ҳ
$_U['epage'] = empty($_REQUEST['epage'])?"10":$_REQUEST['epage'];//��ҳ��ÿһҳ

//�Ե�ַ�����й���
$q = empty($_REQUEST['q'])?"":urldecode($_REQUEST['q']);//��ȡ����
$_q = explode("/",$q);
$_U['query'] = $q;
$_U['query_sort'] = empty($_q[0])?"main":$_q[0];
$_U['query_class'] = empty($_q[1])?"list":$_q[1];
$_U['query_type'] = empty($_q[2])?"list":$_q[2];
$_U['query_url'] = $_U['member_url']."&q={$_U['query_sort']}/{$_U['query_class']}";

 $_U['user_reg_key'] = "asdfaswerwer";

//���ַ��õ�����,�Ƚ����������
$_U["account_cash_status"] = 1;
function GetCashFee($account){
	if ($account <= 30000){
		return 3;
	}else{
		return 5;
	}
}

if ($_U['query_sort'] == "going"){
	# ����û����Ƿ�ע��
	if ($_U['query_class'] == 'check_username'){
		$username = $_REQUEST['username'];
		$username=urldecode($username);
		$username = iconv("UTF-8","GBK",$username);
		//add by weego for http safe
		$username=safegl($username);
                
		$sql = "select * from {user} where `username`='{$username}'";
		$result = $mysql->db_fetch_array($sql);
		//echo $sql."fffd";exit;

		if ($result == false){
			echo true;exit;
		}else{
			echo false;exit;
		}
	}

	# ��������Ƿ�ע��
	elseif ($_U['query_class'] == 'check_email'){
		$email = urldecode($_REQUEST['email']);
		//add by weego for http safe
		$email=safegl($email);
		$sql = "select * from {user} where email='{$email}'";
		$result = $mysql->db_fetch_array($sql);
	
		if ($result == false){
			echo true;exit;
		}else{
			echo false;exit;
		}
	}


	# ��¼ҳ��
	elseif ($_U['query_class'] == 'login'){
		$index['superadmin'] = false;
		if (isset($_G['open_connet']['type'])&&!isset($_REQUEST['username'])){
	
			//���õ�������¼��
			include("connect.php"); 
			 
		}else{
			//��վ�˻���¼
			include("login.php");
		 
		}
	}
	

	# �˳�ҳ��
	elseif ($_U['query_class'] == 'logout'){
		include("logout.php");
	}
	

	# �û�ע��ҳ��
	elseif ($_U['query_class'] == 'getreg'){
 		if (isset($_G['open_connet']['type'])&&!isset($_REQUEST['username'])){
	
			//���õ�������¼��
			include("connect.php"); 
			 
		}else{
			//��վ�˻���¼
			include("reg.php");
		 
		}
		
	}
	
	# ���ͼ����ʼ�
	elseif ($_U['query_class'] == 'reg_email'){
	
		if ($_G['user_id']==""){
			header('location:index.action?user&q=going/login');
		}
		if (isset($_GET['jump']) && $_GET['jump'] == "phone"){
			$_SESSION['reg_step'] = "reg_phone";
			$template = 'user_reg_phone.html.php';
		}elseif (isset($_GET['jump']) && $_GET['jump'] == "true"){
			$_SESSION['reg_step'] = "reg_avatar";
		}
		if ($_SESSION['reg_step']=="reg_info"){
			header('location:index.php?user&q=going/reg_info');
		}elseif ($_SESSION['reg_step']=="reg_avatar"){
			header('location:index.php?user&q=going/reg_avatar');
		}elseif ($_SESSION['reg_step']=="") {
			header('location:index.php?user');
		}else{
			$result = $user->GetOne(array("user_id"=>$_G['user_id']));
			if ($result['email_status']==1||$result['is_phone']==1){
				if ($result['avatar_status']==1){
					$_SESSION['reg_step']="";
					header('location:index.php?user');
					exit;
				}else{
					$_SESSION['reg_step']="reg_avatar";
					header('location:index.php?user&q=going/reg_avatar');
					exit;
				}
			}else{
				$_U['sendemail'] = $result['email'];
				$emailurl = "http://mail.".str_replace("@","",strstr($result['email'],"@"));
				$_U['emailurl'] = $emailurl;
				$template = 'user_reg_email.html.php';
				if (isset($_REQUEST['jump']) && $_REQUEST['jump'] == "phone") $template = 'user_reg_phone.html.php';
			}
		}
	}
	
	# ���ͼ����ʼ�
	elseif ($_U['query_class'] == 'reg_send_email'){
		if ($_G['user_id']==""){
			echo "��������";
		}elseif ($_SESSION['reg_step']=="reg_avatar"){
			header('location:index.php?user&q=going/reg_avatar');
		}elseif ($_SESSION['reg_step']=="" && !isset($_REQUEST['active'])) {
			header('location:index.php?user');
		}else{
			$data['user_id'] = $_G['user_id'];
			$result = $user->GetOne($data);
			if ($result['email_status']==1 && !isset($_REQUEST['active'])){
				if ($result['avatar_status']==1){
					$_SESSION['reg_step']=="";
					header('location:index.php?user');
				}else{
					header('location:index.php?user&q=going/reg_avatar');
				}
			}else{
				$data['email'] = $result['email'];
				$data['username'] = $result['username'];
				$data['webname'] = $_G['system']['con_webname'];
				$data['title'] = $data['webname']."ע���ʼ�ȷ��";
				$data['encryption'] = md5($data['user_id']);
				$data['msg'] = RegEmailMsg($data);
				$data['type'] = "reg";
				if (isset($_SESSION['sendemail_time']) && $_SESSION['sendemail_time']+60*2>time()){
					echo "��2���Ӻ��ٴ�����";
				}else{
					$result = userClass::SendEmail($data);
					if ($result) {
						$mysql->db_query('update {user} set encryption=\''.$data['encryption'].'\',user_status=\'regemail\' where user_id='.$data['user_id']);
						$_SESSION['sendemail_time'] = time();
						echo "���ͳɹ�����鿴����ʼ���Ϣ";
					}else{
						echo "����ʧ�ܣ��������Ա��ϵ";
					}
				}
			}
		}
		exit;
	}
	
	
	# ����
	elseif ($_U['query_class'] == 'active') {
		
		//$id = urldecode($_REQUEST['id']);
		//$_id = explode(",",authcode(trim($id),"DECODE"));
		//$data['user_id'] = $_id[0];
       // $user_id = isset($data['user_id'])?$data['user_id']:'';
		$a = email_ciphertext($_GET['keyid'],'DECODE');
		if(is_array($a)){
			$data['user_id'] = $a[0];
			$user_id = $a[0];
			$end_time = $a[2];
			$mkey = $a[4];
		}else{
			$data['user_id'] = '';
			$user_id = '';
			$end_time = 0;
		}
        if($user_id == ''){
             $msg = array('����ʧ��(��ʾ�������ʹ�õ���QQ���䣬�뽫�������ӿ�����������ĵ�ַ���м���)','','index.php?user&q=reg_email'); 
        }else if(time()>$end_time){
        	$msg = array('�����ѹ���','','index.php?user&q=reg_email');
        }else{
        	$re = $mysql->db_fetch_array('select encryption,user_status from {user} where user_id='.$user_id);
        	if($re['user_status']!='regemail' || $re['encryption']!=$mkey){
        		$msg = array('������ʧЧ�������»�ȡ','','/index.php?user&q=code/user/email_status');
        	}else{
        		require_once("modules/credit/credit.class.php");
        		$data['email_status'] = 1;
        		$data['user_status'] = '';
        		$data['encryption'] = '';
        		$result = $user->ActiveEmail($data);
        		$result = creditClass::GetTypeOne(array("nid"=>"email"));
        		$_A['arrestation_value'] = $result['value'];
        		$_A['credit_type_id'] = $result['id'];
        		$_A['credit_type_name'] = $result['name'];
        		$credit['nid'] = "email";
        		$credit['user_id'] = $data['user_id'];
        		$credit['value'] = $result['value'];
        		$credit['op_user'] = 0;
        		$credit['op'] = 1;//����
        		$credit['type_id'] = $result['id'];
        		$credit['remark'] = "������֤�ɹ�";
        		creditClass::UpdateCredit($credit);//���»���
        		if ($result!=false) {
        			$msg = array('���伤��ɹ�,�뷵�����µ�½','','index.php?user');
        		}else{
        			$msg = array('����ʧ��','','index.php?user&q=reg_email');
        		}
        	}
        }
	}
	
	# ͷ��
	elseif ($_U['query_class'] == 'reg_avatar') {
		if($_G['user_id']==""){
			header('location:index.action?user&q=going/login');
			exit;
		}
		if (isset($_REQUEST['jump']) && $_REQUEST['jump'] == "true"){
			$_SESSION['reg_step'] = "";
		}
		
		if (isset($_SESSION['reg_step']) && $_SESSION['reg_step']=="reg_email"){
			header('location:index.php?user&q=going/reg_email');
			exit;
		}elseif ($_SESSION['reg_step']=="" ) {
			header('location:index.php?user');
			exit;
		}else{
			error_reporting(0);
			$data['user_id'] = $_G['user_id'];
			$data['istrue'] = true;
			if (get_avatar($data)){
				$user->ActiveAvatar($data);
				$_SESSION['reg_step'] = "";
				header('location:index.php?user');
				exit;
			}else{
				$template = 'user_reg_avatar.html.php';
			}
		}
	}
	
	# ȡ������ҳ��
	elseif ($_U['query_class'] == 'getpwd'){
		include_once("getpwd.php");
	}
	
	# �����޸�����
	elseif ($_U['query_class'] == 'updatepwd'){
		$updatepwd_msg = "";
		if(isset($_GET['keyid'])){
			$a = email_ciphertext($_GET['keyid'],'DECODE');
			if(is_array($a)){
				$user_id = $a[0];
				$end_time = $a[2];
				$mkey = $a[4];
			}else{
				$user_id = '';
				$end_time = 0;
			}
			//$id = urldecode($_REQUEST['id']);
			//$data = explode(",",authcode(trim($id),"DECODE"));
			//$user_id = $data[0];
			//$start_time = $data[1];
			if ($user_id==""){
				$updatepwd_msg = "���Ĳ������������Ҳ���";
			}elseif (time()>$end_time){
				$updatepwd_msg = "�������Ѿ����ڣ�����������";
			}else{
				$result = $mysql->db_fetch_array('select username from {user} where user_id='.intval($user_id).' and user_status=\'getpassword\' and encryption=\''.$mkey.'\'');
				//$result = $user->GetOne(array("user_id"=>$user_id));
				if ($result == false){
					$updatepwd_msg = "���Ĳ������������Ҳ���";
				}else{
					$_U['user_result'] =  $result;
				}
			}
		}else{
			$updatepwd_msg = "���Ĳ������������Ҳ���";
		}
		if(isset($_POST['password']) && $updatepwd_msg=="" ){
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];
			if ($password==""){
				$update_msg = "�����벻��Ϊ��";
			}elseif ( strlen($password)<6 || strlen($password)>15){
				$update_msg = "����ĳ�����6��15λ֮��";
			}elseif ($password != $confirm_password){
				$update_msg = "�������벻һ��";
			}else{
				$index['user_id'] = $user_id;
				$index['password'] = $password;

				$user_result = $mysql->db_select("user","user_id=".$user_id,"username");
				$lt = 1;
				if($rdGlobal['uc_on']==true){
					$lt = 0;
					require_once ROOT_PATH . '/core/config_ucenter.php';
					require_once ROOT_PATH . '/uc_client/client.php';
					$ucresult = uc_user_edit($user_result['username'], '', $_POST['password'], '', 1);
					if ($ucresult == -1) {
						$msg = array("�����벻��ȷ,��ʹ����̳�ĵ�¼����","",$url);
					} elseif ($ucresult == -4) {
						$msg = array("Email ��ʽ����","",$url);
					} elseif ($ucresult == -5) {
						$msg = array("Email ������ע��","",$url);
					} elseif ($ucresult == -6) {
						$msg = array("�� Email �Ѿ���ע��","",$url);
					}else{
						$lt = 1;
					}
				}
				if($lt == 1){
					$index['user_status'] = '';
					$index['encryption'] = '';
					$result = $user->UpdateUser($index);
					if ($result==false){
						$update_msg = "���Ĳ������������Ҳ���";
					}else{
						$updatepwd_msg = "�����޸ĳɹ���";
					}
				}
			}
		}
		$_U['update_msg'] = $update_msg;
		$_U['updatepwd_msg'] = $updatepwd_msg;
		$template = 'user_updatepwd.html.php';
		
	}
	# �����ʾ
	elseif ($_U['query_class'] == 'check'){
		echo "<br>";
		if ($_G['user_result']['real_status']==0){
			echo "�㻹û��ͨ������ʵ����֤<br><br><br>";
			echo "<a href='/index.php?user&q=code/user/realname'>����ʵ����֤</a>";
		}
		exit;
	}
	
	#�������ע��	
	elseif ($_U['query_class'] == "reginvite"){	
		//$_user_id = Url2Key($_REQUEST['u'],"reg_invite");
		$key = urldecode($_GET['u']);
		//By Glay
		//$key = explode(",",authcode(trim($key),"DECODE"));
		//$key = base64_decode ($key[0]);
		//$_user_id = explode ("reg_invite", $key );
		
		$_user_id = $key;

		
		//$_SESSION['reginvite_user_id'] = intval($_user_id[1]);
		//$_SESSION['reginvite_user_id'] = $_user_id[1];
		
		$_SESSION['reginvite_user_id'] = $_user_id;
		if(intval($_user_id)>0){
			$sql = "select username from {user} where `user_id`={intval($_user_id)}";
			$result = $mysql->db_fetch_array($sql);
			$_SESSION['reginvite_user_Name'] = $result["username"];
		}    
		header('location:index.php?user&q=going/getreg');
	}
	
# �û����Ĵ������ݵĵط�	
}elseif ($_U['query_sort'] == "code"){
	if  (!isset($_G['user_id']) || $_G['user_id']==""){
			header('location:index.action?user&q=going/login');
	}
	if (is_file(ROOT_PATH."/modules/{$_U['query_class']}/{$_U['query_class']}.inc.php")){
		include(ROOT_PATH."/modules/{$_U['query_class']}/{$_U['query_class']}.inc.php");
	}else{
		$msg = array("���������������Ҳ���");
	}


}
else{

	if (isset($_SESSION['reg_step']) && $_SESSION['reg_step']=="reg_email"){
		header('location:index.php?user&q=going/reg_email');
		exit;
	}elseif (isset($_SESSION['reg_step']) && $_SESSION['reg_step']=="reg_avatar"){
		header('location:index.php?user&q=going/reg_avatar');
		exit;
	}
	//$_U['user_cache'] = userClass::GetUserCache(array("user_id"=>$_G['user_id']));//�û�����
	
	
	//����Ϣ����
	include_once(ROOT_PATH."/modules/message/message.class.php");
	$_message = messageClass::GetCount(array("user_id"=>$_G['user_id'],"status"=>0,"deltype"=>0));
	$_U['user_cache']['message'] =$_message['num']; 
	
	
	//����������
	$_friends_apply = userClass::GetFriendsRCount(array("user_id"=>$_G['user_id'],"status"=>0));
	$_U['user_cache']['friends_apply'] =$_friends_apply['num']; 
	
	
	# ����û�û�е�¼����ת��
	
	if ($_G['user_id'] == "" ){
		header('location:index.action?user&q=going/login');
	}
	
	$template = "user_main.html.php";
}

//ϵͳ��Ϣ�����ļ�
if (isset($msg) && $msg!="") {
	$_msg = $msg[0];
	$content = empty($msg[1])?"������һҳ":$msg[1];
	$url = empty($msg[2])?"-1":$msg[2];
	$http_referer = empty($_SERVER['HTTP_REFERER'])?"":$_SERVER['HTTP_REFERER'];
	if ($http_referer == "" && $url == ""){ $url = "/";}
	if ($url == "-1") $url = "";
	elseif ($url == "" ) $url = $http_referer;
	$_U['showmsg'] = array('msg'=>$_msg,"url"=>$url,"content"=>$content);
	$template = "user_msg.html.php";
}

function set_session($data = array()){
	$_SESSION['username'] = isset($data['username'])?$data['username']:"";
	$_SESSION['uc_user_id'] = isset($data['uc_user_id'])?$data['uc_user_id']:"";
	$_SESSION['user_typeid'] = isset($data['user_typeid'])?$data['user_typeid']:"";
	$_SESSION['usertime'] = time();
	$_SESSION['usertype'] = 0;
}
$magic->assign("_U",$_U);
$magic->display($template);
exit;	
?>