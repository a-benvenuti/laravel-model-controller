<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model-Controller</title>
</head>
<body>
    <div class="container">
        @foreach ($movies as $movie)
            <div class="box">
                <h4>{{$movie->title}} - {{$movie->author}}</h4>
                <p>{{$movie->plot}}</p>
            </div>
        @endforeach
    </div>
</body>
</html>