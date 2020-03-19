@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">

            @forelse ($games as $game)
                <div class="content">
                    <div class="title">
                        <h2>
                            <a href="{{$game->id}}">
                                {{$game->name}}
                            </a>
                        </h2>
                    </div>

                    <p><img src="{{ $game->bannerScreenshot }}" alt="" class="image image-full" /> </p>

                    {!! $game->excerpt !!}
                </div>
            @empty
                <p>No relevant games yet</p>
            @endforelse
        </div>
    </div>
@endsection
