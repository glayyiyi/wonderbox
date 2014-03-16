<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<? $data = array('article_id'=>'0','id'=>$this->magic_vars['_G']['article_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetInvest($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id']=''; ;if (  $this->magic_vars['var']['borrow']['id']<1): ?>
<? if($_SERVER['HTTP_REFERER']==""){$this->magic_vars['_message']['_uri']=parse_url($_SERVER['SCRIPT_URI']);$this->magic_vars['_message']['_uri']=$this->magic_vars['_message']['_uri']['scheme'].'://'.$this->magic_vars['_message']['_uri']['host'];}else{$this->magic_vars['_message']['_uri']=$_SERVER['HTTP_REFERER'];};$this->magic_vars['_message_']['msg']='未找到相应的借款标!';$this->magic_vars['_message_']['content']='返回上一页';$this->magic_vars['_message_']['url']=$this->magic_vars['_message']['_uri'];setcookie('message', base64_encode(serialize($this->magic_vars['_message_'])), time()+60 , '/');header("location:/index.php?message");exit(); ?>
<? endif; ?>

<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />

<div id="main" class="clearfix">

<div class="bannerBar m_b_15">
					<p class="pic"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/banner_03.jpg"></p>
					<!-- 浮动层 -->
	 				<div class="pop_club">
						<div class="hd"></div>
                <div class="bg">
                	<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>是由君和资本旗下发起和建立的非盈利性会员组织，邀请平台投资者为会员，是为投资者之间进行沟通而搭建的线下私密交际平台。
                </div>
                <div class="ft"><a href="#"><img width="110" height="53" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/btn_jr.png"></a></div>
					  </div>
            <div class="pop_link">
            	<a href="#">贵宾风采</a> | <a href="#">专属服务</a>
            </div>
					<!-- end 浮动层 -->
				</div>
	
	
	<? if (!isset($_REQUEST['doaction'])) $_REQUEST['doaction']=''; ;if (  $_REQUEST['doaction']=="contract"): ?> <!-- 第二步 确认合同 -->
	
		<div class="step_tz m_b_10">
        	  <div class="step_n num_01">
            	<em class="n">1</em>
                <label class="txt">选择项目</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_02 hover">
            	<em class="n">2</em>
                <label class="txt">确认合同</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_03">
            	<em class="n">3</em>
                <label class="txt">在线支付</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_04 ">
            	<em class="n">4</em>
                <label class="txt">投资完成</label>
            </div>
        </div>
	<div class="module_05 m_b_20">
		<div class="hd">
			<h3 class="fl tit">项目详情：<? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></h3>
			<span class="fr num">项目编号：<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?></span> 
		</div>
	<div class="bg clearfix">
	
	<br>
	<div >
            <p>       
			<B><font size=3>以下共有三份协议需要您阅读并同意：</font></B>
			</p>
			
			<br>
			<p>
			<B>一,项目风险提示书</B>
			</p>
			<div align="center">
			<div align="left" style="width:99%;height:200px; overflow:scroll; border:1px solid #FF6C00;"> 
			<? if (!isset($this->magic_vars['_G']['system']['con_risk_notes'])) $this->magic_vars['_G']['system']['con_risk_notes'] = ''; echo $this->magic_vars['_G']['system']['con_risk_notes']; ?>
			</div>
			</div>
			<br>
			<p>
			<B>二,投资协议</B>
			</p>
			<div align="center">
			<div align="left" style="width:99%;height:200px; overflow:scroll; border:1px solid #FF6C00;"> 
			<? if (!isset($this->magic_vars['_G']['system']['con_invest_protocol'])) $this->magic_vars['_G']['system']['con_invest_protocol'] = ''; echo $this->magic_vars['_G']['system']['con_invest_protocol']; ?>
			</div>
			</div>
		<br>
			<p>
			<B>三,投资委托书</B>
			</p>
			<div align="center">
			<div align="left" style="width:99%;height:200px; overflow:scroll; border:1px solid #FF6C00;"> 
			<? if (!isset($this->magic_vars['_G']['system']['con_invest_commission'])) $this->magic_vars['_G']['system']['con_invest_commission'] = ''; echo $this->magic_vars['_G']['system']['con_invest_commission']; ?>
			</div>
			</div>
			
			<br>
    </div>
   
    </div>
    <br>
    <p align="center"> <a  class="btnnew btn_login f_18" href="?detail=true">
			同意并继续</a>
	</p>
    </div>
    
	
	
	
	<? if (!isset($_REQUEST['doaction'])) $_REQUEST['doaction']=''; ;elseif (  $_REQUEST['doaction']=="success"): ?> <!-- 第四步 -->
	<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'bor','borrow_id'=>isset($_REQUEST['borrow_id'])?$_REQUEST['borrow_id']:'','tender_id'=>isset($_REQUEST['tender_id'])?$_REQUEST['tender_id']:'','limit'=>'all');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['bor']):
