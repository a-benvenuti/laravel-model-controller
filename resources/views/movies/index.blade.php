@extends('layouts.main')

@section('pageTitle')
    Movies | Home
@endsection

@section('main')
    <div class="container">
        <h1>Saga Harry Potter</h1>
        @foreach ($movies as $movie)
            <div class="box">
                <a href="{{route('movies.show', ['movie' => $movie->id])}}">
                    <h2>{{$movie->title}}</h2>
                </a>
            </div>
        @endforeach
    </div>
@endsection

@section('css')
<style>
    h1{text-align: center;}
    h2{text-align: center;}
    .container {max-width: 762px; margin: 0 auto;}
    .box{
        max-width: 100%;
        margin:  10px;
        padding: 10px;
        border: 5px double #2b2a2a;
        border-radius: 10px;
    }
</style>
@endsection
