@extends('layout')

@section('content')
    <h1>{{ $game->name }}</h1>
    <img src="{{ $game->bannerScreenshot }}" alt="{{ $game->name }}">
{{--    <p>{{ $platform_Game->name }}</p>--}}
@endsection
