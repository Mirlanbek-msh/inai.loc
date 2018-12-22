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
   'resources/js/libs/scrollPosStyler.js',
   'resources/js/app.js'
], 'public/js/app.js').version();


//  Front css
mix.sass('resources/sass/app.scss', 'public/css').version();

// Admin side
// mix.sass('public/bash/scss/main.scss', 'public/bash/css/app.css');
// mix.sass('public/bash/scss/library.scss', 'public/bash/css/library.css');

//  Admin js
// mix.scripts([
//        'node_modules/froala-editor/js/froala_editor.pkgd.min.js',
//        'node_modules/froala-editor/js/file.min.js',
//        'node_modules/froala-editor/js/languages/ru.js',
//    ], 'public/bash/js/library.js');