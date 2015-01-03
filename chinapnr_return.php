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
//基本配置文件
include ("core/config.inc.php");

//系统基本信息
$system = array();
$system_name = array();
$_system = $mysql->db_selects("system");
foreach ($_system as $key => $value){
	$system[$value['nid']] = $value['value'];
	$system_name[$value['nid']] = $value['name'];
}
$_G['system'] = $system;
$_G['system_name'] = $system_name;


$_G['nowtime'] = time();//现在的时间

$_G['weburl'] = "http://".$_SERVER['SERVER_NAME'];//当前的域名

require_once("core/p2p_sdk/lib/Chinapnr.class.php");
$chinapnr= Chinapnr::getInstance();
	
var_dump($_REQUEST);




$CmdId = $_REQUEST['CmdId'];			//消息类型

$RespCode = $_REQUEST['RespCode']; 	//应答返回码


if($RespCode=='000'){
	//调用成功
	if($CmdId==Chinapnr::CMDID_USER_REGISTER){
		UserRegisterRtn();
			
	}elseif($CmdId==Chinapnr::CMDID_BG_BIND_CARD){
		
	}else{
		
	}
		
}
	
/**
 * 用户注册返回处理
 * 
 **/
function UserRegisterRtn(){
	global $CmdId,$RespCode,$chinapnr;
	$MerId = $_REQUEST['MerId']; 	 		//商户号
	$RespCode = $_REQUEST['RespCode']; 	//应答返回码
	$TrxId = $_REQUEST['TrxId'];  			//交易唯一标识
	$MerPriv = $_REQUEST['MerPriv'];  		//商户私有域
	$ChkValue = $_REQUEST['ChkValue']; 	//签名信息
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
		//验证链接正确则执行注册入库			
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
			//返回成功
			echo "<script>alert('第三方托管账户开通成功！');location.href='index.php?user';</script>";		
		}
	}else{
		echo "验证失败!";
	}
}
exit();
?>
</body>
</html>