@extends('layout')

@section('content')
{{--    <hr>--}}
{{--    --}}
{{--    <a href="/platform/{{ $platforms->id }}/edit" class="button">Edit Platform</a>--}}
{{--    <hr>--}}
{{--    <h1>{{ $platforms->name }}</h1>--}}
{{ count($platforms) }}
    @foreach($platforms as $platform)
        <a href="/game/{{ $platform->id }}">{{ $platform->name }}</a>
        <br>
        <img src="{{ $platform->bannerScreenshot }}" alt="">
        <br>
    @endforeach

@endsection
