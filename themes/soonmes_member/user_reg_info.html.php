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
	<div id="main" class="clearfix">

		<div class="content">
			<div class="register clearfix m_b_25">

				<div class="hd m_b_20">
					ע�� <font size="2" color="black">���ͻ���һȺ�и�����ͻ���ɵ�˽��Ͷ��Ȧ�ӣ���ӭ���ļ��룬Ŀǰ����ע����</font><s
						class="tip"></s>
				</div>
				<div class="bg clearfix">
					<div class="fl regTB">
						<table width="100%" class="tb_reg m_b_20">

							<!-- 							<tr> -->
							<!-- 								<th>�� �䣺</th> -->
							<!-- 								<td><div class="input_style01"> -->
							<!-- 										<span class="r"><input id="email" name="email" type="text" -->
							<!-- 											size="22" maxlength="30" value="" -->
							<!-- 											onFocus="this.className='biankuang1';" -->
							<!-- 											onBlur="this.className='biankuang2';checkEmail(this.value);"/> -->
							<!-- 										</span> -->

							<!-- 									</div> -->
							<!-- 									<div class="reg-l-tips" id="email_notice"> -->
							<!-- 										<span>*</span> �����������õ������ַ,����������֤ -->
							<!-- 									</div></td> -->
							<!-- 							</tr> -->
							<!-- 							<tr> -->
							<!-- 								<th>�ֻ���</th> -->
							<!-- 								<td> -->
							<!-- 									<div class="input_style01"> -->
							<!-- 										<span class="r"><input id="phone" name="phone" type="text" size="22" -->
							<!-- 											value="" -->
							<!-- 											onFocus="this.className='biankuang1';" -->
							<!-- 											onBlur="this.className='biankuang2';"/> -->
							<!-- 										</span> -->
							<!-- 									</div> -->

							<!-- 								</td> -->
							<!-- 							</tr> -->
							<!-- 							<tr> -->
							<!-- 								<th>��ʵ������</th> -->
							<!-- 								<td> -->
							<!-- 									<div class="input_style01"> -->
							<!-- 									<span class="r"> -->
							<!-- 										<input id="realname" name="realname" type="text" size="22" -->
							<!-- 											maxlength="10" value="" -->
							<!-- 											onFocus="this.className='biankuang1';" -->
							<!-- 											onBlur="this.className='biankuang2';"/> -->
							<!-- 									</span> -->
							<!-- 									</div> -->

							<!-- 								</td> -->
							<!-- 							</tr> -->
							
							<tr>
								<th style="vertical-align: top;">�����룺</th>

								<td><div class="input_style01">
										<span class="r"> <input id="invite_userid"
											name="invite_userid" type="text" size="22" maxlength="10"
											value="{$magic.session.reginvite_user_id}"
											onFocus="this.className='biankuang1';"
											onBlur="this.className='biankuang2';checkInviteCode(this.value);" />
										</span>

									</div>
									<div class="reg-l-tips" id="invitecode_notice">
										<span>*</span> ������������,�������벻��ע��
									</div>
									</td>
							</tr>
							
							
							<tr>
								<th>�û�����</th>
								<td><div class="input_style01">
										<span class="r"><input id="username" name="username"
											type="text" size="22" maxlength="20" value=""
											onFocus="this.className='biankuang1';"
											onBlur="this.className='biankuang2';checkUsername(this.value);" />
										</span>
									</div>
									<div class="reg-l-tips" id="username_notice">
										<span>*</span> ������4-10λ�ַ�.Ӣ��,����
									</div></td>

							</tr>
							<tr>

								<th>�� �룺</th>
								<td><div class="input_style01">
										<span class="r"><input id="password" name="password"
											type="password" size="22" maxlength="20" value=""
											onFocus="this.className='biankuang1';"
											onBlur="this.className='biankuang2';checkPassword(this.value);" />
										</span>
									</div>
									<div id="passwordStrengthDiv" class="is0"
										style="width: 138px; height: 7px; overflow: hidden;"></div>
									<div class="reg-l-tips" id="password_notice">
										<span>*</span> ������6��20λ����,����Ӣ�Ĵ�Сд+����
									</div></td>
								</li>
							
							
							<tr>
								<th>ȷ�����룺</th>
								<td><div class="input_style01">
										<span class="r"><input id="conform_password"
											name="confirm_password" type="password" size="22"
											maxlength="20" value=""
											onFocus="this.className='biankuang1';"
											onBlur="this.className='biankuang2';checkConformPassword(this.value);" />
										</span>
									</div>
									<div class="reg-l-tips" id="conform_password_notice">
										<span>*</span> ���ظ��������������
									</div></td>
							</tr>


							


							<!-- <tr> -->
							<!--  <th style="vertical-align: top;">��֤�룺</th>-->

							<!-- 								<td><div class="input_style01 m_r_10"> -->
							<!-- 										<span class="r"><input name="valicode" type="text" size="11" -->
							<!-- 											maxlength="4" />&nbsp;<img src="plugins/index.php?q=imgcode" -->
							<!-- 											alt="�����廻һ�ţ�" -->
							<!-- 											onClick="this.src='plugins/index.php?q=imgcode&t=' + Math.random();" -->
							<!-- 											align="absmiddle" style="cursor: pointer" /></span> -->
							<!-- 									</div></td> -->
							<!-- 							</tr> -->

							<!-- 				<li> -->
							<!-- 					<div class="reg-l-title">��ʵ������</div> -->
							<!--  <div class="reg-l-input"><input id="realname" name="realname" type="text" size="22" maxlength="10" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkRealname(this.value);"></div>-->
							<!-- 					<div class="reg-l-tips" id="realname_notice"><span>*</span> (�˴��ɲ���)����д������ʵ����</div> -->
							<!-- 				</li> -->
							<!-- 				<li> -->
							<!-- 					<div class="reg-l-title">�����ˣ�</div> -->
							<!--  <div class="reg-l-input"><input id="invite_username" name="invite_username" type="text" size="22" maxlength="10" value="{$magic.session.reginvite_user_Name}" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';" ></div>-->
							<!-- 					<div class="reg-l-tips"><span>*</span> (�˴��ɲ���)����д�����˵ı�վ�û���(����ʵ����)���Է�����ý�������.<a href="#" id="infoyq" data-content="�����������VIP���ҳɹ����ѣ���ô���Ľ����˿���һ���Ի��100Ԫ�Ľ����� -->
							<!-- ÿ�½����Ѹ��ѵ�VIP��ɣ�ͨ����վ��ֵ��ʽ�����Ľ����˵����ϡ�">�������</a></div> -->
							<!-- 				</li> -->
							<!--  <li class="reg-li"><input type="checkbox" id="dianji" checked="checked" style="position:relative; top:3px; margin-right:5px;">�����Ķ�����ͬ��<a href="/data/reg.doc">Э��</a></li>-->
							<!-- 				<li class="reg-li"><input type="submit" id="reg_btn" class="btn-action" value="����ע��" /></li> -->



						</table>
						<!--  	<p style="padding-left: 30px; margin-bottom: 20px;">-->
						<!-- 							<input type="checkbox" id="dianji" checked="checked"/>�����Ķ�����ͬ��������-�������ô��� -->
						<!-- 							С����� Ͷ����� ��ҵ���� �� <a href="/data/reg.doc">ʹ��Э��</a> -->
						<!-- 						</p> -->
						<p style="padding-left: 110px;">
							<input type="submit" id="reg_btn" class="btnnew btn_login"
								value="ע ��" />
						</p>
					</div>
					<div class="fl regInfo">
						<h3 class="tit">����û��ע��?</h3>
						<ol class="list m_b_40">
							<!-- 							<li>1���������� �����Լ� �ջ���Ϣ</li> -->
							<!-- 							<li>2��������ҵ �ʽ���ת ���ڳ���</li> -->
							<li>1�������ȶ��ɿ��ر���</li>
							<li>2�����װ�ȫ����б���</li>
							<li>3��˽��Ͷ�ʽύʵ������</li>
						</ol>
						<p style="padding-left: 25px;">
							<label class="f_14 m_r_10">�����˺ţ�</label> <a
								href="/index.action?user&q=action/login"
								class="ico_sprite btnnew btn_view_02">ֱ�ӵ�¼</a>
						</p>
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
