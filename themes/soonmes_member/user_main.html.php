<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}

<!--�û����ĵ�����Ŀ ��ʼ-->

 <div id="mainBody">
    <div class="accountPage">
      <div class="content">
        
		{include file="user_menu.html"}

	<!--��ߵĵ��� ����-->
	<div class="main">
	{article module="borrow" function="GetUserLog" user_id=0 var="acc"}
	<!--�ұߵ����� ��ʼ-->
	

		<div class="user_right_l ">
		{if $_G.user_result.real_status==0}
		<div class="alert alert-error" id="user_amange">
		 <a class="close" data-dismiss="alert">��</a>
			{$_G.system.con_webname}�����㣺�㻹û�н���ʵ����֤��
			<a href="/index.php?user&q=code/user/realname"><strong>���Ƚ���ʵ����֤</strong>
			</a>
			</div>
		{/if}
			<div class="user_right_lmain">
<!-- 				<div class="user_right_img"> -->
				<!-- 	<img src="{$_G.user_id|avatar}" height="98" width="98" class="picborder" style="border:1px dashed #999;padding:2px;"/> -->
<!-- 					<a href="index.php?user&q=code/user/avatar"><font color="#FF0000">[����ͷ��]</font></a> -->
<!-- 				</div> -->
				<div class="user_right_txt">
					<ul>
					<li>
					 <font color="red" size="5">�𾴵� {$_G.user_result.realname} �ͻ�</font>
					</li>
					<li>
					 Ͷ�ʵȼ���<font color="red" size="3">{if $acc.collection>1000000}Ͷ��ר��{elseif $acc.collection<1000000 && $acc.collection>800000}Ͷ������{elseif $acc.collection<800000 && $acc.collection>500000}Ͷ�ʴ���{else}Ͷ������{/if}</font>
					</li>
 <!-- 					<li><a href="/index.php?user&q=code/user/credit" style="float:left">{$_G.user_result.credit|credit}</a><font color="red">{$_G.user_result.credit}��</font> -->
<!--                        {$_G.user_result.typename} -->
<!--                      </li> -->
<!-- 					<li style="overflow:hidden"> -->	
<!-- 							<div class="floatl"><span> ��&nbsp;&nbsp;&nbsp;֤��</span></div>  -->
<!-- 							<a href="/index.php?user&q=code/user/realname"><div class="credit_pic_card_{$_G.user_result.real_status|default:0}" title="{if $_G.user_result.real_status==1}ʵ������֤{else}δʵ����֤{/if}"></div></a> -->
<!--                             <a href="/index.php?user&q=code/user/phone_status" ><div class="credit_pic_phone_{if $_G.user_result.phone_status==1}1{else}0{/if}" title="{if $_G.user_result.phone_status==1}�ֻ�����֤{else}�ֻ�δ��֤{/if}"></div></a> -->
<!-- 							<a href="/index.php?user&q=code/user/email_status"><div class="credit_pic_email_{$_G.user_result.email_status|default:0}" title="{if $_G.user_result.email_status==1}��������֤{else}����δ��֤{/if}"></div></a> -->
<!-- 							<a href="/index.php?user&q=code/user/video_status"><div class="credit_pic_video_{$_G.user_result.video_status|default:0}" title="{if $_G.user_result.video_status==1}��Ƶ����֤{else}��Ƶδ��֤{/if}"></div></a> -->
<!-- 							<a href="/vip/index.html"><div class="credit_pic_vip_{if $_G.user_result.vip_status==1}1{else}0{/if}" title="{if $_G.user_result.vip_status==1}VIP{else}��ͨ��Ա{/if}"></div></a> -->
<!-- 							<a href="/index.php?user&q=code/user/scene_status"><div class="credit_pic_scene_{$_G.user_result.scene_status|default:0}" title="{if $_G.user_result.scene_status==1}��ͨ���ֳ���֤{else}δͨ���ֳ���֤{/if}"></div></a> -->
<!-- 						</li> -->
<!-- 						<li> -->
<!--                            <span style="color:red"> ���ö�ȣ�<font size="2">��{$acc.credit|default:0}</font></span> -->
<!--                         </li>  -->
						<li><span>����VIP���ޣ� <a href="/vip/index.html">{if $_G.user_result.vip_status==1}
                         {$_G.user_result.vip_verify_time|date_format:"Y-m-d"} �� 
						{$_G.user_result.vip_verify_time+60*60*24*365|date_format:"Y-m-d"}
                        {elseif $_G.user_result.vip_status==-1}VIP�����{else}<font color="#999999">����VIP</font></font>{/if}</a></li>
						<li><span>ϵͳ֪ͨ��</span><a href="/index.php?user&q=code/message"><font color="#FF0000">{$_U.user_cache.message}</font> ��δ����Ϣ</a>&nbsp; &nbsp; <a href="/index.php?user&q=code/user/request">{$_U.user_cache.friends_apply} ����������</a>
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
    <td width="35%"> <a href="#" rel="tooltip" title="�ܶ�=�������+������+���ս��">�˻��ܶ�</a>��<font>��{$acc.total|default:0}</font></td>
    <td width="65%"><a href="index.php?user&amp;q=code/account/log">�ʽ��¼��ѯ</a> 
	| <a href="index.php?user&amp;q=code/account">�˻��ʽ�����</a> 
	</td>
  </tr>
  <tr>
    <td><a href="#" rel="tooltip" title="��������ʾ��ǰ���˻��п�ʵ��������Ͷ��Ľ��">�������</a>��<font>��{$acc.use_money|default:0}</font></td>
    <td width="65%"><a href="index.php?user&amp;q=code/account/cash_new"><font style="font-size:12px;" ><strong>����</strong></font></a> <a href="index.php?user&amp;q=code/account/recharge_new"><font style="font-size:12px;" ><strong>��ֵ</font></strong> </a> <a href="/index.php?user&amp;q=code/account/bank">
            
            &nbsp;�����˻����� </a> <a href="/index.php?user&amp;q=code/account/recharge">
                &nbsp;��ֵ��¼��ѯ </a>
        &nbsp;<a href="/index.php?user&amp;q=code/account/cash">���ּ�¼��ѯ </a> </td>
  </tr>
  <tr>
    <td><a href="#" rel="tooltip" title="�������˻�����ʱ����Ľ�һ����Ͷ����(��δ�������)������VIP�ȴ���ƹ�����˵�">�����ܶ�</a>��<font>��{$acc.no_use_money|default:0}</font></td>
    <td width="65%"><a href="/index.php?user&amp;q=code/borrow/bid">���ڽ��е�Ͷ��</a> <a href="/index.php?user&amp;q=code/account/cash">�������������</a></td>
  </tr>
  
