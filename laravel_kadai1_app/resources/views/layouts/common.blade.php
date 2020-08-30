<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Laravel_kdai1_app</title>
        <!-- cssをインポート -->
        <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
    </head>
    <body>
    <h1>@yield('title')
        <div class="link">
         <a href="{{url('/login')}}">LOGIN</a>
         <a href="{{url('/register')}}">REGISTER</a>
        </div>
    </h1>
    <div class = "content">@yield('content')</div>
    </body>
</html>