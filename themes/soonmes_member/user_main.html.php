<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}

<!--用户中心的主栏目 开始-->

 <div id="mainBody">
    <div class="accountPage">
      <div class="content">
        
		{include file="user_menu.html"}

	<!--左边的导航 结束-->
	<div class="main">
	{article module="borrow" function="GetUserLog" user_id=0 var="acc"}
	<!--右边的内容 开始-->
	

		<div class="user_right_l ">
		{if $_G.user_result.real_status==0}
		<div class="alert alert-error" id="user_amange">
		 <a class="close" data-dismiss="alert">×</a>
			{$_G.system.con_webname}提醒你：你还没有进行实名认证。
			<a href="/index.php?user&q=code/user/realname"><strong>请先进行实名认证</strong>
			</a>
			</div>
		{/if}
			<div class="user_right_lmain">
<!-- 				<div class="user_right_img"> -->
				<!-- 	<img src="{$_G.user_id|avatar}" height="98" width="98" class="picborder" style="border:1px dashed #999;padding:2px;"/> -->
<!-- 					<a href="index.php?user&q=code/user/avatar"><font color="#FF0000">[更换头像]</font></a> -->
<!-- 				</div> -->
				<div class="user_right_txt">
				<ul class="oldStyle">
                  <li>
					 <h3>尊敬的 {$_G.user_result.realname} 客户</h3>
					</li>
					<li>
					 <strong>投资等级：</strong>{if $acc.collection>1000000}投资专家{elseif $acc.collection<1000000 && $acc.collection>800000}投资能手{elseif $acc.collection<800000 && $acc.collection>500000}投资达人{else}投资新手{/if}
					</li>
 <!-- 					<li><a href="/index.php?user&q=code/user/credit" style="float:left">{$_G.user_result.credit|credit}</a><font color="red">{$_G.user_result.credit}分</font> -->
<!--                        {$_G.user_result.typename} -->
<!--                      </li> -->
<!-- 					<li style="overflow:hidden"> -->	
<!-- 							<div class="floatl"><span> 认&nbsp;&nbsp;&nbsp;证：</span></div>  -->
<!-- 							<a href="/index.php?user&q=code/user/realname"><div class="credit_pic_card_{$_G.user_result.real_status|default:0}" title="{if $_G.user_result.real_status==1}实名已认证{else}未实名认证{/if}"></div></a> -->
<!--                             <a href="/index.php?user&q=code/user/phone_status" ><div class="credit_pic_phone_{if $_G.user_result.phone_status==1}1{else}0{/if}" title="{if $_G.user_result.phone_status==1}手机已认证{else}手机未认证{/if}"></div></a> -->
<!-- 							<a href="/index.php?user&q=code/user/email_status"><div class="credit_pic_email_{$_G.user_result.email_status|default:0}" title="{if $_G.user_result.email_status==1}邮箱已认证{else}邮箱未认证{/if}"></div></a> -->
<!-- 							<a href="/index.php?user&q=code/user/video_status"><div class="credit_pic_video_{$_G.user_result.video_status|default:0}" title="{if $_G.user_result.video_status==1}视频已认证{else}视频未认证{/if}"></div></a> -->
<!-- 							<a href="/vip/index.html"><div class="credit_pic_vip_{if $_G.user_result.vip_status==1}1{else}0{/if}" title="{if $_G.user_result.vip_status==1}VIP{else}普通会员{/if}"></div></a> -->
<!-- 							<a href="/index.php?user&q=code/user/scene_status"><div class="credit_pic_scene_{$_G.user_result.scene_status|default:0}" title="{if $_G.user_result.scene_status==1}已通过现场认证{else}未通过现场认证{/if}"></div></a> -->
<!-- 						</li> -->
<!-- 						<li> -->
<!--                            <span style="color:red"> 信用额度：<font size="2">￥{$acc.credit|default:0}</font></span> -->
<!--                         </li>  -->
<!-- 						<li><span>您的VIP期限： <a href="/vip/index.html">{if $_G.user_result.vip_status==1} -->
<!--                          {$_G.user_result.vip_verify_time|date_format:"Y-m-d"} 到  -->
<!-- 						{$_G.user_result.vip_verify_time+60*60*24*365|date_format:"Y-m-d"} -->
<!--                         {elseif $_G.user_result.vip_status==-1}VIP审核中{else}<font color="#999999">不是VIP</font></font>{/if}</a></li> -->
						  <li><strong>系统通知：</strong><a href="/index.php?user&q=code/message"><font color="#FF0000">{$_U.user_cache.message}</font> 封未读信息</a>&nbsp; &nbsp; <a href="/index.php?user&q=code/user/request">{$_U.user_cache.friends_apply} 个好友邀请</a>
<!--                                <a href="/index.php?user&q=code/account/recharge_new"><font color="#FF0000">[账号充值]</font></a> -->
<!--                                <a href="/index.php?user&q=code/borrow/limitapp&type=credit"><font color="#FF0000">[额度申请]</font></a> -->
                        </li>
					</ul>
				</div>
			</div>
			<div class="user_right_li" >
