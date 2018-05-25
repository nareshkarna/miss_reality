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


// sevices section routes
Route::get('/admin/services', 'ServiceController@services')->name('services');
Route::get('/admin/create_service', 'ServiceController@add_service')->name('services');
Route::post('/admin/save_service', 'ServiceController@saveService');
Route::get('/admin/service/{id}','ServiceController@editService');
Route::post('/admin/service/{id}','ServiceController@updateService');
Route::get('/delete/service/{id}','ServiceController@deleteService');
Route::get('/admin/subServices/{id}', 'ServiceController@subServices')->name('services');
Route::get('/admin/create_service/{id}', 'ServiceController@addSubService')->name('services');


// *** Front End Site routes //
Route::get('/', 'SiteController@index');
// *** Front End Site routes //


// *** Facebook auth routes //
/*Route::get('login/{provider}', 'Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');
*/
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
// *** Facebook auth routes //
