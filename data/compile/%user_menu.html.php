
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

<h3>�ҵĲ˵�</h3>

		<ul id="user_menu_touzi" >
		 
			<li><a href="/index.php?user">�ҵ���ҳ</a></li>
			<li><a href="/index.php?user&q=code/account/recharge_new">��ֵ����</a></li>                    
			<li><a href="/index.php?user&q=code/account/log">�ʽ���ϸ</a></li>
			<li><a href="/index.php?user&q=code/message">��Ϣ</a></li>
		</ul>

<h3>Ͷ�ʹ���</h3>
		<ul id="user_menu_touzi" >
		 	<li><a href="/index.php?user&q=code/borrow/bid">����Ͷ�����Ŀ</a></li> 
			<li><a href="/index.php?user&q=code/borrow/succes&type=wait">��Ͷ�ʵ���Ŀ</a></li>
			<!-- <li><a href="/index.php?user&q=code/borrow/succes&type=yes">����ص���Ŀ</a></li>  -->
			<!-- <li><a href="/index.php?user&q=code/borrow/auto">Ͷ������</a></li> -->
			<li><a href="/index.php?user&q=code/account">Ͷ��ͳ��</a></li>
		</ul>

<h3>��������</h3>
		<ul id="user_menu_touzi" >
		 
			<li><a href="/index.php?user&q=code/userinfo">�޸ĸ�����Ϣ</a></li>
			<li><a href="/index.php?user&q=code/user/avatar">����ͷ��</a></li>
			<li><a href="/index.php?user&q=code/user/userpwd">�޸�����</a></li>                    
			<li><a href="/index.php?user&q=code/user/phone_status">��Ϣ��֤�Ͱ�</a></li>
			<!-- <li><a href="#">��˽��֪ͨ����</a></li> -->
			<li><a href="/index.php?user&q=code/user/reginvite">�������</a></li>
		</ul>
</div>