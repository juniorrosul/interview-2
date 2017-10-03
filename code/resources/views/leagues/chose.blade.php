@extends('layout')

@section('title', 'Chose League')

@section('content')
    @include('leagues.table', $leagues)
@endsection
