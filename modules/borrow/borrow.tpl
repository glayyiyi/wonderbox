<!-- ���� ��ʼ -->
{if $_A.query_type == "view"}
<div class="module_add">
	<form name="form1" method="post" action="" onsubmit="return submit_fool();" enctype="multipart/form-data" >
	<div class="module_title"><strong>��˽���</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
		<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=module/user/view&user_id={$_A.borrow_result.user_id}&type=scene",500,230,"true","","true","text");'>	{$_A.user_result.username|default:$_A.borrow_result.username}</a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{if $_A.borrow_result.status==0}����������{elseif $_A.borrow_result.status==1}����ļ��{elseif $_A.borrow_result.status==2}���ʧ��{elseif $_A.borrow_result.status==3}������{elseif $_A.borrow_result.status==4}�������ʧ��{elseif $_A.borrow_result.status==5}����{/if}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����;��</div>
		<div class="c">
			{$_A.borrow_result.use|linkage:"borrow_use"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ޣ�</div>
		<div class="c">
		{if $_A.borrow_result.isday==1 } 
                {$_A.borrow_result.time_limit_day}��
                {else}
                {$_A.borrow_result.time_limit}����
                {/if}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ʽ��</div>
		<div class="c">
			{if $_A.borrow_result.isday==1 } 
                ����ȫ���
            {else}
                {$_A.borrow_result.style|linkage:"borrow_style"}
            {/if}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ܽ�</div>
		<div class="c">
			{$_A.borrow_result.account}<input type="hidden" name="account" value="{$_A.borrow_result.account}" /> Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����ʣ�</div>
		<div class="c">
			{$_A.borrow_result.apr} %
		</div>
	</div>
	<div class="module_border">
		<div class="l">���Ͷ���</div>
		<div class="c">
			{$_A.borrow_result.lowest_account|linkage:"borrow_lowest_account"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���Ͷ���ܶ</div>
		<div class="c">
			{$_A.borrow_result.most_account|linkage:"borrow_most_account"}
		</div>
	</div>
		<div class="module_border">
		<div class="l">��Чʱ�䣺</div>
		<div class="c">
			{$_A.borrow_result.valid_time|linkage:"borrow_valid_time"}
		</div>
	</div>
	<div class="module_title"><strong>���ý���</strong></div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="0" {if $_A.borrow_result.award==0 || $_A.borrow_result.award==""} checked="checked"{/if} disabled="disabled">�����ý���</div>
		<div class="c">
			 <span>����������˽��������ᶳ�����ʻ�����Ӧ���˻������Ҫ���ý�������ȷ�������ʻ����㹻 ���˻��� </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="1" {if $_A.borrow_result.award==1 } checked="checked"{/if} disabled="disabled"/>���̶�����̯������</div>
		<div class="c">
			<input type="text" name="part_account" value="{$_A.borrow_result.part_account}" size="5" disabled="disabled"/> Ԫ <span>��������Ԫ��Ϊ��λ���������ñ��α��Ҫ����������Ͷ���û����ܽ�  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="2" {if $_A.borrow_result.award==2 } checked="checked"{/if} disabled="disabled"/>��Ͷ�������������</div>
		<div class="c">
			<input type="text" name="funds" value="{$_A.borrow_result.funds}" size="5" disabled="disabled"/> %  <span>�������ñ��α��Ҫ����������Ͷ���û��Ľ���������  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w"><input type="checkbox" name="is_false" value="1" {if $_A.borrow_result.is_false==1 } checked="checked"{/if}  disabled="disabled"/>���ʧ��ʱҲͬ��������</div>
		<div class="c">
			  <span>�������ѡ�˴�ѡ�����δ�������ʧ��ʱͬ���ά����Ͷ���û������û�й�ѡ�����ʧ��ʱ��ѽ������ⶳ���˻���   </span>
		</div>
	</div>
	{if $_A.borrow_result.is_vouch==1}
	<div class="module_title"><strong>��������</strong></div>
	<div class="module_border">
		<div class="l">����������</div>
		<div class="c">
			{$_A.borrow_result.vouch_award}%
		</div>
	</div>
	<div class="module_border">
		<div class="l">ָ�������ˣ�</div>
		<div class="c">
			{$_A.borrow_result.vouch_user }
		</div>
	</div>
	{/if}
	<div class="module_title"><strong>�ʻ���Ϣ����</strong></div>
	<div class="module_border">
		<div class="w">�����ҵ��ʻ��ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_account" value="1" {if $_A.borrow_result.open_account==1 } checked="checked"{/if} disabled="disabled"/> <span> ��������ϴ�ѡ�����ʵʱ�������ʻ��ģ��˻��ܶ�����������ܶ  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w">�����ҵĽ���ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_borrow" value="1" {if $_A.borrow_result.open_borrow==1 } checked="checked"{/if} disabled="disabled"/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�����ܶ�ѻ����ܶδ�����ܶ�ٻ��ܶ�����ܶ </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w">�����ҵ�Ͷ���ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_tender" value="1" {if $_A.borrow_result.open_tender==1 } checked="checked"{/if} disabled="disabled"/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�Ͷ���ܶ���ջ��ܶ���ջ��ܶ  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w">�����ҵ����ö�������</div>
		<div class="c">
			<input type="checkbox" name="open_credit" value="1" {if $_A.borrow_result.open_credit==1 } checked="checked"{/if} disabled="disabled"/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�������ö�ȡ�������ö�ȡ�  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ʱ��/IP:</div>
		<div class="c">
			{$_A.borrow_result.addtime|date_format:'Y-m-d H:i:s'}/{ $_A.borrow_result.addip}</div>
	</div>
		{if $_A.borrow_result.status==1}
	<div class="module_title"><strong>���״̬</strong></div>
	<div class="module_border" >
		<div class="l">���ʱ�䣺</div>
		<div class="c">
			{$_A.borrow_result.verify_time|date_format:"Y-m-d H:i"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ˣ�</div>
		<div class="c">
			{$_A.borrow_result.verify_username}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��˱�ע��</div>
		<div class="c">
			{$_A.borrow_result.verify_remark}
		</div>
	</div>
	{/if}
	{if $_A.borrow_result.status==0}
	<div class="module_title"><strong>��˴˽��</strong></div>
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>��˲�ͨ�� </div>
	</div>
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5">{ $_A.borrow_result.verify_remark}</textarea>
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="{ $_A.borrow_result.id }" />
		<input type="hidden" name="user_id" value="{ $_A.borrow_result.user_id }" />
		<input type="hidden" name="name" value="{ $_A.borrow_result.name }" />
		<input type="submit"  name="reset" value="��˴˽���" />
	</div>
	{/if}
	</form>
</div>
<!-- ���� ���� --><!-- ���н�� ��ʼ -->
{elseif $_A.query_type=="list"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="70px" class="main_td">�����</td>
			<td width="" class="main_td">�û���</td>
 			<td width="" class="main_td">������</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">����</td>
		</tr>
		{foreach  from=$_A.borrow_list key=key item=item}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td>{$item.id}<input type="hidden" name="id[]" value="{$item.id}" /></td>
			<td class="main_td1" ><a href="/{$_A.admin_url}&q=module/user/view&user_id={$item.user_id}&type=scene" class="thickbox" title="�û���ϸ��Ϣ�鿴">	{$item.username}</a></td>
 			<td title="{$item.name}"  align="left">
			<span style="color:#FF0000">��{$item.show_name}��</span>
			<a href="/invest/a{$item.id}.html" target="_blank">{$item.name|truncate:10}</a>
			</td>
			<td>{$item.account}Ԫ</td>
			<td>{$item.apr}%</td>
			<td>{if $item.isday ==1}{$item.time_limit_day}��{ else}{$item.time_limit}����{/if}</td>
			<td>{$item.addtime|date_format}</td>
			<td>
			{if $item.status ==1}
				{if $item.biao_type=='lz' && $item.is_liubiao<1}
				��ֹͣ��ת
				{elseif $item.biao_type=='lz' && $item.is_liubiao>0 && $item.account==$item.account_yes}
				���Ϲ���
				{else}
				{if $item.account>$item.account_yes}
				�����б�..
				{else}
				���������
				{/if}
				{/if}
			{elseif $item.status==0}�ȴ�����
			{elseif $item.status==-1}<font color="#999999">��δ����</font>
			{elseif $item.status==3}������ɹ�
			{elseif $item.status==4}����δͨ��
			{elseif $item.status==5}������
			{else}����δͨ��{/if}
			</td>
			<td>
			{if $item.status ==0}<a href="{$_A.query_url}/view{$_A.site_url}&user_id={$item.user_id}&id={$item.id}">����</a>{/if}
				{if $item.status==1 && $item.biao_type!='lz'}
					{if $item.account>$item.account_yes}
					<a href="{$_A.query_url}/full_view{$_A.site_url}&id={$item.id}">����</a>
					{else}
					{if $item.status!=3}<a href="{$_A.query_url}/full_view{$_A.site_url}&user_id={$item.user_id}&id={$item.id}">�������</a>{/if}
					{/if}
				{/if}
				{if $item.biao_type=='lz' && $item.is_liubiao>0 && ($item.status==1 || $item.status==0)}
				<a href="javascript:if(confirm('ȷ��Ҫֹͣ��ת�˱�ô')) location.href='{$_A.query_url}/stoplz{$_A.site_url}&id={$item.id}';submit_fool()">ֹͣ��ת</a>
				{/if}
			</td>
		</tr>
		{/foreach}
		<tr>
		<td colspan="9" >
		<div class="action">
			<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="������ǰ�б�" />
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/> 
				�����ͣ�<select name="biaoType" id="biaoType">
						<option value=""> ����</option>
						<option value="fast" {if $magic.request.biaoType=='fast'}selected{/if} >��Ѻ��</option>
						<option value="jin" {if $magic.request.biaoType=='jin'}selected{/if} >��ֵ��</option>
						<option value="miao" {if $magic.request.biaoType=='miao'}selected{/if} >�뻹��</option>
						<option value="xin" {if $magic.request.biaoType=='xin'}selected{/if} >���ñ�</option>
						<option value="lz" {if $magic.request.biaoType=='lz'}selected{/if} >��ת��</option>
					</select>
				״̬��<select id="status" ><option value="">ȫ��</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>�����б�..</option><option value="2" {if $magic.request.status==2} selected="selected"{/if}>����δͨ��</option><option value="3" {if $magic.request.status==3} selected="selected"{/if}>������ɹ�</option><option value="5" {if $magic.request.status=="5"} selected="selected"{/if}>������</option><option value="4" {if $magic.request.status=="4"} selected="selected"{/if}>���긴��ʧ��</option></select>
				����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()" /> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()" />
				<input type="button" value="����" onclick="sousuo()" />
			</div>
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="9" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</form>	
</table><!-- ���н�� ���� -->
<!-- �����б� ��ʼ -->
{elseif $_A.query_type=="full"}
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="70px" class="main_td">�����</td>
			<td width="" class="main_td" >�û���</td>
			<td width="" class="main_td" >������</td>
			<td width="" class="main_td" >�����</td>
			<td width="" class="main_td" >Ӧ����Ϣ</td>
			<td width="" class="main_td" >������</td>
			<td width="" class="main_td" >Ͷ�����</td>
			<td width="" class="main_td" >�������</td>
			<td width="" class="main_td" >����ʱ��</td>
			<td width="" class="main_td" >����ʱ��</td>
			<td width="" class="main_td" >״̬</td>
			<td width="" class="main_td" >����</td>
		</tr>
		{foreach  from=$_A.borrow_list key=key item=item}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td >{$item.id}</td>
			<td class="main_td1"  ><a href="/{$_A.admin_url}&q=module/user/view&user_id={$item.user_id}&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	{$item.username}</a></td>
			<!--<td title="{$item.name}">{$item.name|truncate:10}</td>-->
            <td title="{$item.name}" align="left">
			<span style="color:#FF0000">��{$item.show_name}��</span>
				<a href="/invest/a{$item.id}.html" target="_blank">{$item.name|truncate:10}</a>
			</td>
			<td>{$item.account}Ԫ</td>
			<td>
				{if $item.status==3}
                <script type="text/javascript">
                var tempInterest = ({$item.repayment_account|default:0}-{$item.account|default:0});
					document.write(tempInterest.toFixed(2));
                </script>
                {else}--{/if}
			</td>
			<td >{$item.apr}%</td>
			<td >{$item.tender_times|default:0}</td>
			<td >{if $item.isday==1 } 
                {$item.time_limit_day}��
                {else}
                {$item.time_limit}����
                {/if}            </td>
			<td>{$item.addtime|date_format}</td>
			<td>{$item.verify_time|date_format}</td>
			<td>
			{if $item.status ==1}
				{if $item.biao_type=='lz' && $item.is_liubiao<1}
				��ֹͣ��ת
				{elseif $item.biao_type=='lz' && $item.is_liubiao>0 && $item.account==$item.account_yes}
				���Ϲ���
				{else}
				{if $item.account>$item.account_yes}
				�����б�..
				{else}
				���������
				{/if}
				{/if}
			{elseif $item.status==0}�ȴ�����
			{elseif $item.status==-1}<font color="#999999">��δ����</font>
			{elseif $item.status==3}������ɹ�
			{elseif $item.status==4}����δͨ��
			{elseif $item.status==5}������
			{else}����δͨ��{/if}
			</td>
			<td>{if $item.status ==0}<a href="{$_A.query_url}/view{$_A.site_url}&user_id={$item.user_id}&id={$item.id}">����</a>{/if}
				{if $item.status==1 && $item.biao_type!='lz'}
					{if $item.account>$item.account_yes}
					<a href="{$_A.query_url}/full_view{$_A.site_url}&id={$item.id}">����</a>
					{else}
					{if $item.status!=3}<a href="{$_A.query_url}/full_view{$_A.site_url}&user_id={$item.user_id}&id={$item.id}">�������</a>{/if}
					{/if}
				{/if}
				{if $item.biao_type=='lz' && $item.is_liubiao>0 && ($item.status==1 || $item.status==0)}
				<a href="javascript:if(confirm('ȷ��Ҫֹͣ��ת�˱�ô')) location.href='{$_A.query_url}/stoplz{$_A.site_url}&id={$item.id}';submit_fool()">ֹͣ��ת</a>
				{/if}</td>
		</tr>
		{/foreach}
		<tr>
		<td colspan="12" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>
			�����ͣ�<select name="biaoType" id="biaoType">
					<option value="">����</option>
					<option value="fast" {if $magic.request.biaoType=='fast'}selected{/if} >��Ѻ��</option>
					<option value="jin" {if $magic.request.biaoType=='jin'}selected{/if} >��ֵ��</option>
					<option value="miao" {if $magic.request.biaoType=='miao'}selected{/if} >�뻹��</option>
					<option value="xin" {if $magic.request.biaoType=='xin'}selected{/if} >���ñ�</option>
					<option value="lz" {if $magic.request.biaoType=='lz'}selected{/if} >��ת��</option>
				</select>			״̬��<select id="status"><option value="">ȫ��</option><option value="3" {if $magic.request.status==3}selected="selected"{/if}>����ͨ��</option><option value="4" {if $magic.request.status==4}selected="selected"{/if}>����ʧ��</option></select>
			<input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="12" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</form>	
</table>
<!-- �����б� ���� --><!-- ���긴��ͳ��� ��ʼ -->
{elseif $_A.query_type == "full_view" }
<div class="module_add">
	<div class="module_title"><strong>������������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=module/user/view&user_id={$_A.borrow_result.user_id}&type=scene",500,230,"true","","true","text");'>	{$_A.borrow_result.username}</a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���⣺</div>
		<div class="c">
			{$_A.borrow_result.name}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����</div>
		<div class="h">
			��{$_A.borrow_result.account}
		</div>
		<div class="l">�����ʣ�</div>
		<div class="h">
			{$_A.borrow_result.apr} %
		</div>
	</div>
	<div class="module_border">		<div class="l">�ѽ赽�</div>		<div class="h">��{$_A.borrow_result.account_yes}</div>
		<div class="l">������ޣ�</div>
		<div class="h">
			{if $_A.borrow_result.isday==1 } 
                {$_A.borrow_result.time_limit_day}��
                {else}
                {$_A.borrow_result.time_limit}����
                {/if}
		</div>
		<div class="l">�����;��</div>
		<div class="h">
			{$_A.borrow_result.use|linkage:"borrow_use"}
		</div>
	</div>
	<div class="module_border">
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td" >�û�����</td>
			<td width="" class="main_td" >���û���</td>
			<td width="" class="main_td" >Ͷ�ʽ��</td>
			<td width="" class="main_td" >��Ч���</td>
			<td width="" class="main_td" >״̬</td>
			<td width="" class="main_td" >Ͷ��ʱ��</td>
		</tr>
		{foreach  from=$_A.borrow_tender_list key=key item=item}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}</td>
			<td class="main_td1"  ><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=module/user/view&user_id={$item.user_id}&type=scene",500,230,"true","","true","text");'>	{$item.username}</a></td>
			<td >{$item.credit_jifen}��</td>
			<td >{$item.money}Ԫ</td>
			<td ><font color="#FF0000">{$item.tender_account}Ԫ</font></td>
			<td >{if $item.money == $item.tender_account}ȫ��ͨ��{else}����ͨ��{/if}</td>
			<td >{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="9" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</table>
	</div>	{if $_A.borrow_result.account<=$_A.borrow_result.account_yes}
	<div class="module_border">
	<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td" >�ƻ�������</td>
			<td width="" class="main_td" >Ԥ�����</td>
			<td width="" class="main_td" >����</td>
			<td width="" class="main_td" >��Ϣ</td>
		</tr>
		{foreach  from=$_A.borrow_repayment key=key item=item}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td>{$key+1}</td>
			<td>{$item.repayment_time|date_format:"Y-m-d"}</td>
			<td>��{$item.repayment_account}</td>
			<td>��{$item.capital}</td>
			<td>��{$item.interest}Ԫ</td>
		</tr>
		{/foreach}
	</table>
	</div>	{/if}	<div class="module_title"><strong>������ϸ����</strong></div>	<div class="module_border">		<div class="l">Ͷ�꽱����</div>		<div class="h">			{if $_A.borrow_result.award==0}�޽���{elseif $_A.borrow_result.award==1}������{$_A.borrow_result.funds}%{else}{$_A.borrow_result.part_account}{/if}		</div>		<div class="l">Ͷ��ʧ���Ƿ�����</div>		<div class="h">			{if $_A.borrow_result.is_false==0}��{else}��{/if}		</div>	</div>	<div class="module_border">		<div class="l">���ʱ�䣺</div>		<div class="h">			{$_A.borrow_result.addtime|date_format:"Y-m-d H:i:s"}		</div>		<div class="l">�б�ʱ�䣺</div>		<div class="h">			{$_A.borrow_result.verify_time|date_format:"Y-m-d H:i:s"}		</div>	</div>	<div class="module_border">		<div class="l">���ݣ�</div>		<div class="hb" >			<table><tr><td >{$_A.borrow_result.content}</td></tr></table>		</div>	</div>
	{if $_A.borrow_result.status==1}
	<div class="module_title"><strong>��˴˽��</strong></div>
	<form name="form1" method="post"{if $_A.borrow_result.account<=$_A.borrow_result.account_yes}action=""{else}action="{$_A.query_url}/cancel{$_A.site_url}"{/if} {literal}onkeydown="if(event.keyCode==13){return false;}"{/literal}>
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">		{if $_A.borrow_result.account<=$_A.borrow_result.account_yes}
		<input type="radio" name="status" value="3" />����ͨ�� <input type="radio" name="status" value="4" checked="checked" />����ͨ�� </div>
		{else}		<input type="radio" name="status" value="5" checked="checked" />����		{/if}	</div>	{if $_A.borrow_result.account<=$_A.borrow_result.account_yes}
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="repayment_remark" cols="45" rows="5">{ $_A.borrow_result.repayment_remark}</textarea>
		</div>
	</div>	{/if}
	<div class="module_border" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="{$_A.borrow_result.id }" />		{if $_A.borrow_result.account<=$_A.borrow_result.account_yes}
		<input type="button" name="reset" value="��˴˽���" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" />		{else}		<input type="button" name="reset" value="���ش˽���" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" />		{/if}
	</div>
	</form>
	{/if}
</div><!-- ���긴��ͳ��� ���� -->
<!-- �ѻ��� ��ʼ -->
{elseif $_A.query_type=="repayment"}
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="70px" class="main_td">�����</td>
			<td width="" class="main_td" >�û���</td>
			<td width="" class="main_td" >������</td>
			<td width="" class="main_td" >����</td>
			<td width="" class="main_td" >����ʱ��</td>
			<td width="" class="main_td" >������</td>
			<td width="" class="main_td" >������Ϣ</td>
			<td width="" class="main_td" >����ʱ��</td>
			<td width="" class="main_td" >״̬</td>
		</tr>
		{foreach from=$_A.borrow_list key=key item=item}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td>{$item.id}</td>
			<td class="main_td1" align="center"><a href="/{$_A.admin_url}&q=module/user/view&user_id={$item.user_id}&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	{$item.username}</a></td>
			<td title="{$item.borrow_name}" align="left">
			<span style="color:#FF0000">��{$item.show_name}��</span>
			<a href="/invest/a{$item.borrow_id}.html" target="_blank">{$item.borrow_name|truncate:10}</a></td>
			<td >{$item.order+1 }/{$item.time_limit }</td>
			<td >{$item.repayment_time|date_format:"Y-m-d"}</td>
			<td >{$item.repayment_account}Ԫ</td>
			<td >{$item.interest}Ԫ</td>
			<td >{$item.repayment_yestime|date_format:"Y-m-d"|default:-}</td>
			<td >{if $item.status==1}<font color="#006600">�ѻ�</font>{elseif $item.status==2}<font color="#006600">��վ����</font>{else}<font color="#FF0000">δ��</font>{/if}</td>
		</tr>
		{/foreach}
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="�����б�" />
		</div>
		<div class="floatr">
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>
				�����ͣ�<select id="biaoType" name="biaoType">				<option value="">ȫ��</option>
				<option value="1" {if $magic.request.biaoType==1}selected="selected"{/if}>��Ѻ��</option>
				<option value="2" {if $magic.request.biaoType==2}selected="selected"{/if}>��ֵ��</option>
				<option value="3" {if $magic.request.biaoType==3}selected="selected"{/if}>�뻹��</option>				<option value="4" {if $magic.request.biaoType==4}selected="selected"{/if}>���ñ�</option>
			</select>
			<select id="status" >
			<option value="">ȫ��</option>
			<option value="1" {if $magic.request.status==1} selected="selected"{/if}>�ѻ�</option>			<option value="2" {if $magic.request.status==2} selected="selected"{/if}>��վ����</option>
			<option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>δ��</option>
			</select><input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="9" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</form>	
</table><!-- �ѻ��� ���� -->

<!-- ���� ��ʼ -->
{elseif $_A.query_type=="liubiao"}
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="70px" class="main_td">�����</td>
			<td width="*" class="main_td" >�û���</td>
			<td width="" class="main_td" >������</td>
			<td width="" class="main_td" >�������</td>
			<td width="" class="main_td" >�����</td>
			<td width="" class="main_td" >��Ͷ���</td>
			<td width="" class="main_td" >��ʼʱ��</td>
			<td width="" class="main_td" >����ʱ��</td>
			<td width="" class="main_td" >״̬</td>
		</tr>
		{foreach from=$_A.borrow_list key=key item=item}
		<tr {if $key%2==1}class="tr2"{/if}>
			<td>{$item.id}</td>
			<td class="main_td1" align="center"><a href="/{$_A.admin_url}&q=module/user/view&user_id={$item.user_id}&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	{$item.username}</a></td>
			<td title="{$item.borrow_name}" align="left">
			<span style="color:#FF0000">��{$item.show_name}��</span>
			<a href="/invest/a{$item.id}.html" target="_blank">{$item.name|truncate:10}</a></td>
			<td>{$item.time_limit }����</td>
			<td>{$item.account }Ԫ</td>
			<td>{$item.account_yes }Ԫ</td>
			<td>{$item.verify_time|date_format:"Y-m-d"}</td>
			<td>{$item.verify_time+$item.valid_time*24*60*60|date_format:"Y-m-d"}</td>
			<td><a href="{$_A.query_url}/liubiao_edit&id={$item.id}{$_A.site_url}">�޸�</a></td>
		</tr>
		{/foreach}
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}" />
			<input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</form>	
</table>
<!-- ���� ���� -->
<!-- �����޸� ��ʼ -->
{elseif $_A.query_type=="liubiao_edit"}
<div class="module_title"><strong>�������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="h">
			{$_A.borrow_result.username}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���⣺</div>
		<div >
			<a href="/invest/a{$_A.borrow_result.id}.html" target="_blank">{$_A.borrow_result.name}</a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ȣ�</div>
		<div class="h">
			{$_A.borrow_result.account}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ѽ��ȣ�</div>
		<div class="h">
			{$_A.borrow_result.account_yes}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			{$_A.borrow_result.verify_time|date_format}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			{$_A.borrow_result.verify_time+$_A.borrow_result.valid_time*24*60*60|date_format}
		</div>
	</div>
	<div class="module_title"><strong>���</strong></div>
	<form name="form1" method="post" action="">
	<div class="module_border">
		<div class="l">���״̬��</div>
		<div>
			{if $_A.borrow_result.biao_type=='lz'}{else}
			<input type="radio" name="status" value="1" />���귵�ؽ��{/if}<input type="radio" name="status" value="2" checked="checked" />�ӳ��������
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ӳ�������</div>
		<div >
			<input type="text" name="days" value="{$_A.borrow_amount_result.account}" size="5" value="0" />��
		</div>
	</div>	<div class="module_border">		<div class="l">��֤�룺</div>		<div >			<input type="hidden" name="id" value="{$_A.borrow_result.id}">			<input type="text" name="valicode" size="5" maxlength="4" /><img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&amp;t=' + Math.random();" alt="���ˢ��" src="/plugins/index.php?q=imgcode">		</div>	</div>
	<div class="module_border">
		<div class="l"></div>
		<div class="h">
			<input type="button" value="ȷ�����" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" />
		</div>
	</div>
	</form>
<!-- �����޸� ���� -->
<!--��ȹ��� ��ʼ-->
{elseif $_A.query_type=="amount"}
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td" >�û�����</td>
			<td width="" class="main_td" >��������</td>
			<td width="" class="main_td" >ԭ�����</td>
			<td width="" class="main_td" >������</td>
			<td width="" class="main_td" >�¶��</td>
			<td width="" class="main_td" >����ʱ��</td>
			<td width="" class="main_td" >����</td>
			<td width="" class="main_td" >��ע</td>
			<td width="" class="main_td" >״̬</td>
			<td width="" class="main_td" >����</td>
		</tr>
		{foreach from=$_A.borrow_amount_list key=key item=item}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td>{$item.id}</td>
			<td class="main_td1" align="center"><a href="/{$_A.admin_url}&q=module/user/view&user_id={$item.user_id}&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	{$item.username}</a></td>
			<td width="80" >{if $item.type =="tender_vouch"}<a href="{$_A.query_url}/amount&type=tender_vouch&a=borrow">Ͷ�ʵ������</a>{elseif $item.type =="borrow_vouch"}<a href="{$_A.query_url}/amount&type=borrow_vouch&a=borrow">�������</a>{else}<a href="{$_A.query_url}/amount&type=credit&a=borrow">������ö��</a>{/if}</td>
			<td width="70" >{$item.account_old}Ԫ</td>
			<td width="70"  >{$item.account}Ԫ</td>
			<td>{$item.account_new}Ԫ</td>
			<td>{ $item.addtime|date_format}</td>
			<td>{ $item.content}</td>
			<td>{ $item.remark}</td>
			<td width="50">{if $item.status==2}<font color="#6699CC">�����</font>{elseif $item.status==1}�ɹ� {else}<font color="#FF0000">ʧ��</font>{/if}</td>
			<td width="70">{if $item.status==2}<a href="{$_A.query_url}/amount_view{$_A.site_url}&id={$item.id}">���/�鿴</a>{else}--{/if}</td>
		</tr>
		{/foreach}
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>
			״̬��<select id="status" ><option value="">ȫ��</option><option value="2" {if $magic.request.status==2} selected="selected"{/if}>�ȴ����</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>��ͨ��</option><option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>δͨ��</option></select> <input type="button" value="����" onclick="sousuo('{$_A.query_url}/amount{$_A.site_url}')" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="11" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</form>	
</table>
<!--��ȹ��� ����-->
<!--��ǰ�Ѿ����ڽ�� ��ʼ-->
{elseif $_A.query_type=="late"}
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="70px" class="main_td">�����</td>
			<td width="" class="main_td" >�����</td>
			<td width="" class="main_td" >������</td>
			<td width="" class="main_td" >����</td>
			<td width="" class="main_td" >����ʱ��</td>
			<td width="" class="main_td" >Ӧ����Ϣ</td>
			<td width="" class="main_td" >��������</td>
			<td width="" class="main_td" >����</td>
			<td width="" class="main_td" >����</td>
		</tr>
		{foreach from=$_A.borrow_repayment_list key=key item=item}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}</td>
			<td class="main_td1" align="center"><a href="/{$_A.admin_url}&q=module/user/view&user_id={$item.user_id}&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	{$item.username}</a></td>
			<td align="left">
			<span style="color:#FF0000">��{$item.show_name}��</span>
			<a href="/invest/a{$item.borrow_id}.html" target="_blank">{$item.borrow_name}</a></td>
			<td>{$item.order+1 }/{$item.time_limit}</td>
			<td>{$item.repayment_time|date_format:"Y-m-d"}</td>
			<td>{$item.repayment_account }Ԫ</td>
			<td>{$item.late_days}��</td>
			<td>{$item.late_interest}</td>
			<td>{if $item.status==2}<font color="#FF0000">�Ѵ���</font>{else}{if $item.late_days>0}<a href="{$_A.query_url}/late_repay{$_A.site_url}&id={$item.id}">����</a>{else}-{/if}{/if}</td>
		</tr>
		{/foreach}
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="�����б�" />
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/> 
			״̬��<select id="status"><option value="">ȫ��</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>�ѻ�</option><option value="2" {if $magic.request.status==2} selected="selected"{/if}>��վ����</option><option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>δ��</option></select> 
			<input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			{$_A.showpage}
			</td>
		</tr>
	</form>
</table><!-- ��ǰ�Ѿ����ڽ�� ���� --><!-- ��վ���� ��ʼ -->
{elseif $_A.query_type=="late_repay"}<div class="module_title"><strong>������վ����</strong></div><div class="module_border">	<div class="l">���⣺</div>	<div>		<span style="color:#FF0000">��{$_A.borrow_result.show_name}��</span>		<a href="/invest/a{$_A.borrow_result.borrow_id}.html" target="_blank">{$_A.borrow_result.borrow_name}</a>	</div></div><div class="module_border">	<div class="l">����ˣ�</div>	<div>{$_A.borrow_result.username}</div></div><div class="module_border">	<div class="l">������</div>	<div>{$_A.borrow_result.order+1 }/{$_A.borrow_result.time_limit}</div></div><div class="module_border">	<div class="l">Ӧ��ʱ�䣺</div>	<div>{$_A.borrow_result.repayment_time|date_format:"Y-m-d"}</div></div><div class="module_border">	<div class="l">����������</div>	<div>{$_A.borrow_result.late_days}��</div></div><div class="module_border">	<div class="l">���ڷ���</div>	<div>{$_A.borrow_result.late_interest}Ԫ</div></div><div class="module_border">	<div class="l">Ӧ����</div>	<div>{$_A.borrow_result.repayment_account}Ԫ</div></div><div class="module_title"><strong>Ͷ������Ϣ</strong></div><div class="module_border">	<table  border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">		<tr>			<td width="" class="main_td">ID</td>			<td width="" class="main_td" >�û�����</td>			<td width="" class="main_td" >vip״̬</td>			<td width="" class="main_td" >����Ӧ�ձ���</td>			<td width="" class="main_td" >����Ӧ����Ϣ</td>			<td width="" class="main_td" >Ӧ�պϼ�</td>			<td width="" class="main_td" >��վ��������</td>			<td width="" class="main_td" >��վ��������</td>			<td width="" class="main_td" >��վ������Ϣ</td>			<td width="" class="main_td" >��վ�����ϼ�</td>		</tr>		{foreach  from=$_A.borrow_tender_list key=key item=item}		<tr {if $key%2==1} class="tr2"{/if}>			<td>{$item.id}</td>			<td class="main_td1"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=module/user/view&user_id={$item.user_id}&type=scene",500,230,"true","","true","text");'>{$item.username}</a></td>			<td>{if $item.vip_status==1}��{else}��{/if}</td>			<td>{$item.capital}Ԫ</td>			<td>{$item.interest}Ԫ</td>			<td>{$item.repay_account}Ԫ</td>			<td>{$item.bili*100}%</td>			<td>{$item.webrepay_capital}Ԫ</td>			<td>{$item.webrepay_interest}Ԫ</td>			<td><font style="color:red">{$item.webrepay_account}Ԫ</font></td>		</tr>		{/foreach}	</table></div>{if $_A.borrow_result.status==0}<div class="module_title"><strong>��վ����</strong></div>{if $_A.borrow_result.advance_time<=$_A.borrow_result.late_days}<form name="form1" method="post" action=""><div class="module_border">	<div class="l">��֤�룺</div>	<input type="hidden" name="id" value="{$_A.borrow_result.id}">	<div><input type="text" name="valicode" maxlength="4" size="5"><img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&amp;t=' + Math.random();" alt="���ˢ��" src="/plugins/index.php?q=imgcode"></div></div><div style="text-align:center"><input type="button" value="ȷ����վ����" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" /></div>{else}<h2 style="text-align:center">�˽�����δ����{$_A.borrow_result.advance_time}�죬���ܴ���</h2>{/if}</form>{/if}<!-- ��վ���� ���� -->
<!-- ��Ѻ�굽�� ��ʼ -->
{elseif $_A.query_type=="lateFast"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">�û���</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">Ӧ����Ϣ</td>
			<td width="" class="main_td">Ӧ����Ϣ</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">����</td>
		</tr>
                <?php  $showtime=date("y-m-d");?>
		{foreach from=$_A.borrow_repayment_list key=key item=item}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td >{$item.id}</td>
			<td class="main_td1" align="center"><a href="/{$_A.admin_url}&q=module/user/view&user_id={$item.user_id}&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	{$item.username}</a></td>
			<td align="left">
			<span style="color:#FF0000">��{$item.show_name}��</span>
			<a href="/invest/a{$item.borrow_id}.html" target="_blank">{$item.borrow_name}</a></td>
			<td>{$item.order+1 }/{$item.time_limit}</td>
			<td >{$item.repayment_time|date_format:"Y-m-d"}</td>
			<td >{$item.repayment_account }Ԫ</td>
			<td >{$item.interest}Ԫ</td>
			<td >{$item.late_days}��</td>
			<td >{$item.late_interest}</td>
			<td >{if $item.status==2}<font color="#FF0000">�Ѵ���</font>{else}{if $item.late_days>=0}<a href="{$_A.query_url}/late_repay{$_A.site_url}&id={$item.id}">����</a>{else}--{/if}{/if}</td>
		</tr>
		{/foreach}
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		<input type="button" onclick="sousuo('excel')" value="�����б�" />
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}" />
			״̬��<select id="status" ><option value="">ȫ��</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>�ѻ�</option><option value="2" {if $magic.request.status==2} selected="selected"{/if}>��վ����</option><option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>δ��</option></select> 
			<input type="button" value="����" onclick="sousuo('{$_A.query_url}/amount{$_A.site_url}')" />
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			{$_A.showpage}
			</td>
		</tr>
	</form>
</table>
<!--��Ѻ�굽�� ����-->
<!--������ ��ʼ-->
{elseif $_A.query_type=="amount_view"}
<div class="module_title"><strong>������</strong></div>
<div class="module_border">
	<div class="l">�û�����</div>
	<div class="h">
		{$_A.borrow_amount_result.username}
	</div>
</div>
<div class="module_border">
	<div class="l">������ͣ�</div>
	<div class="h">
		{if $_A.borrow_amount_result.type=="tender_vouch"}<font color="#FF0000">Ͷ�ʵ������</font>{elseif $_A.borrow_amount_result.type=="borrow_vouch"}<font color="#FF0000">�������</font>{else}���ö��{/if}
	</div>
</div>
<div class="module_border">
	<div class="l">ԭ����</div>
	<div class="h">
		{$_A.borrow_amount_result.account_old|default:0}
	</div>
</div>
<div class="module_border">
	<div class="l">�����ȣ�</div>
	<div class="h">
		{$_A.borrow_amount_result.account}
	</div>
</div>
<div class="module_border">
	<div class="l">���ݣ�</div>
	<div class="h">
		{$_A.borrow_amount_result.content}
	</div>
</div>
<div class="module_border">
	<div class="l">��ע��</div>
	<div class="h">
		{$_A.borrow_amount_result.remark}
	</div>
</div>
<div class="module_border">
	<div class="l">����ʱ�䣺</div>
	<div class="h">
		{$_A.borrow_amount_result.addtime|date_format}
	</div>
</div>{if $_A.borrow_amount_result.status==2}
<div class="module_title"><strong>���</strong></div>
<form method="post" action="" name="form1">
<div class="module_border">
	<div class="l">���״̬��</div>
	<div class="h">
		<input type="radio" name="status" value="1" />ͨ��  <input type="radio" name="status" value="0" checked="checked" />��ͨ��
	</div>
</div>
<div class="module_border">
	<div class="l">ͨ����ȣ�</div>
	<div class="h">
		<input type="text" name="account" value="{$_A.borrow_amount_result.account}" />
		<input type="hidden" name="type" value="{ $_A.borrow_amount_result.type}" />
	</div>
</div>
<div class="module_border">
	<div class="l">��˱�ע��</div>
	<div class="h" style="width:305px">
		<textarea name="verify_remark" rows="5" cols="40" ></textarea>
	</div>
</div><div class="module_border">	<div class="l">��֤�룺</div>	<div class="h">		<input type="text" name="valicode" size="5" maxlength="4"><img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&amp;t=' + Math.random();" alt="���ˢ��" src="/plugins/index.php?q=imgcode">	</div></div>
<div class="module_border">
	<div class="l"></div>
	<div class="h">
		<input type="button" name="tijiao" value="ȷ�����" onclick="sub_form()" />
	</div>
</div>{/if}
</form>{literal}<script type="text/javascript">function sub_form(){	var form=document.forms['form1'];	var verify_remark=form.elements['verify_remark'].value;	var account=form.elements['account'].value;	var valicode=form.elements['valicode'].value;	account=parseFloat(account);	var err="";	if(verify_remark.length==0){		err += "--��ע����Ϊ��\n";	}	if(account<=0 || isNaN(account)){		err += "--ͨ�������������\n";	}	if(valicode.length!=4){		err += "--��֤����������";	}	if(err.length>0){		alert(err);	}else{		form.elements['tijiao'].disabled=true;		form.elements['tijiao'].value="�ύ��..";		form.submit();
		submit_fool();	}}</script>{/literal}<!--������ ����-->		
<!--ͳ�� ��ʼ-->
{elseif $_A.query_type=="tongji"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="*" class="main_td">����</td>
			<td width="*" class="main_td">�ܶ�</td>
		</tr>
		<tr  class="tr2">
			<td >�ɹ�����ܶ�</td>
			<td >��{$_A.borrow_tongji.success_num}</td>
		</tr>
		<tr  >
			<td >�������ܶ�</td>
			<td >��{$_A.borrow_tongji.success_num1}</td>
		</tr>
		<tr  class="tr2">
			<td >δ�����ܶ�</td>
			<td >��{$_A.borrow_tongji.success_num0}</td>
		</tr>
		<tr  >
			<td >�����ܶ�</td>
			<td >{$_A.borrow_tongji.laterepay}</td>
		</tr>
		<tr  class="tr2">
			<td >���ڼ������ܶ�</td>
			<td >��{$_A.borrow_tongji.success_laterepay}</td>
		</tr>
		<tr >
			<td >����δ�����ܶ�</td>
			<td >��{$_A.borrow_tongji.false_laterepay}</td>
			
		</tr>
		
	</form>	
</table>
<!--ͳ�� ����-->

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
	  {foreach from="$_A.account_tongji" key=key  item="item"}
		<tr >
			<td width="*" class="main_td">��������</td>
			<td width="*" class="main_td">{$key}</td>
			<td width="" class="main_td">���</td>
		</tr>
		{foreach from="$item" key="_key" item="_item"}
		<tr  class="tr2">
			<td >{$_item.type_name}</td>
			<td >{$_item.type}</td>
			<td >��{$_item.num}</td>
		</tr>
		{/foreach}
	{/foreach}
	</form>	
</table>
<!--ͳ�� ����-->
{/if}


<script>

var urls = '{$_A.query_url}/{$_A.query_type}{$_A.site_url}';
{literal}
function sousuo(){	var sou = "";	if(arguments[0]=='excel'){		sou += "&type=excel";	}
	var username = $("#username").val() || "";	var status = $("#status").val() || "";	var dotime1 = $("#dotime1").val() || "";	var dotime2 = $("#dotime2").val() || "";	var biaoType = $("#biaoType").val() || "";
	if (username!=""){
		sou += "&username="+username;
	}
	if (status!=""){
		sou += "&status="+status;
	}
	if (dotime1!=""){
		sou += "&dotime1="+dotime1;
	}
	if (dotime2!=""){
		sou += "&dotime2="+dotime2;
	}
	if (biaoType!=""){
		sou += "&biaoType="+biaoType;
	}
	location.href=urls+sou;
}

function sousuoExcel(url){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var keywords = $("#keywords").val();
	if (keywords!=""){
		sou += "&keywords="+keywords;
	}
	var status = $("#status").val();
	if (status!=""){
		sou += "&status="+status;
	}
	
	var dotime1 = $("#dotime1").val();
	if (dotime1!=""){
		sou += "&dotime1="+dotime1;
	}
	var dotime2 = $("#dotime2").val();
	if (dotime2!=""){
		sou += "&dotime2="+dotime2;
	}
	
	var biaoType = $("#biaoType").val();
	if (biaoType!=""){
		sou += "&biaoType="+biaoType;
	}
 
 
	if (sou!=""){
		
		location.href=url+sou;
	}
}

function sousuoFull(url){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var biaoType = $("#biaoType").val();
	if (biaoType!=""){
		sou += "&biaoType="+biaoType;
	}
	var is_vouch = $("#is_vouch").val();
	if (is_vouch!=""){
		sou += "&is_vouch="+is_vouch;
	}
	if (sou!=""){
		
		location.href=url+sou;
	}
}

function sousuoBiaoOrder(url){
	var sou = "";

	var dotime1 = $("#dotime1").val();
	if (dotime1!=""){
		sou += "&dotime1="+dotime1;
	}
	var dotime2 = $("#dotime2").val();
	if (dotime2!=""){
		sou += "&dotime2="+dotime2;
	}
	
	if (sou!=""){
		
		location.href=url+sou;
	}
}
</script>
{/literal}