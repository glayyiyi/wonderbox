<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
</head>
<body>
<?
header('Content-type:text/html;charset=gbk');


session_cache_limiter('private,must-revalidate');

$_G = array();
//���������ļ�
include ("core/config.inc.php");

//ϵͳ������Ϣ
$system = array();
$system_name = array();
$_system = $mysql->db_selects("system");
foreach ($_system as $key => $value){
	$system[$value['nid']] = $value['value'];
	$system_name[$value['nid']] = $value['name'];
}
$_G['system'] = $system;
$_G['system_name'] = $system_name;


$_G['nowtime'] = time();//���ڵ�ʱ��

$_G['weburl'] = "http://".$_SERVER['SERVER_NAME'];//��ǰ������

require_once("core/p2p_sdk/lib/Chinapnr.class.php");
$chinapnr= Chinapnr::getInstance();
	
var_dump($_REQUEST);




$CmdId = $_REQUEST['CmdId'];			//��Ϣ����

$RespCode = $_REQUEST['RespCode']; 	//Ӧ�𷵻���


if($RespCode=='000'){
	//���óɹ�
	if($CmdId==Chinapnr::CMDID_USER_REGISTER){
		UserRegisterRtn();
			
	}elseif($CmdId==Chinapnr::CMDID_BG_BIND_CARD){
		
	}else{
		
	}
		
}
	
/**
 * �û�ע�᷵�ش���
 * 
 **/
function UserRegisterRtn(){
	global $CmdId,$RespCode,$chinapnr;
	$MerId = $_REQUEST['MerId']; 	 		//�̻���
	$RespCode = $_REQUEST['RespCode']; 	//Ӧ�𷵻���
	$TrxId = $_REQUEST['TrxId'];  			//����Ψһ��ʶ
	$MerPriv = $_REQUEST['MerPriv'];  		//�̻�˽����
	$ChkValue = $_REQUEST['ChkValue']; 	//ǩ����Ϣ
	$MerCustId = $_REQUEST['MerCustId'];
	$UsrId = $_REQUEST['UsrId'];
	$UsrCustId= $_REQUEST['UsrCustId'];
	$BgRetUrl= $_REQUEST['BgRetUrl'];
	$RetUrl= $_REQUEST['RetUrl'];
	$UsrName=$_REQUEST['UsrName'];
	$UsrEmail=$_REQUEST['UsrEmail'];
	$IdNo =$_REQUEST['IdNo'];
	$UsrMp=$_REQUEST['UsrMp'];
	
	$originStr = $CmdId.$RespCode.$MerCustId.$UsrId.$UsrCustId.$BgRetUrl.$TrxId.$RetUrl.$MerPriv;
	$chkResult = $chinapnr->verify($originStr,$ChkValue);
	if($chkResult=='000'){
		//��֤������ȷ��ִ��ע�����			
		$index['t_UsrId']=$UsrId;
		$index['realname']=iconv("UTF-8","GBK",urldecode($UsrName));
		$index['email']=$UsrEmail;
		$index['card_id']=$IdNo;
		$index['phone']=$UsrMp;
		$index['user_id']=$MerPriv;
		$index['t_UsrCustId']=$UsrCustId;		
		//print_r($index);
		$result = userClass::UpdateUser($index);
	
		if($result){
			//���سɹ�
			echo "<script>alert('�������й��˻���ͨ�ɹ���');location.href='index.php?user';</script>";		
		}
	}else{
		echo "��֤ʧ��!";
	}
}
exit();
?>
</body>
</html>