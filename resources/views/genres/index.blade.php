@extends('layout')

@section('content')
    <hr>
    <a href="/genre/create" class="button">Create New Genre</a>
    <hr>
    @forelse($genres as $genre)
        <a href="genre/{{ $genre->id }}">{{ $genre->name }}</a>
        <br>
    @empty
        <p>No relevant genres yet</p>
    @endforelse
@endsection
