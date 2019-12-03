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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Auth'], function () {

  Route::get('login', 'LoginController@showLoginForm')->name('login');
  Route::post('login', 'LoginController@login');
  Route::post('logout', 'LoginController@logout')->name('logout');

  Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
  Route::post('register', 'RegisterController@register');
});

Route::group(['namespace' => 'User'], function () {

  Route::get('/historical-imc', 'UserController@showHistorical')->name('user.showHistorical');
  Route::get('/create-imc', 'UserController@createIMC')->name('user.createIMC');
  Route::post('/save', 'UserController@storeIMC')->name('user.save');
});
