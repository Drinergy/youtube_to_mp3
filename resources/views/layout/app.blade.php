<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YT to mp3</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('public/css/style.css') }} ">
    </head>
    <body>
        <div class="main">
            <div class="logo">
                <img src="{{ asset('public/images/logo.png') }}" alt="logo">
            </div>

            <div class="form">
                @yield('content')
            </div>
        </div>s
    </body>
</html>
