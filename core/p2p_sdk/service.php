<?php
/**
 * 接口调用示例的入口
 * 版本：1.0.0
 * 日期：2012-07-19
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究汇付天下p2p接口使用，只是提供一个参考。
 *
 *************************注意*************************
 * 本文件代码是根据实例页面的展示，统一调用Chinpnr 所封装的接口方法，返回结果展示给使用者。
 * 目的是为用户理解和测试Chinapnr类提供的各种业务接口。
 *
 */
require_once("lib/Chinapnr.class.php");
$chinapnr= Chinapnr::getInstance();
try{
	$method= lcfirst ($_REQUEST['method']);
	$params= $_REQUEST['param'];
	
	$cmd= '$result= $chinapnr->'.$method.'(';
	foreach ($params as $k => $v){
		$cmd.= '"'.$v.'",';
	}
	$cmd= substr($cmd, 0, strlen($cmd)-1);
	$cmd.=');';
	// $cmd likes follow contents:
	//$chinapnr->usrRegister("6000060000002526","111111111");
	//$chinapnr->querySubAccount("6000060000002526");
	//$chinapnr->queryAccountBalance("880001","BASEDT");
	print($cmd);
	eval($cmd);
	print_r($result);
}catch (Exception $e){
	print "demo execute error!";
}
?>

