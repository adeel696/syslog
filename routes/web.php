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

Route::get('/vehicle', function () {
    return view('vehicle');
});

Route::get('/warehouse', function () {
    return view('warehouse');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/gooddeals', function () {
    return view('gooddeals');
});

Route::get('/cms', function () {
    return view('cms.home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