?>
		<? if (!isset($this->magic_vars['bor']['user_id'])) $this->magic_vars['bor']['user_id']='';if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['bor']['user_id']!= $this->magic_vars['_G']['user_id']): ?>
		<? if($_SERVER['HTTP_REFERER']==""){$this->magic_vars['_message']['_uri']=parse_url($_SERVER['SCRIPT_URI']);$this->magic_vars['_message']['_uri']=$this->magic_vars['_message']['_uri']['scheme'].'://'.$this->magic_vars['_message']['_uri']['host'];}else{$this->magic_vars['_message']['_uri']=$_SERVER['HTTP_REFERER'];};$this->magic_vars['_message_']['msg']='未找到相应的借款标!';$this->magic_vars['_message_']['content']='返回上一页';$this->magic_vars['_message_']['url']=$this->magic_vars['_message']['_uri'];setcookie('message', base64_encode(serialize($this->magic_vars['_message_'])), time()+60 , '/');header("location:/index.php?message");exit(); ?>
		<? endif; ?>
	
	<div class="step_tz m_b_10">
        	  <div class="step_n num_01">
            	<em class="n">1</em>
                <label class="txt">选择项目</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_02">
            	<em class="n">2</em>
                <label class="txt">确认合同</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_03">
            	<em class="n">3</em>
                <label class="txt">在线支付</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_04 hover">
            	<em class="n">4</em>
                <label class="txt">投资完成</label>
            </div>
        </div>
	<div class="module_05 m_b_20">
		<div class="hd">
			<h3 class="fl tit">项目详情：<? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></h3>
			<span class="fr num">项目编号：<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?></span> 
		</div>
	<div class="bg clearfix">
	
	
	<div class="successful">
                      <s class="icon_successful"></s>
			您已完成<em class="c_red"><? if (!isset($this->magic_vars['bor']['tender_account'])) $this->magic_vars['bor']['tender_account'] = ''; echo $this->magic_vars['bor']['tender_account']; ?>元</em>项目投资，目前您的相关投资资金已冻结，在正式起息日<? if (!isset($this->magic_vars['bor']['success_time'])) $this->magic_vars['bor']['success_time'] = '';$_tmp = $this->magic_vars['bor']['success_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>开始后我们将从您的账户划出这笔冻结资金，以下为具体投资协议合同:（起息日计算规则为筹标时间的期限+1天）
                  </div>
		<div class="fl b_f0f0f0">
                	
                  <!--  -->
                  <div class="succ_m">
                    <div class="s_hd">
                        <h3 class="fl">投资协议合同</h3>
                       <!--  <span class="fr suc_btn">
                            <a class="btn_whiteBg01 m_r_5" style="width:44px;" href="#">
                              <span class="fl"></span>
                              <span class="fr"></span>
                              <label class="txt">打印</label>
                            </a>
                            <a class="btn_whiteBg01 m_r_5" style="width:56px;" href="#">
                              <span class="fl"></span>
                              <span class="fr"></span>
                              <label class="txt">另存为</label>
                            </a>
                            <a class="btn_whiteBg01" style="width:104px;" href="#">
                              <span class="fl"></span>
                              <span class="fr"></span>
                              <label class="txt">电子邮件发给我</label>
                            </a>
                        </span> -->
                    </div>
                    <div class="s_bg p_10">
                        <table width="100%" class="tb_succ">
                          <tr>
                            <td>协议号：<? if (!isset($_REQUEST['tender_id'])) $_REQUEST['tender_id'] = ''; echo $_REQUEST['tender_id']; ?></td>
                            <td>签订日期：<? if (!isset($this->magic_vars['bor']['addtime'])) $this->magic_vars['bor']['addtime'] = '';$_tmp = $this->magic_vars['bor']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
                          </tr>
                          <tr>
                            <td>筹款人：<? if (!isset($this->magic_vars['bor']['op_realname'])) $this->magic_vars['bor']['op_realname'] = ''; echo $this->magic_vars['bor']['op_realname']; ?></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>投资出借人：<? if (!isset($this->magic_vars['bor']['realname'])) $this->magic_vars['bor']['realname'] = ''; echo $this->magic_vars['bor']['realname']; ?></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>借款人通过<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>网站(以下简称“本网站”),就有关借款事项与各出借人达成如下协议：......</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>
                            
                        
                          
                          <a href="/protocol_xin/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>&tender_id=<? if (!isset($_REQUEST['tender_id'])) $_REQUEST['tender_id'] = ''; echo $_REQUEST['tender_id']; ?>" target="_blank" class="ico_sprite btnnew btn_view_02 f_bold">查看详情</a>
                  
                          
                            </td>
                            <td>&nbsp;</td>
                          </tr>
                        </table>
                    </div>
                  </div>
                  <!--  -->
                  <!--  -->
                  <div class="succ_m">
                    <div class="s_hd">
                        <h3 class="fl">合同及其他设置</h3>
                        <span class="fr"></span>
                    </div>
                    
                  <form action="/index.php?user&q=code/borrow/tendercontract" name="form2" method="post">
                    <div class="s_bg p_10">
                        <ol class="ht_list">
                            <li>
                                <em class="num">1、</em>
                                <div class="con">
                                    <p>我们将把合同和相关的收益权转让协议给您签字，请告知方便的时间和地点：</p>
                                    <p>地址：<input style="width:310px;" name="c_address" type="text" class="input_style_02" id="textfield" value="<? if (!isset($this->magic_vars['bor']['c_address'])) $this->magic_vars['bor']['c_address'] = ''; echo $this->magic_vars['bor']['c_address']; ?>" /></p>
                                    <p>姓名：<input style="width:310px;" name="c_name" type="text" class="input_style_02" id="textfield" value="<? if (!isset($this->magic_vars['bor']['c_name'])) $this->magic_vars['bor']['c_name'] = ''; echo $this->magic_vars['bor']['c_name']; ?>" /></p>
                                    <p>联系方式 ：<input style="width:280px;" name="c_phone" type="text" class="input_style_02" id="textfield" value="<? if (!isset($this->magic_vars['bor']['c_phone'])) $this->magic_vars['bor']['c_phone'] = ''; echo $this->magic_vars['bor']['c_phone']; ?>" /></p>
                                    <p>
                                      <label class="m_r_10"><input type="radio" name="c_contact_way" value="1" <? if (!isset($this->magic_vars['bor']['c_contact_way'])) $this->magic_vars['bor']['c_contact_way']=''; ;if (  $this->magic_vars['bor']['c_contact_way']==1): ?> checked="checked"<? endif; ?> /> 随时</label>
                                      <label class="m_r_10"><input type="radio" name="c_contact_way" value="2"  <? if (!isset($this->magic_vars['bor']['c_contact_way'])) $this->magic_vars['bor']['c_contact_way']=''; ;if (  $this->magic_vars['bor']['c_contact_way']==2): ?> checked="checked"<? endif; ?>/> 仅工作日</label>
                                      <label class="m_r_10"><input type="radio" name="c_contact_way" value="3" <? if (!isset($this->magic_vars['bor']['c_contact_way'])) $this->magic_vars['bor']['c_contact_way']=''; ;if (  $this->magic_vars['bor']['c_contact_way']==3): ?> checked="checked"<? endif; ?>/> 仅双休日</label>
                                      <label><input type="radio" name="c_contact_way" value="4" <? if (!isset($this->magic_vars['bor']['c_contact_way'])) $this->magic_vars['bor']['c_contact_way']=''; ;if (  $this->magic_vars['bor']['c_contact_way']==4): ?> checked="checked"<? endif; ?>/> 来前先电话预约</label>
                                      <input type="hidden" name="tender_id" value="<? if (!isset($_REQUEST['tender_id'])) $_REQUEST['tender_id'] = ''; echo $_REQUEST['tender_id']; ?>" />
                                       <!-- <input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?>" /> -->

                                    </p>
                                </div>
                            </li>
                            <li>
                                <em class="num">2、</em>
                                <div class="con">
                                    <p>将后续的对账单以以下形式发给我</p>
                                    <p>
                                      <label class="m_r_10"><input type="checkbox" name="c_with_email" id="c_with_email" <? if (!isset($this->magic_vars['bor']['c_with_email'])) $this->magic_vars['bor']['c_with_email']=''; ;if (  $this->magic_vars['bor']['c_with_email']==1): ?> checked="checked"<? endif; ?>/> 电子邮件</label>
                                      <label class="m_r_10"><input type="checkbox" name="c_with_post" id="c_with_post" <? if (!isset($this->magic_vars['bor']['c_with_post'])) $this->magic_vars['bor']['c_with_post']=''; ;if (  $this->magic_vars['bor']['c_with_post']==1): ?> checked="checked"<? endif; ?>/> 线下邮寄</label>
                                    </p>
                                </div>
                            </li>
                        </ol>
                        <p class="tc m_b_20"><input type="submit" class="ico_sprite btnnew btn_view_02" value='确 认'/></p>
                        
                        <p class="f_12">您还可以：<span class="c_157aeb"><a href="/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html" class="noneLine_style">查看此次投资详情</a> | <a href="/index.php?user&q=code/borrow/lenddetail" class="noneLine_style">查看我投资成功的其他项目</a>  | <a href="/invest/index.html?order=account_up" class="noneLine_style">查看其他投资项目</a></span></p>
                    </div>
                    </form>
                  </div>
                  <!--  -->
              </div>

              	<div class="p_8_5 recharge">
                   <div class="personnel m_b_60">
          <? $data = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::Getkf($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
			
			<div class="box box-kefu">
			<div class="box-title">你的理财顾问</div>
			<div class="box-con">
				<? $data = array('var'=>'kfUser');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['kfUser'] = borrowClass::Getkf($data);if(!is_array($this->magic_vars['kfUser'])){ $this->magic_vars['kfUser']=array();}?>
				<img class="user-photo" src="<? if (!isset($this->magic_vars['kfUser']['kefu_userid'])) $this->magic_vars['kfUser']['kefu_userid'] = '';$_tmp = $this->magic_vars['kfUser']['kefu_userid'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" />
				<? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username']=''; ;if (  $this->magic_vars['kfUser']['username'] != ""): ?>
				<p><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?></p>
				<p>姓名：<? if (!isset($this->magic_vars['kfUser']['realname'])) $this->magic_vars['kfUser']['realname'] = ''; echo $this->magic_vars['kfUser']['realname']; ?></p>
				<p>电话：<? if (!isset($this->magic_vars['kfUser']['phone'])) $this->magic_vars['kfUser']['phone'] = ''; echo $this->magic_vars['kfUser']['phone']; ?></p>
				<p>在线联系：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['kfUser']['qq'])) $this->magic_vars['kfUser']['qq'] = ''; echo $this->magic_vars['kfUser']['qq']; ?>&site=qq&menu=yes">
				<img border="0" src="http://wpa.qq.com/pa?p=2:<? if (!isset($this->magic_vars['kfUser']['qq'])) $this->magic_vars['kfUser']['qq'] = ''; echo $this->magic_vars['kfUser']['qq']; ?>:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a></p>
				
				<p>发送消息：<a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?>">站内信</a></p>
				<? endif; ?>
				<!-- <p>总机：<? if (!isset($this->magic_vars['_G']['system']['con_tel'])) $this->magic_vars['_G']['system']['con_tel'] = ''; echo $this->magic_vars['_G']['system']['con_tel']; ?></p> -->
				<p><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username']=''; ;if (  $this->magic_vars['kfUser']['username']== ""): ?>
                    您好，您还没有申请您的理财顾问，赶快来<a href="/vip/index.html" style="color:red">申请</a>吧！
                    <? else: ?>
                    您好，有任何疑问可随时跟您的理财顾问<font color="red"><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?></font>联系！
                    <? endif; ?></p>
                <? unset($_magic_vars);unset($data); ?>
			</div>
		</div>
		
			<? unset($_magic_vars);unset($data); ?>
                   </div>  
                 

                
              </div>
            </div>
        </div>
        <!-- end 项目详情 -->
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>	
		
	<? if (!isset($_REQUEST['detail'])) $_REQUEST['detail']=''; ;elseif (  $_REQUEST['detail']=="true"): ?><!-- 第三步 -->
	<div class="step_tz m_b_10">
        	  <div class="step_n num_01">
            	<em class="n">1</em>
                <label class="txt">选择项目</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_02">
            	<em class="n">2</em>
                <label class="txt">确认合同</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_03 hover">
            	<em class="n">3</em>
                <label class="txt">在线支付</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_04">
            	<em class="n">4</em>
                <label class="txt">投资完成</label>
            </div>
        </div>
	<div class="module_05 m_b_20">
		<div class="hd">
			<h3 class="fl tit">项目详情：<? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></h3>
			<span class="fr num">项目编号：<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?></span> 
		</div>
	<div class="bg clearfix">
	
	
	<div class="pop-tb clearfix">
	<div class="pop-tb-head clearfix">
		<h2><? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></h2>
		<a class="close" data-dismiss="modal">x</a>
	</div>
		<div class="pop-tb-con clearfix">
			<div class="pop-tb-l">
				<ul>
					<li>借款人：<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?></li>
					<li>借款金额：￥<strong><? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?></strong></li>
					<li>借款年利率: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %</li>
					<li>已经完成：<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> %</li>
					<li>还需借款: ￥<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?></li>
					<li>借款期限: <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
							<? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>天
							<? else: ?>
							<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>个月 
							<? endif; ?>
					</li>
					<li>还款方式: <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']='';if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1 &&  $this->magic_vars['var']['borrow']['is_lz']==0): ?> 
							到期全额还款
							<? else: ?>
							<? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
							<? endif; ?>
					</li>
				</ul>
			</div>
			<div class="pop-tb-r">
			<form action="/index.php?user&q=code/borrow/tender" name="form1" onsubmit="return check_form(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)" method="post" >
				<ul>
					<li>您的可用余额： <? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 元 <a href="/index.php?user&q=code/account/recharge_new">我要充值</a></li>
					<li>最多投标总额：<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account']=''; ;if (  $this->magic_vars['var']['borrow']['most_account']<=0): ?>不限制<? else: ?><? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = ''; echo $this->magic_vars['var']['borrow']['most_account']; ?>元<? endif; ?></li>
					<? if (!isset($this->magic_vars['var']['borrow']['is_kuai'])) $this->magic_vars['var']['borrow']['is_kuai']=''; ;if (  $this->magic_vars['var']['borrow']['is_kuai'] == 1): ?><li><font color="red">您当前最多可投快速标资金为:<? if (!isset($this->magic_vars['var']['borrow']['kuai_usemoney'])) $this->magic_vars['var']['borrow']['kuai_usemoney'] = ''; echo $this->magic_vars['var']['borrow']['kuai_usemoney']; ?>元</font><a href="/index.php?user&q=code/account/recharge_new">马上进行线下充值</a></li><? endif; ?>
					<li>当前年利率: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %</li>
					<li>投标金额：<input tabindex="1" type="text" id="money" name="money" size="11" 
					<? if (!isset($this->magic_vars['var']['borrow']['is_kuai'])) $this->magic_vars['var']['borrow']['is_kuai']=''; ;if (  $this->magic_vars['var']['borrow']['is_kuai'] == 1): ?>
					onkeyup="value=value.replace(/[^0-9.]/g,'')">元 <input type="button" onclick="inputAll(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['kuai_usemoney'])) $this->magic_vars['var']['borrow']['kuai_usemoney'] = '';$_tmp = $this->magic_vars['var']['borrow']['kuai_usemoney'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);" 
					<? else: ?>
					onkeyup="value=value.replace(/[^0-9.]/g,'')">元 <input type="button" onclick="inputAll(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);" 
					<? endif; ?>
					value="自动填入全部金额"></li>

					<li>支付密码：<? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><a href="/index.php?user&q=code/user/paypwd" target="_blank"><font color="red">请先设一个支付交易密码,设置完后返回该页面刷新生效</font></a><? else: ?><input type="password" name="paypassword" size="11" tabindex="2" /><? endif; ?></li>
					<? if (!isset($this->magic_vars['var']['borrow']['pwd'])) $this->magic_vars['var']['borrow']['pwd']=''; ;if (  $this->magic_vars['var']['borrow']['pwd'] != ""): ?><li>定向标密码：<input type="text" name="dxbPWD" id="dxbPWD" size="11" tabindex="3" /></li><? endif; ?>
					<!-- <? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;if (  $this->magic_vars['var']['borrow']['is_mb']==1): ?>  <? endif; ?> -->
					<li>&nbsp;&nbsp;验证码：<input type="text" id="yzmcode" name="yzmcode" tabindex="4" size="10" style="margin-right:5px;" maxlength="4" /> <img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;" />
					</li>
					
					
				</ul>
				<p class="mar20"><input type="submit" class="btn-action" value="确认付款"><p>
				<p class="text-red"><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>" />注意:点击确认表示您将投标金额并同意支付</p>
			</form>
			</div>
		</div>
		</div>
		</div>
		</div>
	<? else: ?><!--第一步 -->
	<div class="step_tz m_b_10">
        	  <div class="step_n num_01 hover">
            	<em class="n">1</em>
                <label class="txt">选择项目</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_02">
            	<em class="n">2</em>
                <label class="txt">确认合同</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_03">
            	<em class="n">3</em>
                <label class="txt">在线支付</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_04">
            	<em class="n">4</em>
                <label class="txt">投资完成</label>
            </div>
        </div>
		<div class="module_05 m_b_20">
			<div class="hd">
			<h3 class="fl tit">项目详情：<? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></h3>
			<span class="fr num">项目编号：<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?></span> 
			</div>
		<div class="bg clearfix">
	
        
	<div class="box-detail clearfix">
		<div class="box-info clearfix">
