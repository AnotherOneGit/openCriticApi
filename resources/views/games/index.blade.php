@extends('layout')

@section('content')
    @forelse ($games as $game)
        <h2><a href="game/{{ $game->id }}">{{ $game->name }}</a></h2>
        <img src="{{ $game->bannerScreenshot }}" alt=""/>
        <br>
    @empty
        <br>
        <p>No relevant games yet</p>
    @endforelse
    <p>That's All Folks!</p>
@endsection
