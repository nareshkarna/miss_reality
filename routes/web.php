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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/services', 'ServiceController@services')->name('services');
Route::get('/admin/create_service', 'ServiceController@add_service')->name('services');
Route::post('/admin/save_service', 'ServiceController@saveService');


// *** Front End Site routes //

Route::get('/', 'SiteController@index');


// *** Front End Site routes //

// *** Facebook auth routes //
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
// *** Facebook auth routes //
