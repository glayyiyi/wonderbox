{include file="user_header.html" }
<link href="{$tempdir}/css/main.css" type="text/css" rel="stylesheet" />
<link href="{$tempdir}/css/user.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{$tempdir}/js/jquery.js"></script>
<script type="text/javascript" src="{$tempdir}/js/user.js"></script>
<script type="text/javascript" src="{$tempdir}/media/js/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="{$tempdir}/media/js/thickbox/thickbox.css" type="text/css" media="screen" /> 
<body>

<!--�û���¼ע���ͷ�� ��ʼ-->
<div id="main">
<!--�û���¼ע���ͷ�� ����-->

<!--�û�ע�� ��ʼ-->
<div class="user_action_main topborder">

	<!--�û�ע����� ��ʼ-->
	<div class="user_action_reg_left">
		<!--�û�ע�� ��ʼ-->
		<div class="user_action_reg_top"></div>
		<div class="user_action_reg_submit">
			<div class="user_action_reg_a1"></div>
			<div class="user_action_reg_form" style="width:86%">
			<strong>{$_U.sendemail}</strong> ���յ�һ����֤�ʼ�������ա�
�ɹ���֤����Ϳ��Գ���ʹ��վ�����й��ܡ�<br /><br />

<a href="{$_U.emailurl}" target="_blank"><img src="{$tempdir}/images/renzheng.png" align="absmiddle" /></a><br /><br />

���û���յ����䣬������ <a href="javascript:send_email()"><font color="#FF0000">���¼���</font></a>������䡣<br />
<a href="/index.php?user&q=going/reg_email&jump=true">���������֤��������������ȥ</a>
			</div>
		</div>
		<div class="user_action_reg_foot"></div>
	</div>
	{include file="user_reg_right.html"}
</div>
</div>
<!--�û�ע�� ����-->
{literal} 
<script type="text/javascript">
function send_email(){
	$.ajax({
		type:"GET",
		url:"/index.php?user&q=going/reg_send_email",
		success:function(msg){
			alert(msg);
		}
	});
}
</script>
{/literal}
{include file="user_footer.html"}
