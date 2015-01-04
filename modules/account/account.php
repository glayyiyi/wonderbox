<?
if (!defined('ROOT_PATH'))  die('不能访问');//防止直接访问

if ($_A['query_type'] != "listTJ" && $_A['query_type'] != "fs_list" && $_A['query_type'] != "logold"){
	check_rank("account_".$_A['query_type']);//检查权限
}

include_once("account.class.php");
include_once(ROOT_PATH."core/friends.class.php");

$_A['list_purview'] =  array("account"=>array("资金管理"=>array("account_ticheng"=>"提成列表","account_list"=>"信息列表","account_bank"=>"银行帐户","account_cash"=>"提现记录","account_recharge"=>"充值记录","account_log"=>"资金记录")));//权限
$_A['list_name'] = $_A['module_result']['name'];
$_A['list_menu'] = "<a href='{$_A['query_url']}/list{$_A['site_url']}'>帐户列表</a> - <a href='{$_A['query_url']}/cashCK&status=0{$_A['site_url']}'>提现参考</a> - <a href='{$_A['query_url']}/cash&status=0{$_A['site_url']}'>申请提现</a> - <a href='{$_A['query_url']}/cash&status=1{$_A['site_url']}'>提现成功</a> -  - <a href='{$_A['query_url']}/cash&status=2{$_A['site_url']}'>提现失败</a> - <a href='{$_A['query_url']}/recharge&status=-2&a=cash'>充值记录</a>  - <a href='{$_A['query_url']}/log{$_A['site_url']}'>资金记录</a> - <a href='{$_A['query_url']}/recharge_new{$_A['site_url']}'>添加充值</a> - <a href='{$_A['query_url']}/deduct{$_A['site_url']}'>扣除费用</a> - <a href='{$_A['query_url']}/vipTC{$_A['site_url']}'>邀请提成</a> - <a href='{$_A['query_url']}/moneyCheck{$_A['site_url']}'>资金对账表</a> - <a href='{$_A['query_url']}/ticheng{$_A['site_url']}'>用户提成</a>- <a href='{$_A['query_url']}/fs_list{$_A['site_url']}'>负数监控</a>";


/**
 * 如果类型为空的话则显示所有的文件列表
**/

