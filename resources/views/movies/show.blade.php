@extends('layouts.main')

@section('pageTitle')
{{$movie->title}}
@endsection

@section('main')
    <div class="container">
        <div class="box">
            <h1>{{$movie->title}}</h1>
            <h3>Regista: {{$movie->author}}</h3>
            <h3>Genere: {{$movie->genre}}</h3>
            <h2>Trama:</h2>
            <p>{{$movie->plot}}</p>
        </div>
        <a href="{{route('movies.index')}}">↩ Indietro</a>
    </div>
@endsection

@section('css')

@endsection