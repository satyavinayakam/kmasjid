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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mengenai', function () {
   return view('mengenai');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/urus-masjid', function () {
    return view('dashboard/urus_masjid');
});

Route::get('/menus',  'MenusController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
