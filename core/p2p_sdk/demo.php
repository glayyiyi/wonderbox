<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<?php
/**
 * �ӿڵ���ʾ��
 *
 *************************ע��*************************
 * ���ļ������Ǹ���ʵ��ҳ���չʾ��ͳһ����Chinpnr ����װ�Ľӿڷ��������ؽ��չʾ��ʹ���ߡ�
 * Ŀ����Ϊ�û����Ͳ���Chinapnr���ṩ�ĸ���ҵ��ӿڡ�
 *
 */
require_once("lib/Chinapnr.class.php");
$chinapnr= Chinapnr::getInstance();
$merCustId='6000060000273476';
$usrCustId='6000060000710761';
$charSet='GBK';
$weburl = "http://".$_SERVER['SERVER_NAME'];
$bgRetUrl='http://dev.wonderbox.com/chinapnr_return.php';
$retUrl='http://dev.wonderbox.com/chinapnr_return.php';

//=======
//$chinapnr->userLogin($merCustId, $usrCustId);

//======
//$result= $chinapnr->queryAccts("6000060000273476");

//=======
//$result= $chinapnr->bgRegister($merCustId,"6000060000273476_8","glay8","glay8.123","glay8.123","","","11111111118","","","");

//=======
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$chinapnr->userRegister($merCustId, $bgRetUrl, $retUrl, $usrId, $usrName, $idType, $idNo, $usrMp, $usrEmail, $merPriv, $charSet);


//=======
//$openAcctId='436742666666666666666666';
//$openBankId='CCB';
//$openProvId='0044';
//$openAreaId='4401';
//$isDefault='Y';
//$result= $chinapnr->bgBindCard($merCustId,$usrCustId,$openAcctId,$openBankId,$openProvId,$openAreaId,$openBranchName,$isDefault,$merPriv,$charSet);


//=======
// $ordId='00000000000000000001';
// $outCustId='6000060000579066';
// $transAmt='0.10';
// $outAcctId='000000001';
// $bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
// $inCustId='6000060000579067';
// $result= $chinapnr->transfer($ordId,$outCustId,$outAcctId,$transAmt,$inCustId,$inAcctId,$retUrl ,$bgRetUrl,$merPriv);


//=======
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr-> merCash($merCustId,$ordId,$usrCustId,$transAmt,$servFee,$servFeeAcctId ,$retUrl ,$bgRetUrl,$remark,$charSet,$merPriv,$reqExt);

//=======
//$gateBusiId='B2C';
//$transAmt='0.10';
//$ordId='00000000000000000001';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$ordDate='20141202';
//$result= $chinapnr->netSave($merCustId,$usrCustId,$ordId,$ordDate,$gateBusiId,$openBankId,$dcFlag,$transAmt,$retUrl,$bgRetUrl,$merPriv);

//=======
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->posWhSave($merCustId,$usrCustId,$openAcctId,$transAmt,$ordId,$ordDate,$checkDate,$retUrl,$bgRetUrl,$merPriv);


//=======
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




//======
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



//=======usrFreezeBg 
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->usrFreezeBg($merCustId,$usrCustId,$subAcctType,$subAcctId,$ordId,$ordDate,$transAmt,$retUrl,$bgRetUrl,$merPriv );

//=======usrUnFreeze 
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$trxId='201412020000000001';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->usrUnFreeze($merCustId,$ordId,$ordDate,$trxId,$retUrl ,$bgRetUrl,$merPriv);




//=======��½�ӿ�
//$chinapnr->userLogin($merCustId, $usrCustId);

//=======��ѯ���˻��ӿ�
//$result= $chinapnr->queryAccts("6000060000273476");

//=======��̨�����ӿ�
//$result= $chinapnr->bgRegister($merCustId,"6000060000273476_9","glay8","glay8.123","glay8.123","","","11111111119","","","");

//=======��ͨ�����ӿ�
// $bgRetUrl='http://dev.wonderbox.com/chinapnr_return.php';
// $retUrl='http://dev.wonderbox.com/chinapnr_return.php';
// $usrId='angudddd';
// $chinapnr->userRegister($merCustId, $bgRetUrl, $retUrl, $usrId, $usrName, $idType, $idNo, $usrMp, $usrEmail, $merPriv, $charSet);


