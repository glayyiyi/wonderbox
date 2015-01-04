var META_DATA_OF_INTERFACE= {
	"4.2.1" :{
		"full_name":"用户开户",
		"CmdId":"UserRegister",
		"Version":"10",
		"params":{
			"MerCustId":["text","",true,'万得测试商户客户号：6000060000273476'],
			"BgRetUrl":["text","",true,'http://yourdomain.com/notify_url.php'],
			"RetUrl":["text","",false,'http://yourdomain.com/return_url.php'],
			"UsrId":["text","",false,''],
			"UsrName":["text","",false,''],
			"IdType":["text","",false,''],
			"IdNo":["text","",false,''],
			"UsrMp":["text","",false,''],
			"UsrEmail":["text","",false,''],
			"MerPriv":["text","",false,''],
			"CharSet":["text","",false,"GBK"]
		}
	},
	"4.2.2" :{
		"full_name":"后台用户开户",
		"CmdId":"BgRegister",
		"Version":"10",
		"params":{
			"MerCustId":["text","",true,'万得测试商户客户号：6000060000273476'],
			"UsrId":["text","",true,'商户下的平台用户号,在每个商户下唯一(必须是 6-25 位的半角字符)'],
			"UsrName":["text","",true,'用户的真实姓名'],
			"LoginPwd":["text","",true,'用户登录密码,需拼接在密钥后进行 32 位 md5 加 密 注意:登陆密码的明文长度为 6~16 位,如果不是 会导致无法登陆本平台交易'],
			"TransPwd":["text","",true,'用户交易密码,需拼接在密钥后进行 32 位 md5 加 密 注意:交易密码的明文长度为 6~16 位,如果不是 会导致无法登陆本平台交易'],
			"IdType":["text","",false,'00-- 身份证'],
			"IdNo":["text","",false,'用户证件号码'],
			"UsrMp":["text","",true,'手机号，本平台系统提供按照手机号查询订单的功能'],
			"UsrEmail":["text","",false,'用户email'],
			"MerPriv":["text","",false,'为商户的自定义字段,该字段在交易完成后由 台原样返回。'],
			"CharSet":["text","",false,"GBK"]
		}
	},
	"4.1.4" :{
		"full_name":"子商户信息查询",
		"CmdId":"QueryAccts",
		"Version":"10",
		"params":{
			"MerCustId":["text","",true,'万得测试商户客户号：6000060000273476'],
		}
	}
};