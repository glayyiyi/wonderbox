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
        
          <div id="mainBody">
    <div class="regPage">
      <div class="regMain">
      <div class="regIntro">
    
      <h2>�һ����룬{if $_U.getpwd_msg==""}����д������������������������{else}<font color="#FF0000">{$_U.getpwd_msg}</font>{/if}</h2>
      </div>
        <div class="item">
          <div class="title">��������</div>
          <div class="input">
            <input type="text" class="text" name="email" id="email" />
          </div>
        </div>
        <div class="item">
          <div class="title">�û���</div>
          <div class="input">
            <input type="text" class="text" name="username" id="username" />
          </div>
        </div>
        <div class="item">
          <div class="title">��֤��</div>
          <div class="input">
          <input maxLength=4  class="text" name=valicode id=valicode />
				   <img src="/plugins/index.php?q=imgcode&height=23" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&height=23&t=' + Math.random();"  />
          </div>
        </div>
        <div class="item">
          <div class="btn">
          <button>�ύ</button> 
          </div>
        </div>



      </div>
    </div>
  </div>
        
{include file="user_footer.html"}