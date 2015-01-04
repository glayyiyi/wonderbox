
		<script type="text/javascript">
 function changeUserMenu(id){
    var mu = $("#user_title_"+id);
    var qe = $("#user_menu_"+id);
    if(qe.css('display')=='none'){
        mu.removeClass('title1').addClass('title');
        qe.css('display', 'block');
    }else{
        mu.removeClass('title').addClass('title1');
        qe.css('display', 'none');
    }
}
</script>

<div class="subMenu">

<h3>我的菜单</h3>

		<ul id="user_menu_touzi" >
		 
			<li><a href="/index.php?user">我的主页</a></li>
			<li><a href="/index.php?user&q=code/account/recharge_new">充值提现</a></li>                    
			<li><a href="/index.php?user&q=code/account/log">资金明细</a></li>
			<li><a href="/index.php?user&q=code/message">消息</a></li>
		</ul>

<h3>投资管理</h3>
		<ul id="user_menu_touzi" >
		 	<li><a href="/index.php?user&q=code/borrow/bid">正在投标的项目</a></li> 
			<li><a href="/index.php?user&q=code/borrow/succes&type=wait">已投资的项目</a></li>
			<!-- <li><a href="/index.php?user&q=code/borrow/succes&type=yes">已赎回的项目</a></li>  -->
			<!-- <li><a href="/index.php?user&q=code/borrow/auto">投资助手</a></li> -->
			<li><a href="/index.php?user&q=code/account">投资统计</a></li>
		</ul>

<h3>个人设置</h3>
		<ul id="user_menu_touzi" >
		 
			<li><a href="/index.php?user&q=code/userinfo">修改个人信息</a></li>
			<li><a href="/index.php?user&q=code/user/avatar">更换头像</a></li>
			<li><a href="/index.php?user&q=code/user/userpwd">修改密码</a></li>                    
			<li><a href="/index.php?user&q=code/user/phone_status">信息认证和绑定</a></li>
			<!-- <li><a href="#">隐私及通知设置</a></li> -->
			<li><a href="/index.php?user&q=code/user/reginvite">邀请好友</a></li>
		</ul>
</div>