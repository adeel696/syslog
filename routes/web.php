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

Route::post('/construction-machinery', 'BookingController@addConstructionMachineBooking');
Route::get('/construction-machinery', 'ConstructionMachineController@showConstructionMachine');
Route::get('construction-machinery/getFare/', 'ConstructionMachineController@getFare');	


Route::post('/vehicle', 'BookingController@addVehicleBooking');
Route::get('/vehicle', 'VehicleController@showVehicle');
Route::get('vehicle/getFare/', 'VehicleController@getFare');	

// Route::get('/construction-machinery', function () {
//     return view('construction-machinery');
// });

Route::post('/subscribe', 'BookingController@Subscribe');
Route::post('/warehouse', 'BookingController@addWarehouseBooking');
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
	
	Route::resource('/profile', 'Admin\ProfileController');
	
	Route::get('/construction-machine/list', 'Admin\ConstructionMachineController@lists');
	Route::get('/construction-machine/grid', 'Admin\ConstructionMachineController@grid');
	Route::resource('/construction-machine', 'Admin\ConstructionMachineController');
	
	Route::get('/fare/grid', 'Admin\FareController@grid');
	Route::resource('/fare', 'Admin\FareController');
	
	Route::get('/packaging/grid', 'Admin\PackagingController@grid');
	Route::resource('/packaging', 'Admin\PackagingController');
	
	Route::get('/offer/grid', 'Admin\OfferController@grid');
	Route::resource('/offer', 'Admin\OfferController');
	
	Route::get('/vehicle/list', 'Admin\VehicleController@lists');
	Route::get('/vehicle/grid', 'Admin\VehicleController@grid');
	Route::resource('/vehicle', 'Admin\VehicleController');
	
	Route::get('/city/grid', 'Admin\CityController@grid');
	Route::resource('/city', 'Admin\CityController');
	
	Route::get('/suburb/grid', 'Admin\SuburbController@grid');
	Route::resource('/suburb', 'Admin\SuburbController');
	
	Route::post('/booking/status', 'Admin\BookingController@updateBookingStatus');
	
	Route::get('/booking/vehicle/grid/{status}', 'Admin\BookingController@getVehicleGrid');
	Route::get('/booking/vehicle', 'Admin\BookingController@getVehicle');
	Route::get('/booking/construction-machine/grid/{status}', 'Admin\BookingController@getConstructionMachineGrid');
	Route::get('/booking/construction-machine', 'Admin\BookingController@getConstructionMachine');
	Route::get('/booking/warehouse/grid/{status}', 'Admin\BookingController@getWarehouseGrid');
	Route::get('/booking/warehouse', 'Admin\BookingController@getWarehouse');
	Route::get('/booking/bulk-buy/grid', 'Admin\BookingController@getBulkBuyGrid');
	Route::get('/booking/bulk-buy', 'Admin\BookingController@getBulkBuy');
	
	Route::get('/home', 'Admin\HomeController@index');	
	
});

Auth::routes();

Route::group(['prefix' => 'cms'], function(){
	//Admin Auth	
	Route::get('/', 'Cms\HomeController@index');
	
	Route::get('/vehicle/list', 'Cms\AssetController@vehicleLists');
	Route::get('/construction-machine/list', 'Cms\AssetController@constructionMachineLists');
	
	Route::get('/asset/grid', 'Cms\AssetController@grid');
	Route::resource('/asset', 'Cms\AssetController');
	
	Route::get('/gooddeal/grid', 'Cms\GooddealController@grid');
	Route::resource('/gooddeal', 'Cms\GooddealController');
	
	Route::post('/booking/status', 'Cms\BookingController@updateBookingStatus');
	
	Route::get('/booking/vehicle/grid', 'Cms\BookingController@getVehicleGrid');
	Route::get('/booking/vehicle', 'Cms\BookingController@getVehicle');
	Route::get('/booking/construction-machine/grid', 'Cms\BookingController@getConstructionMachineGrid');
	Route::get('/booking/construction-machine', 'Cms\BookingController@getConstructionMachine');
	Route::get('/booking/warehouse/grid', 'Cms\BookingController@getWarehouseGrid');
	Route::get('/booking/warehouse', 'Cms\BookingController@getWarehouse');
	Route::get('/booking/bulk-buy/grid', 'Cms\BookingController@getBulkBuyGrid');
	Route::get('/booking/bulk-buy', 'Cms\BookingController@getBulkBuy');
	
});
