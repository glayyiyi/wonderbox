<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;if (  $this->magic_vars['_A']['query_class']=="clearcache"): ?>
<div class="module_add">
	<div class="module_title"><strong>清空缓存</strong></div>
	
	<div class="module_border" >
		<div align="center"><br /><br /><strong>清空网站的缓存，也就是清空data/compiles下的所有文件</strong><br /><br /><br /></div>
	</div>

	<div class="module_submit" >
		<input value="清空缓存" type="button" onclick="javascript:location='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/do';submit_fool()" />
	</div>
</div>
<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>生成参数文件</strong></div>
	
	<div class="module_border" >
		<div align="center"><br /><br /><strong>重新生成data/parameter下的文件</strong><br /><br /><br /></div>
	</div>

	<div class="module_submit" >
		<form action='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/do' method='post' onsubmit="return submit_fool()">
		<input value="重新生成" type="submit" />
		</form>
	</div>
</div>
<? endif; ?>
