

───────
 代码文件结构
───────

p2p_sdk
  │
  ├lib┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈托管系统接口函数实现文件夹
  │  │
  │  ├chinapnr.conf.php ┈┈┈┈┈┈┈┈┈托管系统接口配置文件
  │  │
  │  ├Chinapnr.class.php┈┈┈┈┈┈┈┈┈托管系统接口请求实现类文件
  │  │
  │  └SecureTool.class.php┈┈┈┈┈┈┈┈托管系统接口安全签名和验签工具类文件
  │   
  ├css┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈托管系统接口演示页面样式文件夹
  │
  ├js ┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈托管系统接口演示页面js脚本文件夹
  │  │
  │  ├app.js ┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈托管系统接口演示页面动作js脚本文件
  │  │
  │  ├jquery-1.7.2.min.js ┈┈┈┈┈┈┈┈托管系统接口演示页面依赖的jquery库文件
  │  │
  │  └meta_of_interface.js┈┈┈┈┈┈┈┈托管系统接口演示页面所有接口元数据文件
  │
  ├service.php┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈托管系统接口演示页面请求转发文件
  │
  ├index.html ┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈托管系统接口演示页面主页面文件
  │
  └readme.txt ┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈使用说明文本

※注意※

1、必须开启curl服务
  使用Crul需要修改服务器中php.ini文件的设置，找到php_curl.dll去掉前面的";"即可

2、需要配置的文件是：
  chinapnr.conf.php

●本代码示例（DEMO）采用curl函数远程HTTP获取数据、采用json_decode()的方法解析json数据。

如果使用其他的HTTP请求方式或者其他的json解析方式，请自行开发。

─────────
 类文件函数结构
─────────

SecureTool.class.php


function SecureTool($priKey, $pubKey)
功能：构造函数
输入：私钥字符串，公钥字符串
输出：

function sign($msg)
功能：使用商户私钥对信息进行签名，返回256位的签名字符
输入：待签名字符串
输出：256位签名字符串

function verify($msg,$sign)
功能：使用汇付公钥对汇付返回的信息进行验签，返回验签是否通过
输入：被签名原文，256位签名字符
输出：true/false 是否通过验签

┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈

Chinapnr.class.php


getInstance()
功能：获取Chinapnr实例
输入：
输出：Chinapnr类实例

！！其他业务功能方法请参考代码注释和接口文档。

──────────
 出现问题，求助方法
──────────

如果在集成汇付天下p2p平台接口时，有疑问或出现问题，可使用下面的链接，提交申请。
http://www.chinapnr.com/p2pdev/
我们会有专门的技术支持人员为您处理