<!-- 			<div class="box-info-user">
				<img class="user-photo" src="<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = '';$_tmp = $this->magic_vars['var']['user']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" />
				<p>用户名: <? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?> </p>
				<p> 积分等级： <img class="rank" src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['credit_pic'])) $this->magic_vars['var']['credit_pic'] = '';$_tmp = $this->magic_vars['var']['credit_pic'];$_tmp = $this->magic_modifier("default",$_tmp,"credit_s11.gif");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['credit_jifen'])) $this->magic_vars['var']['user']['credit_jifen'] = '';$_tmp = $this->magic_vars['var']['user']['credit_jifen'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>分"  /> </p>
				<p>籍贯:<? if (!isset($this->magic_vars['var']['user']['area'])) $this->magic_vars['var']['user']['area'] = '';$_tmp = $this->magic_vars['var']['user']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></p>
				 <p>
				<div class="info_a">
				 <div class="credit_pic_card_<? if (!isset($this->magic_vars['var']['user']['real_status'])) $this->magic_vars['var']['user']['real_status'] = '';$_tmp = $this->magic_vars['var']['user']['real_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['real_status'])) $this->magic_vars['var']['user']['real_status']=''; ;if (  $this->magic_vars['var']['user']['real_status']==1): ?>实名已认证<? else: ?>未实名认证<? endif; ?>"></div>
					<div class="credit_pic_phone_<? if (!isset($this->magic_vars['var']['user']['phone_status'])) $this->magic_vars['var']['user']['phone_status']=''; ;if (  $this->magic_vars['var']['user']['phone_status']>=1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user']['phone_status'])) $this->magic_vars['var']['user']['phone_status']=''; ;if (  $this->magic_vars['var']['user']['phone_status']==1): ?>手机已认证<? else: ?>手机未认证<? endif; ?>"></div>
                    <div class="credit_pic_email_<? if (!isset($this->magic_vars['var']['user']['email_status'])) $this->magic_vars['var']['user']['email_status'] = '';$_tmp = $this->magic_vars['var']['user']['email_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['email_status'])) $this->magic_vars['var']['user']['email_status']=''; ;if (  $this->magic_vars['var']['user']['email_status']==1): ?>邮箱已认证<? else: ?>邮箱未认证<? endif; ?>"></div>
					<div
					class="credit_pic_video_<? if (!isset($this->magic_vars['var']['user']['video_status'])) $this->magic_vars['var']['user']['video_status'] = '';$_tmp = $this->magic_vars['var']['user']['video_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['video_status'])) $this->magic_vars['var']['user']['video_status']=''; ;if (  $this->magic_vars['var']['user']['video_status']==1): ?>视频已认证<? else: ?>视频未认证<? endif; ?>"></div>
					<div style="magin-left:5px;" class="credit_pic_vip_<? if (!isset($this->magic_vars['var']['user_cache']['vip_status'])) $this->magic_vars['var']['user_cache']['vip_status']=''; ;if (  $this->magic_vars['var']['user_cache']['vip_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user_cache']['vip_status'])) $this->magic_vars['var']['user_cache']['vip_status']=''; ;if (  $this->magic_vars['var']['user_cache']['vip_status']==1): ?>VIP<? else: ?>普通会员<? endif; ?>"></div>
					<div class="credit_pic_scene_<? if (!isset($this->magic_vars['var']['user']['scene_status'])) $this->magic_vars['var']['user']['scene_status']=''; ;if (  $this->magic_vars['var']['user']['scene_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user']['scene_status'])) $this->magic_vars['var']['user']['scene_status']=''; ;if (  $this->magic_vars['var']['user']['scene_status']==1): ?>已通过现场认证<? else: ?>未通过现场认证<? endif; ?>"></div> 
			</div>
			</p>
 
				<p><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>">站内信</a></p>
				<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']='';if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_id']!="" &&  $this->magic_vars['_G']['user_result']['real_status']==1): ?>
				<p><a href="/index.php?user&q=code/user/addfriend&username=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>" title="加为好友" class="thickbox">加为好友</a></p>
				<p><a href="javascript:void(0)" onclick='tipsWindown("加为好友","url:get?/index.php?user&q=code/user/addfriend&username=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>",400,230,"true","","true","text");'>加为好友</a></p>
				<? else: ?>
				<p><a href="javascript:alert('请先登陆及实名认证才能加好友')" title="加为好友">加为好友</a></p>
				<? endif; ?>
				<p><a href="/index.php?user&amp;q=code/user/blackfriend&amp;username=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>" title="加为黑名单" style="color:#666666">设为黑名单</a></p>
				<p><a href="/zaixian/index.html">举报此人</a></p>
			</div> -->

			<!-- <div class="box-info-detail"> -->
			
                  	<div class="pro_info">
                        <table width="100%" class="tb_pro tb_pro02 m_b_10">
                          <tr>
                            <th class="f_16 f_bold" style="width:100px;">筹款金额：</th>
                            <td class="f_16 f_bold">￥<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?>元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年利率：<? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期限：<? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
								<? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>天
							<? else: ?>
								<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>个月
							<? endif; ?></td>
                          </tr>
                          <tr>
                            <th class="f_16 f_bold" style="width:100px;">筹款用途：</th>
                            <td class="f_16 f_bold"><? if (!isset($this->magic_vars['var']['borrow']['use_name'])) $this->magic_vars['var']['borrow']['use_name'] = ''; echo $this->magic_vars['var']['borrow']['use_name']; ?></td>
                          </tr>
                          <tr>
                            <th class="f_16 f_bold" style="width:100px;">赎回方式：</th>
                            <td class="f_16 f_bold"> <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']='';if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1 && $this->magic_vars['var']['borrow']['is_lz']==0): ?> 
							到期全额还款
							<? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_mb']==1): ?>
							系统自动还款
							<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
							到期自动回购
							<? else: ?>
							<? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
							<? endif; ?></td>
                          </tr>
                        </table>
                        <div class="clearfix shuliang m_b_10">
                        <p class="fl">已有<em class="num"><? if (!isset($this->magic_vars['var']['borrow']['tender_times'])) $this->magic_vars['var']['borrow']['tender_times'] = ''; echo $this->magic_vars['var']['borrow']['tender_times']; ?>人</em>参与投资</p>
                        	
                          <p class="fr price">
                          	已经完成：<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> % <br> <em class="pri">剩余可投金额：￥<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?></em>
                          </p>
                         
                           
                          	
                    		
                   
                        </div>
                        <!--  -->
                        <div class="jiage m_b_20">
                     	
                        <p class="now">最低投资起点：￥<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = ''; echo $this->magic_vars['var']['borrow']['lowest_account']; ?>元 </p>
                  		<!-- <p class="m_b_20"><a class="btn_blueBg02" href="#">
                                  <span class="fl"></span>
                                  <span class="fr"></span>
                                  <label class="txt">了解平台原理</label>
                              </a>
                           </p> -->
                  <? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status'] != 3): ?>
					
					<!-- <p>发标时间：<? if (!isset($this->magic_vars['var']['borrow']['addtime'])) $this->magic_vars['var']['borrow']['addtime'] = '';$_tmp = $this->magic_vars['var']['borrow']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></p> -->
                        <? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale']=''; ;if (  $this->magic_vars['var']['borrow']['scale']!=100): ?>
                         
						 <p class="f_12">剩余投资时间：</p>
                         <p class="date"><span id="endtime"><? if (!isset($this->magic_vars['var']['borrow']['lave_time'])) $this->magic_vars['var']['borrow']['lave_time'] = ''; echo $this->magic_vars['var']['borrow']['lave_time']; ?></span> </p>
                        <? endif; ?>
					<? else: ?>
					
					<p>审核时间：<? if (!isset($this->magic_vars['var']['borrow']['verify_time'])) $this->magic_vars['var']['borrow']['verify_time'] = '';$_tmp = $this->magic_vars['var']['borrow']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></p>
					<p >剩余投资时间：已结束 </p>
					<? endif; ?>
                          
                   <br>      
                  <p>投资1万元,期限<? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
                <? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>天
                <? else: ?>
                <? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>个月
                <? endif; ?>,预计可获￥<? if (!isset($this->magic_vars['var']['borrow']['interest'])) $this->magic_vars['var']['borrow']['interest'] = '';$_tmp = $this->magic_vars['var']['borrow']['interest']*100;$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?>元利息回报</p>
                
                
           <p class="j_btn">     
           <? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']='';if (!isset($this->magic_vars['var']['borrow']['vouch_account'])) $this->magic_vars['var']['borrow']['vouch_account']='';if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1 &&  $this->magic_vars['var']['borrow']['vouch_account']!= $this->magic_vars['var']['borrow']['account']): ?> 
					<a id="invest_dialog"  class="btnnew btn_login f_18" href="#">确认投资</a>
			<? else: ?>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?>
					<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>
					<a class="btnnew btn_login f_18" href="#">已还款</a>
					<? else: ?>
					<a class="btnnew btn_login f_18" href="#">还款中</a>
					<? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==5): ?>
				<a class="btnnew btn_login f_18" href="#">用户取消</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==0): ?>
				<a class="btnnew btn_login f_18" href="#">等待初审</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==4): ?>
				<a class="btnnew btn_login f_18" href="#">复审失败</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==2): ?>
				<a class="btnnew btn_login f_18" href="#">等待复审</a>
				<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']=''; ;elseif (  $this->magic_vars['var']['borrow']['account']> $this->magic_vars['var']['borrow']['account_yes']): ?>
				
				<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']>0): ?>
					<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']): ?>
					<a id="invest_dialog" class="btnnew btn_login f_18" href="#">马上认购</a>
					<? else: ?>
					<a id="invest_dialog" class="btnnew btn_login f_18" href="#">确认投资</a>
					<? endif; ?>
				 
				<? else: ?>
					<a  class="btnnew btn_login f_18" href="/index.action?user&q=going/login">请先登录</a>
				<? endif; ?> 
				
				<? else: ?>
				<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']): ?>
					<a class="btnnew btn_login f_18" href="#">已认购完</a>
				<? else: ?>
					<a class="btnnew btn_login f_18" href="#">等待复审</a>
				<? endif; ?>
				
				<? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
					<a class="btnnew btn_login f_18" href="#">担保完成</a>
				<? endif; ?>
			<? endif; ?>
			</p>
        	<!--  <p class="j_btn"><a href="我要投资－在线充值.html" class="btnnew btn_login f_18">确认投资</a></p> -->
           </div>
           
           
          <!--             
           <div class="clearfix fuxuan">
                        	 <p><label><input name="" type="checkbox" value=""> 我已经做过相关自己投资风险测试评估问卷  还没做过，现在做</label></p> 
                        	<p><label><input name="" type="checkbox" checked="checked"> 我已经阅读并同意网站的相关投资声明条款</label></p>
                        	<p><label><input name="" type="checkbox" checked="checked"> 我已经阅读此项目的产品风险揭示书、信托计划说明书、风险申明书</label></p>
           </div> 
         -->                               
                        
        </div>                             
               
				<!-- <h2><span style="float:left;margin-right:5px;"><? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></span> 
						<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?><a href="/question/a144.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" border="0" alt="点击查看详情" /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;if (  $this->magic_vars['var']['borrow']['is_mb']==1): ?><a href="/question/a145.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/miao.jpg"  border="0"  alt="点击查看详情" /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['is_fast'])) $this->magic_vars['var']['borrow']['is_fast']=''; ;if (  $this->magic_vars['var']['borrow']['is_fast']==1): ?><a href="/question/a146.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/fast.gif" border="0"  alt="点击查看详情"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['danbao'])) $this->magic_vars['var']['borrow']['danbao']=''; ;if (  $this->magic_vars['var']['borrow']['danbao']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/dan.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['is_kuai'])) $this->magic_vars['var']['borrow']['is_kuai']=''; ;if (  $this->magic_vars['var']['borrow']['is_kuai']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/kuai.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lz.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['is_jin'])) $this->magic_vars['var']['borrow']['is_jin']=''; ;if (  $this->magic_vars['var']['borrow']['is_jin']==1): ?><a href="/question/a184.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jin.gif"   border="0"  alt="点击查看详情" /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['biao_type'])) $this->magic_vars['var']['borrow']['biao_type']=''; ;if (  $this->magic_vars['var']['borrow']['biao_type']=="xin"): ?>
						<a href="/question/a143.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/xin.jpg"   border="0"  alt="点击查看详情" /></a>&nbsp;<? endif; ?>
                        <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?><a href="#" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/day.jpg"   border="0"  alt="点击查看详情" /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['flag'])) $this->magic_vars['var']['borrow']['flag']=''; ;if (  $this->magic_vars['var']['borrow']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif" align="absmiddle"  border="0"/>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']='';if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;if (  $this->magic_vars['var']['borrow']['award']==1 ||  $this->magic_vars['var']['borrow']['award']==2): ?><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif"  border="0" />&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['pwd'])) $this->magic_vars['var']['borrow']['pwd']=''; ;if (  $this->magic_vars['var']['borrow']['pwd'] != ""): ?><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lock.gif"  border="0" />&nbsp;<? endif; ?>
                </h2>
				<ul class="clearfix">
					<li>借款金额：￥<strong><? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?>元</strong></li>
					 
					<li>年利率：<strong><? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</strong> (月利率：<? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = '';$_tmp = $this->magic_vars['var']['borrow']['apr']/12;$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?>%)</li>
					<li>还款方式： <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']='';if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1 && $this->magic_vars['var']['borrow']['is_lz']==0): ?> 
							到期全额还款
							<? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_mb']==1): ?>
							系统自动还款
							<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
							到期自动回购
							<? else: ?>
							<? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
							<? endif; ?>
					</li>
					<li>投标奖励：
						<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;if (  $this->magic_vars['var']['borrow']['award']==0): ?>
							无
						<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==1): ?>
							金额(<? if (!isset($this->magic_vars['var']['borrow']['part_account'])) $this->magic_vars['var']['borrow']['part_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['part_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?>元)
						<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==2): ?>
							<? if (!isset($this->magic_vars['var']['borrow']['funds'])) $this->magic_vars['var']['borrow']['funds'] = ''; echo $this->magic_vars['var']['borrow']['funds']; ?>%
						<? endif; ?>
					</li>
					<li>
					<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
					流转周期：
					<? else: ?>
					借款期限：
					<? endif; ?>
							<? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
								<? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>天
							<? else: ?>
								<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>个月
							<? endif; ?>
					</li>	
					
				</ul>
				<div class="box-info-detail-ac" style="text-align:center;">
					<a class="btn-action" data-toggle="modal" href="#myModal">立即投标</a>
					<a id="invest_dialog" class="btn-action" href="#">立即投标</a>
			<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']='';if (!isset($this->magic_vars['var']['borrow']['vouch_account'])) $this->magic_vars['var']['borrow']['vouch_account']='';if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1 &&  $this->magic_vars['var']['borrow']['vouch_account']!= $this->magic_vars['var']['borrow']['account']): ?> 
					<a id="invest_dialog" class="btn-action" href="#">立即投标</a>
			<? else: ?>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?>
					<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>
					<a class="btn-action" href="#">已还款</a>
					<? else: ?>
					<a class="btn-action" href="#">还款中</a>
					<? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==5): ?>
				<a class="btn-action" href="#">用户取消</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==0): ?>
				<a class="btn-action" href="#">等待初审</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==4): ?>
				<a class="btn-action" href="#">复审失败</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==2): ?>
				<a class="btn-action" href="#">等待复审</a>
				<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']=''; ;elseif (  $this->magic_vars['var']['borrow']['account']> $this->magic_vars['var']['borrow']['account_yes']): ?>
				
				<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']>0): ?>
					<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']): ?>
					<a id="invest_dialog" class="btn-action" href="#">马上认购</a>
					<? else: ?>
					<a id="invest_dialog" class="btn-action" href="#">立即投标</a>
					<? endif; ?>
				 
				<? else: ?>
					<a  class="btn-action" href="/index.action?user&q=going/login">请先登录</a>
				<? endif; ?> 
				
				<? else: ?>
				<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']): ?>
					<a class="btn-action" href="#">已认购完</a>
				<? else: ?>
					<a class="btn-action" href="#">等待复审</a>
				<? endif; ?>
				
				<? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
					<a class="btn-action" href="#">担保完成</a>
				<? endif; ?>
			<? endif; ?>
					<p>投标100元,年利率<? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %，期限<? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
                <? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>天
                <? else: ?>
                <? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>个月
                <? endif; ?>,预计利息收益￥<? if (!isset($this->magic_vars['var']['borrow']['interest'])) $this->magic_vars['var']['borrow']['interest'] = '';$_tmp = $this->magic_vars['var']['borrow']['interest'];$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?>元</p>
				</div>
				<ul class="clearfix">
					<li><span class="floatl">已经完成：</span>
					<div class="rate_bg floatl" style="margin-top:10px;">
							<div class="rate_tiao" style="width:<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div>
                    <div class="floatl"><? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = ''; echo $this->magic_vars['var']['borrow']['scale']; ?>%</div></li>
					<li><? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?>
                          <? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;if (  $this->magic_vars['var']['borrow']['is_mb']==1): ?>
                          <a href="/protocol_miao/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>借款协议书</b></font></a>
                          <? endif; ?>
                          <? if (!isset($this->magic_vars['var']['borrow']['is_fast'])) $this->magic_vars['var']['borrow']['is_fast']=''; ;if (  $this->magic_vars['var']['borrow']['is_fast']==1): ?>
                          <a href="/protocol_fast/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>借款协议书</b></font></a>
                          <? endif; ?>
                          <? if (!isset($this->magic_vars['var']['borrow']['is_jin'])) $this->magic_vars['var']['borrow']['is_jin']=''; ;if (  $this->magic_vars['var']['borrow']['is_jin']==1): ?>
                          <a href="/protocol_jin/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>借款协议书</b></font></a>
                          <? endif; ?>
                          <? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
                          <a href="/protocol_danbao/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>借款协议书</b></font></a>
                          <? endif; ?>
                          <? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']='';if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']='';if (!isset($this->magic_vars['var']['borrow']['is_fast'])) $this->magic_vars['var']['borrow']['is_fast']='';if (!isset($this->magic_vars['var']['borrow']['is_jin'])) $this->magic_vars['var']['borrow']['is_jin']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch'] != 1 &&  $this->magic_vars['var']['borrow']['is_mb']!=1 &&  $this->magic_vars['var']['borrow']['is_fast']!=1 &&  $this->magic_vars['var']['borrow']['is_jin']!=1): ?>
                          <a href="/protocol_xin/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>借款协议书</b></font></a>
                          <? endif; ?>
                      <? else: ?>
					<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
					还剩：<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']/100; ?>份 (每份100元)
					<? else: ?>
					还差：￥<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?>
					<? endif; ?>
					<? endif; ?></li>
					<li>最小投标额：￥<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = ''; echo $this->magic_vars['var']['borrow']['lowest_account']; ?>元</li>
					<li>最大投标额：<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account']=''; ;if (  $this->magic_vars['var']['borrow']['most_account']==0): ?>不限<? else: ?>￥<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = ''; echo $this->magic_vars['var']['borrow']['most_account']; ?>元<? endif; ?></li>
					<li>总投标数：<? if (!isset($this->magic_vars['var']['borrow']['tender_times'])) $this->magic_vars['var']['borrow']['tender_times'] = ''; echo $this->magic_vars['var']['borrow']['tender_times']; ?>次</li>
				</ul> -->
			<!-- </div> end box-info-detail-->

		</div>
		<!-- <div class="box box-kefu">
			<div class="box-title">本标系统信息</div>
			
			<div class="box-con">
			<p>借款编号: #<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?></p>
			 <p>交易类型：在线交易 </p>
					<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status'] != 3): ?>
					
					<p>发标时间：<? if (!isset($this->magic_vars['var']['borrow']['addtime'])) $this->magic_vars['var']['borrow']['addtime'] = '';$_tmp = $this->magic_vars['var']['borrow']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></p>
                        <? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale']='';if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['scale']!=100 &&  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
                         
							<p >剩余时间：<span id="endtime"><? if (!isset($this->magic_vars['var']['borrow']['lave_time'])) $this->magic_vars['var']['borrow']['lave_time'] = ''; echo $this->magic_vars['var']['borrow']['lave_time']; ?></span> </p>
                        <? else: ?>
                        	<p >剩余时间：<span id="endtime"><? if (!isset($this->magic_vars['var']['borrow']['lave_time'])) $this->magic_vars['var']['borrow']['lave_time'] = ''; echo $this->magic_vars['var']['borrow']['lave_time']; ?></span> </p>
                        <? endif; ?>
					<? else: ?>
					
					<p>审核时间：<? if (!isset($this->magic_vars['var']['borrow']['verify_time'])) $this->magic_vars['var']['borrow']['verify_time'] = '';$_tmp = $this->magic_vars['var']['borrow']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></p>
					<p >剩余时间：已结束 </p>
					<? endif; ?>
			</div>
		</div> -->
		<div class="box box-kefu">
			<div class="box-title">你的理财顾问</div>
			<div class="box-con">
				<? $data = array('var'=>'kfUser');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['kfUser'] = borrowClass::Getkf($data);if(!is_array($this->magic_vars['kfUser'])){ $this->magic_vars['kfUser']=array();}?>
				<img class="user-photo" src="<? if (!isset($this->magic_vars['kfUser']['kefu_userid'])) $this->magic_vars['kfUser']['kefu_userid'] = '';$_tmp = $this->magic_vars['kfUser']['kefu_userid'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" />
				<? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username']=''; ;if (  $this->magic_vars['kfUser']['username'] != ""): ?>
				<p><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?></p>
				<p>姓名：<? if (!isset($this->magic_vars['kfUser']['realname'])) $this->magic_vars['kfUser']['realname'] = ''; echo $this->magic_vars['kfUser']['realname']; ?></p>
				<p>电话：<? if (!isset($this->magic_vars['kfUser']['phone'])) $this->magic_vars['kfUser']['phone'] = ''; echo $this->magic_vars['kfUser']['phone']; ?></p>
				<p>在线联系：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['kfUser']['qq'])) $this->magic_vars['kfUser']['qq'] = ''; echo $this->magic_vars['kfUser']['qq']; ?>&site=qq&menu=yes">
				<img border="0" src="http://wpa.qq.com/pa?p=2:<? if (!isset($this->magic_vars['kfUser']['qq'])) $this->magic_vars['kfUser']['qq'] = ''; echo $this->magic_vars['kfUser']['qq']; ?>:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a></p>
				
				<p>发送消息：<a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?>">站内信</a></p>
				<? endif; ?>
				<!-- <p>总机：<? if (!isset($this->magic_vars['_G']['system']['con_tel'])) $this->magic_vars['_G']['system']['con_tel'] = ''; echo $this->magic_vars['_G']['system']['con_tel']; ?></p> -->
				<p><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username']=''; ;if (  $this->magic_vars['kfUser']['username']== ""): ?>
                    您好，您还没有申请您的理财顾问，赶快来<a href="/vip/index.html" style="color:red">申请</a>吧！
                    <? else: ?>
                    您好，有任何疑问可随时跟您的理财顾问<font color="red"><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?></font>联系！
                    <? endif; ?></p>
                <? unset($_magic_vars);unset($data); ?>
			</div>
		</div>
	</div>
	</div>
	</div>

	<!--资料审核-->
	<ul class="list-tab clearfix">
		<li class="active"><a href="#">资料审核</a></li>
	</ul>
	<div id="myTabContent1" class="tab-content">
	<div  id="zlsh">

		<table border="0" cellspacing="0" width="100%"
			class="table table-striped  table-condensed">
			<tr>
				<!-- <td><strong>资料类型</strong></td> -->
				<!-- <td ><strong>积分</strong></td> -->
				<td><strong>审核项目</strong></td>
				<td><strong>状态</strong></td>
				<td><strong>通过时间</strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'arr_var','limit'=>'all','status'=>'1','user_id'=>$this->magic_vars['var']['user']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/attestation/attestation.class.php');$this->magic_vars['magic_result'] = attestationClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['arr_var']):
