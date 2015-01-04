<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<div id="homeSlider">
    <div id="home-width-slider" class="royalSlider">
      <div class="rsContent" style="background-image:url(<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/banner1.jpg)"><a href="/index.action?user&q=going/getreg" class="full"></a></div>
     <!--  <div class="rsContent" style="background-image:url(<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/banner2.jpg)"><a href="/index.php?user&q=code/user/reginvite" class="full"></a></div> -->
      <div class="rsContent" style="background-image:url(<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/banner3.jpg)"></div>
    </div>
    <div class="homeLogin">
      <div class="content">
      <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
        <form action="/index.php?user&q=going/login" method="post" id="login_sub">
        <div class="title">登录个人账户</div>
        <div class="inputForm"> 
      
          <input name="username" type="text" placeholder="用户名"/>
          <input name="password" type="password"  placeholder="密码"/>
        </div>
         
        <div class="forgetPWD"><a href="?user&q=going/getpwd" target=_blank>忘记登录密码？</a></div>
        <div class="submitBtn">
          <button id="login_btn">马上登录</button>
        </div>
        <div class="toReg">还没有账号，现在<a href="/index.action?user&q=going/getreg">注册</a></div>
        </form>
        
      
      <? else: ?>
      
        <div class="title">欢迎使用万得贷平台</div>
        <div class="summary">
        您当前的账户为：<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?><br>
        祝您投资愉快！
        </div>
        <div class="submitBtn">
          <button id="my_account_btn">进入我的账户</button>
        </div>
        <div class="toReg"><a href="/?user&q=going/logout">退出</a>当前账户</div>
      </div>
      <? endif; ?>
      
      
    </div>
  </div>
  <div id="mainBody">
    <div class="homeTemp">
      <div class="content">
        <div class="items"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/homeFeature1.png" / >
          <h3>收益高 见效快</h3>
          <p>年化11，活期利率30倍,周期1-3个月，回报快 </p>
        </div>
        <div class="items"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/homeFeature2.png" / >
          <h3>模式创新</h3>
          <p>专注供应链金融领域，与国有骨干性企业合作，
            项目均实地考察并签署合作协议 </p>
        </div>
        <div class="items"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/homeFeature3.png" / >
          <h3>类刚性兑付</h3>
          <p>与融资企业、供货方签署三方协议，由供货方提供
            履约保证，与担保公司相比，履约能力更强，更透明 </p>
        </div>
      </div>
    </div>
    <div class="homeSection">
      <div class="project">
      
         <div class="title">万得宝
          <div class="more"><!-- <a href="#">更多票据宝</a> --></div>
        </div> 
        <div class="list">
          <ul>
          <? $this->magic_vars['query_type']='GetList';$data = array('var'=>'var','limit'=>'5','order'=>'biaoindex');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
          <? if (!isset($this->magic_vars['var']['biao_type'])) $this->magic_vars['var']['biao_type']=''; ;if (  $this->magic_vars['var']['biao_type']=='pj'): ?> 
            <li class="first">
              <div class="item">
                <div class="rate rate<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;if (  $this->magic_vars['var']['scale']>0& $this->magic_vars['var']['scale']<=10): ?>10<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>10& $this->magic_vars['var']['scale']<=20): ?>20<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>20& $this->magic_vars['var']['scale']<=30): ?>30<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>30& $this->magic_vars['var']['scale']<=40): ?>40<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>40& $this->magic_vars['var']['scale']<=50): ?>50<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>50& $this->magic_vars['var']['scale']<=60): ?>60<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>60& $this->magic_vars['var']['scale']<=70): ?>70<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>70& $this->magic_vars['var']['scale']<=80): ?>80<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>80& $this->magic_vars['var']['scale']<100): ?>90<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']==100): ?>100<? endif; ?>"><? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%</div>
                <div class="intro">
                  <h3><a <? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>class="done"<? endif; ?> href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"><strong><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"25:...");echo $_tmp;unset($_tmp); ?></strong></a></h3>
                  <div class="relate"><strong class="money"><? if (!isset($this->magic_vars['var']['account_format'])) $this->magic_vars['var']['account_format'] = ''; echo $this->magic_vars['var']['account_format']; ?> <span><? if (!isset($this->magic_vars['var']['use_name'])) $this->magic_vars['var']['use_name'] = ''; echo $this->magic_vars['var']['use_name']; ?></span></strong> 
                  <strong class="limit">
                 <? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?><? if (!isset($this->magic_vars['var']['time_limit_day'])) $this->magic_vars['var']['time_limit_day'] = ''; echo $this->magic_vars['var']['time_limit_day']; ?>天<? else: ?><? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?>个月<? endif; ?><span>期限</span></strong><strong class="level"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/icon-levelA.png" /></strong></div>
                  <div class="relate"><strong class="rateYear"><? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>% <span>年化率</span></strong></div>
                </div>
                <div class="oprate"> <? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>
	<? if (!isset($this->magic_vars['var']['repayment_account'])) $this->magic_vars['var']['repayment_account']='';if (!isset($this->magic_vars['var']['repayment_yesaccount'])) $this->magic_vars['var']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['repayment_account'] ==  $this->magic_vars['var']['repayment_yesaccount']): ?> 
	<a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" >已还款</a> 
	<? else: ?> 
	<a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" >还款中</a> 
	<? endif; ?> 
	<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==5): ?> <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/cancel_repayment.jpg" />
	<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==4): ?> <a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html">复审失败</a> 
	<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==2): ?> <a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" >等待复审</a> 
	<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale'] < 100): ?> 
	<? if (!isset($this->magic_vars['var']['biao_type'])) $this->magic_vars['var']['biao_type']=''; ;if (  $this->magic_vars['var']['biao_type']=='pj'): ?> 
	<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html">马上认购</a> 
	<? else: ?> 
	<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html">立即投标</a> 
	<? endif; ?> 
	<? else: ?> 
	<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?> 
	<a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" >已认购完</a> 
	<? else: ?> 
		<a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" >等待复审</a> <? endif; ?> 
	<? endif; ?>
                  <div class="remain"><strong>余额 ￥<? if (!isset($this->magic_vars['var']['other'])) $this->magic_vars['var']['other'] = ''; echo $this->magic_vars['var']['other']; ?></strong><span> 剩余 <? if (!isset($this->magic_vars['var']['lave_time'])) $this->magic_vars['var']['lave_time'] = ''; echo $this->magic_vars['var']['lave_time']; ?></span></div>
                </div>
              </div>
            </li>
            <? endif; ?>
           <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
          </ul>
        </div>
      
      
      
        <div class="title">链融通
          <div class="more"><!-- <a href="#">更多链融通</a> --></div>
        </div>
        <div class="list">
          <ul>
          <? $this->magic_vars['query_type']='GetList';$data = array('var'=>'var','limit'=>'50','order'=>'biaoindex');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
           <? if (!isset($this->magic_vars['var']['biao_type'])) $this->magic_vars['var']['biao_type']=''; ;if (  $this->magic_vars['var']['biao_type']!='pj'): ?> 
           <? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']!=1): ?> 
            <li class="first">
              <div class="item">
                <div class="rate rate<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;if (  $this->magic_vars['var']['scale']>0& $this->magic_vars['var']['scale']<=10): ?>10<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>10& $this->magic_vars['var']['scale']<=20): ?>20<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>20& $this->magic_vars['var']['scale']<=30): ?>30<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>30& $this->magic_vars['var']['scale']<=40): ?>40<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>40& $this->magic_vars['var']['scale']<=50): ?>50<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>50& $this->magic_vars['var']['scale']<=60): ?>60<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>60& $this->magic_vars['var']['scale']<=70): ?>70<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>70& $this->magic_vars['var']['scale']<=80): ?>80<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']='';if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']>80& $this->magic_vars['var']['scale']<100): ?>90<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']==100): ?>100<? endif; ?>"><? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%</div>
                <div class="intro">
                  <h3><a <? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>class="done"<? endif; ?> href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"><strong><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"25:...");echo $_tmp;unset($_tmp); ?></strong></a></h3>
                  <div class="relate"><strong class="money"><? if (!isset($this->magic_vars['var']['account_format'])) $this->magic_vars['var']['account_format'] = ''; echo $this->magic_vars['var']['account_format']; ?> <span><? if (!isset($this->magic_vars['var']['use_name'])) $this->magic_vars['var']['use_name'] = ''; echo $this->magic_vars['var']['use_name']; ?></span></strong> 
                  <strong class="limit">
                 <? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?><? if (!isset($this->magic_vars['var']['time_limit_day'])) $this->magic_vars['var']['time_limit_day'] = ''; echo $this->magic_vars['var']['time_limit_day']; ?>天<? else: ?><? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?>个月<? endif; ?><span>期限</span></strong><strong class="level"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/icon-levelA.png" /></strong></div>
                  <div class="relate"><strong class="rateYear"><? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>% <span>年化率</span></strong></div>
                </div>
                <div class="oprate"> <? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>
	<? if (!isset($this->magic_vars['var']['repayment_account'])) $this->magic_vars['var']['repayment_account']='';if (!isset($this->magic_vars['var']['repayment_yesaccount'])) $this->magic_vars['var']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['repayment_account'] ==  $this->magic_vars['var']['repayment_yesaccount']): ?> 
	<a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" >已还款</a> 
	<? else: ?> 
	<a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" >还款中</a> 
	<? endif; ?> 
	<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==5): ?> <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/cancel_repayment.jpg" />
	<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==4): ?> <a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html">复审失败</a> 
	<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==2): ?> <a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" >等待复审</a> 
	<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale'] < 100): ?> 
	<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?> 
	<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html">马上认购</a> 
	<? else: ?> 
	<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html">立即投标</a> 
	<? endif; ?> 
	<? else: ?> 
	<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?> 
	<a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" >已认购完</a> 
	<? else: ?> 
		<a class="done" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" >等待复审</a> <? endif; ?> 
	<? endif; ?>
                  <div class="remain"><strong>余额 ￥<? if (!isset($this->magic_vars['var']['other'])) $this->magic_vars['var']['other'] = ''; echo $this->magic_vars['var']['other']; ?></strong><span> 剩余 <? if (!isset($this->magic_vars['var']['lave_time'])) $this->magic_vars['var']['lave_time'] = ''; echo $this->magic_vars['var']['lave_time']; ?></span></div>
                </div>
              </div>
            </li>
            <? endif; ?>
            <? endif; ?>
           <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
          </ul>
        </div>
        
     
      </div>
      <div class="info">
        <div class="notice">
          <h3>公告 <!-- <a href="/gonggao/index.html" class="more">更多</a> --></h3>
          <ul>
          <? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(22); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
                    <? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_var'=>'var','var'=>'item','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
            <li><a href="<? if (!isset($this->magic_vars['item']['site_nid'])) $this->magic_vars['item']['site_nid'] = ''; echo $this->magic_vars['item']['site_nid']; ?>/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></a></li>
             <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
                    <? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>	
          </ul>
        </div>
        <div class="promote"> <a href="#"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/homePromote.png" /></a> </div>
        <div class="news">
          <h3>媒体报道 </h3>
          <ul>
             <li><a href="http://economy.gmw.cn/2014-11/06/content_13777150.htm" target="_blank">P2P网贷行业即将洗牌 万得贷领跑市场</a></li> 
             <li><a href="http://finance.fecn.net/money/2014/1106/1106124134124134.html" target="_blank">双份收益 万得贷推新型理财经理计划 </a></li> 
             <li><a href="http://finance.fecn.net/money/2014/1106/1106124102124102.html" target="_blank">行业领先 万得贷首创供应链金融理财产品</a></li> 
             <li><a href="http://finance.fecn.net/money/2014/1106/1106124100124100.html" target="_blank">加速洗牌 万得贷不断创新逆势爆发</a></li> 
             <li><a href="http://www.gdutol.com/news/keji/207449.html" target="_blank">万得贷推本金保障计划 投资更安全</a></li>
           
          </ul>
        </div> 
      </div>
    </div>
    <div class="parttners">
      <div class="content">
        <h2>合作伙伴</h2>
        <ul>
          <li><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/partner01.jpg" /></li>
          <li><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/partner02.jpg" /></li>
          <li><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/partner03.jpg" /></li>
          <li><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/upload/partner04.jpg" /></li>
        </ul>
      </div>
    </div>
    <div class="links">
      <div class="content">
        <h2>友情链接</h2>
        <ul>
     
          <li><a href="http://www.hexun.com/" target="_blank">和讯财经</a></li>
          <li><a href="http://www.wangdaizhijia.com/" target="_blank">网贷之家</a></li>
          <li><a href="http://www.p2peye.com/" target="_blank">网贷天眼</a></li>
          <li><a href="http://www.chinapnr.com/" target="_blank">汇付天下有限公司</a></li>
          <li><a href="http://finance.ifeng.com/itfinance/index.shtml" target="_blank">凤凰互联网金融</a></li>
          <li><a href="http://itfinance.jrj.com.cn/" target="_blank">金融界互联网金融 </a></li>
        </ul>
      </div>
    </div>
  </div>

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>

<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/js/default/jquery.royalslider.min.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/statics/js/default/setting.js"></script>

<script>
      jQuery(document).ready(function($) {
		$('#home-width-slider').royalSlider({
				arrowsNav: true,
				slidesSpacing:0,
				loop: true,
				keyboardNavEnabled: true,
				controlsInside: false,
				imageScaleMode: 'fill',
				arrowsNavAutoHide: false,
				controlNavigation: 'bullets',
				thumbsFitInViewport: false,
				navigateByClick: false,
				startSlideId: 0,
				transitionType:'move',
				globalCaption: true,
				autoPlay: {
                        enabled: true,
                        delay: 4000
                    },
				deeplinking: {
					enabled: true,
					change: false
				}
  			});
		});


jQuery(function(){
	
	jQuery('#login_btn').click(function(){
		jQuery('#login_sub').submit();
	});
});
jQuery(function(){
	
	jQuery('#my_account_btn').click(function(){
		window.location.href="/index.action?user";
		
	});
});

</script>
