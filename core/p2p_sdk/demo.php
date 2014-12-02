<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
$charSet='UTF-8';



//1,查询子账户接口测试
//$result= $chinapnr->queryAccts("6000060000273476");

//2,后台开户接口测试
$result= $chinapnr->bgRegister($merCustId,"6000060000273476_8","glay8","glay8.123","glay8.123","","","11111111118","","","");

//3,登陆接口
//$chinapnr->userLogin($merCustId, $usrCustId);

//4,后台绑卡
//$openBankId='CCB';
//$openProvId='0044';
//$openAreaId='4401';
//$isDefault='Y';
//$result= $chinapnr->bgBindCard($merCustId,$usrCustId,$openAcctId,$openBankId,$openProvId,$openAreaId,$openBranchName,$isDefault,$merPriv,$charSet);


//4,网银充值
//$gateBusiId='B2C';
//$transAmt='0.10';
//$ordId='00000000000000000001';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$ordDate='20141202';
//$result= $chinapnr->netSave($merCustId,$usrCustId,$ordId,$ordDate,$gateBusiId,$openBankId,$dcFlag,$transAmt,$retUrl,$bgRetUrl,$merPriv);

//4.1,商户无卡代扣充值
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->posWhSave($merCustId,$usrCustId,$openAcctId,$transAmt,$ordId,$ordDate,$checkDate,$retUrl,$bgRetUrl,$merPriv);


//自动扣款（放款）,后台数据流方式
//$ordId='00000000000000000001';
//$subOrdId='00000000000000000002';
//$subOrdDate='20141202';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$outCustId='6000060000579066';
//$inCustId='6000060000579067';
//$fee='0.00';
//$isDefault="Y";
//$result=$chinapnr->loans($merCustId,$ordId,$ordDate,$outCustId,$transAmt,$fee,$subOrdId,$subOrdDate,$inCustId,$divDetails,$feeObjFlag,$isDefault,$isUnFreeze,$unFreezeOrdId ,$freezeTrxId,$bgRetUrl,$merPriv ,$reqExt);




//自动扣款（还款）,后台数据流方式
//$result=$chinapnr->repayment($merCustId,$ordId,$ordDate,$outCustId,$subOrdId,$subOrdDate,$outAcctId = '',$transAmt,$fee,$inCustId,$inAcctId = '',$divDetails = '',$feeObjFlag,$bgRetUrl,$merPriv = '',$reqExt = '');



//usrFreezeBg 资金（货款）冻结
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->usrFreezeBg($merCustId,$usrCustId,$subAcctType,$subAcctId,$ordId,$ordDate,$transAmt,$retUrl,$bgRetUrl,$merPriv );

//usrUnFreeze 资金（货款）解冻
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$trxId='201412020000000001';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->usrUnFreeze($merCustId,$ordId,$ordDate,$trxId,$retUrl ,$bgRetUrl,$merPriv);

//5,商家代取现接口
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr-> merCash($merCustId,$ordId,$usrCustId,$transAmt,$servFee,$servFeeAcctId ,$retUrl ,$bgRetUrl,$remark,$charSet,$merPriv,$reqExt);

var_dump($result);