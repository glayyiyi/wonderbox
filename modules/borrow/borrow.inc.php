<?php
if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���
include_once("borrow.class.php");

//liukun add for bug 52 begin
$firePHPEnable=TRUE;
if ($firePHPEnable){
	require_once('modules/FirePHPCore/FirePHP.class.php');
	require_once('modules/FirePHPCore/fb.php');
	ob_start();

	$firephp = FirePHP::getInstance(true);
}
//liukun add for bug 52 end

if ($_U['query_type'] == "add" || $_U['query_type'] == "update"){
	//���������� 20121110 add by weego 
	//---------------apc�߲����ڴ湲��������--------------------------
	//liukun add for bug 296 begin
	 
//	require_once(ROOT_PATH."core/slock.class.php");
//	$lockTenderNo="addborrow"; //����addborrow�������������Ŷӽ���
//	$lock = new slock();
//	$lock->lock($lockTenderNo);
 
	//liukun add for bug 296 end
	//---------------apc�߲����ڴ湲��������--------------------------
	
	//��֤�û��Ƿ��з����� add by weego 20120613
	$result = borrowClass::GetOnes(array("user_id"=>$_G['user_id']));
	if (!isset($_POST['name'])){
		$msg = array("�벻Ҫ�Ҳ���","","/publish/index.html");
	//��ʱע�͵� 2012-9-6 jackfeng
	}elseif (strtolower ($_POST['valicode'])!=$_SESSION['valicode']){
		$msg = array("��֤�벻��ȷ");
	}elseif($_POST['style']==1 && $_POST['time_limit']%3!=0){
		$msg = array("��ѡ����ǰ�����������������д3�ı���");
        }elseif($_POST['award']==1 && $_POST['part_account']<5){
                $msg = array("��ѡ����ǰ�����������д�������ֵ(���ܵ���5Ԫ)");
        }elseif($_POST['award']==2 && $_POST['funds'] < 0.1){
                $msg = array("��ѡ����ǰ���������������д��������ֵ( 0.1% ~ 6% )");
        }elseif(isset($_POST['isDXB']) && (!isset($_POST['pwd']) || $_POST['pwd'] == "" ) ){
                $msg = array("��ѡ���˶���꣬�����붨��������.");
        }elseif(isset($_POST['is_lz']) && $_POST['account']%100!=0){
        	$msg = array("��ת��Ľ���������100��������.");
        }else{
		$var = array("name","use","time_limit","style","account","apr","lowest_account","most_account","valid_time","award","part_account","funds","is_false","open_account","open_borrow","open_tender","open_credit","content","is_vouch","vouch_award","vouch_user");
		$data = post_var($var);
		if(isset($_POST['ismb'])){
			$data['time_limit'] = 1;
			$data['style'] = 0;
			$data['is_mb'] = intval($_POST['ismb']);
		}
		if(isset($_POST['isjin'])){
			$data['is_jin'] = intval($_POST['isjin']);
		}
		if(isset($_POST['isfast'])){
			$data['is_fast'] = intval($_POST['isfast']);
		}
		if(isset($_POST['is_vouch'])){
			$data['is_vouch'] = intval($_POST['is_vouch']);
		}
		if(isset($_POST['is_lz'])){
			$data['is_lz'] = intval($_POST['is_lz']);
			$data['lowest_account'] = 100;
			$data['style'] = 0;
		}
		if(isset($_POST['isxin'])){
			$data['is_xin'] = intval($_POST['isxin']);
		}
		//���� add by weego for ���  20120513
		if((int)$_POST['isday']==1){
			//liukun add for bug 324 begin
			$data['style'] = 0;
			//liukun add for bug 324 end
			$data['time_limit'] = 1;
			$data['time_limit_day'] = intval($_POST['time_limit_day']);
			$data['time_limit_day'] = $data['time_limit_day']?$data['time_limit_day']:30;
			$data['isday'] = intval($_POST['isday']);
		}
		//���� add by jackfeng for �������� 20120716
		if((int)$_POST['danbao']==1){
			$data['danbao'] = 1;
		}
        //����� ����
        if(isset($_POST['pwd'])){
            if(isset($_POST['pwd']) && $_POST['pwd'] != ""){
                  $data['pwd'] = htmlspecialchars($_POST['pwd']);
            }
       	}
		//liukun add for bug 294 begin ���ֲ�����������ʱָ����������    
        if(isset($_POST['biao_type'])){
        	$data['biao_type'] = $_POST['biao_type'];
        }
		//liukun add for bug 294   end  ���ֲ�����������ʱָ����������              
		$data['open_account'] = 1;
		$data['open_borrow'] = 1;
		$data['open_credit'] = 1;
		if ($_POST['submit']=="����ݸ�"){
			$data['status'] = -1;
		}else{
			$data['status'] =0;
		}
                
		$data['user_id'] = $_G['user_id'];
		if ($_U['query_type'] == "add"){
			//liukun add for bug 294 begin ���ֲ�����
			$result = borrowClass::Add($data);
			//�������˶�ȵ�
			//liukun add for bug 294  end  ���ֲ�����
		}else{
			$data['id'] = $_POST['id'];
			$data['user_id'] = $_G['user_id'];
			$result = borrowClass::Update($data);
		}
		if ($result===true){
//			global $mysql;
//			$auto['id']=$mysql->db_insert_id();
//			$auto['user_id']=$_G['user_id'];
//			$auto['total_jie']=$data['account'];
//			$auto['zuishao_jie']=$data['lowest_account'];
//			borrowClass::auto_borrow($auto);
			//By Glay $msg = array("�����ɹ���","","/index.php?user&q=code/borrow/publish");
			$msg = array("�����ɹ���","","/?".$_G['system']['con_houtai']."&q=module/borrow&site_id=8&a=borrow");
		}else{
			$msg = array($result);
		}
		
	}
	//---------------apc�߲����ڴ湲�����ر�--------------------------
	//liukun add for bug 296 begin
	 
//	$lock->release($lockTenderNo);
	 
	//���������� add by weego 20121110
	//---------------apc�߲����ڴ湲�����ر�--------------------------

	
}elseif ($_U['query_type'] == "cancel"){
	$data['id'] = (int)$_REQUEST['id'];
	$data['user_id'] = $_G['user_id'];
	$result = borrowClass::Cancel($data);
	if(is_bool($result)){
		if($result==false){
			$msg = array("����ʧ��!","","index.php?user&q=code/borrow/publish");
		}else{
			$msg = array("�����ɹ�!","","index.php?user&q=code/borrow/publish");
		}
	}else{
		$msg = array($result,"","index.php?user&q=code/borrow/publish");
	}
}

