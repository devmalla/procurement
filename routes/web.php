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
// Homepage
Route::get('/', 'HomepageController@index')->name('homepage');

//// Register Routes
//Route::get('/register', 'RegistrationController@getRegister')->name('register');
//Route::post('/register', 'RegistrationController@postRegister')->name('register');
//// Login Routes
//Route::get('/organizer/login', 'LoginController@getOrganizerLogin')->name('organizer.login');
//Route::post('/organizer/login', 'LoginController@postLogin')->name('login');
//Route::get('/user/login', 'LoginController@getUserLogin')->name('user.login');
//Route::post('/user/login', 'LoginController@postLogin')->name('login');
//// Logout Route
//Route::get('/logout', 'LoginController@logout')->name('logout');
