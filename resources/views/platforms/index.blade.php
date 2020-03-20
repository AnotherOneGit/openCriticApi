@extends('layout')

@section('content')
    @foreach($platforms as $platform)
        <a href="#">{{ $platform->name }}</a>
        <br>
    @endforeach
@endsection
