<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
<!--����Ŀ ��ʼ-->

<?
$this->magic_vars['_G']['uurl'] = url_format($this->magic_vars['_G']['nowurl'],"order");
$this->magic_vars['_G']['epurl'] = url_format($this->magic_vars['_G']['nowurl'],"epage");
?>

<!--����Ŀ ����-->
<? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']==late): ?>
<div id="main" class="clearfix">
	<ul id="tab" class="list-tab clearfix">
		<li class="active"><a href="#tb" data-toggle="tab">���ڵĽ���</a></li>
	</ul>
<? $this->magic_vars['query_type']='GetLateList';$data = array('var'=>'loop','late_day'=>'1');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetLateList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
<ul class="list-main">
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
			<li>
				<img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" class="pic" />
				<div class="list-main-info-sub">
				
					<ul class="sub-col1">
						<li><a href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" title="<? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?>"><? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?></a></li>
						<li>�Ա�<? if (!isset($this->magic_vars['var']['sex'])) $this->magic_vars['var']['sex']=''; ;if (  $this->magic_vars['var']['sex']==1): ?>��<? else: ?>Ů<? endif; ?></li>
						<li>���֤:<? if (!isset($this->magic_vars['var']['card_id'])) $this->magic_vars['var']['card_id'] = ''; echo $this->magic_vars['var']['card_id']; ?></li>
					</ul>
					<ul>
						<li ><font color="#FF0000">Ƿ���ܶ��<? if (!isset($this->magic_vars['var']['late_account'])) $this->magic_vars['var']['late_account'] = ''; echo $this->magic_vars['var']['late_account']; ?></font></li>
						<li >Email��<? if (!isset($this->magic_vars['var']['email'])) $this->magic_vars['var']['email'] = ''; echo $this->magic_vars['var']['email']; ?></li>
						<li>�绰��<? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone'] = ''; echo $this->magic_vars['var']['phone']; ?></li>
					</ul>
					<ul>
						<li ><font color="#FF0000">���ڱ�����<? if (!isset($this->magic_vars['var']['late_num'])) $this->magic_vars['var']['late_num'] = ''; echo $this->magic_vars['var']['late_num']; ?>��</font></li>
						<li>��վ����������<? if (!isset($this->magic_vars['var']['late_webnum'])) $this->magic_vars['var']['late_webnum'] = '';$_tmp = $this->magic_vars['var']['late_webnum'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></li>
						<li>���������:<? if (!isset($this->magic_vars['var']['late_numdays'])) $this->magic_vars['var']['late_numdays'] = ''; echo $this->magic_vars['var']['late_numdays']; ?>��</li>
					</ul>
					<ul>
						<li ><font color="#FF0000">���ڵأ�<? if (!isset($this->magic_vars['var']['area'])) $this->magic_vars['var']['area'] = '';$_tmp = $this->magic_vars['var']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></font></li>
						<li></li>
						<li>QQ��<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?></li>
					</ul>
				</div>
			</li>
		<? endforeach; endif; unset($_from); ?>
</ul>
<? unset($_magic_vars); ?>
</div>
<? else: ?>
<!--header-end-->
<div id="main" class="clearfix investlist">

	<div class="box">
			<div class="bannerBar m_b_15">
				<p class="pic">
					<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/banner_03.jpg">
				</p>
				<!-- ������ -->
				<!--<div class="pop_club">
					 <div class="hd"></div>
					<div class="bg">
						<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>���ɾ����ʱ����·���ͽ����ķ�ӯ���Ի�Ա��֯������ƽ̨Ͷ����Ϊ��Ա����ΪͶ����֮����й�ͨ���������˽�ܽ���ƽ̨��</div>
					<div class="ft">
						<a href="#"><img width="110" height="53"
							src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/btn_jr.png"></a>
					</div>
				</div>
				<div class="pop_link">
					<a href="#">������</a> | <a href="#">ר������</a>
				</div> -->
				<!-- end ������ -->
			</div>
			<div class="box-title">��Ʒ�б�</div>
		<div class="box-con">
			
		
        <div class="searchBar">
      <!--   <form action="" method="get">
					<div class="hd clearfix">
						<div class="fl conditions">
							<label class="th">Ͷ�ʽ��</label> <span class="td"><input
								type="text" class="input_search" name="q_l_account2" size="20"
								value="<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" />Ԫ</span> <label class="th">�껯������</label>
							<span class="td"> <select style="width: 150px;"
								class="input_search" name="q_apr" id="q_apr">
									<option value="">û������</option>
									<option value="1" <? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr']=''; ;if (  $_REQUEST['q_apr']=='1'): ?>selected<? endif; ?> >12%����</option>
									<option value="2" <? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr']=''; ;if (  $_REQUEST['q_apr']=='2'): ?>selected<? endif; ?> >12%-16%</option>
									<option value="3" <? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr']=''; ;if (  $_REQUEST['q_apr']=='3'): ?>selected<? endif; ?> >16%����</option>
							</select>
							</span> <label class="th">����</label> <span class="td"> <select
								style="width: 150px;" class="input_search" name="q_lmt"
								id="q_lmt">
									<option value="">û������</option>
									<option value="1" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']=='1'): ?>selected<? endif; ?> >3��������</option>
									<option value="2" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']=='2'): ?>selected<? endif; ?> >3-6����</option>
									<option value="3" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']=='3'): ?>selected<? endif; ?> >6-9����</option>
									<option value="4" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']=='4'): ?>selected<? endif; ?> >9-12����</option>
									<option value="5" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']=='5'): ?>selected<? endif; ?> >12��������</option>
							</select>
							</span>
						</div>
						<span class="fr">
							<li><input type="submit"
								class="ico_sprite btnnew btn_view_02 f_14" id="search_btn"
								value="��������" /></li>
							<li><input type="hidden" name="type"
								value="<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>" /></li> <a href="#" class="ico_sprite btnnew btn_view_02 f_14">��������</a>
						</span>
					</div>
					</form> -->
<!-- 			<div class="bg select_brand">
              <p class="m_b_10">���������������ɸѡ</p>
              
              <dl>
                <dt>Ͷ�����</dt>
                <dd>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['f_type'])) $_REQUEST['f_type']=''; ;if (  $_REQUEST['f_type']==''): ?>class="curr"<? endif; ?>>����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=1&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['f_type'])) $_REQUEST['f_type']=''; ;if (  $_REQUEST['f_type']=='1'): ?>class="curr"<? endif; ?>>����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=2&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['f_type'])) $_REQUEST['f_type']=''; ;if (  $_REQUEST['f_type']=='2'): ?>class="curr"<? endif; ?>>���</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=3&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['f_type'])) $_REQUEST['f_type']=''; ;if (  $_REQUEST['f_type']=='3'): ?>class="curr"<? endif; ?>>����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=4&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['f_type'])) $_REQUEST['f_type']=''; ;if (  $_REQUEST['f_type']=='4'): ?>class="curr"<? endif; ?>>����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=5&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['f_type'])) $_REQUEST['f_type']=''; ;if (  $_REQUEST['f_type']=='5'): ?>class="curr"<? endif; ?>>����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=6&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['f_type'])) $_REQUEST['f_type']=''; ;if (  $_REQUEST['f_type']=='6'): ?>class="curr"<? endif; ?>>���ý��</a></div>
                </dd>
              </dl>
              <dl>
                <dt>Ԥ���껯���棺</dt>
                <dd>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&q_apr=&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr']=''; ;if (  $_REQUEST['q_apr']==''): ?>class="curr"<? endif; ?>>����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&q_apr=1&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr']=''; ;if (  $_REQUEST['q_apr']=='1'): ?>class="curr"<? endif; ?>>12%����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&q_apr=2&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr']=''; ;if (  $_REQUEST['q_apr']=='2'): ?>class="curr"<? endif; ?>>12%-16%</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&q_apr=3&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr']=''; ;if (  $_REQUEST['q_apr']=='3'): ?>class="curr"<? endif; ?>>16%����</a></div>
                </dd>
              </dl>
              <dl>
                <dt>Ͷ�����ޣ�</dt>
                <dd>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&q_lmt=&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']==''): ?>class="curr"<? endif; ?>>����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&q_lmt=1&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']=='1'): ?>class="curr"<? endif; ?>>3��������</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&q_lmt=2&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']=='2'): ?>class="curr"<? endif; ?>>3-6����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&q_lmt=3&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']=='3'): ?>class="curr"<? endif; ?>>6-9����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&q_lmt=4&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']=='4'): ?>class="curr"<? endif; ?>>9-12����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&q_lmt=5&q_l_account1=<? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1'] = ''; echo $_REQUEST['q_l_account1']; ?>&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_l_account2=<? if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2'] = ''; echo $_REQUEST['q_l_account2']; ?>" <? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt']=''; ;if (  $_REQUEST['q_lmt']=='5'): ?>class="curr"<? endif; ?>>12��������</a></div>
                </dd>
              </dl>
              <dl>
                <dt>Ͷ���ż���</dt>
                <dd>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=&q_l_account1=&q_l_account2=&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>" <? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1']='';if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2']=''; ;if (  $_REQUEST['q_l_account1']=='' &&  $_REQUEST['q_l_account2']==''): ?>class="curr"<? endif; ?>>����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=&q_l_account1=&q_l_account2=100000&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>" <? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1']='';if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2']=''; ;if (  $_REQUEST['q_l_account1']=='' &&  $_REQUEST['q_l_account2']=='100000'): ?>class="curr"<? endif; ?>>10w����</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=&q_l_account1=100000&q_l_account2=200000&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>" <? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1']='';if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2']=''; ;if (  $_REQUEST['q_l_account1']=='100000' &&  $_REQUEST['q_l_account2']=='200000'): ?>class="curr"<? endif; ?>>10-20w</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=&q_l_account1=200000&q_l_account2=500000&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>" <? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1']='';if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2']=''; ;if (  $_REQUEST['q_l_account1']=='200000' &&  $_REQUEST['q_l_account2']=='500000'): ?>class="curr"<? endif; ?>>20-50w</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=&q_l_account1=500000&q_l_account2=1000000&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>" <? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1']='';if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2']=''; ;if (  $_REQUEST['q_l_account1']=='500000' &&  $_REQUEST['q_l_account2']=='1000000'): ?>class="curr"<? endif; ?>>50-100w</a></div>
                  <div><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&f_type=&q_l_account1=1000000&q_l_account2=&q_apr=<? if (!isset($_REQUEST['q_apr'])) $_REQUEST['q_apr'] = ''; echo $_REQUEST['q_apr']; ?>&q_lmt=<? if (!isset($_REQUEST['q_lmt'])) $_REQUEST['q_lmt'] = ''; echo $_REQUEST['q_lmt']; ?>" <? if (!isset($_REQUEST['q_l_account1'])) $_REQUEST['q_l_account1']='';if (!isset($_REQUEST['q_l_account2'])) $_REQUEST['q_l_account2']=''; ;if (  $_REQUEST['q_l_account1']=='1000000' &&  $_REQUEST['q_l_account2']==''): ?>class="curr"<? endif; ?>>100w����</a></div>
                </dd>
              </dl>
          </div>-->
        </div> 
        <!-- end ���� -->
        <!-- �����б� -->
        <!--
        <? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop1','biaoType'=>isset($_REQUEST['biaoType'])?$_REQUEST['biaoType']:'','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','q_apr'=>isset($_REQUEST['q_apr'])?$_REQUEST['q_apr']:'','q_lmt'=>isset($_REQUEST['q_lmt'])?$_REQUEST['q_lmt']:'','type'=>isset($_REQUEST['type'])?$_REQUEST['type']:'','use'=>isset($_REQUEST['use'])?$_REQUEST['use']:'','account1'=>isset($_REQUEST['account1'])?$_REQUEST['account1']:'','account2'=>isset($_REQUEST['account2'])?$_REQUEST['account2']:'','q_l_account1'=>isset($_REQUEST['q_l_account1'])?$_REQUEST['q_l_account1']:'','q_l_account2'=>isset($_REQUEST['q_l_account2'])?$_REQUEST['q_l_account2']:'','limittime'=>isset($_REQUEST['limittime'])?$_REQUEST['limittime']:'','award'=>isset($_REQUEST['award'])?$_REQUEST['award']:'','province'=>isset($_REQUEST['province'])?$_REQUEST['province']:'','city'=>isset($_REQUEST['city'])?$_REQUEST['city']:'','page'=>isset($_REQUEST['page'])?$_REQUEST['page']:'','epage'=>isset($_REQUEST['epage'])?$_REQUEST['epage']:'','order'=>$_REQUEST['order'],'site_id'=>$this->magic_vars['_G']['site_result']['site_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop1']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop1']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop1']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop1']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop1']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
		<div class="searchList">
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
        
            <ul class="list">
                <li class="clearfix">
                   
                    <b class="pic fl"><img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" style="height: 100px;width: 100px;" /></b>
                    <span class="sear_btn fr">
                      <a class="btn_blueBg03" href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" style="*width:150px;">
                        <span class="fl"></span>
                            <span class="fr"></span>
                            <label class="txt">�鿴����</label>
                      </a>
                      
                    </span>
                    <div class="num_pr fr">
                      <p>����<em><? if (!isset($this->magic_vars['var']['tender_times'])) $this->magic_vars['var']['tender_times'] = ''; echo $this->magic_vars['var']['tender_times']; ?>��</em>�����Ϲ�</p>
                      <p>���裤<? if (!isset($this->magic_vars['var']['other'])) $this->magic_vars['var']['other'] = ''; echo $this->magic_vars['var']['other']; ?>����</p>
                   
                      
                      <p>ʣ��ʱ�䣺<span id="endtime<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><? if (!isset($this->magic_vars['var']['lave_time'])) $this->magic_vars['var']['lave_time'] = ''; echo $this->magic_vars['var']['lave_time']; ?> </span></p>
                    </div>
                    <div class="titItem fl">
                        <a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"> <h3><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></h3></a>
                        <? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']==1): ?><a href="/question/a144.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" border="0" alt= /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;if (  $this->magic_vars['var']['is_mb']==1): ?><a href="/question/a145.html" target="_blank" rel="tooltip" title="�������ϵͳ�Զ�����"
