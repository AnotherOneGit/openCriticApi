@extends('layout')

@section('content')
    <h1>{{ $game->name }}</h1>
    <img src="{{ $game->bannerScreenshot }}" alt="{{ $game->name }}">
    <p>{{ $game->description }}</p>
    <br>
    <p>
        @foreach($game->genres as $genre)
            <a href="{{ route('game.index', ['genre'=>$genre->name]) }}">{{ $genre->name }}</a>
        @endforeach
    </p>

@endsection
