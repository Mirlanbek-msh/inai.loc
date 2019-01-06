<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/admin', 
        'middleware' => [ 
            'localeSessionRedirect', 'localizationRedirect', 'localeViewPath',
            'admin',
            'role:Super Administrator|Administrator|Editor'
        ]
    ], function(){
        Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function(){
            Route::get('/', 'AdminController@index')->name('home');

            Route::group(['middleware' => ['role:Developer|Super Administrator|Administrator|Editor']], function(){
                Route::resource('post', 'PostController');
                Route::get('gallery/{id}', 'PostController@imagesGet');
                Route::post('gallery/{id}/delete/{file}', 'PostController@imageDestroy');
                Route::resource('category', 'PostCategoryController');
                Route::resource('user','UserController');           
            });



        });
});