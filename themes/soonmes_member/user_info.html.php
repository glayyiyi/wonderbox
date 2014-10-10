
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<title>{$_G.system.con_webname}</title>
		<meta name="description" content="{$_G.system.con_description}" />
		<meta name="keywords" content="{$_G.system.con_keywords}" />
		
		<link rel="stylesheet" type="text/css" href="{$tempdir}/statics/css/default/main.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="{$tempdir}/statics/css/invite/invite.css" media="screen"/>
</head>
	<body>
<div id="container">
  <div id="header">
    <div class="topTool">
      <div class="content">
        <div class="isLeft">
          <div class="topContact"><span>服务热线：010-59091009 </span> <span>服务时间：9:00-18:00 </span> <span>官方QQ群：391114833</span></div>
        </div>
        <div class="isRight">
          <div class="topLogin">
          <span class="welcome">
          您好，亲爱的万得金融用户
                    {if $_G.user_id>0}
				  <a href="/?user">{$_G.user_result.username}</a> 
				  <a href="/?user&q=going/logout">[退出]</a>
		
				 {else}
				 <a href="/index.action?user&q=going/login">登录</a> 
				 {if $_G.system.con_is_reg_open } 
				 <a href="/index.action?user&q=going/getreg">注册</a>
				 {/if}
				 {/if}
          </span>
         
          </div>
        </div>
      </div>
    </div>
    <div class="topBar floatIsTrue">
      <div class="content">
        <div class="logo"><img src="{$tempdir}/statics/images/logo.png" alt="万得金融 - 普惠,公开,平等的网络借贷平台" /></div>
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
<div class="invitePage">
                <div class="banner"></div>
                <div class="inviteAction">
                  <div class="left">
                  <div class="sms">
                  <h3>一键发送</h3>
                  <form method="post" name="form1" action="/index.php?user&q=code/user/send_phone">
                  <table>
                        <tr>
                          <th width="80"> 短信发送 </th>
                          <td>【万得金融】我是{$_G.user_result.realname}，我在万得金融平台送你红包，百度“万得金融”，注册填写邀请人{$_G.user_result.username}。
</td>
                        </tr>
                         <tr>
                          <th> 手机号 </th>
                          <td><input id="phone" name="phone" type="text" />
                          <input id="content" name="content" type="hidden" value='我是{$_G.user_result.realname}，我在万得金融平台送你红包，百度“万得金融”，注册填写邀请人{$_G.user_result.username}。{$_G.weburl}'
                          />

</td>
                        </tr>
<!--                          <tr> -->
<!--                           <th> 验证码 </th> -->
<!--                           <td><input type="text" /></td> -->
<!--                         </tr> -->

                        </table>
                        <a href="#" onclick="sub_form()" class="submit">发送短信</a>
                        </form>
                  </div>
                 <div class="copy"> <h3>复制链接内容发送</h3>
<textarea id='invite' rows="6">万得金融平台的红包，点击以下链接
{$_G.weburl}/index.php?user&q=going/reginvite&u={$_U.user_inviteid} </textarea>
<a href="#" onclick="doCopy('invite')" class="copy">复制</a></div>
                  </div>
                  <div class="right">
                  
                    <div class="total">
                      <h3>总计</h3>
                      <table>
                        <tr>
                          <th>好友注册 </th>
                          <th>好友投资</th>
                          <th>我的奖励</th>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                        </tr>
                      </table>
                    </div>
                    <div class="detail">
                      <h3>明细</h3>
                      <table>
                        <tr>
                          <th> 用户名 </th>
                          <th>投资额</th>
                          <th>投资项目</th>
                          <th>投资日期</th>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                          <td>200</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div></body>
</html>
	{literal}
		<script>
		function doCopy(id) { 
		  var codeid;
		  codeid=id;
		 if (document.all){
		   var obj;
		   obj=document.getElementById(codeid);
		   window.clipboardData.setData("text",obj.innerText)
		   alert("邀请链接地址复制成功，你可以直接复制发给你的好友");
		 }
		 else{
		   alert("此功能只能在IE上有效\n\n请在文本域中用Ctrl+A选择再复制");
		 }
		}
		function sub_form(){
			var username = document.getElementById("phone").value;
			var content = document.getElementById("content").value;
			if(username==""){
				alert("手机号码不能为空");return;
			}
			if(content==""){
				alert("内容不能为空");return;
			}
			document.forms['form1'].submit();
			document.forms['form1'].elements['sub'].disabled=true;
		}
		</script>
		{/literal}