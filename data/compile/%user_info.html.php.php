<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/tipswindown.css" rel="stylesheet" type="text/css" />

<!--�û����ĵ�����Ŀ ��ʼ-->
<div id="main" class="clearfix" style="margin-top:0px;">
<div class="wrap950 ">
	<!--��ߵĵ��� ��ʼ-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--��ߵĵ��� ����-->
	
	<!--�ұߵ����� ��ʼ-->
	<div class="user_right">
		<div class="user_right_menu">
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="userpwd" ||  $this->magic_vars['_U']['query_type']=="paypwd" ||  $this->magic_vars['_U']['query_type']=="protection" ||  $this->magic_vars['_U']['query_type']=="getpaypwd" ||  $this->magic_vars['_U']['query_type']=="serialStatusSet"): ?>
			<ul id="tab" class="list-tab clearfix">
				
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="userpwd"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/userpwd">��¼����</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="paypwd" ||  $this->magic_vars['_U']['query_type']=="getpaypwd"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/paypwd">��������</a></li>
<!-- 				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="protection"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/protection">���뱣��</a></li> -->
<!-- 				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="serialStatusSet"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/serialStatusSet">��̬��������</a></li> -->
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="reginvite"  ||  $this->magic_vars['_U']['query_type']=="request" ||  $this->magic_vars['_U']['query_type']=="myfriend" ||  $this->magic_vars['_U']['query_type']=="black"||  $this->magic_vars['_U']['query_type']=="ticheng"): ?>
			<ul id="tab" class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="reginvite"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/reginvite">�������</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="request"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/request">��������</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myfriend"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/myfriend">�ҵĺ���</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="black"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/black">������</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="ticheng"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/ticheng">�������</a></li>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="credit"): ?>
			<ul id="tab" class="list-tab clearfix">
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="smsorder"): ?>
			<ul id="tab" class="list-tab clearfix">
            <li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="smsorder"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/smsorder">���Ŷ���</a></li>
			</ul>            
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser"): ?>
			<ul id="tab" class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuser"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/myuser">�ҵ���ƹ���</a></li>
				<li ><a href="/?user&q=code/borrow/myuser">�ͻ����</a></li>
				<li ><a href="/?user&q=code/borrow/myuser_account">ͳ����Ϣ</a></li>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tenderTreasure"): ?>
			<ul id="tab" class="list-tab clearfix">
			<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="tenderTreasure"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tenderTreasure">Ͷ�ѱ�</a></li>
			</ul>
			<? else: ?>
			<ul id="tab" class="list-tab-narrow clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="realname"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/realname">ʵ����֤</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="email_status"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/email_status">������֤</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="phone_status"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/phone_status">�ֻ���֤</a></li>
<!-- 				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="video_status"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/video_status">��Ƶ��֤</a></li> -->
<!-- 				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="scene_status"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/scene_status">�ֳ���֤</a></li> -->
<!-- 				<li ><a href="/?user&q=code/attestation">�ϴ�����֤��</a></li> -->
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="avatar"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/avatar">ͷ����Ϣ</a></li>
 			</ul>
			<? endif; ?>
		</div>
		
		<div class="user_right_main">
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="avatar"): ?>
		<!--ͷ�� ��ʼ-->
		<div class="user_help alert">���ϴ�����վ��ͷ��<br/>* ��ܰ��ʾ��ͷ�����������֣����У�С</div>
		<div style="width:100%">
		<div style="float:left;padding-left:100px;">
			
			<img  style="border:1px dashed #999;padding:2px;margin-top:60px;" src="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = '';$_tmp = $this->magic_vars['_G']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/><br/>
			<a href="index.php?user&q=code/user/avatar"><font color="#FF0000">��ǰ�û�ͷ��</font></a>

		</div>
		<div style="float:right"> <? 
 require_once(ROOT_PATH.'plugins/avatar/configs.php');
