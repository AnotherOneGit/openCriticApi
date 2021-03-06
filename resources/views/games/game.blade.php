@extends('layout')

@section('content')
    <h1>{{ $game->name }}</h1>
    <p>{{ $game->description }}</p>
    <br>
    Total Count Platforms: {{ count($game->platforms) }}
    <p>
        @foreach($game->genres as $genre)
            <a href="{{ route('game.index', ['genre'=>$genre->name]) }}">{{ $genre->name }}</a>
        @endforeach
            <br>
        @foreach($game->platforms as $platform)
            <a href="{{ route('game.index', ['platform'=>$platform->name]) }}">{{ $platform->name }}</a>
        @endforeach
    </p>

@endsection
