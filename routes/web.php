<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;


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



// -------------------------LOGIN-------------------------

Auth::routes(['verify' => true]);
Route::get('logoutadmin', 'Auth\LogoutController@getLogoutAdmin');
Route::get('logoutpage', 'Auth\LogoutController@getLogoutPage');


// -------------------Auth-Setting-------------------------

Route::get('account{id}', 'PageController@accountSetting');
Route::put('AuthSetting/{auth_id}','PageController@authUpdate');


// ---------------------Langguages-------------------------

Route::get('setLocale/{locale}', function ($locale) {
  if (in_array($locale, Config::get('app.locales'))) {
    Session::put('locale', $locale);
  }
  return redirect()->back();
})->name('app.setLocale');


// -----------------------Layout-------------------------

Route::get('luis', 'PageController@getIndex');
Route::get('luis', 'PageController@menu');
Route::get('luis', 'PageController@getObject');

Route::get('search', 'SearchController@pageSearch');
Route::get('contact','PageController@getContact');
Route::get('games-{cats_id}', 'PageController@getGame');
Route::get('apps-{cats_id}', 'PageController@getApp');
Route::get('types-{cats_id}-{id}', 'PageController@getType');
Route::get('detail-{types_id}-{id}', 'PageController@getDetail');


// -------------------------ADMIN-------------------------

Route::get('admin', 'adminController@index');
Route::get('admin', 'adminController@OverView');
Route::get('admin-search', 'SearchController@adminSearch');

Route::get('list-admin','adminController@listAdmin');
Route::get('add-admin','adminController@addAdmin');
Route::post('save-admin','adminController@store');
Route::get('edit-admin/{admin_id}','adminController@get');
Route::put('update-admin/{admin_id}','adminController@update');
Route::delete('delete-admin/{admin_id}','adminController@delete');


// -------------------------CATEGORY----------------------

Route::get('list-category','CategoryController@listCategory');
Route::get('add-category','CategoryController@addCategory');
Route::post('save-category','CategoryController@store');
Route::get('edit-category/{category_id}','CategoryController@get');
Route::put('update-category/{category_id}','CategoryController@update');
Route::delete('delete-category/{category_id}','CategoryController@delete');


// -------------------------TYPE--------------------------

Route::get('list-type','TypeController@listType');
Route::get('add-type','TypeController@addType');
Route::post('save-type','TypeController@store');
Route::get('edit-type/{type_id}','TypeController@get');
Route::put('update-type/{type_id}','TypeController@update');
Route::delete('delete-type/{type_id}','TypeController@delete');


// -------------------------GAME-------------------------

Route::get('list-games','GameController@listGame');
Route::get('new-games','GameController@addGame');
Route::post('save-games/{category_id}','GameController@saveGame');
Route::get('edit-games/{category_id}/{categories_id}','GameController@editGame');
Route::put('update-games/{object_id}','GameController@update');
Route::delete('delete-games/{object_id}','GameController@delete');

// -------------------------APP-------------------------

Route::get('list-apps','AppController@listApp');
Route::get('new-apps','AppController@addApp');
Route::post('save-apps/{category_id}','AppController@saveApp');
Route::get('edit-apps/{object_id}/{categories_id}','AppController@editApp');
Route::put('update-apps/{object_id}','AppController@update');
Route::delete('delete-apps/{object_id}','AppController@delete');



// Google login
Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

// Facebook login
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

// Github login
Route::get('login/github', 'Auth\LoginController@redirectToGithub')->name('login.github');
Route::get('login/github/callback', 'Auth\LoginController@handleGithubCallback');