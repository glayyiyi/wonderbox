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
				childWindow = 	window.location.href="/api/qqlogin.php";
			    
            }
{/literal}
</script>
<form name="login" method="post" action="" id="log_in" onSubmit="submitonce(this)">
<div id="main" class="clearfix">
		<!-- ��Ҫ���� -->
			<div class="content">
				<!-- 2�� -->
                <!-- �����ṹ-��Ϊ��Ҫ����-��Ϊ�������� -->
                <div class="grid_c2_c20s4 clearfix m_b_25">
                  <div class="col_main">
                    <div class="main_wrap">
                    	<!-- ���� -->
                        <div class="loginModule">
                        	<div class="pass_login_div">
			
							  <p class="item nameBg"><input id="username" name="username" maxlength="64" tabindex="1" type="text" class="input_name" value=""></p>
                              <p class="item passBg"><input type="password"  name="password" id="password" maxlength="16" tabindex="2" class="input_pass" value=""></p>
                              <p class="item"><table><tr><td>��ס��</td><td><input type="checkbox" name="remember" value="1" style="width:15px;border:0" /></td><td><select name="save_time"><option value="3600">һ��Сʱ</option><option value="18000">���Сʱ</option><option value="86400">һ��</option><option value="604800">һ��</option><option value="2592000">һ����</option><option value="31104000">��Զ</option></select></td></tr></table></p>
                			  
                			  <br>
                			  <p class="item tc">
                                	<input type="submit" class="btnnew btn_login m_r_25" value="�� ¼"</>
                                	
									{if $_G.system.con_is_reg_open }<a href="/index.php?user&q=going/getreg" class="link">ע ��</a>	{/if}		 
							  </p>
							  <p class="item">
							  <a href="/index.php?user&q=going/getpwd" class="link">��������?</a>
                                    
							  </p>
						
					     </div>

			</div>
		</div>
		</div>
	<div class="col_extra">
                  	<!-- �Ҳ� -->
                    <div class="banner_login">
                    	<img src="{$tempdir}/images/banner_login.jpg" />
                    </div>
                     <div >
                    	<img src="{$tempdir}/images/maidian.jpg" />
                    </div>
<!--                     <div class="clearfix down"> -->
<!--                    	  <div class="fl phoneDown"> -->
<!--                        	<h4 class="m_b_10">�ͻ�������</h4> -->
                       	
<!--                           <p> -->
<!--                              <a href="#"><img src="{$tempdir}/images/icon_android.png"></a> -->
<!--                              <a href="#"><img src="{$tempdir}/images/icon_iPhone.png"></a> -->
<!--                           </p> -->
<!--                           <p>�����Ƴ�</p> -->
<!--                         </div> -->
                        
<!--                        <div class="fl club"><a href="#"><img src="{$tempdir}/images/club.jpg"></a> -->
<!--                         <p>�����Ƴ�</p>  -->
<!--                        </div> -->
                       
<!--                    	  <div class="fl weixin"> -->
<!--                         	<h4 class="tit m_b_10">�ٷ�΢��</h4> -->
                        	 
                        	 
<!--                             <p>΢��ɨ���ά�룬<br>���ÿ�վ�ѡ��Ѷ</p> -->
                            
<!--                             <br> -->
<!--                             <br> -->
<!--                             <p>�����Ƴ�</p> -->
<!--                         </div> -->
<!--                     </div> -->
                    <!-- end �Ҳ� -->
                  </div>
                  <!-- end -->
                </div>
                <!-- end �����ṹ-��Ϊ��Ҫ����-��Ϊ�������� -->
				<!-- end 2�� -->
			</div>
			<!-- end ��Ҫ���� -->		
</div>
</form>
{include file="user_footer.html" }