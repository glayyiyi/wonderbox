<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

<div id="main" class="clearfix">
	<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'var','limit'=>'all','type_id'=>'4');$default = '';  include_once(ROOT_PATH.'modules/scrollpic/scrollpic.class.php');$this->magic_vars['magic_result'] = scrollpicClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?> <img src="/<? if (!isset($this->magic_vars['var']['pic'])) $this->magic_vars['var']['pic'] = ''; echo $this->magic_vars['var']['pic']; ?>" alt=""> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>

	<div id="mainBody">
		<div class="articalPage">
			<div class="content">
				<div class="subMenu">
					<h3>��ȫ����</h3>
					<ul>
						<? $this->magic_vars['query_type']='GetSiteList';$data = array('var'=>'var','epage'=>'20','pid'=>'84','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','status'=>'1');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetSiteList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
						<li><a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
					
				</div>

				<div class="site_id" style="display: none"><? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid'] = ''; echo $this->magic_vars['_G']['site_result']['nid']; ?></div>
				<script>
	
		function showSecond(){
			var $ = jQuery;
			var siteId = $(".site_id").text();
			var oBox = $(".NavLinkContent");
			var oA = $("a" ,oBox);
			var Rel = "";
			oA.each(function(){
				var index = oA.index(this);
				Rel = $(oA[index]).attr("rel");
				console.log(Rel,siteId)
				if(Rel == siteId){
					$(oA[index]).addClass("hover");
				}
				
			})
		}
		showSecond();
		
	</script>
	<div class="main">
	<div class="titleTop"><? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?></div>
					<div class="articalContent">
						

							
								<div class="info" id="lxjs">
									
									<style>
.kefu_li li {
	list-style: none;
	line-height: 25px;
}
</style>
									

									<div
										style="padding-left: 10px; overflow: hidden; height: auto; width: 98%">
										<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'20','type_id'=>'3');$default = '';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
										<div style="width: 300px; float: left; margin: 10px">
											<div class="floatl" style="width: 120px">
												<img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" width="100" height="99" />

											</div>
											<div>
												<ul class="kefu_li">
													<li><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></li>
													<li>������<? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?></li>
													<li>�绰:<? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone'] = ''; echo $this->magic_vars['var']['phone']; ?></li>
													<li><a target="_blank"
														href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?>&site=qq&menu=yes">
															<img border="0"
															src="http://wpa.qq.com/pa?p=2:<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?>:41"
															alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ">
													</a></li>
													<!--<li><? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?></li>-->
												</ul>
											</div>
										</div>
										<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
									</div>



								</div>
							
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>
