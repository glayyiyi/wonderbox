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
      <h2>ע���Ϊ��û�Ա</h2>
      ��ý�����һȺ�и�����ͻ���ɵ�˽��Ͷ��Ȧ�ӣ���ӭ���ļ��룬Ŀǰ����ע����
      </div>
        <div class="item">
          <div class="title" id="username_notice">�û����� <span>������4-10λ�ַ�.Ӣ��,���� </span></div>
          <div class="input">
            <input type="text" class="text"  id="username" name="username"
											type="text" size="22" maxlength="20" value=""
											onBlur="checkUsername(this.value);"/>
          </div>
        </div>
        <div class="item">
          <div class="title" id="password_notice">�� �룺 <span>������6��20λ����,����Ӣ�Ĵ�Сд+���� </span></div>
          <div class="input">
            <input type="password" class="text"  id="password" name="password"
											type="password" size="22" maxlength="20" value=""
											onBlur="checkPassword(this.value);"/>
          </div>
          <div id="passwordStrengthDiv" class="is0"
										style="width: 138px; height: 7px; overflow: hidden;"></div>
        </div>
        <div class="item">
          <div class="title" id="conform_password_notice">ȷ�����룺 <span>���ظ�������������� </span></div>
          <div class="input">
            <input type="password" class="text" id="conform_password"
											name="confirm_password" type="password" size="22"
											maxlength="20" value=""
											onBlur="checkConformPassword(this.value);" />
          </div>
        </div><div class="item">
          <div class="title">�����ˣ� <span>�����˵ı�վ�û���(����ʵ����������������ӵ���������Բ����޸�) </span></div>
          <div class="input">
            <input type="text" class="text" id="invite_username"
										name="invite_username" type="text" size="22" maxlength="15"
										value="{$magic.session.reginvite_user_Name}"
										/>
          </div>
        </div>
        <div class="item">
          <div class="agree">
          <label><input type="checkbox" checked="checked"/> ͬ��</label> <a href="/reg_protocol/index.html">��ý���ע��Э��</a> 
          </div>
        </div>
        <div class="item">
          <div class="btn">
          	<button id="reg_btn">ע��</button> �Ѿ����˺ţ�<a href="/index.action?user&q=action/login">ֱ�ӵ�¼</a>
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
// 			alert("�빴ѡ�����Ķ�����ͬ��Э��");
// 			 return false;
// 	 }	

// });
</script>
{/literal}
<script type="text/javascript" src="{$tempdir}/media/js/user2.js"></script>
<script src="{$tempdir}/media/js/tooltip.js"></script>
<script src="{$tempdir}/media/js/popover.js"></script>
{include file="user_footer.html"}
