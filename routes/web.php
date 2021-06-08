<?php

use Illuminate\Support\Facades\Route;

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




// -----------------------Layout-------------------------

Route::get('luis', 'PageController@getIndex');
Route::get('luis', 'PageController@menu');
Route::get('luis', 'PageController@getObject');

Route::get('search', 'SearchController@search');
Route::get('search', 'SearchController@searchLogic');
Route::get('contact','PageController@getContact');
Route::get('games-{cats_id}', 'PageController@getGame');
Route::get('apps-{cats_id}', 'PageController@getApp');
Route::get('types-{cats_id}-{id}', 'PageController@getType');
Route::get('detail-{types_id}-{id}', 'PageController@getDetail');



// ---------------------Langguages-------------------------

Route::get('setLocale/{locale}', function ($locale) {
  if (in_array($locale, Config::get('app.locales'))) {
    Session::put('locale', $locale);
  }
  return redirect()->back();
})->name('app.setLocale');



// -------------------------LOGIN-------------------------

Route::get('login', 'UserController@getLoginAdmin');
Route::post('login', 'UserController@postLoginAdmin');
Route::get('logoutadmin', 'UserController@getLogoutAdmin');

Route::get('sign-up', 'UserController@getSignUpAdmin');
Route::post('new-admin','UserController@createAdmin');
Route::get('logoutpage', 'UserController@getLogoutPage');




// -------------------------ADMIN-------------------------

Route::get('admin', 'adminController@index');
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



// TEST