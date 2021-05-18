@extends('layouts.main')


@section('pageTitle')
Modifica {{$movie->title}}
@endsection

@section('main')

<div class="container">
    <h1 class="mt-2">Aggiungi un nuovo Film</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li> 
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('movies.update', ['movie' => $movie->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group mt-5">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title"  placeholder="Titolo" value="{{$movie->title}}">
        </div>
        <div class="form-group">
            <label for="author">Regista</label>
            <input type="text" class="form-control" id="author" name="author"  placeholder="Regista" value="{{$movie->author}}">
        </div>
        <div class="form-group">
            <label for="genre">Generi</label>
            <input type="text" class="form-control" id="genre" name="genre"  placeholder="Generi" value="{{$movie->genre}}">
        </div>
        <div class="form-group">
            <label for="plot">Trama</label>
            <textarea  class="form-control" id="plot" name="plot" rows="8" placeholder="Trama...">{{$movie->plot}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Salva</button>
    </form>
</div>

@endsection

@section('css')

@endsection