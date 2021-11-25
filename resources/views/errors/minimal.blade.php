<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roger Medico</title>
    <meta name="description" content="{{__('Personal webpage, portfolio and CV of Roger Medico.')}}">
    <meta name="keywords" content="html, css, javascript, typescript, sass, angular, angular material, laravel, bootstrap, php, tailwind, mysql">
    <meta name="author" content="Roger Medico">
    <link rel="icon" type="image/png" href="{{asset('storage/favicon/favicon.ico')}}">
    <!-- Styles -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179040892-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-179040892-1');
    </script>
</head>
<body>
<main class="container mt-5 pt-5 d-flex flex-column justify-content-center align-items-center">
    <div>
        <div class="offset-2 col-8">
            <img class="img-fluid" src="{{asset('storage/logos/logo.png')}}" alt="Roger Logo">
        </div>
        <div class="text-center text-lowercase">
            <h2 class="serif">
                @yield('code') - @yield('message')
            </h2>
        </div>
    </div>
</main>
</body>
</html>
