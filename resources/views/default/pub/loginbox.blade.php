<style type="text/css" media="screen">
  .form-signin {
        max-width: 360px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
      }
  .form-signin p{
    text-align: center;
  }
  .form-signin .btn i{
    float: left;
    border-right: 1px solid #fff;
    padding-right: 10px;
    line-height: 25px;
    height: 25px;
  }
</style>
@include('default.pub.prompt')
<form class="form-signin" id="landbox" method="post">
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
  <button class="btn btn-large btn-lg btn-block btn-primary" type="button" id="landsub">登录</button>
  <div class="clearfix">
    <a class="btn btn-lg pull-left">忘记密码？</a>
    <a class="btn btn-lg pull-right">注册</a>
  </div>
  <div class="navbar-text">其他登录方式</div>
  <button type="button" class="btn btn-success btn-block"><i class="fa fa-wechat"></i>微信</button>
  <button type="button" class="btn btn-primary btn-block"><i class="fa fa-qq"></i>QQ</button>
  <button type="button" class="btn btn-danger btn-block"><i class="fa fa-weibo"></i>微博</button>
  <button type="button" class="btn btn-info btn-block"><i class="fa fa-renren"></i>人人</button>
</form>