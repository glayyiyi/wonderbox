<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
 
<!--�û����ĵ�����Ŀ ��ʼ-->
 <div id="main" class="clearfix" style="margin-top:0px;">
<div class="wrap950 mar10">
	<!--��ߵĵ��� ��ʼ-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--��ߵĵ��� ����-->
	
	<!--�ұߵ����� ��ʼ-->
	<div class="user_right">
		<div class="user_right_menu">
			<ul id="tab" class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="list"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>">�ʻ�����</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="bank"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/bank">�����˺�</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="recharge_new"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/recharge_new">�ʻ���ֵ</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="recharge"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/recharge">��ֵ��¼</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="cash_new"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cash_new">�ʻ�����</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="cash"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cash">���ּ�¼</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="log"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/log">�ʽ���ϸ</a></li>
			</ul>
		</div>
		<div class="user_right_main">
		<!--�ʽ�ʹ�ü�¼�б� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="log"): ?>
		<div class="user_main_title well" style="height:20px; padding-top:7px;"> 
		��¼ʱ�䣺<input class="Wdate" type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> �� <input class="Wdate" type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		  <select name='type' id='type' >  <option value=''>ȫ��</option>  <option value='tender' <?php if($_GET['type']=='tender') echo "selected='selected'" ?>>Ͷ��</option>  <option value='recharge' <?php if($_GET['type']=='recharge') echo "selected='selected'" ?>>�û���ֵ</option>  <option value='borrow_fee' <?php if($_GET['type']=='borrow_fee') echo "selected='selected'" ?>>���������</option>  <option value='cash_cancel' <?php if($_GET['type']=='cash_cancel') echo "selected='selected'" ?>>ȡ�����ֽⶳ</option>  <option value='cash_frost' <?php if($_GET['type']=='cash_frost') echo "selected='selected'" ?>>���ֶ���</option>  <option value='borrow_success' <?php if($_GET['type']=='borrow_success') echo "selected='selected'" ?>>�������</option>  <option value='margin' <?php if($_GET['type']=='margin') echo "selected='selected'" ?>>��֤��</option>  <option value='invest' <?php if($_GET['type']=='invest') echo "selected='selected'" ?>>�۳������</option>  <option value='fee' <?php if($_GET['type']=='fee') echo "selected='selected'" ?>>��ֵ������</option>  <option value='award_lower' <?php if($_GET['type']=='award_lower') echo "selected='selected'" ?>>�۳�Ͷ�꽱��</option>  <option value='award_add' <?php if($_GET['type']=='award_add') echo "selected='selected'" ?>>Ͷ�꽱��</option>  <option value='repayment' <?php if($_GET['type']=='repayment') echo "selected='selected'" ?>>����</option>  <option value='invest_false' <?php if($_GET['type']=='invest_false') echo "selected='selected'" ?>>Ͷ��ʧ���ʽ𷵻�</option>  <option value='recharge_fee' <?php if($_GET['type']=='recharge_fee') echo "selected='selected'" ?>>����������</option>  <option value='collection' <?php if($_GET['type']=='collection') echo "selected='selected'" ?>>���ս��</option>  <option value='borrow_frost' <?php if($_GET['type']=='borrow_frost') echo "selected='selected'" ?>>�ⶳ������</option>  <option value='invest_repayment' <?php if($_GET['type']=='invest_repayment') echo "selected='selected'" ?>>����</option>  <option value='vip' <?php if($_GET['type']=='vip') echo "selected='selected'" ?>>vip��Ա��</option>  <option value='realname' <?php if($_GET['type']=='realname') echo "selected='selected'" ?>>ʵ����֤����</option>  <option value='recharge_success' <?php if($_GET['type']=='recharge_success') echo "selected='selected'" ?>>���ֳɹ�</option>  <option value='recharge_false' <?php if($_GET['type']=='recharge_false') echo "selected='selected'" ?>>����ʧ��</option>  <option value='system_repayment' <?php if($_GET['type']=='system_repayment') echo "selected='selected'" ?>>����ϵͳ����</option>  <option value='late_rate' <?php if($_GET['type']=='late_rate') echo "selected='selected'" ?>>������Ϣ�۳�</option>  <option value='late_repayment' <?php if($_GET['type']=='late_repayment') echo "selected='selected'" ?>>���ڻ���</option>  <option value='ticheng' <?php if($_GET['type']=='ticheng') echo "selected='selected'" ?>>Ͷ�����</option>  <option value='late_collection' <?php if($_GET['type']=='late_collection') echo "selected='selected'" ?>>��������</option>  <option value='scene_account' <?php if($_GET['type']=='scene_account') echo "selected='selected'" ?>>�ֳ���֤����</option>  <option value='vouch_advanced' <?php if($_GET['type']=='vouch_advanced') echo "selected='selected'" ?>>�����渶�۷�</option>  <option value='borrow_kouhui' <?php if($_GET['type']=='borrow_kouhui') echo "selected='selected'" ?>>����˷���ۻ�</option>  <option value='vouch_awardpay' <?php if($_GET['type']=='vouch_awardpay') echo "selected='selected'" ?>>��������֧��</option>  <option value='vouch_award' <?php if($_GET['type']=='vouch_award') echo "selected='selected'" ?>>������������</option>  <option value='margin_vouch' <?php if($_GET['type']=='margin_vouch') echo "selected='selected'" ?>>�����ɹ�����5%</option>  <option value='video' <?php if($_GET['type']=='video') echo "selected='selected'" ?>>��Ƶ��֤����</option>  <option value='tender_mange' <?php if($_GET['type']=='tender_mange') echo "selected='selected'" ?>>��Ϣ�������</option>  <option value='vip2' <?php if($_GET['type']=='vip2') echo "selected='selected'" ?>>�۳�����VIP��</option>  <option value='smssq' <?php if($_GET['type']=='smssq') echo "selected='selected'" ?>>�۳����ŷ���</option>  <option value='tixian_fee' <?php if($_GET['type']=='tixian_fee') echo "selected='selected'" ?>>�۳�����������</option>  <option value='borrow_fee_forst' <?php if($_GET['type']=='borrow_fee_forst') echo "selected='selected'" ?>>������ö���</option>  <option value='borrow_fee_unforst' <?php if($_GET['type']=='borrow_fee_unforst') echo "selected='selected'" ?>>������ýⶳ</option>  <option value='vip3' <?php if($_GET['type']=='vip3') echo "selected='selected'" ?>>����VIP�����</option>  <option value='vip4' <?php if($_GET['type']=='vip4') echo "selected='selected'" ?>>vip����ûͨ���˷�</option>  <option value='recharge_reward' <?php if($_GET['type']=='recharge_reward') echo "selected='selected'" ?>>��ֵ�������</option>  <option value='return_reward' <?php if($_GET['type']=='return_reward') echo "selected='selected'" ?>>�ؿ���Ͷ����</option> </select> <input value="����" type="submit" class="btn-action"  onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />
		</div>
			<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			  <form action="" method="post">
				<tr class="head">
					<td>����</td>
					<td>�������</td>
					<td>�ܽ��</td>
					<td>���ý��</td>
					<td>������</td>
					<td>���ս��</td>
					<td>���׶Է�</td>
					<td>��¼ʱ��</td>
					<td width="130">��ע��Ϣ</td>
				</tr>
				<?  if(!isset($this->magic_vars['_U']['account_log_list']) || $this->magic_vars['_U']['account_log_list']=='') $this->magic_vars['_U']['account_log_list'] = array();  $_from = $this->magic_vars['_U']['account_log_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"account_type");echo $_tmp;unset($_tmp); ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = ''; echo $this->magic_vars['item']['collection']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username']=''; ;if (  $this->magic_vars['item']['to_username']==0): ?>��������<? else: ?><a href="/u/<? if (!isset($this->magic_vars['item']['to_user'])) $this->magic_vars['item']['to_user'] = ''; echo $this->magic_vars['item']['to_user']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username'] = '';$_tmp = $this->magic_vars['item']['to_username'];$_tmp = $this->magic_modifier("default",$_tmp,"��������");echo $_tmp;unset($_tmp); ?></a><? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
					<td width="130"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="11" class="page">
						<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
					</td>
				</tr>
			</form>	
		</table>
		<!--�ʽ�ʹ�ü�¼�б� ����-->
		<!--��ʷ�ʽ�ʹ�ü�¼�б� ��ʼ-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="logold"): ?>
		
		<div class="user_main_title well" style="height:20px; padding-top:7px;"> 
		��¼ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		  <select name='type' id='type' >  <option value=''>ȫ��</option>  <option value='tender' <?php if($_REQUEST['type']=='tender') echo "selected='selected'" ?>>Ͷ��</option>  <option value='recharge' <?php if($_REQUEST['type']=='recharge') echo "selected='selected'" ?>>�û���ֵ</option>  <option value='borrow_fee' <?php if($_REQUEST['type']=='borrow_fee') echo "selected='selected'" ?>>���������</option>  <option value='cash_cancel' <?php if($_REQUEST['type']=='cash_cancel') echo "selected='selected'" ?>>ȡ�����ֽⶳ</option>  <option value='cash_frost' <?php if($_REQUEST['type']=='cash_frost') echo "selected='selected'" ?>>���ֶ���</option>  <option value='borrow_success' <?php if($_REQUEST['type']=='borrow_success') echo "selected='selected'" ?>>�������</option>  <option value='margin' <?php if($_REQUEST['type']=='margin') echo "selected='selected'" ?>>��֤��</option>  <option value='invest' <?php if($_REQUEST['type']=='invest') echo "selected='selected'" ?>>�۳������</option>  <option value='fee' <?php if($_REQUEST['type']=='fee') echo "selected='selected'" ?>>��ֵ������</option>  <option value='award_lower' <?php if($_REQUEST['type']=='award_lower') echo "selected='selected'" ?>>�۳�Ͷ�꽱��</option>  <option value='award_add' <?php if($_REQUEST['type']=='award_add') echo "selected='selected'" ?>>Ͷ�꽱��</option>  <option value='repayment' <?php if($_REQUEST['type']=='repayment') echo "selected='selected'" ?>>����</option>  <option value='invest_false' <?php if($_REQUEST['type']=='invest_false') echo "selected='selected'" ?>>Ͷ��ʧ���ʽ𷵻�</option>  <option value='recharge_fee' <?php if($_REQUEST['type']=='recharge_fee') echo "selected='selected'" ?>>����������</option>  <option value='collection' <?php if($_REQUEST['type']=='collection') echo "selected='selected'" ?>>���ս��</option>  <option value='borrow_frost' <?php if($_REQUEST['type']=='borrow_frost') echo "selected='selected'" ?>>�ⶳ������</option>  <option value='invest_repayment' <?php if($_REQUEST['type']=='invest_repayment') echo "selected='selected'" ?>>����</option>  <option value='vip' <?php if($_REQUEST['type']=='vip') echo "selected='selected'" ?>>vip��Ա��</option>  <option value='realname' <?php if($_REQUEST['type']=='realname') echo "selected='selected'" ?>>ʵ����֤����</option>  <option value='recharge_success' <?php if($_REQUEST['type']=='recharge_success') echo "selected='selected'" ?>>���ֳɹ�</option>  <option value='recharge_false' <?php if($_REQUEST['type']=='recharge_false') echo "selected='selected'" ?>>����ʧ��</option>  <option value='system_repayment' <?php if($_REQUEST['type']=='system_repayment') echo "selected='selected'" ?>>����ϵͳ����</option>  <option value='late_rate' <?php if($_REQUEST['type']=='late_rate') echo "selected='selected'" ?>>������Ϣ�۳�</option>  <option value='late_repayment' <?php if($_REQUEST['type']=='late_repayment') echo "selected='selected'" ?>>���ڻ���</option>  <option value='ticheng' <?php if($_REQUEST['type']=='ticheng') echo "selected='selected'" ?>>Ͷ�����</option>  <option value='late_collection' <?php if($_REQUEST['type']=='late_collection') echo "selected='selected'" ?>>��������</option>  <option value='scene_account' <?php if($_REQUEST['type']=='scene_account') echo "selected='selected'" ?>>�ֳ���֤����</option>  <option value='vouch_advanced' <?php if($_REQUEST['type']=='vouch_advanced') echo "selected='selected'" ?>>�����渶�۷�</option>  <option value='borrow_kouhui' <?php if($_REQUEST['type']=='borrow_kouhui') echo "selected='selected'" ?>>����˷���ۻ�</option>  <option value='vouch_awardpay' <?php if($_REQUEST['type']=='vouch_awardpay') echo "selected='selected'" ?>>��������֧��</option>  <option value='vouch_award' <?php if($_REQUEST['type']=='vouch_award') echo "selected='selected'" ?>>������������</option>  <option value='margin_vouch' <?php if($_REQUEST['type']=='margin_vouch') echo "selected='selected'" ?>>�����ɹ�����5%</option>  <option value='video' <?php if($_REQUEST['type']=='video') echo "selected='selected'" ?>>��Ƶ��֤����</option>  <option value='tender_mange' <?php if($_REQUEST['type']=='tender_mange') echo "selected='selected'" ?>>��Ϣ�������</option>  <option value='vip2' <?php if($_REQUEST['type']=='vip2') echo "selected='selected'" ?>>�۳�����VIP��</option>  <option value='smssq' <?php if($_REQUEST['type']=='smssq') echo "selected='selected'" ?>>�۳����ŷ���</option>  <option value='tixian_fee' <?php if($_REQUEST['type']=='tixian_fee') echo "selected='selected'" ?>>�۳�����������</option>  <option value='borrow_fee_forst' <?php if($_REQUEST['type']=='borrow_fee_forst') echo "selected='selected'" ?>>������ö���</option>  <option value='borrow_fee_unforst' <?php if($_REQUEST['type']=='borrow_fee_unforst') echo "selected='selected'" ?>>������ýⶳ</option>  <option value='vip3' <?php if($_REQUEST['type']=='vip3') echo "selected='selected'" ?>>����VIP�����</option>  <option value='vip4' <?php if($_REQUEST['type']=='vip4') echo "selected='selected'" ?>>vip����ûͨ���˷�</option>  <option value='recharge_reward' <?php if($_REQUEST['type']=='recharge_reward') echo "selected='selected'" ?>>��ֵ�������</option>  <option value='return_reward' <?php if($_REQUEST['type']=='return_reward') echo "selected='selected'" ?>>�ؿ���Ͷ����</option> </select> <input value="����" type="submit" class="btn-action"  onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />	
		</div>	
		
			<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			  <form action="" method="post">
				<tr class="head">
					<td>����</td>
					<td>�������</td>
					<td>�ܽ��</td>
					<td>���ý��</td>
					<td>������</td>
					<td>���ս��</td>
					<td>���׶Է�</td>
					<td>��¼ʱ��</td>
					<td width="130">��ע��Ϣ</td>
				</tr>
				<?  if(!isset($this->magic_vars['_U']['account_log_list']) || $this->magic_vars['_U']['account_log_list']=='') $this->magic_vars['_U']['account_log_list'] = array();  $_from = $this->magic_vars['_U']['account_log_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"account_type");echo $_tmp;unset($_tmp); ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = ''; echo $this->magic_vars['item']['collection']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username']=''; ;if (  $this->magic_vars['item']['to_username']==0): ?>��������<? else: ?><a href="/u/<? if (!isset($this->magic_vars['item']['to_user'])) $this->magic_vars['item']['to_user'] = ''; echo $this->magic_vars['item']['to_user']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username'] = '';$_tmp = $this->magic_vars['item']['to_username'];$_tmp = $this->magic_modifier("default",$_tmp,"��������");echo $_tmp;unset($_tmp); ?></a><? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
					<td width="130"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="11" class="page">
						<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
					</td>
				</tr>
			</form>	
		</table>
		<!--��ʷ�ʽ�ʹ�ü�¼�б� ����-->
		
		<!--��ֵ��¼�б� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="recharge"): ?>
		<div class="user_help alert">�ɹ���ֵ<? if (!isset($this->magic_vars['_U']['account_log']['recharge_success'])) $this->magic_vars['_U']['account_log']['recharge_success'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ�����ϳɹ���ֵ<? if (!isset($this->magic_vars['_U']['account_log']['recharge_online'])) $this->magic_vars['_U']['account_log']['recharge_online'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_online'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ�����³ɹ���ֵ<? if (!isset($this->magic_vars['_U']['account_log']['recharge_downline'])) $this->magic_vars['_U']['account_log']['recharge_downline'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_downline'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ,���ֶ��ɹ���ֵ<? if (!isset($this->magic_vars['_U']['account_log']['recharge_shoudong'])) $this->magic_vars['_U']['account_log']['recharge_shoudong'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_shoudong'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
		<form action="" method="post">
			<tr class="head" >
			<td>����</td>
			<td>֧����ʽ</td>
			<td>��ֵ���</td>
			<td>�������</td>
			<td>��ע</td>
			<td>��ֵʱ��</td>
			<td>״̬</td>
			<td>����ע</td>
			</tr>
			<? $this->magic_vars['query_type']='GetRechargeList';$data = array('showpage'=>'3','var'=>'loop','status'=>'1','user_id'=>'0','epage'=>'20','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/account/account.class.php');$this->magic_vars['magic_result'] = accountClass::GetRechargeList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==1): ?>���ϳ�ֵ<? else: ?>���³�ֵ<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['payment_name'])) $this->magic_vars['item']['payment_name'] = '';$_tmp = $this->magic_vars['item']['payment_name'];$_tmp = $this->magic_modifier("default",$_tmp,"�ֶ���ֵ");echo $_tmp;unset($_tmp); ?></td>
			<td><font color="#FF0000">��<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></font></td>
			<td><? if (!isset($this->magic_vars['item']['hongbao'])) $this->magic_vars['item']['hongbao'] = ''; echo $this->magic_vars['item']['hongbao']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>�����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> ��ֵ�ɹ� <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>��ֵʧ��<? endif; ?></td>
			
			<td><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = '';$_tmp = $this->magic_vars['item']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
			<tr>
				<td colspan="11" class="page"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
				</td>
			</tr>
			<? unset($_magic_vars); ?>
		</form>	
		</table>
		<!--��ֵ��¼�б� ����-->
		
		<!--���ּ�¼�б� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="cash"): ?>
		<div class="user_help alert">�ɹ�����<? if (!isset($this->magic_vars['_U']['cash_log']['cash_success']['money'])) $this->magic_vars['_U']['cash_log']['cash_success']['money'] = '';$_tmp = $this->magic_vars['_U']['cash_log']['cash_success']['money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ�����ֵ���<? if (!isset($this->magic_vars['_U']['cash_log']['cash_success']['credited'])) $this->magic_vars['_U']['cash_log']['cash_success']['credited'] = '';$_tmp = $this->magic_vars['_U']['cash_log']['cash_success']['credited'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ��������<? if (!isset($this->magic_vars['_U']['cash_log']['cash_success']['fee'])) $this->magic_vars['_U']['cash_log']['cash_success']['fee'] = '';$_tmp = $this->magic_vars['_U']['cash_log']['cash_success']['fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			<form action="" method="post">
				<tr class="head">
					<td>��������</td>
					<td>�����˺�</td>
					<td>�����ܶ�</td>
					<td>���˽��</td>
					<td>������</td>
					<td>�����(�ֿ�)</td>
					<td>����ʱ��</td>
					<td>״̬</td>
					<td>����</td>
				</tr>
				<?  if(!isset($this->magic_vars['_U']['account_cash_list']) || $this->magic_vars['_U']['account_cash_list']=='') $this->magic_vars['_U']['account_cash_list'] = array();  $_from = $this->magic_vars['_U']['account_cash_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['bank_name'])) $this->magic_vars['item']['bank_name'] = ''; echo $this->magic_vars['item']['bank_name']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['credited'])) $this->magic_vars['item']['credited'] = '';$_tmp = $this->magic_vars['item']['credited'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = '';$_tmp = $this->magic_vars['item']['fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>	
					<td>��<? if (!isset($this->magic_vars['item']['hongbao'])) $this->magic_vars['item']['hongbao'] = '';$_tmp = $this->magic_vars['item']['hongbao'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>	
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>�����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> ���ֳɹ� <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>����ʧ�� <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>�û�ȡ��<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark']=''; ;if (  $this->magic_vars['item']['verify_remark']!=""): ?><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = ''; echo $this->magic_vars['item']['verify_remark']; ?><? else: ?><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><a href="#" onclick="javascript:if(confirm('ȷ��Ҫȡ������������')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cash_cancel&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ȡ������</a><? else: ?>-<? endif; ?><? endif; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="11" class="page">
						<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
					</td>
				</tr>
			</form>	
		</table>
		<!--���ּ�¼�б� ����-->
		
		<!--�˺ų�ֵ ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="recharge_new"): ?>
		<div class="user_help alert">
                    * ��ܰ��ʾ���������г�ֵ�����������ĵȴ�,��ֵ�ɹ����벻Ҫ�ر������,��ֵ�ɹ��󷵻�<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>,
                    ��ֵ�����ܴ��������ʺš�
                    <br>* <font color="red">���߳�ֵ��������ȫ��Ŷ��</font>
        </div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ʵ������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ϵEmail��</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>
			</div>
		</div>
		<form action="" method="post" name="form1" target="_blank"  onsubmit= "return check();" >
		<div id="returnpay">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ֵ��ʽ��</div>
			<div class="c">
			<table>
				<tr><td><input type="radio" name="type" id="type_1" class="input_border" onclick="change_type(1)" value="1"  checked="checked" /></td><td><label for="type_1">���ϳ�ֵ</label></td><td><input type="radio" name="type" id="type_2" class="input_border"  value="2"  onclick="change_type(2)" /></td><td><label for="type_2">���³�ֵ</label></td></tr>
			</table>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ֵ��</div>
			<div class="c">
				<input type="text" name="money"  class="input_border" value="" size="10" onkeyup="commit(this);" maxlength="9" /> Ԫ <span id="realacc">ʵ�����ˣ�<font color="#FF0000" id="real_money">0</font> Ԫ</span>
			</div>
		</div>
                    <div id="type_net" class="disnone">
			<div class="user_right_border">
				<div class="l" style="font-weight:bold;">��ֵ���ͣ�</div>
				<div class="c">
						<font color="red">����������ʹ�ø�����������֧����ֻ�迪ͨ�����������м���!</font>
<style type="text/css">

#ban table td{height:40px; line-height:40px;padding-right:30px;padding-bottom:10px; }
#ban table tr{height:40px; line-height:40px; }
#ban table img{width:125px; height:33px;float:left;}
#ban table input{border:none;width:20px; height:30px;float:left;}
#rechargeBox{padding:20px;}
#rechargeBox h2 {border-bottom: #ccc 1px solid; padding-bottom: 10px; margin-bottom: 10px; font-size: 16px}
.detail{padding:10px 0;margin:0 auto;}
.active-link{padding:10px;text-align:center;}
.btn_grey_b, .btn_grey_b span, .btn_grey_b span, {background:url("/data/images/base/pay_btn_a.png") no-repeat; height:30px; line-height:0; font-size:0; padding:0 4px 0 0; border:0; display:inline-block; vertical-align:middle; cursor:pointer; white-space:normal; outline:none;   overflow:visible }
.btn_grey_b span, .btn_grey_b span {background-position:0 0; margin:0; padding:0 12px 0 16px; color:#fff; font-size:14px; font-weight:700; line-height:30px; _line-height:29px }
.btn_grey_b {background-position:right -70px }
.btn_grey_b:hover {background-position:right -105px; text-decoration:none }
.btn_grey_b span, .btn_grey_b span {background-position:0 -70px; color:#333 }
.btn_grey_b:hover span, .btn_grey_b:hover span {background-position:0 -105px }

</style>
<div id="ban">
<table width="100%" cellpadding="3" cellspacing="3">
<tr>
<td width="160"><input type="radio" name="payment1" value="1025_cbp"/>
<img src="../data/bank/ICBC_OUT.gif" border="0"/></td>
<td width="160">
<input type="radio" name="payment1" value="104_cbp">
<img src="../data/bank/BOC_OUT.gif" border="0"/>
</td>
<td  width="160">
<input type="radio" name="payment1" value="105_cbp"/>
<img src="../data/bank/CCB_OUT.gif" border="0"/></td>
</tr>
<tr>
<td><input type="radio" name="payment1" value="103_cbp"/>
<img src="../data/bank/ABC_OUT.gif" border="0"/></td>
<td>
<input type="radio" name="payment1" value="3080_cbp"/>
<img src="../data/bank/CMB_OUT.gif" border="0"/>
</td>
<td><input type="radio" name="payment1" value="306_cbp" />
<img src="../data/bank/GDB_OUT.gif" border="0"/></td>
</tr><tr>
<td><input type="radio" name="payment1" value="305_cbp"/>
<img src="../data/bank/CMBC_OUT.gif" border="0"/></td>
<td><input type="radio" name="payment1" value="312_cbp"/>
<img src="../data/bank/CEB_OUT.gif" border="0"/></td>
<td><input type="radio" name="payment1" value="309_cbp"/>
<img src="../data/bank/CIB_OUT.gif" border="0"/></td>
</tr>
<tr>
<td><input type="radio" name="payment1" value="3230_cbp"/>
<img src="../data/bank/yz.jpg" border="0"/></td>
<td><input type="radio" name="payment1" value="311_cbp"/>
<img src="../data/bank/hx.jpg" border="0"/></td>
<td><input type="radio" name="payment1" value="301_cbp"/>
<img src="../data/bank/COMM_OUT.gif" border="0"/></td>
</tr>
<tr>
<td><input type="radio" name="payment1" value="313_cbp"/>
<img src="../data/bank/CITIC_OUT.gif" border="0"/></td>
<td><input type="radio" name="payment1" value="314_cbp">
<img src="../data/bank/pf.jpg" border="0"/></td>
<td><input type="radio" name="payment1" value="307_cbp">
<img src="../data/bank/bank_payh.gif" border="0"/></td>
</tr>
</table>
</div>
<?  if(!isset($this->magic_vars['_U']['account_payment_list']) || $this->magic_vars['_U']['account_payment_list']=='') $this->magic_vars['_U']['account_payment_list'] = array();  $_from = $this->magic_vars['_U']['account_payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['var']['nid']!="offline"): ?>
<input type="radio" name="payment1" class="input_border" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" id="payment_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>"  /> <label for="payment_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></label> <input type="hidden" name="payname<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" value="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" /><label for="payment_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>">(<? if (!isset($this->magic_vars['var']['description'])) $this->magic_vars['var']['description'] = ''; echo $this->magic_vars['var']['description']; ?>)</label> <br />
<? endif; ?>
<? endforeach; endif; unset($_from); ?>                 
</div>
</div>
</div>
        <div id="type_now"   style="display:none">
			<div class="user_right_border">
				<div class="l" style="font-weight:bold;">��ֵ���У�</div>
                                
				<div class="c">
                    <div>
                       <font color="red">���³�ֵ���������⣬����������ƹ�����ϵ��<br>
��1�����³�ֵ��������ĵ�����ͽ�����20000Ԫ��<br>
��2��<strong><font color="blue">��Ч��ֵ�Ǽ�ʱ��Ϊ:��һ�������9:30��16:00</font></strong>����ֵ�ɹ�������ǵ���ƹ�����ϵ��<br><br></font></div>
					<div>
					<?  if(!isset($this->magic_vars['_U']['account_payment_list']) || $this->magic_vars['_U']['account_payment_list']=='') $this->magic_vars['_U']['account_payment_list'] = array();  $_from = $this->magic_vars['_U']['account_payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
					<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['var']['nid']=="offline"): ?>
					<input type="radio" name="payment2"  class="input_border" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" id="offline_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>" /><label for="offline_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>"><? if (!isset($this->magic_vars['var']['description'])) $this->magic_vars['var']['description'] = ''; echo $this->magic_vars['var']['description']; ?></label><br />
					<? endif; ?>
					<? endforeach; endif; unset($_from); ?>
					</div>
				</div>
			</div>
			<div class="user_right_border">
				<div class="l" style="font-weight:bold;">���³�ֵ��ע��</div>
				<div class="c">
					<input type="text" name="remark"  class="input_border" value="" size="30" /><br>����ע�������û�����ת�����п��ź�ת����ˮ�ţ��Լ�ת��ʱ�䣬лл��ϣ�
				</div>
			</div>
		</div>
 
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;"></div>
			<div class="c">
				<input type="submit" class="btn-action"  name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		</div>
		
		
		
		
		<script type="text/javascript">
		 /*$("input[name='money']").keyup(function(){     
			 var tmptxt=$(this).val();     
			 $(this).val(tmptxt.replace(/\D|^0/g,''));     
		 }).bind("paste",function(){     
			 var tmptxt=$(this).val();     
			 $(this).val(tmptxt.replace(/\D|^0/g,''));     
		 }).css("ime-mode", "disabled");*/


		function check(){
			var aa = "";
			aa = $("input[name=type]:checked").val();
			
			var money = $("input[name=money]").val();
			if(!money){
				jQuery.jBox.tip('�������ֵ��','warning');
				return false;
			}
			var info ="<div id='rechargeBox'><h2><strong>��ֵ�������⣿</strong></h2>   ";
				info+="<div class='ui-tip ui-tip-info'>      ";
				info+="<span class='ui-tip-icon'></span>";
				info+="<div class='ui-tip-text'>��ֵ���ǰ�벻Ҫ�رմ˴��ڡ���ɳ�ֵ��������������������İ�ť��</div>  ";
				info+="<p class='detail'><strong>�����´򿪵���������ҳ������ɸ��</strong></p>";
				info+="</div>";
				info+="<div class='active-link'>";
				info+="<a href='/index.php?user&q=code/account/recharge'  seed='link-complete'><span class='btn_grey_b'><span>����ɳ�ֵ</span></span></a>";
				info+="<a href='/linekefu/index.html'  seed='link-hasProblem'>   <span class='btn_grey_b'><span>��ֵ��������</span></span>   </a>";
				info+="</div>";
				info+="</div>";
			var op="{title:'���߳�ֵ'}";

			if(aa == 1){
			//���ϳ�ֵ
				var xsbank = $("input[name=payment1]:checked").val();
				 
				if (!xsbank){
 					jQuery.jBox.tip('��ѡ�����߳�ֵ���ͣ�','warning');
					return false;
				}else{
					//�ύ������ֵ��ʾ�� 20130130 add by weego 
					jQuery.jBox(info,{title:'���߳�ֵ',buttons: {'��������ѡ��': 'ok' }, width: 500,opacity: 0.3, showClose: false,showIcon: false, top: '25%',draggable: false});
					return true;			
				}
				
			}else{
			//���³�ֵ
				var xxbank = $("input[name=payment2]:checked").val();
				if (!xxbank){
					jQuery.jBox.tip('��ѡ�����³�ֵ�����У�','warning');
					return false;
				}else{
					//�ύ������ֵ��ʾ�� 20130130 add by weego 
					jQuery.jBox(info,op);
					return true;
				}
				
			}
		}
			function change_type(type){
          
				if (type==2){
                    document.getElementById("type_net").style.display="none";
                    document.getElementById("type_now").style.display="";
                    document.getElementById("realacc").style.display="none";
				}else{
                    document.getElementById("type_now").style.display="none";
                    document.getElementById("type_net").style.display="";
                    document.getElementById("realacc").style.display="";
				}
			}
		function payment (){
	 		var type = GetRadioValue("type");
			if (type==1){
				$("#returnpay").html("<font color='red'>�뵽�򿪵���ҳ���ֵ</font>");
			}
		}
		function ctype(){
		var resualt=false;
			alert(document.form1.payment2.length);
			for(var i=0;i<document.form1.payment2.length;i++)
			{
				if(document.form1.payment2[i].checked)
				{
				  resualt=true;
				}
			}
			return resualt;
		}
        function commit(obj) {
            if (parseFloat(obj.value) > 0 ) 
            {
                var realMoney=parseFloat(obj.value);
                document.getElementById("real_money").innerHTML = realMoney ;
            }
        }
    </script>
		
		<div class="user_right_foot alert">
		<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>��ֹ���ÿ����֡���ٽ��׵���Ϊ,һ�����ֽ����Դ���,�����������ڣ������տ�����˻�������ֹͣ����,���п���Ӱ��������ü�¼��
		</div>
		<!--�˺ų�ֵ ����-->
		
		
		<!--�����˺� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="bank"): ?>
		<div class="user_help alert" style="text-align:left;text-indent :24px;"><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>��ֹ���ÿ����֡���ٽ��׵���Ϊ,һ�����ֽ����Դ���,�����������ڣ������տ�����˻�������ֹͣ����,���п���Ӱ��������ü�¼��
</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ʵ������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['realname'])) $this->magic_vars['_U']['account_bank_result']['realname'] = ''; echo $this->magic_vars['_U']['account_bank_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��½�û�����</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['username'])) $this->magic_vars['_U']['account_bank_result']['username'] = ''; echo $this->magic_vars['_U']['account_bank_result']['username']; ?>
			</div>
		</div>
		
		<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank']=''; ;if (  $this->magic_vars['_U']['account_bank_result']['bank']!=""): ?>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�������У�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank'] = '';$_tmp = $this->magic_vars['_U']['account_bank_result']['bank'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">���������ƣ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['branch'])) $this->magic_vars['_U']['account_bank_result']['branch'] = ''; echo $this->magic_vars['_U']['account_bank_result']['branch']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�����˺ţ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['account_view'])) $this->magic_vars['_U']['account_bank_result']['account_view'] = ''; echo $this->magic_vars['_U']['account_bank_result']['account_view']; ?>
			</div>
		</div>
		<? endif; ?>
		<div class="user_right_foot">
		</div>
		<form action="" method="post" name="form1">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�������У�</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=bank&nid=account_bank&value=<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank'] = ''; echo $this->magic_vars['_U']['account_bank_result']['bank']; ?>"></script>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">���������ƣ�</div>
			<div class="c">
				<input type="text" name="branch" value="" data-content="**����**֧��**������Ӫҵ��(�磺�Ϻ���������֧�пؽ�·����),
		    ������޷�ȷ��,�������µ����Ŀ���������ƹ��ʽ���ѯ�ʡ� " id="infokaih" />
			</div>
		</div>
		<div class="user_right_border" style="margin-left:0px">
			<div class="l" style="font-weight:bold;">�����˺ţ�</div>
			<div class="c">
				<input type="text" name="account" value="" id="infoyhzh" data-content="�ر����ѣ��������п��ŵĿ�������������Ϊ��<? if (!isset($this->magic_vars['_U']['account_bank_result']['realname'])) $this->magic_vars['_U']['account_bank_result']['realname'] = ''; echo $this->magic_vars['_U']['account_bank_result']['realname']; ?>��, ���������˺ű�����д��ȷ,������������ʽ𽫴��ڷ��ա�
                    ���Ҫ�޸ĵĻ�����Ҫ��ȫ, �����κ�ʱ���޸��������������������п��š�" />
			</div>
			<div class="l" style="font-weight:bold;"></div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�ֻ���֤��</div>
			<div class="c">
				<input type="text" name="mobilecode"  maxlength="6"  />&nbsp;&nbsp;<input id="codetime" name="codetime" type="button" value="��ȡ��֤��" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;"></div>
			<div class="c">
				<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?>" />
				<input type='hidden' name='oid' value='<?php echo date('YmdHis');?>'/> 
				<input type="button" class="btn-action"  name="name"  value="ȷ���ύ" size="30" onclick="sub_form()" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ����ֹ���ÿ�����
		</div>

	<script language="javascript">
		$("#codetime").click(function() {
			$("#codetime").attr({"disabled":"disabled"});
			$.ajax({
				url: "/index.php?user&q=code/account/cash_new_sms&itype=2&random="+Math.random(),
				success: function(msg){
					if(msg==-1){
						jQuery.jBox.confirm("����û���ֻ���֤���޷�������֤�룬����ǰ����֤��", "��ʾ", function(v,h,f){if(v=='ok'){location.href="/index.php?user&q=code/user/phone_status"};return true;});
						$("#codetime").removeAttr("disabled");
						return;
					}else if(msg==1){
						jQuery.jBox.success('��֤�뷢�ͳɹ�!', '��ʾ');
						$("#codetime").attr({"disabled":"disabled"});
						var date=new Date();
						date.setTime(date.getTime()+5*60*1000);
						document.cookie = "bankcode=300;expires=" + date.toGMTString();
						SetRemainTime();
					}else{
						jQuery.jBox.error('��֤�뷢��ʧ��!', '��ʾ');
						$("#codetime").removeAttr("disabled");
						return;
					}
				},
				error: function (xmlHttpRequest, error) {
					jQuery.jBox.error('��֤�뷢��ʧ��!', '��ʾ');
					$("#codetime").removeAttr("disabled");
					return;
				}
			});
		});
		SetRemainTime();
		function SetRemainTime() {
			var arr,reg=new RegExp("(^| )bankcode=([^;]*)(;|$)");
			var SysSecond = 0;
			if(arr=document.cookie.match(reg)){
				var SysSecond = arr[2];
			}
		    if (SysSecond > 0) { 
		    SysSecond = SysSecond - 1;
		    var date=new Date();
			date.setTime(date.getTime()+SysSecond*1000);
			document.cookie = "bankcode="+SysSecond+";expires=" + date.toGMTString();
		    var second = Math.floor(SysSecond % 60);             // ������     
		    var minite = Math.floor((SysSecond / 60) % 60);      //����� 
		    var hour = Math.floor((SysSecond / 3600) % 24);      //����Сʱ 
		    var day = Math.floor((SysSecond / 3600) / 24);        //������ 
			$("#codetime").attr({"value":minite+"��"+second+"��"});
			$("#codetime").attr({"disabled":"disabled"});
			setTimeout("SetRemainTime()",1000);
		   }else{
			$("#codetime").attr({"value":"��ȡ��֤��"});	
				$("#codetime").removeAttr("disabled");
		   } 
	  }
function sub_form(){
	var form = document.forms['form1'];
	var bank = form1.elements['bank'].value;
	var branch = form1.elements['branch'].value;
	var account = form1.elements['account'].value;
	var mobilecode = form1.elements['mobilecode'].value;
	if(bank==''){
		jQuery.jBox.info('����������������','��ʾ');return false;
	}
	if(account==''){
		jQuery.jBox.info('������������������','��ʾ');return false;
	}
	if(account.length<16){
		jQuery.jBox.info('�����˻���������','��ʾ');return false;
	}
	if(mobilecode.length!=6){
		jQuery.jBox.info('�ֻ���֤����������','��ʾ');return false;
	}
	jQuery.jBox.tip("�ύ��", 'loading');
	form.submit();
}
</script>
	
		<!--�����˺� ����-->

		<!--���� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="cash_new"): ?>
		<div class="user_help alert" style="text-align:left;">
<strong>ע��</strong><br/>
1��ȷ�����������ʺŵ�������������վ�ϵ���ʵ����һ��<br><br>
2����������Ҫȡ�����,���ǽ���1��2��������(���ҽڼ��ճ���)֮�ڴ������ύ���������롣�ʽ���24Сʱ�ڵ����������ϡ����û������ÿ�������յ�����4��(�����¹���ʱ��Ϊ׼)֮ǰ�ύ�������룬ÿ��������16:00(�����¹���ʱ��Ϊ׼)֮���ύ�����������ڵ��콫����õ���ʱ����<br><br>
3������ȡ������<? if (!isset($this->magic_vars['_G']['cash_rule']['min_cash'])) $this->magic_vars['_G']['cash_rule']['min_cash'] = ''; echo $this->magic_vars['_G']['cash_rule']['min_cash']; ?>Ԫ������Ϊ<? if (!isset($this->magic_vars['_G']['cash_rule']['max_cash'])) $this->magic_vars['_G']['cash_rule']['max_cash'] = ''; echo $this->magic_vars['_G']['cash_rule']['max_cash']; ?>�����ۼ����ֲ��ó���<? if (!isset($this->magic_vars['_G']['cash_rule']['max_day_cash'])) $this->magic_vars['_G']['cash_rule']['max_day_cash'] = ''; echo $this->magic_vars['_G']['cash_rule']['max_day_cash']; ?>��<br><br>
<? if (!isset($this->magic_vars['_G']['cash_rule']['scheme'])) $this->magic_vars['_G']['cash_rule']['scheme']=''; ;if (  $this->magic_vars['_G']['cash_rule']['scheme']==1): ?>
4���������ֽ��<? if (!isset($this->magic_vars['_G']['cash_rule']['cash_lt'])) $this->magic_vars['_G']['cash_rule']['cash_lt'] = ''; echo $this->magic_vars['_G']['cash_rule']['cash_lt']; ?>Ԫ�����������£�ÿ����ȡ<? if (!isset($this->magic_vars['_G']['cash_rule']['every_lt_fee'])) $this->magic_vars['_G']['cash_rule']['every_lt_fee'] = ''; echo $this->magic_vars['_G']['cash_rule']['every_lt_fee']; ?>Ԫ�����ѡ���������<? if (!isset($this->magic_vars['_G']['cash_rule']['cash_gt'])) $this->magic_vars['_G']['cash_rule']['cash_gt'] = ''; echo $this->magic_vars['_G']['cash_rule']['cash_gt']; ?>Ԫ���ϣ�ÿ����ȡ<? if (!isset($this->magic_vars['_G']['cash_rule']['every_gt_fee'])) $this->magic_vars['_G']['cash_rule']['every_gt_fee'] = ''; echo $this->magic_vars['_G']['cash_rule']['every_gt_fee']; ?>Ԫ�����ѡ��û��Գ�ֵ֮������<? if (!isset($this->magic_vars['_G']['cash_rule']['every_day_lt'])) $this->magic_vars['_G']['cash_rule']['every_day_lt'] = ''; echo $this->magic_vars['_G']['cash_rule']['every_day_lt']; ?>��֮����δ��ȫͶ��Ķ������<? if (!isset($this->magic_vars['_G']['cash_rule']['every_extra_fee'])) $this->magic_vars['_G']['cash_rule']['every_extra_fee'] = ''; echo $this->magic_vars['_G']['cash_rule']['every_extra_fee']; ?>Ԫ�����ѡ�
<? else: ?>
4������������Ϊ���ֽ���<? if (!isset($this->magic_vars['_G']['cash_rule']['scale_fee'])) $this->magic_vars['_G']['cash_rule']['scale_fee'] = ''; echo $this->magic_vars['_G']['cash_rule']['scale_fee']; ?>%���û��Գ�ֵ֮������<? if (!isset($this->magic_vars['_G']['cash_rule']['scale_day_lt'])) $this->magic_vars['_G']['cash_rule']['scale_day_lt'] = ''; echo $this->magic_vars['_G']['cash_rule']['scale_day_lt']; ?>��֮����δ��ȫͶ��Ĳ��ֶ������<? if (!isset($this->magic_vars['_G']['cash_rule']['scale_extra_fee'])) $this->magic_vars['_G']['cash_rule']['scale_extra_fee'] = ''; echo $this->magic_vars['_G']['cash_rule']['scale_extra_fee']; ?>%�����ѡ�
<? endif; ?>
<br>
		</div>
		<form action="" method="post" onsubmit="return check_form()" name="form1">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ʵ������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�˻���</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ
				<input type="hidden" name="userMoney" id="userMoney" value="<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>">
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�����ܶ</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['no_use_money'])) $this->magic_vars['_G']['user_result']['no_use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">���ֵ����У�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank'] = '';$_tmp = $this->magic_vars['_U']['account_bank_result']['bank'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?> <? if (!isset($this->magic_vars['_U']['account_bank_result']['branch'])) $this->magic_vars['_U']['account_bank_result']['branch'] = ''; echo $this->magic_vars['_U']['account_bank_result']['branch']; ?> <? if (!isset($this->magic_vars['_U']['account_bank_result']['account_view'])) $this->magic_vars['_U']['account_bank_result']['account_view'] = ''; echo $this->magic_vars['_U']['account_bank_result']['account_view']; ?> 
			</div>
		</div>
                    
		<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'article_id'=>'0','id'=>$this->magic_vars['_G']['article_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetCashGoodAmount($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
                
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�����������֣�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['var']['txValue'])) $this->magic_vars['var']['txValue'] = '';$_tmp = $this->magic_vars['var']['txValue'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ(���)
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">Ҫ���Ľ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['var']['txRepayment'])) $this->magic_vars['var']['txRepayment'] = ''; echo $this->magic_vars['var']['txRepayment']; ?>Ԫ(���)
			</div>
		</div>
                
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">����������֣�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['var']['yValue'])) $this->magic_vars['var']['yValue'] = ''; echo $this->magic_vars['var']['yValue']; ?>Ԫ(���)
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['hongbao'])) $this->magic_vars['_G']['user_result']['hongbao'] = ''; echo $this->magic_vars['_G']['user_result']['hongbao']; ?>Ԫ
				<input type="hidden" name="hongbao" id="hongbao" value="<? if (!isset($this->magic_vars['_G']['user_result']['hongbao'])) $this->magic_vars['_G']['user_result']['hongbao'] = ''; echo $this->magic_vars['_G']['user_result']['hongbao']; ?>">
				<input type="hidden" name="hongbaoUsed" id="hongbaoUsed" value="">
			</div>
		</div>
		<input type="hidden" name="cashGoodAmount" id="cashGoodAmount" value="<? if (!isset($this->magic_vars['var']['yValue'])) $this->magic_vars['var']['yValue'] = ''; echo $this->magic_vars['var']['yValue']; ?>">
		<script style="text/javascript">
		var scheme=<? if (!isset($this->magic_vars['var']['cash_scheme']['scheme'])) $this->magic_vars['var']['cash_scheme']['scheme'] = ''; echo $this->magic_vars['var']['cash_scheme']['scheme']; ?>;
		var max_cash=<? if (!isset($this->magic_vars['var']['cash_scheme']['max_cash'])) $this->magic_vars['var']['cash_scheme']['max_cash'] = ''; echo $this->magic_vars['var']['cash_scheme']['max_cash']; ?>;
		var min_cash=<? if (!isset($this->magic_vars['var']['cash_scheme']['min_cash'])) $this->magic_vars['var']['cash_scheme']['min_cash'] = ''; echo $this->magic_vars['var']['cash_scheme']['min_cash']; ?>;
		var cash_lt=<? if (!isset($this->magic_vars['var']['cash_scheme']['cash_lt'])) $this->magic_vars['var']['cash_scheme']['cash_lt'] = ''; echo $this->magic_vars['var']['cash_scheme']['cash_lt']; ?>;
		var cash_gt=<? if (!isset($this->magic_vars['var']['cash_scheme']['cash_gt'])) $this->magic_vars['var']['cash_scheme']['cash_gt'] = ''; echo $this->magic_vars['var']['cash_scheme']['cash_gt']; ?>;
		var every_lt_fee=<? if (!isset($this->magic_vars['var']['cash_scheme']['every_lt_fee'])) $this->magic_vars['var']['cash_scheme']['every_lt_fee'] = ''; echo $this->magic_vars['var']['cash_scheme']['every_lt_fee']; ?>;
		var every_gt_fee=<? if (!isset($this->magic_vars['var']['cash_scheme']['every_gt_fee'])) $this->magic_vars['var']['cash_scheme']['every_gt_fee'] = ''; echo $this->magic_vars['var']['cash_scheme']['every_gt_fee']; ?>;
		var every_extra_fee=<? if (!isset($this->magic_vars['var']['cash_scheme']['every_extra_fee'])) $this->magic_vars['var']['cash_scheme']['every_extra_fee'] = ''; echo $this->magic_vars['var']['cash_scheme']['every_extra_fee']; ?>;
		var scale_fee=<? if (!isset($this->magic_vars['var']['cash_scheme']['scale_fee'])) $this->magic_vars['var']['cash_scheme']['scale_fee'] = ''; echo $this->magic_vars['var']['cash_scheme']['scale_fee']; ?>;
		var scale_extra_fee=<? if (!isset($this->magic_vars['var']['cash_scheme']['scale_extra_fee'])) $this->magic_vars['var']['cash_scheme']['scale_extra_fee'] = ''; echo $this->magic_vars['var']['cash_scheme']['scale_extra_fee']; ?>;
		var free_extra_part=<? if (!isset($this->magic_vars['var']['free_extra_part'])) $this->magic_vars['var']['free_extra_part'] = ''; echo $this->magic_vars['var']['free_extra_part']; ?>;
		</script>
		<? unset($_magic_vars);unset($data); ?>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�������룺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['paypassword'])) $this->magic_vars['_U']['account_bank_result']['paypassword']=''; ;if (  $this->magic_vars['_U']['account_bank_result']['paypassword']==""): ?><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>&q=code/user/paypwd"><font color="#FF0000">��������һ��֧������</font></a><? else: ?><input type="password" name="paypassword" /><? endif; ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">���ֽ�</div>
			<div class="c">
				<input type="text" name="money"  onblur="commit(this);" id="cash_money"  /><span id="realacc">ʵ�ʵ��ˣ�<font color="#FF0000" id="real_money">0</font> Ԫ</span>
				<span id="realacc">��������������<font color="#FF0000" id="cash_fee">0</font>Ԫ</span>��ʹ�ú���������ַ��ã�<font color="#FF0000" id="hongbao_used">0</font> Ԫ</span>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�ֻ���֤��</div>
			<div class="c">
				<input type="text" name="mobilecode"  maxlength="6"  />&nbsp;&nbsp;<input id="codetime" name="codetime" type="button" value="������֤��"/>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��̬����(��ѡ)��</div>
			<div class="c">
				<input type="text" name="uchoncode"  maxlength="6"  />
			</div>
		</div>

		<script language="javascript">
				
				document.getElementById("codetime").onclick = function(){
					$("#codetime").attr({"disabled":"disabled"});
					$.ajax({
						url:"/index.php?user&q=code/account/cash_new_sms&itype=1&random="+Math.random(),
						success:function(msg){
							if(msg==-1){
								jQuery.jBox.confirm("����û���ֻ���֤���޷�������֤�룬����ǰ����֤��", "��ʾ", function(v,h,f){if(v=='ok'){location.href="/index.php?user&q=code/user/phone_status"};return true;});
								$("#codetime").removeAttr("disabled");
								return;
							}else if(msg==1){
								jQuery.jBox.success('��֤�뷢�ͳɹ�', '��ʾ');
								$("#codetime").attr({"disabled":"disabled"});
								var date=new Date();
								date.setTime(date.getTime()+5*60*1000);
								document.cookie = "cashcode=300;expires=" + date.toGMTString();
								SetRemainTime();
							}else{
								jQuery.jBox.error('��֤�뷢��ʧ��!', '��ʾ');
								$("#codetime").removeAttr("disabled");
								return;
							}
						},
						error:function(XMLHttpRequest, error){
							jQuery.jBox.error('��֤�뷢��ʧ��!', '��ʾ');
							$("#codetime").removeAttr("disabled");
							return;
						}
					});
				}
				SetRemainTime();
				function SetRemainTime() {
						var arr,reg=new RegExp("(^| )cashcode=([^;]*)(;|$)");
						var SysSecond = 0;
						if(arr=document.cookie.match(reg)){
							var SysSecond = arr[2];
						}
					    if (SysSecond > 0) { 
					    SysSecond = SysSecond - 1;
					    var date=new Date();
						date.setTime(date.getTime()+SysSecond*1000);
						document.cookie = "cashcode="+SysSecond+";expires=" + date.toGMTString();
					    var second = Math.floor(SysSecond % 60);             // ������     
					    var minite = Math.floor((SysSecond / 60) % 60);      //����� 
					    var hour = Math.floor((SysSecond / 3600) % 24);      //����Сʱ 
					    var day = Math.floor((SysSecond / 3600) / 24);        //������ 
						$("#codetime").attr({"value":minite+"��"+second+"��"});
						$("#codetime").attr({"disabled":"disabled"});
						setTimeout("SetRemainTime()",1000);
					   }else{
						$("#codetime").attr({"value":"��ȡ��֤��"});	
							$("#codetime").removeAttr("disabled");
					   } 
				}
	</script>


