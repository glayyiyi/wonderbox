<!-- ���� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "view"): ?>
<div class="module_add">
	<form name="form1" method="post" action="" onsubmit="return submit_fool();" enctype="multipart/form-data" >
	<div class="module_title"><strong>��˽���</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
		<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['_A']['borrow_result']['user_id'])) $this->magic_vars['_A']['borrow_result']['user_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['user_id']; ?>&type=scene",500,230,"true","","true","text");'>	<? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = '';$_tmp = $this->magic_vars['_A']['user_result']['username']; if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['_A']['borrow_result']['username']);echo $_tmp;unset($_tmp); ?></a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==0): ?>����������<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['status']==1): ?>����ļ��<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['status']==2): ?>���ʧ��<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['status']==3): ?>������<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['status']==4): ?>�������ʧ��<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['status']==5): ?>����<? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����;��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['use'])) $this->magic_vars['_A']['borrow_result']['use'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['use'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_use");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ޣ�</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['borrow_result']['isday'])) $this->magic_vars['_A']['borrow_result']['isday']=''; ;if (  $this->magic_vars['_A']['borrow_result']['isday']==1): ?> 
                <? if (!isset($this->magic_vars['_A']['borrow_result']['time_limit_day'])) $this->magic_vars['_A']['borrow_result']['time_limit_day'] = ''; echo $this->magic_vars['_A']['borrow_result']['time_limit_day']; ?>��
                <? else: ?>
                <? if (!isset($this->magic_vars['_A']['borrow_result']['time_limit'])) $this->magic_vars['_A']['borrow_result']['time_limit'] = ''; echo $this->magic_vars['_A']['borrow_result']['time_limit']; ?>����
                <? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ʽ��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['isday'])) $this->magic_vars['_A']['borrow_result']['isday']=''; ;if (  $this->magic_vars['_A']['borrow_result']['isday']==1): ?> 
                ����ȫ���
            <? else: ?>
                <? if (!isset($this->magic_vars['_A']['borrow_result']['style'])) $this->magic_vars['_A']['borrow_result']['style'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
            <? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ܽ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?><input type="hidden" name="account" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>" /> Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����ʣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['apr'])) $this->magic_vars['_A']['borrow_result']['apr'] = ''; echo $this->magic_vars['_A']['borrow_result']['apr']; ?> %
		</div>
	</div>
	<div class="module_border">
		<div class="l">���Ͷ���</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['lowest_account'])) $this->magic_vars['_A']['borrow_result']['lowest_account'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['lowest_account'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_lowest_account");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���Ͷ���ܶ</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['most_account'])) $this->magic_vars['_A']['borrow_result']['most_account'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['most_account'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_most_account");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
		<div class="module_border">
		<div class="l">��Чʱ�䣺</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['valid_time'])) $this->magic_vars['_A']['borrow_result']['valid_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['valid_time'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_valid_time");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_title"><strong>���ý���</strong></div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="0" <? if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']='';if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award']==0 ||  $this->magic_vars['_A']['borrow_result']['award']==""): ?> checked="checked"<? endif; ?> disabled="disabled">�����ý���</div>
		<div class="c">
			 <span>����������˽��������ᶳ�����ʻ�����Ӧ���˻������Ҫ���ý�������ȷ�������ʻ����㹻 ���˻��� </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award']==1): ?> checked="checked"<? endif; ?> disabled="disabled"/>���̶�����̯������</div>
		<div class="c">
			<input type="text" name="part_account" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['part_account'])) $this->magic_vars['_A']['borrow_result']['part_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['part_account']; ?>" size="5" disabled="disabled"/> Ԫ <span>��������Ԫ��Ϊ��λ���������ñ��α��Ҫ����������Ͷ���û����ܽ�  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="2" <? if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award']==2): ?> checked="checked"<? endif; ?> disabled="disabled"/>��Ͷ�������������</div>
		<div class="c">
			<input type="text" name="funds" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['funds'])) $this->magic_vars['_A']['borrow_result']['funds'] = ''; echo $this->magic_vars['_A']['borrow_result']['funds']; ?>" size="5" disabled="disabled"/> %  <span>�������ñ��α��Ҫ����������Ͷ���û��Ľ���������  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w"><input type="checkbox" name="is_false" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['is_false'])) $this->magic_vars['_A']['borrow_result']['is_false']=''; ;if (  $this->magic_vars['_A']['borrow_result']['is_false']==1): ?> checked="checked"<? endif; ?>  disabled="disabled"/>���ʧ��ʱҲͬ��������</div>
		<div class="c">
			  <span>�������ѡ�˴�ѡ�����δ�������ʧ��ʱͬ���ά����Ͷ���û������û�й�ѡ�����ʧ��ʱ��ѽ������ⶳ���˻���   </span>
		</div>
	</div>
	<? if (!isset($this->magic_vars['_A']['borrow_result']['is_vouch'])) $this->magic_vars['_A']['borrow_result']['is_vouch']=''; ;if (  $this->magic_vars['_A']['borrow_result']['is_vouch']==1): ?>
	<div class="module_title"><strong>��������</strong></div>
	<div class="module_border">
		<div class="l">����������</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_award'])) $this->magic_vars['_A']['borrow_result']['vouch_award'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_award']; ?>%
		</div>
	</div>
	<div class="module_border">
		<div class="l">ָ�������ˣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_user'])) $this->magic_vars['_A']['borrow_result']['vouch_user'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_user']; ?>
		</div>
	</div>
	<? endif; ?>
	<div class="module_title"><strong>�ʻ���Ϣ����</strong></div>
	<div class="module_border">
		<div class="w">�����ҵ��ʻ��ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_account" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_account'])) $this->magic_vars['_A']['borrow_result']['open_account']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_account']==1): ?> checked="checked"<? endif; ?> disabled="disabled"/> <span> ��������ϴ�ѡ�����ʵʱ�������ʻ��ģ��˻��ܶ�����������ܶ  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w">�����ҵĽ���ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_borrow" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_borrow'])) $this->magic_vars['_A']['borrow_result']['open_borrow']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_borrow']==1): ?> checked="checked"<? endif; ?> disabled="disabled"/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�����ܶ�ѻ����ܶδ�����ܶ�ٻ��ܶ�����ܶ </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w">�����ҵ�Ͷ���ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_tender" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_tender'])) $this->magic_vars['_A']['borrow_result']['open_tender']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_tender']==1): ?> checked="checked"<? endif; ?> disabled="disabled"/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�Ͷ���ܶ���ջ��ܶ���ջ��ܶ  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w">�����ҵ����ö�������</div>
		<div class="c">
			<input type="checkbox" name="open_credit" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_credit'])) $this->magic_vars['_A']['borrow_result']['open_credit']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_credit']==1): ?> checked="checked"<? endif; ?> disabled="disabled"/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�������ö�ȡ�������ö�ȡ�  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ʱ��/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['addtime'])) $this->magic_vars['_A']['borrow_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['borrow_result']['addip'])) $this->magic_vars['_A']['borrow_result']['addip'] = ''; echo $this->magic_vars['_A']['borrow_result']['addip']; ?></div>
	</div>
		<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==1): ?>
	<div class="module_title"><strong>���״̬</strong></div>
	<div class="module_border" >
		<div class="l">���ʱ�䣺</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ˣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_username'])) $this->magic_vars['_A']['borrow_result']['verify_username'] = ''; echo $this->magic_vars['_A']['borrow_result']['verify_username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��˱�ע��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_remark'])) $this->magic_vars['_A']['borrow_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['verify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
	<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==0): ?>
	<div class="module_title"><strong>��˴˽��</strong></div>
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>��˲�ͨ�� </div>
	</div>
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['borrow_result']['verify_remark'])) $this->magic_vars['_A']['borrow_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['verify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>" />
		<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['user_id'])) $this->magic_vars['_A']['borrow_result']['user_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['user_id']; ?>" />
		<input type="hidden" name="name" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?>" />
		<input type="submit"  name="reset" value="��˴˽���" />
	</div>
	<? endif; ?>
	</form>
</div>
<!-- ���� ���� --><!-- ���н�� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="list"): ?>
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
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
			<td class="main_td1" ><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene" class="thickbox" title="�û���ϸ��Ϣ�鿴">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
 			<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"  align="left">
			<span style="color:#FF0000">��<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>��</span>
			<a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a>
			</td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['apr'])) $this->magic_vars['item']['apr'] = ''; echo $this->magic_vars['item']['apr']; ?>%</td>
			<td><? if (!isset($this->magic_vars['item']['isday'])) $this->magic_vars['item']['isday']=''; ;if (  $this->magic_vars['item']['isday'] ==1): ?><? if (!isset($this->magic_vars['item']['time_limit_day'])) $this->magic_vars['item']['time_limit_day'] = ''; echo $this->magic_vars['item']['time_limit_day']; ?>��<? else: ?><? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>����<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']=''; ;if (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']<1): ?>
				��ֹͣ��ת
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']='';if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;elseif (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']>0 &&  $this->magic_vars['item']['account']== $this->magic_vars['item']['account_yes']): ?>
				���Ϲ���
				<? else: ?>
				<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;if (  $this->magic_vars['item']['account']> $this->magic_vars['item']['account_yes']): ?>
				�����б�..
				<? else: ?>
				���������
				<? endif; ?>
				<? endif; ?>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==0): ?>�ȴ�����
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==-1): ?><font color="#999999">��δ����</font>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>������ɹ�
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>����δͨ��
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==5): ?>������
			<? else: ?>����δͨ��<? endif; ?>
			</td>
			<td>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==0): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">����</a><? endif; ?>
				<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']=''; ;if (  $this->magic_vars['item']['status']==1 &&  $this->magic_vars['item']['biao_type']!='lz'): ?>
					<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;if (  $this->magic_vars['item']['account']> $this->magic_vars['item']['account_yes']): ?>
					<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">����</a>
					<? else: ?>
					<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']!=3): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�������</a><? endif; ?>
					<? endif; ?>
				<? endif; ?>
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']>0 && ( $this->magic_vars['item']['status']==1 ||  $this->magic_vars['item']['status']==0)): ?>
				<a href="javascript:if(confirm('ȷ��Ҫֹͣ��ת�˱�ô')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/stoplz<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>';submit_fool()">ֹͣ��ת</a>
				<? endif; ?>
			</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="9" >
		<div class="action">
			<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="������ǰ�б�" />
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/> 
				�����ͣ�<select name="biaoType" id="biaoType">
						<option value=""> ����</option>
						<option value="fast" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='fast'): ?>selected<? endif; ?> >��Ѻ��</option>
						<option value="jin" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='jin'): ?>selected<? endif; ?> >��ֵ��</option>
						<option value="miao" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='miao'): ?>selected<? endif; ?> >�뻹��</option>
						<option value="xin" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='xin'): ?>selected<? endif; ?> >���ñ�</option>
						<option value="lz" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='lz'): ?>selected<? endif; ?> >��ת��</option>
					</select>
				״̬��<select id="status" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>�����б�..</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==2): ?> selected="selected"<? endif; ?>>����δͨ��</option><option value="3" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==3): ?> selected="selected"<? endif; ?>>������ɹ�</option><option value="5" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="5"): ?> selected="selected"<? endif; ?>>������</option><option value="4" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="4"): ?> selected="selected"<? endif; ?>>���긴��ʧ��</option></select>
				����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()" /> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()" />
				<input type="button" value="����" onclick="sousuo()" />
			</div>
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table><!-- ���н�� ���� -->
<!-- �����б� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="full"): ?>
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
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1"  ><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<!--<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></td>-->
            <td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" align="left">
			<span style="color:#FF0000">��<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>��</span>
				<a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a>
			</td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td>
				<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==3): ?>
                <script type="text/javascript">
                var tempInterest = (<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = '';$_tmp = $this->magic_vars['item']['repayment_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = '';$_tmp = $this->magic_vars['item']['account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
					document.write(tempInterest.toFixed(2));
                </script>
                <? else: ?>--<? endif; ?>
			</td>
			<td ><? if (!isset($this->magic_vars['item']['apr'])) $this->magic_vars['item']['apr'] = ''; echo $this->magic_vars['item']['apr']; ?>%</td>
			<td ><? if (!isset($this->magic_vars['item']['tender_times'])) $this->magic_vars['item']['tender_times'] = '';$_tmp = $this->magic_vars['item']['tender_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['isday'])) $this->magic_vars['item']['isday']=''; ;if (  $this->magic_vars['item']['isday']==1): ?> 
                <? if (!isset($this->magic_vars['item']['time_limit_day'])) $this->magic_vars['item']['time_limit_day'] = ''; echo $this->magic_vars['item']['time_limit_day']; ?>��
                <? else: ?>
                <? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>����
                <? endif; ?>            </td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']=''; ;if (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']<1): ?>
				��ֹͣ��ת
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']='';if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;elseif (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']>0 &&  $this->magic_vars['item']['account']== $this->magic_vars['item']['account_yes']): ?>
				���Ϲ���
				<? else: ?>
				<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;if (  $this->magic_vars['item']['account']> $this->magic_vars['item']['account_yes']): ?>
				�����б�..
				<? else: ?>
				���������
				<? endif; ?>
				<? endif; ?>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==0): ?>�ȴ�����
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==-1): ?><font color="#999999">��δ����</font>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>������ɹ�
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>����δͨ��
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==5): ?>������
			<? else: ?>����δͨ��<? endif; ?>
			</td>
			<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==0): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">����</a><? endif; ?>
				<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']=''; ;if (  $this->magic_vars['item']['status']==1 &&  $this->magic_vars['item']['biao_type']!='lz'): ?>
					<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;if (  $this->magic_vars['item']['account']> $this->magic_vars['item']['account_yes']): ?>
					<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">����</a>
					<? else: ?>
					<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']!=3): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�������</a><? endif; ?>
					<? endif; ?>
				<? endif; ?>
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']>0 && ( $this->magic_vars['item']['status']==1 ||  $this->magic_vars['item']['status']==0)): ?>
				<a href="javascript:if(confirm('ȷ��Ҫֹͣ��ת�˱�ô')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/stoplz<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>';submit_fool()">ֹͣ��ת</a>
				<? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="12" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
			�����ͣ�<select name="biaoType" id="biaoType">
					<option value="">����</option>
					<option value="fast" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='fast'): ?>selected<? endif; ?> >��Ѻ��</option>
					<option value="jin" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='jin'): ?>selected<? endif; ?> >��ֵ��</option>
					<option value="miao" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='miao'): ?>selected<? endif; ?> >�뻹��</option>
					<option value="xin" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='xin'): ?>selected<? endif; ?> >���ñ�</option>
					<option value="lz" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='lz'): ?>selected<? endif; ?> >��ת��</option>
				</select>			״̬��<select id="status"><option value="">ȫ��</option><option value="3" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==3): ?>selected="selected"<? endif; ?>>����ͨ��</option><option value="4" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==4): ?>selected="selected"<? endif; ?>>����ʧ��</option></select>
			<input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="12" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!-- �����б� ���� --><!-- ���긴��ͳ��� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "full_view"): ?>
