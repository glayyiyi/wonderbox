<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form name="f1" method="post">
<tr>
    <td class="main_td" align="center">参数</td>
	<td class="main_td"  align="center">值</td>
	<td class="main_td"  align="center">设置</td>
</tr>
  { foreach from=$result key=key item=item}
<tr {if $key%2==1}class="tr2"{/if} >
    <td   class="main_td1" >{ $item.name}:</td>
  <td align="left" class="main_td1" >
  { if $item.type==0}
    <input type="{if $item.nid=="con_email_pwd"}password{else}text{/if}" value="{ $item.value|br2nl}" name="value[{ $item.nid}]"/>
  { elseif $item.type==2}
  <textarea name="value[{ $item.nid}]" cols="30" rows="4">{ $item.value|br2nl}</textarea>
  { elseif $item.type==3}
  <input  name="value[{ $item.nid}]" value="{ $item.value|br2nl}" size="15"> <INPUT onclick="uploadImg('value[{ $item.nid}]');" type=button value=上传图片...>
  { else}
  <input type="radio" name="value[{ $item.nid}]" value="1" { if $item.value==1} checked="checked"{ /if} /> 是 <input type="radio" name="value[{ $item.nid}]"  value="0"  { if $item.value==0} checked="checked"{ /if}/> 否
  { /if}
  </td>
   <td class="main_td1" >{ if $item.status ==1}<a href="{ $url}/edit&id={$item.id}">修改</a> / <a href=" {$url}/del&id={$item.id}">删除</a>{ else} - {/if}</td>
</tr>
{ /foreach}
<tr>
    <td class="submit" colspan="3"><input name="submit" type="submit" value="提 交" /></td>
</tr>
</table>
</form>