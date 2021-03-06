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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/gallery', 'PageController@gallery')->name('gallery');
Route::get('/gallery2', 'PageController@gallery2')->name('gallery2');
Route::post('/contact', 'ContactController@store')->name('send-mail');