<script style="text/javascript">
	document.getElementById("cash_money").value=0;
       function commit(obj) {
            if (parseFloat(obj.value) > 0 )
            {
				var inputValue=parseFloat(obj.value);
				var yValue = document.getElementById("cashGoodAmount").value;
				var userMoney = document.getElementById("userMoney").value;
                if(inputValue!=0 && (inputValue<min_cash || inputValue>max_cash)){
                	jQuery.jBox.error("���ã������ʽ��ܵ���"+min_cash+"Ԫ����"+max_cash+"Ԫ", '����');
                	obj.value = 0;
                	document.getElementById("real_money").innerText = 0 ;
                	return;
                }else if(inputValue>yValue){
                	jQuery.jBox.error("���ã������ʽ��ܸ���������ֽ��"+yValue+"Ԫ", '����');
                	obj.value = 0;
                	document.getElementById("real_money").innerText = 0 ;
                	return;
                }
                getCashFeeValue(inputValue);
                return true;
            }
        }
        function getCashFeeValue(cashAmount){
                var yValue = document.getElementById("cashGoodAmount").value;
				var hongbao = document.getElementById("hongbao").value;
                var hongbaoUsed = 0;
                var caseFee;
                if(scheme==1){
					if(cashAmount<=cash_lt){
						caseFee=every_lt_fee;
					}else{
						caseFee=every_gt_fee;
					}
                }else if(scheme==2){
                	caseFee=cashAmount*scale_fee;
                }
                if(cashAmount>free_extra_part){
					if(scheme==1){
						caseFee+=every_extra_fee;
					}else if(scheme==2){
						caseFee+=(cashAmount-free_extra_part)*scale_extra_fee
					}
                }
				if(caseFee>=hongbao){
					hongbaoUsed=hongbao*1;
				}else{
					hongbaoUsed=caseFee*1;
				}
				document.getElementById("cash_fee").innerHTML = changeTwoDecimal(caseFee);
                document.getElementById("real_money").innerHTML = changeTwoDecimal(cashAmount-caseFee+hongbaoUsed);
				document.getElementById("hongbaoUsed").value = changeTwoDecimal(hongbaoUsed);
				document.getElementById("hongbao_used").innerHTML = changeTwoDecimal(hongbaoUsed);
        }
        
        function changeTwoDecimal(x)
        {
            var f_x = parseFloat(x);
            if (isNaN(f_x))
            {
                alert('function:changeTwoDecimal->parameter error');
                return false;
            }
            var f_x = Math.round(x*100)/100;
            return f_x;
        }
