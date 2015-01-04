<?
	
	require_once("../../core/p2p_sdk/lib/Chinapnr.class.php");
	$chinapnr= Chinapnr::getInstance();
	
	var_dump($_REQUEST);
	
	
	$CmdId = $_REQUEST['CmdId'];			//消息类型
	$MerId = $_REQUEST['MerId']; 	 		//商户号
	$RespCode = $_REQUEST['RespCode']; 	//应答返回码
	$TrxId = $_REQUEST['TrxId'];  			//钱管家交易唯一标识
	$OrdAmt = $_REQUEST['OrdAmt']; 		//金额
	$CurCode = $_REQUEST['CurCode']; 		//币种
	$Pid = $_REQUEST['Pid'];  				//商品编号
	$OrdId = $_REQUEST['OrdId'];  			//订单号
	$MerPriv = $_REQUEST['MerPriv'];  		//商户私有域
	$RetType = $_REQUEST['RetType'];  		//返回类型
	$DivDetails = $_REQUEST['DivDetails']; //分账明细
	$GateId = $_REQUEST['GateId'];  		//银行ID
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
		global $CmdId,$RespCode,$MerCustId,$UsrId,$UsrCustId,$BgRetUrl,$TrxId,$RetUrl,$MerPriv,$chinapnr;
		global $UsrName,$UsrEmail,$IdNo,$UsrMp,$ChkValue;
		$originStr = $CmdId.$RespCode.$MerCustId.$UsrId.$UsrCustId.$BgRetUrl.$TrxId.$RetUrl.$MerPriv;
		$chkResult = $chinapnr->verify($originStr,$ChkValue);
		if($chkResult=='000'){
			include_once ('../../core/config.inc.php');			
			$index['username']=$UsrId;
			$index['realname']=iconv('UTF-8','GBK',base64_decode($UsrName));
			$index['email']=$UsrEmail;
			$index['card_id']=$IdNo;
			$index['phone']=$UsrMp;
			$index['password']=$UsrId;
			$index['UsrCustId']=$UsrCustId;
			
			$user_id = $user->AddUser($index);
		
			if($user_id > 0){
				//注册成功
				echo "<script>alert('注册成功');location.href='index.php?user';</script>";		
			}
		}else{
			echo "验证失败!";
		}
	}
	exit();
	
	/*
	//验证签名
	$SignObject = new COM("CHINAPNR.NetpayClient");
	$MsgData = $CmdId.$MerId.$RespCode.$TrxId.$OrdAmt.$CurCode.$Pid.$OrdId.$MerPriv.$RetType.$DivDetails.$GateId;  	//参数顺序不能错
	$MerFile = $_SERVER["DOCUMENT_ROOT"]."/hftx/PgPubk.key";			//商户验签公钥文件
	$SignData = $SignObject->VeriSignMsg0($MerFile,$MsgData,strlen($MsgData),$ChkValue);
	*/

	$fp = fsockopen("127.0.0.1", '8733', $errno, $errstr, 10);
	if (!$fp) {
		echo "$errstr ($errno)<br />\n";
	} else {
		
		$MsgData = $CmdId.$MerId.$RespCode.$TrxId.$OrdAmt.$CurCode.$Pid.$OrdId.$MerPriv.$RetType.$DivDetails.$GateId;
		 
		$MsgData_len =strlen($MsgData);
		if($MsgData_len < 100 ){
			$MsgData_len = '00'.$MsgData_len;
		}
		elseif($MsgData_len < 1000 ){
			$MsgData_len = '0'.$MsgData_len;
		}

		$out = 'V'.$MerId.$MsgData_len.$MsgData.$ChkValue;
		
		$out_len = strlen($out);
		if($out_len < 100 ){
			$out_len = '00'.$out_len;
		}
		elseif($out_len < 1000 ){
			$out_len = '0'.$out_len;
		}
		$out =$out_len.$out;
		

		//echo $MsgData_len;exit;
		//$out = '0021S87052400101234567890';
		fputs($fp, $out);

		$ChkValue ='';
		while (!feof($fp)) {
			$ChkValue .= fgets($fp, 128);
		}
		fclose($fp);
		//echo $ChkValue;
	}

	$SignData = $ChkValue;


	if($SignData == "0011V8727900000"){	
		//510010改为商户号
	//if($SignData == "0"){
		if($RespCode == "000000"){
			//交易成功
			//根据订单号 进行相应业务操作
			//在些插入代码
			//支付成功
			//商户系统的逻辑处理（例如判断金额，判断支付状态(20成功,30失败),更新订单状态等等）......
// 			require_once ('../../core/config.inc.php');
// 			require_once (ROOT_PATH.'modules/account/account.class.php');
// 			require_once (ROOT_PATH.'modules/payment/payment.class.php');
// 			$file = $cachepath['pay'].$OrdId;
// 			$fp = fopen($file , 'w+');
// 			@chmod($file, 0777);
// 			if(flock($fp , LOCK_EX | LOCK_NB)){    //设定模式独占锁定和不堵塞锁定
// 				$acunt=new accountClass();
// 				$acunt->OnlineReturn(array("trade_no"=>$OrdId));
// 				flock($fp , LOCK_UN);
// 				//header('location:/?user&q=code/account/recharge');
// 				//echo "充值成功，请点击返回查看充值记录<a href=/?user&q=code/account/recharge> >>>>>></a>";
// 			} else{
// 				fclose($fp);
// 				echo "充值失败ERROE:001，请点击返回<a href=/?user&q=code/account/recharge> >>>>>></a>";
// 			}
// 			//echo "ok";
			var_dump($_REQUEST);
 			exit();
		}else{
			//交易失败
			//根据订单号 进行相应业务操作
			//在些插入代码
			echo "充值失败ERROE:002，请点击返回<a href=/?user&q=code/account/recharge> >>>>>></a>";
			//echo "支付失败";
		}
	}else{
		//验签失败
		echo "验签失败[".$SignData."]";
	}

?>