<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Blog')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/all.css') }}" rel="stylesheet" />


    </head>
    <body>
    <div class="main-content">
    <!--Flash-->
    @include('articles.partials.flash')
    <!-- Navbar -->
    @include('articles.partials.navbar')
    <!-- Content -->
    @yield('content')



    <script src="{{ asset('js/all.js') }}"></script>
    <!-- Footer -->
    @yield('footer')


    </div>
    </body>
</html>