</script>

		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��֤�룺</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4" style="float:left;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left;" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;"></div>
			<div class="c">
				<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?>" />
				<input type="button" class="btn-action"  name="name"  value="ȷ���ύ" size="30" onclick="check_form()" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ����ֹ���ÿ�����
		</div>
<script>
var use_money = <? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;

function check_form(){
	var frm = document.forms['form1'];
	var paypassword = frm.elements['paypassword'].value;
	var money = frm.elements['money'].value;
	var valicode = frm.elements['valicode'].value;
	var mobilecode = frm.elements['mobilecode'].value;
	if(!commit(document.getElementById("cash_money"))){
		jQuery.jBox.error('��������Ч�Ľ��', '��ʾ');
		return false;
	}
	if (paypassword.length == 0 ) {
		jQuery.jBox.error('���������Ľ�������', '��ʾ');return false;
	}
	if (money.length == 0 || money==0) {
		jQuery.jBox.error('������������ֽ��', '��ʾ');return false;
	}
	if (money >use_money) {
		jQuery.jBox.error('�������ֽ��������еĿ������', '��ʾ');return false;
	}
	if (!/^[0-9a-zA-Z]{4}$/.test(valicode)){
		jQuery.jBox.error('��֤���ʽ����', '��ʾ');return false;
	}
	if(mobilecode==''){
		jQuery.jBox.error('�ֻ���֤�벻��Ϊ��', '��ʾ');return false;
	}
	jQuery.jBox.tip('�ύ��', 'loading');
	frm.submit();
}
</script>

