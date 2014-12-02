<?php
/**
 * 接口调用示例
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
$merCustId='6000060000273476';
$usrCustId='6000060000579066';
$openAcctId='436742666666666666666666';
$openBankId='CCB';
$openProvId='0044';
$openAreaId='4401';
$isDefault='Y';
$charSet='UTF-8';


//1,查询子账户接口测试
//$result= $chinapnr->queryAccts("6000060000273476");

//2,后台客户接口测试
$result= $chinapnr->bgRegister("6000060000273476","6000060000273476_8","glay8","glay8.123","glay8.123","","","11111111118","","","");

//登陆接口
//$chinapnr->userLogin($merCustId, $usrCustId);

//3,后台绑卡
//$result= $chinapnr->bgBindCard($merCustId,$usrCustId,$openAcctId,$openBankId,$openProvId,$openAreaId,$openBranchName,$isDefault,$merPriv,$charSet);
//print_r('bgBindCard('.$merCustId.','.$usrCustId.','.$openAcctId.','.$openBankId.','.$openProvId.','.$openAreaId.','.$openBranchName.','.$isDefault.','.$merPriv.','.$charSet.')');


var_dump($result);