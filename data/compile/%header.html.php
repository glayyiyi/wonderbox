<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
		<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<title><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?></title>
		<meta name="description" content="<? if (!isset($this->magic_vars['_G']['system']['con_description'])) $this->magic_vars['_G']['system']['con_description'] = ''; echo $this->magic_vars['_G']['system']['con_description']; ?>" />
		<meta name="keywords" content="<? if (!isset($this->magic_vars['_G']['system']['con_keywords'])) $this->magic_vars['_G']['system']['con_keywords'] = ''; echo $this->magic_vars['_G']['system']['con_keywords']; ?>" />
		
		<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/jquery-ui.css" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/css/default/main.css" media="screen"/>
		<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/js/jquery.min.js"></script>
		
		
		
		<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jquery-ui.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/thickbox/thickbox.css" type="text/css" media="screen" />
		
		<!--jbox-->
<link id="skin" rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/Skins/Gray/jbox.css" />
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/jquery.jBox-2.3.min.js?v=1" charset='gb2312'></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/i18n/jquery.jBox-zh-CN.js?v=1" charset='gb2312'></script>
		<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/index.js"></script>
		
		
		<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/base.js"></script>

</head>
	<body>
<div id="container">
  <div id="header">
    <div class="topTool">
      <div class="content">
        <div class="isLeft">
          <div class="topContact"><span>服务热线：4008-340-868 </span> <span>服务时间：9:00-18:00 </span> <span>官方QQ群：391114833</span></div>
        </div>
        <div class="isRight">
          <div class="topLogin">
          <span class="welcome">
          您好，亲爱的万得贷用户
                    <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']>0): ?>
				  <a href="/?user"><? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?></a> 
				  <a href="/?user&q=going/logout">[退出]</a>
		
				 <? else: ?>
				 <a href="/index.action?user&q=going/login">登录</a> 
				 <? if (!isset($this->magic_vars['_G']['system']['con_is_reg_open'])) $this->magic_vars['_G']['system']['con_is_reg_open']=''; ;if (  $this->magic_vars['_G']['system']['con_is_reg_open']): ?> 
				 <a href="/index.action?user&q=going/getreg">注册</a>
				 <? endif; ?>
				 <? endif; ?>
          </span>
         
          </div>
        </div>
      </div>
    </div>
    <div class="topBar floatIsTrue">
      <div class="content">
        <div class="logo"><a href="/" ><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/images/logo.png" alt="万得贷 - 普惠,公开,平等的网络借贷平台" /></a></div>
        <div class="menu">
          <ul id="nav">
          			<li>
						<a href="/" class="highlight">我要投资</a>
					</li>
					<li>
						<a href="/index.action?user">我的账户</a>
					</li>
					<li>
						<a href="/onlineservice/index.html">安全保障</a>
					</li>
					<li>
						<a href="/html/aboutus/intro.html">关于我们</a>
					</li>
            <!-- <li><a href="#">我要投资 </a></li>
            <li><a href="#">新手指南</a>
            </li>
            <li><a href="#">安全保障</a></li>
            <li><a href="#">关于我们</a>
              <ul>
                <li><a href="#"> 公司简介 </a></li>
                <li><a href="#"> 产品介绍</a></li>
                <li><a href="#"> 业务模式</a></li>
                <li><a href="#"> 风险管控</a></li>
                <li><a href="#"> 投资指南</a></li>
                <li><a href="#"> 收益模式</a></li>
              </ul>
            </li>
            <li><a href="#" class="highlight">我的账户</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
		<!-- 公共头结束 -->