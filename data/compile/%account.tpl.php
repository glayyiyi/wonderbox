<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<!-- �ʻ���Ϣ�б� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="list"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td">�û���</td>
			<td width="" class="main_td">��ʵ����</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">���ս��</td>
            <td width="" class="main_td">�������</td>
            <td width="" class="main_td">���ʲ�</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_list']) || $this->magic_vars['_A']['account_list']=='') $this->magic_vars['_A']['account_list'] = array();  $_from = $this->magic_vars['_A']['account_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?index.php?admin&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = '';$_tmp = $this->magic_vars['item']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<? $data = array('user_id'=>$this->magic_vars['item']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetWaitPayment($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
			<td>
			<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>
			</td>
			<td>
			<script type="text/javascript">
			document.write(<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
			</script>
			</td>
			<? unset($_magic_vars);unset($data); ?>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/> <input type="button" value="����" onclick="sousuo()" />
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
<!-- �ʻ���Ϣ�б� ���� -->

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="listTJ"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="" class="main_td">�û����</td>
			<td width="" class="main_td">�û���</td>
			<td width="" class="main_td">��ʵ����</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">���ս��</td>
            <td width="" class="main_td">�������</td>
            <td width="" class="main_td">���ʲ�</td>
			<td width="" class="main_td">����ʱ��</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_list']) || $this->magic_vars['_A']['account_list']=='') $this->magic_vars['_A']['account_list'] = array();  $_from = $this->magic_vars['_A']['account_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = '';$_tmp = $this->magic_vars['item']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
            <td><? if (!isset($this->magic_vars['item']['wait_repayMoney'])) $this->magic_vars['item']['wait_repayMoney'] = '';$_tmp = $this->magic_vars['item']['wait_repayMoney'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
            <td><? if (!isset($this->magic_vars['item']['jin_money'])) $this->magic_vars['item']['jin_money'] = '';$_tmp = $this->magic_vars['item']['jin_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		<input type="button" onclick="javascript:location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/listTJ&type=excel'" value="�����б�" />
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> <input type="button" value="����" onclick="sousuo()" />
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

<!-- ������� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "fs_list"): ?>
<table border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">�û����</td>
			<td width="" class="main_td">�û���</td>
			<td width="" class="main_td">��ʵ����</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">���ս��</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['fs_list']) || $this->magic_vars['_A']['fs_list']=='') $this->magic_vars['_A']['fs_list'] = array();  $_from = $this->magic_vars['_A']['fs_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = '';$_tmp = $this->magic_vars['item']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="7" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>
</table>
<!-- ������� ���� -->

<!-- �û���� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="ticheng"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="" class="main_td">ʱ��</td>
			<td width="" class="main_td">�û���</td>
			<td width="" class="main_td">����Ͷ���ܶ�(��)</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_ticheng']) || $this->magic_vars['_A']['account_ticheng']=='') $this->magic_vars['_A']['account_ticheng'] = array();  $_from = $this->magic_vars['_A']['account_ticheng']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['addtimes'])) $this->magic_vars['item']['addtimes'] = ''; echo $this->magic_vars['item']['addtimes']; ?></td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?index.php?admin&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['usernames'])) $this->magic_vars['item']['usernames'] = ''; echo $this->magic_vars['item']['usernames']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="4" class="action">
			<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="�����б�" />
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/><input type="button" value="����" onclick="sousuo()" />
			</div>
			</td>
		</tr>
		<tr>
			<td colspan="4" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>
</table>  
<!-- �û���� ���� -->

<!-- vip��� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="vipTC"): ?>
<table border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">�ƹ����û���</td>	
			<td width="" class="main_td">�����û���</td>
			<td width="" class="main_td">��ʵ����</td>
			<td width="" class="main_td">ע��ʱ��</td>
			<td width="" class="main_td">�Ƿ�VIP��Ա</td>
			<td width="" class="main_td">Ӧ���������</td>
			<td width="" class="main_td">ʵ���������(��֧��)</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['vipTC_list']) || $this->magic_vars['_A']['vipTC_list']=='') $this->magic_vars['_A']['vipTC_list'] = array();  $_from = $this->magic_vars['_A']['vipTC_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr>
			<td><? if (!isset($this->magic_vars['item']['inviteUserName'])) $this->magic_vars['item']['inviteUserName'] = ''; echo $this->magic_vars['item']['inviteUserName']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status'] == 1): ?>��<? else: ?>��<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status'] == 1): ?>100Ԫ<? else: ?>0Ԫ<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['invite_money'])) $this->magic_vars['item']['invite_money'] = ''; echo $this->magic_vars['item']['invite_money']; ?>Ԫ</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
		�������û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
                  �������û�����<input type="text" name="username2" id="username2" value="<? if (!isset($_REQUEST['username2'])) $_REQUEST['username2'] = '';$_tmp = $_REQUEST['username2'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
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
<!-- vip��� ���� -->

