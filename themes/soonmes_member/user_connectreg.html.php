<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html" }
<script type="text/javascript" src="{$tempdir}/media/js/jquery.pstrength.js"></script>
{literal}
<script>

jQuery(function(){  
	jQuery('#password').passwordStrength();

});

</script>

<style>
#passwordStrengthDiv{margin-top:6px;}
.is0{background:url(/data/images/base/progress.png) no-repeat 0 0;}
.is10{background-position:0 -7px;}
.is20{background-position:0 -14px;}
.is30{background-position:0 -21px;}
.is40{background-position:0 -28px;}
.is50{background-position:0 -35px;}
.is60{background-position:0 -42px;}
.is70{background-position:0 -49px;}
.is80{background-position:0 -56px;}
.is90{background-position:0 -63px;}
.is100{background-position:0 -70px;}
</style>
{/literal}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />
<form action="" method="post" name="formUser" onSubmit="return userReg();" id="reg_sub">
<div id="main" class="clearfix">
	<div class="box">
		<div class="box-con">
		 
			<div class="reg-header"><h3>�����˺�</h3><span><img src="/data/images/base/connect_qq.gif" title="qq" />�����ʺ���Ϣ�����鱾վ���๦��</span></div>
			<ul class="reg-table" >
				<li>
					<div class="reg-l-title">�û�����</div>
					<div class="reg-l-input"><input id="username" name="username" type="text" size="22" maxlength="10" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkUsername(this.value);"></div>
					<div class="reg-l-tips" id="username_notice"><span>*</span> ������4-10λ�ַ�.Ӣ��,����</div>
				</li>
				<li>
					<div class="reg-l-title">���룺</div>
					<div class="reg-l-input"><input id="password" name="password" type="password" size="22" maxlength="20" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkPassword(this.value);" ></div>
					 <div id="passwordStrengthDiv" class="is0" style="width:138px;height:7px;"></div>    
					<div class="reg-l-tips" id="password_notice"><span>*</span> ������6��20λ����,����Ӣ�Ĵ�Сд+����</div>
				</li>
				<li>
					<div class="reg-l-title">ȷ�����룺</div>
					<div class="reg-l-input"><input id="conform_password" name="confirm_password" type="password" size="22" maxlength="20" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkConformPassword(this.value);"></div>
					<div class="reg-l-tips" id="conform_password_notice"><span>*</span> ���ظ��������������</div>
				</li>
				<li>
					<div class="reg-l-title">Email��</div>
					<div class="reg-l-input"><input id="email" name="email" type="text" size="22" maxlength="30" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkEmail(this.value);"></div>
					<div class="reg-l-tips" id="email_notice"><span>*</span> �����������õ������ַ,��������֤</div>
				</li>
				<li>
					<div class="reg-l-title">��ʵ������</div>
					<div class="reg-l-input"><input id="realname" name="realname" type="text" size="22" maxlength="10" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkRealname(this.value);"></div>
					<div class="reg-l-tips" id="realname_notice"><span>*</span> ����д�����ʵ����</div>
				</li>
				<li>
					<div class="reg-l-title">�����ˣ�</div>
					<div class="reg-l-input"><input id="invite_username" name="invite_username" type="text" size="22" maxlength="10" value="{$magic.session.reginvite_user_Name}" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';" ></div>
					<div class="reg-l-tips"><span>*</span> (�˴��ɲ���)����д�����˵ı�վ�û���(����ʵ����)���Է�����ý�������.<a href="#" id="infoyq" data-content="�����������VIP���ҳɹ����ѣ���ô���Ľ����˿���һ���Ի��100Ԫ�Ľ�����
ÿ�½����Ѹ��ѵ�VIP��ɣ�ͨ����վ��ֵ��ʽ�����Ľ����˵����ϡ�">�������</a></div>
				</li>
				<li class="reg-li"><input type="checkbox" id="dianji" checked="checked" style="position:relative; top:3px; margin-right:5px;">�����Ķ�����ͬ��<a href="/data/reg.doc">Э��</a></li>
				<li class="reg-li"><input type="submit" id="reg_btn" class="btn-action" value="���" /></li>
			</ul>
			<div style="width:480px">
			
			</div>
		</div>
	</div>
</div>
</form>
{literal}
<script type="text/javascript">
jQuery('#reg_btn').click(function(){
	 if(jQuery('#dianji').attr("checked")){
			jQuery('#reg_sub').submit();
			}
		else{
			alert("�빴ѡ�����Ķ�����ͬ��Э��");
	 }	

});
</script>

{/literal}
<script src="{$tempdir}/media/js/modal.js"></script>
<script src="{$tempdir}/media/js/tab.js"></script>
<script type="text/javascript"  src="{$tempdir}/media/js/user2.js"></script>
<script src="{$tempdir}/media/js/tooltip.js"></script>
<script src="{$tempdir}/media/js/popover.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>
{include file="user_footer.html" }