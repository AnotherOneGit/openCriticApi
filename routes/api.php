<?php

use App\Game;
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

Route::get('/game', function (){
    if (\request('platform')) {
        return Platform::where('name', \request('platform'))->firstOrFail()->game;
    } else {
        return Game::all();
    }
});

Route::get('/platform', function (){
    return Platform::all();
});

Route::get('/genre', function () {
    return Genre::all();
});

Route::get('/game/{game}', function ($game) {
    return Game::where('id', $game)->firstOrFail();
});
