<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \juniorrosul\OpenLigaDbApi\Client as ApiClient;

class LeagueController extends Controller
{

    /**
     * @var juniorrosul\OpenLigaDbApi\Client
     */
    protected $api_client;

    public function __construct(ApiClient $client)
    {
        $this->api_client = $client;

    }
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
        $data = [
            'matches' => $this->api_client->getMatchesByLeagueSeason($league_short, 2015),
        ];

        return view('layout', $data);
    }
}
