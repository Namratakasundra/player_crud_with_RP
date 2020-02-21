<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//For searching in Player
Route::get('/search_player','PlayerController@search_player');
//Player CRUD
Route::get('/players', 'PlayerController@index')->name('player.index');
Route::get('players/show/id={id}', 'PlayerController@show')->name('players.show');
Route::get('players/create','PlayerController@create')->name('players.create');
Route::post('players/create','PlayerController@store')->name('players.store');
Route::get('/players/{id}/edit','PlayerController@edit')->name('players.edit');
Route::post('/players/{id}/update','PlayerController@update')->name('players.update');
Route::get('/players/{id}/delete','PlayerController@destroy')->name('players.destroy');