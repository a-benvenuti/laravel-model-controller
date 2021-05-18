@extends('layouts.main')

@section('pageTitle')
{{$movie->title}}
@endsection

@section('main')
    <div class="container">
        <div class="box">
            <h1>{{$movie->title}}</h1>
            <h4><strong>Regista:</strong> {{$movie->author}}</h4>
            <h4><strong>Genere:</strong> {{$movie->genre}}</h4>
            <h2>Trama:</h2>
            <p>{{$movie->plot}}</p>
        </div>
        <a href="{{route('movies.index')}}">↩ Indietro</a>
    </div>
@endsection

@section('css')

@endsection