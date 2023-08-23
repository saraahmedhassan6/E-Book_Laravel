<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link href="{{URL::asset('assets/img/ebookk.png')}}" rel="icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
    <body style="margin: 0; /* Remove default body margin */
        padding: 0; /* Remove default body padding */
        background-image: url('{{ asset('assets/img/app3.JPG') }}');
        background-repeat: no-repeat;
        background-position: right center;
        background-size: 50% 100%;
        height: 100vh;
        overflow: hidden;
        background-color:#f5f3f4 ">
        <div id="app">
            

            <main class="py-4" >
                @yield('content')
            </main>
        </div>
    </body>
</html>
