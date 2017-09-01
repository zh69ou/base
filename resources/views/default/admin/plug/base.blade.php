<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@section('title')欢迎光临@show-A6VI</title>
        @section('ascss')
        @show
    </head>
    <body>
        @include('default/admin/plug/header')
        @yield('content')
        @include('default/admin/plug/footer')
        @section('asjs')
        @show
    </body>
</html>