<!DOCTYPE html>
<html lang="en">

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

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

