<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />
<link href="{$tempdir}/media/css/tipswindown.css" rel="stylesheet" type="text/css" />

<!--�û����ĵ�����Ŀ ��ʼ-->
<div id="main" class="clearfix" style="margin-top:0px;">
<div class="wrap950 ">
	<!--��ߵĵ��� ��ʼ-->
	<div class="user_left">
		{include file="user_menu.html"}
	</div>
	<!--��ߵĵ��� ����-->
	
	<!--�ұߵ����� ��ʼ-->
	<div class="user_right">
		<div class="user_right_menu">
			{if $_U.query_type=="userpwd" || $_U.query_type=="paypwd" || $_U.query_type=="protection" || $_U.query_type=="getpaypwd" || $_U.query_type=="serialStatusSet"}
			<ul id="tab" class="list-tab clearfix">
				
				<li {if $_U.query_type=="userpwd"} class="cur"{/if}><a href="{$_U.query_url}/userpwd">��¼����</a></li>
				<li {if $_U.query_type=="paypwd" || $_U.query_type=="getpaypwd"} class="cur"{/if}><a href="{$_U.query_url}/paypwd">��������</a></li>
<!-- 				<li {if $_U.query_type=="protection"} class="cur"{/if}><a href="{$_U.query_url}/protection">���뱣��</a></li> -->
<!-- 				<li {if $_U.query_type=="serialStatusSet"} class="cur"{/if}><a href="{$_U.query_url}/serialStatusSet">��̬��������</a></li> -->
			</ul>
			{elseif $_U.query_type=="reginvite"  || $_U.query_type=="request" || $_U.query_type=="myfriend" || $_U.query_type=="black"|| $_U.query_type=="ticheng"}
			<ul id="tab" class="list-tab clearfix">
				<li {if $_U.query_type=="reginvite"} class="cur"{/if}><a href="{$_U.query_url}/reginvite">�������</a></li>
				<li {if $_U.query_type=="request"} class="cur"{/if}><a href="{$_U.query_url}/request">��������</a></li>
				<li {if $_U.query_type=="myfriend"} class="cur"{/if}><a href="{$_U.query_url}/myfriend">�ҵĺ���</a></li>
				<li {if $_U.query_type=="black"} class="cur"{/if}><a href="{$_U.query_url}/black">������</a></li>
				<li {if $_U.query_type=="ticheng"} class="cur"{/if}><a href="{$_U.query_url}/ticheng">�������</a></li>
			</ul>
			{elseif $_U.query_type=="credit" }
			<ul id="tab" class="list-tab clearfix">
			</ul>
			{elseif $_U.query_type=="smsorder" }
			<ul id="tab" class="list-tab clearfix">
            <li {if $_U.query_type=="smsorder"} class="cur"{/if}><a href="{$_U.query_url}/smsorder">���Ŷ���</a></li>
			</ul>            
			{elseif $_U.query_type=="myuser" }
			<ul id="tab" class="list-tab clearfix">
				<li {if $_U.query_type=="myuser"} class="cur"{/if}><a href="{$_U.query_url}/myuser">�ҵ���ƹ���</a></li>
				<li ><a href="/?user&q=code/borrow/myuser">�ͻ����</a></li>
				<li ><a href="/?user&q=code/borrow/myuser_account">ͳ����Ϣ</a></li>
			</ul>
			{elseif $_U.query_type=="tenderTreasure"}
			<ul id="tab" class="list-tab clearfix">
			<li {if $_U.query_type=="tenderTreasure"} class="cur"{/if}><a href="{$_U.query_url}/tenderTreasure">Ͷ�ѱ�</a></li>
			</ul>
			{else}
			<ul id="tab" class="list-tab-narrow clearfix">
				<li {if $_U.query_type=="realname"} class="cur"{/if}><a href="{$_U.query_url}/realname">ʵ����֤</a></li>
				<li {if $_U.query_type=="email_status"} class="cur"{/if}><a href="{$_U.query_url}/email_status">������֤</a></li>
				<li {if $_U.query_type=="phone_status"} class="cur"{/if}><a href="{$_U.query_url}/phone_status">�ֻ���֤</a></li>