//=======��̨��
// $openAcctId='436742666666666666666666';
// $openBankId='CCB';
// $openProvId='0044';
// $openAreaId='4401';
// $isDefault='Y';
// $result= $chinapnr->bgBindCard($merCustId,$usrCustId,$openAcctId,$openBankId,$openProvId,$openAreaId,$openBranchName,$isDefault,$merPriv,$charSet);


//=======�ۿ�ת�ˣ��̻��ã�
// $ordId='00000000000000000001';
// $outCustId='6000060000579066';
// $transAmt='0.10';
// $outAcctId='000000001';//�û��ڻ㸶�������ʽ��˻���
// $bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
// $inCustId='6000060000579067';
// $result= $chinapnr->transfer($ordId,$outCustId,$outAcctId,$transAmt,$inCustId,$inAcctId,$retUrl ,$bgRetUrl,$merPriv);


//=======�̼Ҵ�ȡ�ֽӿ�
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr-> merCash($merCustId,$ordId,$usrCustId,$transAmt,$servFee,$servFeeAcctId ,$retUrl ,$bgRetUrl,$remark,$charSet,$merPriv,$reqExt);


//=======������ֵ
// $transAmt='0.10';
// $ordId='00000000000000000102';
// $bgRetUrl='http://dev.wonderbox.com/chinapnr_return.php';
// $retUrl='http://dev.wonderbox.com/chinapnr_return.php';
// $ordDate='20150103';
// $result= $chinapnr->netSave($merCustId,$usrCustId,$ordId,$ordDate,$gateBusiId,$openBankId,$dcFlag,$transAmt,$retUrl,$bgRetUrl,$merPriv);



$ordId='00000000000000000102';
$ordDate='20150111';
$transAmt='0.10';
$maxTenderRate='0.00';
$borrowerDetails=array(array('BorrowerCustId'=>'6000060000273476',		
		'BorrowerAmt'=>'0.10',
		'BorrowerRate'=>'0.00',
		'ProId'=>'6000010000000014')
);
//$borrowerDetails="[{\"BorrowerCustId\":\"6000010000000014\", \"BorrowerAmt\": \"20.01\", \"BorrowerRate\":\"0.18\",\"ProId\":\"6000010000000014\"}, {\"BorrowerCustId\": \"6000010000000014\", \"BorrowerAmt\":\"20.01\", \"BorrowerRate\":\"0.18\",\"ProId\":\"6000010000000015\"}, {\"BorrowerCustId\":\"6000010000000014\", \"BorrowerAmt\": \"20.01\",\"BorrowerRate\": \"0.18\",\"ProId\":\"6000010000000016\"}]";
$isFreeze="Y";
$freezeOrdId="00000000000000010001";
$result= $chinapnr->initiativeTender($merCustId,$ordId,$ordDate,$transAmt,$usrCustId,$maxTenderRate,$borrowerDetails,$isFreeze,$freezeOrdId = '',$retUrl = '',$bgRetUrl,$merPriv,$reqExt = '')

//=======�̻��޿����۳�ֵ
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->posWhSave($merCustId,$usrCustId,$openAcctId,$transAmt,$ordId,$ordDate,$checkDate,$retUrl,$bgRetUrl,$merPriv);


//=======�Զ��ۿ�ſ,��̨��������ʽ
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




//=======�Զ��ۿ���,��̨��������ʽ
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



//=======usrFreezeBg �ʽ𣨻������
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$transAmt='0.10';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->usrFreezeBg($merCustId,$usrCustId,$subAcctType,$subAcctId,$ordId,$ordDate,$transAmt,$retUrl,$bgRetUrl,$merPriv );

//=======usrUnFreeze �ʽ𣨻���ⶳ
//$ordId='00000000000000000001';
//$ordDate='20141202';
//$trxId='201412020000000001';
//$bgRetUrl='http://dev.wonderbox.com/modules/payment/chinapnr_return.php';
//$result=$chinapnr->usrUnFreeze($merCustId,$ordId,$ordDate,$trxId,$retUrl ,$bgRetUrl,$merPriv);



//var_dump($result);
?>
