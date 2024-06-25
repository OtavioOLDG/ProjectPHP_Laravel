@extends('layouts.main')

@section('title', 'Events')
    
@section('content')
       <img src="/img/event1.jpeg" alt="">
       <p>{{ $nome }}</p>
        @if ($nome == 'Sandro')
            <p>Nome é Sandro</p>
        @else
            <p>Nome é {{ $nome }}</p>
        @endif
        @for ($i = 0; $i < count($array); $i++)
            {{ $array[$i]}} <br>
        @endfor
@endsection
