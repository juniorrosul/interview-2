<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \juniorrosul\OpenLigaDbApi\Client as ApiClient;
use Carbon\Carbon;

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

    public function getChose()
    {
        $data['leagues'] = array_reverse($this->api_client->getAvailableLeaguesBySport(1));

        return view('leagues.chose', $data);
    }

    public function getAllMatchs($league_short, $year)
    {
        $data['matches'] = $this->api_client->getMatchesByLeagueSeason($league_short, $year);

        return view('leagues.all_matches', $data);
    }

    public function getUpcomingMatches($league_short)
    {
        $data['matches'] = $this->api_client->getUpcomingMatchesByLeague($league_short);

        return view('leagues.upcoming_matches', $data);
    }
}
