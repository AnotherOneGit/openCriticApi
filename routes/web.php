<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $platformArray = ['Microsoft', 'Sony', 'Nintendo'];
    $platformArrayFiltered = array_diff_assoc($platformArray, [request('name')]);
    return $platformArrayFiltered;
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

Route::get('/search', 'SearchController@index')->name('search');
