<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
<!--�û����ĵ�����Ŀ ��ʼ-->
 <div id="main" class="clearfix" style="margin-top:0px;">
<div class="wrap950 " style="margin-top:0">
	<!--��ߵĵ��� ��ʼ-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--��ߵĵ��� ����-->
	<? $data = array('user_id'=>'0','var'=>'acc','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
	<!--�ұߵ����� ��ʼ-->
	<div class="user_right ">

		<div class="user_right_l ">
		<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']==0): ?>
		<div class="alert alert-error" id="user_amange">
		 <a class="close" data-dismiss="alert">��</a>
			<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>�����㣺�㻹û�н���ʵ����֤��
			<a href="/index.php?user&q=code/user/realname"><strong>���Ƚ���ʵ����֤</strong>
			</a>
			</div>
		<? endif; ?>
			<div class="user_right_lmain">
<!-- 				<div class="user_right_img"> -->
				<!-- 	<img src="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = '';$_tmp = $this->magic_vars['_G']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" height="98" width="98" class="picborder" style="border:1px dashed #999;padding:2px;"/> -->
<!-- 					<a href="index.php?user&q=code/user/avatar"><font color="#FF0000">[����ͷ��]</font></a> -->
<!-- 				</div> -->
				<div class="user_right_txt">
					<ul>
					<li>
					 <font color="red" size="5">�𾴵� <? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?> �ͻ�</font>
					</li>
					<li>
					 Ͷ�ʵȼ���<font color="red" size="3"><? if (!isset($this->magic_vars['acc']['collection'])) $this->magic_vars['acc']['collection']=''; ;if (  $this->magic_vars['acc']['collection']>1000000): ?>Ͷ��ר��<? if (!isset($this->magic_vars['acc']['collection'])) $this->magic_vars['acc']['collection']='';if (!isset($this->magic_vars['acc']['collection'])) $this->magic_vars['acc']['collection']=''; ;elseif (  $this->magic_vars['acc']['collection']<1000000 &&  $this->magic_vars['acc']['collection']>800000): ?>Ͷ������<? if (!isset($this->magic_vars['acc']['collection'])) $this->magic_vars['acc']['collection']='';if (!isset($this->magic_vars['acc']['collection'])) $this->magic_vars['acc']['collection']=''; ;elseif (  $this->magic_vars['acc']['collection']<800000 &&  $this->magic_vars['acc']['collection']>500000): ?>Ͷ�ʴ���<? else: ?>Ͷ������<? endif; ?></font>
					</li>
 <!-- 					<li><a href="/index.php?user&q=code/user/credit" style="float:left"><? if (!isset($this->magic_vars['_G']['user_result']['credit'])) $this->magic_vars['_G']['user_result']['credit'] = '';$_tmp = $this->magic_vars['_G']['user_result']['credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"");echo $_tmp;unset($_tmp); ?></a><font color="red"><? if (!isset($this->magic_vars['_G']['user_result']['credit'])) $this->magic_vars['_G']['user_result']['credit'] = ''; echo $this->magic_vars['_G']['user_result']['credit']; ?>��</font> -->
<!--                        <? if (!isset($this->magic_vars['_G']['user_result']['typename'])) $this->magic_vars['_G']['user_result']['typename'] = ''; echo $this->magic_vars['_G']['user_result']['typename']; ?> -->
<!--                      </li> -->
<!-- 					<li style="overflow:hidden"> -->	
<!-- 							<div class="floatl"><span> ��&nbsp;&nbsp;&nbsp;֤��</span></div>  -->
<!-- 							<a href="/index.php?user&q=code/user/realname"><div class="credit_pic_card_<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['real_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']==1): ?>ʵ������֤<? else: ?>δʵ����֤<? endif; ?>"></div></a> -->
<!--                             <a href="/index.php?user&q=code/user/phone_status" ><div class="credit_pic_phone_<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==1): ?>�ֻ�����֤<? else: ?>�ֻ�δ��֤<? endif; ?>"></div></a> -->
<!-- 							<a href="/index.php?user&q=code/user/email_status"><div class="credit_pic_email_<? if (!isset($this->magic_vars['_G']['user_result']['email_status'])) $this->magic_vars['_G']['user_result']['email_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['email_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['email_status'])) $this->magic_vars['_G']['user_result']['email_status']=''; ;if (  $this->magic_vars['_G']['user_result']['email_status']==1): ?>��������֤<? else: ?>����δ��֤<? endif; ?>"></div></a> -->
<!-- 							<a href="/index.php?user&q=code/user/video_status"><div class="credit_pic_video_<? if (!isset($this->magic_vars['_G']['user_result']['video_status'])) $this->magic_vars['_G']['user_result']['video_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['video_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['video_status'])) $this->magic_vars['_G']['user_result']['video_status']=''; ;if (  $this->magic_vars['_G']['user_result']['video_status']==1): ?>��Ƶ����֤<? else: ?>��Ƶδ��֤<? endif; ?>"></div></a> -->
<!-- 							<a href="/vip/index.html"><div class="credit_pic_vip_<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==1): ?>VIP<? else: ?>��ͨ��Ա<? endif; ?>"></div></a> -->
<!-- 							<a href="/index.php?user&q=code/user/scene_status"><div class="credit_pic_scene_<? if (!isset($this->magic_vars['_G']['user_result']['scene_status'])) $this->magic_vars['_G']['user_result']['scene_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['scene_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['scene_status'])) $this->magic_vars['_G']['user_result']['scene_status']=''; ;if (  $this->magic_vars['_G']['user_result']['scene_status']==1): ?>��ͨ���ֳ���֤<? else: ?>δͨ���ֳ���֤<? endif; ?>"></div></a> -->
<!-- 						</li> -->
<!-- 						<li> -->
<!--                            <span style="color:red"> ���ö�ȣ�<font size="2">��<? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = '';$_tmp = $this->magic_vars['acc']['credit'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></span> -->
<!--                         </li>  -->
						<li><span>����VIP���ޣ� <a href="/vip/index.html"><? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==1): ?>
                         <? if (!isset($this->magic_vars['_G']['user_result']['vip_verify_time'])) $this->magic_vars['_G']['user_result']['vip_verify_time'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?> �� 
						<? if (!isset($this->magic_vars['_G']['user_result']['vip_verify_time'])) $this->magic_vars['_G']['user_result']['vip_verify_time'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_verify_time']+60*60*24*365;$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>
                        <? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['vip_status']==-1): ?>VIP�����<? else: ?><font color="#999999">����VIP</font></font><? endif; ?></a></li>
						<li><span>ϵͳ֪ͨ��</span><a href="/index.php?user&q=code/message"><font color="#FF0000"><? if (!isset($this->magic_vars['_U']['user_cache']['message'])) $this->magic_vars['_U']['user_cache']['message'] = ''; echo $this->magic_vars['_U']['user_cache']['message']; ?></font> ��δ����Ϣ</a>&nbsp; &nbsp; <a href="/index.php?user&q=code/user/request"><? if (!isset($this->magic_vars['_U']['user_cache']['friends_apply'])) $this->magic_vars['_U']['user_cache']['friends_apply'] = ''; echo $this->magic_vars['_U']['user_cache']['friends_apply']; ?> ����������</a>
<!--                                <a href="/index.php?user&q=code/account/recharge_new"><font color="#FF0000">[�˺ų�ֵ]</font></a> -->
<!--                                <a href="/index.php?user&q=code/borrow/limitapp&type=credit"><font color="#FF0000">[�������]</font></a> -->
                        </li>
					</ul>
				</div>
			</div>
			<div class="user_right_li" style="float:left;width:550px;">
<div class="content">
<br><div class="title"><a href="/index.php?user&q=code/account">�����˻�����</a> </div>
<table width="100%" cellspacing="2">
  <tr>
    <td width="35%"> <a href="#" rel="tooltip" title="�ܶ�=�������+������+���ս��">�˻��ܶ�</a>��<font>��<? if (!isset($this->magic_vars['acc']['total'])) $this->magic_vars['acc']['total'] = '';$_tmp = $this->magic_vars['acc']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td>
    <td width="65%"><a href="index.php?user&amp;q=code/account/log">�ʽ��¼��ѯ</a> 
	| <a href="index.php?user&amp;q=code/account">�˻��ʽ�����</a> 
	</td>
  </tr>
  <tr>
    <td><a href="#" rel="tooltip" title="��������ʾ��ǰ���˻��п�ʵ��������Ͷ��Ľ��">�������</a>��<font>��<? if (!isset($this->magic_vars['acc']['use_money'])) $this->magic_vars['acc']['use_money'] = '';$_tmp = $this->magic_vars['acc']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td>
    <td width="65%"><a href="index.php?user&amp;q=code/account/cash_new"><font style="font-size:12px;" ><strong>����</strong></font></a> <a href="index.php?user&amp;q=code/account/recharge_new"><font style="font-size:12px;" ><strong>��ֵ</font></strong> </a> <a href="/index.php?user&amp;q=code/account/bank">
            
            &nbsp;�����˻����� </a> <a href="/index.php?user&amp;q=code/account/recharge">
                &nbsp;��ֵ��¼��ѯ </a>
        &nbsp;<a href="/index.php?user&amp;q=code/account/cash">���ּ�¼��ѯ </a> </td>
  </tr>
  <tr>
    <td><a href="#" rel="tooltip" title="�������˻�����ʱ����Ľ�һ����Ͷ����(��δ�������)������VIP�ȴ���ƹ�����˵�">�����ܶ�</a>��<font>��<? if (!isset($this->magic_vars['acc']['no_use_money'])) $this->magic_vars['acc']['no_use_money'] = '';$_tmp = $this->magic_vars['acc']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td>
    <td width="65%"><a href="/index.php?user&amp;q=code/borrow/bid">���ڽ��е�Ͷ��</a> <a href="/index.php?user&amp;q=code/account/cash">�������������</a></td>
  </tr>
  
<!--   <tr> -->
<!--     <td><a href="#" rel="tooltip" title="�����ֱ�����ڵֿ������������û���U�ܵȣ���Ҫ��Դ�����³�ֵ�Ľ���(�������֮���ĺ��)">���ú��</a>��<font>��<? if (!isset($this->magic_vars['_G']['user_result']['hongbao'])) $this->magic_vars['_G']['user_result']['hongbao'] = ''; echo $this->magic_vars['_G']['user_result']['hongbao']; ?></font></td> -->
<!--     <td width="65%"></td> -->
<!--   </tr> -->
  
 </table>
  <br>
<div class="title">���Ĵ�������</div>
<table width="100%" cellspacing="2">
  <tr>
    <td><a href="#" rel="tooltip" title="�����ܶ���ָ��ǰ�û����н�������δ�ջصĽ��(��������+��Ϣ)">�����ܶ�</a>��<font>��<? if (!isset($this->magic_vars['acc']['collection'])) $this->magic_vars['acc']['collection'] = '';$_tmp = $this->magic_vars['acc']['collection'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td>
    <td width="65%"><a href="#" rel="tooltip" title="������Ϣ��ָ��ǰ�û����ս���е���Ϣ����">&nbsp;&nbsp;&nbsp;&nbsp;������Ϣ</a>��<font>��<? if (!isset($this->magic_vars['acc']['collection_interest0'])) $this->magic_vars['acc']['collection_interest0'] = '';$_tmp = $this->magic_vars['acc']['collection_interest0'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td>
  </tr>
  <tr>
    <td>������ս�<font><? if (!isset($this->magic_vars['acc']['new_collection_account'])) $this->magic_vars['acc']['new_collection_account'] = '';$_tmp = $this->magic_vars['acc']['new_collection_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td>
    <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;�������ʱ�䣺<font><? if (!isset($this->magic_vars['acc']['new_collection_time'])) $this->magic_vars['acc']['new_collection_time'] = '';$_tmp = $this->magic_vars['acc']['new_collection_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?user&q=code/borrow/gathering&status=0"><strong><font color="red">��Ҫ�տ�</font></strong></a></td>
  </tr>
  <tr>
    <td>��׬��Ϣ��<font>��<? if (!isset($this->magic_vars['acc']['collection_interest1'])) $this->magic_vars['acc']['collection_interest1'] = '';$_tmp = $this->magic_vars['acc']['collection_interest1'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font> </td>
<!--     <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;��׬������<font>��<? if (!isset($this->magic_vars['acc']['award_add'])) $this->magic_vars['acc']['award_add'] = '';$_tmp = $this->magic_vars['acc']['award_add'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td> -->
  </tr>
<!--   <tr> -->
<!--     <td>����ܶ<font>��<? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num'] = '';$_tmp = $this->magic_vars['acc']['borrow_num'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td> -->
<!--     <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;�����ܶ<font>��<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font> </td> -->
<!--   </tr> -->
<!--   <tr> -->
<!--     <td>���������<font>��<? if (!isset($this->magic_vars['acc']['new_repay_account'])) $this->magic_vars['acc']['new_repay_account'] = '';$_tmp = $this->magic_vars['acc']['new_repay_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td> -->
<!--     <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;�������ʱ�䣺<font><? if (!isset($this->magic_vars['acc']['new_repay_time'])) $this->magic_vars['acc']['new_repay_time'] = '';$_tmp = $this->magic_vars['acc']['new_repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");$_tmp = $this->magic_modifier("default",$_tmp,"");echo $_tmp;unset($_tmp); ?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?user&q=code/borrow/repaymentplan"><strong><font color="red">��Ҫ����</font></strong></a></td> -->
<!--   </tr> -->

</table>
<br>
<!-- <div class="title">���ö��</div> -->
<!-- <table width="100%" cellspacing="2"> -->
<!--   <tr> -->
<!--     <td>���ö�ȣ�<font>��<? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = '';$_tmp = $this->magic_vars['acc']['credit'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font> </td> -->
<!--     <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;�������ö�ȣ�<font>��<? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = '';$_tmp = $this->magic_vars['acc']['credit_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td> -->
<!--   </tr> -->
<!-- </table> -->
				<? unset($_magic_vars);unset($data); ?>
				</div>
			</div>
		</div>
		<div class="user_right_r">
			<div class="list_2">
				<div class="title">���¹���</div>
				<div class="content">
					<ul>
						<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_id'=>'22');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
						<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"14:...");echo $_tmp;unset($_tmp); ?></a></li>
						<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
					</ul>
				</div>
			</div>
			<? $data = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::Getkf($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
			<? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username']=''; ;if (  $this->magic_vars['var']['username']): ?>
			<div class="user_right_info">
				<div class="title">������ƹ����������</div>
				<div class="content">
					<ul>
						<li><img src="<? if (!isset($this->magic_vars['var']['kefu_userid'])) $this->magic_vars['var']['kefu_userid'] = '';$_tmp = $this->magic_vars['var']['kefu_userid'];$_tmp = $this->magic_modifier("avatar",$_tmp,"big");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder" width="150px" height="160px"/></li>
						<li>��ƹ������ƣ�<? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></li>
						<li>��ƹ���QQ��
                            <a target="_blank" href="http://wpa.qq.com/msgrd?v=1&uin=<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?>&site=qq&menu=yes" >
                               <img border="0" src="http://wpa.qq.com/pa?p=1:<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?>:1" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ">
                            </a>
                        </li>
						<li>��ƹ��ʵ绰��<? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone'] = ''; echo $this->magic_vars['var']['phone']; ?></li>
					</ul>
				</div>
			</div>
			<? endif; ?>
			<? unset($_magic_vars);unset($data); ?>
<!-- 			<div class="list_2 clearfix"> -->
<!-- 				<div class="title">�������������</div>  -->
<!-- 				<div  class="content"> -->
<!-- 				<ul> -->
<!-- 				<? $data = array('user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/userinfo/userinfo.class.php');$this->magic_vars['var'] = userinfoClass::GetOne($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?> -->
<!-- 					<li><span><a href="/index.php?user&q=code/userinfo/building"><? if (!isset($this->magic_vars['var']['building_status'])) $this->magic_vars['var']['building_status']=''; ;if (  $this->magic_vars['var']['building_status']==1): ?><font color="#009900">����д</font><? else: ?><font color="#FF0000">δ��д</font><? endif; ?></a></span>��������</li> -->
<!-- 					<li><span><a href="/index.php?user&q=code/userinfo/company"><? if (!isset($this->magic_vars['var']['company_status'])) $this->magic_vars['var']['company_status']=''; ;if (  $this->magic_vars['var']['company_status']==1): ?><font color="#009900">����д</font><? else: ?><font color="#FF0000">δ��д</font><? endif; ?></a></span>��λ����</li> -->
<!-- 					<li><span><a href="/index.php?user&q=code/userinfo/firm"><? if (!isset($this->magic_vars['var']['firm_status'])) $this->magic_vars['var']['firm_status']=''; ;if (  $this->magic_vars['var']['firm_status']==1): ?><font color="#009900">����д</font><? else: ?><font color="#FF0000">δ��д</font><? endif; ?></a></span>˽Ӫҵ��</li> -->
<!-- 					<li><span><a href="/index.php?user&q=code/userinfo/finance"><? if (!isset($this->magic_vars['var']['finance_status'])) $this->magic_vars['var']['finance_status']=''; ;if (  $this->magic_vars['var']['finance_status']==1): ?><font color="#009900">����д</font><? else: ?><font color="#FF0000">δ��д</font><? endif; ?></a></span>����״��</li> -->
<!-- 					<li><span><a href="/index.php?user&q=code/userinfo/contact"><? if (!isset($this->magic_vars['var']['contact_status'])) $this->magic_vars['var']['contact_status']=''; ;if (  $this->magic_vars['var']['contact_status']==1): ?><font color="#009900">����д</font><? else: ?><font color="#FF0000">δ��д</font><? endif; ?></a></span>��ϵ��ʽ</li> -->
<!-- 					<li><span><a href="/index.php?user&q=code/userinfo/edu"><? if (!isset($this->magic_vars['var']['edu_status'])) $this->magic_vars['var']['edu_status']=''; ;if (  $this->magic_vars['var']['edu_status']==1): ?><font color="#009900">����д</font><? else: ?><font color="#FF0000">δ��д</font><? endif; ?></a></span>��������</li> -->
<!-- 				</ul> -->
<!-- 				<? unset($_magic_vars);unset($data); ?> -->
<!-- 				</div> -->
<!-- 			</div> -->
			
			
		
<!-- 			<div class="list_2"> -->
<!-- 				<div class="title">ý�屨��</div> -->
<!-- 				<div class="content"> -->
<!-- 					<ul> -->
<!-- 						<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_id'=>'59');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?> -->
<!-- 						<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"14:...");echo $_tmp;unset($_tmp); ?></a></li> -->
<!-- 						<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?> -->
<!-- 					</ul> -->
<!-- 				</div> -->
<!-- 			</div> -->
		</div>
	</div>
	<!--�ұߵ����� ����-->
</div>
</div>
<script type="text/javascript">
var message = '<? if (!isset($this->magic_vars['_U']['user_cache']['message'])) $this->magic_vars['_U']['user_cache']['message'] = '';$_tmp = $this->magic_vars['_U']['user_cache']['message'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>';

if(parseInt(message)>0){
	jQuery.jBox.messager('<a href="/index.php?user&q=code/message">����'+message+'��δ���ʼ�������鿴</a>', '��Ϣ��ʾ',0);
}
jQuery(function(){
	jQuery("[rel='tooltip']").tooltip();
});

</script>
<script src="/themes/soonmes/media/js/tooltip.js"></script>
<!--�û����ĵ�����Ŀ ����-->
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>