<div class="content">
<br><div class="title"><a href="/index.php?user&q=code/account">您的账户详情</a> </div>
<table width="100%" cellspacing="2">
  <tr>
    <td width="35%"> <a href="#" rel="tooltip" title="总额=可用余额+冻结金额+待收金额">账户总额</a>：<font>￥{$acc.total|default:0}</font></td>
    <td width="65%"><a href="index.php?user&amp;q=code/account/log">资金记录查询</a> 
	| <a href="index.php?user&amp;q=code/account">账户资金详情</a> 
	</td>
  </tr>
  <tr>
    <td><a href="#" rel="tooltip" title="可用余额表示当前您账户中可实际用来来投标的金额">可用余额</a>：<font>￥{$acc.use_money|default:0}</font></td>
    <td width="65%"><a href="index.php?user&amp;q=code/account/cash_new"><font style="font-size:12px;" ><strong>提现</strong></font></a> <a href="index.php?user&amp;q=code/account/recharge_new"><font style="font-size:12px;" ><strong>充值</font></strong> </a> <a href="/index.php?user&amp;q=code/account/bank">
            
            &nbsp;银行账户设置 </a> <a href="/index.php?user&amp;q=code/account/recharge">
                &nbsp;充值记录查询 </a>
        &nbsp;<a href="/index.php?user&amp;q=code/account/cash">提现记录查询 </a> </td>
  </tr>
  <tr>
    <td><a href="#" rel="tooltip" title="冻结金额账户中暂时冻结的金额，一般是投标中(尚未满标审核)或申请VIP等待理财顾问审核等">冻结总额</a>：<font>￥{$acc.no_use_money|default:0}</font></td>
    <td width="65%"><a href="/index.php?user&amp;q=code/borrow/bid">正在进行的投标</a> <a href="/index.php?user&amp;q=code/account/cash">正在申请的提现</a></td>
  </tr>
  
<!--   <tr> -->
<!--     <td><a href="#" rel="tooltip" title="红包可直接用于抵扣提现手续费用或购买U盾等，主要来源于线下充值的奖励(奖励万分之三的红包)">可用红包</a>：<font>￥{$_G.user_result.hongbao}</font></td> -->
<!--     <td width="65%"></td> -->
<!--   </tr> -->
  
 </table>
  <br>
<div class="title">您的待收详情</div>
<table width="100%" cellspacing="2">
  <tr>
    <td><a href="#" rel="tooltip" title="待收总额是指当前用户所有借款标中尚未收回的金额(包括本金+利息)">待收总额</a>：<font>￥{$acc.collection|round:2|default:0}</font></td>
    <td width="65%"><a href="#" rel="tooltip" title="待收利息是指当前用户待收金额中的利息部分">&nbsp;&nbsp;&nbsp;&nbsp;待收利息</a>：<font>￥{$acc.collection_interest0|round:2|default:0}</font></td>
  </tr>
  <tr>
    <td>最近待收金额：<font>{$acc.new_collection_account|round:2|default:0}</font></td>
    <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;最近待收时间：<font>{$acc.new_collection_time|date_format:"Y-m-d"}</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?user&q=code/borrow/gathering&status=0"><strong><font color="red">我要收款</font></strong></a></td>
  </tr>
  <tr>
    <td>已赚利息：<font>￥{$acc.collection_interest1|round:2|default:0}</font> </td>
<!--     <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;已赚奖励：<font>￥{$acc.award_add|round:2|default:0}</font></td> -->
  </tr>
  <tr>
    <td>借款总额：<font>￥{$acc.borrow_num|round:2|default:0}</font></td>
    <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;待还总额：<font>￥{$acc.wait_payment|round:2|default:0}</font> </td>
  </tr>
  <tr>
    <td>最近待还金额：<font>￥{$acc.new_repay_account|round:2|default:0}</font></td>
    <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;最近待还时间：<font>{$acc.new_repay_time|date_format:"Y-m-d"|default:""}</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?user&q=code/borrow/repaymentplan"><strong><font color="red">我要还款</font></strong></a></td>
  </tr>

</table>
<br>
<!-- <div class="title">信用额度</div> -->
<!-- <table width="100%" cellspacing="2"> -->
<!--   <tr> -->
<!--     <td>信用额度：<font>￥{$acc.credit|default:0}</font> </td> -->
<!--     <td width="65%">&nbsp;&nbsp;&nbsp;&nbsp;可用信用额度：<font>￥{$acc.credit_use|default:0}</font></td> -->
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
	jQuery.jBox.messager('<a href="/index.php?user&q=code/message">您有'+message+'封未读邮件！点击查看</a>', '信息提示',0);
}
jQuery(function(){
	jQuery("[rel='tooltip']").tooltip();
});
{/literal}
</script>
<script src="/themes/soonmes/media/js/tooltip.js"></script>
<!--用户中心的主栏目 结束-->
{include file="user_footer.html"}