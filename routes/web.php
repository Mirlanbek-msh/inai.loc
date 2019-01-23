<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/auth', 
        'middleware' => [ 
            'localeSessionRedirect', 'localizationRedirect', 'localeViewPath',
        ],
    ], function(){
    Route::get('/login', 'AuthController@loginForm')->name('login');
    Route::post('/login', 'AuthController@login')->name('loginPost');
    Route::post('/logout', 'AuthController@logout')->name('logout');
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]], function(){
                
    Route::group(['as' => 'web.'], function(){

        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/about', 'HomeController@about')->name('about');
        Route::get('/contact', 'HomeController@contact')->name('contact');
        Route::get('/gallery', 'HomeController@gallery')->name('gallery');
        Route::get('/tag/{slug}', 'HomeController@tag')->name('tag');
        // Search
        Route::post('/search', 'SearchController@search')->name('search');

        // Post
        Route::group(['prefix' => 'post', 'as' => 'post.'], function(){
            Route::get('/', 'PostController@index')->name('index');
            Route::get('/{slug}', 'PostController@show')->name('show');
            Route::post('/{id}/comment', 'PostController@comment')->name('comment');
        });

        // Event
        Route::group(['prefix' => 'event', 'as' => 'event.'], function(){
            Route::get('/', 'EventController@index')->name('index');
            Route::get('/apply/{slug}', 'EventController@apply')->name('apply');
            Route::post('/apply/{slug}', 'EventController@applyPost')->name('applyPost');
            Route::get('/{slug}', 'EventController@show')->name('show');
            Route::post('/{id}/comment', 'EventController@comment')->name('comment');
        });

        // Application
        Route::group(['prefix' => 'application', 'as' => 'application.'], function(){
            Route::get('/', 'ApplicationController@index')->name('index');
            Route::get('/{slug}', 'ApplicationController@show')->name('show');
        });

        Route::group(['as' => 'auth.'], function(){
            Route::get('/login', 'Auth\LoginController@showLoginForm')->name('loginForm');
            Route::post('/login', 'Auth\LoginController@login')->name('login');

            Route::get('/login/google/redirect', 'Auth\LoginController@loginGoogleRedirect')->name('google_redirect');
            Route::get('/login/google/callback', 'Auth\LoginController@loginGoogleCallback');
            
            Route::get('/login/fb/redirect', 'Auth\LoginController@loginFbRedirect')->name('fb_redirect');
            Route::get('/login/fb/callback', 'Auth\LoginController@loginFbCallback');

            Route::get('/login/vk/redirect', 'Auth\LoginController@loginVkRedirect')->name('vk_redirect');
            Route::get('/login/vk/callback', 'Auth\LoginController@loginVkCallback');

            Route::get('/login/twitter/redirect', 'Auth\LoginController@loginTwitterRedirect')->name('twitter_redirect');
            Route::get('/login/twitter/callback', 'Auth\LoginController@loginTwitterCallback');

            Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
            Route::get('/register', 'Auth\LoginController@showRegisterForm')->name('registerForm');
            Route::post('/register', 'Auth\LoginController@register')->name('register');
        });

    });
});

