@extends('layout')

@section('content')
    <h1>{{ $game->name }}</h1>
    <img src="{{ $game->bannerScreenshot }}" alt="{{ $game->name }}">
    <p>{{ $game->description }}</p>
@endsection
