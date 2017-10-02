<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     * Redirect to league matches
     * @return App::Redirect
     */
    public function getIndex()
    {
        return redirect()->route('league.macthes', ['league_short' => 'bl1']);
    }

    /**
     * Return a view with all matches of the league
     * @param  String $league_short - Short name of the league, used in API
     * @return App::View
     */
    public function getMatches($league_short)
    {
        return view('view.name', $data);
    }
}
