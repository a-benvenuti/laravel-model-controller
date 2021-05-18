@extends('layouts.main')

@section('pageTitle')
    Movies | Home
@endsection

@section('main')
    <div class="container mt-3">
        <h1>Saga Harry Potter</h1>
        <div class="mb-3 text-right">
          <a href="{{route('movies.create')}}"><button type="button" class="btn btn-primary">Aggiungi Film</button></a>  
        </div>
        @if (session('message'))
            <div class="alert alert-primary">
                {{ session('message') }}
            </div>
        @endif
        <table class="table table-striped">
              <thead>
                <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Visualizza</th>
                <th scope="col">Modifica</th>
                <th scope="col">Elimina</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{$movie->title}}</td>
                <td><a href="{{route('movies.show', ['movie' => $movie->id])}}"><button type="button" class="btn btn-success">Visualizza</button></a></td>
                <td><a href="{{route('movies.edit', ['movie' => $movie->id])}}"><button type="button" class="btn btn-warning text-white">Modifica</button></a></td>
                <td>
                    <form action="{{route('movies.destroy', [ 'movie' => $movie->id ])}}" method="POST">
					@method('DELETE')
                    @csrf
					<button type="submit" class="btn btn-danger">Elimina</button>
				</form>
                </td>
            </tr>                        
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('css')

@endsection