?> <? if (!isset($this->magic_vars['arr_var']['jifen'])) $this->magic_vars['arr_var']['jifen']=''; ;if ( $this->magic_vars['arr_var']['jifen']>0): ?>
			<tr>
				<!-- <td><? if (!isset($this->magic_vars['arr_var']['type_name'])) $this->magic_vars['arr_var']['type_name'] = ''; echo $this->magic_vars['arr_var']['type_name']; ?></td> -->
				<!--   <td  ><? if (!isset($this->magic_vars['arr_var']['jifen'])) $this->magic_vars['arr_var']['jifen'] = ''; echo $this->magic_vars['arr_var']['jifen']; ?> 分</td> -->
				<td><? if (!isset($this->magic_vars['arr_var']['verify_remark'])) $this->magic_vars['arr_var']['verify_remark'] = '';$_tmp = $this->magic_vars['arr_var']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
				<td>通过</td>
				<td><? if (!isset($this->magic_vars['arr_var']['verify_time'])) $this->magic_vars['arr_var']['verify_time'] = '';$_tmp = $this->magic_vars['arr_var']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<!-- <td><? if (!isset($this->magic_vars['arr_var']['verify_remark'])) $this->magic_vars['arr_var']['verify_remark'] = '';$_tmp = $this->magic_vars['arr_var']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td> -->
			</tr>
			<? endif; ?> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
	</div>

