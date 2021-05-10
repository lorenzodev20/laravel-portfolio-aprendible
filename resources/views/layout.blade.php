<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>@yield('title','Portafolio')</title>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')
            @include('partials.session-status')
        </header>
        
        <main class="py-4">
            @yield('content')
        </main>
        
        <footer class="bg-white text-black-50 text-center py-50 shadow">
            {{ config('app.name')}} | Copyright @ {{ date('Y')}}
        </footer>
    </div>
</body>
</html>