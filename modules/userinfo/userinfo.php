<?
if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���
check_rank("userinfo_".$_A['query_type']);//���Ȩ��

include_once("userinfo.class.php");

$_A['list_purview'] =  array("userinfo"=>array("�û���Ϣ����"=>array("userinfo_list"=>"��Ϣ�б�","userinfo_new"=>"�����Ϣ","userinfo_edit"=>"�༭��Ϣ","userinfo_del"=>"ɾ����Ϣ","userinfo_view"=>"�鿴��Ϣ")));//Ȩ��
$_A['list_name'] = $_A['module_result']['name'];
$_A['list_menu'] = "<a href='{$_A['query_url']}{$_A['site_url']}'>��Ϣ�б�</a> - <a href='{$_A['query_url']}/new{$_A['site_url']}'>�����Ϣ</a>   - <a href='{$_A['query_url']}/log{$_A['site_url']}'>��Ϣ��ʷ��¼</a>  ";
/**
 * �������Ϊ�յĻ�����ʾ���е��ļ��б�
**/
if ($_A['query_type'] == "list"){
	$_A['list_title'] = "��Ϣ�б�";
	if (isset($_GET['username'])){
		$data['username'] = $_GET['username'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = userinfoClass::GetList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['userinfo_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	
	}else{
		$msg = array($result);
	}
}
/**
 * �û������޸�
**/
elseif ($_A['query_type'] == "new"){
	$_A['list_title'] = "������Ϣ";
	//��ȡ�û�id����Ϣ
	if ($_A['query_type'] == "new" && $_GET['id']=="" && isset($_POST['user_id'])){
		if(isset($_POST['user_id']) && $_POST['user_id']!=""){
			$data['user_id'] = $_POST['user_id'];
			$result = userClass::GetOne($data);
		}elseif(isset($_POST['username']) && $_POST['username']!=""){
			$data['username'] = $_POST['username'];
			$result = userClass::GetOne($data);
		}
		if ($result==false){
			$msg = array("�Ҳ������û�");
		}else{
			echo "<script>location.href='".$_A['query_url']."/new&id={$result['user_id']}&a={$_GET['a']}'</script>";
		}
	}elseif($_GET['id']!="" && !isset($_POST['user_id'])){
		$data['user_id'] = $_GET['id'];
		$result = userClass::GetOne($data);
		if ($result==false){
			$msg = array("������������","",$_A['query_url']);
		}else{
			$result = userinfoClass::GetOne($data);
			$_A['userinfo_result'] = $result;
		}
	}elseif (isset($_POST['user_id'])){
		$var = array("user_id","marry","child","education","income","shebao","shebaoid","housing","car","late","house_address","house_area","house_year","house_status","house_holder1","house_holder2","house_right1","house_right2","house_loanyear","house_loanprice","house_balance","house_bank","company_name","company_type","company_industry","company_office","company_jibie","company_worktime1","company_worktime2","company_workyear","company_tel","company_address","company_weburl","company_reamrk","private_type","private_date","private_place","private_rent","private_term","private_taxid","private_commerceid","private_income","private_employee","finance_repayment","finance_property","finance_amount","finance_car","finance_caramount","finance_creditcard","mate_name","mate_salary","mate_phone","mate_tel","mate_type","mate_office","mate_address","mate_income","education_record","education_school","education_study","education_time1","education_time2","tel","phone","post","address","province","city","area","linkman1","relation1","tel1","phone1","linkman2","relation2","tel2","phone2","linkman3","relation3","tel3","phone3","msn","qq","wangwang","ability","interest","others","experience");
		$data = post_var($var);
		$result = userinfoClass::GetOne(array("user_id"=>$_POST['user_id']));
		if ($result == "false"){
			$result = userinfoClass::Add($data);
		}else{
			$result = userinfoClass::Update($data);
		}
		if ($result !== true){
			$msg = array($result);
		}else{
			$msg = array("�����ɹ�");
		}
		$user->add_log($_log,$result);//��¼����
	}elseif($_A['query_type'] == "edit"){
		$data['id'] = $_GET['id'];
		$result = userinfoClass::GetOne($data);
		if (is_array($result)){
			$_A['userinfo_result'] = $result;
		}else{
			$msg = array($result);
		}
	}else{
		$msg = array("���û�δ�ύ�κ�����");
	}
}
/*
 * �鿴��ʹ����֤��
 */
elseif($_A['query_type']=="code"){
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	if(isset($_GET['itype'])){
		$data['itype'] = $_GET['itype'];
	}
	if(isset($_GET['isuse'])){
		$data['isuse'] = $_GET['isuse'];
	}
	if(isset($_GET['iscanuse'])){
		$data['iscanuse'] = $_GET['iscanuse'];
	}
	if(isset($_GET['username'])){
		$data['username'] = $_GET['username'];
	}
	if(isset($_GET['phone'])){
		$data['phone'] = $_GET['phone'];
	}
	$result = userinfoClass::getCode($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['code_result'] = $result['list'];
		$magic->assign("time",time());
		$_A['showpage'] = $pages->show(3);
	}
}
/*
 * ����վ����
 */
elseif($_A['query_type']=="send_message"){
	if(isset($_POST['title'])){
		$title = $_POST['title'];
		$content = $_POST['content'];
		$username = $_POST['username'];
		if($username==""){
			$msg = array("�û�������Ϊ��");
		}elseif($title==""){
			$msg = array("���ⲻ��Ϊ��");
		}elseif($content==""){
			$msg = array("���ݲ���Ϊ��");
		}else{
			$username = explode(";", $username);
			$in = "";
			for($i=0; $i<count($username); $i++){
				$in .= $in==""?"'".$username[$i]."'":",'".$username[$i]."'";
			}
			$sql = "select user_id from `{user}` where username in($in)";
			$result = $mysql->db_fetch_arrays($sql);
			if(count($result,0)!=count($username)){
				$msg = array("�û�������");
			}else{
				require_once ROOT_PATH.'modules/message/message.class.php';
				foreach($result as $value){
					$remind['sent_user'] = "0";
					$remind['receive_user'] = $value['user_id'];
					$remind['name'] = $title;
					$remind['content'] = $content;
					$remind['type'] = "system";
					$remind['status'] = 0;
					$re = messageClass::Add($remind);
				}
				$msg = array("���ͳɹ�");
			}
		}
	}
}
/*
 * ���Ͷ���
 */
elseif($_A['query_type']=="send_phone"){
	if(isset($_POST['phone'])){
		if($_POST['phone']=="" || !is_numeric($_POST['phone'])){
			$msg = array("�ֻ����벻��ȷ");
		}elseif($_POST['content']==""){
			$msg = array("���ݲ���Ϊ��");
		}else{
			$re = sendSMS(0,$_POST['content'],1,$_POST['phone']);
			if($re==false){
				$msg = array("����ʧ��");
			}else{
				$msg = array("���ͳɹ�");
			}
		}
	}
}
/*
 * �����ʼ�
 */
elseif($_A['query_type']=="send_email"){
	if(isset($_POST['username'])){
		$title = $_POST['title'];
		$content = $_POST['content'];
		$username = $_POST['username'];
		if($username==""){
			$msg = array("�û�������Ϊ��");
		}elseif($title==""){
			$msg = array("���ⲻ��Ϊ��");
		}elseif($content==""){
			$msg = array("���ݲ���Ϊ��");
		}else{
			$username = explode(";", $username);
			$in = "";
			for($i=0; $i<count($username); $i++){
				$in .= $in==""?"'".$username[$i]."'":",'".$username[$i]."'";
			}
			$sql = "select user_id,email from `{user}` where username in($in)";
			$result = $mysql->db_fetch_arrays($sql);
			if(count($result,0)!=count($username)){
				$msg = array("�û�������");
			}else{
				foreach($result as $value){
					$remail['user_id'] = $value['user_id'];
					$remail['email'] = $value['email'];
					$remail['title'] = $title;
					$remail['msg'] =  $content;
					$remail['type'] =  "system";
					$re = $user->SendEmail($remail);
					if($re==false){
						$msg = array("����ʧ��");
					}else{
						$msg = array("���ͳɹ�");
					}
				}
			}
		}
	}
}
/**
 * ɾ��
**/
/*
elseif ($_A['query_type'] == "del"){
	$data['id'] = $_REQUEST['id'];
	$result = userinfoClass::Delete($data);
	if ($result !== true){
		$msg = array($result);
	}else{
		$msg = array("ɾ���ɹ�");
	}
	$user->add_log($_log,$result);//��¼����
}
*/
//��ֹ�Ҳ���
else{
	$msg = array("���������벻Ҫ�Ҳ���");
}
?>