
<div class="module_add">
	<div class="module_border">
		<div class="s">�û���:</div>
		<div class="h">
		 {$_A.user_result.username} </div>
		 <div class="s">����:</div>
		<div class="h">
		 {$_A.user_result.email} </div>
	
	</div>
	<div class="module_border">
		 <div class="s">��ʵ����:</div>
		<div class="h">
		 {$_A.user_result.realname} </div>
		<div class="s">�绰:</div>
		<div class="h">
		 {$_A.user_result.phone} </div>
		
	</div>	
	<div class="module_border">
		 <div class="s">QQ:</div>
		<div class="h">
		 {$_A.user_result.qq} </div>
		 <div class="s">�Ա�:</div>
		<div class="h">
		 {if $_A.user_result.sex==1}��{else}Ů{/if} </div>
	</div>
	
	<div class="module_border">
		 <div class="s">֤��:</div>
		<div class="h">
		 {$_A.user_result.card_id} </div>
		 <div class="s">����:</div>
		<div class="h">
		 {$_A.user_result.birthday|date_format:"Y-m-d "} </div>
	</div>
	
	<div class="module_border">
		<div class="s">����:</div>
		<div class="h">
		 {$_A.user_result.area|area} </div>
		 <div class="s">����:</div>
		<div class="h">
		 {$_A.user_result.nation|linkage} </div>
		
	</div>
	

	
	<div class="module_border">
		<div class="s">������� :</div>
		<div class="h">
		 {$_A.user_result.use_money} </div>
		 <div class="s">���û���:</div>
		<div class="h">
		 {$_A.user_result.credit_jifen} </div>
	</div>
	
	
</div>