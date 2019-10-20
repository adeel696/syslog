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


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicle', function () {
    return view('vehicle');
});

Route::get('/construction-machinery', function () {
    return view('construction-machinery');
});

Route::get('/warehouse', function () {
    return view('warehouse');
});

Route::get('/bulk-buying', function () {
    return view('bulk-buying');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/gooddeals', function () {
    return view('gooddeals');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::group(['prefix' => 'admin'], function(){
	//Admin Auth
	Route::get('/', 'Admin\Auth\LoginController@showLoginForm');	
	Route::get('/login', 'Admin\Auth\LoginController@showLoginForm');
	Route::post('/login', 'Admin\Auth\LoginController@login');
	Route::post('/logout', 'Admin\Auth\LoginController@logout');
	
	Route::get('/construction-machines/grid', 'Admin\ConstructionMachinesController@grid');
	Route::resource('/construction-machines', 'Admin\ConstructionMachinesController');
	
	Route::get('/packaging/grid', 'Admin\PackagingController@grid');
	Route::resource('/packaging', 'Admin\PackagingController');
	
	Route::get('/vehicle/grid', 'Admin\VehicleController@grid');
	Route::resource('/vehicle', 'Admin\VehicleController');
	
	Route::get('/city/grid', 'Admin\CityController@grid');
	Route::resource('/city', 'Admin\CityController');
	
	Route::get('/suburb/grid', 'Admin\CityController@grid');
	Route::resource('/suburb', 'Admin\CityController');
	
	Route::get('/home', 'Admin\HomeController@index');	
	
});

Auth::routes();

Route::group(['prefix' => 'cms'], function(){
	//Admin Auth	
	Route::get('/', 'Cms\HomeController@index');	
	
});
