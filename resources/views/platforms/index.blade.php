@extends('layout')

@section('content')
    @foreach($platforms as $platform)
        <a href="{{ route('platform.index', ['platform'=>$platform->name]) }}">
            {{ $platform->name }}
        </a>
        <br>
    @endforeach
@endsection