<div class="module_add">
	<div class="module_title"><strong>������������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['_A']['borrow_result']['user_id'])) $this->magic_vars['_A']['borrow_result']['user_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['user_id']; ?>&type=scene",500,230,"true","","true","text");'>	<? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?></a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���⣺</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����</div>
		<div class="h">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>
		</div>
		<div class="l">�����ʣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['apr'])) $this->magic_vars['_A']['borrow_result']['apr'] = ''; echo $this->magic_vars['_A']['borrow_result']['apr']; ?> %
		</div>
	</div>
	<div class="module_border">		<div class="l">�ѽ赽�</div>		<div class="h">��<? if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['account_yes']; ?></div>
		<div class="l">������ޣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['isday'])) $this->magic_vars['_A']['borrow_result']['isday']=''; ;if (  $this->magic_vars['_A']['borrow_result']['isday']==1): ?> 
                <? if (!isset($this->magic_vars['_A']['borrow_result']['time_limit_day'])) $this->magic_vars['_A']['borrow_result']['time_limit_day'] = ''; echo $this->magic_vars['_A']['borrow_result']['time_limit_day']; ?>��
                <? else: ?>
                <? if (!isset($this->magic_vars['_A']['borrow_result']['time_limit'])) $this->magic_vars['_A']['borrow_result']['time_limit'] = ''; echo $this->magic_vars['_A']['borrow_result']['time_limit']; ?>����
                <? endif; ?>
		</div>
		<div class="l">�����;��</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['use'])) $this->magic_vars['_A']['borrow_result']['use'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['use'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_use");echo $_tmp;unset($_tmp); ?>
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
		<?  if(!isset($this->magic_vars['_A']['borrow_tender_list']) || $this->magic_vars['_A']['borrow_tender_list']=='') $this->magic_vars['_A']['borrow_tender_list'] = array();  $_from = $this->magic_vars['_A']['borrow_tender_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1"  ><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'>	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['credit_jifen'])) $this->magic_vars['item']['credit_jifen'] = ''; echo $this->magic_vars['item']['credit_jifen']; ?>��</td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?>Ԫ</td>
			<td ><font color="#FF0000"><? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?>Ԫ</font></td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money']='';if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account']=''; ;if (  $this->magic_vars['item']['money'] ==  $this->magic_vars['item']['tender_account']): ?>ȫ��ͨ��<? else: ?>����ͨ��<? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</table>
	</div>	<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes']=''; ;if (  $this->magic_vars['_A']['borrow_result']['account']<= $this->magic_vars['_A']['borrow_result']['account_yes']): ?>
	<div class="module_border">
	<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td" >�ƻ�������</td>
			<td width="" class="main_td" >Ԥ�����</td>
			<td width="" class="main_td" >����</td>
			<td width="" class="main_td" >��Ϣ</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_repayment']) || $this->magic_vars['_A']['borrow_repayment']=='') $this->magic_vars['_A']['borrow_repayment'] = array();  $_from = $this->magic_vars['_A']['borrow_repayment']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?></td>
			<td><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td>��<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?></td>
			<td>��<? if (!isset($this->magic_vars['item']['capital'])) $this->magic_vars['item']['capital'] = ''; echo $this->magic_vars['item']['capital']; ?></td>
			<td>��<? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?>Ԫ</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
	</table>
	</div>	<? endif; ?>	<div class="module_title"><strong>������ϸ����</strong></div>	<div class="module_border">		<div class="l">Ͷ�꽱����</div>		<div class="h">			<? if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award']==0): ?>�޽���<? if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['award']==1): ?>������<? if (!isset($this->magic_vars['_A']['borrow_result']['funds'])) $this->magic_vars['_A']['borrow_result']['funds'] = ''; echo $this->magic_vars['_A']['borrow_result']['funds']; ?>%<? else: ?><? if (!isset($this->magic_vars['_A']['borrow_result']['part_account'])) $this->magic_vars['_A']['borrow_result']['part_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['part_account']; ?><? endif; ?>		</div>		<div class="l">Ͷ��ʧ���Ƿ�����</div>		<div class="h">			<? if (!isset($this->magic_vars['_A']['borrow_result']['is_false'])) $this->magic_vars['_A']['borrow_result']['is_false']=''; ;if (  $this->magic_vars['_A']['borrow_result']['is_false']==0): ?>��<? else: ?>��<? endif; ?>		</div>	</div>	<div class="module_border">		<div class="l">���ʱ�䣺</div>		<div class="h">			<? if (!isset($this->magic_vars['_A']['borrow_result']['addtime'])) $this->magic_vars['_A']['borrow_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>		</div>		<div class="l">�б�ʱ�䣺</div>		<div class="h">			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>		</div>	</div>	<div class="module_border">		<div class="l">���ݣ�</div>		<div class="hb" >			<table><tr><td ><? if (!isset($this->magic_vars['_A']['borrow_result']['content'])) $this->magic_vars['_A']['borrow_result']['content'] = ''; echo $this->magic_vars['_A']['borrow_result']['content']; ?></td></tr></table>		</div>	</div>
	<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==1): ?>
	<div class="module_title"><strong>��˴˽��</strong></div>
	<form name="form1" method="post"<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes']=''; ;if (  $this->magic_vars['_A']['borrow_result']['account']<= $this->magic_vars['_A']['borrow_result']['account_yes']): ?>action=""<? else: ?>action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cancel<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>"<? endif; ?> onkeydown="if(event.keyCode==13){return false;}">
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">		<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes']=''; ;if (  $this->magic_vars['_A']['borrow_result']['account']<= $this->magic_vars['_A']['borrow_result']['account_yes']): ?>
		<input type="radio" name="status" value="3" />����ͨ�� <input type="radio" name="status" value="4" checked="checked" />����ͨ�� </div>
		<? else: ?>		<input type="radio" name="status" value="5" checked="checked" />����		<? endif; ?>	</div>	<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes']=''; ;if (  $this->magic_vars['_A']['borrow_result']['account']<= $this->magic_vars['_A']['borrow_result']['account_yes']): ?>
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="repayment_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['borrow_result']['repayment_remark'])) $this->magic_vars['_A']['borrow_result']['repayment_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['repayment_remark']; ?></textarea>
		</div>
	</div>	<? endif; ?>
	<div class="module_border" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>" />		<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes']=''; ;if (  $this->magic_vars['_A']['borrow_result']['account']<= $this->magic_vars['_A']['borrow_result']['account_yes']): ?>
		<input type="button" name="reset" value="��˴˽���" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" />		<? else: ?>		<input type="button" name="reset" value="���ش˽���" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" />		<? endif; ?>
	</div>
	</form>
	<? endif; ?>
