<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<? $data = array('article_id'=>'0','id'=>$this->magic_vars['_G']['article_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetInvest($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id']=''; ;if (  $this->magic_vars['var']['borrow']['id']<1): ?>
<? if($_SERVER['HTTP_REFERER']==""){$this->magic_vars['_message']['_uri']=parse_url($_SERVER['SCRIPT_URI']);$this->magic_vars['_message']['_uri']=$this->magic_vars['_message']['_uri']['scheme'].'://'.$this->magic_vars['_message']['_uri']['host'];}else{$this->magic_vars['_message']['_uri']=$_SERVER['HTTP_REFERER'];};$this->magic_vars['_message_']['msg']='δ�ҵ���Ӧ�Ľ���!';$this->magic_vars['_message_']['content']='������һҳ';$this->magic_vars['_message_']['url']=$this->magic_vars['_message']['_uri'];setcookie('message', base64_encode(serialize($this->magic_vars['_message_'])), time()+60 , '/');header("location:/index.php?message");exit(); ?>
<? endif; ?>

<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />

<div id="main" class="clearfix">

<div class="bannerBar m_b_15">
					<p class="pic"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/banner_03.jpg"></p>
					<!-- ������ -->
	 				<div class="pop_club">
						<div class="hd"></div>
                <div class="bg">
                	<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>���ɾ����ʱ����·���ͽ����ķ�ӯ���Ի�Ա��֯������ƽ̨Ͷ����Ϊ��Ա����ΪͶ����֮����й�ͨ���������˽�ܽ���ƽ̨��
                </div>
                <div class="ft"><a href="#"><img width="110" height="53" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/btn_jr.png"></a></div>
					  </div>
            <div class="pop_link">
            	<a href="#">������</a> | <a href="#">ר������</a>
            </div>
					<!-- end ������ -->
				</div>
	
	
	<? if (!isset($_REQUEST['doaction'])) $_REQUEST['doaction']=''; ;if (  $_REQUEST['doaction']=="contract"): ?> <!-- �ڶ��� ȷ�Ϻ�ͬ -->
	
		<div class="step_tz m_b_10">
        	  <div class="step_n num_01">
            	<em class="n">1</em>
                <label class="txt">ѡ����Ŀ</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_02 hover">
            	<em class="n">2</em>
                <label class="txt">ȷ�Ϻ�ͬ</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_03">
            	<em class="n">3</em>
                <label class="txt">����֧��</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_04 ">
            	<em class="n">4</em>
                <label class="txt">Ͷ�����</label>
            </div>
        </div>
	<div class="module_05 m_b_20">
		<div class="hd">
			<h3 class="fl tit">��Ŀ���飺<? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></h3>
			<span class="fr num">��Ŀ��ţ�<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?></span> 
		</div>
	<div class="bg clearfix">
	
	<br>
	<div >
            <p>       
			<B><font size=3>���¹�������Э����Ҫ���Ķ���ͬ�⣺</font></B>
			</p>
			
			<br>
			<p>
			<B>һ,��Ŀ������ʾ��</B>
			</p>
			<div align="center">
			<div align="left" style="width:99%;height:200px; overflow:scroll; border:1px solid #FF6C00;"> 
			<? if (!isset($this->magic_vars['_G']['system']['con_risk_notes'])) $this->magic_vars['_G']['system']['con_risk_notes'] = ''; echo $this->magic_vars['_G']['system']['con_risk_notes']; ?>
			</div>
			</div>
			<br>
			<p>
			<B>��,Ͷ��Э��</B>
			</p>
			<div align="center">
			<div align="left" style="width:99%;height:200px; overflow:scroll; border:1px solid #FF6C00;"> 
			<? if (!isset($this->magic_vars['_G']['system']['con_invest_protocol'])) $this->magic_vars['_G']['system']['con_invest_protocol'] = ''; echo $this->magic_vars['_G']['system']['con_invest_protocol']; ?>
			</div>
			</div>
		<br>
			<p>
			<B>��,Ͷ��ί����</B>
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
			ͬ�Ⲣ����</a>
	</p>
    </div>
    
	
	
	
	<? if (!isset($_REQUEST['doaction'])) $_REQUEST['doaction']=''; ;elseif (  $_REQUEST['doaction']=="success"): ?> <!-- ���Ĳ� -->
	<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'bor','borrow_id'=>isset($_REQUEST['borrow_id'])?$_REQUEST['borrow_id']:'','tender_id'=>isset($_REQUEST['tender_id'])?$_REQUEST['tender_id']:'','limit'=>'all');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['bor']):