<!-- 				<li {if $_U.query_type=="video_status"} class="cur"{/if}><a href="{$_U.query_url}/video_status">��Ƶ��֤</a></li> -->
<!-- 				<li {if $_U.query_type=="scene_status"} class="cur"{/if}><a href="{$_U.query_url}/scene_status">�ֳ���֤</a></li> -->
<!-- 				<li ><a href="/?user&q=code/attestation">�ϴ�����֤��</a></li> -->
				<li {if $_U.query_type=="avatar"} class="cur"{/if}><a href="{$_U.query_url}/avatar">ͷ����Ϣ</a></li>
 			</ul>
			{/if}
		</div>
		
		<div class="user_right_main">
		
		{if $_U.query_type=="avatar"}
		<!--ͷ�� ��ʼ-->
		<div class="user_help alert">���ϴ�����վ��ͷ��<br/>* ��ܰ��ʾ��ͷ�����������֣����У�С</div>
		<div style="width:100%">
		<div style="float:left;padding-left:100px;">
			
			<img  style="border:1px dashed #999;padding:2px;margin-top:60px;" src="{$_G.user_id|avatar}"/><br/>
			<a href="index.php?user&q=code/user/avatar"><font color="#FF0000">��ǰ�û�ͷ��</font></a>

		</div>
		<div style="float:right">{show_avatar}</div>
		
		</div>
	
		<!--ͷ�� ����-->
		
		
		
		{elseif $_U.query_type=="privacy"}
		<div class="user_help">���ø��˵���˽</div>
		<form action="" method="post">
		<div class="user_main_title">Home</div>
		<div class="user_right_border">
			<div class="e">�����б�</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend&isid=false&value={$_U.user_privacy.friend}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">�������ۣ�</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend_comment&isid=false&value={$_U.user_privacy.friend_comment}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">����б�</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=borrow_list&isid=false&value={$_U.user_privacy.borrow_list}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">Ͷ���¼��</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=loan_log&isid=false&value={$_U.user_privacy.loan_log}"></script>
			</div>
		</div>
			
		
		<div class="user_main_title">վ����/��Ϊ����</div>
		<div class="user_right_border">
			<div class="e">˭���Ը��ҷ�վ���ţ�</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=sent_msg&isid=false&value={$_U.user_privacy.sent_msg}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">˭�������ҷ��������룺</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend_request&isid=false&value={$_U.user_privacy.friend_request}"></script>
			</div>
		</div>
		
		
		<div class="user_main_title">������</div>
		<div class="user_right_border">
			<div class="e">˭���Կ��ҵĺ�������</div>
			<div class="c">
				<select name="look_black">
					<option value="0" {if $_U.user_privacy.look_black==0} selected="selected"{/if}>�������ҵĺ��Ѳ鿴�ҵĺ�����</option>
					<option value="1" {if $_U.user_privacy.look_black==1} selected="selected"{/if}>�����ҵĺ��Ѳ鿴�ҵĺ�����</option>
					<option value="2"{ if $_U.user_privacy.look_black==2} selected="selected"{/if}>��������ͬ��ĺ��Ѳ鿴�ҵĺ�����</option>
				</select>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">������������ҷ����ţ�</div>
			<div class="c">
				<input type="radio" name="allow_black_sent" value="1" { if $_U.user_privacy.allow_black_sent==1} checked="checked"{/if}/> ���� <input type="radio" name="allow_black_sent" value="0"   { if $_U.user_privacy.allow_black_sent==0 || $_U.user_privacy.allow_black_sent==""} checked="checked"{/if} /> ������ 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">������������ҷ��ͺ�������</div>
			<div class="c">
				<input type="radio" name="allow_black_request" value="1"  {if $_U.user_privacy.allow_black_request==1} checked="checked"{/if}/> ���� <input type="radio" name="allow_black_request" value="0" {if $_U.user_privacy.allow_black_request==0 || $_U.user_privacy.allow_black_request==""} checked="checked"{/if}/> ������ 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input type="submit"  class="btn-action"  name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		
		<div class="user_right_foot alert">
		* ��ܰ��ʾ���뱣�����Լ�����˽
		</div>
		<!--�˺ų�ֵ ����-->
		
		
		
		{elseif $_U.query_type=="userpwd"}
		<!--�޸ĵ�¼���� ��ʼ-->
		<form action="" name="form1" method="post" onsubmit="return check_form()">
		<div class="user_help alert alert">�����벻Ҫ̫�򵥣���ɸ���һ�㣬������ĸ+����</div>
		<div class="user_right_border">
			<div class="e">ԭʼ���룺</div>
			<div class="c">
				<input type="password" name="oldpassword" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">�����룺</div>
			<div class="c">
				<input type="password" name="newpassword" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">ȷ�����룺</div>
			<div class="c">
				<input type="password" name="newpassword1" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input type="submit" class="btn-action" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		{literal}<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var oldpassword = frm.elements['oldpassword'].value;
				 var newpassword = frm.elements['newpassword'].value;
				  var newpassword1 = frm.elements['newpassword1'].value;
				 var errorMsg = '';
				  if (oldpassword.length == 0 ) {
					errorMsg += '* ������ɵĵ�¼����' + '\n';
				  }
				  if (newpassword.length == 0 ) {
					errorMsg += '* �����벻��Ϊ��' + '\n';
				  }
				   if (newpassword.length >15 || newpassword.length<6 ) {
					errorMsg += '* �����볤����6��15֮��' + '\n';
				  }
				    if (newpassword.length !=newpassword1.length) {
					errorMsg += '* �������벻һ��' + '\n';
				  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>{/literal}
		<!--�޸ĵ�¼���� ����-->
		
<!--  LiuYY 2012-05-31 -->
		{elseif $_U.query_type =="serialStatusSet"}
		<!--�޸Ķ�̬����״̬ ��ʼ-->
		
		<form action="" name="form1" method="post" onsubmit="" >
		<div class="user_help alert">��̬�������ȷ���û��ĺϷ���ݣ��Ӷ��ںϷ���ݵ�¼�Ļ����ϱ���ҵ��ҵ����ʵİ�ȫ�ԡ�</div>
		����̬����Ӧ���ڣ�<br/>
		{ if  $_G.user_result.serial_id == "" }
		<font color="red" >�����˺Ż�δ�󶨶�̬����޷�ִ��������ã�</font>
		{/if}
		<div class="user_right_border">
			<div class="e">���֣�</div>
			<div class="c">
				<input type="checkbox" name="carryout"  value="1" id="carryout" { if  $_G.user_result.serial_id == "" } disabled="disabled" {/if} /> 
			</div>
			<div class="e">��¼��</div>
			<div class="c">
				<input type="checkbox"  name="login" value="1" id="login" {if  $_G.user_result.serial_id == "" } disabled="disabled" {/if} /> 
			</div>
			<input type="hidden" id="json_data" value='{$_G.user_result.serial_status}' />	
		</div>
		<input type="hidden" name="action" value="1" />
		<br/>
		<div class="">
			<div class="e"></div>
			�����붯̬������: <input type="text" maxlength="6" name="uchoncode" {if $_G.user_result.serial_id == "" } disabled="disabled" {/if} /> 
			<div class="c">
			<br/>
				<input type="submit"  class="btn-action" name="name"  value="ȷ���ύ" size="30" { if  $_G.user_result.serial_id == "" } disabled="disabled" {/if} /> 
			</div>
		</div>
	
	
		</form>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		{literal}
		<script src="j.js"></script>
		 <script >
		jQuery(function(){
			

			var json_data = jQuery("#json_data").attr('value');
			var obj=eval("("+json_data+")");
			if(obj.carryout=='1'){
				jQuery("#carryout").attr("checked","checked");
			}
			if(obj.login == '1'){
				jQuery("#login").attr("checked","checked");
			}
			
		});
    </script>{/literal}
		<!--�޸Ķ�̬����״̬ ����-->		
		{elseif $_U.query_type=="paypwd"}
		<!--�޸İ�ȫ���� ��ʼ-->
		<form action="" name="form1" method="post" onsubmit="return check_form()">
		<div class="user_help alert">����������ø���,�����汣�ܺ��Լ�������!����ĸ+�����ȼѣ�</div>
		<div class="user_right_border">
			<div class="l">ԭʼ�������룺</div>
			<div class="c">
				<input type="password" name="oldpassword" /> ������ԭ�������롣(��ʼ������������ע��ʱ�ĵ�¼����һ��)
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">�½������룺</div>
			<div class="c">
				<input type="password" name="newpassword" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">ȷ�Ͻ������룺</div>
			<div class="c">
				<input type="password" name="newpassword1" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">��֤�룺</div>
			<div class="c clearfix" >
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" style="float:left;"/><img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left;" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action" name="name"  value="ȷ���ύ" size="30" /> <a href="/?user&q=code/user/getpaypwd">���ǽ������룿</a>
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		<!--�޸İ�ȫ���� ����-->
		{literal}<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var oldpassword = frm.elements['oldpassword'].value;
				 var newpassword = frm.elements['newpassword'].value;
				  var newpassword1 = frm.elements['newpassword1'].value;
				 var errorMsg = '';
				  if (oldpassword.length == 0 ) {
					errorMsg += '* ����������룬���û���趨�������룬�������¼����' + '\n';
				  }
				  if (newpassword.length == 0 ) {
					errorMsg += '* �����벻��Ϊ��' + '\n';
				  }
				   if (newpassword.length >15 || newpassword.length<6 ) {
					errorMsg += '* �����볤����6��15֮��' + '\n';
				  }
				    if (newpassword.length !=newpassword1.length) {
					errorMsg += '* �������벻һ��' + '\n';
				  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>{/literal}
		
		{elseif $_U.query_type=="tenderTreasure"}
		<div class="user_help alert">Ͷ�ѱ�-����ߵ���������ר�ң��ɹ��󶨺������Ͷ�ѱ��϶�ƽ̨�Զ����ˡ����ˣ��򵥡���Ч����ȫ��<a href="http://bbs.cnwdai.com/forum.php?mod=viewthread&tid=10617&extra=page%3D1"  target="_break">����˲鿴��Ʒ˵����</a></div>
		{if $_G.user_result.forum_accredit==1}
		���ѳɹ�������Ͷ�ѱ�����<a href="http://tyb.cnwdai.com/" target="_break">����ǰ��Ͷ�ѱ�</a>��
		{else}
		<form action="" name="form1" method="post" {literal}onkeydown="if(event.keyCode==13){return false;}"{/literal}>
		<div class="user_right_border">
			<div class="l">Ͷ�ѱ��û�����</div>
			<div class="c">
				<input type="text" name="username" /><a href="http://www.cnwdai.com/member.php?mod=register" target="_break">û���û���������ע��</a>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">��֤�룺</div>
			<div class="c clearfix">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" style="float:left"/><img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="checkbox" name="protocolcheck" value="1" /><a href="javascript:protocolshow()">ͬ��Ͷ�ѱ��û���ȨЭ��</a>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="button" class="btn-action" name="name"  value="ȷ������" size="30" onclick="tenderTreasure()" /> 
			</div>
		</div>
		</form>
		<div id="protocol" style="display: none">
		<p style="text-align:center">Ͷ�ѱ��û���ȨЭ��</p>

<p>Ͷ�ѱ���һ����ѵ�����Ͷ�ʶ�ƽ̨���˶��˹��ߣ���Ȩ֮���û�������Ͷ�ѱ���̨��ȡ�������ݣ�</p>

<p>1.�˻��ʽ���Ϣ</p>
<p>2.�ʽ������־</p>
<p>3.Ͷ���¼</p>
<p>4.���ռ�¼</p>
<p>5.�û���ֵ��¼</p>
<p>6.�û����ּ�¼</p>
<br/>
<p>Ͷ�ѱ���ȫ��</p>
<p>1.Ͷ�ѱ�������֮��(http://www.cnwdai.com)�û�ͬ����½��</p>
<p>2.Ͷ�ѱ�����¼�û���ƽ̨���κ����롣</p>
<p>3.Ͷ�ѱ�ֻ��ѯ�û������¼��������������û����ʽ�</p>
<p>4.Ͷ�ѱ�ά�����ĺϷ�Ȩ�棬������⹫���κ��û�˽�����ݡ�</p>
<p>5.Ͷ�ѱ���ƽ̨ͨ�Ų���˫�������֤��</p>
<br/>
<p>��Ȩ�����</p>
<p>�û��������û���Ȩ�����½Ͷ�ѱ������Զ�����->ƽ̨�˺� �н����ʱ�����Ȩ���ɡ�</p>
</div>
		{/if}
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		{elseif $_U.query_type=="getpaypwd"}
		<!--�޸İ�ȫ���� ��ʼ-->
		{if $magic.get.keyid!=""}
		<form action="" name="form1" method="post" onsubmit="return check_form()" >
		<div class="user_help">��������������֧������</div>
		<div class="user_right_border">
			<div class="l">���������룺</div>
			<div class="c">
				<input type="password" name="paypwd" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">����һ���������룺</div>
			<div class="c">
				<input type="password" name="paypwd1" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">��֤�룺</div>
			<div class="c clearfix">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" style="float:left"/><img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		{literal}<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var newpassword = frm.elements['paypwd'].value;
				  var newpassword1 = frm.elements['paypwd1'].value;
				 var errorMsg = '';
				  if (newpassword.length == 0 ) {
					errorMsg += '* �����벻��Ϊ��' + '\n';
				  }
				   if (newpassword.length >15 || newpassword.length<6 ) {
					errorMsg += '* �����볤����6��15֮��' + '\n';
				  }
				    if (newpassword.length !=newpassword1.length) {
					errorMsg += '* �������벻һ��' + '\n';
				  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>{/literal}
		
		{else}
		<form action="" name="form1" method="post" >
		<div class="user_help">���¼�����һ�</div>
		<div class="user_right_border">
			<div class="l">�������䣺</div>
			<div class="c">
				{$_G.user_result.email}
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">��֤�룺</div>
			<div class="c clearfix">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" style="float:left"/><img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		{/if}
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
        
		{elseif $_U.query_type=="smsorder"}
		<!--���Ŷ��� ��ʼ-->
		<form action="" name="form1" method="post" >
		<div class="user_right_border">
			<div class="l">��ʼʱ�䣺</div>
			<div class="c">{$_U.smsuser.start_time}</div>
		</div>
		<div class="user_right_border">
			<div class="l">����ʱ�䣺</div>
			<div class="c">
				{$_U.smsuser.end_time}
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">�������ͣ�</div>
			<div class="c">
				<input name="ordertype" type="radio" value="1_{$_U.apptype.money_month}" />���£�{$_U.apptype.money_month}��<input name="ordertype" type="radio" value="2_{$_U.apptype.money_year}" />���꣨{$_U.apptype.money_year}��
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action" name="name"  value="ȷ�϶���" size="30" /> 
			</div>
		</div>
		</form>
	        
		<!--�޸İ�ȫ���� ����-->
		{elseif $_U.query_type=="protection"}
		<!--���뱣�� ��ʼ-->
		 <form action="" method="post">
		{if $_U.answer_type=="2" || $_G.user_result.answer == "" }
		<div class="user_help alert">��ѡ��һ���µ��ʺű�������,������𰸡��ʺű�������Ϊ���Ժ����������롢��Ҫ���õȲ�����ʱ��,�ṩ��ȫ���ϡ� </div>
		<div class="user_right_border">
			<div class="l">��ѡ�����⣺</div>
			<div class="c">
				<script src="/plugins/?q=linkage&name=question&nid=pwd_protection&isid=false"></script> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">������𰸣�</div>
			<div class="c">
				<input type="text" name="answer" /><input type="hidden" name="type" value="2" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">��֤�룺</div>
			<div class="c clearfix">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" style="float:left"/><img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left" />
			</div>
		</div>
		{else}
		<div class="user_help">���Ѿ����������뱣�����ܣ�����������ٽ����޸ġ� </div>
		<div class="user_right_border">
			<div class="l">��ѡ�����⣺</div>
			<div class="c">
				{$_G.user_result.question|linkage:"pwd_protection"} 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">������𰸣�</div>
			<div class="c">
				<input type="text" name="answer" /> <input type="hidden" name="type" value="1" />
			</div>
		</div>
		
		{/if}
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		
		</form>
		<!--���뱣�� ����-->
		
		
		<!--�������� ��ʼ-->
		{elseif $_U.query_type=="reginvite"}
		<div class="user_help alert" style="text-align:left;" > 
			<strong>��ܰ��ʾ��</strong><br/>
�벻Ҫ�������������Ϥ����ʿ,��������˴�������Ҫ�����š�<br />
����±ߵ������뷢�����ĺ��ѣ�ע���������Ϊ���������û���<br />
		</div>
		<div class="user_right_border">
			<div class="l">�����룺</div>
			<div class="c">
				<!--  <textarea style="height:100px;width:500px" id="invite">{$_G.weburl}/index.php?user&q=going/reginvite&u={$_U.user_inviteid}</textarea>-->
				<textarea style="height:100px;width:500px" id="invite">�����������ͻ�VIPͶ�ʾ��ֲ���www.viptouzi.com����ע����������{$_U.user_inviteid}</textarea>
				<br/><input type="button" onclick="doCopy('invite')" class="btn-action" value="����" />
			</div>
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head">
					<td>�����û��� </td>
                    <td>��ʵ���� </td>
					<td>ע��ʱ�� </td>
                    <td>�Ƿ�VIP��Ա </td>
					<td>Ӧ���������</td>
                    <td>ʵ���������(��֧��)</td>
				</tr>
				{list module="user" function="GetFriendsInvite" var="loop" user_id="0" showpage="3"}
				{foreach from="$loop.list" item="item"}
				<tr>
					<td>{$item.username}</td>
                    <td>{$item.realname}</td>
					<td>{$item.addtime|date_format}</td>
                    <td>{ if $item.vip_status == 1}��{else}��{/if}</td>
					<td>{ if $item.vip_status == 1}100Ԫ{else}0Ԫ{/if}</td>
                    <td>{$item.invite_money}Ԫ</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="6" class="page">
						<div class="list_table_page">{$loop.showpage}</div>
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		{literal}
		<script>
		function doCopy(id) { 
		  var codeid;
		  codeid=id;
		 if (document.all){
		   var obj;
		   obj=document.getElementById(codeid);
		   window.clipboardData.setData("text",obj.innerText)
		   alert("�������ӵ�ַ���Ƴɹ��������ֱ�Ӹ��Ʒ�����ĺ���");
		 }
		 else{
		   alert("�˹���ֻ����IE����Ч\n\n�����ı�������Ctrl+Aѡ���ٸ���");
		 }
		}
		</script>
		{/literal}
		<!--�������� ����-->
		
		<!--�������� ��ʼ-->
		{elseif $_U.query_type=="request"}
		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>�Է�����</td>
					<td>����ʱ��</td>
					<td>����˵��</td>
					<td>����</td>
				</tr>
				{list  module="user" function="GetFriendsRlist" var="loop" user_id="0" }
				{foreach from="$loop.list" item="item"}
				<tr >
					<td><a href="/u/{$item.user_id}" target="_blank">{$item.username}</a></td>
					<td>{$item.addtime|date_format}</td>
					<td>{$item.content}</td>
					<td><a href="javascript:void(0)" onclick='tipsWindown("��Ϊ����","url:get?/?user&q=code/user/raddfriend&username={$item.username}",400,230,"true","","true","text");'>��Ϊ����</a>  <a href="{$_U.query_url}/delfriend&username={$item.username}">ɾ��</a> </td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="4" class="page">
						<div class="list_table_page">{$loop.show_page}</div>
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--�������� ����-->
		
		<!--�ҵĺ��� ��ʼ-->
		{elseif $_U.query_type=="myfriend"}
		
		<div class="user_main_title" style="height:30px; padding-top:7px;"> 
		
		&nbsp; &nbsp; &nbsp; �û�����<input type="text" name="username" id="username" value="{$magic.request.username}" /> <input value="����" type="button" onclick="sousuo('{$_U.query_url}/publish')"  />
		</div>
		
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>�Է�����</td>
					<td>����ʱ��</td>
					<td>����˵��</td>
					<td>����</td>
				</tr>
				{list module="user" function="GetFriendsList" var="loop" user_id="0" status=1 showpage="3" username="request"}
				{foreach from="$loop.list" item="item"}
				<tr >
					<td><a href="/u/{$item.friends_userid}" target="_blank">{$item.friend_username}</a></td>
					<td>{$item.addtime|date_format}</td>
					<td>{$item.content|default:"-"}</td>
					<td><a href="{$_U.query_url}/delfriend&username={$item.friend_username}">ɾ��</a>  <a href="{$_U.query_url}/blackfriend&username={$item.friend_username}">��Ϊ������</a></td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page">{$loop.showpage}</div>
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--�ҵĺ��� ����-->
<script>
	var url = "{$_U.query_url}/{$_U.query_type}";
		{literal}
		function sousuo(){
			var _url = "";
			var username = jQuery("#username").val();
			if (username!=null){
				 _url += "&username="+username;
			}
			location.href=url+_url;
		}
</script>
{/literal}
		
		<!--������ ��ʼ-->
		{elseif $_U.query_type=="black"}
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>�Է�����</td>
					<td>����</td>
				</tr>
				{list  module="user" function="GetFriendsList" var="loop" user_id="0" status=2}
				{foreach from="$loop.list" item="item"}
				<tr>
					<td><a href="/u/{$item.friends_userid}" target="_blank">{$item.friend_username}</a></td>
					<td><a href="{$_U.query_url}/delfriend&username={$item.friend_username}">ɾ��</a>  <a href="{$_U.query_url}/readdfriend&username={$item.friend_username}">���¼�Ϊ����</a></td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page">{$loop.show_page}</div>
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--������ ����-->
		<!-- ��ɿ�ʼ-->
		{elseif $_U.query_type=="ticheng"}
		<div class="user_main_title alert" style="height:60px; padding-top:7px;"> 
		</div>

		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
				<tr class="head" >
					<td>ʱ��</td>
					<td>Ͷ�ʽ��</td>
				</tr>
				{list  module="user" function="GetTiChengList" var="loop" status="0" user_id="0" }
				{foreach from="$loop.list" item="item"}
				<tr >
					<td>{$item.addtimes}</td>
					<td>��{$item.money}</td>
				</tr>
				{/foreach}
				{/list}
		</table>
		<!--��� ����-->
		
		{elseif $_U.query_type=="realname"}
		<!--�޸ĵ�¼���� ��ʼ-->
		{if $_G.user_result.real_status==1} 
		<div class="user_help alert">��ϲ���Ѿ�ͨ����ʵ����֤����Ҫ�޸������ƹ�����ϵ��лл��</div>
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">�û�����</div>
			<div class="c">
				{$_G.user_result.username} 
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">��ʵ������</div>
			<div class="c">
				{$_G.user_result.realname}
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">�� �� ��</div>
			<div class="c">
				{if $_G.user_result.sex==1}��{else}Ů{/if} 
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">�� �壺</div>
			<div class="c">
				{$_G.user_result.nation|linkage:"nation/value"}
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">�������ڣ�</div>
			<div class="c">
				{$_G.user_result.birthday|date_format:"Y-m-d"}
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">֤�����</div>
			<div class="c">
				{$_G.user_result.card_type|linkage:"card_type"}
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">֤�����룺</div>
			<div class="c">
				{$_G.user_result.card_id|truncate:14}****
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">���᣺</div>
			<div class="c">
				{$_G.user_result.area|area}
			</div>
		</div>
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">���֤ͼƬ��</div>
			<div class="c">
				<a href="{$_G.user_result.card_pic1}" target="_blank">����</a> | <a href="{$_G.user_result.card_pic2}" target="_blank">����</a>
			</div>
		</div>
		{else}
		
		<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
		<div class="user_help alert">ע�⣺��������д���µ����ݣ�һ��ͨ��ʵ����֤������Ϣ�������޸ġ�{$_G.user_result.content}</div>
		<div class="user_right_border">
			<div class="l">�û�����</div>
			<div class="c">
				{$_G.user_result.username} 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��ʵ������</div>
			<div class="c">
				<input  name="realname" value="{$_G.user_result.realname}" /><font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�� �� ��</div>
			<div class="c">
				<input type="radio" name="sex" value="1" {if $_G.user_result.sex=="1" || $_G.user_result.sex==""}checked="checked" {/if} />�� <input type="radio" name="sex" value="2"  {if $_G.user_result.sex=="2"}checked="checked" {/if} />Ů <font color="#FF0000">*</font> 
				
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�� �壺</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&nid=nation&name=nation&value={$_G.user_result.nation}" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�������ڣ�</div>
			<div class="c">
				<input type="text" name="birthday" value="{$_G.user_result.birthday|date_format:"Y-m-d"}" onclick="change_picktime()" />  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">֤�����</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&nid=card_type&name=card_type&isid=false&value={$_G.user_result.card_type}" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">֤�����룺</div>
			<div class="c">
				<input type="text" name="card_id" value="{$_G.user_result.card_id}" />  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���᣺</div>
			<div class="c">
                <script src="/plugins/index.php?q=area&area={$_G.user_result.area}" type="text/javascript" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���֤�����ϴ���</div>
			<div class="c">
				<input type="file" name="card_pic1" size="20" class="input_border"/> {if $_G.user_result.card_pic1!=""}<a href="./{ $_G.user_result.card_pic1}" target="_blank" title="��ͼƬ"><img src="{ $tempdir }/images/ico_yes.gif" border="0"  /></a>{/if}  <font color="#FF0000">*</font> 
           </div>
		</div>
		
	<div class="user_right_border">
			<div class="l">���֤�����ϴ���</div>
			<div class="c">
				<input type="file" name="card_pic2" size="20" class="input_border"/> {if $_G.user_result.card_pic2!=""}<a href="./{ $_G.user_result.card_pic2}" target="_blank" title="��ͼƬ"><img src="{ $tempdir }/images/ico_yes.gif" border="0"  /></a>{/if}  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				{if $_G.user_result.use_money>=0}<input type="submit"  class="btn-action" name="name"  value="ȷ���ύ" size="30" /> {else} �������Ϊ{$_G.user_result.use_money},���� <a href="/?user&q=code/account/recharge_new"><font color="#FF0000">��ֵ</font></a>��{/if}
			</div>
		</div>
		</form>{/if}
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ����û����������Ͻ����ϸ�ı���
		</div>
		{literal}<script>
			function check_form(){
				 var frm = document.forms['form1'];
                 var card_pic1 = (frm.elements['card_pic1'].value);
                 var card_pic2 = (frm.elements['card_pic2'].value);
				 var realname = frm.elements['realname'].value;
				 var birthday = frm.elements['birthday'].value;
				 var card_id = frm.elements['card_id'].value;
				 var area = frm.elements['area'].value;
				 var errorMsg = '';
				  if (realname.length == 0 ) {
					errorMsg += '* ��ʵ��������Ϊ��' + '\n';
				  }
				  if (birthday.length == 0 ) {
					birthday += '* ���ղ���Ϊ��' + '\n';
				  }
				  if (card_id.length == 0 ) {
					errorMsg += '* ֤�����벻��Ϊ��' + '\n';
				  }
				  if (area.length == 0 ) {
					errorMsg += '* ����д����' + '\n';
				  }
                  var pos1 = card_pic1.lastIndexOf(".");
                  var lastname1 = card_pic1.substring(pos1,card_pic1.length);
                  var pos2 = card_pic2.lastIndexOf(".");
                  var lastname2 = card_pic2.substring(pos2,card_pic2.length);
                  if (!(lastname1.toLowerCase()==".jpg" || lastname1.toLowerCase()==".gif" ))
                  {
                       errorMsg += "*���ϴ����ļ����ͱ���Ϊ.jpg�� .gif����" + '\n';
                   }
					if (!(lastname2.toLowerCase()==".jpg" || lastname2.toLowerCase()==".gif" ))
                  {
                     errorMsg += "*���ϴ����ļ����ͱ���Ϊ.jpg�� .gif����" + '\n';
                  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			}
		</script>{/literal}
		<!--�޸ĵ�¼���� ����-->
		
		{elseif $_U.query_type=="email_status"}
		<!--������֤ ��ʼ-->
		{if $_G.user_result.email_status==1}
		<div class="user_help alert">���������Ѿ�ͨ����֤��<b>{$_G.user_result.email}</b> </div>
		
		{else}
		<div class="user_help alert">�������仹ûͨ����֤��<b>{$_G.user_result.email}</b></div>
		<div class="user_right_border">
			<div class="c">
				<form action="" method="post" onsubmit="this.elements['submit'].disabled='disabled';return true;">
				�������䣺<input type="text" name="email" value="{$_G.user_result.email}" />  <input type="submit"  class="btn-action" name="submit" value="���¼���"  />
				</form>
			</div>
		</div>
		{/if}
		<!--������֤ ����-->
		
		{elseif $_U.query_type=="phone_status"}
		<!--������֤ ��ʼ-->
		{if $_G.user_result.phone_status==1}
		<div class="user_help alert">�����ֻ��Ѿ�ͨ����֤����֤���ֻ�����Ϊ��<b>{$_G.user_result.phone|truncate:9}**</b></div>

		{elseif $_G.user_result.phone_status==2}
		<div class="user_help alert">�����ֻ�û��ͨ����֤���������ύ��ȷ���ֻ�����</b></div>
			<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
				�ֻ����룺<input type="text" name="phone" id="phone" value="{if $_G.user_result.phone_status==0 || $_G.user_result.phone_status==1}{$_G.user_result.phone}{/if}" />
				<input type="submit"  class="btn-action" value="ȷ���ύ" class="subphone" /><br/><br/>
				</form>
			</div>
		</div>
        {literal}<script type="text/javascript">
		jQuery(function(){
		jQuery('.subphone').click(function(){
			var phone = jQuery('#phone').val();
			if(phone==''){
				alert('�ֻ����벻��Ϊ��'); 
				return false;
			}else{
				 reg=/^1[3|4|5|8][0-9]{9}$/; 
				if(!reg.test(phone)){
					alert('�ֻ������ʽ����ȷ��');
					return false;
				}
			}
		});
		});
		</script>{/literal}
		{else}
		<div class="user_help alert">
		{if $_G.user_result.phone_status!=0}�����ֻ���ƹ�����������У������ĵȴ����ֻ��ţ�<font color="#FF0000">{$_G.user_result.phone_status|$_G.user_result.phone}</font>��
		{else}�����ֻ���ûͨ����֤��
					<div class="user_right_border">
			<div class="c">
				<form action="" method="post" name="form1">
				�ֻ����룺<input type="text" name="phone" id="phone" maxlength="11"  value="{if $_G.user_result.phone_status==0 || $_G.user_result.phone_status==1}{$_G.user_result.phone}{/if}" />
				<input type="button" value="��ȡ��֤��" id="getCode" onclick="getcode()" /><br/><br/>
				&nbsp;&nbsp;��֤�룺<input type="text" name="code" maxlength="6" /><br/><br/>
				<input type="submit"  class="btn-action" value="�ύ��֤" id="sub-f" /></form>
			</div>
		</div>
		{literal}
		<script type="text/javascript">
		function is_phone(phone){
			if(phone==''){
				return false;
			}else{
				var reg=/^1[3|4|5|8][0-9]{9}$/; 
				if(!reg.test(phone)){
					return false;
				}
				return true;
			}
		}
		$("#sub-f").click(function(){
			var frm = document.forms['form1'];
			var code = frm.elements['code'].value;
			var phone = frm.elements['phone'].value;
			var reg = /^[0-9]{4,6}$/;
			if(!reg.test(code)){
				jQuery.jBox.error('��֤���ʽ����ȷ!', '��ʾ');
			}else if(!is_phone(phone)){
				jQuery.jBox.error('�ֻ������ʽ����ȷ!', '��ʾ');
			}else{
				jQuery.jBox.tip("�����ύ..", 'loading');
				frm.submit();
			}
		})
		function getcode(){
			var phone=document.forms['form1'].elements['phone'].value;
			if(!is_phone(phone)){
				jQuery.jBox.error('�ֻ������ʽ����ȷ!', '��ʾ');
				return false;
			}
			$("#getCode").attr({"disabled":"disabled"});
			$.post("/index.php?user&q=code/user/phone_status","type=getcode&phone="+phone,function(msg){
				if(msg==1){
					jQuery.jBox.success('��֤�뷢�ͳɹ�����ע�����!', '��ʾ');
					document.forms['form1'].elements['phone'].setAttribute("readonly","readonly");
					$("#getCode").attr({"disabled":"disabled"});
					var date=new Date();
					date.setTime(date.getTime()+5*60*1000);
					document.cookie = "phonecode=300;expires=" + date.toGMTString();
					SetRemainTime();
				}else{
					jQuery.jBox.error('��֤�뷢��ʧ��!', '��ʾ');
					$("#getCode").removeAttr("disabled");
					return;
				}
			});
		}
		SetRemainTime();
		function SetRemainTime() {
				var arr,reg=new RegExp("(^| )phonecode=([^;]*)(;|$)");
				var SysSecond = 0;
				if(arr=document.cookie.match(reg)){
					var SysSecond = arr[2];
				}
			    if (SysSecond > 0) { 
			    SysSecond = SysSecond - 1;
			    var date=new Date();
				date.setTime(date.getTime()+SysSecond*1000);
				document.cookie = "phonecode="+SysSecond+";expires=" + date.toGMTString();
			    var second = Math.floor(SysSecond % 60);             // ������     
			    var minite = Math.floor((SysSecond / 60) % 60);      //����� 
			    var hour = Math.floor((SysSecond / 3600) % 24);      //����Сʱ 
			    var day = Math.floor((SysSecond / 3600) / 24);        //������ 
				$("#getCode").attr({"value":minite+"��"+second+"��"});
				$("#getCode").attr({"disabled":"disabled"});
				setTimeout("SetRemainTime()",1000);
			   }else{
				$("#getCode").attr({"value":"��ȡ��֤��"});	
					$("#getCode").removeAttr("disabled");
			   } 
		}
		</script>
		{/literal}
		{/if}
		</div>
		{/if}
		<!--������֤ ����-->
		
		{elseif $_U.query_type=="video_status"}
		<!--��Ƶ��֤ ��ʼ-->

                {if $_G.user_result.vedio_status==1}
		<div class="user_help alert">���Ѿ�ͨ������Ƶ��֤</div>
		{else}
		<div class="user_help alert">
		{if $_G.user_result.video_status!=0}������Ƶ��֤�Ѿ��ύ����ƹ�����Ա�ἰʱ�ĸ�����ϵ��</font>��{else}��ӭ������Ƶ��֤��<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
                                    �������Ҫ��Ƶ��֤����㰴ť�ύ��<input type="submit"  class="btn-action" value="�ύ����" name="submit" /><br />
                 </form>
			</div>
		</div>{/if}</div>
		{/if}
		<!--��Ƶ��֤ ����-->
		
		{elseif $_U.query_type=="scene_status"}
		<!--��Ƶ��֤ ��ʼ-->
		{if $_G.user_result.vip_status!=1}
		<div class="user_help alert" style="text-align:left">�㻹����VIP��Ա�������ֳ���֤��</a>
		<div class="c">
			��Ҫ�����ΪVIP��Ա����㰴ť�ύ��VIP����ҳ��<input type="button" class="btn-action" onclick="javacript:location.href='/vip/index.html'" value="����VIP��Ա"  /><br /><br /></form>

			</div>
		</div>
		{elseif $_G.user_result.scene_status==1}
		<div class="user_help alert">���Ѿ�ͨ�����ֳ���֤</b></div>
		{else}
		<div class="user_help alert">�������Ҫ�ֳ���֤����������˾��ַ��
		</div>
		{/if}
		<!--��Ƶ��֤ ����-->
		
		<!--���û��� ��ʼ-->
		{elseif $_U.query_type=="credit"}
		<div class="user_help" > 
		<strong>�����ܵ÷֣�</strong> <font size="3" color="#FF0000"><strong>{$_U.user_cache.credit}</strong></font>  {$_U.user_cache.credit|credit}
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>��������</td>
					<td>����</td>
                    <td>���ʱ��</td>
					<td>��ע</td>
				</tr>
				{loop module="credit" function="GetLogList" user_id="0" limit="all"}
				<tr >
					<td>{$var.type_name}</td>
					<td>{$var.value} ��</td>
                    <td>{$var.addtime|date_format:"Y-m-d"}</td>
					<td>{$var.remark}</td>
				</tr>
				{/loop}
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page">{$_U.show_page}</div>
					</td>
				</tr>
			</form>	
		</table>
		<!--���û��� ����-->
		
		<!--���û��� ��ʼ-->
		{elseif $_U.query_type=="myuser"}
		<div class="user_help" > 
		{list  module="user" function="GetList" var="loop" epage=20  kefu_userid="$_G.user_id" showpage=3 }
			
		<strong>�ܿͻ���</strong> {$loop.total} ��
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>�û���</td>
					<td>��ʵ����</td>
					<td>�Ա�</td>
					<td>�绰</td>
					<td>QQ</td>
					<td>����</td>
					<td>���ڵ�</td>
					<td>����</td>
				</tr>
					{foreach from="$loop.list" item="item"}
				<tr>
					<td><a href="/u/{$item.user_id}" target="_blank">{$item.username}</a></td>
					<td><a href="/?user&q=code/borrow/myuser&user_id={$item.user_id}">{$item.realname}</a> </td>
					<td>{if $item.sex==1}��{else}Ů{/if}</td>
					<td>{$item.phone}</td>
					<td>{$item.qq}</td>
					<td>{$item.email}</td>
					<td>{$item.area|area}</td>
					<td><a href="/?user&q=code/attestation/myuser&user_id={$item.user_id}">����֤��</a> | <a href="/?user&q=code/borrow/myuserrepay&user_id={$item.user_id}">������ϸ</a></td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="4" class="page">
						<div class="list_table_page">��{$loop.showpage}</div>
					</td>
				</tr>
			</form>	
		</table>
		{/list}
		<!--���û��� ����-->
		{/if}
</div>
</div>
</div>
</div>
<!--�û����ĵ�����Ŀ ����-->
{include file="user_footer.html"}
{literal}
<script language="javascript">
function reurl(){
    var url = location.href; //�ѵ�ǰҳ��ĵ�ַ�������� url
    var times = url.split("$"); //���б��� url �ָ�����Ϊ "$"
    var myDate = new Date();
    var mytime=myDate.getMilliseconds();     //��ȡ��ǰʱ��
    if(times[1] != 1){ //���$���ֵ������1��ʾû��ˢ��
        url += "&nowtime="+mytime;
        url += "&$1"; //�ѱ��� url ��ֵ���� $1
        window.location.href=url;
    }
    if(times[1] == 1){
        window.location.reload();
    }
}
function protocolshow(){
	$("#protocol").dialog({
	    bgiframe: true,
	    resizable: false,
	    height:450,
	    width:500,
	    modal: true,
	    title:'\u6295\u53cb\u5b9d\u7528\u6237\u6388\u6743\u534f\u8bae',
	    overlay: {
	        backgroundColor: '#000',
	        opacity: 0.5
	    },
	    buttons: {
	        '\u5173\u95ed': function() {
	            $(this).dialog('close');
	        }
	    }
	});
}
function tenderTreasure(){
	var frm = document.forms['form1'];
	var username = frm.elements['username'].value;
	var valicode = frm.elements['valicode'].value;
	var protocolcheck = frm.elements['protocolcheck'];
	if(username==''){
		jQuery.jBox.info('\u7528\u6237\u540d\u4e0d\u80fd\u4e3a\u7a7a','\u63d0\u793a');
		return false;
	}
	if(valicode.length<4){
		jQuery.jBox.info('\u9a8c\u8bc1\u7801\u683c\u5f0f\u6709\u8bef','\u63d0\u793a');
		return false;
	}
	if(protocolcheck.checked==false){
		jQuery.jBox.info('\u60a8\u5fc5\u987b\u540c\u610f\u6295\u53cb\u5b9d\u7528\u6237\u6388\u6743\u534f\u8bae\u624d\u80fd\u63d0\u4ea4','\u63d0\u793a');
		return false;
	}
	var submit = function (v, h, f) {
	    if (v == 'ok'){
	    	jQuery.jBox.tip('\u63d0\u4ea4\u4e2d','loading');
	    	frm.submit();
		}
	    return true;
	};
	$.jBox.confirm("\u8bf7\u786e\u8ba4\u60a8\u8f93\u5165\u7684\u6295\u53cb\u5b9d\u7528\u6237\u540d\u662f\u81ea\u5df1\u7684\uff0c\u5e76\u4e14\u8f93\u5165\u65e0\u8bef\uff1f", "\u63d0\u793a", submit);
	return false;
}
</script>
{/literal}
<script src="{$tempdir}/media/js/modal.js"></script>
<script src="{$tempdir}/media/js/tab.js"></script>
<script src="{$tempdir}/media/js/alert.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>