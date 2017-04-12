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
    // Add MPP
    Route::get('/mpp', 'CreatorController@getAddMpp')->name('creator.add.mpp');
    Route::post('/mpp', 'CreatorController@postAddMpp')->name('creator.add.mpp');
    Route::get('view/mpp', 'CreatorController@getViewMpp')->name('creator.view.mpp');
    // Edit MPP
    Route::get('/mpp/edit/{id}', 'CreatorController@getEditMpp')->name('creator.edit.mpp');
    Route::post('/mpp/edit/{id}', 'CreatorController@postEditMpp')->name('creator.edit.mpp');
    //  Send for Review MPP
    Route::get('/mpp/review/{id}', 'CreatorController@getReviewMpp')->name('creator.review.mpp');
    //    Delete MPP
    Route::get('/mpp/delete/{id}', 'CreatorController@deleteMpp')->name('creator.delete.mpp');
    // APP
    Route::get('/app', 'CreatorController@getAddApp')->name('creator.add.app');
    Route::post('/app', 'CreatorController@postAddApp')->name('creator.add.app');
    Route::get('view/app', 'CreatorController@getViewApp')->name('creator.view.app');
    // Edit APP
    Route::get('/app/edit/{id}', 'CreatorController@getEditApp')->name('creator.edit.app');
    Route::post('/app/edit/{id}', 'CreatorController@postEditApp')->name('creator.edit.app');
    //  Send for Review APP
    Route::get('/app/review/{id}', 'CreatorController@getReviewApp')->name('creator.review.app');
    //    Delete APP
    Route::get('/app/delete/{id}', 'CreatorController@deleteApp')->name('creator.delete.app');
});
// Reviewer Routes
Route::group(['prefix' => 'reviewer', 'middleware' => 'reviewer'], function () {
    Route::get('/dashboard', 'ReviewerController@index')->name('reviewer.dashboard');
    Route::get('view/mpp', 'ReviewerController@getViewMpp')->name('reviewer.view.mpp');
    Route::get('view/app', 'ReviewerController@getViewApp')->name('reviewer.view.app');
    //  Decline Review MPP
    Route::get('/mpp/decline/{id}', 'ReviewerController@getDeclineMpp')->name('reviewer.decline.mpp');
    //  Send for Approval MPP
    Route::get('/mpp/approve/{id}', 'ReviewerController@getApproveMpp')->name('reviewer.approve.mpp');
    //  Decline Review MPP
    Route::get('/app/decline/{id}', 'ReviewerController@getDeclineApp')->name('reviewer.decline.app');
    //  Send for Approval MPP
    Route::get('/app/approve/{id}', 'ReviewerController@getApproveApp')->name('reviewer.approve.app');
});
// Approver Routes
Route::group(['prefix' => 'approver', 'middleware' => 'approver'], function () {
    Route::get('/dashboard', 'ApproverController@index')->name('approver.dashboard');
    Route::get('view/mpp', 'ApproverController@getViewMpp')->name('approver.view.mpp');
    Route::get('view/app', 'ApproverController@getViewApp')->name('approver.view.app');
    //  Decline Mpp
    Route::get('/mpp/decline/{id}', 'ApproverController@getDeclineMpp')->name('approver.decline.mpp');
    //  Approve Mpp
    Route::get('/mpp/approve/{id}', 'ApproverController@getApproveMpp')->name('approver.approve.mpp');
    //  Decline App
    Route::get('/app/decline/{id}', 'ApproverController@getDeclineApp')->name('approver.decline.app');
    //  Approve App
    Route::get('/app/approve/{id}', 'ApproverController@getApproveApp')->name('approver.approve.app');
});
// Bidder Routes
Route::group(['prefix' => 'bidder', 'middleware' => 'bidder'], function () {
    Route::get('/dashboard', 'BidderController@index')->name('bidder.dashboard');
});