<!--   <tr> -->
<!--     <td><a href="#" rel="tooltip" title="�����ֱ�����ڵֿ������������û���U�ܵȣ���Ҫ��Դ�����³�ֵ�Ľ���(�������֮���ĺ��)">���ú��</a>��<font>��{$_G.user_result.hongbao}</font></td> -->
<!--     <td width="65%"></td> -->
<!--   </tr> -->
  
 </table>
  <br>
<div class="title">���Ĵ�������</div>
<table width="100%" cellspacing="2">
  <tr>
    <td><a href="#" rel="tooltip" title="�����ܶ���ָ��ǰ�û����н�������δ�ջصĽ��(��������+��Ϣ)">�����ܶ�</a>��<font>��{$acc.collection|round:2|default:0}</font></td>
    <td width="65%"><a href="#" rel="tooltip" title="������Ϣ��ָ��ǰ�û����ս���е���Ϣ����">&nbsp;&nbsp;&nbsp;&nbsp;������Ϣ</a>��<font>��{$acc.collection_interest0|round:2|default:0}</font></td>
  </tr>
  <tr>
    <td>������ս�<font>{$acc.new_collection_account|round:2|default:0}</font></td>
    <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;�������ʱ�䣺<font>{$acc.new_collection_time|date_format:"Y-m-d"}</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?user&q=code/borrow/gathering&status=0"><strong><font color="red">��Ҫ�տ�</font></strong></a></td>
  </tr>
  <tr>
    <td>��׬��Ϣ��<font>��{$acc.collection_interest1|round:2|default:0}</font> </td>
<!--     <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;��׬������<font>��{$acc.award_add|round:2|default:0}</font></td> -->
  </tr>
<!--   <tr> -->
<!--     <td>����ܶ<font>��{$acc.borrow_num|round:2|default:0}</font></td> -->
<!--     <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;�����ܶ<font>��{$acc.wait_payment|round:2|default:0}</font> </td> -->
<!--   </tr> -->
<!--   <tr> -->
<!--     <td>���������<font>��{$acc.new_repay_account|round:2|default:0}</font></td> -->
<!--     <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;�������ʱ�䣺<font>{$acc.new_repay_time|date_format:"Y-m-d"|default:""}</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?user&q=code/borrow/repaymentplan"><strong><font color="red">��Ҫ����</font></strong></a></td> -->
<!--   </tr> -->

</table>
<br>
<!-- <div class="title">���ö��</div> -->
<!-- <table width="100%" cellspacing="2"> -->
<!--   <tr> -->
<!--     <td>���ö�ȣ�<font>��{$acc.credit|default:0}</font> </td> -->
<!--     <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;�������ö�ȣ�<font>��{$acc.credit_use|default:0}</font></td> -->
<!--   </tr> -->
<!-- </table> -->
				{/article}
				</div>
			</div>
		</div>

			
</div>

</div>
</div>
</div>
<script type="text/javascript">
var message = '{$_U.user_cache.message|default:0}';
{literal}
if(parseInt(message)>0){
	jQuery.jBox.messager('<a href="/index.php?user&q=code/message">����'+message+'��δ���ʼ�������鿴</a>', '��Ϣ��ʾ',0);
}
jQuery(function(){
	jQuery("[rel='tooltip']").tooltip();
});
{/literal}
</script>
<script src="/themes/soonmes/media/js/tooltip.js"></script>
<!--�û����ĵ�����Ŀ ����-->
{include file="user_footer.html"}