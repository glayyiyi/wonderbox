<?
if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

if ($_A['query_type'] == "biaoTJ"){
	//����Ȩ��
}else{
	check_rank("borrow_".$_A['query_type']);//���Ȩ��
}

include_once("borrow.class.php");

$_A['list_purview'] =  array("borrow"=>array("������"=>array("borrow_list"=>"����б�",
"borrow_new"=>"��ӽ��",
"borrow_edit"=>"�༭���",
"borrow_amount"=>"�����",
"borrow_amount_view"=>"��ȹ���",
"borrow_del"=>"ɾ�����",
"borrow_view"=>"��˽��",
"borrow_full"=>"�����б�",
"borrow_repayment"=>"�ѻ���",
"borrow_liubiao"=>"����",
"borrow_late"=>"����",
"borrow_full_view"=>"����鿴")));
//Ȩ��
$_A['list_name'] = $_A['module_result']['name'];
$_A['list_menu'] = "<a href='{$_A['query_url']}{$_A['site_url']}'>���н��</a> - <a href='{$_A['query_url']}&status=0{$_A['site_url']}'>�������</a> -  <a href='{$_A['query_url']}&status=1{$_A['site_url']}'>�����б��</a> -  <a href='{$_A['query_url']}/full&status=1{$_A['site_url']}'>���������</a> -  <a href='{$_A['query_url']}/full&status=3{$_A['site_url']}'>�������ͨ��</a> - <a href='{$_A['query_url']}/full&status=4{$_A['site_url']}'>�������δͨ��</a> - <a href='{$_A['query_url']}/repayment{$_A['site_url']}&status=1'>�ѻ���</a>  -  <a href='{$_A['query_url']}/liubiao{$_A['site_url']}'>����</a>  - <a href='{$_A['query_url']}/late{$_A['site_url']}'>����</a> - <a href='{$_A['query_url']}/lateFast{$_A['site_url']}'>��Ѻ�굽��</a>  - <a href='{$_A['query_url']}/amount{$_A['site_url']}'>�����</a> - <a href='{$_A['query_url']}/tongji{$_A['site_url']}'>ͳ��</a>";

