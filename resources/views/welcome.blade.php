@extends('layout')

@section('content')
    <h1>{{ date("l") }}</h1>

{{--    <form action="" method="get">--}}
{{--        <label for="tier">Tier</label>--}}
{{--        <input type="checkbox" name="tier" id="tier">--}}
{{--        <input type="submit" value="Tier">--}}
{{--    </form>--}}
{{--@if (request('tier'))--}}
{{--    <p>tier</p>--}}
{{--@endif--}}

<a href="/vue/game">Vue-version</a>
<p>Hi! It's a "welcome page" 4 my site</p>
    <p>In tab Games u can see list of games from mySql and can sort it</p>
    <p>Each game have a link in self page, when u can see banner and clickable "tags"</p>
    <p>In tab Platforms u can choose one of platforms and see list, where games exist on choose platform</p>
    <p>On tab Genre u can see all genres, edit genre, and create new genre</p>

<h5>All this site exist thanks OpenCritic's Api, from which i can give data and push it in database</h5>
    <h6>Special thanks Laravel =)</h6>
















    <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif


</div>
@endsection
