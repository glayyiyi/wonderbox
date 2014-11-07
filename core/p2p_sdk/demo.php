<?php
/**
 * 接口调用示例
 * 版本：1.0.0
 * 日期：2012-07-19
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究汇付天下p2p接口使用，只是提供一个参考。
 *
 *************************注意*************************
 * 本文件代码是根据实例页面的展示，统一调用Chinpnr 所封装的接口方法，返回结果展示给使用者。
 * 目的是为用户理解和测试Chinapnr类提供的各种业务接口。
 *
 */
require_once("lib/Chinapnr.class.php");
$chinapnr= Chinapnr::getInstance();
$result= $chinapnr->querySubAccount("6000060000002526");

var_dump($result);