<!-- �ʽ���˱� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="moneyCheck"): ?>
<table border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr >
			<td width="" class="main_td">�û���</td>
			<td width="" class="main_td">�ʽ��ܶ�</td>
			<td width="" class="main_td">�����ʽ�</td>
			<td width="" class="main_td">�����ʽ�</td>
			<td width="" class="main_td">�����ʽ�(1)</td>
			<td width="" class="main_td">�����ʽ�(2)</td>
			<td width="" class="main_td">��ֵ�ʽ�(1)</td>
			<td width="" class="main_td">��ֵ�ʽ�(2)</td>
			<td width="" class="main_td">���У�����</td>
			<td width="" class="main_td">���У�����1</td>
			<td width="" class="main_td">���У�����2</td>
			<td width="" class="main_td">�ɹ����ֽ��</td>
			<!--td width="" class="main_td">����ʵ�ʵ���</td>
			<td width="" class="main_td">���ַ���</td-->
			<td width="" class="main_td">Ͷ�꽱�����</td>
			<!--td width="" class="main_td">Ͷ�������ʽ�</td-->
			<td width="" class="main_td">Ͷ��������Ϣ</td>
			<td width="" class="main_td">Ͷ�������Ϣ</td>
			<!--td width="" class="main_td">����ܽ��</td-->
			<td width="" class="main_td">���꽱��</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">������Ϣ</td>
			<td width="" class="main_td">����ѻ���Ϣ</td>
			<td width="" class="main_td">ϵͳ�۷�</td>
			<td width="" class="main_td">�ƹ㽱��</td>
			<td width="" class="main_td">VIP�۷�</td> 
			<td width="" class="main_td">�����ܶ�</td>
			<!--td width="" class="main_td">�ʽ��ܶ�1</td>
			<td width="" class="main_td">�ʽ��ܶ�2</td-->
		</tr>
		<?  if(!isset($this->magic_vars['_A']['moneyCheck_list']) || $this->magic_vars['_A']['moneyCheck_list']=='') $this->magic_vars['_A']['moneyCheck_list'] = array();  $_from = $this->magic_vars['_A']['moneyCheck_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr>
			<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = ''; echo $this->magic_vars['item']['no_use_money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = ''; echo $this->magic_vars['item']['collection']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection2'])) $this->magic_vars['item']['collection2'] = ''; echo $this->magic_vars['item']['collection2']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['reMoney'])) $this->magic_vars['item']['reMoney'] = ''; echo $this->magic_vars['item']['reMoney']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['reMoney2'])) $this->magic_vars['item']['reMoney2'] = ''; echo $this->magic_vars['item']['reMoney2']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['reMoney_1'])) $this->magic_vars['item']['reMoney_1'] = ''; echo $this->magic_vars['item']['reMoney_1']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['reMoney_2'])) $this->magic_vars['item']['reMoney_2'] = ''; echo $this->magic_vars['item']['reMoney_2']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['reMoney_3'])) $this->magic_vars['item']['reMoney_3'] = ''; echo $this->magic_vars['item']['reMoney_3']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['txTotal'])) $this->magic_vars['item']['txTotal'] = ''; echo $this->magic_vars['item']['txTotal']; ?></td>
			<!--td><? if (!isset($this->magic_vars['item']['txCredited'])) $this->magic_vars['item']['txCredited'] = ''; echo $this->magic_vars['item']['txCredited']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['txFee'])) $this->magic_vars['item']['txFee'] = ''; echo $this->magic_vars['item']['txFee']; ?></td-->
			<td><? if (!isset($this->magic_vars['item']['awardAdd'])) $this->magic_vars['item']['awardAdd'] = ''; echo $this->magic_vars['item']['awardAdd']; ?></td>
			<!--td><? if (!isset($this->magic_vars['item']['collecdMoney'])) $this->magic_vars['item']['collecdMoney'] = ''; echo $this->magic_vars['item']['collecdMoney']; ?></td-->
			<td><? if (!isset($this->magic_vars['item']['interestYes'])) $this->magic_vars['item']['interestYes'] = ''; echo $this->magic_vars['item']['interestYes']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['interestWait'])) $this->magic_vars['item']['interestWait'] = ''; echo $this->magic_vars['item']['interestWait']; ?></td>
			<!--td><? if (!isset($this->magic_vars['item']['accountBorrow'])) $this->magic_vars['item']['accountBorrow'] = ''; echo $this->magic_vars['item']['accountBorrow']; ?></td-->
			<td><? if (!isset($this->magic_vars['item']['borrowAward'])) $this->magic_vars['item']['borrowAward'] = ''; echo $this->magic_vars['item']['borrowAward']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['borrowMgrFee'])) $this->magic_vars['item']['borrowMgrFee'] = ''; echo $this->magic_vars['item']['borrowMgrFee']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['waitMoney_money'])) $this->magic_vars['item']['waitMoney_money'] = ''; echo $this->magic_vars['item']['waitMoney_money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['waitMoney_interest'])) $this->magic_vars['item']['waitMoney_interest'] = ''; echo $this->magic_vars['item']['waitMoney_interest']; ?></td>
			<td>
				<script type="text/javascript">
				document.write(<? if (!isset($this->magic_vars['item']['repayment_yesaccount'])) $this->magic_vars['item']['repayment_yesaccount'] = '';$_tmp = $this->magic_vars['item']['repayment_yesaccount'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
				</script>
			</td>
			<td><? if (!isset($this->magic_vars['item']['feeSystem'])) $this->magic_vars['item']['feeSystem'] = ''; echo $this->magic_vars['item']['feeSystem']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['invite_money'])) $this->magic_vars['item']['invite_money'] = ''; echo $this->magic_vars['item']['invite_money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['vipMoney'])) $this->magic_vars['item']['vipMoney'] = ''; echo $this->magic_vars['item']['vipMoney']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['accountLateAll'])) $this->magic_vars['item']['accountLateAll'] = '';$_tmp = $this->magic_vars['item']['accountLateAll'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="24" class="action">
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
            <input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="24" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
	</form>
</table>  
<!-- �ʽ���˱� ���� -->
                        
<!-- ���ֲο� ��ʼ -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="cashCK"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û���</td>
			<td width="" class="main_td">��ʵ����</td>
			<td width="" class="main_td">Ͷ�ʵ������</td>
			<td width="" class="main_td">ʹ�õ����ö�ȣ�X��</td>
			<td width="" class="main_td">���ʲ�(W)</td>
			<td width="" class="main_td">������Ϣ(E)</td>
 			<td width="" class="main_td">���ֱ�׼��W+1.1X-E��</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_cashCK_list']) || $this->magic_vars['_A']['account_cashCK_list']=='') $this->magic_vars['_A']['account_cashCK_list'] = array();  $_from = $this->magic_vars['_A']['account_cashCK_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
			<td>
			<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>
			</td>
			<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['tender_vouch'])) $this->magic_vars['item']['tender_vouch'] = '';$_tmp = $this->magic_vars['item']['tender_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td>
                <script type="text/javascript">
                       document.write(<? if (!isset($this->magic_vars['item']['credit'])) $this->magic_vars['item']['credit'] = '';$_tmp = $this->magic_vars['item']['credit'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['item']['credit_use'])) $this->magic_vars['item']['credit_use'] = '';$_tmp = $this->magic_vars['item']['credit_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>+<? if (!isset($this->magic_vars['item']['borrow_vouch'])) $this->magic_vars['item']['borrow_vouch'] = '';$_tmp = $this->magic_vars['item']['borrow_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['item']['borrow_vouch_use'])) $this->magic_vars['item']['borrow_vouch_use'] = '';$_tmp = $this->magic_vars['item']['borrow_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
                </script>
          	</td>
			<td>
                <? $data = array('user_id'=>$this->magic_vars['item']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
                <script type="text/javascript">
                document.write(<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
                </script>
                <? unset($_magic_vars);unset($data); ?>
			</td>
			<td >
				<? $data = array('user_id'=>$this->magic_vars['item']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
				<? if (!isset($this->magic_vars['acc']['collection_interest0'])) $this->magic_vars['acc']['collection_interest0'] = '';$_tmp = $this->magic_vars['acc']['collection_interest0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>
				<? unset($_magic_vars);unset($data); ?>
			</td>
			<td >
				<? $data = array('user_id'=>$this->magic_vars['item']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
				<script type="text/javascript">
				document.write(<? if (!isset($this->magic_vars['item']['credit'])) $this->magic_vars['item']['credit'] = '';$_tmp = $this->magic_vars['item']['credit'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>*1.1-<? if (!isset($this->magic_vars['item']['credit_use'])) $this->magic_vars['item']['credit_use'] = '';$_tmp = $this->magic_vars['item']['credit_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>*1.1+<? if (!isset($this->magic_vars['item']['borrow_vouch'])) $this->magic_vars['item']['borrow_vouch'] = '';$_tmp = $this->magic_vars['item']['borrow_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>*1.1-<? if (!isset($this->magic_vars['item']['borrow_vouch_use'])) $this->magic_vars['item']['borrow_vouch_use'] = '';$_tmp = $this->magic_vars['item']['borrow_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>*1.1+<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['collection_interest0'])) $this->magic_vars['acc']['collection_interest0'] = '';$_tmp = $this->magic_vars['acc']['collection_interest0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
				</script>
				<? unset($_magic_vars);unset($data); ?>
			</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/> <input type="button" value="����" onclick="sousuo()" />
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
<!-- ���ֲο� ���� -->
<!--���ּ�¼�б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="cash"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">��ʵ����</td>
			<td width="" class="main_td">�����˺�</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">֧��</td>
			<td width="" class="main_td">�����ܶ�</td>
			<td width="" class="main_td">���˽��</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">����ֿ�</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_cash_list']) || $this->magic_vars['_A']['account_cash_list']=='') $this->magic_vars['_A']['account_cash_list'] = array();  $_from = $this->magic_vars['_A']['account_cash_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['bank_name'])) $this->magic_vars['item']['bank_name'] = ''; echo $this->magic_vars['item']['bank_name']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['branch'])) $this->magic_vars['item']['branch'] = ''; echo $this->magic_vars['item']['branch']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['credited'])) $this->magic_vars['item']['credited'] = ''; echo $this->magic_vars['item']['credited']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = ''; echo $this->magic_vars['item']['fee']; ?></td>	
			<td ><? if (!isset($this->magic_vars['item']['hongbao'])) $this->magic_vars['item']['hongbao'] = ''; echo $this->magic_vars['item']['hongbao']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>�����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>��ͨ�� <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>���ܾ�<? endif; ?></td>
			<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">���/�鿴</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="13" class="action">
		<div class="floatl">
			<input type="button" value="������ǰ��������" onclick="sousuo('excel')" />
		</div>
		<div class="floatr">
		�����˺ţ�<input type="text" name="account" id="account" value="<? if (!isset($_REQUEST['account'])) $_REQUEST['account'] = ''; echo $_REQUEST['account']; ?>" maxlength="19" />
		��ֵʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/>�� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>	
		�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		״̬��<select id="status"><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>��ͨ��</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>�����</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="2"): ?> selected="selected"<? endif; ?>>���ʧ��</option></select><input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
	</tr>
	<tr>
		<td colspan="13" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
		</td>
	</tr>
	</form>	
</table>
<!--���ּ�¼�б� ����-->
<!--������� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "cash_view"): ?>
<div class="module_add">
	<form name="form1" method="post" action="">
	<div class="module_title"><strong>�������/�鿴</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['username'])) $this->magic_vars['_A']['account_cash_result']['username'] = ''; echo $this->magic_vars['_A']['account_cash_result']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�������У�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['bank_name'])) $this->magic_vars['_A']['account_cash_result']['bank_name'] = ''; echo $this->magic_vars['_A']['account_cash_result']['bank_name']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����֧�У�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['branch'])) $this->magic_vars['_A']['account_cash_result']['branch'] = ''; echo $this->magic_vars['_A']['account_cash_result']['branch']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����˺ţ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['account'])) $this->magic_vars['_A']['account_cash_result']['account'] = ''; echo $this->magic_vars['_A']['account_cash_result']['account']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����ܶ</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['total'])) $this->magic_vars['_A']['account_cash_result']['total'] = ''; echo $this->magic_vars['_A']['account_cash_result']['total']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���˽�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['credited'])) $this->magic_vars['_A']['account_cash_result']['credited'] = ''; echo $this->magic_vars['_A']['account_cash_result']['credited']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����ѣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['fee'])) $this->magic_vars['_A']['account_cash_result']['fee'] = ''; echo $this->magic_vars['_A']['account_cash_result']['fee']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==0): ?>���������<? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;elseif (  $this->magic_vars['_A']['account_cash_result']['status']==1): ?>������ͨ�� <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;elseif (  $this->magic_vars['_A']['account_cash_result']['status']==2): ?>���ֱ��ܾ�<? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ʱ��/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['addtime'])) $this->magic_vars['_A']['account_cash_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['account_cash_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['account_cash_result']['addip'])) $this->magic_vars['_A']['account_cash_result']['addip'] = ''; echo $this->magic_vars['_A']['account_cash_result']['addip']; ?></div>
	</div>
	<? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==0): ?>
	<div class="module_title"><strong>��˴�������Ϣ</strong></div>
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="0" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==0): ?> checked="checked"<? endif; ?> />�ȴ����  <input type="radio" name="status" value="1" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==1): ?> checked="checked"<? endif; ?>/>���ͨ�� <input type="radio" name="status" value="2" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==2): ?> checked="checked"<? endif; ?>/>��˲�ͨ�� </div>
	</div>
	<div class="module_border" >
		<div class="l">���˽��:</div>
		<div class="c">
			<input type="text" name="credited" readonly="readonly" style="background:#CCCCCC" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['credited'])) $this->magic_vars['_A']['account_cash_result']['credited'] = ''; echo $this->magic_vars['_A']['account_cash_result']['credited']; ?>" size="10">
		</div>
	</div>
	<div class="module_border" >
		<div class="l">������:</div>
		<div class="c">
			<input type="text" name="fee" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['fee'])) $this->magic_vars['_A']['account_cash_result']['fee'] = ''; echo $this->magic_vars['_A']['account_cash_result']['fee']; ?>" size="5" onchange="updateFee(<? if (!isset($this->magic_vars['_A']['account_cash_result']['total'])) $this->magic_vars['_A']['account_cash_result']['total'] = ''; echo $this->magic_vars['_A']['account_cash_result']['total']; ?>)" readonly="readonly" style="background:#CCCCCC">
			
			<script type="text/javascript">
			function updateFee(total){
				var form = document.forms['form1'];
				var fee = parseFloat(form.elements['fee'].value);
				var hongbao = parseFloat(form.elements['hongbao'].value);
				if(isNaN(fee)){
					fee = 0;
				}
				if(fee<hongbao){
					alert("�����Ѳ���С�ڵֿ۵ĺ��");
					form.elements['fee'].value = hongbao;
				}else if(fee>total/2){
					alert("�����Ѳ��ܴ��������ܶ��50%");
					form.elements['fee'].value = total/2;
				}else{
					form.elements['fee'].value = fee;
				}
				form.elements['credited'].value = parseFloat(total)-parseFloat(form.elements['fee'].value)+parseFloat(form.elements['hongbao'].value);
			}
			function check_form(){
				var frm = document.forms['form1'];
				var verify_remark = frm.elements['verify_remark'].value;
				var errorMsg = '';
				if(verify_remark.length == 0 ) {
					errorMsg += '--��ע������д' + '\n';
				}
				if(errorMsg.length == 0){
					frm.submit();
					frm.elements['reset'].disabled=true;
					frm.elements['reset'].value="����ύ��....";
					submit_fool();
				}else{
					alert(errorMsg);
					return;
				}
			}
			</script>
			
		</div>
	</div>
	<div class="module_border" >
		<div class="l">����ֿ�:</div>
		<div class="c">
			<input type="text" name="hongbao" readonly="readonly" style="background:#CCCCCC" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['hongbao'])) $this->magic_vars['_A']['account_cash_result']['hongbao'] = ''; echo $this->magic_vars['_A']['account_cash_result']['hongbao']; ?>" size="10">
		</div>
	</div>
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['account_result']['verify_remark'])) $this->magic_vars['_A']['account_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_result']['verify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['id'])) $this->magic_vars['_A']['account_cash_result']['id'] = ''; echo $this->magic_vars['_A']['account_cash_result']['id']; ?>" />
		<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['user_id'])) $this->magic_vars['_A']['account_cash_result']['user_id'] = ''; echo $this->magic_vars['_A']['account_cash_result']['user_id']; ?>" />
		<input type="button" name="reset" value="��˴�������Ϣ" onclick="check_form()" />
	</div>
	<? else: ?>
	<div class="module_border">
		<div class="l">�����Ϣ��</div>
		<div class="c">
			����ˣ�<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_username'])) $this->magic_vars['_A']['account_cash_result']['verify_username'] = ''; echo $this->magic_vars['_A']['account_cash_result']['verify_username']; ?>,���ʱ�䣺<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_time'])) $this->magic_vars['_A']['account_cash_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['account_cash_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>,��˱�ע��<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_remark'])) $this->magic_vars['_A']['account_cash_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_cash_result']['verify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
	</form>
</div>


<!--��ֵ��¼�б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="recharge"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
            <td width="*" class="main_td">��ˮ��</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">��ʵ����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">��ֵ���</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">���˽��</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">��ֵʱ��</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">���з���</td>
			<td width="" class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_recharge_list']) || $this->magic_vars['_A']['account_recharge_list']=='') $this->magic_vars['_A']['account_recharge_list'] = array();  $_from = $this->magic_vars['_A']['account_recharge_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['trade_no'])) $this->magic_vars['item']['trade_no'] = ''; echo $this->magic_vars['item']['trade_no']; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/recharge&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>&a=cash"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==1): ?>���ϳ�ֵ<? else: ?>���³�ֵ<? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['payment'])) $this->magic_vars['item']['payment']=''; ;if (  $this->magic_vars['item']['payment']==0): ?>�ֶ���ֵ<? else: ?><? if (!isset($this->magic_vars['item']['payment_name'])) $this->magic_vars['item']['payment_name'] = ''; echo $this->magic_vars['item']['payment_name']; ?><? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?>Ԫ</td>
			<td ><? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = ''; echo $this->magic_vars['item']['fee']; ?>Ԫ</td>
			<td ><font color="#FF0000"><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?>Ԫ</font></td>
			<td ><? if (!isset($this->magic_vars['item']['hongbao'])) $this->magic_vars['item']['hongbao'] = ''; echo $this->magic_vars['item']['hongbao']; ?>Ԫ</td>
			<td ><font color="#FF3300">�ύ��<? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></font><br/>
			<font color="#aaaaaa">��ɣ�<? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></font>
			</td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0 ||  $this->magic_vars['item']['status']== -1): ?><font color="#6699CC">�����</font><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> �ɹ� <? else: ?><font color="#FF0000">ʧ��</font><? endif; ?></td>
            <td ><? if (!isset($this->magic_vars['item']['return'])) $this->magic_vars['item']['return']='';if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['return']==""&&  $this->magic_vars['item']['type']==1): ?><span style="color:#F00">����δ����</span><? if (!isset($this->magic_vars['item']['return'])) $this->magic_vars['item']['return']='';if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['return']<>""&&  $this->magic_vars['item']['type']==1): ?> �����ѵ���<? else: ?>���º˶�<? endif; ?></td>
			<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/recharge_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">���/�鿴</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="14" class="action">
		<div class="floatl">
		<input type="button" value="������ǰ����" onclick="sousuo('excel')" />
		</div>
		<div class="floatr">
		�������У�<select id="pertainbank"><option value="0">ȫ��</option><option value="-1">���³�ֵ</option><option value="-2">���ϳ�ֵ</option><option value="-3">�ֶ���ֵ</option>
		<?  if(!isset($this->magic_vars['_A']['account_payment_list']) || $this->magic_vars['_A']['account_payment_list']=='') $this->magic_vars['_A']['account_payment_list'] = array();  $_from = $this->magic_vars['_A']['account_payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
		<? if (!isset($_REQUEST['pertainbank'])) $_REQUEST['pertainbank']='';if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id']=''; ;if (  $_REQUEST['pertainbank']== $this->magic_vars['var']['id']): ?>
		<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" selected="selected"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
		<? else: ?>
		<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
		<? endif; ?>
		<? endforeach; endif; unset($_from); ?></select>
		��ֵʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>
		�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		��ˮ�ţ�<input type="text" name="trade_no" id="trade_no" value="<? if (!isset($_REQUEST['trade_no'])) $_REQUEST['trade_no'] = ''; echo $_REQUEST['trade_no']; ?>"/> 
		״̬<select id="status" ><option value=''>ȫ��</option><option value="-1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="-1"): ?> selected="selected"<? endif; ?>>δ���</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>��˳ɹ�</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="2"): ?> selected="selected"<? endif; ?>>���ʧ��</option></select> <input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="14" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!--��ֵ��¼�б� ����-->
<!--���������ֵ��¼-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="rechargefromexcel"): ?>
<form action='' method='post' enctype="multipart/form-data">
<div class="module_border">
	<div class="l">�����ļ���</div>
	<div class="c">
		<input type="file" name="excelfile" />
	</div>
	<div class="c">
		<input type="submit" value="�ύ����" />
	</div>
