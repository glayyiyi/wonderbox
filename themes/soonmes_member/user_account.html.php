<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />
 
<!--�û����ĵ�����Ŀ ��ʼ-->
 <div id="main" class="clearfix" style="margin-top:0px;">
<div class="wrap950 mar10">
	<!--��ߵĵ��� ��ʼ-->
	<div class="user_left">
		{include file="user_menu.html"}
	</div>
	<!--��ߵĵ��� ����-->
	
	<!--�ұߵ����� ��ʼ-->
	<div class="user_right">
		<div class="user_right_menu">
			<ul id="tab" class="list-tab clearfix">
				<li {if $_U.query_type=="list"} class="cur"{/if}><a href="{$_U.query_url}">�ʻ�����</a></li>
				<li {if $_U.query_type=="bank"} class="cur"{/if}><a href="{$_U.query_url}/bank">�����˺�</a></li>
				<li {if $_U.query_type=="recharge_new"} class="cur"{/if}><a href="{$_U.query_url}/recharge_new">�ʻ���ֵ</a></li>
				<li {if $_U.query_type=="recharge"} class="cur"{/if}><a href="{$_U.query_url}/recharge">��ֵ��¼</a></li>
				<li {if $_U.query_type=="cash_new"} class="cur"{/if}><a href="{$_U.query_url}/cash_new">�ʻ�����</a></li>
				<li {if $_U.query_type=="cash"} class="cur"{/if}><a href="{$_U.query_url}/cash">���ּ�¼</a></li>
				<li {if $_U.query_type=="log"} class="cur"{/if}><a href="{$_U.query_url}/log">�ʽ���ϸ</a></li>
			</ul>
		</div>
		<div class="user_right_main">
		<!--�ʽ�ʹ�ü�¼�б� ��ʼ-->
		{if $_U.query_type=="log"}
		<div class="user_main_title well" style="height:20px; padding-top:7px;"> 
		��¼ʱ�䣺<input class="Wdate" type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input class="Wdate" type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>   
		{linkages nid="account_type" value="$magic.get.type" name="type" type="value" default="ȫ��" } <input value="����" type="submit" class="btn-action"  onclick="sousuo('{$_U.query_url}/publish')" />
		</div>
			<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			  <form action="" method="post">
				<tr class="head">
					<td>����</td>
					<td>�������</td>
					<td>�ܽ��</td>
					<td>���ý��</td>
					<td>������</td>
					<td>���ս��</td>
					<td>���׶Է�</td>
					<td>��¼ʱ��</td>
					<td width="130">��ע��Ϣ</td>
				</tr>
				{foreach from=$_U.account_log_list key=key item=item}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td>{$item.type|linkage:"account_type"}</td>
					<td>��{$item.money}</td>
					<td>��{$item.total}</td>
					<td>��{$item.use_money}</td>
					<td>��{$item.no_use_money|default:0}</td>
					<td>��{$item.collection}</td>
					<td>{if $item.to_username==0}��������{else}<a href="/u/{$item.to_user}" target="_blank">{$item.to_username|default:"��������"}</a>{/if}</td>
					<td>{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
					<td width="130">{$item.remark}</td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="11" class="page">
						{$_U.show_page}
					</td>
				</tr>
			</form>	
		</table>
		<!--�ʽ�ʹ�ü�¼�б� ����-->
		<!--��ʷ�ʽ�ʹ�ü�¼�б� ��ʼ-->
		
		{elseif $_U.query_type=="logold"}
		
		<div class="user_main_title well" style="height:20px; padding-top:7px;"> 
		��¼ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>   
		{linkages nid="account_type" value="$magic.request.type" name="type" type="value" default="ȫ��" } <input value="����" type="submit" class="btn-action"  onclick="sousuo('{$_U.query_url}/publish')" />	
		</div>	
		
			<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			  <form action="" method="post">
				<tr class="head">
					<td>����</td>
					<td>�������</td>
					<td>�ܽ��</td>
					<td>���ý��</td>
					<td>������</td>
					<td>���ս��</td>
					<td>���׶Է�</td>
					<td>��¼ʱ��</td>
					<td width="130">��ע��Ϣ</td>
				</tr>
				{foreach from=$_U.account_log_list key=key item=item}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td>{$item.type|linkage:"account_type"}</td>
					<td>��{$item.money}</td>
					<td>��{$item.total}</td>
					<td>��{$item.use_money}</td>
					<td>��{$item.no_use_money|default:0}</td>
					<td>��{$item.collection}</td>
					<td>{if $item.to_username==0}��������{else}<a href="/u/{$item.to_user}" target="_blank">{$item.to_username|default:"��������"}</a>{/if}</td>
					<td>{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
					<td width="130">{$item.remark}</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="11" class="page">
						{$_U.show_page}
					</td>
				</tr>
			</form>	
		</table>
		<!--��ʷ�ʽ�ʹ�ü�¼�б� ����-->
		
		<!--��ֵ��¼�б� ��ʼ-->
		{elseif $_U.query_type=="recharge"}
		<div class="user_help alert">�ɹ���ֵ{$_U.account_log.recharge_success|default:0}Ԫ�����ϳɹ���ֵ{$_U.account_log.recharge_online|default:0}Ԫ�����³ɹ���ֵ{$_U.account_log.recharge_downline|default:0}Ԫ,���ֶ��ɹ���ֵ{$_U.account_log.recharge_shoudong|default:0}Ԫ</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
		<form action="" method="post">
			<tr class="head" >
			<td>����</td>
			<td>֧����ʽ</td>
			<td>��ֵ���</td>
			<td>�������</td>
			<td>��ע</td>
			<td>��ֵʱ��</td>
			<td>״̬</td>
			<td>����ע</td>
			</tr>
			{list module="account" function="GetRechargeList" showpage="3" var="loop" status="1" user_id="0" epage=20}
			{foreach from=$loop.list key=key item=item}
			<tr {if $key%2==1} class="tr1"{/if}>
			<td>{if $item.type==1}���ϳ�ֵ{else}���³�ֵ{/if}</td>
			<td>{$item.payment_name|default:"�ֶ���ֵ"}</td>
			<td><font color="#FF0000">��{$item.money}</font></td>
			<td>{$item.hongbao}</td>
			<td>{$item.remark}</td>
			<td>{$item.addtime|date_format:"Y-m-d H:i"}</td>
			<td>{if $item.status==0}�����{elseif  $item.status==1} ��ֵ�ɹ� {elseif $item.status==2}��ֵʧ��{/if}</td>
			
			<td>{$item.verify_remark|default:"-"}</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="11" class="page">{$loop.showpage}</div>
				</td>
			</tr>
			{/list}
		</form>	
		</table>
		<!--��ֵ��¼�б� ����-->
		
		<!--���ּ�¼�б� ��ʼ-->
		{elseif $_U.query_type=="cash"}
		<div class="user_help alert">�ɹ�����{$_U.cash_log.cash_success.money|default:0}Ԫ�����ֵ���{$_U.cash_log.cash_success.credited|default:0}Ԫ��������{$_U.cash_log.cash_success.fee|default:0}Ԫ</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			<form action="" method="post">
				<tr class="head">
					<td>��������</td>
					<td>�����˺�</td>
					<td>�����ܶ�</td>
					<td>���˽��</td>
					<td>������</td>
					<td>�����(�ֿ�)</td>
					<td>����ʱ��</td>
					<td>״̬</td>
					<td>����</td>
				</tr>
				{foreach from=$_U.account_cash_list key=key item=item}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td>{$item.bank_name}</td>
					<td>{$item.account}</td>
					<td>��{$item.total|default:0}</td>
					<td>��{$item.credited|default:0}</td>
					<td>��{$item.fee|default:0}</td>	
					<td>��{$item.hongbao|default:0}</td>	
					<td>{$item.addtime|date_format:"Y-m-d H:i"}</td>
					<td>{if $item.status==0}�����{elseif  $item.status==1} ���ֳɹ� {elseif $item.status==2}����ʧ�� {elseif $item.status==3}�û�ȡ��{/if}</td>
					<td>{if $item.verify_remark!=""}{$item.verify_remark}{else}{if $item.status==0}<a href="#" onclick="javascript:if(confirm('ȷ��Ҫȡ������������')) location.href='{$_U.query_url}/cash_cancel&id={$item.id}'">ȡ������</a>{else}-{/if}{/if}</td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="11" class="page">
						{$_U.show_page}
					</td>
				</tr>
			</form>	
		</table>
		<!--���ּ�¼�б� ����-->
		
		<!--�˺ų�ֵ ��ʼ-->
		{elseif $_U.query_type=="recharge_new"}
		<div class="user_help alert">
                    * ��ܰ��ʾ���������г�ֵ�����������ĵȴ�,��ֵ�ɹ����벻Ҫ�ر������,��ֵ�ɹ��󷵻�{$_G.system.con_webname},
                    ��ֵ�����ܴ��������ʺš�
                    <br>* <font color="red">���߳�ֵ��������ȫ��Ŷ��</font>
        </div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ʵ������</div>
			<div class="c">
				{$_G.user_result.realname}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ϵEmail��</div>
			<div class="c">
				{$_G.user_result.email}
			</div>
		</div>
		<form action="" method="post" name="form1" target="_blank"  onsubmit= "return check();" >
		<div id="returnpay">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ֵ��ʽ��</div>
			<div class="c">
			<table>
				<tr><td><input type="radio" name="type" id="type_1" class="input_border" onclick="change_type(1)" value="1"  checked="checked" /></td><td><label for="type_1">���ϳ�ֵ</label></td><td><input type="radio" name="type" id="type_2" class="input_border"  value="2"  onclick="change_type(2)" /></td><td><label for="type_2">���³�ֵ</label></td></tr>
			</table>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ֵ��</div>
			<div class="c">
				<input type="text" name="money"  class="input_border" value="" size="10" onkeyup="commit(this);" maxlength="9" /> Ԫ <span id="realacc">ʵ�����ˣ�<font color="#FF0000" id="real_money">0</font> Ԫ</span>
			</div>
		</div>
                    <div id="type_net" class="disnone">
			<div class="user_right_border">
				<div class="l" style="font-weight:bold;">��ֵ���ͣ�</div>
				<div class="c">
						<font color="red">����������ʹ�ø�����������֧����ֻ�迪ͨ�����������м���!</font>
<style type="text/css">
{literal}
#ban table td{height:40px; line-height:40px;padding-right:30px;padding-bottom:10px; }
#ban table tr{height:40px; line-height:40px; }
#ban table img{width:125px; height:33px;float:left;}
#ban table input{border:none;width:20px; height:30px;float:left;}
#rechargeBox{padding:20px;}
#rechargeBox h2 {border-bottom: #ccc 1px solid; padding-bottom: 10px; margin-bottom: 10px; font-size: 16px}
.detail{padding:10px 0;margin:0 auto;}
.active-link{padding:10px;text-align:center;}
.btn_grey_b, .btn_grey_b span, .btn_grey_b span, {background:url("/data/images/base/pay_btn_a.png") no-repeat; height:30px; line-height:0; font-size:0; padding:0 4px 0 0; border:0; display:inline-block; vertical-align:middle; cursor:pointer; white-space:normal; outline:none;   overflow:visible }
.btn_grey_b span, .btn_grey_b span {background-position:0 0; margin:0; padding:0 12px 0 16px; color:#fff; font-size:14px; font-weight:700; line-height:30px; _line-height:29px }
.btn_grey_b {background-position:right -70px }
.btn_grey_b:hover {background-position:right -105px; text-decoration:none }
.btn_grey_b span, .btn_grey_b span {background-position:0 -70px; color:#333 }
.btn_grey_b:hover span, .btn_grey_b:hover span {background-position:0 -105px }
{/literal}
</style>
<div id="ban">
<table width="100%" cellpadding="3" cellspacing="3">
<tr>
<td width="160"><input type="radio" name="payment1" value="ICBC_g"/>
<img src="../data/bank/ICBC_OUT.gif" border="0"/></td>
<td width="160">
<input type="radio" name="payment1" value="BOC_g">
<img src="../data/bank/BOC_OUT.gif" border="0"/>
</td>
<td  width="160">
<input type="radio" name="payment1" value="CCB_g"/>
<img src="../data/bank/CCB_OUT.gif" border="0"/></td>
</tr>
<tr>
<td><input type="radio" name="payment1" value="ABC_g"/>
<img src="../data/bank/ABC_OUT.gif" border="0"/></td>
<td>
<input type="radio" name="payment1" value="CMB_g"/>
<img src="../data/bank/CMB_OUT.gif" border="0"/>
</td>
<td><input type="radio" name="payment1" value="GDB_g" />
<img src="../data/bank/GDB_OUT.gif" border="0"/></td>
</tr><tr>
<td><input type="radio" name="payment1" value="CMBC_g"/>
<img src="../data/bank/CMBC_OUT.gif" border="0"/></td>
<td><input type="radio" name="payment1" value="CEB_g"/>
<img src="../data/bank/CEB_OUT.gif" border="0"/></td>
<td><input type="radio" name="payment1" value="CIB_g"/>
<img src="../data/bank/CIB_OUT.gif" border="0"/></td>
</tr>
<tr>
<td><input type="radio" name="payment1" value="PSBC_g"/>
<img src="../data/bank/yz.jpg" border="0"/></td>
<td><input type="radio" name="payment1" value="HXBC_g"/>
<img src="../data/bank/hx.jpg" border="0"/></td>
<td><input type="radio" name="payment1" value="BOCOM_g"/>
<img src="../data/bank/COMM_OUT.gif" border="0"/></td>
</tr>
<tr>
<td><input type="radio" name="payment1" value="CITIC_g"/>
<img src="../data/bank/CITIC_OUT.gif" border="0"/></td>
<td><input type="radio" name="payment1" value="SPDB_g">
<img src="../data/bank/pf.jpg" border="0"/></td>
<td><input type="radio" name="payment1" value="SDB_g">
<img src="../data/bank/SZFZ_OUT.gif" border="0"/></td>
</tr>
</table>
</div>
{foreach from=$_U.account_payment_list item="var"}
{if $var.nid!="offline"}
<input type="radio" name="payment1" class="input_border" value="{$var.id}" id="payment_{$key}"  /> <label for="payment_{$key}">{$var.name}</label> <input type="hidden" name="payname{$var.id}" value="{$var.name}" /><label for="payment_{$key}">({$var.description})</label> <br />
{/if}
{/foreach}                 
</div>
</div>
</div>
        <div id="type_now"   style="display:none">
			<div class="user_right_border">
				<div class="l" style="font-weight:bold;">��ֵ���У�</div>
                                
				<div class="c">
                    <div>
                       <font color="red">���³�ֵ���������⣬��������ͷ���ϵ��ϵ��<br>
��1�����³�ֵ��������ĵ�����ͽ�����20000Ԫ��<br>
��2��<strong><font color="blue">��Ч��ֵ�Ǽ�ʱ��Ϊ:��һ�������9:30��16:00</font></strong>����ֵ�ɹ�������ǵĿͷ���ϵ��<br><br></font></div>
					<div>
					{foreach from=$_U.account_payment_list item="var"}
					{if $var.nid=="offline"}
					<input type="radio" name="payment2"  class="input_border" value="{$var.id}" id="offline_{$key}" /><label for="offline_{$key}">{$var.description}</label><br />
					{/if}
					{/foreach}
					</div>
				</div>
			</div>
			<div class="user_right_border">
				<div class="l" style="font-weight:bold;">���³�ֵ��ע��</div>
				<div class="c">
					<input type="text" name="remark"  class="input_border" value="" size="30" /><br>����ע�������û�����ת�����п��ź�ת����ˮ�ţ��Լ�ת��ʱ�䣬лл��ϣ�
				</div>
			</div>
		</div>
 
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;"></div>
			<div class="c">
				<input type="submit" class="btn-action"  name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		</div>
		
		
		{literal}
		
		<script type="text/javascript">
		 /*$("input[name='money']").keyup(function(){     
			 var tmptxt=$(this).val();     
			 $(this).val(tmptxt.replace(/\D|^0/g,''));     
		 }).bind("paste",function(){     
			 var tmptxt=$(this).val();     
			 $(this).val(tmptxt.replace(/\D|^0/g,''));     
		 }).css("ime-mode", "disabled");*/


		function check(){
			var aa = "";
			aa = $("input[name=type]:checked").val();
			
			var money = $("input[name=money]").val();
			if(!money){
				jQuery.jBox.tip('�������ֵ��','warning');
				return false;
			}
			var info ="<div id='rechargeBox'><h2><strong>��ֵ�������⣿</strong></h2>   ";
				info+="<div class='ui-tip ui-tip-info'>      ";
				info+="<span class='ui-tip-icon'></span>";
				info+="<div class='ui-tip-text'>��ֵ���ǰ�벻Ҫ�رմ˴��ڡ���ɳ�ֵ��������������������İ�ť��</div>  ";
				info+="<p class='detail'><strong>�����´򿪵���������ҳ������ɸ��</strong></p>";
				info+="</div>";
				info+="<div class='active-link'>";
				info+="<a href='/index.php?user&q=code/account/recharge'  seed='link-complete'><span class='btn_grey_b'><span>����ɳ�ֵ</span></span></a>";
				info+="<a href='/linekefu/index.html'  seed='link-hasProblem'>   <span class='btn_grey_b'><span>��ֵ��������</span></span>   </a>";
				info+="</div>";
				info+="</div>";
			var op="{title:'���߳�ֵ'}";

			if(aa == 1){
			//���ϳ�ֵ
				var xsbank = $("input[name=payment1]:checked").val();
				 
				if (!xsbank){
 					jQuery.jBox.tip('��ѡ�����߳�ֵ���ͣ�','warning');
					return false;
				}else{
					//�ύ������ֵ��ʾ�� 20130130 add by weego 
					jQuery.jBox(info,{title:'���߳�ֵ',buttons: {'��������ѡ��': 'ok' }, width: 500,opacity: 0.3, showClose: false,showIcon: false, top: '25%',draggable: false});
					return true;			
				}
				
			}else{
			//���³�ֵ
				var xxbank = $("input[name=payment2]:checked").val();
				if (!xxbank){
					jQuery.jBox.tip('��ѡ�����³�ֵ�����У�','warning');
					return false;
				}else{
					//�ύ������ֵ��ʾ�� 20130130 add by weego 
					jQuery.jBox(info,op);
					return true;
				}
				
			}
		}
			function change_type(type){
          
				if (type==2){
                    document.getElementById("type_net").style.display="none";
                    document.getElementById("type_now").style.display="";
                    document.getElementById("realacc").style.display="none";
				}else{
                    document.getElementById("type_now").style.display="none";
                    document.getElementById("type_net").style.display="";
                    document.getElementById("realacc").style.display="";
				}
			}
		function payment (){
	 		var type = GetRadioValue("type");
			if (type==1){
				$("#returnpay").html("<font color='red'>�뵽�򿪵���ҳ���ֵ</font>");
			}
		}
		function ctype(){
		var resualt=false;
			alert(document.form1.payment2.length);
			for(var i=0;i<document.form1.payment2.length;i++)
			{
				if(document.form1.payment2[i].checked)
				{
				  resualt=true;
				}
			}
			return resualt;
		}
        function commit(obj) {
            if (parseFloat(obj.value) > 0 ) 
            {
                var realMoney=parseFloat(obj.value);
                document.getElementById("real_money").innerHTML = realMoney ;
            }
        }
    </script>
		{/literal}
		<div class="user_right_foot alert">
		{$_G.system.con_webname}��ֹ���ÿ����֡���ٽ��׵���Ϊ,һ�����ֽ����Դ���,�����������ڣ������տ�����˻�������ֹͣ����,���п���Ӱ��������ü�¼��
		</div>
		<!--�˺ų�ֵ ����-->
		
		
		<!--�����˺� ��ʼ-->
		{elseif $_U.query_type=="bank"}
		<div class="user_help alert" style="text-align:left;text-indent :24px;">{$_G.system.con_webname}��ֹ���ÿ����֡���ٽ��׵���Ϊ,һ�����ֽ����Դ���,�����������ڣ������տ�����˻�������ֹͣ����,���п���Ӱ��������ü�¼��
</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ʵ������</div>
			<div class="c">
				{$_U.account_bank_result.realname}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��½�û�����</div>
			<div class="c">
				{$_U.account_bank_result.username}
			</div>
		</div>
		
		{if $_U.account_bank_result.bank!=""}
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�������У�</div>
			<div class="c">
				{$_U.account_bank_result.bank|linkage}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">���������ƣ�</div>
			<div class="c">
				{$_U.account_bank_result.branch}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�����˺ţ�</div>
			<div class="c">
				{$_U.account_bank_result.account_view}
			</div>
		</div>
		{/if}
		<div class="user_right_foot">
		</div>
		<form action="" method="post" name="form1">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�������У�</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=bank&nid=account_bank&value={$_U.account_bank_result.bank}"></script>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">���������ƣ�</div>
			<div class="c">
				<input type="text" name="branch" value="" data-content="**����**֧��**������Ӫҵ��(�磺�Ϻ���������֧�пؽ�·����),
		    ������޷�ȷ��,�������µ����Ŀ������пͷ�����ѯ�ʡ� " id="infokaih" />
			</div>
		</div>
		<div class="user_right_border" style="margin-left:0px">
			<div class="l" style="font-weight:bold;">�����˺ţ�</div>
			<div class="c">
				<input type="text" name="account" value="" id="infoyhzh" data-content="�ر����ѣ��������п��ŵĿ�������������Ϊ��{$_U.account_bank_result.realname}��, ���������˺ű�����д��ȷ,������������ʽ𽫴��ڷ��ա�
                    ���Ҫ�޸ĵĻ�����Ҫ��ȫ, �����κ�ʱ���޸��������������������п��š�" />
			</div>
			<div class="l" style="font-weight:bold;"></div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�ֻ���֤��</div>
			<div class="c">
				<input type="text" name="mobilecode"  maxlength="6"  />&nbsp;&nbsp;<input id="codetime" name="codetime" type="button" value="��ȡ��֤��" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;"></div>
			<div class="c">
				<input type="hidden" name="user_id" value="{$_G.user_id}" />
				<input type='hidden' name='oid' value='<?php echo date('YmdHis');?>'/> 
				<input type="button" class="btn-action"  name="name"  value="ȷ���ύ" size="30" onclick="sub_form()" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ����ֹ���ÿ�����
		</div>
{literal}
	<script language="javascript">
		$("#codetime").click(function() {
			$("#codetime").attr({"disabled":"disabled"});
			$.ajax({
				url: "/index.php?user&q=code/account/cash_new_sms&itype=2&random="+Math.random(),
				success: function(msg){
					if(msg==-1){
						jQuery.jBox.confirm("����û���ֻ���֤���޷�������֤�룬����ǰ����֤��", "��ʾ", function(v,h,f){if(v=='ok'){location.href="/index.php?user&q=code/user/phone_status"};return true;});
						$("#codetime").removeAttr("disabled");
						return;
					}else if(msg==1){
						jQuery.jBox.success('��֤�뷢�ͳɹ�!', '��ʾ');
						$("#codetime").attr({"disabled":"disabled"});
						var date=new Date();
						date.setTime(date.getTime()+5*60*1000);
						document.cookie = "bankcode=300;expires=" + date.toGMTString();
						SetRemainTime();
					}else{
						jQuery.jBox.error('��֤�뷢��ʧ��!', '��ʾ');
						$("#codetime").removeAttr("disabled");
						return;
					}
				},
				error: function (xmlHttpRequest, error) {
					jQuery.jBox.error('��֤�뷢��ʧ��!', '��ʾ');
					$("#codetime").removeAttr("disabled");
					return;
				}
			});
		});
		SetRemainTime();
		function SetRemainTime() {
			var arr,reg=new RegExp("(^| )bankcode=([^;]*)(;|$)");
			var SysSecond = 0;
			if(arr=document.cookie.match(reg)){
				var SysSecond = arr[2];
			}
		    if (SysSecond > 0) { 
		    SysSecond = SysSecond - 1;
		    var date=new Date();
			date.setTime(date.getTime()+SysSecond*1000);
			document.cookie = "bankcode="+SysSecond+";expires=" + date.toGMTString();
		    var second = Math.floor(SysSecond % 60);             // ������     
		    var minite = Math.floor((SysSecond / 60) % 60);      //����� 
		    var hour = Math.floor((SysSecond / 3600) % 24);      //����Сʱ 
		    var day = Math.floor((SysSecond / 3600) / 24);        //������ 
			$("#codetime").attr({"value":minite+"��"+second+"��"});
			$("#codetime").attr({"disabled":"disabled"});
			setTimeout("SetRemainTime()",1000);
		   }else{
			$("#codetime").attr({"value":"��ȡ��֤��"});	
				$("#codetime").removeAttr("disabled");
		   } 
	  }
function sub_form(){
	var form = document.forms['form1'];
	var bank = form1.elements['bank'].value;
	var branch = form1.elements['branch'].value;
	var account = form1.elements['account'].value;
	var mobilecode = form1.elements['mobilecode'].value;
	if(bank==''){
		jQuery.jBox.info('����������������','��ʾ');return false;
	}
	if(account==''){
		jQuery.jBox.info('������������������','��ʾ');return false;
	}
	if(account.length<16){
		jQuery.jBox.info('�����˻���������','��ʾ');return false;
	}
	if(mobilecode.length!=6){
		jQuery.jBox.info('�ֻ���֤����������','��ʾ');return false;
	}
	jQuery.jBox.tip("�ύ��", 'loading');
	form.submit();
}
</script>
{/literal}	
		<!--�����˺� ����-->

		<!--���� ��ʼ-->
		{elseif $_U.query_type=="cash_new"}
		<div class="user_help alert" style="text-align:left;">
<strong>ע��</strong><br/>
1��ȷ�����������ʺŵ�������������վ�ϵ���ʵ����һ��<br><br>
2����������Ҫȡ�����,���ǽ���1��2��������(���ҽڼ��ճ���)֮�ڴ������ύ���������롣�ʽ���24Сʱ�ڵ����������ϡ����û������ÿ�������յ�����4��(�����¹���ʱ��Ϊ׼)֮ǰ�ύ�������룬ÿ��������16:00(�����¹���ʱ��Ϊ׼)֮���ύ�����������ڵ��콫����õ���ʱ����<br><br>
3������ȡ������{$_G.cash_rule.min_cash}Ԫ������Ϊ{$_G.cash_rule.max_cash}�����ۼ����ֲ��ó���{$_G.cash_rule.max_day_cash}��<br><br>
{if $_G.cash_rule.scheme==1}
4���������ֽ��{$_G.cash_rule.cash_lt}Ԫ�����������£�ÿ����ȡ{$_G.cash_rule.every_lt_fee}Ԫ�����ѡ���������{$_G.cash_rule.cash_gt}Ԫ���ϣ�ÿ����ȡ{$_G.cash_rule.every_gt_fee}Ԫ�����ѡ��û��Գ�ֵ֮������{$_G.cash_rule.every_day_lt}��֮����δ��ȫͶ��Ķ������{$_G.cash_rule.every_extra_fee}Ԫ�����ѡ�
{else}
4������������Ϊ���ֽ���{$_G.cash_rule.scale_fee}%���û��Գ�ֵ֮������{$_G.cash_rule.scale_day_lt}��֮����δ��ȫͶ��Ĳ��ֶ������{$_G.cash_rule.scale_extra_fee}%�����ѡ�
{/if}
<br>
		</div>
		<form action="" method="post" onsubmit="return check_form()" name="form1">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��ʵ������</div>
			<div class="c">
				{$_G.user_result.realname}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�˻���</div>
			<div class="c">
				{$_G.user_result.use_money|default:0}Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">������</div>
			<div class="c">
				{$_G.user_result.use_money|default:0}Ԫ
				<input type="hidden" name="userMoney" id="userMoney" value="{$_G.user_result.use_money|default:0}">
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�����ܶ</div>
			<div class="c">
				{$_G.user_result.no_use_money|default:0}Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">���ֵ����У�</div>
			<div class="c">
				{$_U.account_bank_result.bank|linkage} {$_U.account_bank_result.branch} {$_U.account_bank_result.account_view} 
			</div>
		</div>
                    
		{article module="borrow" function="GetCashGoodAmount"  user_id="$_G.user_id"  article_id="0"}
                
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�����������֣�</div>
			<div class="c">
				{$var.txValue|default:0}Ԫ(���)
			</div>
		</div>
                
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">����������֣�</div>
			<div class="c">
				{$var.yValue}Ԫ(���)
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�������</div>
			<div class="c">
				{$_G.user_result.hongbao}Ԫ
				<input type="hidden" name="hongbao" id="hongbao" value="{$_G.user_result.hongbao}">
				<input type="hidden" name="hongbaoUsed" id="hongbaoUsed" value="">
			</div>
		</div>
		<input type="hidden" name="cashGoodAmount" id="cashGoodAmount" value="{$var.yValue}">
		<script style="text/javascript">
		var scheme={$var.cash_scheme.scheme};
		var max_cash={$var.cash_scheme.max_cash};
		var min_cash={$var.cash_scheme.min_cash};
		var cash_lt={$var.cash_scheme.cash_lt};
		var cash_gt={$var.cash_scheme.cash_gt};
		var every_lt_fee={$var.cash_scheme.every_lt_fee};
		var every_gt_fee={$var.cash_scheme.every_gt_fee};
		var every_extra_fee={$var.cash_scheme.every_extra_fee};
		var scale_fee={$var.cash_scheme.scale_fee};
		var scale_extra_fee={$var.cash_scheme.scale_extra_fee};
		var free_extra_part={$var.free_extra_part};
		</script>
		{/article}
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�������룺</div>
			<div class="c">
				{if $_U.account_bank_result.paypassword==""}<a href="{$_U.query_url}&q=code/user/paypwd"><font color="#FF0000">��������һ��֧������</font></a>{else}<input type="password" name="paypassword" />{/if}
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">���ֽ�</div>
			<div class="c">
				<input type="text" name="money"  onblur="commit(this);" id="cash_money"  /><span id="realacc">ʵ�ʵ��ˣ�<font color="#FF0000" id="real_money">0</font> Ԫ</span>
				<span id="realacc">��������������<font color="#FF0000" id="cash_fee">0</font>Ԫ</span>��ʹ�ú���������ַ��ã�<font color="#FF0000" id="hongbao_used">0</font> Ԫ</span>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">�ֻ���֤��</div>
			<div class="c">
				<input type="text" name="mobilecode"  maxlength="6"  />&nbsp;&nbsp;<input id="codetime" name="codetime" type="button" value="������֤��"/>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��̬����(��ѡ)��</div>
			<div class="c">
				<input type="text" name="uchoncode"  maxlength="6"  />
			</div>
		</div>
{literal}
		<script language="javascript">
				
				document.getElementById("codetime").onclick = function(){
					$("#codetime").attr({"disabled":"disabled"});
					$.ajax({
						url:"/index.php?user&q=code/account/cash_new_sms&itype=1&random="+Math.random(),
						success:function(msg){
							if(msg==-1){
								jQuery.jBox.confirm("����û���ֻ���֤���޷�������֤�룬����ǰ����֤��", "��ʾ", function(v,h,f){if(v=='ok'){location.href="/index.php?user&q=code/user/phone_status"};return true;});
								$("#codetime").removeAttr("disabled");
								return;
							}else if(msg==1){
								jQuery.jBox.success('��֤�뷢�ͳɹ�', '��ʾ');
								$("#codetime").attr({"disabled":"disabled"});
								var date=new Date();
								date.setTime(date.getTime()+5*60*1000);
								document.cookie = "cashcode=300;expires=" + date.toGMTString();
								SetRemainTime();
							}else{
								jQuery.jBox.error('��֤�뷢��ʧ��!', '��ʾ');
								$("#codetime").removeAttr("disabled");
								return;
							}
						},
						error:function(XMLHttpRequest, error){
							jQuery.jBox.error('��֤�뷢��ʧ��!', '��ʾ');
							$("#codetime").removeAttr("disabled");
							return;
						}
					});
				}
				SetRemainTime();
				function SetRemainTime() {
						var arr,reg=new RegExp("(^| )cashcode=([^;]*)(;|$)");
						var SysSecond = 0;
						if(arr=document.cookie.match(reg)){
							var SysSecond = arr[2];
						}
					    if (SysSecond > 0) { 
					    SysSecond = SysSecond - 1;
					    var date=new Date();
						date.setTime(date.getTime()+SysSecond*1000);
						document.cookie = "cashcode="+SysSecond+";expires=" + date.toGMTString();
					    var second = Math.floor(SysSecond % 60);             // ������     
					    var minite = Math.floor((SysSecond / 60) % 60);      //����� 
					    var hour = Math.floor((SysSecond / 3600) % 24);      //����Сʱ 
					    var day = Math.floor((SysSecond / 3600) / 24);        //������ 
						$("#codetime").attr({"value":minite+"��"+second+"��"});
						$("#codetime").attr({"disabled":"disabled"});
						setTimeout("SetRemainTime()",1000);
					   }else{
						$("#codetime").attr({"value":"��ȡ��֤��"});	
							$("#codetime").removeAttr("disabled");
					   } 
				}
	</script>
{/literal}
{literal}
<script style="text/javascript">
	document.getElementById("cash_money").value=0;
       function commit(obj) {
            if (parseFloat(obj.value) > 0 )
            {
				var inputValue=parseFloat(obj.value);
				var yValue = document.getElementById("cashGoodAmount").value;
				var userMoney = document.getElementById("userMoney").value;
                if(inputValue!=0 && (inputValue<min_cash || inputValue>max_cash)){
                	jQuery.jBox.error("���ã������ʽ��ܵ���"+min_cash+"Ԫ����"+max_cash+"Ԫ", '����');
                	obj.value = 0;
                	document.getElementById("real_money").innerText = 0 ;
                	return;
                }else if(inputValue>yValue){
                	jQuery.jBox.error("���ã������ʽ��ܸ���������ֽ��"+yValue+"Ԫ", '����');
                	obj.value = 0;
                	document.getElementById("real_money").innerText = 0 ;
                	return;
                }
                getCashFeeValue(inputValue);
                return true;
            }
        }
        function getCashFeeValue(cashAmount){
                var yValue = document.getElementById("cashGoodAmount").value;
				var hongbao = document.getElementById("hongbao").value;
                var hongbaoUsed = 0;
                var caseFee;
                if(scheme==1){
					if(cashAmount<=cash_lt){
						caseFee=every_lt_fee;
					}else{
						caseFee=every_gt_fee;
					}
                }else if(scheme==2){
                	caseFee=cashAmount*scale_fee;
                }
                if(cashAmount>free_extra_part){
					if(scheme==1){
						caseFee+=every_extra_fee;
					}else if(scheme==2){
						caseFee+=(cashAmount-free_extra_part)*scale_extra_fee
					}
                }
				if(caseFee>=hongbao){
					hongbaoUsed=hongbao*1;
				}else{
					hongbaoUsed=caseFee*1;
				}
				document.getElementById("cash_fee").innerHTML = changeTwoDecimal(caseFee);
                document.getElementById("real_money").innerHTML = changeTwoDecimal(cashAmount-caseFee+hongbaoUsed);
				document.getElementById("hongbaoUsed").value = changeTwoDecimal(hongbaoUsed);
				document.getElementById("hongbao_used").innerHTML = changeTwoDecimal(hongbaoUsed);
        }
        
        function changeTwoDecimal(x)
        {
            var f_x = parseFloat(x);
            if (isNaN(f_x))
            {
                alert('function:changeTwoDecimal->parameter error');
                return false;
            }
            var f_x = Math.round(x*100)/100;
            return f_x;
        }
</script>
{/literal}
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">��֤�룺</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4" style="float:left;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left;" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;"></div>
			<div class="c">
				<input type="hidden" name="user_id" value="{$_G.user_id}" />
				<input type="button" class="btn-action"  name="name"  value="ȷ���ύ" size="30" onclick="check_form()" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* ��ܰ��ʾ����ֹ���ÿ�����
		</div>
<script>
var use_money = {$_G.user_result.use_money|default:0};
{literal}
function check_form(){
	var frm = document.forms['form1'];
	var paypassword = frm.elements['paypassword'].value;
	var money = frm.elements['money'].value;
	var valicode = frm.elements['valicode'].value;
	var mobilecode = frm.elements['mobilecode'].value;
	if(!commit(document.getElementById("cash_money"))){
		jQuery.jBox.error('��������Ч�Ľ��', '��ʾ');
		return false;
	}
	if (paypassword.length == 0 ) {
		jQuery.jBox.error('���������Ľ�������', '��ʾ');return false;
	}
	if (money.length == 0 || money==0) {
		jQuery.jBox.error('������������ֽ��', '��ʾ');return false;
	}
	if (money >use_money) {
		jQuery.jBox.error('�������ֽ��������еĿ������', '��ʾ');return false;
	}
	if (!/^[0-9a-zA-Z]{4}$/.test(valicode)){
		jQuery.jBox.error('��֤���ʽ����', '��ʾ');return false;
	}
	if(mobilecode==''){
		jQuery.jBox.error('�ֻ���֤�벻��Ϊ��', '��ʾ');return false;
	}
	jQuery.jBox.tip('�ύ��', 'loading');
	frm.submit();
}
</script>
{/literal}
<!--���� ����-->
{else}
{literal}
<? $this->magic_vars['day7'] = time()-6*60*60*24;?>
<? $this->magic_vars['nowtime'] = time();?>
{/literal}
		<div class="user_main_title" style="height:30px; padding-top:7px;"> 
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>   
		<input value="����" type="submit" class="btn-action"  onclick="sousuo('{$_U.query_url}/publish')" />
		</div>	
		{article module="borrow" function="GetUserLog" user_id="0"}
		<table width="100%">
			<tr style="height: 25px">
				<td colspan="6"><strong>�����ʽ�����</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">�˻��ܶ</td><td align="left">��{$var.total|default:0}</td>
				<td align="right">������</td><td align="left">��{$var.use_money|default:0}</td>
				<td align="right">�����</td><td align="left">��{$var.no_use_money|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">Ͷ�궳���ܶ</td><td align="left">��{$var.tender|default:0}</td>
				<td align="right">��ֵ�ɹ��ܶ</td><td align="left">��{$var.recharge_success|default:0}</td>
				<td align="right">���ֳɹ��ܶ</td><td align="left">��{$var.cash_success.money|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">���߳�ֵ�ܶ</td><td align="left">��{$var.recharge_online|default:0}</td>
				<td align="right">���³�ֵ�ܶ</td><td align="left">��{$var.recharge_downline|default:0}</td>
				<td align="right">�ֶ���ֵ�ܶ</td><td align="left">��{$var.recharge_shoudong|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">�������ѣ�</td><td align="left">��{$var.fee+$var.recharge_fee|default:0}</td>
				<td align="right">��ֵ�����ѣ�</td><td align="left">��{$var.fee|default:0}</td>
				<td align="right">���������ѣ�</td><td align="left">��{$var.recharge_fee|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">��߶�ȣ�</td><td align="left">��{$var.amount|default:0}</td>
				<td align="right">��Ͷ�ȣ�</td><td align="left">��500</td>
				<td align="right">���ö�ȣ�</td><td align="left">��{$var.use_amount|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td colspan="6"><strong>Ͷ���ʽ�����</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">Ͷ���ܶ</td><td align="left">��{$var.invest_account|round:"2"|default:0}</td>
				<td align="right">����ܶ</td><td align="left">��{$var.success_account|round:"2"|default:0}</td>
				<td align="right">���������ܶ</td><td align="left">��{$var.award_add|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">�������ܶ</td><td align="left">��{$var.collection_wait|default:0}</td>
				<td align="right">�����ս�</td><td align="left">��{$var.collection_capital0|default:0}</td>
				<td align="right">��������Ϣ��</td><td align="left">��{$var.collection_interest0|round:"2"|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">�ѻ����ܶ</td><td align="left">��{$var.collection_yes|default:0}</td>
				<td align="right">�ѻ��ս�</td><td align="left">��{$var.collection_capital1|default:0}</td>
				<td align="right">�ѻ�����Ϣ��</td><td align="left">��{$var.collection_interest1|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">��վ�渶�ܶ</td><td align="left">��{$var.num_late_repay_account|default:0}</td>
				<td align="right">���ڷ������룺</td><td align="left">��{$var.late_collection|default:0}</td>
				<td align="right">��ʧ��Ϣ�ܶ</td><td align="left">��{$var.num_late_interes|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">����տ����ڣ�</td><td align="left">{$var.collection_repaytime|date_format:"Y-m-d"|default:-}</td>
				<td align="right"></td><td align="left"></td>
				<td align="right"></td><td align="left"></td>
			</tr>
			<tr style="height: 25px">
				<td colspan="6"><strong>�����ʽ�����</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">����ܶ</td><td align="left">��{$var.borrow_num|default:0}</td>
				<td align="right">�ѻ��ܶ</td><td align="left">��{$var.borrow_num1|default:0}</td>
				<td align="right">δ���ܶ</td><td align="left">��{$var.wait_payment|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">���������</td><td align="left">{$var.borrow_times|default:0}</td>
				<td align="right">���������</td><td align="left">{$var.payment_times|default:0}</td>
				<td align="right">����������</td><td align="left">{$var.borrow_repay0|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">����������ڣ�</td><td align="left">{$var.new_repay_time|date_format:"Y-m-d"}</td>
				<td align="right">���Ӧ�����</td><td align="left">��{$var.new_repay_account|default:0}</td>
				<td align="right"></td><td align="left"></td>
			</tr>
		</table>
		{/article}
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed"  width="300" style="margin-top:20px;">
		<tr class="head"  width="300">
		<td>����</td>
		<td>�ɹ����+</td>
		<td>���������-</td>
		<td>��֤��-</td>
		<td>����-</td>
		<td>Ͷ��-</td>
		<td>�����ܶ�+</td>
		<td>Ͷ�꽱��+</td>
		<td>����-</td>
		<td>��ֵ+</td>
		<td>����-</td>
		</tr>
			{loop module="account" function="GetLogCount" var="var" user_id=0 dotime1="$magic.request.dotime1"  dotime2="$magic.request.dotime2" }
				<tr {if $var.i%2==1} class="tr1"{/if}>
					<td>{$key}</td>
					<td {if $var.borrow_success!=""} style="color:#FF0000"{/if}>��{$var.borrow_success|default:0}</td>
					<td {if $var.borrow_fee!=""} style="color:#FF0000"{/if}>��{$var.borrow_fee|default:0}</td>
					<td {if $var.margin!=""} style="color:#FF0000"{/if}>��{$var.margin|default:0}</td>
					<td {if $var.award_lower!=""} style="color:#FF0000"{/if}>��{$var.award_lower|default:0}</td>
					<td {if $var.tender!=""} style="color:#FF0000"{/if}>��{$var.tender|default:0}</td>
					<td {if $var.collection!=""} style="color:#FF0000"{/if}>��{$var.collection|default:0}</td>
					<td {if $var.award_add!=""} style="color:#FF0000"{/if}>��{$var.award_add|default:0}</td>
					<td {if $var.invest_repayment!=""} style="color:#FF0000"{/if}>��{$var.invest_repayment|default:0}</td>
					<td {if $var.recharge!=""} style="color:#FF0000"{/if}>��{$var.recharge|default:0}</td>
					<td {if $var.recharge_success!=""} style="color:#FF0000"{/if}>��{$var.recharge_success|default:0}</td>
				</tr>
				{/loop}
		</table>	
			{/if}
	</div>
	<!--�ұߵ����� ����-->
</div>
<!--�û����ĵ�����Ŀ ����-->
</div>
</div>
<script type="text/javascript">
var url = "{$_U.query_url}/{$_U.query_type}";
{literal}
function sousuo(){
	var _url = "";
	var dotime1 = jQuery("#dotime1").val();
	var keywords = jQuery("#keywords").val();
	var username = jQuery("#username").val();
	var dotime2 = jQuery("#dotime2").val();
	var type = jQuery("#type").val();
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
	if (type!=null){
		 _url += "&type="+type;
	}
	location.href=url+_url;
}
$("[type='radio']").css("border","0");
$("#ban img").each(function(){
	this.onclick = function(){
		$(this).parent().find("input").attr("checked", "checked");
	}
})
</script>
{/literal}
<script src="{$tempdir}/media/js/modal.js"></script>
<script src="{$tempdir}/media/js/tab.js"></script>
<script src="{$tempdir}/media/js/alert.js"></script>
<script src="{$tempdir}/media/js/tooltip.js"></script>
<script src="{$tempdir}/media/js/popover.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>
{include file="user_footer.html"}