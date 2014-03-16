<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="admin_head.html.php"}

<!--栏目管理列表可以管理的列表，开始-->
{if $_A.query_class == "loop" }
 <table  border="0"  cellspacing="1" bgcolor="#CCCCCC"  width="100%">
	  <form action="{$_A.admin_url}&q=site/order" method="post" name="form1" onsubmit="return submit_fool()">
		<tr >
			<td width="" class="main_td">全选</td>						
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td">栏目名称</td>
			<th width="" class="main_td">识别ID</th>
			<th width="" class="main_td">管理权限</th>
			<th width="" class="main_td">所属模块</th>
			<th width="" class="main_td">排序</th>
			<td width="" class="main_td">操作</td>
		</tr>
		{foreach from=$_G.site_list  item=item}
		<tr  id="id_{$item.pid}_{$item.site_id}" {if $key%2==0}class="tr2"{/if}>
			<td class="main_td1" align="center" width="40">
			{if $item.ppid==1}
			<a href="javascript:void(0);" onclick="change_tr('{$item.site_id}','{$item.pid}');"><img src="{$tpldir}/images/ico_open.gif" align="absmiddle" border="0" id="imgopen_{$item.site_id}"  /><img src="{$tpldir}/images/ico_close.gif" align="absmiddle" border="0" id="imgclose_{$item.site_id}"  style="display:none" /></a> 
			{else}
			<img src="{$tpldir}/images/ico_no.gif" />
			{/if}
			<input type="hidden" value="{$item.ppid}" id="ppd_{$item.site_id}" />
			</td>
			<td class="main_td1" align="center" >{$item.site_id}</td>
			<td class="main_td1" align="left" >{$item.aname}</td>
			<td class="main_td1" align="center">{$item.nid}</td>
			<td class="main_td1" align="center">
			{html_checkboxes options="$_A.admin_type_check" name="rank" kname = "$key" checked="$item.rank"}</td>
			<td class="main_td1" align="center" >{$item.module_name}</td>
			<td class="main_td1" align="center" ><input type="text" name="order[{$key}]" value="{$item.order}" size="3" /><input type="hidden" name="site_id[{$key}]" value="{$item.site_id}" /></td>
			<td class="main_td1" align="center" >
		  <a href="{$_A.admin_url}&q=site/new&pid={$item.site_id}{$site_url}">添加</a> <a href="{$_A.admin_url}&q=site/edit&a=loop&site_id={$item.site_id}{$site_url}">修改</a> <a href="{$_A.admin_url}&q=site/move&a=loop&site_id={$item.site_id}{$site_url}">移动</a> <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='{$_A.admin_url}&q=site/del&site_id={$item.site_id}{$site_url}'">删除</a></td>
		</tr>
		{/foreach}
	<tr>
	<td colspan="8" class="submit" >
	<input type="submit" value="修改排序" /> 
	</td>
