<?
	
	require_once("../../core/p2p_sdk/lib/Chinapnr.class.php");
	$chinapnr= Chinapnr::getInstance();
	
	var_dump($_REQUEST);
	
	
	$CmdId = $_REQUEST['CmdId'];			//��Ϣ����
	$MerId = $_REQUEST['MerId']; 	 		//�̻���
	$RespCode = $_REQUEST['RespCode']; 	//Ӧ�𷵻���
	$TrxId = $_REQUEST['TrxId'];  			//Ǯ�ܼҽ���Ψһ��ʶ
	$OrdAmt = $_REQUEST['OrdAmt']; 		//���
	$CurCode = $_REQUEST['CurCode']; 		//����
	$Pid = $_REQUEST['Pid'];  				//��Ʒ���
	$OrdId = $_REQUEST['OrdId'];  			//������
	$MerPriv = $_REQUEST['MerPriv'];  		//�̻�˽����
	$RetType = $_REQUEST['RetType'];  		//��������
	$DivDetails = $_REQUEST['DivDetails']; //������ϸ
	$GateId = $_REQUEST['GateId'];  		//����ID
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
				//ע��ɹ�
				echo "<script>alert('ע��ɹ�');location.href='index.php?user';</script>";		
			}
		}else{
			echo "��֤ʧ��!";
		}
	}
	exit();
	
	/*
	//��֤ǩ��
	$SignObject = new COM("CHINAPNR.NetpayClient");
	$MsgData = $CmdId.$MerId.$RespCode.$TrxId.$OrdAmt.$CurCode.$Pid.$OrdId.$MerPriv.$RetType.$DivDetails.$GateId;  	//����˳���ܴ�
	$MerFile = $_SERVER["DOCUMENT_ROOT"]."/hftx/PgPubk.key";			//�̻���ǩ��Կ�ļ�
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
		//510010��Ϊ�̻���
	//if($SignData == "0"){
		if($RespCode == "000000"){
			//���׳ɹ�
			//���ݶ����� ������Ӧҵ�����
			//��Щ�������
			//֧���ɹ�
			//�̻�ϵͳ���߼����������жϽ��ж�֧��״̬(20�ɹ�,30ʧ��),���¶���״̬�ȵȣ�......
// 			require_once ('../../core/config.inc.php');
// 			require_once (ROOT_PATH.'modules/account/account.class.php');
// 			require_once (ROOT_PATH.'modules/payment/payment.class.php');
// 			$file = $cachepath['pay'].$OrdId;
// 			$fp = fopen($file , 'w+');
// 			@chmod($file, 0777);
// 			if(flock($fp , LOCK_EX | LOCK_NB)){    //�趨ģʽ��ռ�����Ͳ���������
// 				$acunt=new accountClass();
// 				$acunt->OnlineReturn(array("trade_no"=>$OrdId));
// 				flock($fp , LOCK_UN);
// 				//header('location:/?user&q=code/account/recharge');
// 				//echo "��ֵ�ɹ����������ز鿴��ֵ��¼<a href=/?user&q=code/account/recharge> >>>>>></a>";
// 			} else{
// 				fclose($fp);
// 				echo "��ֵʧ��ERROE:001����������<a href=/?user&q=code/account/recharge> >>>>>></a>";
// 			}
// 			//echo "ok";
			var_dump($_REQUEST);
 			exit();
		}else{
			//����ʧ��
			//���ݶ����� ������Ӧҵ�����
			//��Щ�������
			echo "��ֵʧ��ERROE:002����������<a href=/?user&q=code/account/recharge> >>>>>></a>";
			//echo "֧��ʧ��";
		}
	}else{
		//��ǩʧ��
		echo "��ǩʧ��[".$SignData."]";
	}

?>