<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{trans('t.kgiai')}}">
	<meta name="keywords" content="{{trans('t.kgiai')}}">

    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />

    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('social_meta')


    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="icon" type="image/x-icon" class="js-site-favicon" href="{{ asset('images/favicon.ico') }}">
    @yield('styles')
</head>

<body>
    @include('web.layouts.header')
    @yield('content')
    @include('web.layouts.footer')
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>