<?
if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���
if(isset($_POST['email'])){
	$getpwd_msg = "";
	$var = array("email","username","valicode");
	$data = post_var($var);
	if ($data['email']==""){
		$getpwd_msg = "�����ַ����Ϊ��";
	}elseif ($data['username']==""){
		$getpwd_msg = "�û�������Ϊ��";
	}elseif ($data['valicode']==""){
		$getpwd_msg = "��֤�벻��Ϊ��";
	}elseif ($data['valicode']!=$_SESSION['valicode']){
		$getpwd_msg = "��֤�벻��ȷ";
	}else{
		$result = $user->GetOne($data);
		if ($result==false){
			$getpwd_msg = "���䣬�û�����Ӧ����ȷ";
		}else{
			$data['user_id'] = $result['user_id'];
			$data['email'] = $result['email'];
			$data['username'] = $result['username'];
			$data['webname'] = $_G['system']['con_webname'];
			$data['title'] = "�û�ȡ������";
			$data['encryption'] = md5($data['user_id']);
			$data['msg'] = GetpwdMsg($data);
			$data['type'] = "reg";
			if (isset($_SESSION['sendemail_time']) && $_SESSION['sendemail_time']+60*2>time()){
				$getpwd_msg =  "��2���Ӻ��ٴ�����";
			}else{
				$result = userClass::SendEmail($data);
				if ($result) {
					$mysql->db_query('update {user} set encryption=\''.$data['encryption'].'\',user_status=\'getpassword\' where user_id='.$data['user_id']);
					$_SESSION['sendemail_time'] = time();
					$getpwd_msg =  "��Ϣ�ѷ��͵�{$data['email']}����ע�������������ʼ�";
					echo "<script>alert('{$getpwd_msg}');location.href='/'</script>";
				}
				else{
					$getpwd_msg =  "����ʧ�ܣ��������Ա��ϵ";
				}
			}
		}
	}
	$_U['getpwd_msg'] = $getpwd_msg;
}
$title = 'ȡ������';
$template = 'user_getpwd.html.php';
?>