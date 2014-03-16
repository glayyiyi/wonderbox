<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" /> 
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/about.css" rel="stylesheet" type="text/css" /> 
 <div id="main" class="clearfix">
<div class="cor_divtop">
<div id="left" class="left">

<div class="NavLinkHeader"><span>关于我们</span></div>
<div class="NavLinkContent">
			<? $this->magic_vars['query_type']='GetSiteList';$data = array('var'=>'var','epage'=>'20','pid'=>'21','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','status'=>'1');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetSiteList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
		   <div id="item1" class="page" onClick="showsubmenu( 1, 10)"><span class="txtspan"><a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" rel="<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" ><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></span></div>
		  <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
</div>
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
<div id="right" class="right">
<div >
<div id="MainBanner">
<div style="border-bottom:2px solid #c51e0b;" class="box_name">
				<a href="#" class="btn-action" style="margin-top:8px;text-decoration:none;color:#fff;"  ><? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?> </a>
		</div>
</div>
<div style="clear: both"></div>
<div id="myTabContent" class="content">
			<div class="info" id="lxjs">

<? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name']='';if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name']=''; ;if (  $this->magic_vars['_G']['site_result']['name'] == "媒体报道" ||   $this->magic_vars['_G']['site_result']['name'] == "最新公告"): ?>    
<div class="content_h3" align="center"><font size="3"><? if (!isset($this->magic_vars['_G']['article']['name'])) $this->magic_vars['_G']['article']['name'] = ''; echo $this->magic_vars['_G']['article']['name']; ?></font></div>
<!-- <div class="content_div" align="center"> 来源：<? if (!isset($this->magic_vars['_G']['article']['author'])) $this->magic_vars['_G']['article']['author'] = '';$_tmp = $this->magic_vars['_G']['article']['author'];$_tmp = $this->magic_modifier("default",$_tmp,"管理员");echo $_tmp;unset($_tmp); ?> &nbsp;&nbsp;  
发布时间：<? if (!isset($this->magic_vars['_G']['article']['addtime'])) $this->magic_vars['_G']['article']['addtime'] = '';$_tmp = $this->magic_vars['_G']['article']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?> &nbsp;&nbsp;  
点击次数：<? if (!isset($this->magic_vars['_G']['article']['hits'])) $this->magic_vars['_G']['article']['hits'] = ''; echo $this->magic_vars['_G']['article']['hits']; ?> </div> -->
<? endif; ?>
							<!--内容开始-->
				<div class="content_ro2">
				<table width="100%"><tr>
				
				  <td><? if (!isset($this->magic_vars['_G']['site_result']['content'])) $this->magic_vars['_G']['site_result']['content'] = ''; echo $this->magic_vars['_G']['site_result']['content']; ?><? if (!isset($this->magic_vars['_G']['article']['content'])) $this->magic_vars['_G']['article']['content'] = ''; echo $this->magic_vars['_G']['article']['content']; ?></td>
				  
				</tr></table>

				<? if (!isset($this->magic_vars['_G']['article']['files'])) $this->magic_vars['_G']['article']['files']=''; ;if (  $this->magic_vars['_G']['article']['files']!=""): ?>
				<div style="float:right">
				<a href="<? if (!isset($this->magic_vars['_G']['article']['files'])) $this->magic_vars['_G']['article']['files'] = ''; echo $this->magic_vars['_G']['article']['files']; ?>" target="_blank"><font color="#FF0000">下载文件</font></a>
				</div>
				<? endif; ?>
				</div>
				<!--内容结束-->
			
			
			
</div></div></div></div></div></div></div>
</div>


<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>