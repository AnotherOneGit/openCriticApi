<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {;
//    for ($num = 27; $num <= 27; $num++) {
//        $url = 'https://api.opencritic.com/api/game/' . $num;
//        $eloquents = [json_decode(collect(Http::get($url)->json()))];
//        foreach ($eloquents as $eloquent) {
//            for ($number=0; $number<=count($eloquent->Platforms)-1; $number++) {
//                echo $eloquent->Platforms[$number]->id;
//                echo '<br>';
//                echo $eloquent->id;
//                echo '<br>';
//                echo $eloquent->name;
//                echo '<br>';
//                echo substr($eloquent->firstReleaseDate,0, 10);
//                echo '<hr>';
//            }
//        }
//    }
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/genre', 'GenresController@index');
Route::post('/genre', 'GenresController@store');
Route::get('/genre/create', 'GenresController@create');
Route::get('/genre/{genre}', 'GenresController@show');
Route::get('/genre/{genre}/edit', 'GenresController@edit');
Route::put('/genre/{genre}', 'GenresController@update');

Route::get('/platform', 'PlatformController@index')->name('platform.index');
Route::get('/platform/{platform}', 'PlatformController@show')->name('platform.show');

Route::get('/game', 'GameController@index')->name('game.index');
Route::get('/game/{game}', 'GameController@show')->name('game.show');