</tr>		
</table>
<!--栏目管理列表，可以管理的列表，结束-->
		
			
<!--栏目管理列表，所有人都可以查看，开始-->
{elseif $_A.query_class == "list"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC"  width="100%">
	<tr >					
		<td width="" class="main_td" >ID</td>
		<td width="" class="main_td">栏目名称</td>
		<th width="" class="main_td">识别ID</th>
		<th width="" class="main_td">所属模块</th>
		<th width="" class="main_td">排序</th>
	</tr>
	{foreach  from=$_G.site_list  item=item}
	<tr id="id_{$item.pid}_{$item.site_id}" {if $key%2==0}class="tr2"{/if}>
		
		<td class="main_td1" align="center" >{ $item.site_id}</td>
		<td class="main_td1" align="left" >{$item.aname}</td>
		<td class="main_td1" align="center">{$item.nid}</td>
		<td class="main_td1" align="center" >{$item.module_name}</td>
		<td class="main_td1" align="center" >{$item.order}</td>
	
	</tr>
	{/foreach}	
</table>
<!--栏目管理列表，所有人都可以查看，结束-->
			
<!--添加和修改栏目 开始-->
{elseif $_A.query_class == "new" || $_A.query_class == "edit"}
	<div class="module_add">
	
	<form action="" method="post" name="form1" onsubmit="return check_form()" enctype="multipart/form-data">
	<div class="module_title"><span>{if $_A.query_class=="edit"}<a href="{$_A.query_url}&q=site/new&pid={$_A.site_result.site_id}&a=loop">添加子栏目</a>&nbsp;{/if}</span><strong>{ if $_A.query_class == "edit" }编辑{else}添加{/if}栏目</strong></div>
	<div class="module_border">
		<div class="l">所在栏目：</div>
		<div class="c">
			<strong>{ $_A.site_presult.name|default:$_A.site_result.pname|default:'根目录'}
				<input type="hidden" name="pid" value="{$_A.site_presult.site_id|default:$_A.site_result.pid|default:0}" /></strong>
		</div>
	</div>
	
	 <div class="module_border">
		<div class="l">栏目名称 ：</div>
		<div class="c">
			<input type="text" align="absmiddle" name="name" value="{$_A.site_result.name}" /> <input type="checkbox" name="isurl" value="1" onclick="jump_url()"  { if $result.isurl=="1"} checked="checked"{ /if}/>跳转页
		</div>
	</div>
	
	<div class="module_border" style="display:{ if $result.isurl!="1"}none{ /if}" id="jump_url">
		<div class="l">跳转网址：</div>
		<div class="c">
			<input type="text" name="url"  class="input_border" value="{$_A.site_result.url}" size="30" />
		</div>
	</div>
	
	
	<div class="module_border" >
		<div class="l">自定义链接：</div>
		<div class="c">
			<input type="text" name="aurl"  class="input_border" value="{$_A.site_result.aurl}" size="30" />此次可以做为网站栏目的自定义链接管理，比如讲师管理，直接输入site/peixun/teacher 
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">识别ID(nid)：</div>
		<div class="c">
			<input type="text" align="absmiddle" name="nid"  onkeyup="value=value.replace(/[^a-zA-Z_0-9]/g,'')" value="{$_A.site_result.nid}"/>只能为 字母和下划线（_）
				
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状&nbsp;&nbsp;&nbsp; 态 ：</div>
		<div class="c">
			<input type="radio" value="0" name="status" { if $_A.site_result.status==0 || $_A.site_result.status==""}checked="checked"{ /if}/>隐藏
			<input type="radio" value="1" name="status" { if $_A.site_result.status==1 || $_A.site_result.status==""}checked="checked"{ /if} />显示
		</div>
	</div>
	
	
	<div class="module_border" >
		<div class="l">栏目类型：</div>
		<div class="c">
			<input type="radio" value="0" name="style" { if $_A.site_result.style==0 ||$_A.site_result.style==""}checked="checked"{ /if}/>列表
			<input type="radio" value="1" name="style" { if $_A.site_result.style==1}checked="checked"{ /if}/>单页文章
		</div>
	</div>
	
				<!--
			   <div class="module_border">
		<div class="l">管理权限：</div>
		<div class="c">
			
				{ if $config.type=='edit'}
					{ $pur}
				{ else}
				{ foreach from=$rank key =key item=item}
				<input type="checkbox" value="{ $item.rank}" name="rank[}">{ $item.name} 
				 { /foreach}
				 { /if}
		
				（不选择表示不限制）
		</div>
	</div>
	
	
			  -->
	 <div class="module_border">
		<div class="l">排列顺序：</div>
		<div class="c">
				<input type="text" align="absmiddle" name="order"  onkeyup="value=value.replace(/[^0-9]/g,'')" size="5" value="{$_A.site_result.order|default:10}"/>
		</div>
	</div>
	
	 <div class="module_border">
		<div class="l">所属模块：</div>
		<div class="c">
				{ if $_A.query_class == "edit"}
					{$_A.site_result.module_name}
				<input type="hidden" name="code" value="{$_A.site_result.code}" />
				{ else}
				<select name="code" id="code" >
				<option value="" >请选择模块</option>
				{foreach from="$_A.module_list" item="item"}
				<option value="{$item.code}" >{$item.name}</option>
				{/foreach}
				</select>
				{ /if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">封面模板：</div>
		<div class="c">
			<input name="index_tpl" type="text"  style="width:300px" value="{$_A.site_result.index_tpl|default:"[code].html"}" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">列表模板：</div>
		<div class="c">
			<input name="list_tpl" type="text"  style="width:300px" value="{$_A.site_result.list_tpl|default:"[code]_list.html"}" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">文章模板：</div>
		<div class="c">
			<input name="content_tpl" type="text"  style="width:300px" value="{$_A.site_result.content_tpl|default:"[code]_content.html"}" />
		</div>
	</div>
			  
	{if $_A.query_class=="edit"}
	<div class="module_border">
		<div class="l">模板修改：</div>
		<div class="c">
			 <input type="checkbox" value="1" name="update_all" />所属栏目一起修改 <input type="checkbox" value="1" name="update_brother" />同级栏目一起修改
		</div>
	</div>
	 {/if}
	 
	<div class="module_border">
		<div class="l">列表命名规则：</div>
		<div class="c">
			<input name="list_name" type="text"  style="width:300px" value="{$_A.site_result.list_name|default:"index_[page].html"}" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">文章命名规则：</div>
		<div class="c">
			<input name="content_name" type="text"  style="width:300px" value="{$_A.site_result.content_name|default:"[id].html"}" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">文件保存目录：</div>
		<div class="c">
			<input name="sitedir" type="text"  style="width:300px" value="{$_A.site_result.sitedir|default:"[nid]"}" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">管理权限：</div>
		<div class="c">
			{html_checkboxes options="$_A.admin_type_check" name="rank" checked="$_A.site_result.rank"} 
		</div>
	</div>
	{ if $_A.query_class=="new"}
	<div class="module_border">
		<div class="l">目录相对位置：</div>
		<div class="c">
			<input name="referpath" type="radio" value="parent" checked="chekced" />
              上级目录
                            <input name="referpath" type="radio" value="cmspath" />
              CMS根目录
		</div>
	</div>
	{/if}
	
	<div class="module_border">
		<div class="l">文件访问类型：</div>
		<div class="c">
			<input type="radio" name="visit_type" value="0" {if $result.visit_type==0 || $result.visit_type==""} checked="checked"{/if}  title="如：?3/1"/> 动态访问 <input type="radio" name="visit_type" value="1" {if $result.visit_type==1} checked="checked"{/if} title="如：?article/dongtai/1.html"/> 生成html访问 （备注：如果系统设置伪静态为是，则按伪静态的来）
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">title参数：</div>
		<div class="c">
			<textarea name="title" cols="40" rows="3" id="title">{$_A.site_result.title}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">关键字：</div>
		<div class="c">
			<textarea name="keywords" cols="40" rows="3" id="keywords">{$_A.site_result.keywords}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">栏目描述：</div>
		<div class="c">
			 <textarea name="description" cols="40" rows="3" id="textarea2">{$_A.site_result.description}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">栏目图片：</div>
		<div class="c">
			 <input type="file" name="litpic" size="30" class="input_border"/>{if $_A.site_result.litpic!=""}<a href="./{$_A.site_result.litpic}" target="_blank" title="有图片"><img src="{ $tpldir }/images/ico_1.jpg" border="0"  /></a>{/if}
		</div>
	</div>
			<script charset="utf-8" src="/plugins/editor/kindeditor/kindeditor-min.js"></script>
		<script charset="utf-8" src="/plugins/editor/kindeditor/lang/zh_CN.js"></script>
	<div class="module_border">
		<div class="l">栏目内容：</div>
		<div class="c">
 
						<textarea name="content" id="content"  style="width:800px;height:400px;visibility:hidden;" >{$_A.site_result.content}</textarea>

		</div>
	</div>
	
	<div class="module_submit">
		{ if $_A.query_class == "edit" }<input type="hidden" value="{$magic.request.site_id}"  name="site_id" />{/if}
		<input type="submit" value=" 提 交 "  name="submit_ok" />&nbsp;&nbsp;
		<input name="reset" type="reset"  value=" 重 置 " />
	</div>
			</form>
 </div>
  <script>
	var url = "{$_A.admin_url}&q=site";
	{literal}
	//editor add by weego 20120615 for 网页编辑器
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="content"]', {
			allowFileManager : true
		});
	});
			
	$(function() {
		$("#code").change(function() {
			$.ajax({
			  url: url+"/module&code="+this.value,
			  cache: false,
			  success: function(html){
				var aa = html.split(",");
				$("input[name='index_tpl']").attr("value",aa[0]);
				$("input[name='list_tpl']").attr("value",aa[1]);
				$("input[name='content_tpl']").attr("value",aa[2]);
			  }
			}); 

		})
		;
	});
	</script>
  {/literal}
  
 <!--添加和修改栏目 结束--> 
  	
	
