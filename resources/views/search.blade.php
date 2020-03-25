@extends('layout')

@section('content')
    <form action="/game">

        <label for="sort">Sort by</label>
        <select name="sort" id="sort">
            <option value="">Select option</option>
            <option value="medianScore">Median Score</option>
            <option value="averageScore">Average Score</option>
            <option value="topCriticScore">Top Critic Score</option>
        </select>

        <label for="tier">Tier</label>
        <select name="tier" id="tier">
            <option value="">Select option</option>
            <option value="weak">Weak</option>
            <option value="strong">Strong</option>
            <option value="fair">Fair</option>
            <option value="mighty">Mighty</option>
        </select>

        <label for="major">is Major Title?</label>
        <input type="checkbox" name="major" id="major" value="1"/>

        <label for="release">Release</label>
        <input type="date" name="release" id="release">

        <label for="platform">Platform</label>
        <select name="platform" id="platform">
            @foreach($platforms as $platform)
                <option value="{{ $platform->id }}">{{ $platform->name }}</option>
            @endforeach
        </select>

        <label for="exclusive">Exclusive?</label>
            <input type="checkbox" name="exclusive" id="exclusive" value="1">

        <br>



        <input type="submit" value="Sort!">
    </form>
@endsection
