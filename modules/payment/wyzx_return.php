<?
//****************************************	//MD5��ԿҪ�������ύҳ��ͬ����Send.asp��� key = "test" ,�޸�""���� test Ϊ������Կ
											//�������û������MD5��Կ���½����Ϊ���ṩ�̻���̨����ַ��https://merchant3.chinabank.com.cn/
	$key='chang_43420024420';							//��½��������ĵ�����������ҵ���B2C�����ڶ������������С�MD5��Կ���á�
											//����������һ��16λ���ϵ���Կ����ߣ���Կ���64λ��������16λ�Ѿ��㹻��
//****************************************

$v_oid     =trim($_POST['v_oid']);      
$v_pmode   =trim($_POST['v_pmode']);      
$v_pstatus =trim($_POST['v_pstatus']);      
$v_pstring =trim($_POST['v_pstring']);      
$v_amount  =trim($_POST['v_amount']);     
$v_moneytype  =trim($_POST['v_moneytype']);     
$remark1   =trim($_POST['remark1' ]);     
$remark2   =trim($_POST['remark2' ]);     
$v_md5str  =trim($_POST['v_md5str' ]);     
/**
 * ���¼���md5��ֵ
 */
                           
$md5string=strtoupper(md5($v_oid.$v_pstatus.$v_amount.$v_moneytype.$key)); //ƴ�ռ��ܴ�
if ($v_md5str==$md5string)
{
	
   if($v_pstatus=="20")
	{
	   //֧���ɹ�
		//�̻�ϵͳ���߼����������жϽ��ж�֧��״̬(20�ɹ�,30ʧ��),���¶���״̬�ȵȣ�......
		require_once ('../../core/config.inc.php');
		require_once (ROOT_PATH.'modules/account/account.class.php');
		require_once (ROOT_PATH.'modules/payment/payment.class.php');
		$file = $cachepath['pay'].$v_oid;
		$fp = fopen($file , 'w+');    
		@chmod($file, 0777);	  
		if(flock($fp , LOCK_EX | LOCK_NB)){    //�趨ģʽ��ռ�����Ͳ���������
			accountClass::OnlineReturn(array("trade_no"=>$v_oid));
			flock($fp , LOCK_UN);  
			echo "��ֵ�ɹ����������ز鿴��ֵ��¼<a href=/?user&q=code/account/recharge> >>>>>></a>";
		} else{
			fclose($fp);
			echo "��ֵʧ��ERROE:002����������<a href=/?user&q=code/account/recharge> >>>>>></a>";
		}     
		echo "ok";exit();
	}
}else{
	echo "��ֵʧ��ERROE:002����������<a href=/?user&q=code/account/recharge> >>>>>></a>";
	//echo "error";
}
?>