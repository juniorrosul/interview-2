@extends('layout')

@section('title', 'All Matches')

@section('content')
    <p>
        <a href="{{ route('league.upcoming_matches', [request()->route()->parameter('league_short')]) }}">Upcoming matches</a>
    </p>
    @include('matches.table', $matches)
@endsection
