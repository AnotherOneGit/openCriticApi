@extends('layout')

@section('content')
{{--    <p> Count: {{count($games)}} </p>--}}
<form action="/game">
    <label for="sort">Sort by</label>
    <select name="sort" id="sort">
            <option value="">Select option</option>
            <option value="medianScore">Median Score</option>
            <option value="averageScore">Average Score</option>
            <option value="topCriticScore">Top Critic Score</option>
    </select>
    <input type="checkbox" name="tier" id="tier" value="1">
    <input type="submit" value="Sort!">
</form>
    @forelse ($games as $game)
{{--        @if(count($game->platforms) == 1)--}}
            <h2><a href="game/{{ $game->id }}">{{ $game->name }}</a></h2>
        <img src="{{ $game->bannerScreenshot }}" alt="" height="175" width="350"/>
        <h3>{{ $game->medianScore }}, {{ $game->averageScore }}, {{ $game->topCriticScore }}, {{ $game->tier }}, {{ $game->isMajorTitle }}</h3>
            <br>
{{--        @endif--}}


    @empty
        <br>
        <p>No relevant games yet</p>
    @endforelse
{{--    <p>That's All Folks!</p>--}}
@endsection
