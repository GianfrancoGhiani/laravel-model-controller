<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('images/cinema.png') }}">
    <title>Movie List</title>

    <!-- Fonts -->


    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container-md">@yield('body')</div>
</body>

</html>
