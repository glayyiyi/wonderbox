<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html" }
<script type="text/javascript">
{literal}
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
                childWindow = window.open("api/qqlogin.php","TencentLogin","width=450,height=320,menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
            } 
     
	//��֤���������
	jQuery(document).ready(function() { 
		jQuery("#valicode").focus(function(){
			jQuery(this).val("");
		});

	});

{/literal}
</script>
<form name="login" method="post" action="" id="log_in" onSubmit="submitonce(this)">
<div id="main" class="clearfix">
	<div class="box">
		<div class="box-con" style=" position: relative;">
			<div class="reg-header"><h3>�������ʺ�</h3><img src="/data/images/base/connect_qq.gif" title="qq" />�󶨺��ʹ��QQ�ʺſ��ٵ�¼��վ</div>
			<div  style="width:900px; ">
			<ul class="reg-table">
				<li>
					<div class="reg-l-title">�û�����</div>
					<div class="reg-l-input">
						<input type="text"  id="username" name="username" maxlength="64" style="color:#999" tabindex="1" >
					</div>
				</li>
				<li>
					<div class="reg-l-title">���룺</div>
					<div class="reg-l-input"><input type="password"  name="password" id="password" maxlength="16" tabindex="2" /></div>
					 
				</li>
				<li>
					<div class="reg-l-title">��֤�룺</div>
					<div class="reg-l-input"><input name="valicode" id="valicode" type="text" size="11" maxlength="4" style="float:left;width:50px;" tabindex="3"/> &nbsp;&nbsp;&nbsp; <img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();"  style="cursor:pointer; margin-left:3px;" />
					</div>
				 
				</li>
				<li>
					<div class="reg-l-title"> </div>
					<div  ><input type="submit" value="���˺�" class="btn-action" />
					</div>
					<div class="reg-l-title"><a href="/index.php?user&q=action/getpwd" style="text-decoration:underline;color:#03c;">��������?</a></div>
                </li>
			</ul>
			</div>
			 
		</div>
	</div>
</div>
</form>
{include file="user_footer.html" }