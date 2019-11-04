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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::resource('/apartments','ApartmentController')->only(['show']);
Route::resource('/bookings','BookingController')->only(['index','store'])->middleware('auth');
Route::post('/contact','ContactUsController@store')->name('contact.store');



Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/users', 'UserController')->only(['index','destroy']);
    Route::resource('/apartments', 'ApartmentController')->except(['show']);    
    Route::resource('/bookings', 'BookingController')->except(['create','store']); 
    Route::resource('/messages', 'ContactUsController')->only(['index','destroy']);

    Route::get('login-admin', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register')->name('admin.register');

});