require_once(ROOT_PATH.'plugins/avatar/avatar.class.php');
$objAvatar = new Avatar();
echo $objAvatar->uc_avatar($this->magic_vars['_G']['user_id'], 'virtual');
?></div>
		
		</div>
	
		<!--ͷ�� ����-->
		
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="privacy"): ?>
		<div class="user_help">���ø��˵���˽</div>
		<form action="" method="post">
		<div class="user_main_title">Home</div>
		<div class="user_right_border">
			<div class="e">�����б�</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['friend'])) $this->magic_vars['_U']['user_privacy']['friend'] = ''; echo $this->magic_vars['_U']['user_privacy']['friend']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">�������ۣ�</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend_comment&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['friend_comment'])) $this->magic_vars['_U']['user_privacy']['friend_comment'] = ''; echo $this->magic_vars['_U']['user_privacy']['friend_comment']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">����б�</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=borrow_list&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['borrow_list'])) $this->magic_vars['_U']['user_privacy']['borrow_list'] = ''; echo $this->magic_vars['_U']['user_privacy']['borrow_list']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">Ͷ���¼��</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=loan_log&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['loan_log'])) $this->magic_vars['_U']['user_privacy']['loan_log'] = ''; echo $this->magic_vars['_U']['user_privacy']['loan_log']; ?>"></script>
			</div>
		</div>
			
		
		<div class="user_main_title">վ����/��Ϊ����</div>
		<div class="user_right_border">
			<div class="e">˭���Ը��ҷ�վ���ţ�</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=sent_msg&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['sent_msg'])) $this->magic_vars['_U']['user_privacy']['sent_msg'] = ''; echo $this->magic_vars['_U']['user_privacy']['sent_msg']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">˭�������ҷ��������룺</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend_request&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['friend_request'])) $this->magic_vars['_U']['user_privacy']['friend_request'] = ''; echo $this->magic_vars['_U']['user_privacy']['friend_request']; ?>"></script>
			</div>
		</div>
		
		
		<div class="user_main_title">������</div>
		<div class="user_right_border">
			<div class="e">˭���Կ��ҵĺ�������</div>
			<div class="c">
				<select name="look_black">
					<option value="0" <? if (!isset($this->magic_vars['_U']['user_privacy']['look_black'])) $this->magic_vars['_U']['user_privacy']['look_black']=''; ;if (  $this->magic_vars['_U']['user_privacy']['look_black']==0): ?> selected="selected"<? endif; ?>>�������ҵĺ��Ѳ鿴�ҵĺ�����</option>
					<option value="1" <? if (!isset($this->magic_vars['_U']['user_privacy']['look_black'])) $this->magic_vars['_U']['user_privacy']['look_black']=''; ;if (  $this->magic_vars['_U']['user_privacy']['look_black']==1): ?> selected="selected"<? endif; ?>>�����ҵĺ��Ѳ鿴�ҵĺ�����</option>
					<option value="2"<? if (!isset($this->magic_vars['_U']['user_privacy']['look_black'])) $this->magic_vars['_U']['user_privacy']['look_black']=''; ;if (  $this->magic_vars['_U']['user_privacy']['look_black']==2): ?> selected="selected"<? endif; ?>>��������ͬ��ĺ��Ѳ鿴�ҵĺ�����</option>
				</select>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">������������ҷ����ţ�</div>
			<div class="c">
				<input type="radio" name="allow_black_sent" value="1" <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_sent'])) $this->magic_vars['_U']['user_privacy']['allow_black_sent']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_sent']==1): ?> checked="checked"<? endif; ?>/> ���� <input type="radio" name="allow_black_sent" value="0"   <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_sent'])) $this->magic_vars['_U']['user_privacy']['allow_black_sent']='';if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_sent'])) $this->magic_vars['_U']['user_privacy']['allow_black_sent']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_sent']==0 ||  $this->magic_vars['_U']['user_privacy']['allow_black_sent']==""): ?> checked="checked"<? endif; ?> /> ������ 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">������������ҷ��ͺ�������</div>
			<div class="c">
				<input type="radio" name="allow_black_request" value="1"  <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_request'])) $this->magic_vars['_U']['user_privacy']['allow_black_request']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_request']==1): ?> checked="checked"<? endif; ?>/> ���� <input type="radio" name="allow_black_request" value="0" <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_request'])) $this->magic_vars['_U']['user_privacy']['allow_black_request']='';if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_request'])) $this->magic_vars['_U']['user_privacy']['allow_black_request']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_request']==0 ||  $this->magic_vars['_U']['user_privacy']['allow_black_request']==""): ?> checked="checked"<? endif; ?>/> ������ 
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
		
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="userpwd"): ?>
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
		<script>
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
		</script>
		<!--�޸ĵ�¼���� ����-->
		
