@extends('layout')

@section('title', 'Upcoming Matches')

@section('content')
    <p>
        <a href="{{ route('league.all_matches', [request()->route()->parameter('league_short'), \Carbon\Carbon::now()->format('Y')]) }}">All matches</a>
    </p>
    @include('matches.table', $matches)
@endsection
