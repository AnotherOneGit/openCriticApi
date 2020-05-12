@extends('layout')

@section('content')
    <p> Count: {{count($games)}} </p>
    @forelse ($games as $game)
{{count($game->platforms)}}
            <h2><a href="/game/{{ $game->id }}">{{ $game->name }}</a></h2>
{{--        <img src="{{ $game->bannerScreenshot }}" alt="" height="175" width="350"/>--}}
        <h3>Median Score: {{ $game->medianScore }}, Average Score: {{ $game->averageScore }}, Top Critic Score: {{ $game->topCriticScore }}</h3>
            <br>
{{--        @endif--}}


    @empty
        <br>
        <p>No relevant games yet</p>
    @endforelse
{{--    <p>That's All Folks!</p>--}}
@endsection