<!--���� ����-->
<? else: ?>

<? $this->magic_vars['day7'] = time()-6*60*60*24;?>
<? $this->magic_vars['nowtime'] = time();?>

		<div class="user_main_title" style="height:30px; padding-top:7px;"> 
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		<input value="����" type="submit" class="btn-action"  onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />
		</div>	
		<? $data = array('user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
		<table width="100%">
			<tr style="height: 25px">
				<td colspan="6"><strong>�����ʽ�����</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">�˻��ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['total'])) $this->magic_vars['var']['total'] = '';$_tmp = $this->magic_vars['var']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">������</td><td align="left">��<? if (!isset($this->magic_vars['var']['use_money'])) $this->magic_vars['var']['use_money'] = '';$_tmp = $this->magic_vars['var']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">�����</td><td align="left">��<? if (!isset($this->magic_vars['var']['no_use_money'])) $this->magic_vars['var']['no_use_money'] = '';$_tmp = $this->magic_vars['var']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">Ͷ�궳���ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender'] = '';$_tmp = $this->magic_vars['var']['tender'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">��ֵ�ɹ��ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['recharge_success'])) $this->magic_vars['var']['recharge_success'] = '';$_tmp = $this->magic_vars['var']['recharge_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">���ֳɹ��ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['cash_success']['money'])) $this->magic_vars['var']['cash_success']['money'] = '';$_tmp = $this->magic_vars['var']['cash_success']['money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">���߳�ֵ�ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['recharge_online'])) $this->magic_vars['var']['recharge_online'] = '';$_tmp = $this->magic_vars['var']['recharge_online'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">���³�ֵ�ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['recharge_downline'])) $this->magic_vars['var']['recharge_downline'] = '';$_tmp = $this->magic_vars['var']['recharge_downline'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">�ֶ���ֵ�ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['recharge_shoudong'])) $this->magic_vars['var']['recharge_shoudong'] = '';$_tmp = $this->magic_vars['var']['recharge_shoudong'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">�������ѣ�</td><td align="left">��<? if (!isset($this->magic_vars['var']['fee'])) $this->magic_vars['var']['fee'] = ''; if (!isset($this->magic_vars['var']['recharge_fee'])) $this->magic_vars['var']['recharge_fee'] = '';$_tmp = $this->magic_vars['var']['fee']+$this->magic_vars['var']['recharge_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">��ֵ�����ѣ�</td><td align="left">��<? if (!isset($this->magic_vars['var']['fee'])) $this->magic_vars['var']['fee'] = '';$_tmp = $this->magic_vars['var']['fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">���������ѣ�</td><td align="left">��<? if (!isset($this->magic_vars['var']['recharge_fee'])) $this->magic_vars['var']['recharge_fee'] = '';$_tmp = $this->magic_vars['var']['recharge_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">��߶�ȣ�</td><td align="left">��<? if (!isset($this->magic_vars['var']['amount'])) $this->magic_vars['var']['amount'] = '';$_tmp = $this->magic_vars['var']['amount'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">��Ͷ�ȣ�</td><td align="left">��500</td>
				<td align="right">���ö�ȣ�</td><td align="left">��<? if (!isset($this->magic_vars['var']['use_amount'])) $this->magic_vars['var']['use_amount'] = '';$_tmp = $this->magic_vars['var']['use_amount'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td colspan="6"><strong>Ͷ���ʽ�����</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">Ͷ���ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['invest_account'])) $this->magic_vars['var']['invest_account'] = '';$_tmp = $this->magic_vars['var']['invest_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">����ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['success_account'])) $this->magic_vars['var']['success_account'] = '';$_tmp = $this->magic_vars['var']['success_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">���������ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['award_add'])) $this->magic_vars['var']['award_add'] = '';$_tmp = $this->magic_vars['var']['award_add'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">�������ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['collection_wait'])) $this->magic_vars['var']['collection_wait'] = '';$_tmp = $this->magic_vars['var']['collection_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">�����ս�</td><td align="left">��<? if (!isset($this->magic_vars['var']['collection_capital0'])) $this->magic_vars['var']['collection_capital0'] = '';$_tmp = $this->magic_vars['var']['collection_capital0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">��������Ϣ��</td><td align="left">��<? if (!isset($this->magic_vars['var']['collection_interest0'])) $this->magic_vars['var']['collection_interest0'] = '';$_tmp = $this->magic_vars['var']['collection_interest0'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">�ѻ����ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['collection_yes'])) $this->magic_vars['var']['collection_yes'] = '';$_tmp = $this->magic_vars['var']['collection_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">�ѻ��ս�</td><td align="left">��<? if (!isset($this->magic_vars['var']['collection_capital1'])) $this->magic_vars['var']['collection_capital1'] = '';$_tmp = $this->magic_vars['var']['collection_capital1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">�ѻ�����Ϣ��</td><td align="left">��<? if (!isset($this->magic_vars['var']['collection_interest1'])) $this->magic_vars['var']['collection_interest1'] = '';$_tmp = $this->magic_vars['var']['collection_interest1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">��վ�渶�ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['num_late_repay_account'])) $this->magic_vars['var']['num_late_repay_account'] = '';$_tmp = $this->magic_vars['var']['num_late_repay_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">���ڷ������룺</td><td align="left">��<? if (!isset($this->magic_vars['var']['late_collection'])) $this->magic_vars['var']['late_collection'] = '';$_tmp = $this->magic_vars['var']['late_collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">��ʧ��Ϣ�ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['num_late_interes'])) $this->magic_vars['var']['num_late_interes'] = '';$_tmp = $this->magic_vars['var']['num_late_interes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">����տ����ڣ�</td><td align="left"><? if (!isset($this->magic_vars['var']['collection_repaytime'])) $this->magic_vars['var']['collection_repaytime'] = '';$_tmp = $this->magic_vars['var']['collection_repaytime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
				<td align="right"></td><td align="left"></td>
				<td align="right"></td><td align="left"></td>
			</tr>
			<tr style="height: 25px">
				<td colspan="6"><strong>�����ʽ�����</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">����ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['borrow_num'])) $this->magic_vars['var']['borrow_num'] = '';$_tmp = $this->magic_vars['var']['borrow_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">�ѻ��ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['borrow_num1'])) $this->magic_vars['var']['borrow_num1'] = '';$_tmp = $this->magic_vars['var']['borrow_num1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">δ���ܶ</td><td align="left">��<? if (!isset($this->magic_vars['var']['wait_payment'])) $this->magic_vars['var']['wait_payment'] = '';$_tmp = $this->magic_vars['var']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">���������</td><td align="left"><? if (!isset($this->magic_vars['var']['borrow_times'])) $this->magic_vars['var']['borrow_times'] = '';$_tmp = $this->magic_vars['var']['borrow_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">���������</td><td align="left"><? if (!isset($this->magic_vars['var']['payment_times'])) $this->magic_vars['var']['payment_times'] = '';$_tmp = $this->magic_vars['var']['payment_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">����������</td><td align="left"><? if (!isset($this->magic_vars['var']['borrow_repay0'])) $this->magic_vars['var']['borrow_repay0'] = '';$_tmp = $this->magic_vars['var']['borrow_repay0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">����������ڣ�</td><td align="left"><? if (!isset($this->magic_vars['var']['new_repay_time'])) $this->magic_vars['var']['new_repay_time'] = '';$_tmp = $this->magic_vars['var']['new_repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">���Ӧ�����</td><td align="left">��<? if (!isset($this->magic_vars['var']['new_repay_account'])) $this->magic_vars['var']['new_repay_account'] = '';$_tmp = $this->magic_vars['var']['new_repay_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right"></td><td align="left"></td>
			</tr>
		</table>
		<? unset($_magic_vars);unset($data); ?>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed"  width="300" style="margin-top:20px;">
		<tr class="head"  width="300">
		<td>����</td>
		<td>�ɹ����+</td>
		<td>���������-</td>
		<td>��֤��-</td>
		<td>����-</td>
		<td>Ͷ��-</td>
		<td>�����ܶ�+</td>
		<td>Ͷ�꽱��+</td>
		<td>����-</td>
		<td>��ֵ+</td>
		<td>����-</td>
		</tr>
			<? $this->magic_vars['query_type']='GetLogCount';$data = array('var'=>'var','dotime1'=>$_REQUEST['dotime1'],'dotime2'=>$_REQUEST['dotime2'],'user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/account/account.class.php');$this->magic_vars['magic_result'] = accountClass::GetLogCount($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<tr <? if (!isset($this->magic_vars['var']['i'])) $this->magic_vars['var']['i']=''; ;if (  $this->magic_vars['var']['i']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?></td>
					<td <? if (!isset($this->magic_vars['var']['borrow_success'])) $this->magic_vars['var']['borrow_success']=''; ;if (  $this->magic_vars['var']['borrow_success']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['borrow_success'])) $this->magic_vars['var']['borrow_success'] = '';$_tmp = $this->magic_vars['var']['borrow_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['borrow_fee'])) $this->magic_vars['var']['borrow_fee']=''; ;if (  $this->magic_vars['var']['borrow_fee']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['borrow_fee'])) $this->magic_vars['var']['borrow_fee'] = '';$_tmp = $this->magic_vars['var']['borrow_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['margin'])) $this->magic_vars['var']['margin']=''; ;if (  $this->magic_vars['var']['margin']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['margin'])) $this->magic_vars['var']['margin'] = '';$_tmp = $this->magic_vars['var']['margin'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['award_lower'])) $this->magic_vars['var']['award_lower']=''; ;if (  $this->magic_vars['var']['award_lower']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['award_lower'])) $this->magic_vars['var']['award_lower'] = '';$_tmp = $this->magic_vars['var']['award_lower'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender']=''; ;if (  $this->magic_vars['var']['tender']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender'] = '';$_tmp = $this->magic_vars['var']['tender'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['collection'])) $this->magic_vars['var']['collection']=''; ;if (  $this->magic_vars['var']['collection']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['collection'])) $this->magic_vars['var']['collection'] = '';$_tmp = $this->magic_vars['var']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['award_add'])) $this->magic_vars['var']['award_add']=''; ;if (  $this->magic_vars['var']['award_add']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['award_add'])) $this->magic_vars['var']['award_add'] = '';$_tmp = $this->magic_vars['var']['award_add'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['invest_repayment'])) $this->magic_vars['var']['invest_repayment']=''; ;if (  $this->magic_vars['var']['invest_repayment']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['invest_repayment'])) $this->magic_vars['var']['invest_repayment'] = '';$_tmp = $this->magic_vars['var']['invest_repayment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['recharge'])) $this->magic_vars['var']['recharge']=''; ;if (  $this->magic_vars['var']['recharge']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['recharge'])) $this->magic_vars['var']['recharge'] = '';$_tmp = $this->magic_vars['var']['recharge'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['recharge_success'])) $this->magic_vars['var']['recharge_success']=''; ;if (  $this->magic_vars['var']['recharge_success']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['recharge_success'])) $this->magic_vars['var']['recharge_success'] = '';$_tmp = $this->magic_vars['var']['recharge_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>	
			<? endif; ?>
	</div>
	<!--�ұߵ����� ����-->
</div>
<!--�û����ĵ�����Ŀ ����-->
</div>
</div>
<script type="text/javascript">
var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";

function sousuo(){
	var _url = "";
	var dotime1 = jQuery("#dotime1").val();
	var keywords = jQuery("#keywords").val();
	var username = jQuery("#username").val();
	var dotime2 = jQuery("#dotime2").val();
	var type = jQuery("#type").val();
	if (username!=null){
		 _url += "&username="+username;
	}
	if (keywords!=null){
		 _url += "&keywords="+keywords;
	}
	if (dotime1!=null){
		 _url += "&dotime1="+dotime1;
	}
	if (dotime2!=null){
		 _url += "&dotime2="+dotime2;
	}
	if (type!=null){
		 _url += "&type="+type;
	}
	location.href=url+_url;
}
$("[type='radio']").css("border","0");
$("#ban img").each(function(){
	this.onclick = function(){
		$(this).parent().find("input").attr("checked", "checked");
	}
})
</script>

<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/modal.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tab.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/alert.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tooltip.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/popover.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>