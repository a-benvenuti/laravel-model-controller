@extends('layouts.main')

@section('pageTitle')
    Movies | Home
@endsection

@section('main')
    <div class="container mt-3">
        <h1>Saga Harry Potter</h1>
        <div class="mb-3 text-right">
          <a href="{{route('movies.create')}}"><button type="button" class="btn btn-success">Aggiungi Film</button></a>  
        </div>
        
        <table class="table table-striped">
              <thead>
                <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Regista</th>
                <th scope="col">Generi</th>
                <th scope="col">Visualizza</th>
                <th scope="col">Modifica</th>
                <th scope="col">Elimina</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{$movie->title}}</td>
                <td>{{$movie->author}}</td>
                <td>{{$movie->genre}}</td>
                <td><a href="{{route('movies.show', ['movie' => $movie->id])}}">Visualizza</a></td>
                <td><a href="{{route('movies.edit', ['movie' => $movie->id])}}">Modifica</a></td>
                <td><a href="">Elimina</a></td>
            </tr>                        
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('css')

@endsection
