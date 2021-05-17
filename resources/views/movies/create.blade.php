@extends('layouts.main')

@section('pageTitle')
Aggiungi un nuovo Film
@endsection

@section('main')

<div class="container">
    <h1 class="mt-2">Aggiungi un nuovo Film</h1>
    <form>
        <div class="form-group mt-5">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title"  placeholder="Titolo">
        </div>
        <div class="form-group">
            <label for="author">Regista</label>
            <input type="text" class="form-control" id="author" name="author"  placeholder="Regista">
        </div>
        <div class="form-group">
            <label for="genre">Generi</label>
            <input type="text" class="form-control" id="genre" name="genre"  placeholder="Generi">
        </div>
        <div class="form-group">
            <label for="plot">Trama</label>
            <input type="text-area" class="form-control" id="plot" name="plot" rows="8" placeholder="Trama...">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Salva</button>
    </form>
</div>

@endsection

@section('css')

@endsection