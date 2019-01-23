<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{trans('t.kgiai')}}">
    <meta name="keywords" content="inai, Bishkek, Germany">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('social_meta')
    @include('partials.favicon')
    @yield('styles')
    @yield('head_extra')
</head>

<body>
    @include('web.layouts.header')
    @yield('content')
    @include('web.layouts.footer')
    <script src="{{ mix('js/app.js') }}"></script>
    @include('sweetalert::alert') 
    @yield('scripts')
</body>

</html>