<br>


	<ul  id="tab" class="list-tab clearfix">
		<li class="active"><a href="#jkxq" data-toggle="tab">借款详情</a></li>
		<li><a href="#zhxq1111" data-toggle="tab">账户详情</a></li>
		<li><a href="#hkxy" data-toggle="tab">还款信用</a></li>
		<li><a href="#grxx" data-toggle="tab">个人资料</a></li>
		<li><a href="#tbjl" data-toggle="tab">投标奖励</a></li>
		<li><a href="#hkjl" data-toggle="tab">待还款记录</a></li>
		
	</ul>
<div id="myTabContent" class="tab-content">
	<!--借款详情-->
	<div class="list-tab-con tab-pane fade in active" id="jkxq">

			<div><? if (!isset($this->magic_vars['var']['borrow']['content'])) $this->magic_vars['var']['borrow']['content'] = ''; echo $this->magic_vars['var']['borrow']['content']; ?></div>

	</div>
	
	
	
	<!--账户详情-->
	<div class="list-tab-con tab-pane fade" id="zhxq">
		<ul class="clearfix">
		<? $data = array('user_id'=>$this->magic_vars['var']['user']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
			<li>账户总额： <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['var']['account']['total'])) $this->magic_vars['var']['account']['total'] = ''; echo $this->magic_vars['var']['account']['total']; ?><? endif; ?></li>
			<li>待还总额：<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?>  </li>
			<li>负债情况：<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?> <? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num']='';if (!isset($this->magic_vars['acc']['success_account'])) $this->magic_vars['acc']['success_account']=''; ;if (  $this->magic_vars['acc']['borrow_num']< $this->magic_vars['acc']['success_account']): ?>借出大于借入<? else: ?>借出小于借入<? endif; ?><? endif; ?></li>
			<li>借款总额：<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num'] = '';$_tmp = $this->magic_vars['acc']['borrow_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>已还总额： <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['borrow_num1'])) $this->magic_vars['acc']['borrow_num1'] = '';$_tmp = $this->magic_vars['acc']['borrow_num1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>网站垫付未还：<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['borrow_num2'])) $this->magic_vars['acc']['borrow_num2'] = '';$_tmp = $this->magic_vars['acc']['borrow_num2'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>借出总额：<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['success_account'])) $this->magic_vars['acc']['success_account'] = '';$_tmp = $this->magic_vars['acc']['success_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>已收总额：<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['collection_yes'])) $this->magic_vars['acc']['collection_yes'] = '';$_tmp = $this->magic_vars['acc']['collection_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>待收总额：<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['collection_wait'])) $this->magic_vars['acc']['collection_wait'] = '';$_tmp = $this->magic_vars['acc']['collection_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>借款信用额度： <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = ''; echo $this->magic_vars['acc']['credit']; ?><? endif; ?></li>
			<li>可用信用额度： <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = ''; echo $this->magic_vars['acc']['credit_use']; ?><? endif; ?></li>
			<li></li>
			<li>借款担保总额：  <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = ''; echo $this->magic_vars['acc']['borrow_vouch']; ?><? endif; ?></li>
			<li>可用借款担保额度： <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = ''; echo $this->magic_vars['acc']['borrow_vouch_use']; ?><? endif; ?></li>
			<li></li>
			<li>投资担保总额：<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['tender_vouch'])) $this->magic_vars['acc']['tender_vouch'] = ''; echo $this->magic_vars['acc']['tender_vouch']; ?><? endif; ?></li>
			<li>可用投资担保额度： <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>未公开<? else: ?>￥<? if (!isset($this->magic_vars['acc']['tender_vouch_use'])) $this->magic_vars['acc']['tender_vouch_use'] = ''; echo $this->magic_vars['acc']['tender_vouch_use']; ?><? endif; ?></li>
			<li></li>
			<? unset($_magic_vars);unset($data); ?>
		</ul>
		<p class="text-red">注：公开的账户资金详情在标的借款全部还清后将自动不再公开显示.</p>
	</div>
	
	<!--还款信用-->
	<div class="list-tab-con tab-pane fade" id="hkxy">
		<ul class="clearfix">
			<li>借款 <? if (!isset($this->magic_vars['var']['borrow_all']['success'])) $this->magic_vars['var']['borrow_all']['success'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 次成功</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['false'])) $this->magic_vars['var']['borrow_all']['false'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['false'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 次流标</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['wait'])) $this->magic_vars['var']['borrow_all']['wait'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔待还款</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_success'])) $this->magic_vars['var']['borrow_all']['pay_success'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔已成功还款 </li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_advance'])) $this->magic_vars['var']['borrow_all']['pay_advance'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_advance'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔提前还款</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expiredyes'])) $this->magic_vars['var']['borrow_all']['pay_expiredyes'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expiredyes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔迟还款</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expired30in'])) $this->magic_vars['var']['borrow_all']['pay_expired30in'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expired30in'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔30天之内的逾期还款</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expired30'])) $this->magic_vars['var']['borrow_all']['pay_expired30'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expired30'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔超过30天的逾期还款</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expiredno'])) $this->magic_vars['var']['borrow_all']['pay_expiredno'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expiredno'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔逾期未还款</li>
		</ul>
	</div>
	
	
	<!--个人资料-->
	<div class="list-tab-con tab-pane fade" id="grxx">
		<ul class="clearfix">
			<li>性 别：<? if (!isset($this->magic_vars['var']['user']['sex'])) $this->magic_vars['var']['user']['sex']=''; ;if (  $this->magic_vars['var']['user']['sex']==1): ?>男<? else: ?>女<? endif; ?></li>
			<li>年 龄：<? if (!isset($this->magic_vars['var']['user']['birthday'])) $this->magic_vars['var']['user']['birthday'] = '';$_tmp = $this->magic_vars['var']['user']['birthday'];$_tmp = $this->magic_modifier("age_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>岁</li>
			<li>婚姻状况：<? if (!isset($this->magic_vars['var']['userinfo']['marry'])) $this->magic_vars['var']['userinfo']['marry'] = '';$_tmp = $this->magic_vars['var']['userinfo']['marry'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
			<li>文化程度：<? if (!isset($this->magic_vars['var']['userinfo']['education'])) $this->magic_vars['var']['userinfo']['education'] = '';$_tmp = $this->magic_vars['var']['userinfo']['education'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
			<li>每月收入： <? if (!isset($this->magic_vars['var']['userinfo']['income'])) $this->magic_vars['var']['userinfo']['income'] = '';$_tmp = $this->magic_vars['var']['userinfo']['income'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>元</li>
			<li>社 保：<? if (!isset($this->magic_vars['var']['userinfo']['shebao'])) $this->magic_vars['var']['userinfo']['shebao'] = '';$_tmp = $this->magic_vars['var']['userinfo']['shebao'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>  </li>
			<li>住房条件：<? if (!isset($this->magic_vars['var']['userinfo']['housing'])) $this->magic_vars['var']['userinfo']['housing'] = '';$_tmp = $this->magic_vars['var']['userinfo']['housing'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
			<li>是否购车：<? if (!isset($this->magic_vars['var']['userinfo']['car'])) $this->magic_vars['var']['userinfo']['car'] = '';$_tmp = $this->magic_vars['var']['userinfo']['car'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
			<li>是否逾期：<? if (!isset($this->magic_vars['var']['userinfo']['late'])) $this->magic_vars['var']['userinfo']['late'] = '';$_tmp = $this->magic_vars['var']['userinfo']['late'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
		</ul>
	</div>

	<!--投标奖励-->
	<div class="list-tab-con tab-pane fade" id="tbjl">
		<ul class="clearfix">
		<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;if (  $this->magic_vars['var']['borrow']['award']==0): ?>
			<li><font color="#FF0000" size="3">没有奖励</font></li>
		<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==1): ?>
			<li>奖励方式：按金额奖励</li>
			<li>奖励金额：<? if (!isset($this->magic_vars['var']['borrow']['part_account'])) $this->magic_vars['var']['borrow']['part_account'] = ''; echo $this->magic_vars['var']['borrow']['part_account']; ?>元</li>
			<li>奖励条件：<? if (!isset($this->magic_vars['var']['borrow']['is_false'])) $this->magic_vars['var']['borrow']['is_false']=''; ;if (  $this->magic_vars['var']['borrow']['is_false']==1): ?>投标失败也奖励<? else: ?>投标且成功复审通过后才有奖励<? endif; ?></li>
		<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==2): ?>
			<li>奖励方式：按比例奖励</li>
			<li>奖励比例：<? if (!isset($this->magic_vars['var']['borrow']['funds'])) $this->magic_vars['var']['borrow']['funds'] = ''; echo $this->magic_vars['var']['borrow']['funds']; ?>%</li>
			<li>奖励条件：<? if (!isset($this->magic_vars['var']['borrow']['is_false'])) $this->magic_vars['var']['borrow']['is_false']=''; ;if (  $this->magic_vars['var']['borrow']['is_false']==1): ?>投标失败也奖励<? else: ?>投标且成功复审通过后才有奖励<? endif; ?></li>
		<? endif; ?>
		</ul>	
	</div>
	
	
	
	<!--待还款记录-->
	<div class="list-tab-con tab-pane fade" id="hkjl">
	<div class="alert">
	  <span>待还款记录(只显示最近待还款的10条记录) >> <a href="/u/<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = ''; echo $this->magic_vars['var']['user']['user_id']; ?>/borrowlist" >更多的还款明细账单</a></span>
	</div>
	
	<table  border="0"  cellspacing="0"  width="100%"  class="table table-striped  table-condensed">
			<tr  >
			  <td ><strong>借款标题</strong> </td>
			  <td ><strong>期数</strong></td>
			  <td ><strong>还款本息</strong></td>
			  <td ><strong>实际到期日期</strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetRepaymentList';$data = array('status'=>'0,2','limit'=>'10','var'=>'vat','order'=>'repayment_time','user_id'=>$this->magic_vars['var']['user']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRepaymentList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['vat']):
?>
			<tr  >
			  <td ><a href="/invest/a<? if (!isset($this->magic_vars['vat']['borrow_id'])) $this->magic_vars['vat']['borrow_id'] = ''; echo $this->magic_vars['vat']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['vat']['borrow_name'])) $this->magic_vars['vat']['borrow_name'] = ''; echo $this->magic_vars['vat']['borrow_name']; ?></a></td> 
			  <td ><? if (!isset($this->magic_vars['vat']['order'])) $this->magic_vars['vat']['order'] = ''; echo $this->magic_vars['vat']['order']+1; ?>/<? if (!isset($this->magic_vars['vat']['time_limit'])) $this->magic_vars['vat']['time_limit'] = ''; echo $this->magic_vars['vat']['time_limit']; ?></td>
			  <td >￥<? if (!isset($this->magic_vars['vat']['repayment_account'])) $this->magic_vars['vat']['repayment_account'] = ''; echo $this->magic_vars['vat']['repayment_account']; ?></td>
			  <td ><? if (!isset($this->magic_vars['vat']['repayment_time'])) $this->magic_vars['vat']['repayment_time'] = '';$_tmp = $this->magic_vars['vat']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
	</div> <!-- id="myTabContent" -->
	<br>
	<!--投标记录-->
	<ul class="list-tab clearfix">
		<li class="active"><a href="#tbjl" data-toggle="tab">投标记录</a></li>
	</ul>
	<div id="myTabContent2" class="tab-content">
	<div class="list-tab-con tab-pane fade in active" id="tbinfo">
	
		<div class="loan-credit-info">
            <span style="margin-right:60px;">目标投标总额：￥<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?>元</span>
            <span style="margin-right:60px;">最低投资起点：￥<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = ''; echo $this->magic_vars['var']['borrow']['lowest_account']; ?>元 </span>
             <span style="margin-right:60px;">剩余可投金额：￥<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?>元</span>
            <? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status'] == 5): ?><? if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']='';if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']=''; ;elseif (  $this->magic_vars['var']['borrow']['account_yes'] >=  $this->magic_vars['var']['borrow']['account']): ?><img src="/themes/soonmes/img/tender_end.png"><? else: ?><a href="?detail=true"><img src="/themes/soonmes/img/tender-start.png" style="margin-top:-10px;"></a><? endif; ?>
            
        </div>
     </div>
     
	
		<table  border="0"  cellspacing="0"  width="100%" class="table table-striped  table-condensed">
			<tr align="center">
			 <!--  <td ><strong>序号</strong> </td> -->
			  <td ><strong>投资人</strong> </td>
			  
			  <td ><strong>投标金额</strong></td>
			  <td ><strong>有效金额</strong></td>
			  <!-- <td ><strong>当前年利率</strong></td> -->
			  
			  <td ><strong>投标时间</strong></td>
			  <td ><strong>状态 </strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetTenderList';$data = array('limit'=>'all','var'=>'vat','borrow_id'=>$this->magic_vars['var']['borrow']['id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['vat']):
?>
			<tr <? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username']='';if (!isset($this->magic_vars['vat']['username'])) $this->magic_vars['vat']['username']=''; ;if (  $this->magic_vars['_G']['user_result']['username']== $this->magic_vars['vat']['username']): ?> bgcolor ="#ECF0F0"  <? endif; ?>>
			   <!-- <td align="center" ><? if (!isset($this->magic_vars['vat']['i'])) $this->magic_vars['vat']['i'] = ''; echo $this->magic_vars['vat']['i']; ?></td> -->
               <td align="center" ><a href="/u/<? if (!isset($this->magic_vars['vat']['user_id'])) $this->magic_vars['vat']['user_id'] = ''; echo $this->magic_vars['vat']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['vat']['username'])) $this->magic_vars['vat']['username'] = ''; echo $this->magic_vars['vat']['username']; ?></a></td>
                <td align="center" ><? if (!isset($this->magic_vars['vat']['money'])) $this->magic_vars['vat']['money'] = ''; echo $this->magic_vars['vat']['money']; ?>元</td>
                <td align="center" ><? if (!isset($this->magic_vars['vat']['tender_account'])) $this->magic_vars['vat']['tender_account'] = '';$_tmp = $this->magic_vars['vat']['tender_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元</td>
			 <!--  <td align="center" ><? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</td> -->
			  <td align="center"><? if (!isset($this->magic_vars['vat']['addtime'])) $this->magic_vars['vat']['addtime'] = '';$_tmp = $this->magic_vars['vat']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
			  <td align="center"><? if (!isset($this->magic_vars['vat']['tender_account'])) $this->magic_vars['vat']['tender_account']='';if (!isset($this->magic_vars['vat']['money'])) $this->magic_vars['vat']['money']=''; ;if (  $this->magic_vars['vat']['tender_account']== $this->magic_vars['vat']['money']): ?>全部通过<? else: ?>部分通过<? endif; ?></td>
			</tr>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
		
	</div>
	
	
	<div class="box-detail clearfix" style="margin-top:10px;width:1000px">
	<!--评论开始-->
		<script src="/index.php?comment&type=list&code=<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1&epage=10"></script>
			<div class="content_title ">
				<span class="floatr">总评论数：<font color="#FF0000"><script>document.write(result['total'])</script></font> 个 <a href="/index.php?comment&type=lists&code=borrow&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1" target="_blank">查看所有评论</a></span><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pinglun.gif" align="absmiddle"/>&nbsp; 评论
			</div>
			<div class="article_content " align="left">
				<ul class="pinglun_co" >
				
				<script>
					var list = result['list'];
					var display = "";
					for (i=0;i<list.length;i++){
						display += '<li><div class="pinglun_co_left"><div class="pinglun_co_pic"><img src="'+list[i]['head']+'" width="73" height="73" /></div><a href="/u/'+list[i]['user_id']+'" target=_blank>'+list[i]['username']+'</a></div><div class="floatr"><div class="pinglun_co_content">'+list[i]['comment']+'<br><font style=" font-size:12px; float:right">'+list[i]['time']+'</font></div>	</div></li>';
					}
					document.write(display);
				</script>
				
				</ul>
				<div class="comment_page"></div>
				<div class="content_pinglun" align="left" style="width:95%">
                                    <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']='';if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_id'] !="" &&  $this->magic_vars['_G']['user_result']['real_status']==1): ?>
                        <script type="text/javascript" src="/themes/face/jquery.qqFace.js"></script>  
                     
                        <link href="/themes/face/qqFace.css" rel="stylesheet" type="text/css" />
                          
                        <style type="text/css">
						.tools{
							width:510px;
							display:inline-block;
							background:#ebeff8;
							border:1px #d4d7e6 solid;
							padding:5px;
						}
						.faceBtn{
							color:#656565;
							font-size:12px;
							width:80px;
							height:25px;
							line-height:25px;
							padding-left:25px;
							background:url(/themes/face/face.gif) 4px 4px no-repeat;
							cursor:pointer;
						}
						</style>
                        
                        
						<script type="text/javascript">
						//实例化表情插件
						jQuery(function(){
							jQuery('#face1').qqFace({
								id : 'facebox1', //表情盒子的ID
								assign:'comment_content', //给那个控件赋值
								path:'/themes/face/face/'	//表情存放的路径
							});
						 
						});


						</script>
						   
						<div><strong>评论一下</strong></div>
						<div class="tools" style="width:904px;">
							<div id="face1" class="faceBtn">添加表情</div>
							<div><textarea  rows="6" id="comment_content" name="comment" style="width:890px;height:50px;"></textarea></div>
						</div>
						<div><span id="subInfo">验证码：<input type="text" id="valicode" name="valicode" size="11" maxlength="4"><img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" alt="点击刷新" src="/plugins/index.php?q=imgcode"></img></span>
						<span class="floatr"><input type="image" id="pinglun" onclick="pinglun('<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>','<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>')" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pinglun_content.gif" /></span></div>
				    <? else: ?>
                        请先<a href="/index.php?user&q=going/login">登录</a>，并通过<a href="/index.php?user&q=code/user/realname">实名认证</a>才能发表评论!
                     <? endif; ?>
				</div>
			</div>
			<script type="text/javascript">
			function nl2br(value) 
			{ 
			  return value.replace("\n","<br />"); 
			}
			function pinglun(code,id) {
					var comment =nl2br(jQuery("#comment_content").val());
					var valicode = jQuery("#valicode").val();
					if(valicode.length!=4){
						jQuery.jBox.tip("验证码输入错误!", 'warning');
						return;
					}
					if (comment==""){
						 
						jQuery.jBox.tip("评论不能为空!", 'warning');
					}else{
						jQuery.jBox.tip("正在提交..", 'loading');
						

							jQuery.ajax({  
								type: "get",
								url: "/index.php",
								data:"comment&type=add&code="+code+"&id="+id+"&comment="+comment+"&valicode="+valicode,  
								cache: false,
								success: function(msg){
	
									  jQuery.jBox.tip(msg,'success');
									  //window.setTimeout(function () {  document.location.reload(); }, 1000);

								}
								});
					}
				};
			function comment_close() {
				jQuery("#windownbg").remove();
				jQuery("#windown-box").fadeOut("slow",function(){jQuery(this).remove();});
			};
			 	
		 </script>
			
			
			<!--评论结束-->
	</div>
</div>

<!--main end-->
		
<div id="modal_dialog" style="display:none" title="<? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?>">
   <div class="pop-tb clearfix">

	<div class="pop-tb-con clearfix">
		<div class="pop-tb-l">
			<ul>
				<li>借款人：<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?></li>
				<li>借款金额：￥<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?></li>
				<li>借款年利率: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %</li>
				<li>已经完成：<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> %</li>
				<li>还需借款: ￥<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?></li>
				<li>借款期限: <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
						<? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>天
						<? else: ?>
						<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>个月 
						<? endif; ?>
				</li>
				<li>还款方式: 
						<? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']='';if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1  && $this->magic_vars['var']['borrow']['is_lz']==0): ?> 
							到期全额还款
							<? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_mb']==1): ?>
							系统自动还款
							<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
							到期自动回购
							<? else: ?>
							<? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
							<? endif; ?>
				</li>
			</ul>
		</div>
		<div class="pop-tb-r">
		<form action="/index.php?user&q=code/borrow/tender" name="form1" onsubmit="return check_form(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)" method="post" >
			<ul>
				<li>您的可用余额： <? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 元 <a href="/index.php?user&q=code/account/recharge_new">我要充值</a></li>
				<li>最多投标总额：<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account']=''; ;if (  $this->magic_vars['var']['borrow']['most_account']<=0): ?>不限制<? else: ?><? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = ''; echo $this->magic_vars['var']['borrow']['most_account']; ?>元<? endif; ?></li>
				
				<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
					<li>最小流转单位：100 元
					<li>已认购:<? if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes'] = ''; echo $this->magic_vars['var']['borrow']['account_yes']/100; ?> 份&nbsp;&nbsp;
					还剩:<b class="max"><? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']/100; ?></b>份</li>
					<li id="flow_num">购买份数：
						<input class="less" value="-" type="button" onclick="less()">
						<input type="text"  class="nums" id="flow_count" name="flow_count" value="1" size="5">
						<input class="add" value="+" type="button" onclick="add()">
					</li>
					<input type="hidden" id="is_lz" name="is_lz" size="11" value="1">
				<? else: ?>
					<? if (!isset($this->magic_vars['var']['borrow']['is_kuai'])) $this->magic_vars['var']['borrow']['is_kuai']=''; ;if (  $this->magic_vars['var']['borrow']['is_kuai'] == 1): ?><li><font color="red">您当前最多可投快速标资金为:<? if (!isset($this->magic_vars['var']['borrow']['kuai_usemoney'])) $this->magic_vars['var']['borrow']['kuai_usemoney'] = ''; echo $this->magic_vars['var']['borrow']['kuai_usemoney']; ?>元</font><a href="/index.php?user&q=code/account/recharge_new">马上进行线下充值</a></li><? endif; ?>
					<li>当前年利率: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %</li>
					<li>投标金额：<input tabindex="1" type="text" id="money" name="money" size="11" 
					<? if (!isset($this->magic_vars['var']['borrow']['is_kuai'])) $this->magic_vars['var']['borrow']['is_kuai']=''; ;if (  $this->magic_vars['var']['borrow']['is_kuai'] == 1): ?>
					onkeyup="value=value.replace(/[^0-9.]/g,'')">元 <input type="button" onclick="inputAll(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['kuai_usemoney'])) $this->magic_vars['var']['borrow']['kuai_usemoney'] = '';$_tmp = $this->magic_vars['var']['borrow']['kuai_usemoney'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);" 
					<? else: ?>
					onkeyup="value=value.replace(/[^0-9.]/g,'')">元 <input type="button" onclick="inputAll(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);" 
					<? endif; ?>
					value="自动填入全部金额"></li>
				<? endif; ?>
				<li>支付密码：<? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><a href="/index.php?user&q=code/user/paypwd" target="_blank"><font color="red">请先设一个支付交易密码,设置完后返回该页面刷新生效</font></a><? else: ?><input type="password" name="paypassword" id="paypassword" size="11" tabindex="2" /><? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['pwd'])) $this->magic_vars['var']['borrow']['pwd']=''; ;if (  $this->magic_vars['var']['borrow']['pwd'] != ""): ?>定向标密码：<input type="text" name="dxbPWD" id="dxbPWD" size="11" tabindex="3" /><? endif; ?>
				</li>
				<li>&nbsp;&nbsp;验证码：<input type="text" id="yzmcode" name="yzmcode" tabindex="4" size="10" style="margin-right:5px;" maxlength="4" /> <img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;" />
				</li>
			</ul>
			<p class="mar20"><input type="submit" class="btn-action" value="确认付款" id="qrfk"><p>
			<p class="text-red"><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>" />注意:点击确认表示您并同意支付本投标金额！</p>
		</form>
		</div>
	</div>
	</div><!-- pop tb-->
</div><!-- modal -->
<? endif; ?>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/modal.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tab.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>
<script type="text/javascript">


jQuery(function(){
	/*jQuery('#invest_dialog').click(function(){
		jQuery('#modal_dialog').dialog('destroy');
		jQuery('#modal_dialog').dialog({ modal: true ,height: 370,width:715 });
	});*/
	jQuery( "#modal_dialog" ).dialog({ autoOpen: false , modal: true ,height: 410,width:760 });
        jQuery('#invest_dialog').click(function(){
                //By Glay jQuery( "#modal_dialog" ).dialog( "open" );
                window.location.href="?doaction=contract";
        });


});

var islz=<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz'] = ''; echo $this->magic_vars['var']['borrow']['is_lz']; ?>;

function check_form(lowest,most,use_money){
		 var frm = document.forms['form1'];
		 var paypassword = jQuery('#paypassword').val();
		 
		 <? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
			 
			var account = jQuery('#flow_count').val()*100;
		<? else: ?>
			var account = jQuery('#money').val();
		<? endif; ?>
		
		 var valicode = frm.elements['yzmcode'].value;
		 if (account==""){
			jQuery.jBox.tip("投标金额不能为空!", 'warning');
			return false;
		 }else if (paypassword==""){
			jQuery.jBox.tip("支付密码不能为空!", 'warning');
			return false;
		 }else if (account>use_money ){
 			jQuery.jBox.tip("您的可用余额小于您的投标额，要投标请先充值!", 'warning');
			return false;
		}else if (account>most && most>0){
			jQuery.jBox.tip("投标金额不能大于最大限额"+most+"元", 'warning');
			return false;
		 }else if(account<lowest && lowest>0){
			 jQuery.jBox.tip("投标金额不能低于最小限额"+lowest+"元", 'warning');
			return false;
		 }
		 if (valicode.length!=4){
			 jQuery.jBox.tip("验证码输入有误!", 'warning');
			return false;
		 }
		if(confirm('确定要投标'+account+'元，确定了将不能取消')){
				//禁用提交按钮 add by weego 20120818
				  decument.getElementById("qrfk").disabled=true;
				  jQuery.jBox.tip("正在提交..", 'loading');
				 //end by weego
			return true;
		}else{
			return false;
		}
		 
	}
        
        function inputAll(lowest,most,use_money){
       
            if(most==0){
               
                jQuery("#money").val(use_money);
            }else if(use_money>most){
                jQuery("#money").val(most);
            }else{
                jQuery("#money").val(use_money);
            }
            
        }
		
var CID = "endtime";
if(window.CID != null){
    var iTime = jQuery('#endtime').html();
    var Account;
    RemainTime();
}
function RemainTime(){
var iDay,iHour,iMinute,iSecond;
var sDay="",sTime="";
    if (iTime >= 0){
        iDay = parseInt(iTime/24/3600);
        iHour = parseInt((iTime/3600)%24);
        iMinute = parseInt((iTime/60)%60);
        iSecond = parseInt(iTime%60);
	   if (iDay > 0){ 
		sDay = iDay + "天"; 
	   }
	   sTime =sDay + iHour + "小时" + iMinute + "分钟" + iSecond + "秒";
	  
			if(iTime==0){
			   clearTimeout(Account);
			   sTime="<span style='color:green'>时间到了！</span>";
			}else{
			   Account = setTimeout("RemainTime()",1000);
			}
			iTime=iTime-1;
    }else if(islz==1){
		 sTime="<span style='color:green'>已停止流转</span>";
	}else{
        sTime="<span style='color:red'>此标已过期！</span>";
		jQuery('#invest_dialog').html("已经过期");
		jQuery('#invest_dialog').attr("disabled",true); 
    } 
	jQuery('#endtime').html(sTime);

}
	   function add(){//增加
	      var num=jQuery("#flow_count").val();
		  var maxNum = parseInt(jQuery(".max").text());
		  num=parseInt(num)+1;
		  if(num>maxNum){
			   num=maxNum;//获取当前的对象的 最大分数  判断是否大于，大于剩下的分数 就不在增加
           }
			jQuery("#flow_count").val(num);
		 }
	   function less(){ //减少
		   var num=jQuery("#flow_count").val();
		   num=parseInt(num)-1;
		   if(num<1){
			  num=1;    //获取当前的对象的最小值  判断是否小于0，小于0 就不在减少
			}
           jQuery("#flow_count").val(num);
		   }

	
</script>

<? unset($_magic_vars);unset($data); ?>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>