><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/miao.jpg"  border="0"   /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_fast'])) $this->magic_vars['var']['is_fast']=''; ;if (  $this->magic_vars['var']['is_fast']==1): ?><a href="/question/a146.html" target="_blank" rel="tooltip" title="��Ѻ����С΢��ҵ�ֳ���˵�Ѻ����"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/fast.gif" border="0"  alt=  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['danbao'])) $this->magic_vars['var']['danbao']=''; ;if (  $this->magic_vars['var']['danbao']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/dan.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_kuai'])) $this->magic_vars['var']['is_kuai']=''; ;if (  $this->magic_vars['var']['is_kuai']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/kuai.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lz.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_jin'])) $this->magic_vars['var']['is_jin']=''; ;if (  $this->magic_vars['var']['is_jin']==1): ?><a href="/question/a184.html" target="_blank" rel="tooltip" title="��ֵ�������û�����վ�ʲ��������Ľ���"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jin.gif"   border="0"  alt= /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['biao_type'])) $this->magic_vars['var']['biao_type']=''; ;if (  $this->magic_vars['var']['biao_type']=="xin"): ?><a href="/question/a143.html" target="_blank" rel="tooltip" title="���ñ����Ը����û�����״�����"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/xin.jpg"   border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?><a href="#" target="_blank" rel="tooltip" title="����ǰ������"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/day.jpg"   border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;if (  $this->magic_vars['var']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif" align="absmiddle"  border="0"/>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']='';if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1 ||  $this->magic_vars['var']['award']==2): ?><a  rel="tooltip" title="Ͷ�ʸý������Ϣ���ж���Ľ���" href="#" ><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif"  border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['pwd'])) $this->magic_vars['var']['pwd']=''; ;if (  $this->magic_vars['var']['pwd'] != ""): ?><a rel="tooltip" title="�������Ͷ���ʱ����Ҫ��������Ľ���" href="#"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lock.gif"  border="0"  /></a>&nbsp;<? endif; ?>
                        <p class="sort">���������</p>
                        
                    </div>
                    <div class="dateInfo fl p_t_35">
                        <p>Ԥ���껯���棺<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>%</p>
                        <p>���ޣ�<? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?> 
					<? if (!isset($this->magic_vars['var']['time_limit_day'])) $this->magic_vars['var']['time_limit_day'] = ''; echo $this->magic_vars['var']['time_limit_day']; ?>��
					<? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;elseif (  $this->magic_vars['var']['is_mb']==1): ?>
					 ��������
					<? else: ?>
					<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?>���� 
					<? endif; ?></p>
                        <p>Ͷ���ż�����<? if (!isset($this->magic_vars['var']['lowest_account'])) $this->magic_vars['var']['lowest_account'] = ''; echo $this->magic_vars['var']['lowest_account']; ?>Ԫ</p>
                    </div>
                   <? $data = array('var'=>'bor','id'=>$this->magic_vars['var']['id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['bor'] = borrowClass::GetInvest($data);if(!is_array($this->magic_vars['bor'])){ $this->magic_vars['bor']=array();}?>
                    <div class="info p_t_35">
                        <p>�����;��<? if (!isset($this->magic_vars['bor']['borrow']['use_name'])) $this->magic_vars['bor']['borrow']['use_name'] = ''; echo $this->magic_vars['bor']['borrow']['use_name']; ?></p>
                    </div>
                    <? unset($_magic_vars);unset($data); ?>
                </li>

            </ul>
            <? endforeach; endif; unset($_from); ?>
        </div>
        	
				<br/><div align="center" class="showpage"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
			
       <? unset($_magic_vars); ?>
       -->
        <!-- end �����б� -->	
        
        
        
        
        
        
        
        
        
        
        
        
        
		</div>
		
		 <!-- ����ץȡ�б� 
        <? $this->magic_vars['query_type']='GetListOther';$data = array('var'=>'loop','biaoType'=>isset($_REQUEST['biaoType'])?$_REQUEST['biaoType']:'','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','q_apr'=>isset($_REQUEST['q_apr'])?$_REQUEST['q_apr']:'','q_lmt'=>isset($_REQUEST['q_lmt'])?$_REQUEST['q_lmt']:'','type'=>isset($_REQUEST['type'])?$_REQUEST['type']:'','use'=>isset($_REQUEST['use'])?$_REQUEST['use']:'','account1'=>isset($_REQUEST['account1'])?$_REQUEST['account1']:'','account2'=>isset($_REQUEST['account2'])?$_REQUEST['account2']:'','q_l_account1'=>isset($_REQUEST['q_l_account1'])?$_REQUEST['q_l_account1']:'','q_l_account2'=>isset($_REQUEST['q_l_account2'])?$_REQUEST['q_l_account2']:'','limittime'=>isset($_REQUEST['limittime'])?$_REQUEST['limittime']:'','award'=>isset($_REQUEST['award'])?$_REQUEST['award']:'','province'=>isset($_REQUEST['province'])?$_REQUEST['province']:'','city'=>isset($_REQUEST['city'])?$_REQUEST['city']:'','page'=>isset($_REQUEST['page'])?$_REQUEST['page']:'','epage'=>isset($_REQUEST['epage'])?$_REQUEST['epage']:'','order'=>$_REQUEST['order'],'site_id'=>$this->magic_vars['_G']['site_result']['site_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetListOther($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
		<div class="searchList">
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
        
            <ul class="list">
                <li class="clearfix">
                   
                    <b class="pic fl"><img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" style="height: 100px;width: 100px;" /></b>
                    <span class="sear_btn fr">
                      <a class="btn_blueBg03" href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" style="*width:150px;">
                        <span class="fl"></span>
                            <span class="fr"></span>
                            <label class="txt">�鿴����</label>
                      </a>
                      
                    </span>
                    <div class="num_pr fr">
                      <p>����<em><? if (!isset($this->magic_vars['var']['tender_times'])) $this->magic_vars['var']['tender_times'] = ''; echo $this->magic_vars['var']['tender_times']; ?>��</em>�����Ϲ�</p>
                      <p>���裤<? if (!isset($this->magic_vars['var']['other'])) $this->magic_vars['var']['other'] = ''; echo $this->magic_vars['var']['other']; ?>����</p>
                     
                      
                      <p>ʣ�ࣺ<span ><? if (!isset($this->magic_vars['var']['progress'])) $this->magic_vars['var']['progress'] = ''; echo $this->magic_vars['var']['progress']; ?> </span></p>
                    </div>
                    <div class="titItem fl">
                        <a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"> <h3><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></h3></a>
                        <? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']==1): ?><a href="/question/a144.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" border="0" alt= /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;if (  $this->magic_vars['var']['is_mb']==1): ?><a href="/question/a145.html" target="_blank" rel="tooltip" title="�������ϵͳ�Զ�����"
><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/miao.jpg"  border="0"   /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_fast'])) $this->magic_vars['var']['is_fast']=''; ;if (  $this->magic_vars['var']['is_fast']==1): ?><a href="/question/a146.html" target="_blank" rel="tooltip" title="��Ѻ����С΢��ҵ�ֳ���˵�Ѻ����"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/fast.gif" border="0"  alt=  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['danbao'])) $this->magic_vars['var']['danbao']=''; ;if (  $this->magic_vars['var']['danbao']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/dan.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_kuai'])) $this->magic_vars['var']['is_kuai']=''; ;if (  $this->magic_vars['var']['is_kuai']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/kuai.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lz.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_jin'])) $this->magic_vars['var']['is_jin']=''; ;if (  $this->magic_vars['var']['is_jin']==1): ?><a href="/question/a184.html" target="_blank" rel="tooltip" title="��ֵ�������û�����վ�ʲ��������Ľ���"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jin.gif"   border="0"  alt= /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['biao_type'])) $this->magic_vars['var']['biao_type']=''; ;if (  $this->magic_vars['var']['biao_type']=="xin"): ?><a href="/question/a143.html" target="_blank" rel="tooltip" title="���ñ����Ը����û�����״�����"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/xin.jpg"   border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?><a href="#" target="_blank" rel="tooltip" title="����ǰ������"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/day.jpg"   border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;if (  $this->magic_vars['var']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif" align="absmiddle"  border="0"/>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']='';if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1 ||  $this->magic_vars['var']['award']==2): ?><a  rel="tooltip" title="Ͷ�ʸý������Ϣ���ж���Ľ���" href="#" ><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif"  border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['pwd'])) $this->magic_vars['var']['pwd']=''; ;if (  $this->magic_vars['var']['pwd'] != ""): ?><a rel="tooltip" title="�������Ͷ���ʱ����Ҫ��������Ľ���" href="#"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lock.gif"  border="0"  /></a>&nbsp;<? endif; ?>
                        <p class="sort">���������</p>-->
                        <!-- <p class="lBtn" style="padding-left:10px;"><a href="#" class="ico_sprite btnnew btn_view_01 hover">�� ��</a></p> -->
                    <!-- </div>
                    <div class="dateInfo fl p_t_35">
                        <p>Ԥ���껯���棺<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>%</p>
                        <p>���ޣ�<? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?> 
					<? if (!isset($this->magic_vars['var']['time_limit_day'])) $this->magic_vars['var']['time_limit_day'] = ''; echo $this->magic_vars['var']['time_limit_day']; ?>��
					<? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;elseif (  $this->magic_vars['var']['is_mb']==1): ?>
					 ��������
					<? else: ?>
					<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?>���� 
					<? endif; ?></p>
                        <p>Ͷ���ż�����<? if (!isset($this->magic_vars['var']['lowest_account'])) $this->magic_vars['var']['lowest_account'] = ''; echo $this->magic_vars['var']['lowest_account']; ?>Ԫ</p>
                    </div>
                   <? $data = array('var'=>'bor','id'=>$this->magic_vars['var']['id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['bor'] = borrowClass::GetInvest($data);if(!is_array($this->magic_vars['bor'])){ $this->magic_vars['bor']=array();}?>
                    <div class="info p_t_35">
                        <p>�����;��<? if (!isset($this->magic_vars['bor']['borrow']['use_name'])) $this->magic_vars['bor']['borrow']['use_name'] = ''; echo $this->magic_vars['bor']['borrow']['use_name']; ?></p>
                    </div>
                    <? unset($_magic_vars);unset($data); ?>
                </li>

            </ul>
            <? endforeach; endif; unset($_from); ?>
        </div>
				<br/><div align="center" class="showpage"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
			
       <? unset($_magic_vars); ?>-->
        <!-- end ����ץȡ�б� -->	
		
		
	</div>

	<!-- <ul id="tab" class="list-tab clearfix">
		<li class="active"><a href="#tb" data-toggle="tab">����</a></li>
		<li><a href="#glb" data-toggle="tab">��Ѻ��</a></li>
		<li><a href="#jzb" data-toggle="tab">��ֵ��</a></li>
		<li><a href="#dbb" data-toggle="tab">������</a></li>
		<li><a href="#mb" data-toggle="tab">���</a></li>
		<li><a href="#xyb" data-toggle="tab">���ñ�</a></li>
		<li class="list-tab-sel"><input type="checkbox" value="2" name="sel"> ֻ��ʾ�н���</li>
	</ul> -->
	
	<!-- <div class="list-select clearfix">
		<div class="list-select-l">����
		
		<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='account_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_down&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">����</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='account_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">����</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>">���</a><? endif; ?>
			</span> 
			<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='apr_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_down&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">���ʡ�</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='apr_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">���ʡ�</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>">����</a><? endif; ?>
			</span> 
			<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='jindu_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_down&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">���ȡ�</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='jindu_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">���ȡ�</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>">����</a><? endif; ?>
			</span> 
			<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='credit_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_down&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">���á�</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='credit_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">���á�</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>">����</a><? endif; ?>
			</span>  
		
		</div> 
		<div class="list-select-r2">��Χ��<select><option value="">0��5000</option><option value="244">5000��10000</option></select>
		��ʾ��<a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=20"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_20.gif"  /></a> <a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=40"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_40.gif" /></a>
		</div>
	
		<div >
		��ʾ�� <a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=20"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_20.gif"  /></a> 
			<a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=40"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_40.gif" /></a> 
			<a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=60"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_60.gif" /></a>
		</div>
		
		
	</div> -->
	
<!--���б�-->
 <? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','biaoType'=>isset($_REQUEST['biaoType'])?$_REQUEST['biaoType']:'','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','q_apr'=>isset($_REQUEST['q_apr'])?$_REQUEST['q_apr']:'','q_lmt'=>isset($_REQUEST['q_lmt'])?$_REQUEST['q_lmt']:'','type'=>isset($_REQUEST['type'])?$_REQUEST['type']:'','use'=>isset($_REQUEST['use'])?$_REQUEST['use']:'','account1'=>isset($_REQUEST['account1'])?$_REQUEST['account1']:'','account2'=>isset($_REQUEST['account2'])?$_REQUEST['account2']:'','limittime'=>isset($_REQUEST['limittime'])?$_REQUEST['limittime']:'','award'=>isset($_REQUEST['award'])?$_REQUEST['award']:'','province'=>isset($_REQUEST['province'])?$_REQUEST['province']:'','city'=>isset($_REQUEST['city'])?$_REQUEST['city']:'','page'=>isset($_REQUEST['page'])?$_REQUEST['page']:'','epage'=>isset($_REQUEST['epage'])?$_REQUEST['epage']:'','order'=>$_REQUEST['order'],'site_id'=>$this->magic_vars['_G']['site_result']['site_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
		<div class="listmain">
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
			<div class="list-div">
				<img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" class="productimg" />
				<ul class="list-ul">
						<li class="titleli">
                        <a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"12:...");echo $_tmp;unset($_tmp); ?>&nbsp;&nbsp;</a>
						<? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']==1): ?><a href="/question/a144.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" border="0" alt= /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;if (  $this->magic_vars['var']['is_mb']==1): ?><a href="/question/a145.html" target="_blank" rel="tooltip" title="�������ϵͳ�Զ�����"
><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/miao.jpg"  border="0"   /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_fast'])) $this->magic_vars['var']['is_fast']=''; ;if (  $this->magic_vars['var']['is_fast']==1): ?><a href="/question/a146.html" target="_blank" rel="tooltip" title="��Ѻ����С΢��ҵ�ֳ���˵�Ѻ����"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/fast.gif" border="0"  alt=  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['danbao'])) $this->magic_vars['var']['danbao']=''; ;if (  $this->magic_vars['var']['danbao']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/dan.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_kuai'])) $this->magic_vars['var']['is_kuai']=''; ;if (  $this->magic_vars['var']['is_kuai']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/kuai.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lz.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_jin'])) $this->magic_vars['var']['is_jin']=''; ;if (  $this->magic_vars['var']['is_jin']==1): ?><a href="/question/a184.html" target="_blank" rel="tooltip" title="��ֵ�������û�����վ�ʲ��������Ľ���"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jin.gif"   border="0"  alt= /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['biao_type'])) $this->magic_vars['var']['biao_type']=''; ;if (  $this->magic_vars['var']['biao_type']=="xin"): ?><a href="/question/a143.html" target="_blank" rel="tooltip" title="���ñ����Ը����û�����״�����"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/xin.jpg"   border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?><a href="#" target="_blank" rel="tooltip" title="����ǰ������"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/day.jpg"   border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;if (  $this->magic_vars['var']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif" align="absmiddle"  border="0"/>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']='';if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1 ||  $this->magic_vars['var']['award']==2): ?><a  rel="tooltip" title="Ͷ�ʸý������Ϣ���ж���Ľ���" href="#" ><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif"  border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['pwd'])) $this->magic_vars['var']['pwd']=''; ;if (  $this->magic_vars['var']['pwd'] != ""): ?><a rel="tooltip" title="�������Ͷ���ʱ����Ҫ��������Ľ���" href="#"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lock.gif"  border="0"  /></a>&nbsp;<? endif; ?>
                        </li>
                        <li>������<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>Ԫ</li>
						<li>�����ʣ�<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>%</li>
						<li>
                            <div class="float_left">����ɣ�</div>
                            <div class="jindu float_left">
                                <div class="tiaotiao" style="width:<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
                            </div>
                            <div class="float_left">&nbsp;<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%</div>
						</li>
						<li>ʣ��ʱ�䣺<span id="endtime<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><? if (!isset($this->magic_vars['var']['lave_time'])) $this->magic_vars['var']['lave_time'] = ''; echo $this->magic_vars['var']['lave_time']; ?> </span></li>
						<li>
						<span style="float:left">���õȼ���</span><img class="rank" src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['credit_pic'])) $this->magic_vars['var']['credit_pic'] = '';$_tmp = $this->magic_vars['var']['credit_pic'];$_tmp = $this->magic_modifier("default",$_tmp,"credit_s11.gif");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['credit_jifen'])) $this->magic_vars['var']['credit_jifen'] = '';$_tmp = $this->magic_vars['var']['credit_jifen'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��"  />
						�� �᣺<? if (!isset($this->magic_vars['var']['user_area'])) $this->magic_vars['var']['user_area'] = '';$_tmp = $this->magic_vars['var']['user_area'];$_tmp = $this->magic_modifier("area",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?>
						</li>
						<li>������ޣ�<? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?> 
					<? if (!isset($this->magic_vars['var']['time_limit_day'])) $this->magic_vars['var']['time_limit_day'] = ''; echo $this->magic_vars['var']['time_limit_day']; ?>��
					<? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;elseif (  $this->magic_vars['var']['is_mb']==1): ?>
					 ��������
					<? else: ?>
					<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?>���� 
					<? endif; ?></li>
				</ul>
				<div class="list-btnbox">
					<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>
						<? if (!isset($this->magic_vars['var']['repayment_account'])) $this->magic_vars['var']['repayment_account']='';if (!isset($this->magic_vars['var']['repayment_yesaccount'])) $this->magic_vars['var']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['repayment_account'] ==  $this->magic_vars['var']['repayment_yesaccount']): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">�ѻ���</a>
						<? else: ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">������</a>
						<? endif; ?>
					<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==5): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">�û�ȡ��</a>
					<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==4): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">����ʧ��</a>
					<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==2): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">�ȴ�����</a>
					<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale'] < 100): ?>
						<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">�����Ϲ�</a>
						<? else: ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">����Ͷ��</a>
						<? endif; ?>
					<? else: ?>
						<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">���Ϲ���</a>
						<? else: ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">�ȴ�����</a>
						<? endif; ?>
					<? endif; ?>
					<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
						
					<? endif; ?>
                    <a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="xiangxi">< �����ϸ ></a>
				</div>
			</div>
		
	<? endforeach; endif; unset($_from); ?>
		</div>

				<br/><div align="center" class="showpage"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
	
	<? unset($_magic_vars); ?> 
</div>
<? endif; ?>

<!--main end-->
<script type="text/javascript">

jQuery(function(){
	jQuery("[rel='tooltip']").tooltip();
});

</script>

<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tab.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>

<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tooltip.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/popover.js"></script>


<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>