</div><!-- ���긴��ͳ��� ���� -->
<!-- �ѻ��� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="repayment"): ?>
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
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>" align="left">
			<span style="color:#FF0000">��<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>��</span>
			<a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?>Ԫ</td>
			<td ><? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?>Ԫ</td>
			<td ><? if (!isset($this->magic_vars['item']['repayment_yestime'])) $this->magic_vars['item']['repayment_yestime'] = '';$_tmp = $this->magic_vars['item']['repayment_yestime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><font color="#006600">�ѻ�</font><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?><font color="#006600">��վ����</font><? else: ?><font color="#FF0000">δ��</font><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="�����б�" />
		</div>
		<div class="floatr">
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
				�����ͣ�<select id="biaoType" name="biaoType">				<option value="">ȫ��</option>
				<option value="1" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']==1): ?>selected="selected"<? endif; ?>>��Ѻ��</option>
				<option value="2" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']==2): ?>selected="selected"<? endif; ?>>��ֵ��</option>
				<option value="3" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']==3): ?>selected="selected"<? endif; ?>>�뻹��</option>				<option value="4" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']==4): ?>selected="selected"<? endif; ?>>���ñ�</option>
			</select>
			<select id="status" >
			<option value="">ȫ��</option>
			<option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>�ѻ�</option>			<option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==2): ?> selected="selected"<? endif; ?>>��վ����</option>
			<option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δ��</option>
			</select><input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table><!-- �ѻ��� ���� -->

