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
            <footer class="footer">
                @include('includes.footer')
            </footer>
        </main>

        <script src="script.js"></script>
    </body>
</html>

