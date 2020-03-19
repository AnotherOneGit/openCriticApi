@extends('layout')

@section('content')
    @forelse ($games as $game)
        <h2><a href="{{ $game->id }}">{{ $game->name }}</a></h2>
        <img src="{{ $game->bannerScreenshot }}" alt=""/>
    @empty
        <p>No relevant games yet</p>
    @endforelse
@endsection