<!-- ���� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="liubiao"): ?>
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
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>" align="left">
			<span style="color:#FF0000">��<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>��</span>
			<a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>����</td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes'] = ''; echo $this->magic_vars['item']['account_yes']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = ''; if (!isset($this->magic_vars['item']['valid_time'])) $this->magic_vars['item']['valid_time'] = '';$_tmp = $this->magic_vars['item']['verify_time']+$this->magic_vars['item']['valid_time']*24*60*60;$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/liubiao_edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">�޸�</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" />
			<input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!-- ���� ���� -->
<!-- �����޸� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="liubiao_edit"): ?>
<div class="module_title"><strong>�������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���⣺</div>
		<div >
			<a href="/invest/a<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?></a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ȣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ѽ��ȣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['account_yes']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = ''; if (!isset($this->magic_vars['_A']['borrow_result']['valid_time'])) $this->magic_vars['_A']['borrow_result']['valid_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time']+$this->magic_vars['_A']['borrow_result']['valid_time']*24*60*60;$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_title"><strong>���</strong></div>
	<form name="form1" method="post" action="">
	<div class="module_border">
		<div class="l">���״̬��</div>
		<div>
			<? if (!isset($this->magic_vars['_A']['borrow_result']['biao_type'])) $this->magic_vars['_A']['borrow_result']['biao_type']=''; ;if (  $this->magic_vars['_A']['borrow_result']['biao_type']=='lz'): ?><? else: ?>
			<input type="radio" name="status" value="1" />���귵�ؽ��<? endif; ?><input type="radio" name="status" value="2" checked="checked" />�ӳ��������
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ӳ�������</div>
		<div >
			<input type="text" name="days" value="<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account'])) $this->magic_vars['_A']['borrow_amount_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['account']; ?>" size="5" value="0" />��
		</div>
	</div>	<div class="module_border">		<div class="l">��֤�룺</div>		<div >			<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>">			<input type="text" name="valicode" size="5" maxlength="4" /><img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&amp;t=' + Math.random();" alt="���ˢ��" src="/plugins/index.php?q=imgcode">		</div>	</div>
	<div class="module_border">
		<div class="l"></div>
		<div class="h">
			<input type="button" value="ȷ�����" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" />
		</div>
	</div>
	</form>
