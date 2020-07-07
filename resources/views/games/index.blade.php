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
        <label>Name
            <input type="text" name="name" value="{{ request()->name }}">
        </label>

        <label for="exclusive">Exclusive
    <select name="exclusive" id="exclusive">
        <option disabled selected value>Select platform</option>
        <option value="Sony" {{ request()->exclusive == 'Sony' ? 'selected' : '' }}>Sony</option>
        <option value="Microsoft"{{ request()->exclusive == 'Microsoft' ? 'selected' : '' }}>Microsoft</option>
        <option value="Nintendo"{{ request()->exclusive == 'Nintendo' ? 'selected' : '' }}>Nintendo</option>
    </select>
        </label>

        <label>Major
{{--            <input type="radio" name="is_major">--}}
            <input type="checkbox" name="is_major" id="is_major" value="true" {{ request()->is_major ? 'checked' : '' }}>
        </label>

        <label for="tier">Tier
        <select name="tier" id="tier">
            <option disabled selected value>All</option>
            <option value="Mighty" {{ request()->tier == 'Mighty' ? 'selected' : ''}}>Mighty!!!</option>
            <option value="Strong" {{ request()->tier == 'Strong' ? 'selected' : ''}}>Strong!!</option>
            <option value="Fair" {{ request()->tier == 'Fair' ? 'selected' : ''}}>Fair!</option>
            <option value="Weak" {{ request()->tier == 'Weak' ? 'selected' : ''}}>Weak</option>
        </select>
        </label>
        <br>

        <button type="submit">Go!</button>
        <a href="/game">All games</a>
    </form>
        <hr>
    @forelse ($games as $game)
            {{count($game->platforms)}}
            <h2><a href="/game/{{ $game->id }}">{{ $game->name }}</a></h2>
{{--        <img src="{{ $game->bannerScreenshot }}" alt="" height="200" width="350"/>--}}
            <p>Major?: {{ $game->isMajorTitle ? 'Major' : 'Minor' }}</p>
            <p>Loot: {{ $game->hasLootBoxes ? 'Yep' : 'Nein' }}</p>
            <strong>{{ $game->tier }}</strong>
        <h3>Average Score: {{ $game->averageScore }}</h3>
<h4>First Release Year: {{\Carbon\Carbon::parse($game->firstReleaseDate)->format('Y')}}</h4>
            <br>
    @empty
        <br>
        <p>No relevant games yet</p>
    @endforelse
{{--        {{ $games->appends($_GET)->links() }}--}}
@endsection