if ($_A['query_type'] == "list"){
	$_A['list_title'] = "帐户信息列表";
	if (isset($_GET['user_id']) && $_GET['user_id']!=""){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = accountClass::GetList($data);
        
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
      
		$title = array("序号","用户名","真实姓名","总余额","可用余额","冻结金额","待收金额","待还金额","净资产");
		$data['limit'] = "all";
		$result = accountClass::GetAccListForExport($data);

		exportData("账户列表",$title,$result);
		exit;
	}
        
	if (is_array($result)){
		$pages->set_data($result);
		$_A['account_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	
	}else{
		$msg = array($result);
	}
}

/**
 * 给财务用的统计账户信息表，每天凌晨3点生成 add by jackfeng 2012-09-23
**/
/*
else if ($_A['query_type'] == "listTJ"){
	$_A['list_title'] = "帐户信息列表";
	if (isset($_REQUEST['user_id']) && $_REQUEST['user_id']!=""){
		$data['user_id'] = $_REQUEST['user_id'];
	}
	if (isset($_REQUEST['username']) && $_REQUEST['username']!=""){
		$data['username'] = $_REQUEST['username'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
		$title = array("序号","用户名","真实姓名","总余额","可用余额","冻结金额","待收金额","待还金额","净资产");
		$data['limit'] = "all";

		$result = accountClass::GetAccListTJForExport($data);

		exportData("账户列表",$title,$result);
		exit;
	}
	$result = accountClass::GetListTJ($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['account_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
*/

/***
 * Author:LiuYY
 * 2012-05-04
 * 后台提成列表
 */
else if ($_A['query_type'] == "ticheng"){
$_A['list_title'] = "帐户信息列表";
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	if (isset($_GET['type']) && $_GET['type']=="excel"){
		$title = array("序号","时间","用户名","投资总额");
		$data['limit'] = "all";
		$result = accountClass::GetTichengForExport($data);
		exportData("好友提成列表",$title,$result);
		exit;
	}
	$result = accountClass::GetTicheng($data);
	if(is_array($result)){
		$pages->set_data($result);
		$_A['account_ticheng'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * 邀请会员注册并申请VIP会员的提成列表
**/
else if ($_A['query_type'] == "vipTC"){
	$_A['list_title'] = "会员提成列表";

	$data["user_id"]="-1";
        
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
        $data['user_id']="-1";
        
	if (isset($_REQUEST['username']) && $_REQUEST['username']!=""){
		$data['username'] = $_REQUEST['username'];
	}
        
	if (isset($_REQUEST['username2']) && $_REQUEST['username2']!=""){
		$data['username2'] = $_REQUEST['username2'];
	}
        
	$result = friendsClass::GetFriendsInvite($data);
        $list=$result['list'];
	foreach ($list as $key => $value){
     
                $inviteUserId = $value["invite_userid"];
		$sql = "select username from {user} where `user_id`={$inviteUserId}";
		$resultValue = $mysql->db_fetch_array($sql);               
		$list[$key]['inviteUserName'] = $resultValue["username"];
	}
        $result['list']=$list;
        
	if (is_array($result)){
		$pages->set_data($result);
		$_A['vipTC_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	
	}else{
		$msg = array($result);
	}
}

/*
//冻结是负数监控 
*/
else if ($_A['query_type'] == "fs_list"){
	$_A['list_title'] = "负数监控";

	if (isset($_REQUEST['user_id']) && $_REQUEST['user_id']!=""){
		$data['user_id'] = $_REQUEST['user_id'];
	}
	
	if (isset($_REQUEST['username']) && $_REQUEST['username']!=""){
		$data['username'] = $_REQUEST['username'];
	}
	
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = accountClass::GetListFs($data);

	if (is_array($result)){
		$pages->set_data($result);
		$_A['fs_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);

	}else{
		$msg = array($result);
	}
}
/**
 * 用户资金对账详情表
 */
else if ($_A['query_type'] == "moneyCheck"){
	$_A['list_title'] = "资金对账表";

	$data["user_id"]="-1";
        
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
        $data['user_id']="-1";
        
	if (isset($_REQUEST['username']) && $_REQUEST['username']!=""){
		$data['username'] = $_REQUEST['username'];
	}
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
      
		$title = array("用户名","资金总额","可用资金","冻结资金","待收资金(1)","待收资金(2)","充值资金(1)","充值资金(2)","其中：线上","其中：线下1","其中：线下2","成功提现金额","提现实际到账","提现费用","投标奖励金额","投标已收资金","投标已收利息","投标待收利息","借款总金额","借款标奖励","借款管理费","待还金额","借款已还利息","系统扣费","推广奖励","VIP扣费","资金总额1","资金总额2");
		//$data['limit'] = "all";
		$result = accountClass::GetUsersMoneyCheckListForExcel($data);

		exportData("用户资金对账详情表",$title,$result);
		exit;
	}
        
        $result = accountClass::GetUsersMoneyCheckList($data);
		if (is_array($result)){
		$pages->set_data($result);
		$_A['moneyCheck_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
	
}
/**
 * 提现参考
**/
elseif ($_A['query_type'] == "cashCK"){
	$_A['list_title'] = "提现参考";
	if (isset($_GET['user_id']) && $_GET['user_id']!=""){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = accountClass::GetCKList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['account_cashCK_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * 提现记录
**/
elseif ($_A['query_type'] == "cash"){
	$_A['list_title'] = "提现记录";
	if (isset($_GET['user_id'])){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username'])){
		$data['username'] = $_GET['username'];
	}
	if (isset($_GET['status']) && $_GET['status']!=""){
		$data['status'] = $_GET['status'];
	}
	if (isset($_GET['dotime1'])){
		$data['dotime1'] = $_GET['dotime1'];
	}
	if (isset($_GET['dotime2'])){
		$data['dotime2'] = $_GET['dotime2'];
	}
	if(isset($_GET['account'])){
		$data['account'] = $_GET['account'];
	}
	if (isset($_GET['type']) && $_GET['type']=="excel"){
		$title = array("Id","用户名称","真实姓名","提现账号","提现银行","支行","提现总额","到账金额","手续费","红包抵扣","提现时间","状态");
		$data['limit'] = "all";
		$result = accountClass::GetCashList($data);
		include_once ROOT_PATH.'modules/borrow/borrow.class.php';
		$borrow = new borrowClass();
		$borrow->borrowListForExcel(array('type'=>'cash','title'=>$title,'excelresult'=>$result,'filename'=>'提现列表'));
		exit;
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = accountClass::GetCashList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['account_cash_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * 提现审核查看
**/
elseif ($_A['query_type'] == "cash_view"){
	$_A['list_title'] = "提现审核查看";
	if (isset($_POST['id'])){
		$var = array("id","status","credited","fee","verify_remark");
		$data = post_var($var);
		$data['user_id']=$_POST['user_id'];
		$re = accountClass::UpdateCash($data);
		if(is_bool($re)){
			if($re==false){
				$msg = array("操作失败","",$_A['query_url']."/cash".$_A['site_url']);
			}else{
				$msg = array("操作成功","",$_A['query_url']."/cash".$_A['site_url']);
			}
		}else{
			$msg = array($re,"",$_A['query_url']."/cash".$_A['site_url']);
		}
		$user->add_log($_log,$re);//记录操作
	}else{
		$data['id'] = $_REQUEST['id'];
		$_A['account_cash_result'] = accountClass::GetCashOne($data);
	}
}
/**
 * 账号充值审核
**/
elseif ($_A['query_type'] == "recharge_view"){
	$_A['list_title'] = "充值查看";
	if (isset($_POST['id'])){
		if(strtolower($_POST['valicode'])==$_SESSION['valicode'] && $_POST['valicode']!=""){
			$var = array("id","status","verify_remark");
			$data = post_var($var);
			$re = accountClass::UpdateRecharge($data);
			if(is_bool($re)){
				if($re==false){
					$msg = array("操作失败","",$_A['query_url']."/recharge".$_A['site_url']);
				}else{
					$msg = array("操作成功","",$_A['query_url']."/recharge".$_A['site_url']);
				}
			}else{
				$msg = array($re,"",$_A['query_url']."/recharge".$_A['site_url']);
			}
			$user->add_log($_log,$re);//记录操作
		}else{
			$msg = array('验证码输入有误');
		}
	}else{
		$data['id'] = $_GET['id'];
		$_A['account_recharge_result'] = accountClass::GetRechargeOne($data);
	}
}
/**
 * 充值记录
**/
elseif ($_A['query_type'] == "recharge"){
	$_A['list_title'] = "充值记录";
	if (isset($_GET['user_id'])){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username'])){
		$data['username'] = $_GET['username'];
	}
	if (isset($_GET['status'])){
		$data['status'] = $_GET['status'];
	}
	if (isset($_GET['dotime1'])){
		$data['dotime1'] = $_GET['dotime1'];
	}
	if (isset($_GET['dotime2'])){
		$data['dotime2'] = $_GET['dotime2'];
	}
	if (isset($_GET['trade_no'])){
		$data['trade_no'] = $_GET['trade_no'];
	}
	if(isset($_GET['pertainbank'])){
		$data['pertainbank'] = $_GET['pertainbank'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	include_once(ROOT_PATH."modules/payment/payment.class.php");
	$_A['account_payment_list'] = paymentClass::GetList();
	if (isset($_GET['type']) && $_GET['type']=="excel"){
		$title = array("序号","流水号","用户名称","真实姓名","类型","所属银行","充值金额","费用","到账金额","奖励红包","充值时间","状态","银行返回");
		$data['limit'] = "all";
		$result = accountClass::GetRechargeList($data);
		include_once ROOT_PATH.'modules/borrow/borrow.class.php';
		$borrow = new borrowClass();
		$borrow->borrowListForExcel(array('type'=>'recharge','title'=>$title,'excelresult'=>$result,'filename'=>'充值记录'));
		exit;
	}
	$result = accountClass::GetRechargeList($data);
	$pages->set_data($result);
	$_A['account_recharge_list'] = $result['list'];
	$_A['showpage'] = $pages->show(3);
}
/**
 * 添加充值记录
**/
elseif ($_A['query_type'] == "recharge_new"){
	if(isset($_POST['username']) && $_POST['username']!=""){
		$money = floatval($_POST['money']);
		if($money<=0){
			$msg = array("请输入正确的金额");
		}else{
			$_data['username'] = $_POST['username'];
			$result = userClass::GetOnes($_data);
			if ($result==false){
				$msg = array("用户不存在");
			}else{
				/*$data['user_id'] = $result['user_id'];
				$data['status'] = 0;
				$data['money'] = $money;
				$data['type'] = 2;
				$data['payment'] = 0;
				$data['fee'] = 0;
				$data['remark'] = $_POST['remark'].",操作管理员ID:".$_G['user_id'];
				$data['trade_no'] = time().$result['user_id'].rand(1,9);
				$result = accountClass::AddRecharge($data);
				if ($result !== true){
					$msg = array($result);
				}else{
					$msg = array("操作成功");
				}*/
				//调用汇付天下充值接口
				$merCustId='6000060000273476';
				$usrCustId='6000060000579066';
				$charSet='GBK';
				$weburl = "http://".$_SERVER['SERVER_NAME'];
				$transAmt=$money;
				$ordId='00000000000000000102';
				$bgRetUrl=$weburl.'/chinapnr_return.php';
				$retUrl=$weburl.'/chinapnr_return.php';
				$ordDate=date("Y-m-d");			
				$merPriv= $result['user_id'];
				$result= $chinapnr->netSave($merCustId,$usrCustId,$ordId,$ordDate,$gateBusiId,$openBankId,$dcFlag,$transAmt,$retUrl,$bgRetUrl,$merPriv);
				
			}
		}
	}
}
/*
 * 批量导入充值记录
 */
elseif($_A['query_type'] == "rechargefromexcel"){
	if($_FILES['excelfile']!=null){
		if($_FILES['excelfile']['error']==0){
			//error_reporting(E_ALL ^ E_NOTICE);
			if(strstr($_FILES['excelfile']['name'],'.')!='.xls'){
				$msg = array("文件格式不正确，请使用xls格式");
			}else{
				$name = ROOT_PATH.'data/upfiles/annexs/'.time().'.xls';
				move_uploaded_file($_FILES['excelfile']['tmp_name'], $name);
				require_once ROOT_PATH.'plugins/excelreader/excel_reader2.php';
				$data = new Spreadsheet_Excel_Reader($name);
				$data->setoutputencoding('GBK');
				$field = '';
				for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
					$username = trim($data->sheets[0]['cells'][$i][1]);
					$result = $mysql->db_fetch_array("select user_id from `{user}` where username='{$username}'");
					if($result['user_id']<=0){
						continue;
					}
					$data_1['user_id'] = $result['user_id'];
					$data_1['status'] = 0;
					$data_1['money'] = trim($data->sheets[0]['cells'][$i][2]);
					$data_1['type']=2;
					$data_1['payment'] = 0;
					$data_1['fee'] = 0;
					$data_1['remark'] = "批量导入，操作管理员ID:".$_G['user_id'];
					$data_1['trade_no'] = time().$result['user_id'].rand(1,9);
					$result = accountClass::AddRecharge($data_1);
				}
				$msg = array("操作成功");
			}
		}else{
			$msg = array("文件".$_FILES['excelfile']['name']."上传失败");
		}
	}
}
/**
 * 扣除费用
**/
elseif ($_A['query_type'] == "deduct"){
	if(isset($_POST['username']) && $_POST['username']!=""){
		$_data['username'] = $_POST['username'];
		$result = userClass::GetOnes($_data);
		if ($result==false){
			$msg = array("用户名不存在");
		}elseif (strtolower ($_POST['valicode'])!=$_SESSION['valicode'] || !isset($_POST['valicode'])){
			$msg = array("验证码不正确");
		}else{
			$data['user_id'] = $result['user_id'];
			$data['money'] = $_POST['money'];
			$data['type'] = $_POST['type'];
			$data['remark'] = $_POST['remark'].",操作管理员ID:".$_G['user_id'];
			$result = accountClass::Deduct($data);
			if ($result !== true){
				$msg = array($result);
			}else{
				$msg = array("费用已成功扣除","",$_A['query_url']."/deduct&a=cash");
				$_SESSION['valicode'] = "";
			}
		}
	}
}
/**
 * 资金使用记录
**/
elseif ($_A['query_type'] == "log"){
	$_A['list_title'] = "资金使用记录";
	if (isset($_GET['user_id']) && $_GET['user_id']!=""){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	if (isset($_GET['typeaction'])){
		$data['type'] = $_GET['typeaction'];
	}
	if (isset($_GET['dotime1'])){
		$data['dotime1'] = $_GET['dotime1'];
	}
	if (isset($_GET['dotime2'])){
		$data['dotime2'] = $_GET['dotime2'];
	}
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
    if (isset($_GET['type']) && $_GET['type']=="excel"){
		$title = array("记录时间","用户名称","类型","总金额","操作金额","可用金额","冻结金额","待收金额","交易对方","备注");
		$data['limit'] = "all";
		$result = accountClass::GetLogListForExcel($data);
		exportData("资金流水记录",$title,$result);
		exit;
	}
	$result = accountClass::GetLogList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['account_log_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * 查看
**/
elseif ($_A['query_type'] == "view"){
	$_A['list_title'] = "查看认证";
	if (isset($_POST['id'])){
		$var = array("id","status","verify_remark","jifen");
		$data = post_var($var);
		$data['verify_user'] = $_SESSION['user_id'];
		$result = accountClass::Update($data);
		
		if ($result !== true){
			$msg = array($result);
		}else{
			$msg = array("操作成功");
		}
		$user->add_log($_log,$result);//记录操作
	}else{
		$data['id'] = $_REQUEST['id'];
		$_A['account_result'] = accountClass::GetOne($data);
	}
}
elseif($_A['query_type']=="return_reward"){//回款续投奖励列表
	$data['page'] = isset($_GET['page'])?$_GET['page']:$_A['page'];
	$data['epage'] = isset($_GET['epage'])?$_GET['epage']:$_A['epage'];
	if(isset($_GET['status']) && $_GET['status']!=''){
		$data['status'] = $_GET['status'];
	}
	if(isset($_GET['username']) && $_GET['username']!=''){
		$data['username'] = $_GET['username'];
	}
	$result = accountClass::GetRewardList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['return_reward'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
elseif($_A['query_type']=="return_rewardview"){//回款续投奖励审核
	if(isset($_POST['id'])){
		if(strtolower($_POST['valicode']) != $_SESSION['valicode']){
			$msg = array("验证码输入有误");
		}else{
			unset($_SESSION['valicode']);
			$status = $_POST['status']==1?1:5;
			$re = accountClass::ProvideReward(array('id'=>$_POST['id'],'status'=>$status,'remark'=>$_POST['remark'],'verify_user'=>$_G['user_id'],'verify_time'=>time()));
			if($re==true){
				$msg = array("操作成功");
			}else{
				$msg = array("操作失败");
			}
		}
	}else{
		$id = $_GET['id'];
		if($id<1){
			$msg = array("操作有误，请不要乱操作");
		}else{
			$_A['return_rewardview'] = $mysql->db_fetch_array('select p1.*,p2.username from {returned_reward} as p1 left join {user} as p2 on p1.user_id=p2.user_id where id='.$id);
		}
	}
}
elseif($_A['query_type']=="return_account"){//回款续投账户查看
	$data['page'] = isset($_GET['page'])?$_GET['page']:$_A['page'];
	$data['epage'] = isset($_GET['epage'])?$_GET['epage']:$_A['epage'];
	if(isset($_GET['username']) && $_GET['username']!=''){
		$data['username'] = $_GET['username'];
	}
	$result = accountClass::GetReturnAccountList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['return_account'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
elseif($_A['query_type']=="return_log"){//回款续投日志
	$data['page'] = isset($_GET['page'])?$_GET['page']:$_A['page'];
	$data['epage'] = isset($_GET['epage'])?$_GET['epage']:$_A['epage'];
	if(isset($_GET['username']) && $_GET['username']!=''){
		$data['username'] = $_GET['username'];
	}
	$result = accountClass::GetReturnLog($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['return_log'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
//防止乱操作
else{
	$msg = array("输入有误，请不要乱操作");
}
?>