//ɾ��
/*
elseif ($_U['query_type'] == "del"){
	$data['id'] = $_REQUEST['id'];
	$data['user_id'] = $_G['user_id'];
	$data['status'] = -1;
	$result = borrowClass::Delete($data);
	if ($result==false){
		$msg = array($result);
	}else{
		$msg = array("�б�ɾ���ɹ�!");
	}
}
*/
//��ת���Զ��ع� add by weego 20121208 
elseif ($_U['query_type'] == "autoReBackbuy"){
	$data='';
	$result = borrowClass::autoLZRepay($data);
	if($result==false){
		$msg = array("�ع�ʧ��!");
	}else{
		$msg = array("�ع��ɹ�!");
	}
}
//�û�Ͷ��
elseif ($_U['query_type'] == "tender"){
	//Ͷ���� 20121010 add by weego 
	//liukun add for bug 296 begin
	if(1==2){
	require_once(ROOT_PATH."core/slock.class.php");
	$_POST['id']=(int)$_POST['id'];

	$lockTenderNo=$_POST['id']; //���ݱ��id�������������Ŷӽ���
	//---------------apc�߲����ڴ湲��������--------------------------
	$lock = new slock();
	$lock->lock($lockTenderNo);
	}
	//liukun add for bug 296 end
	 
	if (strtolower($_POST['yzmcode'])!=$_SESSION['valicode'] || !isset($_POST['yzmcode'])){//��� ��֤�� by timest 2012-10-11
		$msg = array("��֤�����",'','/invest/a'.$_POST['id'].'.html');
	}else{
		$_SESSION['valicode']="";
		include_once(ROOT_PATH."modules/account/account.class.php");
		$borrow_result = borrowClass::GetOne(array("id"=>$_POST['id'],"tender_userid"=>$_G['user_id']));//��ȡ����ĵ�����Ϣ
		$is_lz=$borrow_result['is_lz'];
		if($is_lz==1){
			$account_money = (int)$_POST['flow_count']*100;
			$postmoney = (int)$_POST['flow_count']*100;
		}else{
			$account_money = $_POST['money'];
			$postmoney = $_POST['money'];
		}
		//liukun add for bug 52 begin
		fb($account_money, FirePHP::TRACE);
		fb($borrow_result, FirePHP::TRACE);
		//liukun add for bug 52 end
		//���������
		$dxbPWD = $_POST['dxbPWD'];

		//liukun add for bug 151 begin
		//1.�������ʣ���Ͷ����
		$can_account = $borrow_result['account'] - $borrow_result['account_yes'];
		//2.�������Ͷ��ɣ��뱾�ͻ��ۼ�Ͷ����֮��Ĳ���
		//ϵͳ��ʹ��0��ʾͶ���������ƣ�Ϊ�˱��ڼ��㣬������һ��ת��������0ʱ��ֱ��ת��Ϊ10000,0000
		if ($borrow_result['most_account']==0){
			$borrow_result['most_account']=100000000;
		}
		$can_single_account = $borrow_result['most_account'] - $borrow_result['tender_yes'];
		//3.�жϸ�����СͶ����ʣ��Ͷ�꣬ȡ�����е�С��Ϊ��СͶ����
		$lowest_account = $borrow_result['lowest_account'];

		if($can_account < $lowest_account){
			$lowest_account = $can_account;
		}

		if($can_single_account < $lowest_account){
			$lowest_account = $can_single_account;
		}


		//���ʣ��Ͷ����С����СͶ��������ʾ����Ͷ������һ������ʱ��ʵ��Ͷ����ʣ����Ϊ׼��������Ͷ�������
		if ($account_money > $can_account){
			$account_money = $can_account;
		}
		//���Ͷ������ڸ��˻���Ͷ���ʵ��Ͷ����Ϊ���˻���Ͷ����
		if ($account_money > $can_single_account){
			$account_money = $can_single_account;
		}
		//liukun add for bug 151 end
		
		//*********************************
		//add by jackfeng 2012-10-08 ���ٱ�
		$kuai =  $borrow_result['is_kuai'];
		$cashKuaiMoney = 0;
		/*
		if($kuai == 1){
			//ͳ�ƿ��õ����³�ֵ�ʽ�,�Է���֮������³�ֵʱ��Ϊ׼
			$dayTimeD=$borrow_result['addtime'];;//����ʱ��;
			$sql = "select sum(money) as num from `{account_recharge}` where user_id = {$_G['user_id']} and status=1  and type=2 and addtime>".$dayTimeD;
		
			$resultCash = $mysql->db_fetch_arrays($sql);
			foreach ($resultCash as $key => $value){
				$cashKuaiMoney=$value["num"];
			}
			if(!isset($cashKuaiMoney)){
				$cashKuaiMoney=0;
			}

			//ͳ�Ʒ���֮��Ͷ���ٱ���ʽ�(������ɺ�δ��ɵ�)
			$sql = "select sum(account) as num From  `{borrow_tender}` where user_id = {$_G['user_id']} and borrow_id in(select id from `{borrow}` where is_kuai=1 and status=1 and addtime>=".$dayTimeD.")  and addtime>".$dayTimeD;
			$resultCash2 = $mysql->db_fetch_arrays($sql);
			foreach ($resultCash2 as $key => $value){
				$cashKuaiMoney2=$value["num"];
			}
			if(isset($cashKuaiMoney2)){
				$cashKuaiMoney = $cashKuaiMoney-$cashKuaiMoney2;
			}
		}*/
		//*********************************
		if($_G['user_id'] == $borrow_result['user_id']){
			$msg = array("�Լ�����Ͷ�Լ������ı꣡");
		}elseif ($_G['user_result']['islock']==1){
			$msg = array("���˺��Ѿ������������ܽ���Ͷ�꣬�������Ա��ϵ");
		}elseif (!is_array($borrow_result)){
			$msg = array($borrow_result);
		}elseif ($borrow_result['account_yes']>=$borrow_result['account']){
			$msg = array("�˱�������������Ͷ");
		}elseif ($borrow_result['verify_time'] == "" || $borrow_result['status'] != 1){
			$msg = array("�˱���δͨ�����");
		}elseif($kuai == 1 && $cashKuaiMoney<$account_money){
			$msg = array("���ã�����Ͷ������ڿ������㵱ǰ��Ͷ���ٱ�Ŀ����ʽ�(�˱귢��������³�ֵ�ʽ����Ͷ��)");
		}
		//liukun add for bug ������ԶҲ�������㣬��Ϊ$borrow_result['valid_time']����Ч������
		//elseif ($borrow_result['verify_time'] + $borrow_result['valid_time']>time()){
		elseif (($borrow_result['verify_time'] + $borrow_result['valid_time'] * 3600 * 24) <time()){
			$msg = array("�˱��ѹ���");
		}
		elseif(!is_numeric($account_money)){
			$msg = array("��������ȷ�Ľ��",'','/invest/a'.$_POST['id'].'.html');
		}
		//liukun add for bug 151 begin
		elseif($account_money < $lowest_account ){
			$msg = array("����Ͷ����{$account_money}����С����СͶ����{$lowest_account}",'','/invest/a'.$_POST['id'].'.html');
		}
		elseif($can_single_account == 0 ){
			$msg = array("������Ͷ�����Ѿ������������{$borrow_result['most_account']}",'','/invest/a'.$_POST['id'].'.html');
		}
		//liukun add for bug 151 end

		elseif($dxbPWD != $borrow_result['pwd']){
			$msg = array("������Ķ�������벻��ȷ�����򷢱���ȡ����ȷ������.",'','/invest/a'.$_POST['id'].'.html');
		}
		//liukun add for bug 58 begin
		elseif (md5($_POST['paypassword'])!=$_G['user_result']['paypassword']){
			$msg = array("֧���������벻��ȷ",'','/invest/a'.$_POST['id'].'.html');
		}
		//liukun add for bug 58 end
		else{
			$account_result =  accountClass::GetOneAccount(array("user_id"=>$_G['user_id']));//��ȡ��ǰ�û������
			if (($borrow_result['account']-$borrow_result['account_yes'])<$account_money){
				$account_money = $borrow_result['account']-$borrow_result['account_yes'];
			}
			if ($account_result['use_money']<$account_money){
				$msg = array("��������",'','/invest/a'.$_POST['id'].'.html');
			}else{
				$data['borrow_id'] = $_POST['id'];
				$data['money'] = $postmoney;
				$data['account'] = $account_money;
				$data['user_id'] = $_G['user_id'];
				$data['status'] = 5;
				$result = borrowClass::AddTender($data);//��ӽ���
// 				print_r($result);
// 				exit();
				if ($result["tender_result"] === true){
					if ($borrow_result['status'] ==1 && ($borrow_result['account_yes'] + $account_money) >= $borrow_result['account'] && $borrow_result['is_lz']!=1){
						$classname = $borrow_result['biao_type']."biaoClass";
						$dynaBiaoClass = new $classname();
						$auto_full_verify_result = $dynaBiaoClass->get_auto_full_verify($borrow_result['biao_type']);
						if ($auto_full_verify_result==1){
							$data_e['id'] = $_POST['id'];
							$data_e['status'] = '3';
							$data_e['repayment_remark'] = '�Զ�����';
							borrowClass::AddRepayment($data_e);
						}
					}
					//By Glay $msg = array("Ͷ��ɹ�","","/index.php?user&q=code/borrow/bid");
					$msg = array("Ͷ��ɹ�","",'/invest/a'.$_POST['id'].'.html?doaction=success&tender_id='.$result['tender_id']);
				}else{
					if(is_bool($result) && $result==false){
						$msg = array("Ͷ��ʧ��",'','/invest/a'.$_POST['id'].'.html');
					}else{
						$msg = array($result);
					}
				}
			}
		}
	}
	//---------------apc�߲����ڴ湲�����ر�--------------------------
	//liukun add for bug 296 begin
	if(1==2){
	$lock->release($lockTenderNo);
	}
	//Ͷ���� add by weego 20121010
}
//������Ͷ��
elseif ($_U['query_type'] == "tendercontract"){
	
	$data_c['id'] = $_POST['tender_id'];
	$data_c['c_address'] = $_POST['c_address'];
	$data_c['c_name'] = $_POST['c_name'];
	$data_c['c_phone'] = $_POST['c_phone'];
	$data_c['c_contact_way'] = $_POST['c_contact_way'];
	if(isset($_POST['c_with_email'])&&$_POST['c_with_email']!="")
		$data_c['c_with_email'] = 1;
	else 
		$data_c['c_with_email'] = 0;
	
	if( isset($_POST['c_with_post'])&&$_POST['c_with_post']!=null)
		$data_c['c_with_post'] = 1;
	else
		$data_c['c_with_post'] =0;
	

	$result = borrowClass::UpdateTender($data_c);//��ӽ���
	if($result)
		$msg = array("�����ͬ���������óɹ���");
	else 
		$msg = array("���󣬱����ͬ����������ʧ�ܣ�");
		
}
//������Ͷ��
elseif ($_U['query_type'] == "vouch"){
	$msg = "";
	//if ($_SESSION['valicode']!=$_POST['valicode']){
        if(1==2){
		$msg = array("��֤�����");
	}else if (1==2){
		include_once(ROOT_PATH."modules/account/account.class.php");
		$borrow_result = borrowClass::GetOne(array("id"=>$_POST['id'],"tender_userid"=>$_G['user_id']));//��ȡ����ĵ�����Ϣ
		
		$vouch_account = $_POST['money'];
		if (($borrow_result['account']-$borrow_result['vouch_account'])<$vouch_account){
			$account_money = $borrow_result['account']-$borrow_result['vouch_account'];
		}else{
			$account_money = $vouch_account;
		}
		
		$uacc = borrowClass::GetUserLog(array('user_id'=>$_G['user_id']));
		
		if ($_G['user_result']['islock']==1){
			$msg = array("���˺��Ѿ������������ܽ��е������������Ա��ϵ");
		}elseif (!is_array($borrow_result)){
			$msg = array($borrow_result);
		}elseif ($uacc['total']<$account_money){
			$msg = array("�����ʻ��ܶ�С�����뵣�����ܽ����ܵ���");
		}elseif ($borrow_result['vouch_account']>=$borrow_result['account']){
			$msg = array("�˵����굣����������������ٵ���");
		}elseif ($borrow_result['verify_time'] == "" || $borrow_result['status'] != 1){
			$msg = array("�˱���δͨ�����");
		}elseif ($borrow_result['verify_time'] + $borrow_result['valid_time']>time()){
			$msg = array("�˱��ѹ���");
		}elseif (md5($_POST['paypassword'])!=$_G['user_result']['paypassword']){
			$msg = array("֧���������벻��ȷ");
		}else{
			//��ȡͶ�ʵĵ������borrowClass::GetUserLog
			$vouch_amount =  borrowClass::GetAmountOne($_G['user_id'],"tender_vouch");
			
			if ($vouch_amount['account_use']<$account_money){
				$msg = array("���ĵ�������");
			}else{
				$data['borrow_id'] = $_POST['id'];
				$data['vouch_account'] = $vouch_account;
				$data['account'] = $account_money;
				$data['user_id'] = $_G['user_id'];
				$data['content'] = $_POST['content'];
				$data['status'] = 0;
				
				//�ж��Ƿ��ǵ�����
				if ($borrow_result['vouch_user']!=""){
					$_vouch_user = explode("|",$borrow_result['vouch_user']);
					if (!in_array($_G['user_result']['username'],$_vouch_user)){
						$msg = array("�˵������Ѿ�ָ���˵����ˣ��㲻�Ǵ˵����ˣ����ܽ��е���");
					}
				}
				if ($msg==""){
					$result = borrowClass::AddVouch($data);//��ӵ�����
					if ($result==false){
						$msg = array($result);
					}else{
						$msg = array("�����ɹ�","","/index.php?user&q=code/borrow/bid");
						$_SESSION['valicode'] = "";
						
					}
				}
			}
		}
	}
	elseif ($_G['user_result']['islock']==1){
		$msg = array("���˺��Ѿ������������ܽ��е������������Ա��ϵ");
	}
	else{
	
		$result = borrowClass::AddVouch($_POST);//array("borrow_id"=>$_POST['id'],"tender_userid"=>$_G['user_id']));//��ӵ�����
	
		if ($result===true){
			$msg = array("�����ɹ�","","/index.php?user&q=code/borrow/bid");
			$_SESSION['valicode'] = "";
		}else{
			$msg = array($result);
		}
	}
	
}


