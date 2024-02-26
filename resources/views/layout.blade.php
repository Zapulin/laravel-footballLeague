<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/styles.css'); }}" rel="stylesheet" />


    </head>
    <body>
        <div class="navbar">
                <a href="{{ route('home') }}" class="btn btn-navbar">Inicio</a>
                <a href="{{ route('seasons') }}" class="btn btn-navbar">Temporadas</a>
        </div>

        @yield('content')

        <div class="footer">
            <p>Author: Mario Zappulla 2022 All rights reserved</p>
        </div>
    </body>
</html>
