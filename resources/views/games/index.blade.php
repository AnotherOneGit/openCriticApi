@extends('layout')

@section('content')
    <p> Count: {{count($games)}} </p>
    <hr>
    <form action="/game">
{{--        <label for="sort">Sort By</label>--}}
{{--        <select name="sort" id="sort">--}}
{{--            <option value="none">none</option>--}}
{{--            <option value="averageScore">Average Score</option>--}}
{{--        </select>--}}
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
        <img src="{{ $game->bannerScreenshot }}" alt="" height="200" width="350"/>
        <h3>Average Score: {{ $game->averageScore }}</h3>
<h4>First Release Year: {{\Carbon\Carbon::parse($game->firstReleaseDate)->format('Y')}}</h4>
            <br>
    @empty
        <br>
        <p>No relevant games yet</p>
    @endforelse
{{--    <div>--}}
{{--        {{ $games->links() }}--}}
{{--    </div>--}}
    <p>That's All Folks!</p>
@endsection
