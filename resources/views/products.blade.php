@extends('layouts.main')

@section('title', 'Events')
    
@section('content')
        @if ($id != '')
            <p>O id do produto é {{ $id }}</p>
        @endif

        @if($busca != '')
            <p>O usuário está buscando por: {{ $busca }}</p>
        @endif
@endsection
