@extends('layouts.main')

@section('pageTitle')
Aggiungi un nuovo Film
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
    <form action="{{route('movies.store')}}" method="POST">
        @method('POST')
        @csrf
        <div class="form-group mt-5">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title"  placeholder="Titolo" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="author">Regista</label>
            <input type="text" class="form-control" id="author" name="author"  placeholder="Regista" value="{{ old('author') }}">
        </div>
        <div class="form-group">
            <label for="genre">Generi</label>
            <input type="text" class="form-control" id="genre" name="genre"  placeholder="Generi" value="{{ old('genre') }}">
        </div>
        <div class="form-group">
            <label for="plot">Trama</label>
            <textarea  class="form-control" id="plot" name="plot" rows="8" placeholder="Trama...">{{ old('plot') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Salva</button>
    </form>
</div>

@endsection

@section('css')

@endsection