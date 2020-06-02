<?php

use App\Game;
use App\GamesFilter;
use App\Genre;
use App\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/game', function(Request $request, GamesFilter $filters)
{
    return $games = Game::with('platforms')->filter($filters)->get();
});





Route::get('/platform', function (){
    return Platform::all();
});

Route::get('/genre', function () {
    return Genre::all();
});