//�鿴��Ļ�����Ϣ
elseif ($_U['query_type'] == "repayment_view"){
	$data['id'] = $_GET['id'];
	if ($data['id']==""){
		$msg = array("������������");
	}
	$data['user_id'] = $_G['user_id'];
	$result =  borrowClass::GetOne($data);
	if ($result==false){
		$msg = array("���Ĳ�������");
	}else{
		$_U['borrow_result'] = $result;
	}
}

//����
elseif ($_U['query_type'] == "repay"){
	$data['id'] = $_REQUEST['id'];
	if ($data['id']==""){
		$msg = array("������������");
	}else{
		$data['user_id'] = $_G['user_id'];
		$result =  borrowClass::Repay($data);
		if (is_bool($result)){
			if($result==false){
				$msg = array("����ʧ��","","/index.php?user&q=code/borrow/repayment");
			}else{
				$msg = array("�����ɹ�","","/index.php?user&q=code/borrow/repayment");
			}
		}else{
			$msg = array($result,"","/index.php?user&q=code/borrow/repayment");
		}
	}
}
//�������
elseif ($_U['query_type'] == "limitapp"){
	if (isset($_POST['account']) && $_POST['account']>0){
		$var = array("account","content","type","remark");
		$data = post_var($var);
		$data['user_id'] = $_G['user_id'];
		$result = borrowClass::GetAmountApplyOne(array("user_id"=>$data['user_id'],"type"=>$data['type']));
		if ($result!=false && $result['verify_time']+60*60*24*30 >time()){
			$msg = array("��һ���º�������");
		}elseif ($result!=false && $result['addtime']+60*60*24*30 >time() && $result['status']==2){
			$msg = array("���Ѿ��ύ�����룬��ȴ����");
		}else{
			$data['status'] = 2;
			$result =  borrowClass::AddAmountApply($data);//��ȡ��ǰ�û������
			if ($result!==true){
				$msg = array($result);
			}else{
				$msg = array("�������ɹ�����ȴ�����Ա���","","/index.php?user&q=code/borrow/limitapp");
			}
		}
	}
}
	