<!--  LiuYY 2012-05-31 -->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type'] =="serialStatusSet"): ?>
		<!--�޸Ķ�̬����״̬ ��ʼ-->
		
		<form action="" name="form1" method="post" onsubmit="" >
		<div class="user_help alert">��̬�������ȷ���û��ĺϷ���ݣ��Ӷ��ںϷ���ݵ�¼�Ļ����ϱ���ҵ��ҵ����ʵİ�ȫ�ԡ�</div>
		����̬����Ӧ���ڣ�<br/>
		<? if (!isset($this->magic_vars['_G']['user_result']['serial_id'])) $this->magic_vars['_G']['user_result']['serial_id']=''; ;if (   $this->magic_vars['_G']['user_result']['serial_id'] == ""): ?>
		<font color="red" >�����˺Ż�δ�󶨶�̬����޷�ִ��������ã�</font>
		<? endif; ?>
		<div class="user_right_border">
			<div class="e">���֣�</div>
			<div class="c">
				<input type="checkbox" name="carryout"  value="1" id="carryout" <? if (!isset($this->magic_vars['_G']['user_result']['serial_id'])) $this->magic_vars['_G']['user_result']['serial_id']=''; ;if (   $this->magic_vars['_G']['user_result']['serial_id'] == ""): ?> disabled="disabled" <? endif; ?> /> 
			</div>
			<div class="e">��¼��</div>
			<div class="c">
				<input type="checkbox"  name="login" value="1" id="login" <? if (!isset($this->magic_vars['_G']['user_result']['serial_id'])) $this->magic_vars['_G']['user_result']['serial_id']=''; ;if (   $this->magic_vars['_G']['user_result']['serial_id'] == ""): ?> disabled="disabled" <? endif; ?> /> 
			</div>
			<input type="hidden" id="json_data" value='<? if (!isset($this->magic_vars['_G']['user_result']['serial_status'])) $this->magic_vars['_G']['user_result']['serial_status'] = ''; echo $this->magic_vars['_G']['user_result']['serial_status']; ?>' />	
		</div>
		<input type="hidden" name="action" value="1" />
		<br/>
		<div class="">
			<div class="e"></div>
			�����붯̬������: <input type="text" maxlength="6" name="uchoncode" <? if (!isset($this->magic_vars['_G']['user_result']['serial_id'])) $this->magic_vars['_G']['user_result']['serial_id']=''; ;if (  $this->magic_vars['_G']['user_result']['serial_id'] == ""): ?> disabled="disabled" <? endif; ?> /> 
			<div class="c">
			<br/>
				<input type="submit"  class="btn-action" name="name"  value="ȷ���ύ" size="30" <? if (!isset($this->magic_vars['_G']['user_result']['serial_id'])) $this->magic_vars['_G']['user_result']['serial_id']=''; ;if (   $this->magic_vars['_G']['user_result']['serial_id'] == ""): ?> disabled="disabled" <? endif; ?> /> 
			</div>
		</div>
	
	
		</form>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		
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
    </script>
		<!--�޸Ķ�̬����״̬ ����-->		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="paypwd"): ?>
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
		<script>
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
		</script>
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tenderTreasure"): ?>
		<div class="user_help alert">Ͷ�ѱ�-����ߵ���������ר�ң��ɹ��󶨺������Ͷ�ѱ��϶�ƽ̨�Զ����ˡ����ˣ��򵥡���Ч����ȫ��<a href="http://bbs.cnwdai.com/forum.php?mod=viewthread&tid=10617&extra=page%3D1"  target="_break">����˲鿴��Ʒ˵����</a></div>
		<? if (!isset($this->magic_vars['_G']['user_result']['forum_accredit'])) $this->magic_vars['_G']['user_result']['forum_accredit']=''; ;if (  $this->magic_vars['_G']['user_result']['forum_accredit']==1): ?>
		���ѳɹ�������Ͷ�ѱ�����<a href="http://tyb.cnwdai.com/" target="_break">����ǰ��Ͷ�ѱ�</a>��
		<? else: ?>
		<form action="" name="form1" method="post" onkeydown="if(event.keyCode==13){return false;}">
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
		<? endif; ?>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="getpaypwd"): ?>
		<!--�޸İ�ȫ���� ��ʼ-->
		<? if (!isset($_GET['keyid'])) $_GET['keyid']=''; ;if (  $_GET['keyid']!=""): ?>
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
		<script>
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
		</script>
		
		<? else: ?>
		<form action="" name="form1" method="post" >
		<div class="user_help">���¼�����һ�</div>
		<div class="user_right_border">
			<div class="l">�������䣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>
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
		<? endif; ?>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
        
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="smsorder"): ?>
		<!--���Ŷ��� ��ʼ-->
		<form action="" name="form1" method="post" >
		<div class="user_right_border">
			<div class="l">��ʼʱ�䣺</div>
			<div class="c"><? if (!isset($this->magic_vars['_U']['smsuser']['start_time'])) $this->magic_vars['_U']['smsuser']['start_time'] = ''; echo $this->magic_vars['_U']['smsuser']['start_time']; ?></div>
		</div>
		<div class="user_right_border">
			<div class="l">����ʱ�䣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['smsuser']['end_time'])) $this->magic_vars['_U']['smsuser']['end_time'] = ''; echo $this->magic_vars['_U']['smsuser']['end_time']; ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">�������ͣ�</div>
			<div class="c">
				<input name="ordertype" type="radio" value="1_<? if (!isset($this->magic_vars['_U']['apptype']['money_month'])) $this->magic_vars['_U']['apptype']['money_month'] = ''; echo $this->magic_vars['_U']['apptype']['money_month']; ?>" />���£�<? if (!isset($this->magic_vars['_U']['apptype']['money_month'])) $this->magic_vars['_U']['apptype']['money_month'] = ''; echo $this->magic_vars['_U']['apptype']['money_month']; ?>��<input name="ordertype" type="radio" value="2_<? if (!isset($this->magic_vars['_U']['apptype']['money_year'])) $this->magic_vars['_U']['apptype']['money_year'] = ''; echo $this->magic_vars['_U']['apptype']['money_year']; ?>" />���꣨<? if (!isset($this->magic_vars['_U']['apptype']['money_year'])) $this->magic_vars['_U']['apptype']['money_year'] = ''; echo $this->magic_vars['_U']['apptype']['money_year']; ?>��
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
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="protection"): ?>
		<!--���뱣�� ��ʼ-->
		 <form action="" method="post">
		<? if (!isset($this->magic_vars['_U']['answer_type'])) $this->magic_vars['_U']['answer_type']='';if (!isset($this->magic_vars['_G']['user_result']['answer'])) $this->magic_vars['_G']['user_result']['answer']=''; ;if (  $this->magic_vars['_U']['answer_type']=="2" ||  $this->magic_vars['_G']['user_result']['answer'] == ""): ?>
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
		<? else: ?>
		<div class="user_help">���Ѿ����������뱣�����ܣ�����������ٽ����޸ġ� </div>
		<div class="user_right_border">
			<div class="l">��ѡ�����⣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['question'])) $this->magic_vars['_G']['user_result']['question'] = '';$_tmp = $this->magic_vars['_G']['user_result']['question'];$_tmp = $this->magic_modifier("linkage",$_tmp,"pwd_protection");echo $_tmp;unset($_tmp); ?> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">������𰸣�</div>
			<div class="c">
				<input type="text" name="answer" /> <input type="hidden" name="type" value="1" />
			</div>
		</div>
		
		<? endif; ?>
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
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="reginvite"): ?>
		<div class="user_help alert" style="text-align:left;" > 
			<strong>��ܰ��ʾ��</strong><br/>