<!--编辑栏目 开始-->
{elseif $_A.query_class == "update"}
	<div class="module_add">
	
	<form action="" method="post" name="form1" onsubmit="return check_form()" enctype="multipart/form-data">
	<div class="module_title"><strong>编辑栏目</strong></div>
	<div class="module_border">
		<div class="l">所在栏目：</div>
		<div class="c">
			<strong>{ $_A.site_presult.name|default:$_A.site_result.pname|default:'根目录'}
				<input type="hidden" name="pid" value="{$_A.site_presult.site_id|default:$_A.site_result.pid|default:0}" /></strong>
		</div>
	</div>
	
	 <div class="module_border">
		<div class="l">栏目名称 ：</div>
		<div class="c">
			<input type="text" align="absmiddle" name="name" value="{$_A.site_result.name}" />
		</div>
	
	</div>
	
	
	<div class="module_border">
		<div class="l">识别ID(nid)：</div>
		<div class="c">
			<input type="text" align="absmiddle" name="nid"  onkeyup="value=value.replace(/[^a-zA-Z_]/g,'')" value="{$_A.site_result.nid}"/>只能为 字母和下划线（_）
				
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状&nbsp;&nbsp;&nbsp; 态 ：</div>
		<div class="c">
			<input type="radio" value="0" name="status" { if $_A.site_result.status==0 || $_A.site_result.status==""}checked="checked"{ /if}/>隐藏
			<input type="radio" value="1" name="status" { if $_A.site_result.status==1 || $_A.site_result.status==""}checked="checked"{ /if} />显示
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">栏目图片：</div>
		<div class="c">
			 <input type="file" name="litpic" size="30" class="input_border"/>{if $_A.site_result.litpic!=""}<a href="./{$_A.site_result.litpic}" target="_blank" title="有图片"><img src="{ $tpldir }/images/ico_1.jpg" border="0"  /></a><input type="checkbox" name="clearlitpic" value="1" /> 去掉图片{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">内容：</div>
		<div class="c">
			{editor name="content" value="$_A.site_result.content"}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">title参数：</div>
		<div class="c">
			<textarea name="title" cols="40" rows="3" id="title">{$_A.site_result.title}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">关键字：</div>
		<div class="c">
			<textarea name="keywords" cols="40" rows="3" id="keywords">{$_A.site_result.keywords}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">栏目描述：</div>
		<div class="c">
			 <textarea name="description" cols="40" rows="3" id="textarea2">{$_A.site_result.description}</textarea>
		</div>
	</div>
	<div class="module_submit">
		<input type="hidden" value="{$magic.request.site_id}"  name="site_id" />
		<input type="submit" value=" 提 交 "  name="submit_ok" />&nbsp;&nbsp;
		<input name="reset" type="reset"  value=" 重 置 " />
	</div>
			</form>
 </div>
 
  
 <!--添加和修改栏目 结束--> 
 
 	
		  {elseif $_A.query_class == "recycle"}
			 <table  border="0"  width="100%" cellspacing="1"  bgcolor="#CCCCCC" >
				 
					<tr >
						<td class="main_td" >栏目ID</td>
						<td class="main_td">栏目名称</td>
						<td class="main_td">识别ID</td>
						<td class="main_td">所属模块</td>
						<td class="main_td" width="30%">操作</td>
					</tr>
					{foreach  from=$result key=key item=item}
					<tr {if $key%2==0}class="tr2"{/if}>
						<td class="main_td1" align="center" >{ $item.site_id}</td>
						<td class="main_td1" align="left">{$item.name}</td>
						<td class="main_td1" align="center">{$item.nid}</td>
						<td class="main_td1" align="center">{$item.module_name}</td>
						<td class="main_td1" align="center" >
							<a href="{$_A.admin_url}&q=site/{$item.code}&site_id={$item.site_id}">内容</a> 
							<a href="{$_A.admin_url}&q=site/new&pid={$item.site_id}">添加</a> 
							<a href="{$_A.admin_url}&q=site/edit&site_id={$item.site_id}" >修改</a> 
							<a href="{$_A.admin_url}&q=site/move&site_id={$item.site_id}">移动</a> 
							<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='{$_A.admin_url}&q=site/del&site_id={$item.site_id}'">删除</a>
						</td>
					</tr>
					{ /foreach}
	      </table>
		 
{elseif $_A.query_class=="move"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%" >
	<tr >
		<td align="left" bgcolor="#FFFFFF" class="main_td">&nbsp;&nbsp;移动栏目</td>
	</tr>
<form action="" method="post" onsubmit="return submit_fool()">
<tr><td bgcolor="#FFFFFF" align="left" class="main_td1">
<input name="site_id" type="hidden" value="{$_A.site_result.site_id}" />
<font color="#FF0000">移动栏目不会删除原来的数据。</font>
</td></tr>
<tr><td bgcolor="#FFFFFF" align="left" class="main_td1">
<div style="width:170px; overflow:hidden; float:left" align="left">移动的栏目：</div>{$_A.site_result.name}
<br />
<div style="width:170px; overflow:hidden; float:left"align="left">请选择要移动到的栏目下：</div><select name="pid">
<option value="0">根目录</option>
{site lrnore="$magic.request.site_id"}
<option value="{$var.site_id}" {if $result.pid == $var.site_id} selected="selected"{/if} >-{$var.aname}</option>
{/site}
</select>
</td></tr>
	<tr>
		<td  bgcolor="#FFFFFF" >
		&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value=" 提 交 " class="submitstyle" name="submit_ok" />&nbsp;&nbsp;
		<input name="reset" type="reset" class="submitstyle" value=" 重 置 " />
		</td>
	</tr>
</table>
</form>
 {/if}
		
{include file="admin_foot.html"}

