@extends('layout')

@section('title', 'All Matches')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @include('matches.table', $matches)
        </tbody>
    </table>
@endsection
