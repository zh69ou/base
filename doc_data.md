数据库结构

database:
{
用户结构
	z_users:
	{
		id:编号
		username:名称			[string][18]
		email:邮件				[string][32]
		phone:电话				[string][32]
		password:密码			[string][255]
		himg:头像				[string][255]
		regtime:注册时间			[datetime]
		approve:是否认证			[smallint]
		state:状态（是否可用）	[smallint]
		roles:权限				[json_array]
	}

发送信息
	z_sendinfo:
	{
		id:编号
		senduser:发送人
		uid:用户ID
		type:类型		[string][18]
		-（邮箱email/手机mobile/系统信息sysinfo）
		title:标题
		content:内容	[string][255]
		pswcode:效验码	[string][255]
		intime:添加时间	[datetime]
		utime:发送时间	[datetime]
		state:状态	[smallint]
	}

用户登录
	z_userland:
	{
		id:编号
		uid:用户ID
		type:类型
		-（邮箱email/手机mobile/微信wechat/微博microblog/账号name）
		code:账号
		content:内容
		needpsw:是否需要密码
		autojudge:是否自动判断登陆
		funname:自动判断方法
		backups:备注信息
	}

用户扩展信息
	z_userinfo:
	{
		id:编号
		uid:用户ID
		type:类型
		content:内容
		state:状态
	}

管理员
	adusers:
	{
		id:编号
		username:名称			[string][18]
		email:邮件				[string][32]
		phone:电话				[string][32]
		password:密码			[string][255]
		himg:头像				[string][255]
		regtime:注册时间		[datetime]
		state:状态（是否可用）	[smallint]
		roles:权限				[json_array]
	}

登陆日志
	landinfo:
	{
		id:编号
		uid:登陆人		[integer]
		ip:登陆IP
		site:位置		[smallint]
		-(0后台/1前台)
		time:登陆时间	[datetime]
	}

操作日志
	loginfo:
	{
		id:编号
		ip:登陆IP
		site:位置		[smallint]
		-(0后台/1前台)
		uid:登陆用户	[integer]
		content:操作内容[text]
		time:操作时间	[datetime]
	}

功能
	z_tools:
	{
		id:编号
		codenum:功能编码	[string][32]
		cplist:功能权限		[json_array]
		name:名称			[string][18]
		kword:关键词			[string][225]
		dword:描述			[string][225]
		type:类型			[json_array]
		content:内容			[text]
		price:价格			[string][32]
		sort:排序			[integer]
		recommend:推荐		[boolean]
		state:状态 			[smallint]
		-0停用1使用2测试
	}

功能类型
	z_tooltype:
	{
		id:编号
		pid:父ID		[integer]
		name:名称	[string][18]
		dword:描述	[string][225]
		sort:排序	[integer]
		state:状态 	[smallint]
		-0不显示1显示
	}

<!--
功能属于
	tooltotype:
	{
		id:编号
		toid:功能ID	[integer]
		tyid:类型ID	[integer]
		state:状态 	[smallint]
	}
 -->

站点功能
	z_toolsite:
	{
		id:编号
		tool:功能编码	[string][32]
		site:站点编码	[string][18]
		btime:开始时间	[date]
		etime:结束时间	[date]
		state:状态 		[smallint]
	}

功能购买
	z_toolbuy:
	{
		id:编号
		tool:功能编码	[string][32]
		site:站点编码	[string][18]
		uid:用户ID		[integer]
		btime:开始时间	[date]
		etime:结束时间	[date]
		atime:添加时间	[date]
		ptime:支付时间	[date]
		yprice:原价格	[string][32]
		sprice:实际价格	[string][32]
		backups:备注 	[string][255]
		state:状态 		[smallint]
		-(0取消1等待支付2支付审核3已完成）
	}

素材
	z_fodder:
	{
		id:编号
		site:站点		[string][18]
		title:标题		[string][255]
		type:类型		[string][18]
		content:内容	[text]
		size:大小		[string][18]
		uid:用户ID		[integer]
		otcon:其他信息	[array]
		share:共享		[boolean]
		state:状态 		[smallint]
	}

站点
	z_site:
	{
		id:编号
		name:编码		[string][18]
		uid:用户ID		[integer]
		title:标题		[string][255]
		kword:关键词		[string][255]
		endtime:结束时间	[datetime]
		setcon:配置信息	[array]
		menuls:菜单列表	[array]
		state:状态 		[smallint]
	}

站内菜单
	z_menulist
	{
		id:编号
		pid:父ID			[integer]
		name:编码		[string][18]
		url:地址			[string][255]
		title:标题		[string][255]
		kword:关键词		[string][255]
		type:类型		[string][18]
		-0跳转1下拉
		sort:排序		[integer]
		state:状态 		[smallint]
		-0不显示1显示
	}

站点用户
	z_siteusers:
	{
		id:编号
		site:站点	[string][18]
		uid:用户ID	[integer]
		post:职位	[array]
		content:信息[array]
		sort:排序	[integer]
		state:状态	[smallint]
	}

站点职位
	z_sitepost:
	{
		id:编号
		site:站点	[string][18]
		name:名称	[string][255]
		pid:上级	[integer]
		makeup:结构	[string][255]
		sort:排序	[integer]
		state:状态	[smallint]
	}
}

权限
["ROLE_USER","index_webset","index_indexset","index_navset","index_fodderlist","index_fodderadd","index_fodderdel","index_sueradd","index_suserup","index_suserdel","index_suserclist","index_suserslist","index_suserllist","index_suserzlist","index_suserplist"
,"indexdepotindex","indexdepotlist","indexdepotiadd","indexdepotadd","indexdepotaddlist","indexdepotout","indexdepotoutlist","indexdepotdel","indexdepotdellist","indexdepottype","indexdepottypeadd","indexdepottypedel","indexdepottypestate","indexdepotsql","indexdepotset"
]
["ROLE_ADMIN"]
密码
$13$kWb6YYeuehS/PC6a7m6guu5RED5i9zHphQBI5f62WigB4ow4o4xFC

进销存
{
库存货品
	z_depot:
	{
		id:编号
		site:站点 		[string][18]
		name:名称		[string][255]
		codenum:条码	[string][128]
		stock:库存		[integer]
		fodder:素材		[integer]
		type:类型		[json_array]
		gtime:更新时间	[date]
		sort:排序		[integer]
		state:状态		[smallint]
		-0停用1使用
	}

出入库
	z_depotstate:
	{
		id:编号
		deid:库存ID		[integer]
		itime:插入时间	[date]
		baseprice:进价	[string][18]
		sellprice:售价	[string][18]
		num:数量		[integer]
		backups:备注 	[text]
		state:状态		[smallint]
		-1入库2出库0报废
	}

库存货品类型
	z_depottype:
	{
		id:编号
		pid:父ID	[integer]
		site:站点 	[string][18]
		name:名称	[string][18]
		dword:描述	[string][225]
		sort:排序	[integer]
		state:状态 	[smallint]
	}
}

SELECT DATE_FORMAT(a.itime,'%Y-%m') AS day
,(SELECT sum(num) FROM depotstate WHERE DATE_FORMAT(itime, '%Y-%m') =day AND deid IN (SELECT id FROM depot WHERE site = 'index') AND state=1) AS innum
,(SELECT sum(num) FROM depotstate WHERE DATE_FORMAT(itime, '%Y-%m') =day AND deid IN (SELECT id FROM depot WHERE site = 'index') AND state=2) AS outnum
,(SELECT sum(num) FROM depotstate WHERE DATE_FORMAT(itime, '%Y-%m') =day AND deid IN (SELECT id FROM depot WHERE site = 'index') AND state=0) AS delnum
 FROM depotstate AS a WHERE DATE_FORMAT(a.itime, '%Y-%m') BETWEEN '2016-01'AND '2017-01' AND a.deid IN (SELECT id FROM depot WHERE site = 'index') GROUP BY day;