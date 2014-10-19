<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html" }
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />

<!--用户注册 开始-->
<div id="main" class="clearfix">
<div class="user_action_main">
	<!--用户注册左边 开始-->
	<div class="user_action_reg_left forgetppwd">
		<!--用户注册 开始-->
		<div class="user_action_getpwd_top"></div>
		<div class="user_action_reg_submit" style="padding-top:0">
        <form action="" method="post" name="formUser" >
        
          <div id="mainBody">
    <div class="regPage">
      <div class="regMain">
      <div class="regIntro">
    
      <h2>找回密码，{if $_U.getpwd_msg==""}请填写你的邮箱和密码进行密码的重置{else}<font color="#FF0000">{$_U.getpwd_msg}</font>{/if}</h2>
      </div>
        <div class="item">
          <div class="title">电子邮箱</div>
          <div class="input">
            <input type="text" class="text" name="email" id="email" />
          </div>
        </div>
        <div class="item">
          <div class="title">用户名</div>
          <div class="input">
            <input type="text" class="text" name="username" id="username" />
          </div>
        </div>
        <div class="item">
          <div class="title">验证码</div>
          <div class="input">
          <input maxLength=4  class="text" name=valicode id=valicode />
				   <img src="/plugins/index.php?q=imgcode&height=23" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&height=23&t=' + Math.random();"  />
          </div>
        </div>
        <div class="item">
          <div class="btn">
          <button>提交</button> 
          </div>
        </div>



      </div>
    </div>
  </div>
        
{include file="user_footer.html"}