?>
		<? if (!isset($this->magic_vars['bor']['user_id'])) $this->magic_vars['bor']['user_id']='';if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['bor']['user_id']!= $this->magic_vars['_G']['user_id']): ?>
		<? if($_SERVER['HTTP_REFERER']==""){$this->magic_vars['_message']['_uri']=parse_url($_SERVER['SCRIPT_URI']);$this->magic_vars['_message']['_uri']=$this->magic_vars['_message']['_uri']['scheme'].'://'.$this->magic_vars['_message']['_uri']['host'];}else{$this->magic_vars['_message']['_uri']=$_SERVER['HTTP_REFERER'];};$this->magic_vars['_message_']['msg']='δ�ҵ���Ӧ�Ľ���!';$this->magic_vars['_message_']['content']='������һҳ';$this->magic_vars['_message_']['url']=$this->magic_vars['_message']['_uri'];setcookie('message', base64_encode(serialize($this->magic_vars['_message_'])), time()+60 , '/');header("location:/index.php?message");exit(); ?>
		<? endif; ?>
	
	<div class="step_tz m_b_10">
        	  <div class="step_n num_01">
            	<em class="n">1</em>
                <label class="txt">ѡ����Ŀ</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_02">
            	<em class="n">2</em>
                <label class="txt">ȷ�Ϻ�ͬ</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_03">
            	<em class="n">3</em>
                <label class="txt">����֧��</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_04 hover">
            	<em class="n">4</em>
                <label class="txt">Ͷ�����</label>
            </div>
        </div>
	<div class="module_05 m_b_20">
		<div class="hd">
			<h3 class="fl tit">��Ŀ���飺<? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></h3>
			<span class="fr num">��Ŀ��ţ�<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?></span> 
		</div>
	<div class="bg clearfix">
	
	
	<div class="successful">
                      <s class="icon_successful"></s>
			�������<em class="c_red"><? if (!isset($this->magic_vars['bor']['tender_account'])) $this->magic_vars['bor']['tender_account'] = ''; echo $this->magic_vars['bor']['tender_account']; ?>Ԫ</em>��ĿͶ�ʣ�Ŀǰ�������Ͷ���ʽ��Ѷ��ᣬ����ʽ��Ϣ��<? if (!isset($this->magic_vars['bor']['success_time'])) $this->magic_vars['bor']['success_time'] = '';$_tmp = $this->magic_vars['bor']['success_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>��ʼ�����ǽ��������˻�������ʶ����ʽ�����Ϊ����Ͷ��Э���ͬ:����Ϣ�ռ������Ϊ���ʱ�������+1�죩
                  </div>
		<div class="fl b_f0f0f0">
                	
                  <!--  -->
                  <div class="succ_m">
                    <div class="s_hd">
                        <h3 class="fl">Ͷ��Э���ͬ</h3>
                       <!--  <span class="fr suc_btn">
                            <a class="btn_whiteBg01 m_r_5" style="width:44px;" href="#">
                              <span class="fl"></span>
                              <span class="fr"></span>
                              <label class="txt">��ӡ</label>
                            </a>
                            <a class="btn_whiteBg01 m_r_5" style="width:56px;" href="#">
                              <span class="fl"></span>
                              <span class="fr"></span>
                              <label class="txt">���Ϊ</label>
                            </a>
                            <a class="btn_whiteBg01" style="width:104px;" href="#">
                              <span class="fl"></span>
                              <span class="fr"></span>
                              <label class="txt">�����ʼ�������</label>
                            </a>
                        </span> -->
                    </div>
                    <div class="s_bg p_10">
                        <table width="100%" class="tb_succ">
                          <tr>
                            <td>Э��ţ�<? if (!isset($_REQUEST['tender_id'])) $_REQUEST['tender_id'] = ''; echo $_REQUEST['tender_id']; ?></td>
                            <td>ǩ�����ڣ�<? if (!isset($this->magic_vars['bor']['addtime'])) $this->magic_vars['bor']['addtime'] = '';$_tmp = $this->magic_vars['bor']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
                          </tr>
                          <tr>
                            <td>����ˣ�<? if (!isset($this->magic_vars['bor']['op_realname'])) $this->magic_vars['bor']['op_realname'] = ''; echo $this->magic_vars['bor']['op_realname']; ?></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Ͷ�ʳ����ˣ�<? if (!isset($this->magic_vars['bor']['realname'])) $this->magic_vars['bor']['realname'] = ''; echo $this->magic_vars['bor']['realname']; ?></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>�����ͨ��<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>��վ(���¼�ơ�����վ��),���йؽ��������������˴������Э�飺......</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>
                            
                        
                          
                          <a href="/protocol_xin/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>&tender_id=<? if (!isset($_REQUEST['tender_id'])) $_REQUEST['tender_id'] = ''; echo $_REQUEST['tender_id']; ?>" target="_blank" class="ico_sprite btnnew btn_view_02 f_bold">�鿴����</a>
                  
                          
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
                        <h3 class="fl">��ͬ����������</h3>
                        <span class="fr"></span>
                    </div>
                    
                  <form action="/index.php?user&q=code/borrow/tendercontract" name="form2" method="post">
                    <div class="s_bg p_10">
                        <ol class="ht_list">
                            <li>
                                <em class="num">1��</em>
                                <div class="con">
                                    <p>���ǽ��Ѻ�ͬ����ص�����Ȩת��Э�����ǩ�֣����֪�����ʱ��͵ص㣺</p>
                                    <p>��ַ��<input style="width:310px;" name="c_address" type="text" class="input_style_02" id="textfield" value="<? if (!isset($this->magic_vars['bor']['c_address'])) $this->magic_vars['bor']['c_address'] = ''; echo $this->magic_vars['bor']['c_address']; ?>" /></p>
                                    <p>������<input style="width:310px;" name="c_name" type="text" class="input_style_02" id="textfield" value="<? if (!isset($this->magic_vars['bor']['c_name'])) $this->magic_vars['bor']['c_name'] = ''; echo $this->magic_vars['bor']['c_name']; ?>" /></p>
                                    <p>��ϵ��ʽ ��<input style="width:280px;" name="c_phone" type="text" class="input_style_02" id="textfield" value="<? if (!isset($this->magic_vars['bor']['c_phone'])) $this->magic_vars['bor']['c_phone'] = ''; echo $this->magic_vars['bor']['c_phone']; ?>" /></p>
                                    <p>
                                      <label class="m_r_10"><input type="radio" name="c_contact_way" value="1" <? if (!isset($this->magic_vars['bor']['c_contact_way'])) $this->magic_vars['bor']['c_contact_way']=''; ;if (  $this->magic_vars['bor']['c_contact_way']==1): ?> checked="checked"<? endif; ?> /> ��ʱ</label>
                                      <label class="m_r_10"><input type="radio" name="c_contact_way" value="2"  <? if (!isset($this->magic_vars['bor']['c_contact_way'])) $this->magic_vars['bor']['c_contact_way']=''; ;if (  $this->magic_vars['bor']['c_contact_way']==2): ?> checked="checked"<? endif; ?>/> ��������</label>
                                      <label class="m_r_10"><input type="radio" name="c_contact_way" value="3" <? if (!isset($this->magic_vars['bor']['c_contact_way'])) $this->magic_vars['bor']['c_contact_way']=''; ;if (  $this->magic_vars['bor']['c_contact_way']==3): ?> checked="checked"<? endif; ?>/> ��˫����</label>
                                      <label><input type="radio" name="c_contact_way" value="4" <? if (!isset($this->magic_vars['bor']['c_contact_way'])) $this->magic_vars['bor']['c_contact_way']=''; ;if (  $this->magic_vars['bor']['c_contact_way']==4): ?> checked="checked"<? endif; ?>/> ��ǰ�ȵ绰ԤԼ</label>
                                      <input type="hidden" name="tender_id" value="<? if (!isset($_REQUEST['tender_id'])) $_REQUEST['tender_id'] = ''; echo $_REQUEST['tender_id']; ?>" />
                                       <!-- <input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?>" /> -->

                                    </p>
                                </div>
                            </li>
                            <li>
                                <em class="num">2��</em>
                                <div class="con">
                                    <p>�������Ķ��˵���������ʽ������</p>
                                    <p>
                                      <label class="m_r_10"><input type="checkbox" name="c_with_email" id="c_with_email" <? if (!isset($this->magic_vars['bor']['c_with_email'])) $this->magic_vars['bor']['c_with_email']=''; ;if (  $this->magic_vars['bor']['c_with_email']==1): ?> checked="checked"<? endif; ?>/> �����ʼ�</label>
                                      <label class="m_r_10"><input type="checkbox" name="c_with_post" id="c_with_post" <? if (!isset($this->magic_vars['bor']['c_with_post'])) $this->magic_vars['bor']['c_with_post']=''; ;if (  $this->magic_vars['bor']['c_with_post']==1): ?> checked="checked"<? endif; ?>/> �����ʼ�</label>
                                    </p>
                                </div>
                            </li>
                        </ol>
                        <p class="tc m_b_20"><input type="submit" class="ico_sprite btnnew btn_view_02" value='ȷ ��'/></p>
                        
                        <p class="f_12">�������ԣ�<span class="c_157aeb"><a href="/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html" class="noneLine_style">�鿴�˴�Ͷ������</a> | <a href="/index.php?user&q=code/borrow/lenddetail" class="noneLine_style">�鿴��Ͷ�ʳɹ���������Ŀ</a>  | <a href="/invest/index.html?order=account_up" class="noneLine_style">�鿴����Ͷ����Ŀ</a></span></p>
                    </div>
                    </form>
                  </div>
                  <!--  -->
              </div>

              	<div class="p_8_5 recharge">
                   <div class="personnel m_b_60">
          <? $data = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::Getkf($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
			
			<div class="box box-kefu">
			<div class="box-title">�����ƹ���</div>
			<div class="box-con">
				<? $data = array('var'=>'kfUser');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['kfUser'] = borrowClass::Getkf($data);if(!is_array($this->magic_vars['kfUser'])){ $this->magic_vars['kfUser']=array();}?>
				<img class="user-photo" src="<? if (!isset($this->magic_vars['kfUser']['kefu_userid'])) $this->magic_vars['kfUser']['kefu_userid'] = '';$_tmp = $this->magic_vars['kfUser']['kefu_userid'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" />
				<? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username']=''; ;if (  $this->magic_vars['kfUser']['username'] != ""): ?>
				<p><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?></p>
				<p>������<? if (!isset($this->magic_vars['kfUser']['realname'])) $this->magic_vars['kfUser']['realname'] = ''; echo $this->magic_vars['kfUser']['realname']; ?></p>
				<p>�绰��<? if (!isset($this->magic_vars['kfUser']['phone'])) $this->magic_vars['kfUser']['phone'] = ''; echo $this->magic_vars['kfUser']['phone']; ?></p>
				<p>������ϵ��<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['kfUser']['qq'])) $this->magic_vars['kfUser']['qq'] = ''; echo $this->magic_vars['kfUser']['qq']; ?>&site=qq&menu=yes">
				<img border="0" src="http://wpa.qq.com/pa?p=2:<? if (!isset($this->magic_vars['kfUser']['qq'])) $this->magic_vars['kfUser']['qq'] = ''; echo $this->magic_vars['kfUser']['qq']; ?>:41" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ"></a></p>
				
				<p>������Ϣ��<a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?>">վ����</a></p>
				<? endif; ?>
				<!-- <p>�ܻ���<? if (!isset($this->magic_vars['_G']['system']['con_tel'])) $this->magic_vars['_G']['system']['con_tel'] = ''; echo $this->magic_vars['_G']['system']['con_tel']; ?></p> -->
				<p><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username']=''; ;if (  $this->magic_vars['kfUser']['username']== ""): ?>
                    ���ã�����û������������ƹ��ʣ��Ͽ���<a href="/vip/index.html" style="color:red">����</a>�ɣ�
                    <? else: ?>
                    ���ã����κ����ʿ���ʱ��������ƹ���<font color="red"><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?></font>��ϵ��
                    <? endif; ?></p>
                <? unset($_magic_vars);unset($data); ?>
			</div>
		</div>
		
			<? unset($_magic_vars);unset($data); ?>
                   </div>  
                 

                
              </div>
            </div>
        </div>
        <!-- end ��Ŀ���� -->
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>	
		
	<? if (!isset($_REQUEST['detail'])) $_REQUEST['detail']=''; ;elseif (  $_REQUEST['detail']=="true"): ?><!-- ������ -->
	<div class="step_tz m_b_10">
        	  <div class="step_n num_01">
            	<em class="n">1</em>
                <label class="txt">ѡ����Ŀ</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_02">
            	<em class="n">2</em>
                <label class="txt">ȷ�Ϻ�ͬ</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_03 hover">
            	<em class="n">3</em>
                <label class="txt">����֧��</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_04">
            	<em class="n">4</em>
                <label class="txt">Ͷ�����</label>
            </div>
        </div>
	<div class="module_05 m_b_20">
		<div class="hd">
			<h3 class="fl tit">��Ŀ���飺<? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></h3>
			<span class="fr num">��Ŀ��ţ�<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?></span> 
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
					<li>����ˣ�<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?></li>
					<li>������<strong><? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?></strong></li>
					<li>���������: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %</li>
					<li>�Ѿ���ɣ�<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> %</li>
					<li>������: ��<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?></li>
					<li>�������: <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
							<? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>��
							<? else: ?>
							<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>���� 
							<? endif; ?>
					</li>
					<li>���ʽ: <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']='';if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1 &&  $this->magic_vars['var']['borrow']['is_lz']==0): ?> 
							����ȫ���
							<? else: ?>
							<? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
							<? endif; ?>
					</li>
				</ul>
			</div>
			<div class="pop-tb-r">
			<form action="/index.php?user&q=code/borrow/tender" name="form1" onsubmit="return check_form(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)" method="post" >
				<ul>
					<li>���Ŀ����� <? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> Ԫ <a href="/index.php?user&q=code/account/recharge_new">��Ҫ��ֵ</a></li>
					<li>���Ͷ���ܶ<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account']=''; ;if (  $this->magic_vars['var']['borrow']['most_account']<=0): ?>������<? else: ?><? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = ''; echo $this->magic_vars['var']['borrow']['most_account']; ?>Ԫ<? endif; ?></li>
					<? if (!isset($this->magic_vars['var']['borrow']['is_kuai'])) $this->magic_vars['var']['borrow']['is_kuai']=''; ;if (  $this->magic_vars['var']['borrow']['is_kuai'] == 1): ?><li><font color="red">����ǰ����Ͷ���ٱ��ʽ�Ϊ:<? if (!isset($this->magic_vars['var']['borrow']['kuai_usemoney'])) $this->magic_vars['var']['borrow']['kuai_usemoney'] = ''; echo $this->magic_vars['var']['borrow']['kuai_usemoney']; ?>Ԫ</font><a href="/index.php?user&q=code/account/recharge_new">���Ͻ������³�ֵ</a></li><? endif; ?>
					<li>��ǰ������: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %</li>
					<li>Ͷ���<input tabindex="1" type="text" id="money" name="money" size="11" 
					<? if (!isset($this->magic_vars['var']['borrow']['is_kuai'])) $this->magic_vars['var']['borrow']['is_kuai']=''; ;if (  $this->magic_vars['var']['borrow']['is_kuai'] == 1): ?>
					onkeyup="value=value.replace(/[^0-9.]/g,'')">Ԫ <input type="button" onclick="inputAll(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['kuai_usemoney'])) $this->magic_vars['var']['borrow']['kuai_usemoney'] = '';$_tmp = $this->magic_vars['var']['borrow']['kuai_usemoney'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);" 
					<? else: ?>
					onkeyup="value=value.replace(/[^0-9.]/g,'')">Ԫ <input type="button" onclick="inputAll(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);" 
					<? endif; ?>
					value="�Զ�����ȫ�����"></li>

					<li>֧�����룺<? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><a href="/index.php?user&q=code/user/paypwd" target="_blank"><font color="red">������һ��֧����������,������󷵻ظ�ҳ��ˢ����Ч</font></a><? else: ?><input type="password" name="paypassword" size="11" tabindex="2" /><? endif; ?></li>
					<? if (!isset($this->magic_vars['var']['borrow']['pwd'])) $this->magic_vars['var']['borrow']['pwd']=''; ;if (  $this->magic_vars['var']['borrow']['pwd'] != ""): ?><li>��������룺<input type="text" name="dxbPWD" id="dxbPWD" size="11" tabindex="3" /></li><? endif; ?>
					<!-- <? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;if (  $this->magic_vars['var']['borrow']['is_mb']==1): ?>  <? endif; ?> -->
					<li>&nbsp;&nbsp;��֤�룺<input type="text" id="yzmcode" name="yzmcode" tabindex="4" size="10" style="margin-right:5px;" maxlength="4" /> <img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;" />
					</li>
					
					
				</ul>
				<p class="mar20"><input type="submit" class="btn-action" value="ȷ�ϸ���"><p>
				<p class="text-red"><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>" />ע��:���ȷ�ϱ�ʾ����Ͷ���ͬ��֧��</p>
			</form>
			</div>
		</div>
		</div>
		</div>
		</div>
	<? else: ?><!--��һ�� -->
	<div class="step_tz m_b_10">
        	  <div class="step_n num_01 hover">
            	<em class="n">1</em>
                <label class="txt">ѡ����Ŀ</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_02">
            	<em class="n">2</em>
                <label class="txt">ȷ�Ϻ�ͬ</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_03">
            	<em class="n">3</em>
                <label class="txt">����֧��</label>
            </div>
            <span class="direction"></span>
            <div class="step_n num_04">
            	<em class="n">4</em>
                <label class="txt">Ͷ�����</label>
            </div>
        </div>
		<div class="module_05 m_b_20">
			<div class="hd">
			<h3 class="fl tit">��Ŀ���飺<? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></h3>
			<span class="fr num">��Ŀ��ţ�<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?></span> 
			</div>
		<div class="bg clearfix">
	
        
	<div class="box-detail clearfix">
		<div class="box-info clearfix">
