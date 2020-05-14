<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>openCriticApi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/skeleton.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <style>
        .page-item {
            display: inline-block;
            padding: 9px;
            font-weight: bolder;
            font-size: x-large;
        }
    </style>
</head>
<body>
    <div class="container" style="text-align: center">
        <div style="background: #e5af2f; text-align: center">
            <a href="https://opencritic.com"><img src="/logo-light.png" alt=""></a>
        </div>

        <div class="links" style="text-align: center">
            <a class="button {{ Request::path()==='/' ? 'button-primary' : ''}}" href="/">Main</a>
            <a class="button {{ Request::is('game*') ? 'button-primary' : ''}}" href="{{ route('game.index') }}">Games</a>
            <a class="button {{ Request::is('platform*') ? 'button-primary' : ''}}" href="{{ route('platform.index') }}">Platforms</a>
            <a class="button {{ Request::is('genre*') ? 'button-primary' : ''}}" href="/genre">Genres</a>
        </div>
        @yield('content')
    </div>
</body>
</html>