</div>
</form>
<!--��ֵ��� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "recharge_view"): ?>
<div class="module_add">
	<form name="form1" method="post" action="">
	<div class="module_title"><strong>��ֵ�鿴</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?index.php?admin&q=module/user/view&user_id=<? if (!isset($this->magic_vars['_A']['account_recharge_result']['user_id'])) $this->magic_vars['_A']['account_recharge_result']['user_id'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['_A']['account_recharge_result']['username'])) $this->magic_vars['_A']['account_recharge_result']['username'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['username']; ?></a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ֵ���ͣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['type'])) $this->magic_vars['_A']['account_recharge_result']['type']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['type']==1): ?>���ϳ�ֵ<? else: ?>���³�ֵ<? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">֧����ʽ��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['payment_name'])) $this->magic_vars['_A']['account_recharge_result']['payment_name'] = '';$_tmp = $this->magic_vars['_A']['account_recharge_result']['payment_name'];$_tmp = $this->magic_modifier("default",$_tmp,"����Ա��ӳ�ֵ");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ֵ�ܶ</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['money'])) $this->magic_vars['_A']['account_recharge_result']['money'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['money']; ?>Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ã�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['fee'])) $this->magic_vars['_A']['account_recharge_result']['fee'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['fee']; ?>Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">���������</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['hongbao'])) $this->magic_vars['_A']['account_recharge_result']['hongbao'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['hongbao']; ?>Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ֽ�����</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['reward'])) $this->magic_vars['_A']['account_recharge_result']['reward'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['reward']; ?>Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">ʵ�ʵ��ˣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['total'])) $this->magic_vars['_A']['account_recharge_result']['total'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['total']; ?>Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">�û���ע��</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['remark'])) $this->magic_vars['_A']['account_recharge_result']['remark'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['remark']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ˮ�ţ�</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['trade_no'])) $this->magic_vars['_A']['account_recharge_result']['trade_no'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['trade_no']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['status']==0): ?>�ȴ����<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;elseif (  $this->magic_vars['_A']['account_recharge_result']['status']==1): ?> ��ֵ�ɹ� <? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;elseif (  $this->magic_vars['_A']['account_recharge_result']['status']==2): ?>��ֵʧ��<? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ʱ��/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['addtime'])) $this->magic_vars['_A']['account_recharge_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['account_recharge_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['account_recharge_result']['addip'])) $this->magic_vars['_A']['account_recharge_result']['addip'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['addip']; ?></div>
	</div>
	<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['status']==0): ?>
	<div class="module_title"><strong>��˴˳�ֵ��Ϣ</strong></div>
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
	<input type="radio" name="status" value="1"/>��ֵ�ɹ�   <input type="radio" name="status" value="2"  checked="checked"/>��ֵʧ�� </div>
	</div>
	<div class="module_border" >
		<div class="l">���˽��:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['total'])) $this->magic_vars['_A']['account_recharge_result']['total'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['total']; ?>Ԫ
			<input type="hidden" name="total" value="<? if (!isset($this->magic_vars['_A']['account_recharge_result']['total'])) $this->magic_vars['_A']['account_recharge_result']['total'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['total']; ?>" size="15" readonly="readonly">
		</div>
	</div>
	<? if (!isset($this->magic_vars['_A']['account_recharge_result']['type'])) $this->magic_vars['_A']['account_recharge_result']['type']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['type']!=1): ?>
	<div class="module_border" >
		<div class="l">�����ֽ���:</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['account_recharge_result']['reward'])) $this->magic_vars['_A']['account_recharge_result']['reward'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['reward']; ?>Ԫ</div>
	</div>
	<? endif; ?>
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['account_recharge_result']['verify_remark'])) $this->magic_vars['_A']['account_recharge_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['verify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_border" >
		<div class="l">��֤��:</div>
		<div class="c">
		<input type="text" size="5" maxlength="4" name="valicode">
		<img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&amp;t=' + Math.random();" alt="���ˢ��" src="/plugins/index.php?q=imgcode">
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['account_recharge_result']['id'])) $this->magic_vars['_A']['account_recharge_result']['id'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['id']; ?>" />
		<input type="button" name="reset" value="��˴˳�ֵ��Ϣ" onclick="check_form()" />
	</div>
	<? else: ?>
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['type'])) $this->magic_vars['_A']['account_recharge_result']['type']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['type']==2): ?>
	<div class="module_border">
		<div class="l">�����Ϣ��</div>
		<div class="c">
			����ˣ�<? if (!isset($this->magic_vars['_A']['account_result']['verify_username'])) $this->magic_vars['_A']['account_result']['verify_username'] = ''; echo $this->magic_vars['_A']['account_result']['verify_username']; ?>,���ʱ�䣺<? if (!isset($this->magic_vars['_A']['account_result']['verify_time'])) $this->magic_vars['_A']['account_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['account_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>,��˱�ע��<? if (!isset($this->magic_vars['_A']['account_result']['verify_remark'])) $this->magic_vars['_A']['account_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_result']['verify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
	<? endif; ?>
	</form>
</div>

<script type="text/javascript">
function check_form(){
	var frm = document.forms['form1'];
	var verify_remark = frm.elements['verify_remark'].value;
	var valicode = frm.elements['valicode'].value;
	var errorMsg = '';
	if(verify_remark.length == 0 ) {
		errorMsg += '--��ע������д' + '\n';
	}
	if(valicode.length != 4){
		errorMsg += '--��֤����������' + '\n';
	}
	if(errorMsg.length == 0){
		frm.submit();
		frm.elements['reset'].disabled=true;
		frm.elements['reset'].value="����ύ��....";
		submit_fool();
	}else{
		alert(errorMsg);
		return;
	}
}
</script>

<!--��ֵ��� ����-->

<!--��ӳ�ֵ��¼ ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "recharge_new"): ?>
<div class="module_add">
	<form name="form1" method="post" action="" enctype="multipart/form-data">
	<div class="module_title"><strong>��ӳ�ֵ</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" /><font style="color:red">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			���³�ֵ<input type="hidden" name="type" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">��</div>
		<div class="c">
			<input type="text" name="money" maxlength="6" /><font style="color:red">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="c">
			<input type="text" name="remark" value="��ӳ�ֵ��¼" /><font style="color:red">*</font>
		</div>
	</div>
	<!-- <div class="module_border">
		<div class="l">������ӣ�</div>
		<div class="c">
			<input type="file" name="excelfile" />
			<input type="button" value="�������" onclick="document.forms['form1'].submit();this.disabled=true;" />
		</div>
	</div> -->
	<div class="module_submit" >
		<input type="button" name="reset" value="ȷ�ϳ�ֵ" onclick="check_form()" />
	</div>
</form>
</div>

<script type="text/javascript">
function check_form(){
	var frm = document.forms['form1'];
	var remark = frm.elements['remark'].value;
	var username = frm.elements['username'].value;
	var money = frm.elements['money'].value;
	var errorMsg = '';
	if(remark.length == 0 ) {
		errorMsg += '--��ע������д' + '\n';
	}
	if(username.length == 0){
		errorMsg += '--�û���������д' + '\n';
	}
	if(money.length == 0){
		errorMsg += '--��������д' + '\n';
	}
	if(errorMsg.length == 0){
		frm.submit();
		frm.elements['reset'].disabled=true;
		frm.elements['reset'].value="��ֵ�ύ��...";
		submit_fool();
	}else{
		alert(errorMsg);
		return;
	}
}
</script>

<!--��ӳ�ֵ��¼ ����-->
<!--���ÿ۳� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "deduct"): ?>
<div class="module_add">
	<form name="form1" method="post" action="">
	<div class="module_title"><strong>���ÿ۳�</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			<select name="type">
				<option value="scene_account">�ֳ���֤����</option>
				<option value="vouch_advanced">�����渶�۷�</option>
				<option value="borrow_kouhui">����˷���ۻ�</option>
				<option value="account_other">����</option>
			</select>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��</div>
		<div class="c">
			<input type="text" name="money" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="c">
			<input type="text" name="remark" />���磬�ֳ����ÿ۳�200Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">��֤�룺</div>
		<div class="c"><input  class="user_aciton_input"  name="valicode" type="text" size="8" maxlength="4" style=" padding-top:4px; height:16px; width:70px;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		<input type="button"  name="reset" value="ȷ���۳�" onclick="check_form()" />
	</div>
