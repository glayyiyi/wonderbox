<div class="module_add">
<form name="form1" method="post" action="{$_A.query_url}/edit"  enctype="multipart/form-data">
	<!-- <div class="module_title"><strong>���ù���</strong></div>
	<div class="module_border">
		<div class="w">�����߳�ֵ�ķ��ã�</div>
		<div class="c">
		��ֵ�ķ���Ϊ <input type="text" value="2" name="" size="10" />%  ���� <input type="text" value="5000" name=""  size="10" />Ԫ����Ϊ<input type="text" value="50" name="50"  size="10" /> Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="w">��������ã�</div>
		<div class="c">
		��������¹����Ϊ����<input type="text" value="1" name="" size="5" />% ÿ����һ���¼��չ����<input type="text" value="1" name="" size="5" /> %��
		������ò���Ϣ�����˻����ڽ������ֱ�ӿ۳���
		</div>
	</div>
	<div class="module_border">
		<div class="w">VIP��Ա����</div>
		<div class="c">
		���ϻ��ִﵽ <input type="text" value="1" name="" size="5" />�ֿ�������vip��vip�ķ���Ϊ��<input type="text" value="5000" name=""  size="10" />Ԫ/�� ����֤�𰴱���<input type="text" value="1" name="" size="5" />%�����ڸ����ʻ����û�����ȫ���󣬽ⶳ��֤���ڽ��ɹ��Ժ��ٿ۳������ɹ����շ�
		</div>
	</div>
	<div class="module_border">
		<div class="w">���ƻ�Ա����</div>
		<div class="c">
		���ϻ��ִﵽ <input type="text" value="500" name="" size="5" />�����н���û�ȫ�����ֱ���ﵽ<input type="text" value="300" name="" size="5" />�֣���û�гٻ�������ڻ�����û���ϵͳ�Զ�Ϊ��������Ϊ���ƻ�Ա
		</div>
	</div> -->
	<div class="module_border">
		<div class="w">���ַ��ù���</div>
		<div class="c">
		������ֽ��<input type="text" value="{$_A.cash_rule.min_cash}" name="min_cash" size="5" />Ԫ��������ֽ��<input type="text" value="{$_A.cash_rule.max_cash}" name="max_cash" size="5" />Ԫ��ÿ���ۼ����ֲ��ܳ���<input type="text" value="{$_A.cash_rule.max_day_cash}" name="max_day_cash" size="5" />Ԫ
		<br/>����������A:<input type="radio" name="scheme" value="1" {if $_A.cash_rule.scheme=="1"}checked="checked"{/if} />���ֽ��С��<input type="text" value="{$_A.cash_rule.cash_lt}" name="cash_lt" size="5" />��ȡ<input type="text" value="{$_A.cash_rule.every_lt_fee}" name="every_lt_fee" size="1" />Ԫ/�������ѣ����ֽ�����<input type="text" value="{$_A.cash_rule.cash_gt}" name="cash_gt" size="5" />��ȡ<input type="text" value="{$_A.cash_rule.every_gt_fee}" name="every_gt_fee" size="1" />Ԫ/�������ѣ���ֵ<input type="text" value="{$_A.cash_rule.every_day_lt}" name="every_day_lt" size="1" />������δ��ȫͶ��Ķ������<input type="text" value="{$_A.cash_rule.every_extra_fee}" name="every_extra_fee" size="1" />Ԫ/�ʵ�������
		<br/>����������B:<input type="radio" name="scheme" value="2" {if $_A.cash_rule.scheme=="2"}checked="checked"{/if} />������ȡ<input type="text" value="{$_A.cash_rule.scale_fee}" name="scale_fee" size="5" />%�������ѣ���ֵ<input type="text" value="{$_A.cash_rule.scale_day_lt}" name="scale_day_lt" size="1" />������δ����Ͷ�겿�ֶ�����ȡ<input type="text" value="{$_A.cash_rule.scale_extra_fee}" name="scale_extra_fee" size="5" />%��������
		</div>
	</div>
	<div class="module_submit">
		<input type="hidden" name="id" value="{$_A.cash_rule.id}" />
		<input type="submit" name="submit" value="ȷ���ύ" />
		<input type="reset" name="reset" value="���ñ�" />
	</div>
</form>
</div>

{literal}
<script>
function check_form(){
/*
	 var frm = document.forms['form1'];
	 var title = frm.elements['name'].value;
	 var errorMsg = '';
	  if (title.length == 0 ) {
		errorMsg += '���������д' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
	  */
}

</script>
{/literal}
