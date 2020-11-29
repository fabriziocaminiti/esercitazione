<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Progetto Nova</title>

    <meta name="description" content="@yeld('description">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div id="app">
        @include('includes.navbar')

        <main class="py-4 mt-8">
            @yield('content')
        </main>

        @include('includes.footer')
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/1778af66f3.js" crossorigin="anonymous"></script>
    @stack('scripts')
</body>

</html>