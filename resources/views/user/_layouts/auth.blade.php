<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    @vite('resources/fonts/material-icon/css/material-design-iconic-font.min.css')
    @yield('font')

    <!-- Styles -->
    @vite(['resources/css/bootstrap/bootstrap.css', 'resources/css/user/auth.css'])
    @yield('style')

    <!-- Scripts -->
    @vite(['resources/js/app.js', 'resources/js/bootstrap/bootstrap.js'])
    @yield('header_script')
</head>
<body class="antialiased">
    <div class="main">
        @yield('content')
    </div>

    <footer>
        @vite('resources/js/jquery.min.js')
        @yield('footer_script')
    </footer>
</body>
</html>
