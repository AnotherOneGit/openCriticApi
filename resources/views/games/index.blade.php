@extends('layout')

@section('content')
    <p> Count: {{count($games)}} </p>
    @forelse ($games as $game)
        <h2><a href="game/{{ $game->id }}">{{ $game->name }}</a></h2>
        <img src="{{ $game->bannerScreenshot }}" alt="" height="175" width="350"/>
        <h3>{{ $game->tier }}, {{ $game->medianScore }}, {{ $game->percentile }}</h3>
            @if(count($game->platforms) == 1)
                <h2>Exclusive!</h2>
            @endif
        <br>


    @empty
        <br>
        <p>No relevant games yet</p>
    @endforelse
    <p>That's All Folks!</p>
@endsection
