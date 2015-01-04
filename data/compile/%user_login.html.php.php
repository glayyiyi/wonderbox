<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<script type="text/javascript">

   function submitonce(login){
		 if(document.all||document.getElementById){
		  for(i=0;i<login.length;i++){
		   var tempobj=login.elements[i];
		   if(tempobj.type.toLowerCase()=="submit"||tempobj.type.toLowerCase()=="reset")
				tempobj.disabled=true;
		  }
		 }
	};
            var childWindow;
            function toQzoneLogin()
            {
				childWindow = 	window.location.href="/api/qqlogin.php";
			    
            }

</script>
<form name="login" method="post" action="" id="log_in" onSubmit="submitonce(this)">

<div id="mainBody">
  <div class="loginPage">
  <div class="loginMain">
  <div class="promote"><a href="#"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/loginPromote.jpg"  /></a></div>
  <div class="form"><div class="content">
        <div class="title">登录个人账户</div>
        <div class="inputForm">
          <input id="username" name="username" type="text" placeholder="用户名"/>
          <input type="password"  name="password" id="password"  placeholder="密码"/>
        </div>
        <div class="remember"><label><input type="checkbox" name="remember" value="1" />一周内免登录 </label></div>
        <div class="forgetPWD"><a href="/index.php?user&q=going/getpwd">忘记登录密码？</a></div>
        <div class="submitBtn">
          <button>马上登录</button>
        </div>
        <? if (!isset($this->magic_vars['_G']['system']['con_is_reg_open'])) $this->magic_vars['_G']['system']['con_is_reg_open']=''; ;if (  $this->magic_vars['_G']['system']['con_is_reg_open']): ?><div class="toReg">还没有账号，现在<a href="/index.php?user&q=going/getreg">注册</a></div><? endif; ?>
        
      </div></div>
  </div>
  </div>
  </div>

</form>
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>