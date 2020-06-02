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

Route::get('/game', function (Request $request) {
    $games = Game::all();
//
//    if ($request->has('name')) {
//        $games->where('name', 'like', "%$request->name%");
//    }
//
//    if ($request->has('is_major')) {
//        $games->where('isMajorTitle', $request->is_major);
//    }
//
    if ($request->has('tier')) {
        $games->where('tier', $request->tier);
    }

//    if ($request->has('exclusive')) {
//        $platformArray = ['Microsoft', 'Sony', 'Nintendo'];
//        $platformArrayFiltered = array_values(array_diff($platformArray, [request('exclusive')]));
//        $games->where($platformArrayFiltered[0], 0)
//            ->where($platformArrayFiltered[1], 0);
//    }
    return $games;
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
