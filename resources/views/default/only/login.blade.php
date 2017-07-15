@extends('default/pub/base')

@section('title')
登陆
@endsection

@section('ascss')
@parent
<link rel="stylesheet" href="/css/bootstrap-responsive.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
@show


@section('content')
<style type="text/css">
  body {
    padding-bottom: 40px;
  }
</style>
<div class="container">
    @include('default.pub.loginbox')
</div>
@endsection