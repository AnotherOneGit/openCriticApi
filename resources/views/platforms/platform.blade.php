@extends('layout')

@section('content')
    <hr>
    <a href="/platform/{{ $platform->id }}/edit" class="button">Edit Platform</a>
    <hr>
    <h1>{{ $platform->name }}</h1>
{{ count($games) }}
    @foreach($games as $game)
        <p>{{ $game->name }}</p>
    @endforeach

@endsection
