<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
    @yield('stylesheet')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    <main>
        @yield('content')
        @include('includes.footer')
    </main>
</body>
</html>
