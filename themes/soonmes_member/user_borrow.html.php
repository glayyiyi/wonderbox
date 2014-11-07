<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}
 <div id="mainBody">
    <div class="accountPage">
      <div class="content">
		{include file="user_menu.html"}
	
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="main">
		<div class="tabBar">
			{if $_U.query_type=="repayment" || $_U.query_type=="repaymentplan" || $_U.query_type=="loandetail" || $_U.query_type=="repaymentyes" || $_U.query_type=="repayment_view" }
			<ul id="tab" class="list-tab clearfix">
				<li {if $_U.query_type=="repayment"} class="cur"{/if}><a href="{$_U.query_url}/repayment">正在还款的借款</a></li>
				<li {if $_U.query_type=="repaymentplan"} class="cur"{/if}><a href="{$_U.query_url}/repaymentplan">还款明细账</a></li>
				<li {if $_U.query_type=="loandetail"} class="cur"{/if}><a href="{$_U.query_url}/loandetail">借款明细账</a></li>
				<li {if $_U.query_type=="repaymentyes"} class="cur"{/if}><a href="{$_U.query_url}/repaymentyes">已还完的借款</a></li>
				{if $magic.request.id!=""} 
				<li {if $_U.query_type=="repayment_view"} class="cur"{/if}>标的还款信息</li>
				{/if}
			</ul>
			{elseif $_U.query_type=="succes" || $_U.query_type=="gathering" || $_U.query_type=="lenddetail" || $_U.query_type=="succesyes"}
			<ul class="list-tab clearfix">
				<li {if $magic.request.type=="wait" && $_U.query_type=="succes"} class="cur"{/if}><a href="{$_U.query_url}/succes&type=wait">正在收款的借款</a></li>
				<li {if $_U.query_type=="gathering" && $magic.request.status==0} class="cur"{/if} ><a href="{$_U.query_url}/gathering&status=0">未收款明细账</a></li>
				<li {if $_U.query_type=="gathering" && $magic.request.status==1} class="cur"{/if} ><a href="{$_U.query_url}/gathering&status=1">已收款明细账</a></li>
				<li {if $_U.query_type=="lenddetail"} class="cur"{/if} ><a href="{$_U.query_url}/lenddetail">借出明细账</a></li>
				<li {if $magic.request.type=="yes" } class="cur"{/if} ><a href="{$_U.query_url}/succes&type=yes">已还清的借款</a></li>
			</ul>
			{elseif  $_U.query_type=="bid" || $_U.query_type=="appraisal" || $_U.query_type=="attention" ||  $_U.query_type=="tender_reply"}
			<ul class="list-tab clearfix">
				<li {if $_U.query_type=="bid"} class="cur"{/if}><a href="{$_U.query_url}/bid">正在投标的借款</a></li>
			</ul>
			{elseif $_U.query_type=="tender_vouch" || $_U.query_type=="tender_vouch_finish" }
			<ul class="list-tab clearfix">
			<li {if $_U.query_type=="tender_vouch"} class="cur"{/if}><a href="{$_U.query_url}/tender_vouch">投标/复审担保标</a></li>
			<li {if $magic.request.status=="0"} class="cur"{/if}><a href="{$_U.query_url}/tender_vouch_finish&status=0">还款中的担保标</a></li>
			<li {if $magic.request.status=="1"} class="cur"{/if}><a href="{$_U.query_url}/tender_vouch_finish&status=1">已还完的担保标</a></li></ul>
			{elseif $_U.query_type=="myuser" || $_U.query_type=="myuserrepay" || $_U.query_type=="myuser_account" }
			<ul class="list-tab clearfix">
				<li ><a href="index.php?user&q=code/user/myuser">我的理财顾问</a></li>
				<li {if $_U.query_type=="myuserrepay" || $_U.query_type=="myuser"} class="cur"{/if}><a href="index.php?user&q=code/borrow/myuser">客户借款</a></li>
				<li {if $_U.query_type=="myuser_account"} class="cur"{/if}><a href="index.php?user&q=code/borrow/myuser_account">统计信息</a></li>
			</ul>
			{else}
			<ul class="list-tab clearfix">
				<li {if $_U.query_type=="publish"} class="cur"{/if}><a href="{$_U.query_url}/publish">正在招标的借款</a></li>
				<li {if $_U.query_type=="unpublish"} class="cur"{/if}><a href="{$_U.query_url}/unpublish">尚未发布的借款</a></li>
				<li {if $_U.query_type=="limitapp"} class="cur"{/if}><a href="{$_U.query_url}/limitapp">额度申请</a></li>
			</ul>
			{/if}
		</div>
		
		<div class="user_right_main">
		
	
		{if $_U.query_type=="publish"}
		<!--正在招标 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo('')" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>类型</td>
					<td>金额(元)</td>
					<td>年利率</td>
					<td>期限</td>
					<td>发布时间</td>
					<td>进度</td>
					<td>状态</td>
					<td>操作</td>
				</tr>
				{list module="borrow" var="loop" function ="GetList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" status="1,2,4,5,6" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if} >
					<td width="70"  ><a href="/invest/a{$item.id}.html" title="{$item.name}" target="_blank">{$item.name|truncate:12}</a></td>
					<td>{if $item.is_vouch==1}担保标{else}普通标{/if}</td>
					<td>{$item.account}元</td>
					<td>{$item.apr} %</td>
					<td>{if $item.isday==1}{$item.time_limit_day}天{else}{$item.time_limit}个月{/if}</td>
					<td>{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
					<td><div class="rate_bg floatl" align="left">
							<div class="rate_tiao" style=" width:{$item.scale|default:0}%"></div>
						</div><span class="floatl">{$item.scale}%</span></td>
					<td>{if $item.status==0}发布审批中{elseif $item.status==1}{if $item.account_yes==$item.account}满标审核中{else}正在募集{/if}{elseif $item.status==2}审核失败{elseif $item.status==3}已满标{elseif $item.status==4}满标审核失败{elseif $item.status==5}已撤回{/if}</td>
					<td>{if $item.status==0}<a href="#" onclick="javascript:if(confirm('确定要撤回此招标')) location.href='{$_U.query_url}/cancel&id={$item.id}'">撤回</a>{else}{if $item.status==1 && ($item.biao_type!='lz' || ($item.biao_type=='lz' && $item.account_yes==0))}<a href="#" onclick="javascript:if(confirm('确定要撤回此招标')) location.href='{$_U.query_url}/cancel&id={$item.id}'">撤回</a>{else}-{/if}{/if}</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="9" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		
		<!--正在招标 结束-->
		
		
		<!--尚未发布 开始-->
		{elseif $_U.query_type=="unpublish"}
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>金额(元)</td>
					<td>年利率</td>
					<td>期限</td>
					<td>发布时间</td>
					<td>操作</td>
				</tr>
				{list module="borrow" var="loop" function ="GetList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" status="-1,0"}
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td>{$item.name}</td>
					<td>{$item.account}(元)</td>
					<td>{$item.apr} %</td>
					<td>{if $item.isday==1}{$item.time_limit_day}天{else}{$item.time_limit}个月{/if}</td>
					<td>{$item.addtime|date_format:"Y-m-d"}</td>
					<td><a href="#" onclick="javascript:if(confirm('确定要删除此招标')) location.href='{$_U.query_url}/del&id={$item.id}'">删除</a></td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--尚未发布 结束-->
		
		{elseif $_U.query_type=="repayment" ||  $_U.query_type=="repaymentyes"}
		<!--正在还款的借款 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo()" />
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
			  <tr class="head" >
					<td>标题</td>
					<td>协议</td>
					<td>借款金额</td>
					<td>年利率</td>
					<td>还款期限</td>
					<td>偿还本息</td>
					<td>已还本息</td>
					<td>未还本息</td>
					<td>操作</td>
				</tr>
				{if $_U.query_type=="repayment"}
				{list module="borrow" var="loop" function ="GetList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" type="now" status="3"}
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td title="{$item.name}"><a href="/invest/a{$item.id}.html" target="_blank">{$item.name|truncate:10}</a></td>
					<td><a href="/protocol/index.html?borrow_id={$item.id}" target="_blank">查看协议</a></td>
					<td>{$item.account}(元)</td>
					<td>{$item.apr} %</td>
					<td>{if $item.isday==1}{$item.time_limit_day}天{else}{$item.time_limit}个月{/if}</td>
					<td>￥{$item.repayment_account}</td>
					<td>￥{$item.repayment_yesaccount|default:0}</td>
					<td>￥{$item.repayment_noaccount}</td>
					<td><a href="{$_U.query_url}/repayment_view&id={$item.id}">还款明细</a></td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="9" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
				{else}
				{list module="borrow" var="loop" function ="GetList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" type="yes" status="3"}
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td title="{$item.name}"><a href="/invest/a{$item.id}.html" target="_blank">{$item.name|truncate:10}</a></td>
					<td><a href="/protocol/index.html?borrow_id={$item.id}" target="_blank">查看协议</a></td>
					<td>{$item.account}(元)</td>
					<td>{$item.apr} %</td>
					<td>{if $item.isday==1}{$item.time_limit_day}天{else}{$item.time_limit}个月{/if}</td>
					<td>￥{$item.repayment_account}</td>
					<td>￥{$item.repayment_yesaccount|default:0}</td>
					<td>￥{$item.repayment_noaccount}</td>
					<td><a href="{$_U.query_url}/repayment_view&id={$item.id}" >还款明细</a></td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="9" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
				{/if}
			</form>	
		</table>
		<!--正在还款的借款 结束-->
		{elseif $_U.query_type=="repaymentplan"}
		<!--还款明细 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo()" />
		</div>
		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>第几期</td>
					<td>应还款日期</td>
					<td>本期应还本息</td>
					<td>利息</td>
					<td>滞纳金</td>
					<td>逾期利息</td>
					<td>逾期天数</td>
					<td>还款状态</td>
					<td>操作</td>
				</tr>
				{list module="borrow" var="loop" function ="GetRepaymentList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" order="repayment_time" status="0,2" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td title="{$item.borrow_name}">{$item.borrow_name|truncate:10}</td>
					<td>{$item.order+1}/{$item.time_limit}</td>
					<td>{$item.repayment_time|date_format:"Y-m-d"}</td>
					<td>￥{$item.repayment_account|round:2}</td>
					<td>￥{$item.interest|round:2}</td>
					<td>￥{$item.forfeit}</td>
					<td>￥{$item.late_interest}</td>
					<td>{$item.late_days}天</td>
					<td>{if $item.status==0}待还款{elseif $item.status==2}网站先垫付{else}已还款{/if}</td>
					<td>{if $item.status==0 || $item.status==2}<a href="javascript:repay('{$_U.query_url}/repay&id={$item.id}')">还款</a>{else}-{/if}</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--还款明细 结束-->
		
		
		{elseif $_U.query_type=="myuserrepay"}
		<!--我的客户 开始-->
		
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>第几期</td>
					<td>所属用户</td>
					<td>应还款日期</td>
					<td>本期应还本息</td>
					<td>利息</td>
					<td>滞纳金</td>
					<td>逾期利息</td>
					<td>逾期天数</td>
					<td>还款状态</td>
					<td>操作</td>
				</tr>
				{list module="borrow" var="loop" function ="GetRepaymentList" showpage="3" user_id="$magic.request.user_id" keywords="request" kefu_userid= "$_G.user_id" dotime1="request" dotime2="request" order="repayment_time" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td title="{$item.borrow_name}"><a href="/invest/a{$item.borrow_id}.html" target="_blank">{$item.borrow_name|truncate:10}</a></td>
					<td>{$item.order+1}/{$item.time_limit}</td>
					<td><a href="/u/{$item.user_id}" target="_blank">{$item.username}</a></td>
					<td>{$item.repayment_time|date_format:"Y-m-d H:i"}</td>
					<td>￥{$item.repayment_account}</td>
					<td>￥{$item.interest}</td>
					<td>￥{$item.forfeit}</td>
					<td>￥{$item.late_interest}</td>
					<td>{$item.late_days}天</td>
					<td>{if $item.status==0}待还款{else}已还款{/if}</td>
					<td>{if $item.status==0}<a href="#" onclick="javascript:if(confirm('你确定要偿还此借款吗？')) location.href='{$_U.query_url}/repay&id={$item.id}'">还款</a>{else}-{/if}</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--我的客户 结束-->
		
		
		{elseif $_U.query_type=="loandetail"}
		<!--借款明细 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		投资者：<input type="text" name="username" id="username" size="15" value="{$magic.request.username|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo()" class="btn-action" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>投资者 </td>
					<td>借入总额</td>
					<td>还款总额</td>
					<td>已还利息</td>
					<td>已还滞纳金</td>
					<td>待还总额</td>
					<td>待还利息</td>
				</tr>
				{list module="borrow" var="loop" function ="GetTenderUserList" showpage="3" user_id="0" username="request" borrow_status=3}
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td>{$item.username}</td>
					<td><font color="#FF0000">￥{$item.account|round:2}</font></td>
					<td>￥{$item.repayment_yesaccount|round:2|default:0}</td>
					<td>￥{$item.repayment_yesinterest|round:2|default:0}</td>
					<td>￥{$item.forfeit|round:2|default:0}</td>
					<td>￥{$item.wait_account|round:2|default:0}</td>
					<td>￥{$item.wait_interest|round:2|default:0}</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--借款明细 结束-->
		
		{elseif $_U.query_type=="loanermsg"}
		<!--投资者留言 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		您现在查看的是:<select name="status"> <option value="">所有回复</option> <option value="0">等我回复</option> <option value="1">已回复</option></select>
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标的标题</td>
					<td>留言者</td>
					<td>留言内容</td>
					<td>留言时间</td>
					<td>留言状态</td>
					<td>操作</td>
				</tr>
				{list module="borrow" var="loop" function ="GetList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td>{$item.name}</td>
					<td>{$item.account}(元)</td>
					<td>{$item.apr} %</td>
					<td>{if $item.isday==1}{$item.time_limit_day}天{else}{$item.time_limit}个月{/if}</td>
					<td>{$item.addtime|date_format:"Y-m-d"}</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--投资者留言 结束-->

		{elseif $_U.query_type=="limitapp"}
		<!--额度申请 开始-->
		<div class="well"> 
		额度申请原则上每次最多申请1万
		</div>
		{if $_G.user_result.real_status!=1}
			<div align="center" ><font color="#FF0000"><br/>
		<br/>
		{$_G.system.con_webname}提醒你：</font>你还没有通过实名认证，请先通过<a href="/index.php?user&q=code/user/realname"><strong>实名认证!</strong></a>
		</div><br/>
              {elseif $_G.user_result.vip_status!=1}
              <div align="center"><font color="#FF0000"> <br/>
              {$_G.system.con_webname}提醒你：</font>你还不是VIP会员，请先成为<a href="/vip/index.html"><strong>VIP会员</strong></a>。</div><br /><br /><br />
		{else}
		{article module="borrow" function="GetAmountApplyOne" user_id="0" var="var"}
		<form method="post" action="" name="form1">
		<div class="user_right_border">
			<div class="e">申请者：</div>
			<div class="c">
				{$_G.user_result.username}
			</div>
		</div>
		{if $var.status==2}
		<div class="user_right_border">
			<div class="e"> 状态：</div>
			<div class="c">
				正在审核中
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"> 申请类型：</div>
			<div class="c">
				{if $var.type=="tender_vouch"}投资担保额度{elseif $var.type=="borrow_vouch"}借款担保额度{else}借款信用额度{/if}
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"> 申请金额：</div>
			<div class="c">
				{$var.account}
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">详细说明：</div>
			<div class="c">
				{$var.content}
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">其它地方借款详细说明：</div>
			<div class="c">
			{$var.remark}
			</div>
		</div>
		{else}
		<div class="user_right_border">
			<div class="e"> 申请类型：</div>
			<div class="c">
				<select name="type"><option value="credit" {if $magic.request.type=="credit"} selected="selected"{/if}>借款信用额度</option>
				</select>
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"> 申请金额：</div>
			<div class="c">
				<input type="text" name="account" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">详细说明：</div>
			<div class="c">
				<textarea cols="40" name="content" style="height:50px"></textarea>
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">其它地方借款详细说明：</div>
			<div class="c">
			<textarea cols="40" name="remark" style="height:50px"></textarea>
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input type="button" class="btn-action"  name="name" id="sub-limitapp" value="确认提交" size="30" /> 
			</div>
		</div>
		{literal}
		<script type="text/javascript">
			document.getElementById("sub-limitapp").onclick = function(){
				var frm = document.forms['form1'];
				var account = frm.elements['account'].value;
				account = parseFloat(account);
				if(isNaN(account) || account<1){
					jQuery.jBox.info('请输入正确的申请金额','提示');
				}else if(parseFloat(account)<0){
					jQuery.jBox.info('申请金额格式不正确','提示');
					frm.elements['account'].value=0;
				}else{
					jQuery,jBox.tip('提交中','loading');
					frm.submit();
				}
			}
		</script>
		{/literal}
		{/if}
		</form>
		
		{/article}
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>申请时间</td>
					<td>申请类型</td>
					<td>申请金额(元)</td>
					<td>通过金额(元)</td>
					<td>备注说明</td>
					<td>状态</td>
					<td>审核时间</td>
					<td>审核备注</td>
				</tr>
				{list module="borrow" var="loop" function ="GetAmountApplyList" showpage="3" user_id="0"  }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td>{$item.addtime|date_format}</td>
					<td width="70">{if $item.type=="tender_vouch"}投资担保额度{elseif $item.type=="borrow_vouch"}借款担保额度{else}借款信用额度{/if}</td>
					<td>{$item.account}</td>
					<td>{$item.newaccount}</td>
					<td  width="200">{$item.content}</td>
					<td>{if $item.status==0}审核不通过{elseif $item.status==1}审核通过{else}正在审核{/if}</td>
					<td>{$item.verify_time|date_format} </td>
					<td>{$item.verify_remark}</td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<div class="user_right_foot">
		* 温馨提示：额度申请后 无论申请是否批准 必须隔一个月后才能再次申请，每个月只能申请一次如有问题,请与我们联系
		</div>
		<!--额度申请 结束-->
		{/if}
		{elseif $_U.query_type=="succes" }
		<!--成功投资 开始-->
		{article module="borrow" function="GetUserLog" user_id="0"}
		<div class="alert alert-block">结果统计：借出总额￥{$var.success_account|default:0} 已收总额￥{$var.collection_capital1|default:0} 未收总额￥{$var.collection_capital0|default:0} 已收利息￥{$var.collection_interest1|default:0} 未收利息￥{$var.collection_interest0|default:0} </div>
		{/article}
		<div class="well" > 
		发布时间：<input type="text" name="dotime1" id="dotime1"  size="15" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>   关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" />
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>借款者</td>
<!-- 					<td>借款者积分</td> -->
					<td>年利率</td>
					<td>期限</td>
					<td>投标时间</td>
					<td>应收本息</td>
					<td>借出金额</td>
				</tr>
				{list module="borrow" var="loop" function ="GetBorrowSucces" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" type="$magic.request.type" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td title="{$item.borrow_name}"><a href="/invest/a{$item.id}.html" target="_blank">{$item.borrow_name|truncate:10}</a></td>
					<td><a href="/index.php?user&q=code/message/sent&receive={$item.username}">{$item.username}</a></td>
<!-- 					<td>{$item.credit|credit}{$item.credit}分</td> -->
					<td>{$item.apr}%</td>
					<td>{if $item.isday==1}{$item.time_limit_day}天{else}{$item.time_limit}个月{/if}</td>
					<td>{$item.tender_time|date_format:"Y-m-d H:i:s"}</td>
					<td>￥{$item.repayment_account}</td>
					<td>￥{$item.anum}</td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="11" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--成功投资 结束-->
		
		{elseif $_U.query_type=="tender_vouch" }
		<!--成功担保 开始-->
		
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>借款者</td>
					<td>借款总额</td>
					<td>借款期限</td>
					<td>担保奖励</td>
					<td>担保总额</td>
					<td>担保时间</td>
					<td>状态</td>
				</tr>
				{list module="borrow" var="loop" function ="GetVouchList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" type="$magic.request.type" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td title="{$item.borrow_name}"><a href="/invest/a{$item.borrow_id}.html" target="_blank">{$item.borrow_name|truncate:10}</a></td>
					<td><a href="/index.php?user&q=code/message/sent&receive={$item.borrow_username}">{$item.borrow_username}</a></td>
					<td>￥{$item.borrow_account}</td>
					<td>{$item.borrow_period}个月</td>
					<td>￥{$item.award_account}</td>
					<td>￥{$item.account}</td>
					<td>{$item.addtime|date_format}</td>
					<td>{if $item.status==1}成功{elseif $item.status==2}<font color="#FF0000">失败</font>{else}待审核{/if}</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="11" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--担保明细 结束-->
		{elseif $_U.query_type=="tender_vouch_finish"}
		
 
</div>
		<div class="well" style="height:30px; padding-top:7px;"> 
		收款时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>借款者</td>
					<td>借款标题</td>
					<td>应还日期</td>
					<td>第几期/总期数</td>
					<td>总额</td>
					<td>担保总额</td>
					<td>本金</td>
					<td>利息</td>
					<td>状态</td>
				</tr>
				{list module="borrow" var="loop" function ="GetVouchRepayList" showpage="3" vouch_userid="$_G.user_id" keywords="request" dotime1="request" dotime2="request" borrow_status=3 status="$magic.request.status" order="repay_time" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1}class="tr1"{/if}{if $item.mytime<=24*3600} style="color:red;"{/if}>
					<td>{$item.borrow_username}</td>
					<td><a href="/invest/a{$item.borrow_id}.html" target="_blank" title="{$item.borrow_name}">{$item.borrow_name|truncate:13}</a></td>
					<td>{$item.repayment_time|date_format:"Y-m-d"}</td>
					<td>{$item.order+1}/{$item.time_limit}</td>
					<td>￥{$item.repayment_account}</td>
					<td>￥{$item.repayment_account}</td>
					<td>￥{$item.capital}</td>
					<td>￥{$item.interest}</td>
					<td>{if $item.status==1}<font color="#666666">已还</font>{else}<font color="#FF0000">未还</font>{/if}</td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--担保明细 结束-->
		
		{elseif $_U.query_type=="gathering"}
		{article module="account" function="GetAccountAll" user_id="0"}
		<!--收款明细 开始-->
		<div class="user_help">
		<table class="table alert">
		 
		<tr>
			<td>待收总额：￥{$var.tender_wait|default:0}</td>
			<td>待收利息：￥{$var.tender_wait_interest|default:0} </td>
			 
		</tr>
	</table>
		
    {/article}
 
</div>
		<div class="well" style="height:30px; padding-top:7px;"> 
		收款时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>借款标题</td>
					<td>应收日期</td>
					<td>借款者</td>
					<td>当期/总数</td>
					<td>(待收本金</td>
					<td>+</td>
					<td>待收利息</td>
					<td>=</td>
					<td>待收总额)</td>
					<td>逾期利息</td>
					<td>逾期天数</td>
					<td>状态</td>
				</tr>
				{list module="borrow" var="loop" function ="GetCollectionList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" borrow_status=3 status="$magic.request.status" order="repay_time"}
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if} {if $item.mytime<=24*3600} style="color:red;"{/if}>
					<td><a href="/invest/a{$item.borrow_id}.html" target="_blank" title="{$item.borrow_name}">{$item.borrow_name|truncate:13}</a></td>
					<td>{$item.repay_time|date_format:"Y-m-d"}</td>
					<td>{$item.username}</td>
					<td  align="center">{$item.order+1}/{$item.time_limit}</td>
					<td>￥{$item.capital}</td>
					<td>+</td>
					<td>￥{$item.interest}</td>
					<td>=</td>
					<td>￥{$item.repay_account}</td>
					<td>￥{$item.late_interest|default:0  }</td>
					<td>{$item.late_days|default:0  }天</td>
					<td>{if $item.status==1}<font color="#666666">已还</font>{else}<font color="#FF0000">未还</font>{/if}</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="12" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--收款明细 结束-->
		
		{elseif $_U.query_type=="lenddetail"}
		<!--借出明细 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>协议号</td>
					<td>借款者</td>
					<td>借款标</td>
					<td>投资本金</td>
					<td>应收总额</td>
					<td>已收总额</td>
					<td>待收总额</td>
					<td>已收利息</td>
					<td>待收利息</td>
				</tr>
			{list module="borrow" var="loop" function ="GetTenderList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
<!-- 				<td><a href="/invest/a{$item.borrow_id}.html?doaction=success&borrow_id={$item.borrow_id}&tender_id={$item.id}">{$item.id}</a></td> -->
					<td><a href="#">{$item.id}</a></td>
					<td>{$item.op_username}</td>
					<td><a href="/invest/a{$item.borrow_id}.html">{$item.borrow_name|truncate:14}</a></td>
					<td>￥{$item.tender_account}</td>
					<td>￥{$item.repayment_account}</td>
					<td>￥{$item.repayment_yesaccount}</td>
					<td>￥{$item.wait_account  }</td>
					<td>￥{$item.repayment_yesinterest }</td>
					<td>￥{$item.wait_interest  }</td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--借出明细 结束-->
		
		{elseif $_U.query_type=="bid"}
		<!--正在投标的借款 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>借款者</td>
					<td>投标/有效金额</td>
<!-- 					<td>信用积分/投标时间 </td> -->
					<td>投标时间 </td>
					<td>进度</td>
					<td>状态 </td>
				</tr>
				{list module="borrow" var="loop" function ="GetTenderList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" borrow_status="1"}
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td style="line-height:21px;"><a href="/invest/a{$item.borrow_id}.html" target="_blank" title="{$item.borrow_name}">{$item.borrow_name|truncate:10}</a></td>
					<td style="line-height:21px;">借款者:{$item.op_username}</td>
					<td style="line-height:21px;">投标金额:￥{$item.money}<br />有效金额:<font color="#FF0000">￥{$item.tender_account}</font></td>
					
					<!--  <td style="line-height:25px;"><span><img src="{$_G.system.con_credit_picurl}{$item.credit_pic|default:credit_s11.gif}" title="{$item.credit_jifen|default:0}分" /></span><br />{$item.addtime|date_format:"Y-m-d H:i:s"}</td>-->
					<td style="line-height:25px;">{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
					<td style="line-height:21px;"><div class="rate_bg floatl" align="left">
							<div class="rate_tiao" style=" width:{$item.scale|default:0}%"></div>
						</div><span class="floatl">{$item.scale}%</span></td>
					<td style="line-height:21px;">{if $item.status==0}投标失败{else}{if $item.tender_account==$item.money}全部通过{else}部分通过{/if}{/if}</td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="10" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--正在投标的借款 结束-->
		
		{elseif $_U.query_type=="appraisal"}
		<!--我的评价 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action"  onclick="sousuo()" />
		</div>
		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题 </td>
					<td>借款者</td>
					<td>投标金额</td>
					<td>完成时间</td>
					<td>评价结果</td>
					<td>操作</td>
				</tr>
				{list module="borrow" var="loop" function ="GetList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td><strong>短期借款，提前还款</strong> </td>
					<td>op6778</td>
					<td><img src="/pic/rank_4.gif" /></td>
					<td>18%</td>
					<td>1个月</td>
					<td>50</td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--我的评价 结束-->

		{elseif $_U.query_type=="attention"}
		<!--我关注的借款 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		<select><option>进行中的借款</option><option>已结束的借款</option></select> 发布时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="{$magic.request.keywords|urldecode}" /> 
		<input value="搜索" type="submit" class="btn-action"   onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>图片</td>
					<td>标题</td>
					<td>金额(元)</td>
					<td>进度</td>
					<td>期限</td>
					<td>信用等级</td>
					<td>操作</td>
				{list module="borrow" var="loop" function ="GetList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td><strong>短期借款，提前还款</strong> </td>
					<td>op6778</td>
					<td><img src="/pic/rank_4.gif" /></td>
					<td>18%</td>
					<td>1个月</td>
					<td>50</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--我关注的借款 结束-->

		{elseif $_U.query_type=="tender_reply"}
		<!--投资者留言 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		您现在查看的是:<select name="status"> <option value="">所有回复</option> <option value="0">等我回复</option> <option value="1">已回复</option></select>
		<input value="搜索" type="submit" class="btn-action"  />
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标的标题</td>
					<td>留言者</td>
					<td>留言内容</td>
					<td>留言时间</td>
					<td>留言状态</td>
					<td>操作</td>
				</tr>
				{list module="borrow" var="loop" function ="GetList" showpage="3" user_id="0" keywords="request" dotime1="request" dotime2="request" }
				{foreach from="$loop.list" item="item"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td><strong>短期借款，提前还款</strong> </td>
					<td>op6778</td>
					<td><img src="/pic/rank_4.gif" /></td>
					<td>18%</td>
					<td>1个月</td>
					<td>50</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="8" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--投资者留言 结束-->
		
		{elseif $_U.query_type=="myuser"}
		<!--我的客户 结束-->
		<div class="user_help" > 
		{list  module="borrow" function="GetMyuserList" var="loop" user_id="0" showpage=3 epage=20 suser_id = "$magic.request.user_id"}
			
		<strong>总借款数：</strong> {$loop.total} 个
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>用户名</td>
					<td>真实姓名</td>
					<td>标题</td>
					<td>借款金额</td>
					<td>借款时间</td>
					<td>成功借款时间</td>
					<td>状态</td>
				</tr>
					{foreach from="$loop.list" item="item"}
				<tr >
					<td><a href="/u/{$item.user_id}" target="_blank">{$item.username}</a></td>
					<td><a href="{$_U.query_url}/myuser&user_id={$item.user_id}">{$item.realname}</a> </td>
					<td><a href="/invest/a{$item.id}.html" target="_blank">{$item.name}</a></td>
					<td>￥{$item.account}</td>
					<td>{$item.addtime|date_format}</td>
					<td>{$item.success_time|date_format|default:"-"}</td>
					<td>{if $item.status==5}取消{elseif $item.status==3}借款成功{elseif $item.status==2}审核失败{elseif $item.status==4}满标审核失败{elseif $item.status==1}正在招标中{/if}</td>
				</tr>
				{/loop}
				<tr >
					<td colspan="8" class="page">
						<div class="list_table_page">{$loop.showpage}</div>
					</td>
				</tr>
			</form>	
		</table>
		{/list}
		<!--我的客户 结束-->
		
		{elseif $_U.query_type=="myuser_account"}
		<!--我的客户统计 结束-->
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>时间</td>
					<td>成功借款</td>
					<td>成功投资</td>
					<td>VIP数</td>
				</tr>
					{loop  module="borrow" function="GetMyuserAcount" var="var" user_id="0" }
				<tr >
					<td>{$key|date_format:"Y-m"}</td>
					<td>￥{$var.borrow|default:0}</td>
					<td>￥{$var.tender|default:0}</td>
					<td>{$var.vip|default:0}个</td>
				</tr>
				{/loop}
			</form>	
		</table>
		{/list}
		<!--我的客户统计 结束-->
		
		<!--还款明细 开始-->
		{elseif $_U.query_type=="repayment_view"}
		<div class="user_right_border">
			<div class="l">标题：</div>
			<div class="c">
				{$_U.borrow_result.name}
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"> 借款金额：</div>
			<div class="rb">
				<font color="#FF0000"><strong>￥{$_U.borrow_result.account}</strong></font>
			</div>
			<div class="l"> 借款利率：</div>
			<div class="rb">
				 {$_U.borrow_result.apr}%
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"> 借款期限：</div>
			<div class="rb">
{if $_U.borrow_result.isday==1}{$_U.borrow_result.time_limit_day}天{else}{$_U.borrow_result.time_limit}个月{/if}
			</div>
			<div class="l"> 还款方式：</div>
			<div class="rb">
				 {$_U.borrow_result.style|linkage:"borrow_style"}
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"> 发布时间：</div>
			<div class="rb">
				 {$_U.borrow_result.addtime|date_format:"Y-m-d H:i:s"}
			</div>
			<div class="l"> 借款时间：</div>
			<div class="rb">
				 {$_U.borrow_result.verify_time|date_format:"Y-m-d H:i:s"}
			</div>
		</div>
		<!--还款明细 结束-->
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>序号</td>
					<td>计划还款日</td>
					<td>计划还款本息</td>
					<td>实还日期</td>
					<td>实还本息</td>
					<td>逾期罚息</td>
					<td>逾期天数</td>
					<td>状态</td>
					<td>操作</td>
				</tr>
				{loop module="borrow" function ="GetRepaymentList" " user_id="0" id="request" limit="all" order="order"}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td >{$var.order+1}</td>
					<td>{$var.repayment_time|date_format:"Y-m-d"}</td>
					<td>￥{$var.repayment_account}</td>
					<td>{$var.repayment_yestime|date_format:"Y-m-d H:i"|default:-}</td>
					<td>￥{$var.repayment_yesaccount}</td>
					<td>￥{$var.late_interest|default:0}</td>
					<td>{$var.late_days|default:0}天</td>
					<td>{if $var.status==1}已还{elseif $var.status==2}网上垫付{else}待还款{/if}</td>
					<td>{if $var.status==1}-{else}<a href="javascript:repay('{$_U.query_url}/repay&id={$var.id}')">还款</a>{/if}</td>
				</tr>
				{/loop}
			</form>	
		</table>
		<div class="user_right_foot">注：带有“(预计)”标记的金额说明该金额并非实际还款的金额，它只是假设以当前时间为还款时间的情况下用户将要还多少金额。 最终还款金额请以实际还款金额为准，因为预计的金额跟实际还款的金额可能会有所差异。 一次性全额还清将多支付下个月的利息。不记录还款状态，不增加还款积分。
		</div>
		{/if}
		<script>
var url = "{$_U.query_url}/{$_U.query_type}";
var type = "{$magic.request.type}";
var status = "{$magic.request.status}";
{literal}
function repay(url){
	if(confirm('你确定要偿还此借款吗？')){
		jQuery.jBox.tip('还款中，请不要关闭浏览器和刷新本页面','loading');
		location.href = url;
	}
}
function sousuo(){
	var _url = "";
	var dotime1 = jQuery("#dotime1").val();

	var keywords = jQuery("#keywords").val();
	var username = jQuery("#username").val();
	var dotime2 = jQuery("#dotime2").val();
	if (username!=null){
		 _url += "&username="+username;
	}
	if (keywords!=null){
		 _url += "&keywords="+keywords;
	}
	if (dotime1!=null){
		 _url += "&dotime1="+dotime1;
	}
	if (dotime2!=null){
		 _url += "&dotime2="+dotime2;
	}
        if(type!=""){
            _url += "&type="+type;
        }
        if(status!=""){
            _url += "&status="+status;
        }
        
	location.href=url+_url;
 
}
</script>
{/literal}
</div>
</div>
</div>
</div>
<!--用户中心的主栏目 结束-->
<script src="{$tempdir}/media/js/modal.js"></script>
<script src="{$tempdir}/media/js/tab.js"></script>
<script src="{$tempdir}/media/js/alert.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>
{include file="user_footer.html"}