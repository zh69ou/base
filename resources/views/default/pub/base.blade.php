<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@section('title')欢迎光临@show-A6VI</title>
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        @section('ascss')
        <link rel="stylesheet" href="/assets/css/default/only.css">
        @show
    </head>
    <body>
        @include('default/pub/header')
        @yield('content')
        @include('default/pub/footer')
        @section('asjs')
        <script type="text/javascript" src="assets/js/only.js" ></script>
        @show
    </body>
</html>
