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
        <div class="title">��¼�����˻�</div>
        <div class="inputForm">
          <input id="username" name="username" type="text" placeholder="�û���"/>
          <input type="password"  name="password" id="password"  placeholder="����"/>
        </div>
        <div class="remember"><label><input type="checkbox" name="remember" value="1" />һ�������¼ </label></div>
        <div class="forgetPWD"><a href="/index.php?user&q=going/getpwd">���ǵ�¼���룿</a></div>
        <div class="submitBtn">
          <button>���ϵ�¼</button>
        </div>
        <? if (!isset($this->magic_vars['_G']['system']['con_is_reg_open'])) $this->magic_vars['_G']['system']['con_is_reg_open']=''; ;if (  $this->magic_vars['_G']['system']['con_is_reg_open']): ?><div class="toReg">��û���˺ţ�����<a href="/index.php?user&q=going/getreg">ע��</a></div><? endif; ?>
        
      </div></div>
  </div>
  </div>
  </div>

</form>
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>