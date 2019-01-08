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
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/site.webmanifest">
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
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