</form>
</div>

<script type="text/javascript">
function check_form(){
	var frm = document.forms['form1'];
	var remark = frm.elements['remark'].value;
	var username = frm.elements['username'].value;
	var money = frm.elements['money'].value;
	var valicode = frm.elements['valicode'].value;
	var errorMsg = '';
	if(remark.length == 0 ) {
		errorMsg += '--��ע������д' + '\n';
	}
	if(username.length == 0){
		errorMsg += '--�û���������д' + '\n';
	}
	if(money.length == 0){
		errorMsg += '--��������д' + '\n';
	}
	if(valicode.length != 4){
		errorMsg += '--��֤����������' + '\n';
	}
	if(errorMsg.length == 0){
		frm.submit();
		frm.elements['reset'].disabled=true;
		frm.elements['reset'].value="�ύ��...";
		submit_fool();
	}else{
		alert(errorMsg);
		return;
	}
}
</script>

<!--���ÿ۳�  ����-->
<!--�ʽ�ʹ�ü�¼�б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="log"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td">�û�����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">�ܽ��</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">���ý��</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">���ս��</td>
			<td width="" class="main_td">���׶Է�</td>
			<td width="" class="main_td">��¼ʱ��</td>
            <td width="" class="main_td">��ע</td>
			<td width="" class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_log_list']) || $this->magic_vars['_A']['account_log_list']=='') $this->magic_vars['_A']['account_log_list'] = array();  $_from = $this->magic_vars['_A']['account_log_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" ><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene" class="thickbox" title="�û���ϸ��Ϣ�鿴"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"account_type");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username'] = '';$_tmp = $this->magic_vars['item']['to_username'];$_tmp = $this->magic_modifier("default",$_tmp,"ϵͳ");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
            <td><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
			<td>--</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="12" class="action">
		<div class="floatl"><input type="button" value="������ǰ����" onclick="sousuo('excel')" /></div>
		<div class="floatr">
		ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/>��<input type="text" name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		  <select name='typeaction' id='typeaction' >  <option value=''>ȫ��</option>  <option value='tender' <?php if($_REQUEST['typeaction']=='tender') echo "selected='selected'" ?>>Ͷ��</option>  <option value='recharge' <?php if($_REQUEST['typeaction']=='recharge') echo "selected='selected'" ?>>�û���ֵ</option>  <option value='borrow_fee' <?php if($_REQUEST['typeaction']=='borrow_fee') echo "selected='selected'" ?>>���������</option>  <option value='cash_cancel' <?php if($_REQUEST['typeaction']=='cash_cancel') echo "selected='selected'" ?>>ȡ�����ֽⶳ</option>  <option value='cash_frost' <?php if($_REQUEST['typeaction']=='cash_frost') echo "selected='selected'" ?>>���ֶ���</option>  <option value='borrow_success' <?php if($_REQUEST['typeaction']=='borrow_success') echo "selected='selected'" ?>>�������</option>  <option value='margin' <?php if($_REQUEST['typeaction']=='margin') echo "selected='selected'" ?>>��֤��</option>  <option value='invest' <?php if($_REQUEST['typeaction']=='invest') echo "selected='selected'" ?>>�۳������</option>  <option value='fee' <?php if($_REQUEST['typeaction']=='fee') echo "selected='selected'" ?>>��ֵ������</option>  <option value='award_lower' <?php if($_REQUEST['typeaction']=='award_lower') echo "selected='selected'" ?>>�۳�Ͷ�꽱��</option>  <option value='award_add' <?php if($_REQUEST['typeaction']=='award_add') echo "selected='selected'" ?>>Ͷ�꽱��</option>  <option value='repayment' <?php if($_REQUEST['typeaction']=='repayment') echo "selected='selected'" ?>>����</option>  <option value='invest_false' <?php if($_REQUEST['typeaction']=='invest_false') echo "selected='selected'" ?>>Ͷ��ʧ���ʽ𷵻�</option>  <option value='recharge_fee' <?php if($_REQUEST['typeaction']=='recharge_fee') echo "selected='selected'" ?>>����������</option>  <option value='collection' <?php if($_REQUEST['typeaction']=='collection') echo "selected='selected'" ?>>���ս��</option>  <option value='borrow_frost' <?php if($_REQUEST['typeaction']=='borrow_frost') echo "selected='selected'" ?>>�ⶳ������</option>  <option value='invest_repayment' <?php if($_REQUEST['typeaction']=='invest_repayment') echo "selected='selected'" ?>>����</option>  <option value='vip' <?php if($_REQUEST['typeaction']=='vip') echo "selected='selected'" ?>>vip��Ա��</option>  <option value='realname' <?php if($_REQUEST['typeaction']=='realname') echo "selected='selected'" ?>>ʵ����֤����</option>  <option value='recharge_success' <?php if($_REQUEST['typeaction']=='recharge_success') echo "selected='selected'" ?>>���ֳɹ�</option>  <option value='recharge_false' <?php if($_REQUEST['typeaction']=='recharge_false') echo "selected='selected'" ?>>����ʧ��</option>  <option value='system_repayment' <?php if($_REQUEST['typeaction']=='system_repayment') echo "selected='selected'" ?>>����ϵͳ����</option>  <option value='late_rate' <?php if($_REQUEST['typeaction']=='late_rate') echo "selected='selected'" ?>>������Ϣ�۳�</option>  <option value='late_repayment' <?php if($_REQUEST['typeaction']=='late_repayment') echo "selected='selected'" ?>>���ڻ���</option>  <option value='ticheng' <?php if($_REQUEST['typeaction']=='ticheng') echo "selected='selected'" ?>>Ͷ�����</option>  <option value='late_collection' <?php if($_REQUEST['typeaction']=='late_collection') echo "selected='selected'" ?>>��������</option>  <option value='scene_account' <?php if($_REQUEST['typeaction']=='scene_account') echo "selected='selected'" ?>>�ֳ���֤����</option>  <option value='vouch_advanced' <?php if($_REQUEST['typeaction']=='vouch_advanced') echo "selected='selected'" ?>>�����渶�۷�</option>  <option value='borrow_kouhui' <?php if($_REQUEST['typeaction']=='borrow_kouhui') echo "selected='selected'" ?>>����˷���ۻ�</option>  <option value='vouch_awardpay' <?php if($_REQUEST['typeaction']=='vouch_awardpay') echo "selected='selected'" ?>>��������֧��</option>  <option value='vouch_award' <?php if($_REQUEST['typeaction']=='vouch_award') echo "selected='selected'" ?>>������������</option>  <option value='margin_vouch' <?php if($_REQUEST['typeaction']=='margin_vouch') echo "selected='selected'" ?>>�����ɹ�����5%</option>  <option value='video' <?php if($_REQUEST['typeaction']=='video') echo "selected='selected'" ?>>��Ƶ��֤����</option>  <option value='tender_mange' <?php if($_REQUEST['typeaction']=='tender_mange') echo "selected='selected'" ?>>��Ϣ�������</option>  <option value='vip2' <?php if($_REQUEST['typeaction']=='vip2') echo "selected='selected'" ?>>�۳�����VIP��</option>  <option value='smssq' <?php if($_REQUEST['typeaction']=='smssq') echo "selected='selected'" ?>>�۳����ŷ���</option>  <option value='tixian_fee' <?php if($_REQUEST['typeaction']=='tixian_fee') echo "selected='selected'" ?>>�۳�����������</option>  <option value='borrow_fee_forst' <?php if($_REQUEST['typeaction']=='borrow_fee_forst') echo "selected='selected'" ?>>������ö���</option>  <option value='borrow_fee_unforst' <?php if($_REQUEST['typeaction']=='borrow_fee_unforst') echo "selected='selected'" ?>>������ýⶳ</option>  <option value='vip3' <?php if($_REQUEST['typeaction']=='vip3') echo "selected='selected'" ?>>����VIP�����</option>  <option value='vip4' <?php if($_REQUEST['typeaction']=='vip4') echo "selected='selected'" ?>>vip����ûͨ���˷�</option>  <option value='recharge_reward' <?php if($_REQUEST['typeaction']=='recharge_reward') echo "selected='selected'" ?>>��ֵ�������</option>  <option value='return_reward' <?php if($_REQUEST['typeaction']=='return_reward') echo "selected='selected'" ?>>�ؿ���Ͷ����</option> </select>
		�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
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
</table>
<!--�ʽ�ʹ�ü�¼�б� ����-->
<!--�ؿ���Ͷ������� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="return_reward"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">Ͷ�ʽ���</td>
		<td width="" class="main_td">Ͷ����</td>
		<td width="" class="main_td">�ɽ�������</td>
		<td width="" class="main_td">��������</td>
		<td width="" class="main_td">�������</td>
		<td width="" class="main_td">״̬</td>
		<td width="" class="main_td">���ʱ��</td>
		<td width="" class="main_td">����</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['return_reward']) || $this->magic_vars['_A']['return_reward']=='') $this->magic_vars['_A']['return_reward'] = array();  $_from = $this->magic_vars['_A']['return_reward']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene" class="thickbox" title="�û���ϸ��Ϣ�鿴"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
		<td><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
		<td><? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['can_reward'])) $this->magic_vars['item']['can_reward'] = ''; echo $this->magic_vars['item']['can_reward']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['reward_scale'])) $this->magic_vars['item']['reward_scale'] = ''; echo $this->magic_vars['item']['reward_scale']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['reward_account'])) $this->magic_vars['item']['reward_account'] = ''; echo $this->magic_vars['item']['reward_account']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>�������ųɹ�<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==5): ?>��������ʧ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>�ȴ����Ž���<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>Ͷ�궳����<? endif; ?></td>
		<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/return_rewardview&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&a=cash">���</a><? else: ?>--<? endif; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="12" class="action">
		<div class="floatr">
		״̬��<select id="status"><option value="">ȫ��</option><option value="2" <? if (!isset($_GET['status'])) $_GET['status']=''; ;if (  $_GET['status']==2): ?>selected="selected"<? endif; ?>>�ȴ����Ž���</option><option value="1" <? if (!isset($_GET['status'])) $_GET['status']=''; ;if (  $_GET['status']==1): ?>selected="selected"<? endif; ?>>�������ųɹ�</option><option value="5" <? if (!isset($_GET['status'])) $_GET['status']=''; ;if (  $_GET['status']==5): ?>selected="selected"<? endif; ?>>��������ʧ��</option><option value="3" <? if (!isset($_GET['status'])) $_GET['status']=''; ;if (  $_GET['status']==3): ?>selected="selected"<? endif; ?>>Ͷ�궳����</option></select>
		�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		<input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="return_rewardview"): ?>
