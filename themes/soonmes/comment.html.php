 
{include file="header.html"}


<!--������ ��ʼ-->
<div class="clearfix" id="main">
	<div class="title"><img src="{$tpldir}/images/ico_4.gif" /> ���۹���</div>

	<div class="content">
		<ul class="pinglun_list">
			{foreach from ="$_G.commentlist" item="item"}
			<li style="padding:5px 0 0 70px;height:100px;" class="clearfix">
<div class="pinglun_co_left">
<div class="pinglun_co_pic"><img height="73" src="{$item.user_id|avatar}" width="73"></div>
<a href="#">{$item.username}</a>
</div>
<div class="floatl" style="margin-left:20px;">
<div class="pinglun_co_content">{$item.comment}<br>
	<font style="font-size:12px; float: right">{$item.addtime|date_format}</font>
</div >
</div >
</li>
{/foreach}
		</ul>
		<div align="center">{$_G.showpage}</div>
		
	</div>
	<div class="foot"></div>
</div>
<!--������ ����-->


{include file="footer.html"}