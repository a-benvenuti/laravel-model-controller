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
{{-- <style>
    h1,h2,h3{margin-bottom: 30px;}
    .box{margin: 40px; line-height: 25px;}
    a{margin-left: 10px;}
</style> --}}
@endsection