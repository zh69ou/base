@extends('default/pub/base')

@section('title')
注册
@endsection

@section('ascss')
@parent
@show

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-signin" method="post" action="{{url('join')}}" id="reginbox">
        <h2 class="form-signin-heading">注册</h2>
        <div class="form-group form-group-lg">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-group"></i></span>
            <input type="text" class="form-control" name="username" placeholder="账号/邮箱/手机">
          </div>
        </div>
        <div class="form-group form-group-lg">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            <input type="password" class="form-control" name="password" placeholder="密码">
          </div>
        </div>
        <div class="form-group form-group-lg">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="repassword" placeholder="重复密码">
          </div>
        </div>
        <button class="btn btn-large btn-lg btn-block btn-primary" type="button" id="reginsub" >注册</button>
      </form>
    </div>
  </div>
</div>
@endsection