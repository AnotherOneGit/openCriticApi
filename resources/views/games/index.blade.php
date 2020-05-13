@extends('layout')

@section('content')
    <p> Count: {{count($games)}} </p>
    <hr>
    <form action="/game">
    <label for="exclusive">Exclusive</label>
    <select name="exclusive" id="exclusive">
        <option value="all">Select platform</option>
        <option value="Sony">Sony</option>
        <option value="Microsoft">Microsoft</option>
        <option value="Nintendo">Nintendo</option>
    </select>
    <button type="submit">Go!</button>
        <a href="/game">All games</a>
    </form>
        <hr>
    @forelse ($games as $game)
{{count($game->platforms)}}
            <h2><a href="/game/{{ $game->id }}">{{ $game->name }}</a></h2>
{{--        <img src="{{ $game->bannerScreenshot }}" alt="" height="175" width="350"/>--}}
{{--        <h3>Median Score: {{ $game->medianScore }}, Average Score: {{ $game->averageScore }}, Top Critic Score: {{ $game->topCriticScore }}</h3>--}}
            <br>
{{--        @endif--}}


    @empty
        <br>
        <p>No relevant games yet</p>
    @endforelse
{{--    <p>That's All Folks!</p>--}}
@endsection
