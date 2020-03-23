@extends('layout')

@section('content')
    @foreach($platforms as $platform)
        <a href="{{ $platform->path() }}">{{ $platform->name }}</a>
        <br>
    @endforeach
@endsection
