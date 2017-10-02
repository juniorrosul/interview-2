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

$router->pattern('year', '[0-9]{4}');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'league'], function() {

    Route::get('/', 'LeagueController@getIndex');

    Route::get('{league_short}/{year?}', 'LeagueController@getMatches');
});