if ($_A['query_type'] == "list"){
	$_A['list_title'] = "��Ϣ�б�";
	if (isset($_POST['id']) && $_POST['id']!=""){
		$data['id'] = $_POST['id'];
		$data['flag'] = $_POST['flag'];
		$data['view'] = $_POST['view'];
		$result = borrowClass::Action($data);
		if ($result==true){
			$msg = array("�޸ĳɹ�","",$_A['query_url'].$_A['site_url']);
		}else{
			$msg = array("�޸�ʧ�ܣ��������Ա��ϵ");
		}
	
	}else{
		if (isset($_GET['user_id'])){
			$data['user_id'] = $_GET['user_id'];
		}
		if (isset($_GET['status']) && $_GET['status']!=""){
			$data['status'] = $_GET['status'];
		}
		if (isset($_GET['biaoType']) && $_GET['biaoType']!=""){
			$data['biaoType'] = $_GET['biaoType'];
		}
		if (isset($_GET['username'])){
			$data['username'] = $_GET['username'];
		}
		if(isset($_GET['dotime1'])){
			$data['dotime1']=$_GET['dotime1'];
		}
		if(isset($_GET['dotime2'])){
			$data['dotime2']=$_GET['dotime2'];
		}
		if (isset($_GET['type']) && $_GET['type']=="excel"){
			$title = array("���","�û�����","����","������","�����","���ʣ�%��","�������","����ʱ��","״̬");
			$data['limit'] = "all";
			$result = borrowClass::GetList($data);
			borrowClass::borrowListForExcel(array('type'=>'borrowlist','title'=>$title,'excelresult'=>$result));
			exit;
		}
		$data['page'] = $_A['page'];
		$data['epage'] = $_A['epage'];
		//$result = borrowClass::GetList($data);
		$result = borrowClass::GetListAdmin($data);
		if (is_array($result)){
			$pages->set_data($result);
			$_A['borrow_list'] = $result['list'];
			$_A['showpage'] = $pages->show(3);
		}else{
			$msg = array($result);
		}
	}
}
/**
 * ��ȹ���
**/
elseif ($_A['query_type'] == "amount"){
	check_rank("borrow_amount");//���Ȩ��
	$_A['list_title'] = "��ȹ���";
	if (isset($_GET['user_id']) && $_GET['user_id']!=""){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	if (isset($_GET['type']) && $_GET['type']!=""){
		$data['type'] = $_GET['type'];
	}
    if (isset($_GET['status']) && $_GET['status']!=""){
		$data['status'] = $_GET['status'];
	}	
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = borrowClass::GetAmountApplyList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['borrow_amount_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * ��ȹ���
**/
elseif ($_A['query_type'] == "amount_view"){
	check_rank("borrow_amount_view");//���Ȩ��
	$data['id'] = $_GET['id'];
	$result = borrowClass::GetAmountApplyOne($data);
	if (isset($_POST['status'])){
		if(strtolower($_POST['valicode'])!=$_SESSION['valicode']){
			$msg = array("��֤����������");
		}else{
			$_SESSION['valicode']="";
			$data['user_id'] = $result['user_id'];
			$data['status'] = $_POST['status'];
			$data['type'] = $_POST['type'];
			$data['account'] = $_POST['account'];
			$data['verify_remark'] = $_POST['verify_remark'];
			$result = borrowClass::CheckAmountApply($data);
			if ($result !=1){
				$msg = array($result);
			}else{
				$msg = array("�����ɹ�","",$_A['query_url']."/amount&a=borrow");
			}
			$user->add_log($_log,$result);//��¼����
		}
	}else{
		if(is_array($result)){
			$_A['borrow_amount_result'] = $result;	
		}else{
			$msg = array($result);
		}	
	}
}
/**
 * ���
**/
/*
elseif ($_A['query_type'] == "new"  || $_A['query_type'] == "edit" ){
	check_rank("borrow_new");//���Ȩ��
	$_A['list_title'] = "������Ϣ";
	//��ȡ�û�id����Ϣ
	if (isset($_REQUEST['user_id']) && isset($_POST['username'])){
		if(isset($_POST['user_id']) && $_POST['user_id']!=""){
			$data['user_id'] = $_POST['user_id'];
			$result = userClass::GetOne($data);
		}elseif(isset($_POST['username']) && $_POST['username']!=""){
			$data['username'] = $_POST['username'];
			$result = userClass::GetOne($data);
		}
		if ($result==false){
			$msg = array("�Ҳ������û�");
		}else{
			echo "<script>location.href='".$_A['query_url']."/new&user_id={$result['user_id']}'</script>";
		}
	}
	elseif (isset($_POST['name'])){
		$var = array("user_id","name","use","time_limit","style","account","apr","lowest_account","most_account","valid_time","award","part_account","funds","is_false","open_account","open_borrow","open_tender","open_credit","content");
		$data = post_var($var);
		if ($_POST['status']!=0 || $_POST['status']!=-1){
			$msg = array("�˱��Ѿ����б�����Ѿ���ɣ������޸�","",$_A['query_url'].$_A['site_url']);
		}else{
			if ($_A['query_type'] == "new"){
				$result = borrowClass::Add($data);
			}else{
				$data['id'] = $_POST['id'];
				$result = borrowClass::Update($data);
			}
			
			if ($result !== true){
				$msg = array($result);
			}else{
				$msg = array("�����ɹ�","",$_A['query_url'].$_A['site_url']);
			}
		}
		$user->add_log($_log,$result);//��¼����
	}
	elseif ($_A['query_type'] == "edit" ){
		$data['user_id'] = $_REQUEST['user_id'];
		$data['id'] = $_REQUEST['id'];
		$result = borrowClass::GetOne($data);
		if (is_array($result)){
			$_A['borrow_result'] = $result;
		}else{
			$msg = array($result);
		}
		
	}
	elseif(isset($_REQUEST['user_id']) && !isset($_POST['username'])){
		$data['user_id'] = $_REQUEST['user_id'];
		$result = userClass::GetOne($data);
		if ($result==false){
			$msg = array("������������","",$_A['query_url']);
		}else{
			$_A['user_result'] = $result;
			//$result = borrowClass::GetOne($data);
			//$_A['borrow_result'] = $result;
		}
	}
}
*/
/**
 * �鿴
**/
elseif ($_A['query_type'] == "view"){
	check_rank("borrow_view");//���Ȩ��
	$_A['list_title'] = "�鿴��֤";
	if (isset($_POST['id'])){
		$var = array("id","status","verify_remark");
		$data = post_var($var);
		$data['verify_user'] = $_G['user_id'];
		$data['verify_time'] = time();
		$result = borrowClass::Verify($data);
		if ($result==false){
			$msg = array("���ʧ��");
		}else{
			//����û��Ķ�̬
			$brsql="select * from `{borrow}` where id ='".$_POST['id']."'";
			$br_row = $mysql->db_fetch_array($brsql);
			if($data['status']==1){
				//�Զ�Ͷ��
				$auto['id']=$br_row['id'];
				$auto['user_id']=$br_row['user_id'];
				$auto['total_jie']=$br_row['account'];
				$auto['zuishao_jie']=$br_row['lowest_account'];
				borrowClass::auto_borrow($auto);

				$_data['user_id'] = $_POST['user_id'];
				$_data['content'] = "�ɹ�������\"<a href=\'/invest/a{$data['id']}.html\' target=\'_blank\'>{$_POST['name']}</a>\"����";
				$result = userClass::AddUserTrend($_data);
			}else{
				if($br_row['is_mb'] == 1){
					require_once ROOT_PATH.'/modules/borrow/biao/miaobiao.class.php';
					$data_1['user_id']=$br_row['user_id'];
					$data_1['apr']=$br_row['apr'];
					$data_1['account']=$br_row['account'];
					$data_1['id']=$br_row['id'];
					$data_1['name']=$br_row['name'];
					$miaobiao = new miaobiaoClass();
					$miaobiao->cancel($data_1);
				}
			}
			$msg = array("��˲����ɹ�","",$_A['query_url'].$_A['site_url']."&a=borrow");
		}
		$user->add_log($_log,$result);//��¼����
	}else{
		$data['id'] = $_GET['id'];
		$data['user_id'] = $_GET['user_id'];
		$_A['borrow_result'] = borrowClass::GetOne($data);
	}
}
/**
 * ɾ��
**/
/*
elseif ($_A['query_type'] == "del"){
	check_rank("borrow_del");//���Ȩ��
	$data['id'] = $_GET['id'];
	$result = borrowClass::Delete($data);
	if ($result !== true){
		$msg = array($result);
	}else{
		$msg = array("ɾ���ɹ�","",$_A['query_url'].$_A['site_url']);
	}
	$user->add_log($_log,$result);//��¼����
}
*/
/**
 * �����б�
**/
elseif ($_A['query_type'] == "full"){
	check_rank("borrow_full");//���Ȩ��
	$_A['list_title'] = "��Ϣ�б�";
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$data['type'] = 'review';
	if (isset($_GET['status']) && $_GET['status']!=""){
		$data['status'] = $_GET['status'];
	}
	if (isset($_GET['biaoType']) && $_GET['biaoType']!=""){
		$data['biaoType'] = $_GET['biaoType'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	//liukun add for bug 52 begin
	//fb($data, FirePHP::TRACE);
	//liukun add for bug 52 end
	//$result = borrowClass::GetList($data);
	$result = borrowClass::GetListAdmin($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['borrow_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * ���곷��
**/
elseif ($_A['query_type'] == "cancel"){
	check_rank("borrow_cancel");//���Ȩ��
	$_A['list_title'] = "����";
	if(strtolower($_POST['valicode'])!=$_SESSION['valicode']){
		$msg = array("��֤����������");
	}else{
		$_SESSION['valicode']="";
		$re = borrowClass::Cancel(array("id"=>$_POST['id']));
		if($re==false){
			$msg = array("����ʧ��","",$_A['query_url'].$_A['site_url']);
		}else{
			$msg = array("���سɹ�","",$_A['query_url'].$_A['site_url']);
		}
	}
}
/**
 * �ѻ�����
**/
elseif($_A['query_type'] == "repayment"){
	check_rank("borrow_repayment");//���Ȩ��
	$_A['list_title'] = "������Ϣ";
	$data['page'] = $_A['page'];
	$data['epage'] = 10;
	$data['order'] = "repayment_time";
	$data['borrow_status'] = 3;
	if (isset($_GET['status']) && $_GET['status']!=""){
		$data['status'] = $_GET['status'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	if (isset($_GET['keywords']) && $_GET['keywords']!=""){
		$data['keywords'] = $_GET['keywords'];
	}
	if (isset($_GET['biaoType']) && $_GET['biaoType']!=""){
		$data['biaoType'] = $_GET['biaoType'];
	}
	if(isset($_GET['dotime1']) && $_GET['dotime1']!=""){
		$data['dotime1'] = $_GET['dotime1'];
	}
	if(isset($_GET['dotime2']) && $_GET['dotime2']!=""){
		$data['dotime2'] = $_GET['dotime2'];
	}
	if ($_GET['type']=="excel"){
			$title = array("���","�����","������","����","����ʱ��","������","������Ϣ","����ʱ��","״̬");
			$data['limit'] = "all";
			$result = borrowClass::GetRepaymentList($data);
			borrowClass::borrowListForExcel(array('type'=>'repaymentlist','title'=>$title,'excelresult'=>$result));
			exit;
	}
	$result = borrowClass::GetRepaymentList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['borrow_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * �����б�
**/
elseif ($_A['query_type'] == "liubiao"){
	check_rank("borrow_liubiao");//���Ȩ��
	$_A['list_title'] = "����";
	$data['page'] = $_A['page'];
	$data['epage'] = 25;
	$data['type'] = "late";
	$data['status'] = "1";
	$result = borrowClass::GetList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['borrow_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * �����޸�
**/
elseif ($_A['query_type'] == "liubiao_edit"){
	check_rank("borrow_liubiao");//���Ȩ��
	$_A['list_title'] = "�������";
	if (isset($_POST['status'])){
		if(strtolower($_POST['valicode'])!=$_SESSION['valicode']){
			$msg = array("��֤����������");
		}else{
			$_SESSION['valicode']="";
			$data['days'] = $_POST['days'];
			$data['id'] = $_POST['id'];
			$data['status'] = $_POST['status'];
			$result = borrowClass::ActionLiubiao($data);
			if($result==true){
				$msg = array("�����ɹ�","",$_A['query_url']."/liubiao".$_A['site_url']);
			}else{
				$msg = array("����ʧ��");
			}
		}
	}else{
		$data['id'] = $_GET['id'];
		$result = borrowClass::GetOne($data);
		$_A['borrow_result'] = $result;
	}
}

/**
 * ��ת��ֹͣ��ת
 **/
elseif ($_A['query_type']=="stoplz"){
	check_rank("borrow_stoplz");
	$id = $_GET['id'];
	if($id>0){
		$sql = "update `{borrow}` set valid_time=0 where id=$id";
		$re = $mysql->db_query($sql);
		if($re==false){
			$msg = array("����ʧ��");
		}else{
			$msg = array("�����ɹ�");
		}
	}else{
		$msg = array("�벻Ҫ�Ҳ���");
	}
}
/**
 * ���긴��
**/
elseif ($_A['query_type'] == "full_view"){
	global $mysql;
	check_rank("borrow_full_view");//���Ȩ��
	$_A['list_title'] = "���괦��";
	if(!isset($_POST['id']) && !isset($_GET['id'])){
		$msg = array("��������");
	}elseif (isset($_POST['id'])){
		if($_SESSION['valicode']!=strtolower($_POST['valicode'])){
			$msg = array("��֤�벻��ȷ");
		}else{
			$_SESSION['valicode']="";
			$var = array("id","status","repayment_remark");
			$data = post_var($var);
			$data['repayment_user'] = $_G['user_id'];
            $data['verify_time'] = time();         
            $sql = "select status from {borrow}  where id=".$_POST['id'];
            $resultBorrow = $mysql->db_fetch_array($sql);
            if($resultBorrow['status']==3 && $resultBorrow['status']==4){
                $msg = array("�˱��Ѿ���˹���������˴����У������ظ����");
            }else{
                $result = borrowClass::AddRepayment($data);
                if(is_bool($result)){
                	if ($result ==false){
                		$msg = array("����ʧ��");
                	}else{
                		$msg = array("�����ɹ�","",$_A['query_url']."/full".$_A['site_url']);
                	}
                }else{
                	$msg = array($result);
                }
           	}
		}
		$user->add_log($_log,$result);//��¼����
	}else{
		$data['id'] = $_GET['id'];
		$_A['borrow_result'] = borrowClass::GetOne($data);
		if ($_A['borrow_result']['status']==1 && ($_A['borrow_result']['is_lz']!=1 || ($_A['borrow_result']['is_lz']==1 && $_A['borrow_result']['account_yes']==0))){
			$data['borrow_id'] = $data['id'];
			$data['page'] = $_A['page'];
			$data['epage'] = $_A['epage'];
			$result = borrowClass::GetTenderList($data);
			$_A['borrow_repayment'] = borrowClass::GetRepayment(array("id"=>$data['id']));
			if (is_array($result)){
				$pages->set_data($result);
				$_A['borrow_tender_list'] = $result['list'];
				$_A['showpage'] = $pages->show(3);
			}else{
				$msg = array($result);
			}
		}else{
			$msg = array("��ǰ�����û��Ѿ����� �� ���Ĳ�������, ��ˢ�±�ҳ��");
		}
	}
}
/**
 * ���ڻ���
**/
elseif ($_A['query_type'] == "late"){
	check_rank("borrow_late");//���Ȩ��
	$_A['list_title'] = "���ڻ���";
	if (isset($_POST['id'])){
		/*
		if($_SESSION['valicode']!=$_POST['valicode']){
			$msg = array("��֤�벻��ȷ");
		}else{
			$_SESSION['valicode'] = "";
			$var = array("id","status","repayment_remark");
			$data = post_var($var);
			$data['repayment_user'] = $_G['user_id'];
			$result = borrowClass::AddRepayment($data);
			if ($result ==false){
				$msg = array($result);
			}else{
				$msg = array("�����ɹ�","",$_A['query_url']."/full".$_A['site_url']);
			}
		}
		$user->add_log($_log,$result);//��¼����
		*/
	}else{
		$data['page'] = $_A['page'];
		$data['epage'] = $_A['epage'];
		$data['status'] = "0,2";
		$data['repayment_time'] = time();
		if(isset($_GET['username'])){
			$data['username'] = $_GET['username'];
		}
		if(isset($_GET['status'])){
			$data['status'] = $_GET['status'];
		}
		if ($_GET['type']=="excel"){
			$title = array("�����","�����","������","����","����ʱ��","Ӧ����Ϣ","Ԥ������","����","״̬");
			$data['limit'] = "all";
			$result = borrowClass::GetRepaymentList($data);
			borrowClass::borrowListForExcel(array('type'=>'late','title'=>$title,'excelresult'=>$result));
			exit;
		}
		$result = borrowClass::GetRepaymentList($data);
		if (is_array($result)){
			$pages->set_data($result);
			$_A['borrow_repayment_list'] = $result['list'];
			$_A['showpage'] = $pages->show(3);
		}else{
			$msg = array($result);
		}
	}
}
/**
 * �������ڽ��
**/
elseif ($_A['query_type'] == "lateFast"){
	$_A['list_title'] = "��Ѻ�굽��";
	if(isset($_POST['id'])){
		if($_SESSION['valicode']!=strtolower($_POST['valicode'])){
			$msg = array("��֤�벻��ȷ");
		}else{
			$var = array("id","status","repayment_remark");
			$data = post_var($var);
			$data['repayment_user'] = $_G['user_id'];
			$result = borrowClass::AddRepayment($data);
			if ($result ==false){
				$msg = array($result);
			}else{
				$msg = array("�����ɹ�","",$_A['query_url']."/full".$_A['site_url']);
			}
			$_SESSION['valicode'] = "";
		}
		$user->add_log($_log,$result);//��¼����
	}else{
		$data['page'] = $_A['page'];
		$data['epage'] = $_A['epage'];
		$data['status'] = "0,2";
        $data['is_fast'] = 1;
		$data['repayment_time'] = time();
		if(isset($_GET['status'])){
			$data['status'] = $_GET['status'];
		}
		if(isset($_GET['username'])){
			$data['username'] = $_GET['username'];
		}
		//add by weego for latefast to excel 20120831
		if (isset($_GET['type']) && $_GET['type']=="excel"){
			$title = array("���","�û���","������","����","����ʱ��","Ӧ����Ϣ","Ӧ����Ϣ","��������","����","״̬");
			$data['limit'] = "all";
			$result = borrowClass::GetRepaymentList($data);
			borrowClass::borrowListForExcel(array('type'=>'lateFast','title'=>$title,'excelresult'=>$result));
			exit;
		}
		$result = borrowClass::GetRepaymentList($data);
		if (is_array($result)){
			$pages->set_data($result);
			$_A['borrow_repayment_list'] = $result['list'];
			$_A['showpage'] = $pages->show(3);
		}else{
			$msg = array($result);
		}
	}
}
/**
 * ���ڻ�����վ����
**/
elseif ($_A['query_type'] == "late_repay"){
	check_rank("borrow_late");//���Ȩ��
	if(isset($_POST['id'])){
		if(strtolower($_POST['valicode'])!=$_SESSION['valicode']){
			$msg = array("��֤����������");
		}else{
			$_SESSION['valicode']="";
			$sql = "select status from `{borrow_repayment}` where id = {$_POST['id']}";
			$result = $mysql->db_fetch_array($sql);
			if($result==false){
				$msg = array("���Ĳ�������");
			}else{
				if ($result['status']==1){
					$msg = array("�Ѿ�����벻Ҫ�Ҳ���");
				}elseif ($result['status']==2){
					$msg = array("��վ�Ѿ��������벻Ҫ�Ҳ���");
				}else{
					$n = borrowClass::LateRepay(array("id"=>$_POST['id']));
					if(is_bool($n)){
						if($n==false){
							$msg = array("����ʧ��");
						}else{
							$msg = array("����ɹ�");
						}
					}else{
						$msg = $n;
					}
				}
			}
		}
	}elseif(isset($_GET['id'])){
		$sql = "select id from `{borrow_repayment}` where id = {$_GET['id']}";
		$result = $mysql->db_fetch_array($sql);
		if($result==false){
			$msg = array("û���������");
		}else{
			$data['repayment_time'] = time();
			$data['repayment_id']=$_GET['id'];
			$result = borrowClass::GetRepaymentList($data);
			$biao_type = $result['list'][0]['biao_type'];
			require_once ROOT_PATH.'modules/borrow/biao/'.$biao_type.'biao.class.php';
			$classname = $biao_type."biaoClass";
			$dynaBiaoClass = new $classname();
			$re = $dynaBiaoClass->getWebRepayInfo(array('borrow_id'=>$result['list'][0]['borrow_id'],'order'=>$result['list'][0]['order']));
			$result['list'][0]['advance_time']=$_G['biao_type'][$biao_type]['advance_time'];
			$_A['borrow_tender_list']=$re;
			$_A['borrow_result']=$result['list'][0];
		}
	}
}
/**
 * ͳ��
**/
elseif ($_A['query_type'] == "tongji"){
	$_A['borrow_tongji'] = borrowClass::Tongji();
	$_A['account_tongji'] = accountClass::Tongji();
}
//��ֹ�Ҳ���
else{
	$msg = array("���������벻Ҫ�Ҳ���","",$url);
}
?>