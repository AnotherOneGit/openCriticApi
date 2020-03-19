<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    <div class="container">
        <div class="title m-b-md">
            openCriticApi
        </div>

        <div class="links">
            <a class="button {{ Request::path()==='/' ? 'button-primary' : ''}}" href="/">Main</a>
            <a class="button {{ Request::is('game*') ? 'button-primary' : ''}}" href="game">Games</a>
            <a class="button {{ Request::path()==='platform' ? 'button-primary' : ''}}" href="platform">Platforms</a>
            <a class="button {{ Request::path()==='genre' ? 'button-primary' : ''}}" href="genre">Genres</a>
        </div>
        @yield('content')
    </div>
</body>
</html>
