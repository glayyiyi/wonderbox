<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><? if (!isset($this->magic_vars['_A']['list_name'])) $this->magic_vars['_A']['list_name'] = '';$_tmp = $this->magic_vars['_A']['list_name'];$_tmp = $this->magic_modifier("default",$_tmp,"��������");echo $_tmp;unset($_tmp); ?>_<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>�����̨</title>
<link href="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/admin.css" rel="stylesheet" type="text/css" />
<script src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/js/jquery.js" type="text/javascript"></script>
 
<script src="/plugins/timepicker/WdatePicker.js" type="text/javascript"></script>
<script src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/js/base.js" type="text/javascript"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/thickbox/thickbox.css" type="text/css" media="screen" />
<!--jbox-->
<link id="skin" rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/Skins/Gray/jbox.css" />
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/jquery.jBox-2.3.min.js?v=1" charset='gb2312'></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/i18n/jquery.jBox-zh-CN.js?v=1" charset='gb2312'></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/newAction.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tipswindown.js"></script>
<!--jbox-->
 
<script type="text/javascript">
/*
jQuery(document).ready(function() { 
 	// �󶨱��ύ�¼�������
	jQuery('form').submit(function() {
		// �ύ��  add by weego 20130128
 	    jQuery.jBox.tip("�����ύ..", 'loading');
	    //end by weego
		// Ϊ�˷�ֹ��ͨ��������б��ύ�Ͳ���ҳ�浼������ֹҳ��ˢ�£�������false
		return true;
	   });

}); */
function submit_fool(){
	jQuery.jBox.tip('�����ύ���벻Ҫ�ر��������ˢ�±�ҳ��','loading');return true;
}
</script>
 
</head>

<body>
<div class="main top js-topHeight">
	<div class="logo "><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/admin_top.png" /></div>
	<div class="banner">
		<div class="banner_top">
			<span>
			 <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>">�����̨</a>  ��ǰ��¼�� <font color="#FF0000"><? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?></font> (<? if (!isset($this->magic_vars['_G']['user_result']['typename'])) $this->magic_vars['_G']['user_result']['typename'] = ''; echo $this->magic_vars['_G']['user_result']['typename']; ?>)<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=logout">[ע��]</a> |&nbsp;<a href="/" target="_blank">��վ��ҳ</a> 
		 </span>��</div>
 

	</div>
	
</div>

