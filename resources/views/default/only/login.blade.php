@extends('default/pub/base')

@section('title')
登陆
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			@include('default.pub.loginbox')
		</div>
	</div>
</div>
@endsection