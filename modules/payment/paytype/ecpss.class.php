<?php
//$payment = array('trade_no'=>'123456','amount'=>'1000');
//ecpssPayment::ToSubmit($payment);
class ecpssPayment{
	public static function ToSubmit($payment){
		$MD5key = 'sPcUneRR';
		$MerNo = '17278';
		$form_url = "https://pay.ecpss.cn/sslpayment";
		$BillNo = $payment['trade_no'];//��վ�Ĺ��ﶩ����
		$Amount = $payment['money'];//���
		$ReturnURL = "http://demoa.erongdu.com/modules/payment/ecpss_return.php";//֧����ɺ� web ҳ����ת��ʾ֧�����
		$AdviceURL = "http://demoa.erongdu.com/modules/payment/ecpss_return.php";//֧����ɺ󣬺�̨����֧��������������������ݿ�ֵ
		$md5src = $MerNo.$BillNo.$Amount.$ReturnURL.$MD5key;
		$MD5info = strtoupper(md5($md5src));//MerNo&BillNo&Amount&ReturnURL&MD5key������������MD5 ���ܺ��ַ���
		$orderTime = date('YmdHis',time());//����ʱ�䣬��ʽ��YYYYMMDDHHMMSS
		$defaultBankNumber = '';//���д���(�����б����)����Ϊ�մ��ݶ�Ӧ������е�ֵ��ֱ����ת����Ӧ��������������
		$Remark = '';//��ע
		$products = '';//��Ʒ��Ϣ
		header("Content-type:text/html; charset=utf-8");
?>
		<html>
		<head>
		<title>��ת......</title>
		<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
		</head>
		<body>
		����ǰ���㳱֧��>>>>>>>>
		<form action="<?php echo $form_url ?>" method="post" id="frm1">
		<input type="hidden" name="MerNo" value="<?php echo $MerNo ?>" />
		<input type="hidden" name="BillNo" value="<?php echo $BillNo ?>" />
		<input type="hidden" name="Amount" value="<?php echo $Amount ?>" />
		<input type="hidden" name="ReturnURL" value="<?php echo $ReturnURL ?>" />
		<input type="hidden" name="AdviceURL" value="<?php echo $AdviceURL ?>" />
		<input type="hidden" name="MD5info" value="<?php echo $MD5info ?>" />
		<input type="hidden" name="orderTime" value="<?php echo $orderTime ?>" />
		<input type="hidden" name="defaultBankNumber" value="<?php echo $defaultBankNumber ?>" />
		<input type="hidden" name="Remark" value="<?php echo $Remark ?>" />
		<input type="hidden" name="products" value="<?php echo $products ?>" />
		</form>
		<script language="javascript">
			document.getElementById("frm1").submit();
		</script>
		</body>
		</html>
<?php
	exit();
	}
	function GetFields(){
		return array(
				'alipay_id'=>array(
						'label'=>'�ͻ���',
						'type'=>'string'
				),
				'alipay_key'=>array(
						'label'=>'˽Կ',
						'type'=>'string'
				)
		);
	}
}
?>