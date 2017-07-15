<?php

// 独立页面
Route::group(['namespace' => 'Only'], function(){
	// 首页
	Route::get('/', 'IndexController@index')->name('index');
	// 登陆
	Route::get('/login', 'SecurityController@login')->name('login');
	// 登陆提交
	Route::post('/land', 'SecurityController@land')->name('land');
	// 注册
	Route::get('/register', 'SecurityController@register')->name('register');
	// 注册提交
	Route::post('/join', 'SecurityController@join')->name('join');
	// 忘记密码
	Route::get('/forgetpsw', 'SecurityController@forgetpsw')->name('forgetpsw');
	// 图片验证码
	Route::get('/piccode', 'SecurityController@piccode')->name('piccode');
	// 后台登陆
	Route::group(['prefix' => 'adinto'], function(){
		// 登陆
		Route::get('/login', 'SecurityController@adlogin')->name('adlogin');
		// 登陆提交
		Route::post('/land', 'SecurityController@adland')->name('adland');
	});
});
Route::group(['prefix' => 'admin'], function(){
	Route::group(['namespace' => 'Admin'],function(){
		// 后台首页
	    Route::get('/', 'BaseController@index')->name('adminindex');
		// 网站设置
	    Route::get('/sets', 'BaseController@sets')->name('adminsets');
		// 菜单设置
	    Route::get('/setmenu', 'BaseController@setmenu')->name('adminsetmenu');
		// banner设置
	    Route::get('/setbanner', 'BaseController@setbanner')->name('adminsetbanner');
		// 管理员列表
	    Route::get('/adusers', 'BaseController@adusers')->name('adminadusers');
		// 添加管理员
	    Route::get('/adusers/add', 'BaseController@addadusers')->name('adminaddadusers');
		// 修改管理员
	    Route::get('/adusers/info/{id}', 'BaseController@infoadusers')->where('id','[0-9]+')->name('admininfoadusers');
		// 修改管理员权限
	    Route::get('/adusers/power/{id}', 'BaseController@poweradusers')->where('id','[0-9]+')->name('adminpoweradusers');
		// 管理员日志
	    Route::get('/adusers/log/{id?}', 'BaseController@logadusers')->where('id','[0-9]+')->name('adminlogadusers');
	});
	Route::group(['prefix' => 'tools','namespace' => 'Tools'],function(){
		// 功能列表
	    Route::get('/', 'AdminController@toollist')->name('admintoollist');
		// 功能管理
	    Route::get('/info/{id}', 'AdminController@toolinfo')->where('id','[0-9]+')->name('admintoolinfo');
	    // 会员功能
	    Route::get('/utools/{id}', 'AdminController@utools')->where('id','[0-9]+')->name('adminusertools');
	});
	Route::group(['prefix' => 'process','namespace' => 'Process'],function(){
		// 流程列表
	    Route::get('/', 'AdminController@processlist')->name('adminprocesslist');
		// 流程编辑
	    Route::get('/info/{id}', 'AdminController@processinfo')->where('id','[0-9]+')->name('adminprocessinfo');
		// 接口列表
	    Route::get('/port', 'AdminController@portlist')->name('adminportlist');
		// 接口编辑
	    Route::get('/port/{id}', 'AdminController@portinfo')->where('id','[0-9]+')->name('adminportinfo');
		// 流程接口使用列表
	    Route::get('/useport', 'AdminController@useportlist')->name('adminuseportlist');
		// 流程接口使用编辑
	    Route::get('/useport/{id}', 'AdminController@useportinfo')->where('id','[0-9]+')->name('adminuseportinfo');
	});
	Route::group(['prefix' => 'users','namespace' => 'User'],function(){
		// 会员列表
	    Route::get('/', 'AdminController@index')->name('adminuserindex');
		// 会员编辑
	    Route::get('/info/{id}', 'AdminController@userinfo')->where('id','[0-9]+')->name('adminuserinfo');
		// 添加会员
	    Route::get('/add', 'AdminController@useradd')->name('adminuseradd');
	});
});

// 会员中心
Route::group(['prefix' => 'user'], function(){
	Route::group(['namespace' => 'User'],function(){
		// 会员中心首页
	    Route::get('/', 'BaseController@index')->name('userindex');
		// 频道管理
	    Route::get('/sitemanage', 'BaseController@sitemanage')->name('usersitemanage');
		// 支付记录
	    Route::get('/payed', 'BaseController@payed')->name('userpayed');
		// 收益记录
	    Route::get('/gains', 'BaseController@gains')->name('usergains');
		// 信息中心
	    Route::get('/message', 'BaseController@message')->name('usermessage');
	});
});

// 新闻中心
Route::group(['prefix' => 'news','namespace' => 'News'], function(){
	// 新闻中心首页
    Route::get('/', 'BaseController@index')->name('newsindex');
	// 新闻分类
	Route::get('/types', 'BaseController@types')->name('newstypes');
	// 新闻列表
    Route::get('/list', 'BaseController@list')->name('newslist');
	// 新闻详情
    Route::get('/info/{id}', 'BaseController@info')->where('id','[0-9]+')->name('newsinfo');
});

// 帮助中心
Route::group(['prefix' => 'help'], function(){
	Route::group(['namespace' => 'Help'],function(){
		// 帮助首页
    	Route::get('/', 'BaseController@index')->name('helpindex');
		// 帮助分类
    	Route::get('/types', 'BaseController@types')->name('helptypes');
		// 帮助列表
	    Route::get('/list', 'BaseController@list')->name('helplist');
		// 帮助详情
	    Route::get('/info/{id}', 'BaseController@info')->where('id','[0-9]+')->name('helpinfo');
	});
});

// 功能中心
Route::group(['prefix' => 'tools'], function(){
	Route::group(['namespace' => 'Tools'],function(){
		// 功能中心首页
	    Route::get('/', 'BaseController@index')->name('toolsindex');
		// 功能列表
	    Route::get('/list', 'BaseController@list')->name('toolslist');
		// 功能详情
	    Route::get('/info/{id}', 'BaseController@info')->where('id','[0-9]+')->name('toolsinfo');
		// 购买功能
	    Route::get('/shopping/{id}', 'BaseController@shoping')->where('id','[0-9]+')->name('toolsshoping');
	});
});

// 站点
Route::group(['prefix' => '{site}','where'=>['site'=>'[a-z0-9]+']], function($site){
	Route::group(['namespace' => 'Tools'],function(){
		// 功能中心首页
	    Route::get('/', 'SiteController@index')->name('siteindex');
	});
});