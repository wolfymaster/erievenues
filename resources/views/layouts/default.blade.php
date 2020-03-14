<!DOCTYPE html>
<html lang="en">

    <head>
        @include('includes.head')
    </head>

    <body>
        <header>
            @include('includes.header')
        </header>
        <main>
            @yield('content')
            <footer>
                @include('includes.footer')
            </footer>
        </main>

        <script src="script.js"></script>
    </body>
</html>

