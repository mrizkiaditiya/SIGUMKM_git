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
// Route::get('/maps', function () {
//     return view('layouts.home');
// });

Route::group(
	['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']],
	function () {
        Route::get('dashboard', 'DashboardController@index');
        Route::resource('categories', 'CategoryController');
        Route::get('mapsumkm', 'MapsController@index');
        Route::get('tableumkm', 'TablemapsController@index');
        Route::post('post','MapsController@store')->name('admin.store');
       
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('admin/mapsumkm', 'mapscontroller@index');
// Route::post('/post','MapsController@store')->name('google.map.store');

// Route::prefix('google-map')->group(function () {
//     Route::get('/','GoogleMapController@index')->name('google.map.index');
//     Route::post('/post','GoogleMapController@store')->name('google.map.store');
// });