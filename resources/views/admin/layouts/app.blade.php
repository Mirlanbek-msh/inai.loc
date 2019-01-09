<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('/admin/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/icon_fonts_assets/feather/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/tagify.css')}}">
    @include('partials.ogdata')
    @include('partials.favicon')
    <link href="{{ asset('/admin/css/app.css') }}" rel="stylesheet"> @yield('styles')
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
    <script src="{{ asset('/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('/admin/js/ru.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/bower_components/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap/js/dist/util.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap/js/dist/alert.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap/js/dist/button.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap/js/dist/modal.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap/js/dist/tab.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/bootstrap/js/dist/popover.js') }}"></script>
    <script src="{{ asset('/admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/admin/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/admin/js/demo_customizer.js') }}"></script>
    <script src="{{ asset('/admin/js/main.js') }}"></script>

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