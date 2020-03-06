<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/custom.css">
    <script type="text/javascript" src="/public/jquery/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div id="app">
        @include('etc.navbar')

        <main class="py-4">
            @yield('content')
        </main>
        @include('etc.footer')
    </div>
    <script type="text/javascript" src="/public/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="/public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
