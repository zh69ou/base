@include('default.pub.prompt')
<form class="form-signin" id="landbox" method="post" action="{{url('land')}}">
  <h2 class="form-signin-heading">登录</h2>
  <div class="form-group form-group-lg">
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-group"></i></span>
      <input type="text" class="form-control" name="username" placeholder="账号/邮箱/手机">
    </div>
  </div>
  {{ csrf_field() }}
  <div class="form-group form-group-lg">
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-key"></i></span>
      <input type="password" class="form-control" name="password" placeholder="密码">
    </div>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="remember" value="remember-me">
      记住密码
    </label>
  </div>
  <button class="btn btn-large btn-lg btn-block btn-primary" type="button" id="landsub"><i class="fa fa-refresh"></i>登录</button>
  <div class="clearfix">
    <a class="btn btn-lg pull-left">忘记密码？</a>
    <a class="btn btn-lg pull-right" href="{{url('register')}}">注册</a>
  </div>
  <div class="navbar-text">其他登录方式</div>
  <button type="button" class="btn btn-success btn-block"><i class="fa fa-wechat"></i>微信</button>
  <button type="button" class="btn btn-primary btn-block"><i class="fa fa-qq"></i>QQ</button>
  <button type="button" class="btn btn-danger btn-block"><i class="fa fa-weibo"></i>微博</button>
  <button type="button" class="btn btn-info btn-block"><i class="fa fa-renren"></i>人人</button>
</form>