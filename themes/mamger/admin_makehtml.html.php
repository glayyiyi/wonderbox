<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{ if $t=="index"}
<div class="module_add">
	<div class="module_title"><strong>生成html</strong> -> 首页生成</div>
	
	<div class="module_border" >
		<div align="center"><br /><br /><strong>更新首页，首页的目录为第一次您添加的首页位置</strong><br /><br /><br /></div>
	</div>

	<div class="module_submit" >
		<input value="更新首页模板" type="button" onclick="javascript:location='{$url}/index&action=do';" />
	</div>
</div>
{ elseif $t=="site"}
<div class="module_add">
	<form action="" method="post">
	<div class="module_title"><strong>生成html</strong> -> 栏目生成</div>
	
	<div class="module_border">
		<div class="e">选择栏目：</div>
		<div class="c">
			<select name="site_id">
			<option value="0">更新全部栏目</option>
			{foreach from=$sitelist item=item key=key}
			<option value="{ $key}" {if $result.pid == $key} selected="selected"{/if} >-{$item.pname}</option>
			{ /foreach}
			</select>
		</div>
	</div>

	<div class="module_border">
		<div class="e">每次创建最大文件数：</div>
		<div class="c">
			<input type="text" value="50" name="amount" />
		</div>
	</div>

	<div class="module_border">
		<div class="e">是否更新子栏目：</div>
		<div class="c">
			<input type="radio" value="1" name="zilanmu" checked="checked" />更新子栏目 <input type="radio" value="0" name="zilanmu" />仅更新所写栏目
		</div>
	</div>

	<div class="module_submit" >
		<input value="更新栏目模板" type="submit"  />
	</div>
	</form>
</div>
{/if}