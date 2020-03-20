@extends('layout')

@section('content')
    <hr>
    <a href="/genre/{{ $genre->id }}/edit" class="button">Edit Genre</a>
    <hr>
    <h1>{{ $genre->name }}</h1>
@endsection
