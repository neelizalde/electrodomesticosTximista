<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('sidebar')

        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>