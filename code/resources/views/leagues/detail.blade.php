@extends('layout')

@section('title', 'Detail of the league')

@section('content')
    <p>
        <a href="{{ route('league.all_matches', [request()->route()->parameter('league_short'), request()->route()->parameter('year')]) }}">All matches</a>
    </p>
    <p>
        <a href="{{ route('league.upcoming_matches', [request()->route()->parameter('league_short')]) }}">Upcoming matches</a>
    </p>
    @include('teams.table', ['teams' => $teams])
    {{ var_dump($teams) }}


    <div class="panel panel-default">
        <div class="panel-heading">Last Match ({{ $last_match->getDateTime()->format('d/m/Y H:i') }})</div>
        <div class="panel-body">

            @include('matches.detail', ['match' => $last_match])
        </div>



        <table class="table table-hover">
            <thead>
                <tr>
                    <th colspan="4">Goals</th>
                </tr>
                <tr>
                    <th>Minutes</th>
                    <th>Player</th>
                    <th>Coment</th>
                    <th>Score</th>
                </tr>
            </thead>
            @if (is_array($last_match->getGoals()))
                @forelse ($last_match->getGoals() as $goal)
                    <tr>
                        <td>{{ $goal->getMatchMinute() }} </td>
                        <td>{{ $goal->getGoalGetterName() }}</td>
                        <td>{{ $goal->getComment() }}</td>
                        <td>{{ $goal->getScoreTeam1() }} x {{ $goal->getScoreTeam2() }}</td>
                    </tr>
                @empty
                    <tr class="warning">
                        <td colspan="4">No goal in this match.</td>
                    </tr>
                @endforelse
            @endif

        </table>
    </div>

@endsection