<!-- �����޸� ���� -->
<!--��ȹ��� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="amount"): ?>
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
		<?  if(!isset($this->magic_vars['_A']['borrow_amount_list']) || $this->magic_vars['_A']['borrow_amount_list']=='') $this->magic_vars['_A']['borrow_amount_list'] = array();  $_from = $this->magic_vars['_A']['borrow_amount_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td width="80" ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type'] =="tender_vouch"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount&type=tender_vouch&a=borrow">Ͷ�ʵ������</a><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type'] =="borrow_vouch"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount&type=borrow_vouch&a=borrow">�������</a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount&type=credit&a=borrow">������ö��</a><? endif; ?></td>
			<td width="70" ><? if (!isset($this->magic_vars['item']['account_old'])) $this->magic_vars['item']['account_old'] = ''; echo $this->magic_vars['item']['account_old']; ?>Ԫ</td>
			<td width="70"  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['account_new'])) $this->magic_vars['item']['account_new'] = ''; echo $this->magic_vars['item']['account_new']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
			<td width="50"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><font color="#6699CC">�����</font><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>�ɹ� <? else: ?><font color="#FF0000">ʧ��</font><? endif; ?></td>
			<td width="70"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">���/�鿴</a><? else: ?>--<? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
			״̬��<select id="status" ><option value="">ȫ��</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==2): ?> selected="selected"<? endif; ?>>�ȴ����</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>��ͨ��</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δͨ��</option></select> <input type="button" value="����" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>')" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!--��ȹ��� ����-->
