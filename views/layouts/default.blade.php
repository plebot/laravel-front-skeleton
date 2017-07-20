<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            @include('includes.footer')
        </footer>

        @if(config('app.env') == 'local')
            <script src="http://localhost:35729/livereload.js"></script>
        @endif
    </body>
</html>