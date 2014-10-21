<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html" }
<script type="text/javascript"
	src="{$tempdir}/media/js/jquery.pstrength.js"></script>
{literal}
<script>
 var childWindow;
		function toQzoneLogin()
		{
			childWindow = 	window.location.href="/api/qqlogin.php";
			
		}
jQuery(function(){  
	 
	jQuery('#password').passwordStrength();

});
</script>
<style>
#passwordStrengthDiv {
	margin-top: 6px;
}

.is0 {
	background: url(/data/images/base/progress.png) no-repeat 0 0;
}

.is10 {
	background-position: 0 -7px;
}

.is20 {
	background-position: 0 -14px;
}

.is30 {
	background-position: 0 -21px;
}

.is40 {
	background-position: 0 -28px;
}

.is50 {
	background-position: 0 -35px;
}

.is60 {
	background-position: 0 -42px;
}

.is70 {
	background-position: 0 -49px;
}

.is80 {
	background-position: 0 -56px;
}

.is90 {
	background-position: 0 -63px;
}

.is100 {
	background-position: 0 -70px;
}
</style>
{/literal}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet"
	type="text/css" />
<form action="" method="post" name="formUser"
	onSubmit="return userReg();" id="reg_sub">
	
	
	
	<div id="mainBody">
    <div class="regPage">
      <div class="regMain">
      <div class="regIntro">
      <h2>注册成为万得会员</h2>
      万得金融是一群中高收入客户组成的私密投资圈子，欢迎您的加入，目前开放注册中
      </div>
        <div class="item">
          <div class="title" id="username_notice">用户名： <span>请输入4-10位字符.英文,数字 </span></div>
          <div class="input">
            <input type="text" class="text"  id="username" name="username"
											type="text" size="22" maxlength="20" value=""
											onBlur="checkUsername(this.value);"/>
          </div>
        </div>
        <div class="item">
          <div class="title" id="password_notice">密 码： <span>请输入6到20位密码,建议英文大小写+数字 </span></div>
          <div class="input">
            <input type="password" class="text"  id="password" name="password"
											type="password" size="22" maxlength="20" value=""
											onBlur="checkPassword(this.value);"/>
          </div>
          <div id="passwordStrengthDiv" class="is0"
										style="width: 138px; height: 7px; overflow: hidden;"></div>
        </div>
        <div class="item">
          <div class="title" id="conform_password_notice">确认密码： <span>请重复输入上面的密码 </span></div>
          <div class="input">
            <input type="password" class="text" id="conform_password"
											name="confirm_password" type="password" size="22"
											maxlength="20" value=""
											onBlur="checkConformPassword(this.value);" />
          </div>
        </div><div class="item">
          <div class="title">邀请人： <span>邀请人的本站用户名(非真实姓名，如从邀请链接点击而来可以不用修改) </span></div>
          <div class="input">
            <input type="text" class="text" id="invite_username"
										name="invite_username" type="text" size="22" maxlength="15"
										value="{$magic.session.reginvite_user_Name}"
										/>
          </div>
        </div>
        <div class="item">
          <div class="agree">
          <label><input type="checkbox" checked="checked"/> 同意</label> <a href="/reg_protocol/index.html">万得金融注册协议</a> 
          </div>
        </div>
        <div class="item">
          <div class="btn">
          	<button id="reg_btn">注册</button> 已经有账号，<a href="/index.action?user&q=action/login">直接登录</a>
          </div>
        </div>



      </div>
    </div>
  </div>
	
	
	
	
	
	
	
	
	
	

</form>
{literal}
<script type="text/javascript"> 
//By Glay jQuery('#reg_btn').click(function(){
// 	 if(jQuery('#dianji').attr("checked")){
// 			jQuery('#reg_sub').submit();
// 			}
// 		else{
// 			alert("请勾选我已阅读并且同意协议");
// 			 return false;
// 	 }	

// });
</script>
{/literal}
<script type="text/javascript" src="{$tempdir}/media/js/user2.js"></script>
<script src="{$tempdir}/media/js/tooltip.js"></script>
<script src="{$tempdir}/media/js/popover.js"></script>
{include file="user_footer.html"}
