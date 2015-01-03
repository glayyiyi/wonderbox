<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<?php
/**
 * 开户调用接口
 */
require_once("lib/Chinapnr.class.php");
$chinapnr= Chinapnr::getInstance();
$merCustId='6000060000273476';
$usrCustId='6000060000579066';
$charSet='GBK';
$weburl = "http://".$_SERVER['SERVER_NAME'];

//=======登陆接口
//$chinapnr->userLogin($merCustId, $usrCustId);

//=======查询子账户接口
//$result= $chinapnr->queryAccts("6000060000273476");

//=======后台开户接口
//$result= $chinapnr->bgRegister($merCustId,"6000060000273476_8","glay8","glay8.123","glay8.123","","","11111111118","","","");

//=======普通开户接口
$bgRetUrl=$weburl.'/chinapnr_return.php';
$retUrl=$weburl.'/chinapnr_return.php';
$usrId = $_COOKIE['login_username'];
$merPriv=$_COOKIE['login_uid'];
$chinapnr->userRegister($merCustId, $bgRetUrl, $retUrl, $usrId, $usrName, $idType, $idNo, $usrMp, $usrEmail, $merPriv, $charSet);


//=======后台绑卡
//$openAcctId='436742666666666666666666';
//$openBankId='CCB';
//$openProvId='0044';
//$openAreaId='4401';
//$isDefault='Y';
//$result= $chinapnr->bgBindCard($merCustId,$usrCustId,$openAcctId,$openBankId,$openProvId,$openAreaId,$openBranchName,$isDefault,$merPriv,$charSet);


//=======扣款转账（商户用）
// $ordId='00000000000000000001';
// $outCustId='6000060000579066';
// $transAmt='0.10';
// $outAcctId='000000001';//用户在汇付的虚拟资金账户号
// $bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
// $inCustId='6000060000579067';
// $result= $chinapnr->transfer($ordId,$outCustId,$outAcctId,$transAmt,$inCustId,$inAcctId,$retUrl ,$bgRetUrl,$merPriv);


//=======商家代取现接口
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr-> merCash($merCustId,$ordId,$usrCustId,$transAmt,$servFee,$servFeeAcctId ,$retUrl ,$bgRetUrl,$remark,$charSet,$merPriv,$reqExt);







//=======网银充值
//$gateBusiId='B2C';
//$transAmt='0.10';
//$ordId='00000000000000000001';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$ordDate='20141202';
//$result= $chinapnr->netSave($merCustId,$usrCustId,$ordId,$ordDate,$gateBusiId,$openBankId,$dcFlag,$transAmt,$retUrl,$bgRetUrl,$merPriv);

//=======商户无卡代扣充值
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->posWhSave($merCustId,$usrCustId,$openAcctId,$transAmt,$ordId,$ordDate,$checkDate,$retUrl,$bgRetUrl,$merPriv);


//=======自动扣款（放款）,后台数据流方式
// $ordId='00000000000000000001';
// $ordDate='20141202';
// $outCustId='6000060000579066';
// $transAmt='0.10';
// $fee='0.00';
// $inCustId='6000060000579067';
// $subOrdId='00000000000000000002';
// $subOrdDate='20141202';
// $isDefault="Y";
// $isUnFreeze="N";
// $bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
// $result=$chinapnr->loans($merCustId,$ordId,$ordDate,$outCustId,$transAmt,$fee,$subOrdId,$subOrdDate,$inCustId,$divDetails,$feeObjFlag,$isDefault,$isUnFreeze,$unFreezeOrdId ,$freezeTrxId,$bgRetUrl,$merPriv ,$reqExt);




//=======自动扣款（还款）,后台数据流方式
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$outCustId='6000060000579066';
//$transAmt='0.10';
//$fee='0.00';
//$inCustId='6000060000579067';
//$subOrdId='00000000000000000002';
//$subOrdDate='20141202';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->repayment($merCustId,$ordId,$ordDate,$outCustId,$subOrdId,$subOrdDate,$outAcctId,$transAmt,$fee,$inCustId,$inAcctId ,$divDetails,$feeObjFlag,$bgRetUrl,$merPriv,$reqExt );



//=======usrFreezeBg 资金（货款）冻结
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->usrFreezeBg($merCustId,$usrCustId,$subAcctType,$subAcctId,$ordId,$ordDate,$transAmt,$retUrl,$bgRetUrl,$merPriv );

//=======usrUnFreeze 资金（货款）解冻
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$trxId='201412020000000001';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->usrUnFreeze($merCustId,$ordId,$ordDate,$trxId,$retUrl ,$bgRetUrl,$merPriv);



//var_dump($result);
?>