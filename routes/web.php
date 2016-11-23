<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {

    return view('site.home');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {

	Route::get('contacts', 'ActivityController@allContacts');
	
});

/*
    |--------------------------------------------------------------------------
    | Session Controller Routes
    |--------------------------------------------------------------------------
    |
    | Routes to handle session things
    |
    */
Route::get('logout', 'SessionController@logout');
Route::get('login', 'SessionController@login');
Route::post('login', 'SessionController@handleLogin');
Route::get('register', 'SessionController@register');
Route::post('register', 'SessionController@handleRegister');