�벻Ҫ�������������Ϥ����ʿ,��������˴�������Ҫ�����š�<br />
����±ߵ������뷢�����ĺ��ѣ�ע���������Ϊ���������û���<br />
		</div>
		<div class="user_right_border">
			<div class="l">�������ӣ�</div>
			<div class="c">
				  <textarea style="height:100px;width:500px" id="invite"><? if (!isset($this->magic_vars['_G']['weburl'])) $this->magic_vars['_G']['weburl'] = ''; echo $this->magic_vars['_G']['weburl']; ?>/index.php?user&q=going/reginvite&u=<? if (!isset($this->magic_vars['_U']['user_inviteid'])) $this->magic_vars['_U']['user_inviteid'] = ''; echo $this->magic_vars['_U']['user_inviteid']; ?></textarea>
				<!--<textarea style="height:100px;width:500px" id="invite">�����������ͻ�VIPͶ�ʾ��ֲ���www.viptouzi.com����ע����������<? if (!isset($this->magic_vars['_U']['user_inviteid'])) $this->magic_vars['_U']['user_inviteid'] = ''; echo $this->magic_vars['_U']['user_inviteid']; ?></textarea>-->
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
				<? $this->magic_vars['query_type']='GetFriendsInvite';$data = array('var'=>'loop','user_id'=>'0','showpage'=>'3','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsInvite($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr>
					<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
                    <td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
                    <td><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status'] == 1): ?>��<? else: ?>��<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status'] == 1): ?>100Ԫ<? else: ?>0Ԫ<? endif; ?></td>
                    <td><? if (!isset($this->magic_vars['item']['invite_money'])) $this->magic_vars['item']['invite_money'] = ''; echo $this->magic_vars['item']['invite_money']; ?>Ԫ</td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="6" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		
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
		
		<!--�������� ����-->
		
		<!--�������� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="request"): ?>
		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>�Է�����</td>
					<td>����ʱ��</td>
					<td>����˵��</td>
					<td>����</td>
				</tr>
				<? $this->magic_vars['query_type']='GetFriendsRlist';$data = array('var'=>'loop','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsRlist($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>
					<td><a href="javascript:void(0)" onclick='tipsWindown("��Ϊ����","url:get?/?user&q=code/user/raddfriend&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>",400,230,"true","","true","text");'>��Ϊ����</a>  <a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/delfriend&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>">ɾ��</a> </td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="4" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['show_page'])) $this->magic_vars['loop']['show_page'] = ''; echo $this->magic_vars['loop']['show_page']; ?></div>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--�������� ����-->
		
		<!--�ҵĺ��� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myfriend"): ?>
		
		<div class="user_main_title" style="height:30px; padding-top:7px;"> 
		
		&nbsp; &nbsp; &nbsp; �û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>" /> <input value="����" type="button" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')"  />
		</div>
		
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>�Է�����</td>
					<td>����ʱ��</td>
					<td>����˵��</td>
					<td>����</td>
				</tr>
				<? $this->magic_vars['query_type']='GetFriendsList';$data = array('var'=>'loop','user_id'=>'0','status'=>'1','showpage'=>'3','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['friends_userid'])) $this->magic_vars['item']['friends_userid'] = ''; echo $this->magic_vars['item']['friends_userid']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = '';$_tmp = $this->magic_vars['item']['content'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/delfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">ɾ��</a>  <a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/blackfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">��Ϊ������</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--�ҵĺ��� ����-->
<script>
	var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";
		
		function sousuo(){
			var _url = "";
			var username = jQuery("#username").val();
			if (username!=null){
				 _url += "&username="+username;
			}
			location.href=url+_url;
		}
</script>

		
		<!--������ ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="black"): ?>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>�Է�����</td>
					<td>����</td>
				</tr>
				<? $this->magic_vars['query_type']='GetFriendsList';$data = array('var'=>'loop','user_id'=>'0','status'=>'2','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr>
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['friends_userid'])) $this->magic_vars['item']['friends_userid'] = ''; echo $this->magic_vars['item']['friends_userid']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?></a></td>
					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/delfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">ɾ��</a>  <a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/readdfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">���¼�Ϊ����</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['show_page'])) $this->magic_vars['loop']['show_page'] = ''; echo $this->magic_vars['loop']['show_page']; ?></div>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--������ ����-->
		<!-- ��ɿ�ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="ticheng"): ?>
		<div class="user_main_title alert" style="height:60px; padding-top:7px;"> 
		</div>

		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
				<tr class="head" >
					<td>ʱ��</td>
					<td>Ͷ�ʽ��</td>
				</tr>
				<? $this->magic_vars['query_type']='GetTiChengList';$data = array('var'=>'loop','status'=>'0','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetTiChengList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><? if (!isset($this->magic_vars['item']['addtimes'])) $this->magic_vars['item']['addtimes'] = ''; echo $this->magic_vars['item']['addtimes']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<? unset($_magic_vars); ?>
		</table>
		<!--��� ����-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="realname"): ?>
		<!--�޸ĵ�¼���� ��ʼ-->
		<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']==1): ?> 
		<div class="user_help alert">��ϲ���Ѿ�ͨ����ʵ����֤����Ҫ�޸������ƹ�����ϵ��лл��</div>
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">�û�����</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?> 
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">��ʵ������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">�� �� ��</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']==1): ?>��<? else: ?>Ů<? endif; ?> 
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">�� �壺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['nation'])) $this->magic_vars['_G']['user_result']['nation'] = '';$_tmp = $this->magic_vars['_G']['user_result']['nation'];$_tmp = $this->magic_modifier("linkage",$_tmp,"nation/value");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">�������ڣ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['birthday'])) $this->magic_vars['_G']['user_result']['birthday'] = '';$_tmp = $this->magic_vars['_G']['user_result']['birthday'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">֤�����</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['card_type'])) $this->magic_vars['_G']['user_result']['card_type'] = '';$_tmp = $this->magic_vars['_G']['user_result']['card_type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"card_type");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">֤�����룺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['card_id'])) $this->magic_vars['_G']['user_result']['card_id'] = '';$_tmp = $this->magic_vars['_G']['user_result']['card_id'];$_tmp = $this->magic_modifier("truncate",$_tmp,"14");echo $_tmp;unset($_tmp); ?>****
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">���᣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['area'])) $this->magic_vars['_G']['user_result']['area'] = '';$_tmp = $this->magic_vars['_G']['user_result']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">���֤ͼƬ��</div>
			<div class="c">
				<a href="<? if (!isset($this->magic_vars['_G']['user_result']['card_pic1'])) $this->magic_vars['_G']['user_result']['card_pic1'] = ''; echo $this->magic_vars['_G']['user_result']['card_pic1']; ?>" target="_blank">����</a> | <a href="<? if (!isset($this->magic_vars['_G']['user_result']['card_pic2'])) $this->magic_vars['_G']['user_result']['card_pic2'] = ''; echo $this->magic_vars['_G']['user_result']['card_pic2']; ?>" target="_blank">����</a>
			</div>
		</div>
		<? else: ?>
		
		<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
		<div class="user_help alert">ע�⣺��������д���µ����ݣ�һ��ͨ��ʵ����֤������Ϣ�������޸ġ�<? if (!isset($this->magic_vars['_G']['user_result']['content'])) $this->magic_vars['_G']['user_result']['content'] = ''; echo $this->magic_vars['_G']['user_result']['content']; ?></div>
		<div class="user_right_border">
			<div class="l">�û�����</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��ʵ������</div>
			<div class="c">
				<input  name="realname" value="<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>" /><font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�� �� ��</div>
			<div class="c">
				<input type="radio" name="sex" value="1" <? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']='';if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']=="1" ||  $this->magic_vars['_G']['user_result']['sex']==""): ?>checked="checked" <? endif; ?> />�� <input type="radio" name="sex" value="2"  <? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']=="2"): ?>checked="checked" <? endif; ?> />Ů <font color="#FF0000">*</font> 
				
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�� �壺</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&nid=nation&name=nation&value=<? if (!isset($this->magic_vars['_G']['user_result']['nation'])) $this->magic_vars['_G']['user_result']['nation'] = ''; echo $this->magic_vars['_G']['user_result']['nation']; ?>" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�������ڣ�</div>
			<div class="c">
				<input type="text" name="birthday" value="<? if (!isset($this->magic_vars['_G']['user_result']['birthday'])) $this->magic_vars['_G']['user_result']['birthday'] = '';$_tmp = $this->magic_vars['_G']['user_result']['birthday'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" onclick="change_picktime()" />  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">֤�����</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&nid=card_type&name=card_type&isid=false&value=<? if (!isset($this->magic_vars['_G']['user_result']['card_type'])) $this->magic_vars['_G']['user_result']['card_type'] = ''; echo $this->magic_vars['_G']['user_result']['card_type']; ?>" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">֤�����룺</div>
			<div class="c">
				<input type="text" name="card_id" value="<? if (!isset($this->magic_vars['_G']['user_result']['card_id'])) $this->magic_vars['_G']['user_result']['card_id'] = ''; echo $this->magic_vars['_G']['user_result']['card_id']; ?>" />  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���᣺</div>
			<div class="c">
                <script src="/plugins/index.php?q=area&area=<? if (!isset($this->magic_vars['_G']['user_result']['area'])) $this->magic_vars['_G']['user_result']['area'] = ''; echo $this->magic_vars['_G']['user_result']['area']; ?>" type="text/javascript" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���֤�����ϴ���</div>
			<div class="c">
				<input type="file" name="card_pic1" size="20" class="input_border"/> <? if (!isset($this->magic_vars['_G']['user_result']['card_pic1'])) $this->magic_vars['_G']['user_result']['card_pic1']=''; ;if (  $this->magic_vars['_G']['user_result']['card_pic1']!=""): ?><a href="./<? if (!isset($this->magic_vars['_G']['user_result']['card_pic1'])) $this->magic_vars['_G']['user_result']['card_pic1'] = ''; echo $this->magic_vars['_G']['user_result']['card_pic1']; ?>" target="_blank" title="��ͼƬ"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_yes.gif" border="0"  /></a><? endif; ?>  <font color="#FF0000">*</font> 
           </div>
		</div>
		
	<div class="user_right_border">
			<div class="l">���֤�����ϴ���</div>
			<div class="c">
				<input type="file" name="card_pic2" size="20" class="input_border"/> <? if (!isset($this->magic_vars['_G']['user_result']['card_pic2'])) $this->magic_vars['_G']['user_result']['card_pic2']=''; ;if (  $this->magic_vars['_G']['user_result']['card_pic2']!=""): ?><a href="./<? if (!isset($this->magic_vars['_G']['user_result']['card_pic2'])) $this->magic_vars['_G']['user_result']['card_pic2'] = ''; echo $this->magic_vars['_G']['user_result']['card_pic2']; ?>" target="_blank" title="��ͼƬ"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_yes.gif" border="0"  /></a><? endif; ?>  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money']=''; ;if (  $this->magic_vars['_G']['user_result']['use_money']>=0): ?><input type="submit"  class="btn-action" name="name"  value="ȷ���ύ" size="30" /> <? else: ?> �������Ϊ<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = ''; echo $this->magic_vars['_G']['user_result']['use_money']; ?>,���� <a href="/?user&q=code/account/recharge_new"><font color="#FF0000">��ֵ</font></a>��<? endif; ?>
			</div>
		</div>
		</form><? endif; ?>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ�����ǽ����û����������Ͻ����ϸ�ı���
		</div>
		<script>
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
		</script>
		<!--�޸ĵ�¼���� ����-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="email_status"): ?>
		<!--������֤ ��ʼ-->
		<? if (!isset($this->magic_vars['_G']['user_result']['email_status'])) $this->magic_vars['_G']['user_result']['email_status']=''; ;if (  $this->magic_vars['_G']['user_result']['email_status']==1): ?>
		<div class="user_help alert">���������Ѿ�ͨ����֤��<b><? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?></b> </div>
		
		<? else: ?>
		<div class="user_help alert">�������仹ûͨ����֤��<b><? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?></b></div>
		<div class="user_right_border">
			<div class="c">
				<form action="" method="post" onsubmit="this.elements['submit'].disabled='disabled';return true;">
				�������䣺<input type="text" name="email" value="<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>" />  <input type="submit"  class="btn-action" name="submit" value="���¼���"  />
				</form>
			</div>
		</div>
		<? endif; ?>
		<!--������֤ ����-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="phone_status"): ?>
		<!--������֤ ��ʼ-->
		<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==1): ?>
		<div class="user_help alert">�����ֻ��Ѿ�ͨ����֤����֤���ֻ�����Ϊ��<b><? if (!isset($this->magic_vars['_G']['user_result']['phone'])) $this->magic_vars['_G']['user_result']['phone'] = '';$_tmp = $this->magic_vars['_G']['user_result']['phone'];$_tmp = $this->magic_modifier("truncate",$_tmp,"9");echo $_tmp;unset($_tmp); ?>**</b></div>

		<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['phone_status']==2): ?>
		<div class="user_help alert">�����ֻ�û��ͨ����֤���������ύ��ȷ���ֻ�����</b></div>
			<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
				�ֻ����룺<input type="text" name="phone" id="phone" value="<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']='';if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==0 ||  $this->magic_vars['_G']['user_result']['phone_status']==1): ?><? if (!isset($this->magic_vars['_G']['user_result']['phone'])) $this->magic_vars['_G']['user_result']['phone'] = ''; echo $this->magic_vars['_G']['user_result']['phone']; ?><? endif; ?>" />
				<input type="submit"  class="btn-action" value="ȷ���ύ" class="subphone" /><br/><br/>
				</form>
			</div>
		</div>
        <script type="text/javascript">
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
		</script>
		<? else: ?>
		<div class="user_help alert">
		<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']!=0): ?>�����ֻ���ƹ�����������У������ĵȴ����ֻ��ţ�<font color="#FF0000"><? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status'] = ''; echo $this->magic_vars['_G']['user_result']['phone_status']; ?></font>��
		<? else: ?>�����ֻ���ûͨ����֤��
					<div class="user_right_border">
			<div class="c">
				<form action="" method="post" name="form1">
				�ֻ����룺<input type="text" name="phone" id="phone" maxlength="11"  value="<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']='';if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==0 ||  $this->magic_vars['_G']['user_result']['phone_status']==1): ?><? if (!isset($this->magic_vars['_G']['user_result']['phone'])) $this->magic_vars['_G']['user_result']['phone'] = ''; echo $this->magic_vars['_G']['user_result']['phone']; ?><? endif; ?>" />
				<input type="button" value="��ȡ��֤��" id="getCode" onclick="getcode()" /><br/><br/>
				&nbsp;&nbsp;��֤�룺<input type="text" name="code" maxlength="6" /><br/><br/>
				<input type="submit"  class="btn-action" value="�ύ��֤" id="sub-f" /></form>
			</div>
		</div>
		
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
		
		<? endif; ?>
		</div>
		<? endif; ?>
		<!--������֤ ����-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="video_status"): ?>
		<!--��Ƶ��֤ ��ʼ-->

                <? if (!isset($this->magic_vars['_G']['user_result']['vedio_status'])) $this->magic_vars['_G']['user_result']['vedio_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vedio_status']==1): ?>
		<div class="user_help alert">���Ѿ�ͨ������Ƶ��֤</div>
		<? else: ?>
		<div class="user_help alert">
		<? if (!isset($this->magic_vars['_G']['user_result']['video_status'])) $this->magic_vars['_G']['user_result']['video_status']=''; ;if (  $this->magic_vars['_G']['user_result']['video_status']!=0): ?>������Ƶ��֤�Ѿ��ύ����ƹ�����Ա�ἰʱ�ĸ�����ϵ��</font>��<? else: ?>��ӭ������Ƶ��֤��<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
                                    �������Ҫ��Ƶ��֤����㰴ť�ύ��<input type="submit"  class="btn-action" value="�ύ����" name="submit" /><br />
                 </form>
			</div>
		</div><? endif; ?></div>
		<? endif; ?>
		<!--��Ƶ��֤ ����-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="scene_status"): ?>
		<!--��Ƶ��֤ ��ʼ-->
		<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']!=1): ?>
		<div class="user_help alert" style="text-align:left">�㻹����VIP��Ա�������ֳ���֤��</a>
		<div class="c">
			��Ҫ�����ΪVIP��Ա����㰴ť�ύ��VIP����ҳ��<input type="button" class="btn-action" onclick="javacript:location.href='/vip/index.html'" value="����VIP��Ա"  /><br /><br /></form>

			</div>
		</div>
		<? if (!isset($this->magic_vars['_G']['user_result']['scene_status'])) $this->magic_vars['_G']['user_result']['scene_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['scene_status']==1): ?>
		<div class="user_help alert">���Ѿ�ͨ�����ֳ���֤</b></div>
		<? else: ?>
		<div class="user_help alert">�������Ҫ�ֳ���֤����������˾��ַ��
		</div>
		<? endif; ?>
		<!--��Ƶ��֤ ����-->
		
		<!--���û��� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="credit"): ?>
		<div class="user_help" > 
		<strong>�����ܵ÷֣�</strong> <font size="3" color="#FF0000"><strong><? if (!isset($this->magic_vars['_U']['user_cache']['credit'])) $this->magic_vars['_U']['user_cache']['credit'] = ''; echo $this->magic_vars['_U']['user_cache']['credit']; ?></strong></font>  <? if (!isset($this->magic_vars['_U']['user_cache']['credit'])) $this->magic_vars['_U']['user_cache']['credit'] = '';$_tmp = $this->magic_vars['_U']['user_cache']['credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>��������</td>
					<td>����</td>
                    <td>���ʱ��</td>
					<td>��ע</td>
				</tr>
				<? $this->magic_vars['query_type']='GetLogList';$data = array('limit'=>'all','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/credit/credit.class.php');$this->magic_vars['magic_result'] = creditClass::GetLogList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<tr >
					<td><? if (!isset($this->magic_vars['var']['type_name'])) $this->magic_vars['var']['type_name'] = ''; echo $this->magic_vars['var']['type_name']; ?></td>
					<td><? if (!isset($this->magic_vars['var']['value'])) $this->magic_vars['var']['value'] = ''; echo $this->magic_vars['var']['value']; ?> ��</td>
                    <td><? if (!isset($this->magic_vars['var']['addtime'])) $this->magic_vars['var']['addtime'] = '';$_tmp = $this->magic_vars['var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['var']['remark'])) $this->magic_vars['var']['remark'] = ''; echo $this->magic_vars['var']['remark']; ?></td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?></div>
					</td>
				</tr>
			</form>	
		</table>
		<!--���û��� ����-->
		
		<!--���û��� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser"): ?>
		<div class="user_help" > 
		<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','epage'=>'20','kefu_userid'=>$this->magic_vars['_G']['user_id'],'showpage'=>'3');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
			
		<strong>�ܿͻ���</strong> <? if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total'] = ''; echo $this->magic_vars['loop']['total']; ?> ��
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
					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr>
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
					<td><a href="/?user&q=code/borrow/myuser&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></a> </td>
					<td><? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex']=''; ;if (  $this->magic_vars['item']['sex']==1): ?>��<? else: ?>Ů<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['qq'])) $this->magic_vars['item']['qq'] = ''; echo $this->magic_vars['item']['qq']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['area'])) $this->magic_vars['item']['area'] = '';$_tmp = $this->magic_vars['item']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><a href="/?user&q=code/attestation/myuser&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">����֤��</a> | <a href="/?user&q=code/borrow/myuserrepay&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">������ϸ</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="4" class="page">
						<div class="list_table_page">��<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
					</td>
				</tr>
			</form>	
		</table>
		<? unset($_magic_vars); ?>
		<!--���û��� ����-->
		<? endif; ?>
</div>
</div>
</div>
</div>
<!--�û����ĵ�����Ŀ ����-->
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>

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

<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/modal.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tab.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/alert.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>