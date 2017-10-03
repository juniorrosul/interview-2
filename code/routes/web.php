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
    return redirect()->route('league.chose');
});

Route::group(['prefix' => 'league'], function() {

    // Route::get('/', 'LeagueController@getIndex')->name('league.index');

    Route::get('/', function() {
        return redirect()->route('league.chose');
    });

    Route::get('chose', 'LeagueController@getChose')->name('league.chose');

    Route::group(['prefix' => '{league_short}'], function($league_short) {
        Route::get('upcoming-matches', 'LeagueController@getUpcomingMatches')->name('league.upcoming_matches');
        Route::get('{year}/all-matches', 'LeagueController@getAllMatchs')->name('league.all_matches');
    });

});
