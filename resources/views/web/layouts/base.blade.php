<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="page text-center">
        @include('web.layouts.header')
        @yield('content')
        @include('web.layouts.footer')
    </div>

    <script src="{{ asset('js/core.min.js') }}?v=1"></script>
    <script src="{{ asset('js/script.js') }}?v=1"></script>
    @yield('scripts')
</body>

</html>