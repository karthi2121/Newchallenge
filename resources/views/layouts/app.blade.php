<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/frontend/bootstrap.min.css') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/sub.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/responsive.css') }}">
    </head>
    <body>
        @include('layouts.header')
            @yield('content')
        @include('layouts.footer')
        <script src="{{ asset('js/frontend/jquery-v3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/frontend/popper.min.js') }}"></script>
        <script src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/frontend/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/frontend/main.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/frontend/custom.js') }}"></script>
        @yield('js')
    </body>
</html>