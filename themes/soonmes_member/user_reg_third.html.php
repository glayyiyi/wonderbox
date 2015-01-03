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

<form action="" method="post" name="formUser"
	onSubmit="return userReg();" id="reg_sub">
	
	
	
	<div id="mainBody">
    <div class="regPage">
      <div class="regMain">
       <h2>开通第三方资金托管账户</h2>
                <h2>保证资金安全</h2>
        <div class="regIntro">
      
      
      
      <div align="center"><h2><a href="/core/p2p_sdk/reg.php" target="_blank">立即开通</a></h2></div>

      </div>
      <h2 style="text-align:center"><a href="/index.action?user&q=going/login">暂不开通</h2></a>
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