<!-- 			<div class="box-info-user">
				<img class="user-photo" src="<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = '';$_tmp = $this->magic_vars['var']['user']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" />
				<p>�û���: <? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?> </p>
				<p> ���ֵȼ��� <img class="rank" src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['credit_pic'])) $this->magic_vars['var']['credit_pic'] = '';$_tmp = $this->magic_vars['var']['credit_pic'];$_tmp = $this->magic_modifier("default",$_tmp,"credit_s11.gif");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['credit_jifen'])) $this->magic_vars['var']['user']['credit_jifen'] = '';$_tmp = $this->magic_vars['var']['user']['credit_jifen'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��"  /> </p>
				<p>����:<? if (!isset($this->magic_vars['var']['user']['area'])) $this->magic_vars['var']['user']['area'] = '';$_tmp = $this->magic_vars['var']['user']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></p>
				 <p>
				<div class="info_a">
				 <div class="credit_pic_card_<? if (!isset($this->magic_vars['var']['user']['real_status'])) $this->magic_vars['var']['user']['real_status'] = '';$_tmp = $this->magic_vars['var']['user']['real_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['real_status'])) $this->magic_vars['var']['user']['real_status']=''; ;if (  $this->magic_vars['var']['user']['real_status']==1): ?>ʵ������֤<? else: ?>δʵ����֤<? endif; ?>"></div>
					<div class="credit_pic_phone_<? if (!isset($this->magic_vars['var']['user']['phone_status'])) $this->magic_vars['var']['user']['phone_status']=''; ;if (  $this->magic_vars['var']['user']['phone_status']>=1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user']['phone_status'])) $this->magic_vars['var']['user']['phone_status']=''; ;if (  $this->magic_vars['var']['user']['phone_status']==1): ?>�ֻ�����֤<? else: ?>�ֻ�δ��֤<? endif; ?>"></div>
                    <div class="credit_pic_email_<? if (!isset($this->magic_vars['var']['user']['email_status'])) $this->magic_vars['var']['user']['email_status'] = '';$_tmp = $this->magic_vars['var']['user']['email_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['email_status'])) $this->magic_vars['var']['user']['email_status']=''; ;if (  $this->magic_vars['var']['user']['email_status']==1): ?>��������֤<? else: ?>����δ��֤<? endif; ?>"></div>
					<div
					class="credit_pic_video_<? if (!isset($this->magic_vars['var']['user']['video_status'])) $this->magic_vars['var']['user']['video_status'] = '';$_tmp = $this->magic_vars['var']['user']['video_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['video_status'])) $this->magic_vars['var']['user']['video_status']=''; ;if (  $this->magic_vars['var']['user']['video_status']==1): ?>��Ƶ����֤<? else: ?>��Ƶδ��֤<? endif; ?>"></div>
					<div style="magin-left:5px;" class="credit_pic_vip_<? if (!isset($this->magic_vars['var']['user_cache']['vip_status'])) $this->magic_vars['var']['user_cache']['vip_status']=''; ;if (  $this->magic_vars['var']['user_cache']['vip_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user_cache']['vip_status'])) $this->magic_vars['var']['user_cache']['vip_status']=''; ;if (  $this->magic_vars['var']['user_cache']['vip_status']==1): ?>VIP<? else: ?>��ͨ��Ա<? endif; ?>"></div>
					<div class="credit_pic_scene_<? if (!isset($this->magic_vars['var']['user']['scene_status'])) $this->magic_vars['var']['user']['scene_status']=''; ;if (  $this->magic_vars['var']['user']['scene_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user']['scene_status'])) $this->magic_vars['var']['user']['scene_status']=''; ;if (  $this->magic_vars['var']['user']['scene_status']==1): ?>��ͨ���ֳ���֤<? else: ?>δͨ���ֳ���֤<? endif; ?>"></div> 
			</div>
			</p>
 
				<p><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>">վ����</a></p>
				<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']='';if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_id']!="" &&  $this->magic_vars['_G']['user_result']['real_status']==1): ?>
				<p><a href="/index.php?user&q=code/user/addfriend&username=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>" title="��Ϊ����" class="thickbox">��Ϊ����</a></p>
				<p><a href="javascript:void(0)" onclick='tipsWindown("��Ϊ����","url:get?/index.php?user&q=code/user/addfriend&username=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>",400,230,"true","","true","text");'>��Ϊ����</a></p>
				<? else: ?>
				<p><a href="javascript:alert('���ȵ�½��ʵ����֤���ܼӺ���')" title="��Ϊ����">��Ϊ����</a></p>
				<? endif; ?>
				<p><a href="/index.php?user&amp;q=code/user/blackfriend&amp;username=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>" title="��Ϊ������" style="color:#666666">��Ϊ������</a></p>
				<p><a href="/zaixian/index.html">�ٱ�����</a></p>
			</div> -->

			<!-- <div class="box-info-detail"> -->
			
                  	<div class="pro_info">
                        <table width="100%" class="tb_pro tb_pro02 m_b_10">
                          <tr>
                            <th class="f_16 f_bold" style="width:100px;">����</th>
                            <td class="f_16 f_bold">��<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?>Ԫ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�����ʣ�<? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;���ޣ�<? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
								<? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>��
							<? else: ?>
								<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>����
							<? endif; ?></td>
                          </tr>
                          <tr>
                            <th class="f_16 f_bold" style="width:100px;">�����;��</th>
                            <td class="f_16 f_bold"><? if (!isset($this->magic_vars['var']['borrow']['use_name'])) $this->magic_vars['var']['borrow']['use_name'] = ''; echo $this->magic_vars['var']['borrow']['use_name']; ?></td>
                          </tr>
                          <tr>
                            <th class="f_16 f_bold" style="width:100px;">��ط�ʽ��</th>
                            <td class="f_16 f_bold"> <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']='';if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1 && $this->magic_vars['var']['borrow']['is_lz']==0): ?> 
							����ȫ���
							<? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_mb']==1): ?>
							ϵͳ�Զ�����
							<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
							�����Զ��ع�
							<? else: ?>
							<? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
							<? endif; ?></td>
                          </tr>
                        </table>
                        <div class="clearfix shuliang m_b_10">
                        <p class="fl">����<em class="num"><? if (!isset($this->magic_vars['var']['borrow']['tender_times'])) $this->magic_vars['var']['borrow']['tender_times'] = ''; echo $this->magic_vars['var']['borrow']['tender_times']; ?>��</em>����Ͷ��</p>
                        	
                          <p class="fr price">
                          	�Ѿ���ɣ�<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> % <br> <em class="pri">ʣ���Ͷ����<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?></em>
                          </p>
                         
                           
                          	
                    		
                   
                        </div>
                        <!--  -->
                        <div class="jiage m_b_20">
                     	
                        <p class="now">���Ͷ����㣺��<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = ''; echo $this->magic_vars['var']['borrow']['lowest_account']; ?>Ԫ </p>
                  		<!-- <p class="m_b_20"><a class="btn_blueBg02" href="#">
                                  <span class="fl"></span>
                                  <span class="fr"></span>
                                  <label class="txt">�˽�ƽ̨ԭ��</label>
                              </a>
                           </p> -->
                  <? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status'] != 3): ?>
					
					<!-- <p>����ʱ�䣺<? if (!isset($this->magic_vars['var']['borrow']['addtime'])) $this->magic_vars['var']['borrow']['addtime'] = '';$_tmp = $this->magic_vars['var']['borrow']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></p> -->
                        <? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale']=''; ;if (  $this->magic_vars['var']['borrow']['scale']!=100): ?>
                         
						 <p class="f_12">ʣ��Ͷ��ʱ�䣺</p>
                         <p class="date"><span id="endtime"><? if (!isset($this->magic_vars['var']['borrow']['lave_time'])) $this->magic_vars['var']['borrow']['lave_time'] = ''; echo $this->magic_vars['var']['borrow']['lave_time']; ?></span> </p>
                        <? endif; ?>
					<? else: ?>
					
					<p>���ʱ�䣺<? if (!isset($this->magic_vars['var']['borrow']['verify_time'])) $this->magic_vars['var']['borrow']['verify_time'] = '';$_tmp = $this->magic_vars['var']['borrow']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></p>
					<p >ʣ��Ͷ��ʱ�䣺�ѽ��� </p>
					<? endif; ?>
                          
                   <br>      
                  <p>Ͷ��1��Ԫ,����<? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
                <? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>��
                <? else: ?>
                <? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>����
                <? endif; ?>,Ԥ�ƿɻ�<? if (!isset($this->magic_vars['var']['borrow']['interest'])) $this->magic_vars['var']['borrow']['interest'] = '';$_tmp = $this->magic_vars['var']['borrow']['interest']*100;$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?>Ԫ��Ϣ�ر�</p>
                
                
           <p class="j_btn">     
           <? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']='';if (!isset($this->magic_vars['var']['borrow']['vouch_account'])) $this->magic_vars['var']['borrow']['vouch_account']='';if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1 &&  $this->magic_vars['var']['borrow']['vouch_account']!= $this->magic_vars['var']['borrow']['account']): ?> 
					<a id="invest_dialog"  class="btnnew btn_login f_18" href="#">ȷ��Ͷ��</a>
			<? else: ?>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?>
					<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>
					<a class="btnnew btn_login f_18" href="#">�ѻ���</a>
					<? else: ?>
					<a class="btnnew btn_login f_18" href="#">������</a>
					<? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==5): ?>
				<a class="btnnew btn_login f_18" href="#">�û�ȡ��</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==0): ?>
				<a class="btnnew btn_login f_18" href="#">�ȴ�����</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==4): ?>
				<a class="btnnew btn_login f_18" href="#">����ʧ��</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==2): ?>
				<a class="btnnew btn_login f_18" href="#">�ȴ�����</a>
				<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']=''; ;elseif (  $this->magic_vars['var']['borrow']['account']> $this->magic_vars['var']['borrow']['account_yes']): ?>
				
				<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']>0): ?>
					<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']): ?>
					<a id="invest_dialog" class="btnnew btn_login f_18" href="#">�����Ϲ�</a>
					<? else: ?>
					<a id="invest_dialog" class="btnnew btn_login f_18" href="#">ȷ��Ͷ��</a>
					<? endif; ?>
				 
				<? else: ?>
					<a  class="btnnew btn_login f_18" href="/index.action?user&q=going/login">���ȵ�¼</a>
				<? endif; ?> 
				
				<? else: ?>
				<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']): ?>
					<a class="btnnew btn_login f_18" href="#">���Ϲ���</a>
				<? else: ?>
					<a class="btnnew btn_login f_18" href="#">�ȴ�����</a>
				<? endif; ?>
				
				<? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
					<a class="btnnew btn_login f_18" href="#">�������</a>
				<? endif; ?>
			<? endif; ?>
			</p>
        	<!--  <p class="j_btn"><a href="��ҪͶ�ʣ����߳�ֵ.html" class="btnnew btn_login f_18">ȷ��Ͷ��</a></p> -->
           </div>
           
           
          <!--             
           <div class="clearfix fuxuan">
                        	 <p><label><input name="" type="checkbox" value=""> ���Ѿ���������Լ�Ͷ�ʷ��ղ��������ʾ�  ��û������������</label></p> 
                        	<p><label><input name="" type="checkbox" checked="checked"> ���Ѿ��Ķ���ͬ����վ�����Ͷ����������</label></p>
                        	<p><label><input name="" type="checkbox" checked="checked"> ���Ѿ��Ķ�����Ŀ�Ĳ�Ʒ���ս�ʾ�顢���мƻ�˵���顢����������</label></p>
           </div> 
         -->                               
                        
        </div>                             
               
				<!-- <h2><span style="float:left;margin-right:5px;"><? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></span> 
						<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?><a href="/question/a144.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" border="0" alt="����鿴����" /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;if (  $this->magic_vars['var']['borrow']['is_mb']==1): ?><a href="/question/a145.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/miao.jpg"  border="0"  alt="����鿴����" /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['is_fast'])) $this->magic_vars['var']['borrow']['is_fast']=''; ;if (  $this->magic_vars['var']['borrow']['is_fast']==1): ?><a href="/question/a146.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/fast.gif" border="0"  alt="����鿴����"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['danbao'])) $this->magic_vars['var']['borrow']['danbao']=''; ;if (  $this->magic_vars['var']['borrow']['danbao']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/dan.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['is_kuai'])) $this->magic_vars['var']['borrow']['is_kuai']=''; ;if (  $this->magic_vars['var']['borrow']['is_kuai']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/kuai.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lz.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['is_jin'])) $this->magic_vars['var']['borrow']['is_jin']=''; ;if (  $this->magic_vars['var']['borrow']['is_jin']==1): ?><a href="/question/a184.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jin.gif"   border="0"  alt="����鿴����" /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['biao_type'])) $this->magic_vars['var']['borrow']['biao_type']=''; ;if (  $this->magic_vars['var']['borrow']['biao_type']=="xin"): ?>
						<a href="/question/a143.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/xin.jpg"   border="0"  alt="����鿴����" /></a>&nbsp;<? endif; ?>
                        <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?><a href="#" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/day.jpg"   border="0"  alt="����鿴����" /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['flag'])) $this->magic_vars['var']['borrow']['flag']=''; ;if (  $this->magic_vars['var']['borrow']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif" align="absmiddle"  border="0"/>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']='';if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;if (  $this->magic_vars['var']['borrow']['award']==1 ||  $this->magic_vars['var']['borrow']['award']==2): ?><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif"  border="0" />&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['borrow']['pwd'])) $this->magic_vars['var']['borrow']['pwd']=''; ;if (  $this->magic_vars['var']['borrow']['pwd'] != ""): ?><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lock.gif"  border="0" />&nbsp;<? endif; ?>
                </h2>
				<ul class="clearfix">
					<li>������<strong><? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?>Ԫ</strong></li>
					 
					<li>�����ʣ�<strong><? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</strong> (�����ʣ�<? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = '';$_tmp = $this->magic_vars['var']['borrow']['apr']/12;$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?>%)</li>
					<li>���ʽ�� <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']='';if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1 && $this->magic_vars['var']['borrow']['is_lz']==0): ?> 
							����ȫ���
							<? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_mb']==1): ?>
							ϵͳ�Զ�����
							<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
							�����Զ��ع�
							<? else: ?>
							<? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
							<? endif; ?>
					</li>
					<li>Ͷ�꽱����
						<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;if (  $this->magic_vars['var']['borrow']['award']==0): ?>
							��
						<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==1): ?>
							���(<? if (!isset($this->magic_vars['var']['borrow']['part_account'])) $this->magic_vars['var']['borrow']['part_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['part_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?>Ԫ)
						<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==2): ?>
							<? if (!isset($this->magic_vars['var']['borrow']['funds'])) $this->magic_vars['var']['borrow']['funds'] = ''; echo $this->magic_vars['var']['borrow']['funds']; ?>%
						<? endif; ?>
					</li>
					<li>
					<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
					��ת���ڣ�
					<? else: ?>
					������ޣ�
					<? endif; ?>
							<? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
								<? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>��
							<? else: ?>
								<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>����
							<? endif; ?>
					</li>	
					
				</ul>
				<div class="box-info-detail-ac" style="text-align:center;">
					<a class="btn-action" data-toggle="modal" href="#myModal">����Ͷ��</a>
					<a id="invest_dialog" class="btn-action" href="#">����Ͷ��</a>
			<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']='';if (!isset($this->magic_vars['var']['borrow']['vouch_account'])) $this->magic_vars['var']['borrow']['vouch_account']='';if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1 &&  $this->magic_vars['var']['borrow']['vouch_account']!= $this->magic_vars['var']['borrow']['account']): ?> 
					<a id="invest_dialog" class="btn-action" href="#">����Ͷ��</a>
			<? else: ?>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?>
					<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>
					<a class="btn-action" href="#">�ѻ���</a>
					<? else: ?>
					<a class="btn-action" href="#">������</a>
					<? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==5): ?>
				<a class="btn-action" href="#">�û�ȡ��</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==0): ?>
				<a class="btn-action" href="#">�ȴ�����</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==4): ?>
				<a class="btn-action" href="#">����ʧ��</a>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==2): ?>
				<a class="btn-action" href="#">�ȴ�����</a>
				<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']=''; ;elseif (  $this->magic_vars['var']['borrow']['account']> $this->magic_vars['var']['borrow']['account_yes']): ?>
				
				<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']>0): ?>
					<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']): ?>
					<a id="invest_dialog" class="btn-action" href="#">�����Ϲ�</a>
					<? else: ?>
					<a id="invest_dialog" class="btn-action" href="#">����Ͷ��</a>
					<? endif; ?>
				 
				<? else: ?>
					<a  class="btn-action" href="/index.action?user&q=going/login">���ȵ�¼</a>
				<? endif; ?> 
				
				<? else: ?>
				<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']): ?>
					<a class="btn-action" href="#">���Ϲ���</a>
				<? else: ?>
					<a class="btn-action" href="#">�ȴ�����</a>
				<? endif; ?>
				
				<? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
					<a class="btn-action" href="#">�������</a>
				<? endif; ?>
			<? endif; ?>
					<p>Ͷ��100Ԫ,������<? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %������<? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
                <? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>��
                <? else: ?>
                <? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>����
                <? endif; ?>,Ԥ����Ϣ���棤<? if (!isset($this->magic_vars['var']['borrow']['interest'])) $this->magic_vars['var']['borrow']['interest'] = '';$_tmp = $this->magic_vars['var']['borrow']['interest'];$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?>Ԫ</p>
				</div>
				<ul class="clearfix">
					<li><span class="floatl">�Ѿ���ɣ�</span>
					<div class="rate_bg floatl" style="margin-top:10px;">
							<div class="rate_tiao" style="width:<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div>
                    <div class="floatl"><? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = ''; echo $this->magic_vars['var']['borrow']['scale']; ?>%</div></li>
					<li><? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?>
                          <? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;if (  $this->magic_vars['var']['borrow']['is_mb']==1): ?>
                          <a href="/protocol_miao/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>���Э����</b></font></a>
                          <? endif; ?>
                          <? if (!isset($this->magic_vars['var']['borrow']['is_fast'])) $this->magic_vars['var']['borrow']['is_fast']=''; ;if (  $this->magic_vars['var']['borrow']['is_fast']==1): ?>
                          <a href="/protocol_fast/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>���Э����</b></font></a>
                          <? endif; ?>
                          <? if (!isset($this->magic_vars['var']['borrow']['is_jin'])) $this->magic_vars['var']['borrow']['is_jin']=''; ;if (  $this->magic_vars['var']['borrow']['is_jin']==1): ?>
                          <a href="/protocol_jin/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>���Э����</b></font></a>
                          <? endif; ?>
                          <? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
                          <a href="/protocol_danbao/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>���Э����</b></font></a>
                          <? endif; ?>
                          <? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']='';if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']='';if (!isset($this->magic_vars['var']['borrow']['is_fast'])) $this->magic_vars['var']['borrow']['is_fast']='';if (!isset($this->magic_vars['var']['borrow']['is_jin'])) $this->magic_vars['var']['borrow']['is_jin']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch'] != 1 &&  $this->magic_vars['var']['borrow']['is_mb']!=1 &&  $this->magic_vars['var']['borrow']['is_fast']!=1 &&  $this->magic_vars['var']['borrow']['is_jin']!=1): ?>
                          <a href="/protocol_xin/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>���Э����</b></font></a>
                          <? endif; ?>
                      <? else: ?>
					<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
					��ʣ��<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']/100; ?>�� (ÿ��100Ԫ)
					<? else: ?>
					�����<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?>
					<? endif; ?>
					<? endif; ?></li>
					<li>��СͶ����<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = ''; echo $this->magic_vars['var']['borrow']['lowest_account']; ?>Ԫ</li>
					<li>���Ͷ��<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account']=''; ;if (  $this->magic_vars['var']['borrow']['most_account']==0): ?>����<? else: ?>��<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = ''; echo $this->magic_vars['var']['borrow']['most_account']; ?>Ԫ<? endif; ?></li>
					<li>��Ͷ������<? if (!isset($this->magic_vars['var']['borrow']['tender_times'])) $this->magic_vars['var']['borrow']['tender_times'] = ''; echo $this->magic_vars['var']['borrow']['tender_times']; ?>��</li>
				</ul> -->
			<!-- </div> end box-info-detail-->

		</div>
		<!-- <div class="box box-kefu">
			<div class="box-title">����ϵͳ��Ϣ</div>
			
			<div class="box-con">
			<p>�����: #<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?></p>
			 <p>�������ͣ����߽��� </p>
					<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status'] != 3): ?>
					
					<p>����ʱ�䣺<? if (!isset($this->magic_vars['var']['borrow']['addtime'])) $this->magic_vars['var']['borrow']['addtime'] = '';$_tmp = $this->magic_vars['var']['borrow']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></p>
                        <? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale']='';if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['scale']!=100 &&  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
                         
							<p >ʣ��ʱ�䣺<span id="endtime"><? if (!isset($this->magic_vars['var']['borrow']['lave_time'])) $this->magic_vars['var']['borrow']['lave_time'] = ''; echo $this->magic_vars['var']['borrow']['lave_time']; ?></span> </p>
                        <? else: ?>
                        	<p >ʣ��ʱ�䣺<span id="endtime"><? if (!isset($this->magic_vars['var']['borrow']['lave_time'])) $this->magic_vars['var']['borrow']['lave_time'] = ''; echo $this->magic_vars['var']['borrow']['lave_time']; ?></span> </p>
                        <? endif; ?>
					<? else: ?>
					
					<p>���ʱ�䣺<? if (!isset($this->magic_vars['var']['borrow']['verify_time'])) $this->magic_vars['var']['borrow']['verify_time'] = '';$_tmp = $this->magic_vars['var']['borrow']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></p>
					<p >ʣ��ʱ�䣺�ѽ��� </p>
					<? endif; ?>
			</div>
		</div> -->
		<div class="box box-kefu">
			<div class="box-title">�����ƹ���</div>
			<div class="box-con">
				<? $data = array('var'=>'kfUser');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['kfUser'] = borrowClass::Getkf($data);if(!is_array($this->magic_vars['kfUser'])){ $this->magic_vars['kfUser']=array();}?>
				<img class="user-photo" src="<? if (!isset($this->magic_vars['kfUser']['kefu_userid'])) $this->magic_vars['kfUser']['kefu_userid'] = '';$_tmp = $this->magic_vars['kfUser']['kefu_userid'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" />
				<? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username']=''; ;if (  $this->magic_vars['kfUser']['username'] != ""): ?>
				<p><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?></p>
				<p>������<? if (!isset($this->magic_vars['kfUser']['realname'])) $this->magic_vars['kfUser']['realname'] = ''; echo $this->magic_vars['kfUser']['realname']; ?></p>
				<p>�绰��<? if (!isset($this->magic_vars['kfUser']['phone'])) $this->magic_vars['kfUser']['phone'] = ''; echo $this->magic_vars['kfUser']['phone']; ?></p>
				<p>������ϵ��<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['kfUser']['qq'])) $this->magic_vars['kfUser']['qq'] = ''; echo $this->magic_vars['kfUser']['qq']; ?>&site=qq&menu=yes">
				<img border="0" src="http://wpa.qq.com/pa?p=2:<? if (!isset($this->magic_vars['kfUser']['qq'])) $this->magic_vars['kfUser']['qq'] = ''; echo $this->magic_vars['kfUser']['qq']; ?>:41" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ"></a></p>
				
				<p>������Ϣ��<a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?>">վ����</a></p>
				<? endif; ?>
				<!-- <p>�ܻ���<? if (!isset($this->magic_vars['_G']['system']['con_tel'])) $this->magic_vars['_G']['system']['con_tel'] = ''; echo $this->magic_vars['_G']['system']['con_tel']; ?></p> -->
				<p><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username']=''; ;if (  $this->magic_vars['kfUser']['username']== ""): ?>
                    ���ã�����û������������ƹ��ʣ��Ͽ���<a href="/vip/index.html" style="color:red">����</a>�ɣ�
                    <? else: ?>
                    ���ã����κ����ʿ���ʱ��������ƹ���<font color="red"><? if (!isset($this->magic_vars['kfUser']['username'])) $this->magic_vars['kfUser']['username'] = ''; echo $this->magic_vars['kfUser']['username']; ?></font>��ϵ��
                    <? endif; ?></p>
                <? unset($_magic_vars);unset($data); ?>
			</div>
		</div>
	</div>
	</div>
	</div>

	<!--�������-->
	<ul class="list-tab clearfix">
		<li class="active"><a href="#">�������</a></li>
	</ul>
	<div id="myTabContent1" class="tab-content">
	<div  id="zlsh">

		<table border="0" cellspacing="0" width="100%"
			class="table table-striped  table-condensed">
			<tr>
				<!-- <td><strong>��������</strong></td> -->
				<!-- <td ><strong>����</strong></td> -->
				<td><strong>�����Ŀ</strong></td>
				<td><strong>״̬</strong></td>
				<td><strong>ͨ��ʱ��</strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'arr_var','limit'=>'all','status'=>'1','user_id'=>$this->magic_vars['var']['user']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/attestation/attestation.class.php');$this->magic_vars['magic_result'] = attestationClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['arr_var']):
