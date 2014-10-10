
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
          <div class="topContact"><span>�������ߣ�010-59091009 </span> <span>����ʱ�䣺9:00-18:00 </span> <span>�ٷ�QQȺ��391114833</span></div>
        </div>
        <div class="isRight">
          <div class="topLogin">
          <span class="welcome">
          ���ã��װ�����ý����û�
                    {if $_G.user_id>0}
				  <a href="/?user">{$_G.user_result.username}</a> 
				  <a href="/?user&q=going/logout">[�˳�]</a>
		
				 {else}
				 <a href="/index.action?user&q=going/login">��¼</a> 
				 {if $_G.system.con_is_reg_open } 
				 <a href="/index.action?user&q=going/getreg">ע��</a>
				 {/if}
				 {/if}
          </span>
         
          </div>
        </div>
      </div>
    </div>
    <div class="topBar floatIsTrue">
      <div class="content">
        <div class="logo"><img src="{$tempdir}/statics/images/logo.png" alt="��ý��� - �ջ�,����,ƽ�ȵ�������ƽ̨" /></div>
        <div class="menu">
          <ul id="nav">
          			<li>
						<a href="/" class="highlight">��ҪͶ��</a>
					</li>
					<li>
						<a href="/index.action?user">�ҵ��˻�</a>
					</li>
					<li>
						<a href="/onlineservice/index.html">��ȫ����</a>
					</li>
					<li>
						<a href="/html/aboutus/intro.html">��������</a>
					</li>
            <!-- <li><a href="#">��ҪͶ�� </a></li>
            <li><a href="#">����ָ��</a>
            </li>
            <li><a href="#">��ȫ����</a></li>
            <li><a href="#">��������</a>
              <ul>
                <li><a href="#"> ��˾��� </a></li>
                <li><a href="#"> ��Ʒ����</a></li>
                <li><a href="#"> ҵ��ģʽ</a></li>
                <li><a href="#"> ���չܿ�</a></li>
                <li><a href="#"> Ͷ��ָ��</a></li>
                <li><a href="#"> ����ģʽ</a></li>
              </ul>
            </li>
            <li><a href="#" class="highlight">�ҵ��˻�</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
		<!-- ����ͷ���� -->
<div class="invitePage">
                <div class="banner"></div>
                <div class="inviteAction">
                  <div class="left">
                  <div class="sms">
                  <h3>һ������</h3>
                  <form method="post" name="form1" action="/index.php?user&q=code/user/send_phone">
                  <table>
                        <tr>
                          <th width="80"> ���ŷ��� </th>
                          <td>����ý��ڡ�����{$_G.user_result.realname}��������ý���ƽ̨���������ٶȡ���ý��ڡ���ע����д������{$_G.user_result.username}��
</td>
                        </tr>
                         <tr>
                          <th> �ֻ��� </th>
                          <td><input id="phone" name="phone" type="text" />
                          <input id="content" name="content" type="hidden" value='����{$_G.user_result.realname}��������ý���ƽ̨���������ٶȡ���ý��ڡ���ע����д������{$_G.user_result.username}��{$_G.weburl}'
                          />

</td>
                        </tr>
<!--                          <tr> -->
<!--                           <th> ��֤�� </th> -->
<!--                           <td><input type="text" /></td> -->
<!--                         </tr> -->

                        </table>
                        <a href="#" onclick="sub_form()" class="submit">���Ͷ���</a>
                        </form>
                  </div>
                 <div class="copy"> <h3>�����������ݷ���</h3>
<textarea id='invite' rows="6">��ý���ƽ̨�ĺ���������������
{$_G.weburl}/index.php?user&q=going/reginvite&u={$_U.user_inviteid} </textarea>
<a href="#" onclick="doCopy('invite')" class="copy">����</a></div>
                  </div>
                  <div class="right">
                  
                    <div class="total">
                      <h3>�ܼ�</h3>
                      <table>
                        <tr>
                          <th>����ע�� </th>
                          <th>����Ͷ��</th>
                          <th>�ҵĽ���</th>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>15</td>
                          <td>200</td>
                        </tr>
                      </table>
                    </div>
                    <div class="detail">
                      <h3>��ϸ</h3>
                      <table>
                        <tr>
                          <th> �û��� </th>
                          <th>Ͷ�ʶ�</th>
                          <th>Ͷ����Ŀ</th>
                          <th>Ͷ������</th>
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
		   alert("�������ӵ�ַ���Ƴɹ��������ֱ�Ӹ��Ʒ�����ĺ���");
		 }
		 else{
		   alert("�˹���ֻ����IE����Ч\n\n�����ı�������Ctrl+Aѡ���ٸ���");
		 }
		}
		function sub_form(){
			var username = document.getElementById("phone").value;
			var content = document.getElementById("content").value;
			if(username==""){
				alert("�ֻ����벻��Ϊ��");return;
			}
			if(content==""){
				alert("���ݲ���Ϊ��");return;
			}
			document.forms['form1'].submit();
			document.forms['form1'].elements['sub'].disabled=true;
		}
		</script>
		{/literal}