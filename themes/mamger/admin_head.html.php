<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>{$_A.list_name|default:"��������"}_{$_G.system.con_webname}�����̨</title>
<link href="{$tpldir}/admin.css" rel="stylesheet" type="text/css" />
<script src="{$tpldir}/js/jquery.js" type="text/javascript"></script>
 
<script src="/plugins/timepicker/WdatePicker.js" type="text/javascript"></script>
<script src="{$tpldir}/js/base.js" type="text/javascript"></script>
<script type="text/javascript" src="{$tempdir}/media/js/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="{$tempdir}/media/js/thickbox/thickbox.css" type="text/css" media="screen" />
<!--jbox-->
<link id="skin" rel="stylesheet" href="{$tempdir}/media/js/jBox/Skins/Gray/jbox.css" />
<script type="text/javascript" src="{$tempdir}/media/js/jBox/jquery.jBox-2.3.min.js?v=1" charset='gb2312'></script>
<script type="text/javascript" src="{$tempdir}/media/js/jBox/i18n/jquery.jBox-zh-CN.js?v=1" charset='gb2312'></script>
<script type="text/javascript" src="{$tempdir}/media/js/newAction.js"></script>
<script type="text/javascript" src="{$tempdir}/media/js/tipswindown.js"></script>
<!--jbox-->
 {literal}
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
 {/literal}
</head>

<body>
<div class="main top js-topHeight">
	<div class="logo "><img src="{$tpldir}/images/admin_top.png" /></div>
	<div class="banner">
		<div class="banner_top">
			<span>
			 <a href="{$_A.admin_url}">�����̨</a>  ��ǰ��¼�� <font color="#FF0000">{$_G.user_result.realname}</font> ({$_G.user_result.typename})<a href="{$_A.admin_url}&q=logout">[ע��]</a> |&nbsp;<a href="/" target="_blank">��վ��ҳ</a> 
		 </span>��</div>
 

	</div>
	
</div>

<div class="main mainbody js-bodyHeight">
	<div class="main_left js-mainleft">
		{if $magic.request.a=="control"}
			{include file="admin_control_menu.html"}
		{elseif $magic.request.a=="loop"}
			{include file="admin_loop_menu.html"}
		{elseif $magic.request.a == "site" }
			{include file="admin_site_menu.html"}
		{elseif $magic.request.a == "borrow" }
			{include file="admin_borrow_menu.html"}
		{elseif $magic.request.a == "cash" }
			{include file="admin_cash_menu.html"}
		{elseif $magic.request.a == "userinfo" }
			{include file="admin_userinfo_menu.html"}
		{elseif $magic.request.a == "attestation" }
			{include file="admin_attestation_menu.html"}
		{elseif $magic.request.a == "content" }
			{include file="admin_content_menu.html"}
		{elseif $magic.request.a=="system" || $_A.query_sort == "system"}
			{include file="admin_system_menu.html"}
		{elseif $magic.request.a == "module" || $_A.query_sort == "module"}
			{include file="admin_module_menu.html"}
		{else}
			{include file="admin_site_menu.html"}
		
		{/if}
	</div>
	<div class="main_right js-mainright">
 		<div class="banner_position">
 
		<ul class="aNavContent">
			{if $_A.pur_header.borrow_list==1}<li class=""><a href="{$_A.admin_url}&q=module/borrow&site_id=8&a=borrow">������</a></li>{/if}
			{if $_A.pur_header.attestation_list==1}<li class=""><a href="{$_A.admin_url}&q=module/attestation/all_s&site_id=26&a=attestation">��֤����</a></li>{/if} 
			{if $_A.pur_header.account_list==1}<li class=""><a href="{$_A.admin_url}&q=module/account/list&a=cash">�ʽ����</a></li>{/if} 
			{if $_A.pur_header.userinfo_list==1}<li class=""><a href="{$_A.admin_url}&q=module/userinfo&site_id=46&a=userinfo">�û�����</a></li>{/if} 
			{if $_A.pur_header.article_list==1}<li class=""><a href="{$_A.admin_url}&q=module/article&a=content">���¹���</a></li>{/if} 
			{if $_A.pur_header.site_list==1 || $_A.pur_header.site_all==1}<li class=""><a href="{$_A.admin_url}&q=site/loop&a=loop">��Ŀ����</a></li>{/if} 
			{if $_A.pur_header.module_all==1}<li class=""><a href="{$_A.admin_url}&q=module">ģ�����</a></li>{/if} 
			{if $_A.pur_header.system_all==1}<li class=""><a href="{$_A.admin_url}&q=system">ϵͳ����</a></li>{/if} 
 
		</ul>
	</div>	
    	
		<div class="main_site">
			<ul>
				
				<li class="site_sub">{$_A.list_menu}</li>
				<li class="title">{$_A.list_name} <span>/ {if $_A.site_result.name!=""}{$_A.site_result.name}{else}{$_A.list_title} {/if}</span></li>
				
			</ul>
		</div>
		<div class="main_content">
			
		 