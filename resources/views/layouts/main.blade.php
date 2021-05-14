<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('pageTitle')</title>
        <style>
            *{margin: 0; padding: 0; box-sizing: border-box;}
            a{text-decoration: none; color: #000000;}
        </style>
        @yield('css')
    </head>
    <body>
        <main>
            @yield('main')
        </main>                
    </body>
</html>