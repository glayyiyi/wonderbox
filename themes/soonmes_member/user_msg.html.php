<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}

 <div id="mainBody">
    <div class="alertPage">
    <div class="status statusWait">   
    <h2>系统提示信息</h2>
    </div>
    <div class="content" style="text-align:center">
 <h3>{$_U.showmsg.msg}</h3>
 <div class="btnBar"><a href="{$_U.showmsg.url}" >{$_U.showmsg.content}</a></div>
    </div>
    </div>
  </div>


<script> 

var url = '{ $_U.showmsg.url }';
var content = '{ $_U.showmsg.content }';
{literal}
if (url == ""){
	jQuery("#msg_content").html("<a href='javascript:history.go(-1)'>"+content+"</a>");
	//document.getElementById('msg_content').innerHTML = "<a href='javascript:history.go(-1)'>"+content+"</a>";
}else{
	jQuery("#msg_content").html("<a href='"+url+"'>"+content+"</a>");
	//document.getElementById('msg_content').innerHTML = "<a href='"+url+"'>"+content+"</a>";
}
setInterval("testTime()",5000); 
function testTime() { 
		if (url == ""){
			history.go(-1);
		}else{
        location.href = url; //#设定跳转的链接地址
		}
} 
</script>{/literal}


{include file="user_footer.html"}