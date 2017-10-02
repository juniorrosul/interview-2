@extends('layout')

@section('title', 'Detail of the league')

@section('content')
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
            @foreach ($last_match->getGoals() as $goal)
                <tr>
                    <td>{{ $goal->getMatchMinute() }} </td>
                    <td>{{ $goal->getGoalGetterName() }}</td>
                    <td>{{ $goal->getComment() }}</td>
                    <td>{{ $goal->getScoreTeam1() }} x {{ $goal->getScoreTeam2() }}</td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection
