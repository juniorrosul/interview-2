@extends('layout')

@section('title', 'All Matches')

@section('content')
    @forelse($matches as $match)
        {{ var_dump($match) }}
    @empty
        Nenhum partida foi encontrada.
    @endforelse
@endsection
