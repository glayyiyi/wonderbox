<?
if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���
check_rank("manager_".$_A['query_type']);//���Ȩ��

//liukun add for bug 52 begin
$firePHPEnable=TRUE;
if ($firePHPEnable){
	require_once('modules/FirePHPCore/FirePHP.class.php');
	require_once('modules/FirePHPCore/fb.php');
	ob_start();

	$firephp = FirePHP::getInstance(true);
}
//liukun add for bug 52 end

$list_purview =  array("manager"=>array("����Ա����"=>array("manager_list"=>"����Ա�б�","manager_new"=>"��ӹ���Ա","manager_edit"=>"�޸Ĺ���Ա","manager_type"=>"����Ա����","manager_type_order"=>"�޸���������","manager_type_del"=>"ɾ������","manager_type_new"=>"�������","manager_type_edit"=>"�༭����")));//Ȩ��
$_A['list_name'] = "����Ա����";
$_A['list_menu'] = "<a href='{$_A['query_url']}{$_A['site_url']}'>����Ա�б�</a> - <a href='{$_A['query_url']}/new{$_A['site_url']}'>��ӹ���Ա</a> - <a href='{$_A['query_url']}/type{$_A['site_url']}'>����Ա����</a> ";
$list_table ="";


/**
 * ����Ա�б�
**/
if ($_A['query_type'] == "list"){
	$_A['list_title'] = "�б�";
	if (isset($_POST['user_id']) && $_POST['user_id']!=""){
		userClass::ActionUser(array("user_id"=>$_POST['user_id'],"order"=>$_POST['order']));
		$msg = array("�޸ĳɹ�","",$_A['query_url'].$_A['query_site']);
	
	}else{
		$data['page'] = $_A['page'];
		$data['epage'] = $_A['epage'];
		$data['type'] = 1;
		
		$result = $user->GetList($data);
		$pages->set_data($result);
		
		$_A['user_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}
}

/**
 * ��Ӻͱ༭�û�
**/
elseif ($_A['query_type'] == "new" || $_A['query_type'] == "edit"){
	if ($_A['query_type'] == "new" ){
		$_A['list_title'] = "��ӹ���Ա";
	}else{
		$_A['list_title'] = "�޸Ĺ���Ա";
	}
	
	if (isset($_POST['realname'])){
		$var = array("username","email","type_id","realname","birthday","password","sex","qq","wangwang","tel","phone","address","status","province","city","area","serial_id");
		$data = post_var($var);
		$data['area'] = post_area();
		$purview_usertype = explode(",",$_SESSION['purview']);
		if (!in_array("manager_new_".$data['type_id'],$purview_usertype) && !in_array("other_all",$purview_usertype) ){
			$msg = array("��û��Ȩ����ӻ�������Ĺ���Ա");
		}else{
			if ($_A['query_type'] == "new"){
				
				$check_username = $user->CheckUsername(array("username"=>$data['username']));
				$check_email = $user->CheckEmail(array("email"=>$data['email']));
				if ($check_username) {
					$msg = array("�û����Ѿ�����");
				}elseif ($check_email){
					$msg = array("�����Ѿ�����");
				}else{
					$masg = '';
					if ($rdGlobal['uc_on']){
						require_once ROOT_PATH . '/core/config_ucenter.php';
						require_once ROOT_PATH . '/uc_client/client.php';
						$uid = uc_user_register($data['username'], $data["password"], $data['email']);
						if ($uid <= 0) {
							if ($uid == -1) {
								$masg = '�û������Ϸ�';
							} elseif ($uid == -2) {
								$masg = '����Ҫ����ע��Ĵ���';
							} elseif ($uid == -3) {
								$masg = '�û����Ѿ�����';
							} elseif ($uid == -4) {
								$masg = 'Email ��ʽ����';
							} elseif ($uid == -5) {
								$masg = 'Email ������ע��';
							} elseif ($uid == -6) {
								$masg = '�� Email �Ѿ���ע��';
							} else {
								$masg = 'δ����';
							}
						}
					}
					if($masg == ''){
						$result = $user->AddUser($data);
						if ($result>0){
							$msg = array("��ӹ���Ա�ɹ�");
						}else{
							$msg = array($result);
						}
					}else{
						$msg = array($masg);
					}
				}	
				
			}else{
				if ($data['password']==""){
					unset($data['password']);
				}
				$data["user_id"] = $_POST['user_id'];
				$check_email = $user->CheckEmail(array("email"=>$data['email'],"user_id"=>$data["user_id"]));
				if ($check_email){
					$msg = array("�����Ѿ�����");
				}else{
					$lt = 1;
					if($rdGlobal['uc_on']==true){
						$user_result = $mysql->db_fetch_array('select username,email from {user} where user_id='.$data["user_id"]);
						if ($data['password']==""){
							$newpad = '';
						}else{
							$newpad = $data['password'];
						}
						if($data['email']==$user_result['email']){
							$email = '';
						}else{
							$email = $data['email'];
						}
						if($newpad!='' || $email!=''){
							$lt = 0;
							require_once ROOT_PATH . '/core/config_ucenter.php';
							require_once ROOT_PATH . '/uc_client/client.php';
							$ucresult = uc_user_edit($user_result['username'], '', $newpad, $email, 1);
							if ($ucresult == -1) {
								$masg = array("�����벻��ȷ,��ʹ����̳�ĵ�¼����");
							} elseif ($ucresult == -4) {
								$masg = array("Email ��ʽ����");
							} elseif ($ucresult == -5) {
								$masg = array("Email ������ע��");
							} elseif ($ucresult == -6) {
								$masg = array("�� Email �Ѿ���ע��");
							} else{
								$lt = 1;
							}
						}
					}
					if($lt==1){
						$result = $user->UpdateUser($data);
						if ($result===false){
							$msg = array($result);
						}else{
							$msg = array("�޸ĳɹ�");
						}
					}else{
						$msg = $masg;
					}
				}
			}
		}
	}else{
		$user_type = $user->GetTypeList(array("type"=>1));
		if ($user_type==false){
			$msg = array("��û�����ͣ��������","����û�����","{$_A['query_url']}/type_new");
		}else{
			foreach ($user_type as $key => $value){
				$purview_usertype = explode(",",$_SESSION['purview']);
				if (in_array("manager_new_".$value['type_id'],$purview_usertype) || in_array("other_all",$purview_usertype) ){
					$list_type[$value['type_id']] = $value['name']; 
				}
			}
			$magic->assign("list_type",$list_type);
		}
		if ($_A['query_type'] == "edit"){
			if ($_REQUEST['user_id']==1){
				$msg = array("�˹���Ա���ܱ༭,���Ҫ�޸ģ��뵽�޸ĸ�����Ϣ");
			}else{
				$_A['user_result'] = $user->GetOne(array("user_id"=>$_REQUEST['user_id']));
			}
		}
	}
}


/**
 * ɾ���û�
**/
elseif ($_A['query_type'] == "del"){
	if ($_REQUEST['user_id']==1){
		$msg = array("���û�����ɾ��");
	}else{
		$result = $user->DeleteUser(array("user_id"=>$_REQUEST['user_id'],"type"=>1));
		if ($result == false){
			$msg = array("���������������Ա��ϵ");
		}else{
			$msg = array("ɾ���ɹ�");
		}
	}
	$user->add_log($_log,$result);//��¼����
}


/**
 * �û������б�
**/
elseif ($_A['query_type'] == "type"){
	$_A['user_type_list'] = $user->GetTypeList(array("type"=>1));//0��ʾ�û�������1��ʾ�����������
}

/**
 * ��Ӻͱ༭�û�����
**/
elseif ($_A['query_type'] == "type_new" || $_A['query_type'] == "type_edit"){
	if (isset($_POST['name'])){
		$var = array("name","order","remark","status","summary","purview");
		$data = post_var($var);
		if ($data['purview']!=""){
			$data['type'] = 1;
			if ($_A['query_type'] == "type_new"){
				$result = $user->AddType($data);
			}else{
				$data['type_id'] = $_POST['type_id'];
				$result = $user->UpdateType($data);
			}
			if ($result == false){
				$msg = array($result);
			}else{
				$msg = array("���Ͳ����ɹ�","","{$_A['query_url']}/type&a=system");
			}
		}else{
			$msg = array("��ѡ��Ȩ��");
		}
		$user->add_log($_log,$result);//��¼����
	}else{
		if ($_A['query_type'] == "type_edit"){
			$result = $user->GetTypeOne(array("type_id"=>$_GET['type_id']));
			$magic->assign("result",$result);
		}
		$_A['user_type_list'] = $user->GetTypeList(array("type"=>1));
		$_user_type = "";
		foreach ($_A['user_type_list'] as $key => $value){
			$_user_type['manager_new_'.$value['type_id']] = $value['name']; 
		}
		$_purview = array("other"=>array("����Ȩ��"=>array("other_all"=>"����Ȩ��","site_all"=>"��Ŀ����","module_all"=>"ģ�����","system_all"=>"ϵͳ����","bbs_all"=>"��̳����")),
		"site"=>array("��Ŀ����"=>array("site_list"=>"��Ŀ����","site_new"=>"�����Ŀ","site_edit"=>"�޸���Ŀ","site_move"=>"�ƶ���Ŀ","site_del"=>"ɾ����Ŀ")),
		"module"=>array("ģ�����"=>array("module_list"=>"ģ���б�","module_new"=>"���ģ��","site_edit"=>"�޸�ģ��")),
		"wzdcash"=>array("�����ѡ"=>array("account_deduct"=>"��Ա���ÿ۳�","account_vipTC"=>"�鿴��Ա����","account_cashCK"=>"���ֲο�","account_recharge_new"=>"������³�ֵ","account_recharge_view"=>"��˳�ֵ","account_cash_view"=>"�������","account_ticheng"=>"�鿴�û����","account_moneyCheck"=>"�ʽ���˱�")), 
		"wzdborrow"=>array("�Ŵ���˱�ѡ"=>array("attestation_all_s"=>"�û���Ƶ�ֳ���֤����","borrow_repayment"=>"�ѻ������","borrow_liubiao"=>"����","borrow_late"=>"����","borrow_lateFast"=>"��Ѻ�굽��","borrow_tongji"=>"����ͳ��")), 
		"system"=>array("ϵͳ����"=>array("system_info"=>"ϵͳ����","system_dbbackup"=>"���ݿⱸ��","system_watermark"=>"ͼƬˮӡ","system_email"=>"�ʼ�����","system_clearcache"=>"��ջ���","system_flag"=>"�Զ����ĵ�","system_makehtml"=>"������վ","system_fujian"=>"��������")),
		"manager_new"=>array("��ӹ���Ա"=>$_user_type)
		);
		
		$result = moduleClass::GetList(array("type"=>"install"));

		foreach($result as $key => $value){
			if ($value['purview']!=""){
				$_purview = array_merge($_purview,unserialize(html_entity_decode($value['purview'])));
			}
		}
		
		//liukun add for bug 52 begin
		fb($_purview, FirePHP::TRACE);
		//liukun add for bug 52 end
		$_A['user_purview'] = $_purview;
	}
}




/**
 * �޸��û���������
**/
elseif ($_A['query_type'] == "type_order"){
	$data['order'] = $_POST['order'];
	$data['type_id'] = $_POST['type_id'];
	$result = $user->OrderType($data);
	if ($result == false){
		$msg = array("���������������Ա��ϵ");
	}else{
		$msg = array("�����޸ĳɹ�");
	}
	$user->add_log($_log,$result);//��¼����
}


/**
 * ɾ���û�����
**/
elseif ($_A['query_type'] == "type_del"){
	$data['type_id'] = $_REQUEST['type_id'];
	if ($data['type_id']==1){
		$msg = array("��������Ա���ͽ�ֹɾ��");
	}else{
		$result = $user->DeleteType($data);
		if ($result){
			$msg = array("ɾ���ɹ�");
		}else{
			$msg = array($result);
		}
		$user->add_log($_log,$result);//��¼����
	}
}

?>