<!--��ǰ�Ѿ����ڽ�� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="late"): ?>
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
		<?  if(!isset($this->magic_vars['_A']['borrow_repayment_list']) || $this->magic_vars['_A']['borrow_repayment_list']=='') $this->magic_vars['_A']['borrow_repayment_list'] = array();  $_from = $this->magic_vars['_A']['borrow_repayment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td align="left">
			<span style="color:#FF0000">��<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>��</span>
			<a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = ''; echo $this->magic_vars['item']['late_days']; ?>��</td>
			<td><? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = ''; echo $this->magic_vars['item']['late_interest']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><font color="#FF0000">�Ѵ���</font><? else: ?><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days']=''; ;if (  $this->magic_vars['item']['late_days']>0): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/late_repay<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">����</a><? else: ?>-<? endif; ?><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="�����б�" />
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> 
			״̬��<select id="status"><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>�ѻ�</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==2): ?> selected="selected"<? endif; ?>>��վ����</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δ��</option></select> 
			<input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
	</form>
</table><!-- ��ǰ�Ѿ����ڽ�� ���� --><!-- ��վ���� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="late_repay"): ?><div class="module_title"><strong>������վ����</strong></div><div class="module_border">	<div class="l">���⣺</div>	<div>		<span style="color:#FF0000">��<? if (!isset($this->magic_vars['_A']['borrow_result']['show_name'])) $this->magic_vars['_A']['borrow_result']['show_name'] = ''; echo $this->magic_vars['_A']['borrow_result']['show_name']; ?>��</span>		<a href="/invest/a<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_id'])) $this->magic_vars['_A']['borrow_result']['borrow_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_name'])) $this->magic_vars['_A']['borrow_result']['borrow_name'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_name']; ?></a>	</div></div><div class="module_border">	<div class="l">����ˣ�</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?></div></div><div class="module_border">	<div class="l">������</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['order'])) $this->magic_vars['_A']['borrow_result']['order'] = ''; echo $this->magic_vars['_A']['borrow_result']['order']+1; ?>/<? if (!isset($this->magic_vars['_A']['borrow_result']['time_limit'])) $this->magic_vars['_A']['borrow_result']['time_limit'] = ''; echo $this->magic_vars['_A']['borrow_result']['time_limit']; ?></div></div><div class="module_border">	<div class="l">Ӧ��ʱ�䣺</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['repayment_time'])) $this->magic_vars['_A']['borrow_result']['repayment_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></div></div><div class="module_border">	<div class="l">����������</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['late_days'])) $this->magic_vars['_A']['borrow_result']['late_days'] = ''; echo $this->magic_vars['_A']['borrow_result']['late_days']; ?>��</div></div><div class="module_border">	<div class="l">���ڷ���</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['late_interest'])) $this->magic_vars['_A']['borrow_result']['late_interest'] = ''; echo $this->magic_vars['_A']['borrow_result']['late_interest']; ?>Ԫ</div></div><div class="module_border">	<div class="l">Ӧ����</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['repayment_account'])) $this->magic_vars['_A']['borrow_result']['repayment_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['repayment_account']; ?>Ԫ</div></div><div class="module_title"><strong>Ͷ������Ϣ</strong></div><div class="module_border">	<table  border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">		<tr>			<td width="" class="main_td">ID</td>			<td width="" class="main_td" >�û�����</td>			<td width="" class="main_td" >vip״̬</td>			<td width="" class="main_td" >����Ӧ�ձ���</td>			<td width="" class="main_td" >����Ӧ����Ϣ</td>			<td width="" class="main_td" >Ӧ�պϼ�</td>			<td width="" class="main_td" >��վ��������</td>			<td width="" class="main_td" >��վ��������</td>			<td width="" class="main_td" >��վ������Ϣ</td>			<td width="" class="main_td" >��վ�����ϼ�</td>		</tr>		<?  if(!isset($this->magic_vars['_A']['borrow_tender_list']) || $this->magic_vars['_A']['borrow_tender_list']=='') $this->magic_vars['_A']['borrow_tender_list'] = array();  $_from = $this->magic_vars['_A']['borrow_tender_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>			<td class="main_td1"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>			<td><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status']==1): ?>��<? else: ?>��<? endif; ?></td>			<td><? if (!isset($this->magic_vars['item']['capital'])) $this->magic_vars['item']['capital'] = ''; echo $this->magic_vars['item']['capital']; ?>Ԫ</td>			<td><? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?>Ԫ</td>			<td><? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?>Ԫ</td>			<td><? if (!isset($this->magic_vars['item']['bili'])) $this->magic_vars['item']['bili'] = ''; echo $this->magic_vars['item']['bili']*100; ?>%</td>			<td><? if (!isset($this->magic_vars['item']['webrepay_capital'])) $this->magic_vars['item']['webrepay_capital'] = ''; echo $this->magic_vars['item']['webrepay_capital']; ?>Ԫ</td>			<td><? if (!isset($this->magic_vars['item']['webrepay_interest'])) $this->magic_vars['item']['webrepay_interest'] = ''; echo $this->magic_vars['item']['webrepay_interest']; ?>Ԫ</td>			<td><font style="color:red"><? if (!isset($this->magic_vars['item']['webrepay_account'])) $this->magic_vars['item']['webrepay_account'] = ''; echo $this->magic_vars['item']['webrepay_account']; ?>Ԫ</font></td>		</tr>		<? endforeach; endif; unset($_from); ?>	</table></div><? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==0): ?><div class="module_title"><strong>��վ����</strong></div><? if (!isset($this->magic_vars['_A']['borrow_result']['advance_time'])) $this->magic_vars['_A']['borrow_result']['advance_time']='';if (!isset($this->magic_vars['_A']['borrow_result']['late_days'])) $this->magic_vars['_A']['borrow_result']['late_days']=''; ;if (  $this->magic_vars['_A']['borrow_result']['advance_time']<= $this->magic_vars['_A']['borrow_result']['late_days']): ?><form name="form1" method="post" action=""><div class="module_border">	<div class="l">��֤�룺</div>	<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>">	<div><input type="text" name="valicode" maxlength="4" size="5"><img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&amp;t=' + Math.random();" alt="���ˢ��" src="/plugins/index.php?q=imgcode"></div></div><div style="text-align:center"><input type="button" value="ȷ����վ����" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" /></div><? else: ?><h2 style="text-align:center">�˽�����δ����<? if (!isset($this->magic_vars['_A']['borrow_result']['advance_time'])) $this->magic_vars['_A']['borrow_result']['advance_time'] = ''; echo $this->magic_vars['_A']['borrow_result']['advance_time']; ?>�죬���ܴ���</h2><? endif; ?></form><? endif; ?><!-- ��վ���� ���� -->
<!-- ��Ѻ�굽�� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="lateFast"): ?>
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
		<?  if(!isset($this->magic_vars['_A']['borrow_repayment_list']) || $this->magic_vars['_A']['borrow_repayment_list']=='') $this->magic_vars['_A']['borrow_repayment_list'] = array();  $_from = $this->magic_vars['_A']['borrow_repayment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="�û���ϸ��Ϣ�鿴">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td align="left">
			<span style="color:#FF0000">��<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>��</span>
			<a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?>Ԫ</td>
			<td ><? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?>Ԫ</td>
			<td ><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = ''; echo $this->magic_vars['item']['late_days']; ?>��</td>
			<td ><? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = ''; echo $this->magic_vars['item']['late_interest']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><font color="#FF0000">�Ѵ���</font><? else: ?><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days']=''; ;if (  $this->magic_vars['item']['late_days']>=0): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/late_repay<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">����</a><? else: ?>--<? endif; ?><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		<input type="button" onclick="sousuo('excel')" value="�����б�" />
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" />
			״̬��<select id="status" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>�ѻ�</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==2): ?> selected="selected"<? endif; ?>>��վ����</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δ��</option></select> 
			<input type="button" value="����" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>')" />
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
	</form>