?> <? if (!isset($this->magic_vars['arr_var']['jifen'])) $this->magic_vars['arr_var']['jifen']=''; ;if ( $this->magic_vars['arr_var']['jifen']>0): ?>
			<tr>
				<!-- <td><? if (!isset($this->magic_vars['arr_var']['type_name'])) $this->magic_vars['arr_var']['type_name'] = ''; echo $this->magic_vars['arr_var']['type_name']; ?></td> -->
				<!--   <td  ><? if (!isset($this->magic_vars['arr_var']['jifen'])) $this->magic_vars['arr_var']['jifen'] = ''; echo $this->magic_vars['arr_var']['jifen']; ?> ��</td> -->
				<td><? if (!isset($this->magic_vars['arr_var']['verify_remark'])) $this->magic_vars['arr_var']['verify_remark'] = '';$_tmp = $this->magic_vars['arr_var']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
				<td>ͨ��</td>
				<td><? if (!isset($this->magic_vars['arr_var']['verify_time'])) $this->magic_vars['arr_var']['verify_time'] = '';$_tmp = $this->magic_vars['arr_var']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<!-- <td><? if (!isset($this->magic_vars['arr_var']['verify_remark'])) $this->magic_vars['arr_var']['verify_remark'] = '';$_tmp = $this->magic_vars['arr_var']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td> -->
			</tr>
			<? endif; ?> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
	</div>