<div class="module_add">
	<form name="form1" method="post" action="" onsubmit="return submit_fool()">
	<div class="module_title"><strong>�����������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['return_rewardview']['username'])) $this->magic_vars['_A']['return_rewardview']['username'] = ''; echo $this->magic_vars['_A']['return_rewardview']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">�ؿ���Ͷ��������</div>
	</div>
	<div class="module_border">
		<div class="l">��</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['return_rewardview']['reward_account'])) $this->magic_vars['_A']['return_rewardview']['reward_account'] = ''; echo $this->magic_vars['_A']['return_rewardview']['reward_account']; ?></div>
	</div>
	<? if (!isset($this->magic_vars['_A']['return_rewardview']['status'])) $this->magic_vars['_A']['return_rewardview']['status']=''; ;if (  $this->magic_vars['_A']['return_rewardview']['status']==2): ?>
	<div class="module_border">
		<div class="l">�Ƿ񷢷ţ�</div>
		<div class="c">
			<input type="radio" name="status" value=1 />��<input type="radio" name="status" value=5 checked="checked" />��
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="c">
			<input type="text" name="remark" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">��֤�룺</div>
		<div class="c"><input  class="user_aciton_input"  name="valicode" type="text" size="8" maxlength="4" style=" padding-top:4px; height:16px; width:70px;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['return_rewardview']['id'])) $this->magic_vars['_A']['return_rewardview']['id'] = ''; echo $this->magic_vars['_A']['return_rewardview']['id']; ?>" />
		<input type="submit"  name="reset" value="ȷ������" />
	</div>
	<? else: ?>
	<div class="module_border">
		<div class="l">�Ƿ񷢷ţ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['return_rewardview']['status'])) $this->magic_vars['_A']['return_rewardview']['status']=''; ;if (  $this->magic_vars['_A']['return_rewardview']['status']==1): ?>�ѷ���<? if (!isset($this->magic_vars['_A']['return_rewardview']['status'])) $this->magic_vars['_A']['return_rewardview']['status']=''; ;elseif (  $this->magic_vars['_A']['return_rewardview']['status']==5): ?>����ʧ��<? endif; ?>
		</div>
	</div>
	<? endif; ?>
	</form>
