<?
if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���
check_rank("fee_".$_t);//���Ȩ��

require_once 'fee.class.php';


$_A['list_purview'] = array("fee"=>array("���ù���"=>array("fee"=>"���ù���")));//Ȩ��
$_A['list_name'] = $_A['module_result']['name'];
$_A['list_menu'] = "";

if($_A['query_type']=="list"){
	$sql = "select * from `{cash_rule}`";
	$_A['cash_rule']=$mysql->db_fetch_array($sql);
	$magic->assign("_A",$_A);
}
elseif($_A['query_type']=="edit"){
	if(isset($_POST['min_cash'])){
		$var = array("max_cash","min_cash","max_day_cash","scheme","cash_lt","every_lt_fee","cash_gt","every_gt_fee","every_day_lt","every_extra_fee","scale_fee","scale_day_lt","scale_extra_fee");
		$data = post_var($var);
		if($_POST['id']>0){
			$sql = "update `{cash_rule}` set id=".$_POST['id'];
		}else{
			$sql = "insert into `{cash_rule}` set id=1";
		}
		foreach ($data as $key=>$value){
			$sql .= ','.$key."='".$value."'";
		}
		$re = $mysql->db_query($sql);
		if($re==false){
			$msg = array("����ʧ��");
		}else{
			$p_1 = systemClass::createParameter_biaotype();
			if($p_1>0){
				$msg = array("�����ɹ�");
			}else{
				$msg = array("����ʧ��");
			}
		}
	}
}
?>