</table>
<!--��Ѻ�굽�� ����-->
<!--������ ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="amount_view"): ?>
<div class="module_title"><strong>������</strong></div>
<div class="module_border">
	<div class="l">�û�����</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['username'])) $this->magic_vars['_A']['borrow_amount_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['username']; ?>
	</div>
</div>
<div class="module_border">
	<div class="l">������ͣ�</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['type'])) $this->magic_vars['_A']['borrow_amount_result']['type']=''; ;if (  $this->magic_vars['_A']['borrow_amount_result']['type']=="tender_vouch"): ?><font color="#FF0000">Ͷ�ʵ������</font><? if (!isset($this->magic_vars['_A']['borrow_amount_result']['type'])) $this->magic_vars['_A']['borrow_amount_result']['type']=''; ;elseif (  $this->magic_vars['_A']['borrow_amount_result']['type']=="borrow_vouch"): ?><font color="#FF0000">�������</font><? else: ?>���ö��<? endif; ?>
	</div>
</div>
<div class="module_border">
	<div class="l">ԭ����</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account_old'])) $this->magic_vars['_A']['borrow_amount_result']['account_old'] = '';$_tmp = $this->magic_vars['_A']['borrow_amount_result']['account_old'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>
	</div>
</div>
<div class="module_border">
	<div class="l">�����ȣ�</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account'])) $this->magic_vars['_A']['borrow_amount_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['account']; ?>
	</div>
