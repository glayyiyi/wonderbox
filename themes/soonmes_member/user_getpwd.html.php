<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html" }
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />

<!--�û�ע�� ��ʼ-->
<div id="main" class="clearfix">
<div class="user_action_main">
	<!--�û�ע����� ��ʼ-->
	<div class="user_action_reg_left forgetppwd">
		<!--�û�ע�� ��ʼ-->
		<div class="user_action_getpwd_top"></div>
		<div class="user_action_reg_submit" style="padding-top:0">
        <form action="" method="post" name="formUser" >
			<p class="alert">{if $_U.getpwd_msg==""}����д������������������������{else}<font color="#FF0000">{$_U.getpwd_msg}</font>{/if}</p>
				<p>
				  <label for="email">�������䣺</label>
				  <input  maxLength=32  class="user_aciton_input1" name=email id=email>
				</p>
				<p>
				  <label for="email">&nbsp;&nbsp;&nbsp;�û�����</label>
				  <input maxLength=15  class="user_aciton_input1" name=username id=username h >
				</p>
				<p>
				  <label for="email" style="float:left;">&nbsp;&nbsp;&nbsp;��֤�룺</label>
				  <span style="float:left;"><input maxLength=4  class="user_aciton_input" name=valicode id=valicode align="top" ></span>
				   <span style="float:left;margin-left:5px;">
				   <img src="/plugins/index.php?q=imgcode&height=23" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&height=23&t=' + Math.random();"  />
				   </span>
				</p>
				<br/><br/>
				<p align="left"> 
				 <input type="submit" value="ȷ��" class="btn-action"/>
				</p>
                </form>
		</div>
		<div class="user_action_reg_foot"></div>
	</div>
</div>
</div>
<!--�û�ע�� ����-->
<script src="{$tempdir}/media/js/tab.js"></script>
<script src="{$tempdir}/media/js/alert.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>

{include file="user_footer.html"}