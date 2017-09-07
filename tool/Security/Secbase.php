<?php
// 登陆相关
namespace Tool\Security;

use App\Model\User;
use Illuminate\Support\Facades\Auth;

abstract class Secbase
{
	// 用户
	protected $user;
	// 用户是否登陆
	public function orland()
	{
		return Auth::check();
	}

	// 获取用户
	public function getuserinfo()
	{
		$this->user = App\Model\User::where('active', 1)->first();
	}

	// 检查是否需要密码登陆
	public function usepsw()
	{

	}

	// 插入用户
	public function insertuser()
	{

	}

	// 绑定用户
	public function bindinguser()
	{

	}

	// 记录登陆
	public function recordland()
	{

	}
}