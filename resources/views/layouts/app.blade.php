<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @include('inc.header')

</head>
<body>
    <div id="wait">
        <div class="wait_cont">
        <img src="{{ asset('images/loading3.gif')}}" class="loading_badge"><br>LOADING...<br>Please wait.
        </div>
    </div>
    <div id="app">
        @include('inc.navbar')
        <main class="py-4">            
            @yield('content')
        </main>
    </div>
</body>
</html>
