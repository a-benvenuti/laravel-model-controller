@extends('layouts.main')


@section('pageTitle')
Modifica {{$movie->title}}
@endsection

@section('main')

<div class="container">
    <h1 class="mt-2">Modifica {{$movie->title}}</h1>
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
        <div class="form-group">
			<label for="cover_image">Immagine Cover</label>
			<input type="text" class="form-control" id="cover_image" name="cover_image" placeholder="URL Immagine" value="{{old('cover_image') ? old('cover_image') : $movie->cover_image}}">
		</div>
        <div class="form-group mt-5">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title"  placeholder="Titolo" value="{{old('title') ? old('title') : $movie->title}}">
        </div>
        <div class="form-group">
            <label for="author">Regista</label>
            <input type="text" class="form-control" id="author" name="author"  placeholder="Regista" value="{{old('author') ? old('author') : $movie->author}}">
        </divgenre
        <div class="form-group">
            <label for="genre">Generi</label>
            <input type="text" class="form-control" id="genre" name="genre"  placeholder="Generi" value="{{old('genre') ? old('genre') : $movie->genre}}">
        </div>
        <div class="form-group">
            <label for="plot">Trama</label>
            <textarea  class="form-control" id="plot" name="plot" rows="8" placeholder="Trama...">{{old('plot') ? old('plot') : $movie->plot}}</textarea>
        </div>
        <div class="form-group">
			<label for="year">Anno</label>
			<select class="form-control" id="year" name="year">
				@for ($i = 1900; $i <= date("Y"); $i++)
					<option value="{{$i}}" {{ old('year') == $i || $movie->year == $i ? 'selected' : '' }}>{{$i}}</option>
				@endfor
			</select>
		</div>
        <button type="submit" class="btn btn-primary mt-2">Salva</button>
    </form>
</div>

@endsection

@section('css')

@endsection