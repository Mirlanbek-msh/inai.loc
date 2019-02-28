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
                /**Posts */
                Route::resource('post', 'PostController');
                Route::get('post/gallery/{id}', 'PostController@imagesGet');
                Route::post('post/gallery/{id}/delete/{file}', 'PostController@imageDestroy');
                Route::resource('gallery', 'GalleryController');
                Route::get('gallery/{id}/toggle', 'GalleryController@toggle')->name('gallery.toggle');
                Route::resource('contact', 'ContactController');
                Route::resource('category', 'PostCategoryController');
                
                /**Events */
                Route::get('event/{id}/reply', 'EventReplyController@index')->name('event.reply');
                Route::get('event/{id}/reply/download/excel', 'EventReplyController@downloadExcel')->name('event.download-excel');
                Route::get('event/{id}/reply/download/pdf', 'EventReplyController@downloadPdf')->name('event.download-pdf');
                Route::get('event/{event_id}/reply/{id}', 'EventReplyController@show')->name('event.reply.show');
                Route::delete('event/{event_id}/reply/{id}/destroy', 'EventReplyController@destroy')->name('event.reply.destroy');
                Route::resource('event', 'EventController');

                /**Pages */
                Route::get('about', 'PageController@about')->name('page.about');
                Route::resource('page', 'PageController');
                Route::resource('pagecategory', 'PageCategoryController');
                
                Route::resource('user','UserController');           
            });



        });
});