<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ mix('/admin/css/dist.css') }}" rel="stylesheet">
    @include('partials.ogdata')
    @include('partials.favicon')
    <link href="{{ mix('/admin/css/app.css') }}" rel="stylesheet"> 
    @yield('styles')
</head>

<body class="full-screen with-content-panel menu-position-side menu-side-left">
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="layout-w">
            @include('admin.layouts.menu')
            <div class="content-w">
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    <script src="{{ mix('/admin/js/app.js') }}"></script>

    @include('sweetalert::alert') 
    @yield('scripts')
    <script>
        function confirmDelete() {
            var result = confirm('{{trans('t.remove_confirm')}}');
            return result;
        }
    </script>
</body>

</html>