</div>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="return_account"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">�ܻؿ���</td>
		<td width="" class="main_td">���ûؿ���</td>
		<td width="" class="main_td">���ûؿ���</td>
		<td width="" class="main_td">����ؿ���</td>
		<td width="" class="main_td">���ʱ��</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['return_account']) || $this->magic_vars['_A']['return_account']=='') $this->magic_vars['_A']['return_account'] = array();  $_from = $this->magic_vars['_A']['return_account']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene" class="thickbox" title="�û���ϸ��Ϣ�鿴"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
		<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['already_use_money'])) $this->magic_vars['item']['already_use_money'] = ''; echo $this->magic_vars['item']['already_use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['not_use_money'])) $this->magic_vars['item']['not_use_money'] = ''; echo $this->magic_vars['item']['not_use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="12" class="action">
		<div class="floatr">
		�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		<input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="return_log"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">�������</td>
		<td width="" class="main_td">�ܻؿ���</td>
		<td width="" class="main_td">���ûؿ���</td>
		<td width="" class="main_td">���ûؿ���</td>
		<td width="" class="main_td">����ؿ���</td>
		<td width="" class="main_td">��ע</td>
		<td width="" class="main_td">���ʱ��</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['return_log']) || $this->magic_vars['_A']['return_log']=='') $this->magic_vars['_A']['return_log'] = array();  $_from = $this->magic_vars['_A']['return_log']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene" class="thickbox" title="�û���ϸ��Ϣ�鿴"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
		<td><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['already_use_money'])) $this->magic_vars['item']['already_use_money'] = ''; echo $this->magic_vars['item']['already_use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['not_use_money'])) $this->magic_vars['item']['not_use_money'] = ''; echo $this->magic_vars['item']['not_use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="12" class="action">
		<div class="floatr">
		�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		<input type="button" value="����" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
</table>
<? endif; ?>
<script type="text/javascript">
var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type'] = ''; echo $this->magic_vars['_A']['query_type']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>';

function sousuo(){
	var sou = "";
	if(arguments[0]=="excel"){
		sou += "&type=excel";
	}
	var trade_no = $("#trade_no").val() || "";
	var status = $("#status").val() || "";
	var dotime1 = $("#dotime1").val() || "";
	var keywords = $("#keywords").val() || "";
	var username = $("#username").val() || "";
    var username2 = $("#username2").val() || "";
	var dotime2 = $("#dotime2").val() || "";
	var typeaction = $("#typeaction").val() || "";
	var pertainbank = $("#pertainbank").val() || "";
	var account = $("#account").val() || "";
	if (trade_no!=""){
		sou += "&trade_no="+trade_no;
	}
	if (status!=""){
		sou += "&status="+status;
	}
	if (username!=""){
		 sou += "&username="+username;
	}
	if (username2!=""){
		 sou += "&username2="+username2;
	}
	if (trade_no!=""){
		 sou += "&trade_no="+trade_no;
	}
	if (keywords!=""){
		 sou += "&keywords="+keywords;
	}
	if (dotime1!=""){
		 sou += "&dotime1="+dotime1;
	}
	if (dotime2!=""){
		 sou += "&dotime2="+dotime2;
	}
	if (typeaction!=""){
		 sou += "&typeaction="+typeaction;
	}
	if(pertainbank!=""){
		sou += "&pertainbank="+pertainbank;
	}
	if(account!=""){
		if(account.length!=19){
			alert("�����˺���������");
			return;
		}
		sou += "&account="+account;
	}
	location.href=url+sou;
}
</script>
