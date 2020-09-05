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
    return view('login');
    // return view('welcome');
});

// Google login
Route::get('google/redirect', 'AuthController@redirectToProvider')->name('google_login');
Route::get('google/callback', 'AuthController@handleProviderCallback');

// Facebook login
Route::get('facebook/redirect', 'AuthController@facebookRedirectToProvider')->name('facebook_login');
Route::get('facebook/callback', 'AuthController@facebookHandleProviderCallback');

// LinkedIn login
Route::get('linkedin/redirect', 'AuthController@linkedinRedirectToProvider')->name('linkedin_login');
Route::get('linkedin/callback', 'AuthController@linkedinHandleProviderCallback');

// Twitter login
Route::get('twitter/redirect', 'AuthController@twitterRedirectToProvider')->name('twitter_login');
Route::get('twitter/callback', 'AuthController@twitterHandleProviderCallback');

// Github login
Route::get('github/redirect', 'AuthController@githubRedirectToProvider')->name('github_login');
Route::get('github/callback', 'AuthController@githubHandleProviderCallback');

Route::post('admin_login',['as' => 'admin_login','uses' => 'AuthController@adminLogin']);
Route::get('admin_logout',['as' => 'admin_logout','uses' => 'AuthController@adminLogout']);

Route::group(['namespace' => 'Admin','middleware' => 'auth'],function(){
    Route::get('home',['as' => 'home','uses' => 'DashboardController@home']);
});