</div>
<div class="module_border">
	<div class="l">���ݣ�</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['content'])) $this->magic_vars['_A']['borrow_amount_result']['content'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['content']; ?>
	</div>
</div>
<div class="module_border">
	<div class="l">��ע��</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['remark'])) $this->magic_vars['_A']['borrow_amount_result']['remark'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['remark']; ?>
	</div>
</div>
<div class="module_border">
	<div class="l">����ʱ�䣺</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['addtime'])) $this->magic_vars['_A']['borrow_amount_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['borrow_amount_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
	</div>
</div><? if (!isset($this->magic_vars['_A']['borrow_amount_result']['status'])) $this->magic_vars['_A']['borrow_amount_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_amount_result']['status']==2): ?>
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
		<input type="text" name="account" value="<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account'])) $this->magic_vars['_A']['borrow_amount_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['account']; ?>" />
		<input type="hidden" name="type" value="<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['type'])) $this->magic_vars['_A']['borrow_amount_result']['type'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['type']; ?>" />
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
</div><? endif; ?>
</form><script type="text/javascript">function sub_form(){	var form=document.forms['form1'];	var verify_remark=form.elements['verify_remark'].value;	var account=form.elements['account'].value;	var valicode=form.elements['valicode'].value;	account=parseFloat(account);	var err="";	if(verify_remark.length==0){		err += "--��ע����Ϊ��\n";	}	if(account<=0 || isNaN(account)){		err += "--ͨ�������������\n";	}	if(valicode.length!=4){		err += "--��֤����������";	}	if(err.length>0){		alert(err);	}else{		form.elements['tijiao'].disabled=true;		form.elements['tijiao'].value="�ύ��..";		form.submit();
		submit_fool();	}}</script><!--������ ����-->		
<!--ͳ�� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="tongji"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="*" class="main_td">����</td>
			<td width="*" class="main_td">�ܶ�</td>
		</tr>
		<tr  class="tr2">
			<td >�ɹ�����ܶ�</td>
			<td >��<? if (!isset($this->magic_vars['_A']['borrow_tongji']['success_num'])) $this->magic_vars['_A']['borrow_tongji']['success_num'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['success_num']; ?></td>
		</tr>
		<tr  >
			<td >�������ܶ�</td>
			<td >��<? if (!isset($this->magic_vars['_A']['borrow_tongji']['success_num1'])) $this->magic_vars['_A']['borrow_tongji']['success_num1'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['success_num1']; ?></td>
		</tr>
		<tr  class="tr2">
			<td >δ�����ܶ�</td>
			<td >��<? if (!isset($this->magic_vars['_A']['borrow_tongji']['success_num0'])) $this->magic_vars['_A']['borrow_tongji']['success_num0'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['success_num0']; ?></td>
		</tr>
		<tr  >
			<td >�����ܶ�</td>
			<td ><? if (!isset($this->magic_vars['_A']['borrow_tongji']['laterepay'])) $this->magic_vars['_A']['borrow_tongji']['laterepay'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['laterepay']; ?></td>
		</tr>
		<tr  class="tr2">
			<td >���ڼ������ܶ�</td>
			<td >��<? if (!isset($this->magic_vars['_A']['borrow_tongji']['success_laterepay'])) $this->magic_vars['_A']['borrow_tongji']['success_laterepay'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['success_laterepay']; ?></td>
		</tr>
		<tr >
			<td >����δ�����ܶ�</td>
			<td >��<? if (!isset($this->magic_vars['_A']['borrow_tongji']['false_laterepay'])) $this->magic_vars['_A']['borrow_tongji']['false_laterepay'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['false_laterepay']; ?></td>
			
		</tr>
		
	</form>	
</table>
<!--ͳ�� ����-->

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
	  <?  if(!isset($this->magic_vars['_A']['account_tongji']) || $this->magic_vars['_A']['account_tongji']=='') $this->magic_vars['_A']['account_tongji'] = array();  $_from = $this->magic_vars['_A']['account_tongji']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr >
			<td width="*" class="main_td">��������</td>
			<td width="*" class="main_td"><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?></td>
			<td width="" class="main_td">���</td>
		</tr>
		<?  if(!isset($this->magic_vars['item']) || $this->magic_vars['item']=='') $this->magic_vars['item'] = array();  $_from = $this->magic_vars['item']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['_key'] =>  $this->magic_vars['_item']):
?>
		<tr  class="tr2">
			<td ><? if (!isset($this->magic_vars['_item']['type_name'])) $this->magic_vars['_item']['type_name'] = ''; echo $this->magic_vars['_item']['type_name']; ?></td>
			<td ><? if (!isset($this->magic_vars['_item']['type'])) $this->magic_vars['_item']['type'] = ''; echo $this->magic_vars['_item']['type']; ?></td>
			<td >��<? if (!isset($this->magic_vars['_item']['num'])) $this->magic_vars['_item']['num'] = ''; echo $this->magic_vars['_item']['num']; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
	<? endforeach; endif; unset($_from); ?>
	</form>	
</table>
<!--ͳ�� ����-->
<? endif; ?>


<script>

var urls = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type'] = ''; echo $this->magic_vars['_A']['query_type']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>';

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
