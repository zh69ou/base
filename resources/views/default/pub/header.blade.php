<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">A6VI</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="/">首页</a>
        </li>
        <li class="">
          <a href="#">实用功能</a>
        </li>
        <li class="">
          <a href="#">新闻资讯</a>
        </li>
        <li class="">
          <a href="#">帮助中心</a>
        </li>
        <li class="">
          <a href="#">会员中心</a>
        </li>
        <li class="">
          <a href="#">企业站点</a>
        </li>
      </ul>
      @unless (Auth::check())
      <ul class="nav navbar-nav navbar-right">
        @if(Route::currentRouteName()!='login')
        <li>
          <a data-target="#loginbox" role="button" data-toggle="modal">登录</a>
        </li>
        @endif
        <li>
          <a href="javascript:">注册</a>
        </li>
      </ul>
      @else
      @endunless
    </div>
  </div>
</nav>