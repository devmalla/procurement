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
// Register Routes
Route::get('/register', 'RegistrationController@getRegister')->name('register');
Route::post('/register', 'RegistrationController@postRegister')->name('register');
// Login Routes
Route::post('/', 'LoginController@postLogin')->name('login');
// Logout Route
Route::get('/logout', 'LoginController@logout')->name('logout');

// Super Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', 'SuperAdminController@index')->name('admin.dashboard');
    // Organization
    Route::get('/organization', 'SuperAdminController@getAddOrganization')->name('admin.add.organization');
    Route::post('/organization', 'SuperAdminController@postAddOrganization')->name('admin.add.organization');
    Route::get('view/organization', 'SuperAdminController@getViewOrganization')->name('admin.view.organization');
    // User
    Route::get('/user', 'SuperAdminController@getAddUser')->name('admin.add.user');
    Route::post('/user', 'SuperAdminController@postAddUser')->name('admin.add.user');
    Route::get('view/user', 'SuperAdminController@getViewUser')->name('admin.view.user');
});
// Creator Routes
Route::group(['prefix' => 'creator', 'middleware' => 'creator'], function () {
    Route::get('/dashboard', 'CreatorController@index')->name('creator.dashboard');
});
// Approver Routes
Route::group(['prefix' => 'approver', 'middleware' => 'approver'], function () {
    Route::get('/dashboard', 'ApproverController@index')->name('approver.dashboard');
});
// Reviewer Routes
Route::group(['prefix' => 'reviewer', 'middleware' => 'reviewer'], function () {
    Route::get('/dashboard', 'ReviewerController@index')->name('reviewer.dashboard');
});
// Bidder Routes
Route::group(['prefix' => 'bidder', 'middleware' => 'bidder'], function () {
    Route::get('/dashboard', 'BidderController@index')->name('bidder.dashboard');
});



