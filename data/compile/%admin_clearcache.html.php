<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;if (  $this->magic_vars['_A']['query_class']=="clearcache"): ?>
<div class="module_add">
	<div class="module_title"><strong>��ջ���</strong></div>
	
	<div class="module_border" >
		<div align="center"><br /><br /><strong>�����վ�Ļ��棬Ҳ�������data/compiles�µ������ļ�</strong><br /><br /><br /></div>
	</div>

	<div class="module_submit" >
		<input value="��ջ���" type="button" onclick="javascript:location='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/do';submit_fool()" />
	</div>
</div>
<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>���ɲ����ļ�</strong></div>
	
	<div class="module_border" >
		<div align="center"><br /><br /><strong>��������data/parameter�µ��ļ�</strong><br /><br /><br /></div>
	</div>

	<div class="module_submit" >
		<form action='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/do' method='post' onsubmit="return submit_fool()">
		<input value="��������" type="submit" />
		</form>
	</div>
</div>
<? endif; ?>
