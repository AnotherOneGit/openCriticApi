@extends('layout')

@section('content')
    @foreach($platforms as $platform)
        <a href="{{ route('platform.index', ['platform'=>$platform->name]) }}">
            {{ $platform->name }}
            <img src="{{ $platform->imageSrc }}" alt="{{ $platform->name }}">
        </a>
        <br>
    @endforeach
@endsection
