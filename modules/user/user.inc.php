<?php
if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

$url = $_U['query_url']."/{$_U['query_type']}";
if (isset($_G['query_string'][2])){
	$url .= "&".$_G['query_string'][2];
}
if  ($_U['query_type'] == "applyvip") $url = '/vip/index.html';
$_SESSION['valicode'] = isset($_POST['valicode'])?$_SESSION['valicode']:'';

if(strtolower($_POST['valicode']) != $_SESSION['valicode']){
		$msg = array("��֤�����","",$url);
}else{
	$_SESSION['valicode'] = '';
	//���뱣������
	if ($_U['query_type'] == "protection"){
		if ((isset($_POST['type']) && $_POST['type'] == 1)){
			if (  $_G['user_result']['answer']=="" || $_POST['answer'] == $_G['user_result']['answer']){
				$_U['answer_type'] = 2;
			}else{
				$msg = array("����𰸲���ȷ","",$url);
			}
		}elseif (isset($_POST['type']) && $_POST['type'] == 2){
			$var = array("question","answer");
			$data = post_var($var);
			if ($data['answer']==""){
				$msg = array("����𰸲���Ϊ��","",$url);	
			}else{
				$data['user_id'] = $_G['user_id'];
				$result = $user->UpdateUserProtection($data);
				if ($result == false){
					$msg = array($result);	
				}else{
					$msg = array("���뱣���޸ĳɹ�","",$url);	
				}
			}
		}
	}
	
	
	//������������
	elseif ($_U['query_type'] == "paypwd"){
		if (isset($_POST['oldpassword'])){
			if ($_G['user_result']['paypassword'] == "" && md5($_POST['oldpassword']) !=$_G['user_result']['password']){
				$msg = array("���벻��ȷ�����������ĵ�¼����","",$url);	
			}elseif ($_G['user_result']['paypassword'] != "" && md5($_POST['oldpassword']) != $_G['user_result']['paypassword']){
				$msg = array("���벻��ȷ�����������ľɽ�������","",$url);	
			}else{
				$data['user_id'] = $_G['user_id'];
				$data['paypassword'] = md5($_POST['newpassword']);
				$result = $user->UpdateUserAll($data);
				if ($result == false){
					$msg = array($result);
				}else{
					$msg = array("�����޸ĳɹ�","",$url);	
				}
			}
		}
	}
	//���Ŷ�������
	elseif ($_U['query_type'] == "smsorder"){
		$results = userClass::GetOnes(array("user_id"=>$_G['user_id']));
		$results_type = userClass::GetAppOnes(array("appid"=>1));
		if (isset($_POST['ordertype'])){
			$ordertype=$_POST['ordertype'];
			$ar_tmp = explode("_", $ordertype); 
			$data["money"]=$ar_tmp[1]?$ar_tmp[1]:0;
			$data["start_time"]=date("Y-m-d");
			$data["userid"]=$_G['user_id'];
			$data["apptypeid"]=1;
			$data["mobile"]=$results["phone"];
			if(!$results["phone"] || strlen($results["phone"])<11 || strlen($results["phone"])>13)
			{
				$msg = array("��δ��д���ֻ����룬�����ֻ������д���","",$url);	
			}
			else
			{
				if ($ar_tmp[0]==1)
				{
					$data["end_time"]=date( "Y-m-d", mktime(0,0,0,date("m")+1,date("d"),date("Y")));
				}
				elseif ($ar_tmp[0]==2)
				{
					$data["end_time"]=date( "Y-m-d", mktime(0,0,0,date("m"),date("d"),date("Y")+1));
				}
				$_results = userClass::GetSmsOnes(array("userid"=>$_G['user_id']));			
				if ($_results)
				{
					$time1=strtotime($_results["end_time"]);
					$time2=time();
					if (DateDiff("d",$time2,$time1)>0)
					{
						$msg = array("���Ѿ������������ѹ��ܣ������ظ�������","",$url);	
					}
					else
					{
						 userClass::UpdateSmsUser($data);

					}
				}
				else
				{
					userClass::AddSmsUser($data);
				}
			}
		}
			$results_sms = userClass::GetSmsOnes(array("userid"=>$_G['user_id']));
			if($results_sms)
			{
				$results_sms['start_time']=date("Y-m-d",strtotime($results_sms['start_time']));
				$results_sms['end_time']=date("Y-m-d",strtotime($results_sms['end_time']));
			}
			else
			{
				$results_sms['start_time']=date("Y-m-d");
				$results_sms['end_time']=date("Y-m-d");
			}

			$_U['smsuser'] = $results_sms;
			$_U['apptype'] = $results_type;
	}
	//������������
	elseif ($_U['query_type'] == "getpaypwd"){
		if(isset($_GET['keyid']) && isset($_GET['keyid'])!=""){
			if (isset($_POST['paypwd']) && $_POST['paypwd']!=""){
				if ($_POST['paypwd']==""){
					$msg = array("���벻��Ϊ��","",$url);
				}elseif ($_POST['paypwd']!=$_POST['paypwd1']){
					$msg = array("�������벻һ��","",$url);
				}else{
					$data['user_id'] = $_G['user_id'];
					$data['paypassword'] = md5($_POST['paypwd']);
					$result = $user->UpdateUser($data);
					$msg = array("���������޸ĳɹ�","","index.php?user&q=code/user/paypwd");
				}
			}else{
				//$id = urldecode($_REQUEST['id']);
				//$_id = explode(",",authcode(trim($id),"DECODE"));
				//$data['user_id'] = $_id[0];
				$a = email_ciphertext($_GET['keyid'],'DECODE');
				if(is_array($a)){
					$data['user_id'] = $a[0];
					$user_id = $a[0];
					$end_time = $a[2];
					$mkey = $a[4];
				}else{
					$data['user_id'] = '';
					$user_id = '';
					$end_time = 0;
				}
				if($user_id == ''){
					$msg = array('���Ӵ�����޸ģ����������롣','','/index.php?user&q=code/user/getpaypwd');
				}elseif (time()>$end_time){
					$msg = array('��Ϣ�ѹ��ڣ����������롣','','/index.php?user&q=code/user/getpaypwd');
				}elseif ($data['user_id']!=$_G['user_id']){
					$msg = array('����Ϣ���������Ϣ���벻Ҫ�Ҳ���','','/index.php?user&q=code/user/getpaypwd');
				}else{
					$re = $mysql->db_fetch_array('select encryption,user_status from {user} where user_id='.$user_id);
					if($re['user_status']!='getPayPwd' || $re['encryption']!=$mkey){
						$msg = array('������ʧЧ�������»�ȡ','','/index.php?user&q=code/user/getpaypwd');
					}
				}
			}
		}elseif (isset($_POST['valicode'])){
			$data['user_id'] = $_G['user_id'];
			$data['username'] = $_G['user_result']['username'];
			$data['email'] = $_G['user_result']['email'];
			$data['webname'] = $_G['system']['con_webname'];
			$data['title'] = "��������ȡ��";
			$data['key'] = "getPayPwd";
			$data['query_url'] = "code/user/getpaypwd";
			$data['encryption'] = md5($_G['user_id']);
			$data['msg'] = RegEmailMsg($data);
			$data['type'] = "getpaypwd";
			$result = $user->SendEmail($data);
			if($result){
				$msg = array("��Ϣ�ѷ��͵��������䣬��ע�����");
				$mysql->db_query('update {user} set encryption=\''.$data['encryption'].'\',user_status=\'getPayPwd\' where user_id='.$_G['user_id']);
			}else{
				$msg = array("��Ϣ����ʧ��");
			}
		}
	}
	
	//��¼��������
	elseif ($_U['query_type'] == "userpwd"){
		if (isset($_POST['oldpassword'])){
			if (md5($_POST['oldpassword']) != $_G['user_result']['password']){
				$msg = array("���벻��ȷ�����������ľ�����","",$url);	
			}else{
				require_once ROOT_PATH . '/core/config_ucenter.php';
				require_once ROOT_PATH . '/uc_client/client.php';
				$ucresult = uc_user_edit($_G['user_result']['username'], $_POST['oldpassword'], $_POST['newpassword']);

                 if ($ucresult == -1) {
					$msg = array("�����벻��ȷ,��ʹ����̳�ĵ�¼����","",$url);
				} elseif ($ucresult == -4) {
					$msg = array("Email ��ʽ����","",$url);
				} elseif ($ucresult == -5) {
					$msg = array("Email ������ע��","",$url);
				} elseif ($ucresult == -6) {
					$msg = array("�� Email �Ѿ���ע��","",$url);
				} else{
					$data['user_id'] = $_G['user_id'];
					$data['password'] = $_POST['newpassword'];
					$result = $user->UpdateUser($data);
					if ($result == false){
						$msg = array($result);	
					}else{
						$msg = array("��¼�����޸ĳɹ�","",$url);	
					}
				}
			}
		}
	}
	
	//��̬��������
	elseif ($_U['query_type'] == "serialStatusSet"){
		
		if (isset($_POST['action'])){
			/*�ж϶�̬����*/
			$result = userClass::GetOnes(array("user_id"=>$_G['user_id']));
			$uchon_sn_db = $result['serial_id'];
			$uchon_otp = $_POST['uchoncode'];
			$res = otp_check_new($uchon_sn_db, $uchon_otp);

			if($res->resCode == '1'){
				unset($_POST['action']);
				unset($_POST['name']);
				$a = array();
				foreach($_POST as $k=>$v){
					$a[$k] = $v;
				}
				
				$data['user_id'] = $_G['user_id'];
				$data['serial_status'] = json_encode($a);
				$result = $user->UpdateUser($data);
				if ($result == false){
					$msg = array($result);	
				}else{
					$msg = array("�ύ�ɹ�","",$url);	
				}
			}else{
				$msg = array("��̬�������","",$url);
			}
		}
	}
	elseif($_U['query_type']=='tenderTreasure'){
		if(isset($_POST['username']) && $_POST['protocolcheck']!=1){
			
			$msg = array("�Բ���������ͬ��Ͷ�ѱ��û���ȨЭ���������","",$url);
		}elseif(isset($_POST['username'])){
				$post_data = array();
				$post_data['username_forum'] = $_POST['username'];//��̳�û���
				$post_data['username_terrace'] = $_G['user_result']['username'];//ƽ̨�û���
				$forum_key = explode(";",$_G['system']['con_forum_key']);//ƽ̨key
				$post_data['pid'] = $forum_key[0];
				$post_data['skey'] = $forum_key[1];
				$post_data['time'] = time();
				foreach ($post_data as $k=>$v)
				{
					$post_data[$k] = iconv("gbk", "utf-8", $v);
				}
				ksort($post_data);//����
				$str = '';
				foreach ($post_data as $key=>$val) {
					$str.=",{$key}:{$val}";
				}
				$str = substr($str, 1);
				$str = strtoupper(md5($str));
				$post_data['sign'] = $str;
				unset($post_data['skey']);
				$url=$_G['system']['con_forum_url'];
				$o="";
				foreach ($post_data as $k=>$v)
				{
				    $o.= "$k=".urlencode($v)."&";
				}
				$post_data=substr($o,0,-1);
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_URL,$url);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$result = curl_exec($ch);
				if (curl_errno($ch)) {   
	           		echo '<pre><b>����:</b><br />('.$url.')'.curl_error($ch);   
	        	}
				curl_close($ch);
				$arr = json_decode($result,true);
				foreach($arr as $k=>$v){
					$arr[$k] = iconv("utf-8", "gbk", $v);
				}
				if($arr['error']!=0){
					$msg = array($arr['msg']);
				}else{
					if($arr['accredit']==1){
						$sql = "update `{user}` set `forum_key`='{$arr['key']}',`forum_accredit`=1 where `user_id`={$_G['user_id']}";
						$re = $mysql->db_query($sql);
						if($re==false){
							$msg = array("����ʧ��,{$sql}");
						}else{
							$msg = array("����ɹ�");
						}
					}else{
						$msg = array("����ʧ��");
					}
				}
		}
	}
	//������˽
	elseif ($_U['query_type'] == "privacy"){
		if (isset($_POST['friend'])){	
			$var = array("friend","friend_comment","borrow_list","loan_log","sent_msg","friend_request","look_black","allow_black_sent","allow_black_request");
			$_result = post_var($var);
			$data['privacy'] = serialize($_result);
			$data['user_id'] = $_G['user_id'];
			$result = $user->UpdateUserAll($data);
			if ($result == false){
				$msg = array($result);	
			}else{
				$msg = array("��˽���óɹ�","",$url);	
			}
			
		}else{
			$result = unserialize($_G['user_result']['privacy']);
			$_U['user_privacy'] = $result;
		}
	}
	
	//ʵ����֤
	elseif ($_U['query_type'] == "realname"){
		if (isset($_POST['realname'])){
			$var = array("realname","sex","card_type","card_id","province","city","province","city","area","nation");
			$data = post_var($var);
			$data['user_id'] = $_G['user_id'];
			$data['birthday'] = get_mktime($_POST['birthday']);
			$data['real_status'] = 2;
			if ($data['birthday'] == ""){
				$msg = array("�������²���Ϊ�գ�������ˢ��ҳ�沢������д.","","?user&q=code/user/realname");	
			}else{
				$cord = $data['card_id'];
				if(strlen($cord)==15){
					$cord = idcard_15to18($data['card_id']);
				}
				$birthday1 = substr($cord, 6, 8);
				$birthday2 = str_replace("-", "", $_POST['birthday']);
				if (!isIdCard($data['card_id']) && $data['card_type']==1){
					$msg = array("���֤�����ʽ����ȷ","","?user&q=code/user/realname");
				}elseif($birthday1 != $birthday2 && $data['card_type']==1){
					$msg = array("����������д����,��֤����һ��","","?user&q=code/user/realname");
				}else{
					$result = userClass::CheckIdcard(array("user_id"=>$data['user_id'],"card_id"=>$data['card_id']));
					if($result == true){
						$msg = array("���֤�����Ѿ�����","","?user&q=code/user/realname");	
					}else{
						$_G['upimg']['file'] = "card_pic2";
						$_G['upimg']['code'] = "user";
						$pic_result = $upload->upfile($_G['upimg']);
						if ($pic_result!=""){
							$data['card_pic2'] = $pic_result['filename'];
						}
						$_G['upimg']['file'] = "card_pic1";
						$pic_result = $upload->upfile($_G['upimg']);
						if ($pic_result!=""){
							$data['card_pic1'] = $pic_result['filename'];
						}
						if($data['card_pic1'] == "" || $data['card_pic2'] == "" ){
							$msg = array("�������ϴ����֤��Ƭ���������⣬����ϵ��ƹ���","","?user&q=code/user/realname");	
						}else{
							$result = $user->UpdateUserAll($data);
							if ($result == false){
								$msg = array($result);	
							}else{
								$msg = array("������֤��ӳɹ�����ȴ�����Ա���","",$url);	
							}
						}
					}
				}
			}
		}
	}
	
	//������֤
	elseif ($_U['query_type'] == "email_status"){
		if (isset($_POST['email']) && $_POST['email']!="" ){
			$data['user_id'] = $_G['user_id'];
			$data['email'] = $_POST['email'];
			$result = $user->CheckEmail($data);
			if ($result==false){
				$result = $user->UpdateUserAll($data);
				if ($result == false){
					$msg = array($result);	
				}else{
					$data['username'] = $_G['user_result']['username'];
					$data['webname'] = $_G['system']['con_webname'];
					$data['title'] = $data['webname']."ע���ʼ�ȷ��";
					$data['encryption'] = md5($data['user_id']);
					$data['msg'] = RegEmailMsg($data);
					$data['type'] = "reg";
					if (isset($_SESSION['sendemail_time']) && $_SESSION['sendemail_time']+60*2>time()){
						$msg = array("��2���Ӻ��ٴ�����","",$url);
					}else{
						$result = $user->SendEmail($data);
						if ($result==true) {
							$mysql->db_query('update {user} set encryption=\''.$data['encryption'].'\',user_status=\'regemail\' where user_id='.$data['user_id']);
							$_SESSION['sendemail_time'] = time();
							$msg = array("������Ϣ�Ѿ����͵��������䣬��ע����ա�","",$url);
						}
						else{
							$msg = array("����ʧ�ܣ��������Ա��ϵ��","",$url);
						}
					}
				}
			}else{
				$msg = array("��������д�������Ѿ�����","",$url);	
			}
		}
	}
	
	//�ֻ���֤
	elseif ($_U['query_type'] == "phone_status"){
		if (isset($_POST['phone']) && is_numeric($_POST['phone']) && $_POST['type']=="getcode"){
			//$data['user_id'] = $_G['user_id'];
			//$data['phone_status'] = $_POST['phone'];
			$code = mt_rand(100000,999999);
			$lasttime=time()+5*60;
			$itype=3;
			$sql = "insert into `{sms_check}`(code,lasttime,user_id,addtime,itype,phone) values('".$code."','".$lasttime."',".$_G["user_id"].",unix_timestamp(),".$itype.",'".$_POST['phone']."')";
			$mysql->db_query($sql);
			$re = sendSMS($_G['user_id'], '�ֻ���֤��֤��Ϊ'.$code.'����5�������ύ��', 1, $_POST['phone']);
			//By Glay ����exit�˳�����echo��ֱ�ӷ���ajax msg
			if($re){
				echo 1;
				exit;
			}else{
				echo 0;
				exit;
			}
			//$result = $user->UpdateUserAll($data);
		}elseif($_POST['code']!="" && is_numeric($_POST['phone']) && !isset($_POST['type'])){
			$sql="select id,code,lasttime from `{sms_check}` where user_id={$_G["user_id"]} and phone='{$_POST['phone']}' and isuse=0 and itype=3 order by id desc";
			$re = $mysql->db_fetch_array($sql);
			if(!isset($re['code'])){
				$msg = array("�ֻ�������������","",$url);
			}else{
				if($re['lasttime']<time()){
					$msg = array("��֤���ѹ��ڣ������»�ȡ","",$url);
				}elseif($re['code']!=$_POST['code']){
					$msg = array("��֤����������","",$url);
				}else{
					$data['user_id'] = $_G['user_id'];
					$data['phone_status'] = 1;
					$data['phone'] = $_POST['phone'];
					$result = $user->UpdateUserAll($data);
					$mysql->db_query("update `{sms_check}` set isuse=1 where id={$re['id']}");
					if ($result == false){
						$msg = array($result);	
					}else{
						$msg = array("�ֻ���֤�ɹ�","",$url);	
					}
				}
			}
		}
	}
	
	//��Ƶ��֤
	elseif ($_U['query_type'] == "video_status"){
		if (isset($_POST['submit']) && $_POST['submit']!="" ){
			
			$data['user_id'] = $_G['user_id'];
			$data['video_status'] = 2;
			
			$result = $user->UpdateUserAll($data);
			if ($result == false){
				$msg = array($result);	
			}else{
				$msg = array("��Ƶ�����ɹ�����ȴ���ƹ�����Ա������ϵ","",$url);	
			}
		}
	}
	
	//������������
	elseif ($_U['query_type'] == "credit"){
		$_U['user_cache'] = userClass::GetUserCache(array("user_id"=>$_G['user_id']));//�û�����
	}
	
	//�������
	elseif ($_U['query_type'] == "reginvite"){
		
		//$oUrl=$_G['weburl'].urlencode("/index.php?user&q=going/reginvite&u=").$_G['user_id'];
		
		//$_U['user_inviteid'] =  shortenSinaUrl($oUrl);
		
		//$_U['user_inviteid'] = $_G['user_id'] ;
		
		//By Glay
		$encrypt="000001";
		$data = $_G['user_id'];		// ��������Ϣ
		//$key = 'reg_invite';					// ��Կ
		//$encrypt = encrypt($data,$key);
		//$decrypt = decrypt($encrypt, $key);
		//echo $encrypt, "\n", $decrypt;
		if (intval ( $data ) > 0) {
			
			$x = $data;
			$len = strlen ( $data );
			
			for($i = 0; $i < (6 - $len); $i ++) {
				$x = '0' . $x;
			}
			$encrypt = $x;
		}
		
		$_U ['user_inviteid'] = $encrypt;
	}
	
	
					

	//VIP����
	elseif ($_U['query_type'] == "applyvip"){
		if (isset($_POST['vip_remark'])){
			$data['user_id'] = $_G['user_id'];
			$data['vip_remark'] = nl2br($_POST['vip_remark']);;
			$data['kefu_userid'] = $_POST['kefu_userid'];
            if($data['kefu_userid'] == ""){
               $msg = array("��ѡ�������ƹ���","","?vip");
             }else{
				require_once ROOT_PATH.'modules/account/account.class.php';
				$re = accountClass::GetOneAccount(array('user_id'=>$_G['user_id']));
				if($re['use_money']<$_G['system']['con_vip_money']){
					 $msg = array("VIP����ʧ�ܣ��˻�����","","?vip");
				}else{
                	userClass::ApplyUserVip($data);//�û�����
                	$msg = array("VIP����ɹ�����ȴ�����Ա���","","?vip");
				}
            }
		}
	}

	//��Ϊ����
	elseif ($_U['query_type'] == "addfriend"){
		if (isset($_POST['type'])){
			$data['type'] = $_POST['type'];
			$data['content'] = nl2br($_POST['content']);
			$data['friends_userid'] = $_POST['friends_userid'];
			$data['user_id'] = $_G['user_id'];
			$results = userClass::GetOnes(array("user_id"=>$_G['user_id']));
			 
            $real_status=$results['real_status'];

			if($real_status!=1){

				$msg = array("�Բ���δʵ����֤��Ա������Ӻ��ѣ����Ƚ���ʵ����֤��"); 
			}else{
				$result = userClass::AddFriends($data);
				if ($result==false){
					$msg = array($result,"","/index.php?user&q=code/user/myfriend");	
				}else{
					$msg = array("��Ӻ��ѳɹ�����ȴ����ѵ����","","/index.php?user&q=code/user/myfriend");	
				}
			}
		}else{
			if($_G['user_result']['real_status']!=1){
				echo "<div style='text-align:center'>�Բ���δʵ����֤��Ա������Ӻ��ѣ����Ƚ���ʵ����֤��</div>";
				exit();
			}else{
				$result = userClass::GetOnes(array("username"=>$_REQUEST['username']));
				if ($result==false){
					$result = userClass::GetOnes(array("username"=>urldecode($_REQUEST['username'])));
					$_REQUEST['username'] = urldecode($_REQUEST['username']);
				}
				if ($result==false){
					echo "<div style='text-align:center'>�Ҳ������û����벻Ҫ�Ҳ�����</div>";
					exit;
				}elseif ($result['user_id']==$_G['user_id']){
					echo "<div style='text-align:center'>���ܼ��Լ�Ϊ���ѡ�</div>";
					exit;
				}else{
					echo "<form method='post' action='/index.php?user&q=code/user/addfriend'>";
					echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;���ѣ�{$_REQUEST['username']}<input type='hidden' name='friends_userid' value='{$result['user_id']}'></div>";
					echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;���ͣ�<select name='type'>";
					foreach ($_G["_linkage"]['friends_type'] as $key => $value){
						echo "<option value='{$value['value']}'>{$value['name']}</option>";
					}
					echo "</select></div><div align='left'><br>&nbsp;&nbsp;&nbsp;���ݣ�<textarea rows='5' cols='30' name='content'></textarea></div>";
					echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;<input type='submit' value='ȷ�����'></div>";
					echo "</form>";
					exit;
				}
			}
		}
	}
	
	//����ļ�Ϊ����
	elseif ($_U['query_type'] == "raddfriend"){
		if (isset($_POST['type'])){
			$data['type'] = $_POST['type'];
			$data['content'] = nl2br($_POST['content']);
			$data['friends_userid'] = $_POST['friends_userid'];
			$data['user_id'] = $_G['user_id'];
			$result = userClass::RAddFriends($data);
			if ($result==false){
				$msg = array($result,"","/index.php?user&q=code/user/myfriend");
			}else{
				$msg = array("�ɹ���Ӻ��ѳɹ�","","/index.php?user&q=code/user/myfriend");	
			}
		}else{
			$result = userClass::GetOnes(array("username"=>$_REQUEST['username']));
			if ($result==false){
				echo "<div style='text-align:center'>�Ҳ������û����벻Ҫ�Ҳ�����</div>";
				exit;
			}elseif ($result['user_id']==$_G['user_id']){
				echo "<div style='text-align:center'>���ܼ��Լ�Ϊ���ѡ�</div>";
				exit;
			}else{
				echo "<form method='post' action='/index.php?user&q=code/user/raddfriend'>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;���ѣ�{$_REQUEST['username']}<input type='hidden' name='friends_userid' value='{$result['user_id']}'></div>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;���ͣ�<select name='type'>";
				foreach ($_G["_linkage"]['friends_type'] as $key => $value){
					echo "<option value='{$value['value']}'>{$value['name']}</option>";
				}
				echo "</select></div><div align='left'><br>&nbsp;&nbsp;&nbsp;���ݣ�<textarea rows='5' cols='30' name='content'></textarea></div>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;<input type='submit' value='ȷ�����'></div>";
				echo "</form>";
				exit;
			}
		}
	}
	
	
	//��Ϊ����
	elseif ($_U['query_type'] == "checkaddfriend"){
		if (isset($_POST['type'])){
			$data['type'] = $_POST['type'];
			$data['content'] = nl2br($_POST['content']);
			$data['friends_userid'] = $_POST['friends_userid'];
			$data['user_id'] = $_G['user_id'];
			$result = userClass::AddFriends($data);
			if ($result==false){
				$msg = array($result,"","/index.php?user&q=code/user/myfriend");	
			}else{
				$msg = array("��Ӻ��ѳɹ�����ȴ����ѵ����","","/index.php?user&q=code/user/myfriend");	
			}
		}else{
			$result = userClass::GetOnes(array("username"=>$_REQUEST['username']));
			if ($result==false){
				echo "<div style='text-align:center'>�Ҳ������û����벻Ҫ�Ҳ�����</div>";
				exit;
			}elseif ($result['user_id']==$_G['user_id']){
				echo "<div style='text-align:center'>���ܼ��Լ�Ϊ���ѡ�</div>";
				exit;
			}else{
				echo "<form method='post' action='/index.php?user&q=code/user/addfriend'>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;���ѣ�{$_REQUEST['username']}<input type='hidden' name='friends_userid' value='{$result['user_id']}'></div>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;���ͣ�<select name='type'>";
				foreach ($_G["_linkage"]['friends_type'] as $key => $value){
					echo "<option value='{$value['value']}'>{$value['name']}</option>";
				}
				echo "</select></div><div align='left'><br>&nbsp;&nbsp;&nbsp;���ݣ�<textarea rows='5' cols='30' name='content'></textarea></div>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;<input type='submit' value='ȷ�����'></div>";
				echo "</form>";
				exit;
			}
		}
	}
	
	//ɾ������
	elseif ($_U['query_type'] == "delfriend"){
		$data['user_id'] = $_G['user_id'];
		$data['friend_username'] = $_REQUEST['username'];
		userClass::DeleteFriends($data);
		$msg = array("ɾ���ɹ�","",$_U['query_url']."/myfriend");
	
	}
	
	//��Ϊ������
	elseif ($_U['query_type'] == "blackfriend"){
	
        $data['user_id'] = $_G['user_id'];
		$data['friend_username'] = $_REQUEST['username'];
		userClass::BlackFriends($data);
		$msg = array("�ѳɹ����������","",$_U['query_url']."/black");
            
	
	}
	//���¼�Ϊ����
	elseif ($_U['query_type'] == "readdfriend"){
		$data['user_id'] = $_G['user_id'];
		$data['friend_username'] = $_REQUEST['username'];
		userClass::ReaddFriends($data);
		$msg = array("�ѳɹ���Ϊ����","",$_U['query_url']."/myfriend");
	
	}
	
	//�����Ϊ��ְ
	elseif ($_U['query_type'] == "jianzhi"){
		if(isset($_POST['content']) && $_POST['content']!=""){
			$data['user_id'] = $_G['user_id'];
			$data['content'] = $_POST['content'];
			$data['old_type'] = $_G['user_result']['type_id'];
			$data['new_type'] = 7;
			userClass::TypeChange($data);
			$msg = array("�������ύ����ȴ�����Ա�����","",$_U['query_url']."/jianzhi");
		}else{
			$_U['typechange_result'] = userClass::TypeChange($data);
		}
	}
}
//By Glay
function encrypt($data, $key) {
	$key = md5 ( $key );
	$x = 0;
	$len = strlen ( $data );
	$l = strlen ( $key );
	for($i = 0; $i < $len; $i ++) {
		if ($x == $l) {
			$x = 0;
		}
		$char .= $key {$x};
		$x ++;
	}
	for($i = 0; $i < $len; $i ++) {
		$str .= chr ( ord ( $data {$i} ) + (ord ( $char {$i} )) % 256 );
	}
	return base64_encode ( $str );
}


function shortenSinaUrl($url, $key = '2746907695') {
	$opts['http'] = array('method' => "GET", 'timeout'=>60,);
	$context = stream_context_create($opts);
	$url = "http://api.t.sina.com.cn/short_url/shorten.json?source=$key&url_long=$url";
	$html =  @file_get_contents($url,false,$context);
	$url = json_decode($html,true);
	if (!empty($url[0]['url_short'])) {
		return $url[0]['url_short'];
	}
	return $url;
}


$template = "user_info.html.php";
?>