//�����Զ�Ͷ��
elseif ($_U['query_type'] == "auto_add"){
	$_POST['user_id'] = $_G['user_id'];
	$_POST['addtime'] = time();
	$re = borrowClass::add_auto($_POST);
	if($re===false){
		$msg = array("���Ѿ������1���Զ�Ͷ�꣬���ֻ�����1����������ɾ�������޸�","","/index.php?user&q=code/borrow/auto");
	}else{
		$msg = array("�Զ�Ͷ�����óɹ�","","/index.php?user&q=code/borrow/auto");
	}
}

//�޸��Զ�Ͷ��
elseif ($_U['query_type'] == "auto_new"&&is_numeric($_GET['id'])){
	$result = borrowClass::GetAutoId($_GET['id']);
	$_U['auto_result'] = $result;
}

//ɾ���Զ�Ͷ��
elseif ($_U['query_type'] == "auto_del"&&is_numeric($_GET['id'])){
	$result = borrowClass::del_auto($_GET['id']);
	if($result) $msg = array("�Զ�Ͷ��ɾ���ɹ�","","/index.php?user&q=code/borrow/auto");
}
else{
	
	
}

$template = "user_borrow.html.php";
if($_U['query_type'] == "auto"||$_U['query_type'] == "auto_new")  $template = "auto_user_borrow.html.php";
?>
