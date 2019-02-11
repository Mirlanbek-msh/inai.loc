const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

//  Front js
mix.scripts([
   'node_modules/jquery/dist/jquery.min.js',
   'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
   'node_modules/goodshare.js/goodshare.min.js',
   'resources/js/classie.js',
   'resources/js/selectFx.js',
   'resources/js/libs/select2.full.min.js',
   'resources/js/libs/icheck.min.js',
   'resources/js/libs/jasny-bootstrap.min.js',
   'resources/admin/bower_components/bootstrap-validator/dist/validator.min.js',
   'resources/js/libs/scrollPosStyler.js',
   'resources/js/libs/jquery.bcSwipe.min.js',
   'resources/js/libs/lightgallery/lightslider.min.js',
   'resources/js/libs/lightgallery/lightgallery-all.min.js',
   'resources/js/libs/flipclock.min.js',
   'resources/js/responsive-tabs.js',
   'resources/js/app.js'
], 'public/js/app.js').version();

//  Front css
mix.sass('resources/sass/app.scss', 'public/css').version();

//  Admin css
mix.sass('resources/admin/main.scss', 'public/admin/css/app.css').version();

mix.styles([
   'resources/admin/bower_components/select2/dist/css/select2.min.css',
   'resources/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css',
   'resources/admin/bower_components/dropzone/dist/dropzone.css',
   'resources/admin/css/dataTables.bootstrap4.min.css',
   // 'resources/admin/bower_components/fullcalendar/dist/fullcalendar.min.css',
   // 'resources/admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css',
   // 'resources/admin/bower_components/slick-carousel/slick/slick.css',
   // 'resources/admin/icon_fonts_assets/feather/style.css',
   'resources/admin/css/tagify.css',
   'resources/admin/css/jasny-bootstrap.min.css',
], 'public/admin/css/dist.css').version();

//  Admin js
mix.scripts([
   'resources/admin/bower_components/jquery/dist/jquery.min.js',
   'resources/admin/bower_components/popper.js/dist/umd/popper.min.js',
   'resources/admin/bower_components/moment/moment.js',
   // 'resources/admin/js/moment/ru.min.js',
   // 'resources/admin/bower_components/chart.js/dist/Chart.min.js',
   'resources/admin/bower_components/select2/dist/js/select2.full.min.js',
   // 'resources/admin/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js',
   'resources/admin/bower_components/bootstrap-validator/dist/validator.min.js',
   'resources/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js',
   // 'resources/admin/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js',
   'resources/admin/bower_components/dropzone/dist/dropzone.js',
   // 'resources/admin/bower_components/editable-table/mindmup-editabletable.js',
   // 'resources/admin/bower_components/fullcalendar/dist/fullcalendar.min.js',
   // 'resources/admin/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js',
   'resources/admin/bower_components/tether/dist/js/tether.min.js',
   // 'resources/admin/bower_components/slick-carousel/slick/slick.min.js',
   'resources/admin/bower_components/bootstrap/js/dist/util.js',
   'resources/admin/bower_components/bootstrap/js/dist/alert.js',
   'resources/admin/bower_components/bootstrap/js/dist/button.js',
   'resources/admin/bower_components/bootstrap/js/dist/carousel.js',
   'resources/admin/bower_components/bootstrap/js/dist/collapse.js',
   'resources/admin/bower_components/bootstrap/js/dist/dropdown.js',
   // 'resources/admin/bower_components/bootstrap/js/dist/modal.js',
   'resources/admin/bower_components/bootstrap/js/dist/tab.js',
   'resources/admin/bower_components/bootstrap/js/dist/tooltip.js',
   'resources/admin/bower_components/bootstrap/js/dist/popover.js',
   'resources/admin/js/jquery.dataTables.min.js',
   'resources/admin/js/dataTables.bootstrap4.min.js',
   'resources/admin/js/demo_customizer.js',
   'resources/admin/js/fontawesome.js',
   'resources/admin/js/fileinput.js',
   'resources/admin/js/tagify.js',
   'resources/admin/js/main.js',
   
], 'public/admin/js/app.js').version();

