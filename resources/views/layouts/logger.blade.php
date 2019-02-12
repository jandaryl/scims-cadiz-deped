<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Logo -->
    <link rel="icon" type="image/ico" href="/images/AHIuanj.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>User Activity Logs</title>

    <!-- Scripts -->
    <script src="{{ asset('js/logger.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/logger.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ route('admin.home') }}">
                <img
                src="/images/AHIuanj.png"
                width="40"
                height="40"
                alt="DepEd Admin"
                />
                <span class="pl-2">{{ config('app.name', 'Division of Cadiz City') }}</span>
                </a>
            </div>
        </nav>
                <h2 class="text-2xl text-center mt-8 mb-2">User Activity Logs Monitoring</h2>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