<br>


	<ul  id="tab" class="list-tab clearfix">
		<li class="active"><a href="#jkxq" data-toggle="tab">�������</a></li>
		<li><a href="#zhxq1111" data-toggle="tab">�˻�����</a></li>
		<li><a href="#hkxy" data-toggle="tab">��������</a></li>
		<li><a href="#grxx" data-toggle="tab">��������</a></li>
		<li><a href="#tbjl" data-toggle="tab">Ͷ�꽱��</a></li>
		<li><a href="#hkjl" data-toggle="tab">�������¼</a></li>
		
	</ul>
<div id="myTabContent" class="tab-content">
	<!--�������-->
	<div class="list-tab-con tab-pane fade in active" id="jkxq">

			<div><? if (!isset($this->magic_vars['var']['borrow']['content'])) $this->magic_vars['var']['borrow']['content'] = ''; echo $this->magic_vars['var']['borrow']['content']; ?></div>

	</div>
	
	
	
	<!--�˻�����-->
	<div class="list-tab-con tab-pane fade" id="zhxq">
		<ul class="clearfix">
		<? $data = array('user_id'=>$this->magic_vars['var']['user']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
			<li>�˻��ܶ <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['var']['account']['total'])) $this->magic_vars['var']['account']['total'] = ''; echo $this->magic_vars['var']['account']['total']; ?><? endif; ?></li>
			<li>�����ܶ<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?>  </li>
			<li>��ծ�����<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?> <? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num']='';if (!isset($this->magic_vars['acc']['success_account'])) $this->magic_vars['acc']['success_account']=''; ;if (  $this->magic_vars['acc']['borrow_num']< $this->magic_vars['acc']['success_account']): ?>������ڽ���<? else: ?>���С�ڽ���<? endif; ?><? endif; ?></li>
			<li>����ܶ<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num'] = '';$_tmp = $this->magic_vars['acc']['borrow_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>�ѻ��ܶ <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['borrow_num1'])) $this->magic_vars['acc']['borrow_num1'] = '';$_tmp = $this->magic_vars['acc']['borrow_num1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>��վ�渶δ����<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['borrow_num2'])) $this->magic_vars['acc']['borrow_num2'] = '';$_tmp = $this->magic_vars['acc']['borrow_num2'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>����ܶ<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['success_account'])) $this->magic_vars['acc']['success_account'] = '';$_tmp = $this->magic_vars['acc']['success_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>�����ܶ<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['collection_yes'])) $this->magic_vars['acc']['collection_yes'] = '';$_tmp = $this->magic_vars['acc']['collection_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>�����ܶ<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['collection_wait'])) $this->magic_vars['acc']['collection_wait'] = '';$_tmp = $this->magic_vars['acc']['collection_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
			<li>������ö�ȣ� <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = ''; echo $this->magic_vars['acc']['credit']; ?><? endif; ?></li>
			<li>�������ö�ȣ� <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = ''; echo $this->magic_vars['acc']['credit_use']; ?><? endif; ?></li>
			<li></li>
			<li>�����ܶ  <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = ''; echo $this->magic_vars['acc']['borrow_vouch']; ?><? endif; ?></li>
			<li>���ý�����ȣ� <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = ''; echo $this->magic_vars['acc']['borrow_vouch_use']; ?><? endif; ?></li>
			<li></li>
			<li>Ͷ�ʵ����ܶ<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['tender_vouch'])) $this->magic_vars['acc']['tender_vouch'] = ''; echo $this->magic_vars['acc']['tender_vouch']; ?><? endif; ?></li>
			<li>����Ͷ�ʵ�����ȣ� <? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>δ����<? else: ?>��<? if (!isset($this->magic_vars['acc']['tender_vouch_use'])) $this->magic_vars['acc']['tender_vouch_use'] = ''; echo $this->magic_vars['acc']['tender_vouch_use']; ?><? endif; ?></li>
			<li></li>
			<? unset($_magic_vars);unset($data); ?>
		</ul>
		<p class="text-red">ע���������˻��ʽ������ڱ�Ľ��ȫ��������Զ����ٹ�����ʾ.</p>
	</div>
	
	<!--��������-->
	<div class="list-tab-con tab-pane fade" id="hkxy">
		<ul class="clearfix">
			<li>��� <? if (!isset($this->magic_vars['var']['borrow_all']['success'])) $this->magic_vars['var']['borrow_all']['success'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> �γɹ�</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['false'])) $this->magic_vars['var']['borrow_all']['false'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['false'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ������</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['wait'])) $this->magic_vars['var']['borrow_all']['wait'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> �ʴ�����</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_success'])) $this->magic_vars['var']['borrow_all']['pay_success'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ���ѳɹ����� </li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_advance'])) $this->magic_vars['var']['borrow_all']['pay_advance'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_advance'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ����ǰ����</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expiredyes'])) $this->magic_vars['var']['borrow_all']['pay_expiredyes'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expiredyes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> �ʳٻ���</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expired30in'])) $this->magic_vars['var']['borrow_all']['pay_expired30in'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expired30in'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ��30��֮�ڵ����ڻ���</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expired30'])) $this->magic_vars['var']['borrow_all']['pay_expired30'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expired30'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> �ʳ���30������ڻ���</li>
			<li><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expiredno'])) $this->magic_vars['var']['borrow_all']['pay_expiredno'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expiredno'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ������δ����</li>
		</ul>
	</div>
	
	
	<!--��������-->
	<div class="list-tab-con tab-pane fade" id="grxx">
		<ul class="clearfix">
			<li>�� ��<? if (!isset($this->magic_vars['var']['user']['sex'])) $this->magic_vars['var']['user']['sex']=''; ;if (  $this->magic_vars['var']['user']['sex']==1): ?>��<? else: ?>Ů<? endif; ?></li>
			<li>�� �䣺<? if (!isset($this->magic_vars['var']['user']['birthday'])) $this->magic_vars['var']['user']['birthday'] = '';$_tmp = $this->magic_vars['var']['user']['birthday'];$_tmp = $this->magic_modifier("age_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>��</li>
			<li>����״����<? if (!isset($this->magic_vars['var']['userinfo']['marry'])) $this->magic_vars['var']['userinfo']['marry'] = '';$_tmp = $this->magic_vars['var']['userinfo']['marry'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
			<li>�Ļ��̶ȣ�<? if (!isset($this->magic_vars['var']['userinfo']['education'])) $this->magic_vars['var']['userinfo']['education'] = '';$_tmp = $this->magic_vars['var']['userinfo']['education'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
			<li>ÿ�����룺 <? if (!isset($this->magic_vars['var']['userinfo']['income'])) $this->magic_vars['var']['userinfo']['income'] = '';$_tmp = $this->magic_vars['var']['userinfo']['income'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>Ԫ</li>
			<li>�� ����<? if (!isset($this->magic_vars['var']['userinfo']['shebao'])) $this->magic_vars['var']['userinfo']['shebao'] = '';$_tmp = $this->magic_vars['var']['userinfo']['shebao'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>  </li>
			<li>ס��������<? if (!isset($this->magic_vars['var']['userinfo']['housing'])) $this->magic_vars['var']['userinfo']['housing'] = '';$_tmp = $this->magic_vars['var']['userinfo']['housing'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
			<li>�Ƿ񹺳���<? if (!isset($this->magic_vars['var']['userinfo']['car'])) $this->magic_vars['var']['userinfo']['car'] = '';$_tmp = $this->magic_vars['var']['userinfo']['car'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
			<li>�Ƿ����ڣ�<? if (!isset($this->magic_vars['var']['userinfo']['late'])) $this->magic_vars['var']['userinfo']['late'] = '';$_tmp = $this->magic_vars['var']['userinfo']['late'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
		</ul>
	</div>

	<!--Ͷ�꽱��-->
	<div class="list-tab-con tab-pane fade" id="tbjl">
		<ul class="clearfix">
		<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;if (  $this->magic_vars['var']['borrow']['award']==0): ?>
			<li><font color="#FF0000" size="3">û�н���</font></li>
		<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==1): ?>
			<li>������ʽ��������</li>
			<li>������<? if (!isset($this->magic_vars['var']['borrow']['part_account'])) $this->magic_vars['var']['borrow']['part_account'] = ''; echo $this->magic_vars['var']['borrow']['part_account']; ?>Ԫ</li>
			<li>����������<? if (!isset($this->magic_vars['var']['borrow']['is_false'])) $this->magic_vars['var']['borrow']['is_false']=''; ;if (  $this->magic_vars['var']['borrow']['is_false']==1): ?>Ͷ��ʧ��Ҳ����<? else: ?>Ͷ���ҳɹ�����ͨ������н���<? endif; ?></li>
		<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==2): ?>
			<li>������ʽ������������</li>
			<li>����������<? if (!isset($this->magic_vars['var']['borrow']['funds'])) $this->magic_vars['var']['borrow']['funds'] = ''; echo $this->magic_vars['var']['borrow']['funds']; ?>%</li>
			<li>����������<? if (!isset($this->magic_vars['var']['borrow']['is_false'])) $this->magic_vars['var']['borrow']['is_false']=''; ;if (  $this->magic_vars['var']['borrow']['is_false']==1): ?>Ͷ��ʧ��Ҳ����<? else: ?>Ͷ���ҳɹ�����ͨ������н���<? endif; ?></li>
		<? endif; ?>
		</ul>	
	</div>
	
	
	
	<!--�������¼-->
	<div class="list-tab-con tab-pane fade" id="hkjl">
	<div class="alert">
	  <span>�������¼(ֻ��ʾ����������10����¼) >> <a href="/u/<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = ''; echo $this->magic_vars['var']['user']['user_id']; ?>/borrowlist" >����Ļ�����ϸ�˵�</a></span>
	</div>
	
	<table  border="0"  cellspacing="0"  width="100%"  class="table table-striped  table-condensed">
			<tr  >
			  <td ><strong>������</strong> </td>
			  <td ><strong>����</strong></td>
			  <td ><strong>���Ϣ</strong></td>
			  <td ><strong>ʵ�ʵ�������</strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetRepaymentList';$data = array('status'=>'0,2','limit'=>'10','var'=>'vat','order'=>'repayment_time','user_id'=>$this->magic_vars['var']['user']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRepaymentList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['vat']):
?>
			<tr  >
			  <td ><a href="/invest/a<? if (!isset($this->magic_vars['vat']['borrow_id'])) $this->magic_vars['vat']['borrow_id'] = ''; echo $this->magic_vars['vat']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['vat']['borrow_name'])) $this->magic_vars['vat']['borrow_name'] = ''; echo $this->magic_vars['vat']['borrow_name']; ?></a></td> 
			  <td ><? if (!isset($this->magic_vars['vat']['order'])) $this->magic_vars['vat']['order'] = ''; echo $this->magic_vars['vat']['order']+1; ?>/<? if (!isset($this->magic_vars['vat']['time_limit'])) $this->magic_vars['vat']['time_limit'] = ''; echo $this->magic_vars['vat']['time_limit']; ?></td>
			  <td >��<? if (!isset($this->magic_vars['vat']['repayment_account'])) $this->magic_vars['vat']['repayment_account'] = ''; echo $this->magic_vars['vat']['repayment_account']; ?></td>
			  <td ><? if (!isset($this->magic_vars['vat']['repayment_time'])) $this->magic_vars['vat']['repayment_time'] = '';$_tmp = $this->magic_vars['vat']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
	</div> <!-- id="myTabContent" -->
	<br>
	<!--Ͷ���¼-->
	<ul class="list-tab clearfix">
		<li class="active"><a href="#tbjl" data-toggle="tab">Ͷ���¼</a></li>
	</ul>
	<div id="myTabContent2" class="tab-content">
	<div class="list-tab-con tab-pane fade in active" id="tbinfo">
	
		<div class="loan-credit-info">
            <span style="margin-right:60px;">Ŀ��Ͷ���ܶ��<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?>Ԫ</span>
            <span style="margin-right:60px;">���Ͷ����㣺��<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = ''; echo $this->magic_vars['var']['borrow']['lowest_account']; ?>Ԫ </span>
             <span style="margin-right:60px;">ʣ���Ͷ����<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?>Ԫ</span>
            <? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status'] == 5): ?><? if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']='';if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']=''; ;elseif (  $this->magic_vars['var']['borrow']['account_yes'] >=  $this->magic_vars['var']['borrow']['account']): ?><img src="/themes/soonmes/img/tender_end.png"><? else: ?><a href="?detail=true"><img src="/themes/soonmes/img/tender-start.png" style="margin-top:-10px;"></a><? endif; ?>
            
        </div>
     </div>
     
	
		<table  border="0"  cellspacing="0"  width="100%" class="table table-striped  table-condensed">
			<tr align="center">
			 <!--  <td ><strong>���</strong> </td> -->
			  <td ><strong>Ͷ����</strong> </td>
			  
			  <td ><strong>Ͷ����</strong></td>
			  <td ><strong>��Ч���</strong></td>
			  <!-- <td ><strong>��ǰ������</strong></td> -->
			  
			  <td ><strong>Ͷ��ʱ��</strong></td>
			  <td ><strong>״̬ </strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetTenderList';$data = array('limit'=>'all','var'=>'vat','borrow_id'=>$this->magic_vars['var']['borrow']['id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['vat']):
?>
			<tr <? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username']='';if (!isset($this->magic_vars['vat']['username'])) $this->magic_vars['vat']['username']=''; ;if (  $this->magic_vars['_G']['user_result']['username']== $this->magic_vars['vat']['username']): ?> bgcolor ="#ECF0F0"  <? endif; ?>>
			   <!-- <td align="center" ><? if (!isset($this->magic_vars['vat']['i'])) $this->magic_vars['vat']['i'] = ''; echo $this->magic_vars['vat']['i']; ?></td> -->
               <td align="center" ><a href="/u/<? if (!isset($this->magic_vars['vat']['user_id'])) $this->magic_vars['vat']['user_id'] = ''; echo $this->magic_vars['vat']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['vat']['username'])) $this->magic_vars['vat']['username'] = ''; echo $this->magic_vars['vat']['username']; ?></a></td>
                <td align="center" ><? if (!isset($this->magic_vars['vat']['money'])) $this->magic_vars['vat']['money'] = ''; echo $this->magic_vars['vat']['money']; ?>Ԫ</td>
                <td align="center" ><? if (!isset($this->magic_vars['vat']['tender_account'])) $this->magic_vars['vat']['tender_account'] = '';$_tmp = $this->magic_vars['vat']['tender_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ</td>
			 <!--  <td align="center" ><? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</td> -->
			  <td align="center"><? if (!isset($this->magic_vars['vat']['addtime'])) $this->magic_vars['vat']['addtime'] = '';$_tmp = $this->magic_vars['vat']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
			  <td align="center"><? if (!isset($this->magic_vars['vat']['tender_account'])) $this->magic_vars['vat']['tender_account']='';if (!isset($this->magic_vars['vat']['money'])) $this->magic_vars['vat']['money']=''; ;if (  $this->magic_vars['vat']['tender_account']== $this->magic_vars['vat']['money']): ?>ȫ��ͨ��<? else: ?>����ͨ��<? endif; ?></td>
			</tr>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
		
	</div>
	
	
	<div class="box-detail clearfix" style="margin-top:10px;width:1000px">
	<!--���ۿ�ʼ-->
		<script src="/index.php?comment&type=list&code=<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1&epage=10"></script>
			<div class="content_title ">
				<span class="floatr">����������<font color="#FF0000"><script>document.write(result['total'])</script></font> �� <a href="/index.php?comment&type=lists&code=borrow&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1" target="_blank">�鿴��������</a></span><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pinglun.gif" align="absmiddle"/>&nbsp; ����
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
						//ʵ����������
						jQuery(function(){
							jQuery('#face1').qqFace({
								id : 'facebox1', //������ӵ�ID
								assign:'comment_content', //���Ǹ��ؼ���ֵ
								path:'/themes/face/face/'	//�����ŵ�·��
							});
						 
						});


						</script>
						   
						<div><strong>����һ��</strong></div>
						<div class="tools" style="width:904px;">
							<div id="face1" class="faceBtn">��ӱ���</div>
							<div><textarea  rows="6" id="comment_content" name="comment" style="width:890px;height:50px;"></textarea></div>
						</div>
						<div><span id="subInfo">��֤�룺<input type="text" id="valicode" name="valicode" size="11" maxlength="4"><img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" alt="���ˢ��" src="/plugins/index.php?q=imgcode"></img></span>
						<span class="floatr"><input type="image" id="pinglun" onclick="pinglun('<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>','<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>')" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pinglun_content.gif" /></span></div>
				    <? else: ?>
                        ����<a href="/index.php?user&q=going/login">��¼</a>����ͨ��<a href="/index.php?user&q=code/user/realname">ʵ����֤</a>���ܷ�������!
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
						jQuery.jBox.tip("��֤���������!", 'warning');
						return;
					}
					if (comment==""){
						 
						jQuery.jBox.tip("���۲���Ϊ��!", 'warning');
					}else{
						jQuery.jBox.tip("�����ύ..", 'loading');
						

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
			
			
			<!--���۽���-->
	</div>
</div>

<!--main end-->
		
<div id="modal_dialog" style="display:none" title="<? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?>">
   <div class="pop-tb clearfix">

	<div class="pop-tb-con clearfix">
		<div class="pop-tb-l">
			<ul>
				<li>����ˣ�<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?></li>
				<li>������<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?></li>
				<li>���������: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %</li>
				<li>�Ѿ���ɣ�<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> %</li>
				<li>������: ��<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?></li>
				<li>�������: <? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1): ?> 
						<? if (!isset($this->magic_vars['var']['borrow']['time_limit_day'])) $this->magic_vars['var']['borrow']['time_limit_day'] = ''; echo $this->magic_vars['var']['borrow']['time_limit_day']; ?>��
						<? else: ?>
						<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>���� 
						<? endif; ?>
				</li>
				<li>���ʽ: 
						<? if (!isset($this->magic_vars['var']['borrow']['isday'])) $this->magic_vars['var']['borrow']['isday']='';if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['isday']==1  && $this->magic_vars['var']['borrow']['is_lz']==0): ?> 
							����ȫ���
							<? if (!isset($this->magic_vars['var']['borrow']['is_mb'])) $this->magic_vars['var']['borrow']['is_mb']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_mb']==1): ?>
							ϵͳ�Զ�����
							<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
							�����Զ��ع�
							<? else: ?>
							<? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
							<? endif; ?>
				</li>
			</ul>
		</div>
		<div class="pop-tb-r">
		<form action="/index.php?user&q=code/borrow/tender" name="form1" onsubmit="return check_form(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)" method="post" >
			<ul>
				<li>���Ŀ����� <? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> Ԫ <a href="/index.php?user&q=code/account/recharge_new">��Ҫ��ֵ</a></li>
				<li>���Ͷ���ܶ<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account']=''; ;if (  $this->magic_vars['var']['borrow']['most_account']<=0): ?>������<? else: ?><? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = ''; echo $this->magic_vars['var']['borrow']['most_account']; ?>Ԫ<? endif; ?></li>
				
				<? if (!isset($this->magic_vars['var']['borrow']['is_lz'])) $this->magic_vars['var']['borrow']['is_lz']=''; ;if (  $this->magic_vars['var']['borrow']['is_lz']==1): ?>
					<li>��С��ת��λ��100 Ԫ
					<li>���Ϲ�:<? if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes'] = ''; echo $this->magic_vars['var']['borrow']['account_yes']/100; ?> ��&nbsp;&nbsp;
					��ʣ:<b class="max"><? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']/100; ?></b>��</li>
					<li id="flow_num">���������
						<input class="less" value="-" type="button" onclick="less()">
						<input type="text"  class="nums" id="flow_count" name="flow_count" value="1" size="5">
						<input class="add" value="+" type="button" onclick="add()">
					</li>
					<input type="hidden" id="is_lz" name="is_lz" size="11" value="1">
				<? else: ?>
					<? if (!isset($this->magic_vars['var']['borrow']['is_kuai'])) $this->magic_vars['var']['borrow']['is_kuai']=''; ;if (  $this->magic_vars['var']['borrow']['is_kuai'] == 1): ?><li><font color="red">����ǰ����Ͷ���ٱ��ʽ�Ϊ:<? if (!isset($this->magic_vars['var']['borrow']['kuai_usemoney'])) $this->magic_vars['var']['borrow']['kuai_usemoney'] = ''; echo $this->magic_vars['var']['borrow']['kuai_usemoney']; ?>Ԫ</font><a href="/index.php?user&q=code/account/recharge_new">���Ͻ������³�ֵ</a></li><? endif; ?>
					<li>��ǰ������: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %</li>
					<li>Ͷ���<input tabindex="1" type="text" id="money" name="money" size="11" 
					<? if (!isset($this->magic_vars['var']['borrow']['is_kuai'])) $this->magic_vars['var']['borrow']['is_kuai']=''; ;if (  $this->magic_vars['var']['borrow']['is_kuai'] == 1): ?>
					onkeyup="value=value.replace(/[^0-9.]/g,'')">Ԫ <input type="button" onclick="inputAll(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['kuai_usemoney'])) $this->magic_vars['var']['borrow']['kuai_usemoney'] = '';$_tmp = $this->magic_vars['var']['borrow']['kuai_usemoney'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);" 
					<? else: ?>
					onkeyup="value=value.replace(/[^0-9.]/g,'')">Ԫ <input type="button" onclick="inputAll(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);" 
					<? endif; ?>
					value="�Զ�����ȫ�����"></li>
				<? endif; ?>
				<li>֧�����룺<? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><a href="/index.php?user&q=code/user/paypwd" target="_blank"><font color="red">������һ��֧����������,������󷵻ظ�ҳ��ˢ����Ч</font></a><? else: ?><input type="password" name="paypassword" id="paypassword" size="11" tabindex="2" /><? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['pwd'])) $this->magic_vars['var']['borrow']['pwd']=''; ;if (  $this->magic_vars['var']['borrow']['pwd'] != ""): ?>��������룺<input type="text" name="dxbPWD" id="dxbPWD" size="11" tabindex="3" /><? endif; ?>
				</li>
				<li>&nbsp;&nbsp;��֤�룺<input type="text" id="yzmcode" name="yzmcode" tabindex="4" size="10" style="margin-right:5px;" maxlength="4" /> <img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;" />
				</li>
			</ul>
			<p class="mar20"><input type="submit" class="btn-action" value="ȷ�ϸ���" id="qrfk"><p>
			<p class="text-red"><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>" />ע��:���ȷ�ϱ�ʾ����ͬ��֧����Ͷ���</p>
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
			jQuery.jBox.tip("Ͷ�����Ϊ��!", 'warning');
			return false;
		 }else if (paypassword==""){
			jQuery.jBox.tip("֧�����벻��Ϊ��!", 'warning');
			return false;
		 }else if (account>use_money ){
 			jQuery.jBox.tip("���Ŀ������С������Ͷ��ҪͶ�����ȳ�ֵ!", 'warning');
			return false;
		}else if (account>most && most>0){
			jQuery.jBox.tip("Ͷ����ܴ�������޶�"+most+"Ԫ", 'warning');
			return false;
		 }else if(account<lowest && lowest>0){
			 jQuery.jBox.tip("Ͷ����ܵ�����С�޶�"+lowest+"Ԫ", 'warning');
			return false;
		 }
		 if (valicode.length!=4){
			 jQuery.jBox.tip("��֤����������!", 'warning');
			return false;
		 }
		if(confirm('ȷ��ҪͶ��'+account+'Ԫ��ȷ���˽�����ȡ��')){
				//�����ύ��ť add by weego 20120818
				  decument.getElementById("qrfk").disabled=true;
				  jQuery.jBox.tip("�����ύ..", 'loading');
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
		sDay = iDay + "��"; 
	   }
	   sTime =sDay + iHour + "Сʱ" + iMinute + "����" + iSecond + "��";
	  
			if(iTime==0){
			   clearTimeout(Account);
			   sTime="<span style='color:green'>ʱ�䵽�ˣ�</span>";
			}else{
			   Account = setTimeout("RemainTime()",1000);
			}
			iTime=iTime-1;
    }else if(islz==1){
		 sTime="<span style='color:green'>��ֹͣ��ת</span>";
	}else{
        sTime="<span style='color:red'>�˱��ѹ��ڣ�</span>";
		jQuery('#invest_dialog').html("�Ѿ�����");
		jQuery('#invest_dialog').attr("disabled",true); 
    } 
	jQuery('#endtime').html(sTime);

}
	   function add(){//����
	      var num=jQuery("#flow_count").val();
		  var maxNum = parseInt(jQuery(".max").text());
		  num=parseInt(num)+1;
		  if(num>maxNum){
			   num=maxNum;//��ȡ��ǰ�Ķ���� ������  �ж��Ƿ���ڣ�����ʣ�µķ��� �Ͳ�������
           }
			jQuery("#flow_count").val(num);
		 }
	   function less(){ //����
		   var num=jQuery("#flow_count").val();
		   num=parseInt(num)-1;
		   if(num<1){
			  num=1;    //��ȡ��ǰ�Ķ������Сֵ  �ж��Ƿ�С��0��С��0 �Ͳ��ڼ���
			}
           jQuery("#flow_count").val(num);
		   }

	
</script>

<? unset($_magic_vars);unset($data); ?>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>