<div class="main mainbody js-bodyHeight">
	<div class="main_left js-mainleft">
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;if (  $_REQUEST['a']=="control"): ?>
			<? $this->magic_include(array('file' => "admin_control_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;elseif (  $_REQUEST['a']=="loop"): ?>
			<? $this->magic_include(array('file' => "admin_loop_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;elseif (  $_REQUEST['a'] == "site"): ?>
			<? $this->magic_include(array('file' => "admin_site_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;elseif (  $_REQUEST['a'] == "borrow"): ?>
			<? $this->magic_include(array('file' => "admin_borrow_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;elseif (  $_REQUEST['a'] == "cash"): ?>
			<? $this->magic_include(array('file' => "admin_cash_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;elseif (  $_REQUEST['a'] == "userinfo"): ?>
			<? $this->magic_include(array('file' => "admin_userinfo_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;elseif (  $_REQUEST['a'] == "attestation"): ?>
			<? $this->magic_include(array('file' => "admin_attestation_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;elseif (  $_REQUEST['a'] == "content"): ?>
			<? $this->magic_include(array('file' => "admin_content_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']='';if (!isset($this->magic_vars['_A']['query_sort'])) $this->magic_vars['_A']['query_sort']=''; ;elseif (  $_REQUEST['a']=="system" ||  $this->magic_vars['_A']['query_sort'] == "system"): ?>
			<? $this->magic_include(array('file' => "admin_system_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']='';if (!isset($this->magic_vars['_A']['query_sort'])) $this->magic_vars['_A']['query_sort']=''; ;elseif (  $_REQUEST['a'] == "module" ||  $this->magic_vars['_A']['query_sort'] == "module"): ?>
			<? $this->magic_include(array('file' => "admin_module_menu.html", 'vars' => array()));?>
		<? else: ?>
			<? $this->magic_include(array('file' => "admin_site_menu.html", 'vars' => array()));?>
		
		<? endif; ?>
	</div>
	<div class="main_right js-mainright">
 		<div class="banner_position">
 
		<ul class="aNavContent">
			<? if (!isset($this->magic_vars['_A']['pur_header']['borrow_list'])) $this->magic_vars['_A']['pur_header']['borrow_list']=''; ;if (  $this->magic_vars['_A']['pur_header']['borrow_list']==1): ?><li class=""><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow&site_id=8&a=borrow">������</a></li><? endif; ?>
			<? if (!isset($this->magic_vars['_A']['pur_header']['attestation_list'])) $this->magic_vars['_A']['pur_header']['attestation_list']=''; ;if (  $this->magic_vars['_A']['pur_header']['attestation_list']==1): ?><li class=""><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/attestation/all_s&site_id=26&a=attestation">��֤����</a></li><? endif; ?> 
			<? if (!isset($this->magic_vars['_A']['pur_header']['account_list'])) $this->magic_vars['_A']['pur_header']['account_list']=''; ;if (  $this->magic_vars['_A']['pur_header']['account_list']==1): ?><li class=""><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/list&a=cash">�ʽ����</a></li><? endif; ?> 
			<? if (!isset($this->magic_vars['_A']['pur_header']['userinfo_list'])) $this->magic_vars['_A']['pur_header']['userinfo_list']=''; ;if (  $this->magic_vars['_A']['pur_header']['userinfo_list']==1): ?><li class=""><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/userinfo&site_id=46&a=userinfo">�û�����</a></li><? endif; ?> 
			<? if (!isset($this->magic_vars['_A']['pur_header']['article_list'])) $this->magic_vars['_A']['pur_header']['article_list']=''; ;if (  $this->magic_vars['_A']['pur_header']['article_list']==1): ?><li class=""><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/article&a=content">���¹���</a></li><? endif; ?> 
			<? if (!isset($this->magic_vars['_A']['pur_header']['site_list'])) $this->magic_vars['_A']['pur_header']['site_list']='';if (!isset($this->magic_vars['_A']['pur_header']['site_all'])) $this->magic_vars['_A']['pur_header']['site_all']=''; ;if (  $this->magic_vars['_A']['pur_header']['site_list']==1 ||  $this->magic_vars['_A']['pur_header']['site_all']==1): ?><li class=""><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/loop&a=loop">��Ŀ����</a></li><? endif; ?> 
			<? if (!isset($this->magic_vars['_A']['pur_header']['module_all'])) $this->magic_vars['_A']['pur_header']['module_all']=''; ;if (  $this->magic_vars['_A']['pur_header']['module_all']==1): ?><li class=""><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module">ģ�����</a></li><? endif; ?> 
			<? if (!isset($this->magic_vars['_A']['pur_header']['system_all'])) $this->magic_vars['_A']['pur_header']['system_all']=''; ;if (  $this->magic_vars['_A']['pur_header']['system_all']==1): ?><li class=""><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system">ϵͳ����</a></li><? endif; ?> 
 
		</ul>
	</div>	
    	
		<div class="main_site">
			<ul>
				
				<li class="site_sub"><? if (!isset($this->magic_vars['_A']['list_menu'])) $this->magic_vars['_A']['list_menu'] = ''; echo $this->magic_vars['_A']['list_menu']; ?></li>
				<li class="title"><? if (!isset($this->magic_vars['_A']['list_name'])) $this->magic_vars['_A']['list_name'] = ''; echo $this->magic_vars['_A']['list_name']; ?> <span>/ <? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name']=''; ;if (  $this->magic_vars['_A']['site_result']['name']!=""): ?><? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name'] = ''; echo $this->magic_vars['_A']['site_result']['name']; ?><? else: ?><? if (!isset($this->magic_vars['_A']['list_title'])) $this->magic_vars['_A']['list_title'] = ''; echo $this->magic_vars['_A']['list_title']; ?> <? endif; ?></span></li>
				
			</ul>
		</div>
		<div class="main_content">
			
		 