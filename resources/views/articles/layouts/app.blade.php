<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>
    <div class="main-content">
    <!-- Navbar -->
    @include('articles.partials.navbar')
    <!-- Content -->
    @yield('content')



    <script src="{{ asset('js/app.js') }}"></script>
    </div>
    </body>
</html>
