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



// -------------------------PAGES-------------------------

// lang
Route::get('setLocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
      Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('app.setLocale');
// lang
Route::get('luis', 'PageController@getIndex');
Route::get('luis', 'PageController@getMenu');

Route::get('search', 'SearchController@search');
Route::get('search', 'SearchController@searchLogic');
Route::get('contact','PageController@getContact');
Route::get('games', 'PageController@getGame');
Route::get('apps', 'PageController@getApp');
Route::get('types-{id}', 'PageController@getType');
Route::get('detail-{types_id}-{id}', 'PageController@getDetail');

// Route::get('/{any}', 'HeaderPageController@loadHeader');




// -------------------------LOGIN-------------------------
Route::get('login', 'AdminLogin@getLoginAdmin');
Route::post('login', 'AdminLogin@postLoginAdmin');
Route::get('logoutadmin', 'AdminLogin@getLogoutAdmin');

Route::get('sign-up', 'AdminLogin@getSignUpAdmin');
Route::post('new-admin','AdminLogin@createAdmin');
Route::get('logoutpage', 'AdminLogin@getLogoutPage');




// -------------------------ADMIN-------------------------

Route::get('admin', 'adminController@index');
Route::get('add-admin','adminController@addAdmin');
Route::post('save-admin','adminController@store');
Route::get('list-admin','adminController@listAdmin');
Route::get('edit-admin/{admin_id}','adminController@get');
Route::get('delete-admin/{admin_id}','adminController@delete');
Route::post('update-admin/{admin_id}','adminController@update');


// -------------------------CATEGORY----------------------

Route::get('list-category','CategoryController@listCategory');
Route::get('add-category','CategoryController@addCategory');
Route::post('save-category','CategoryController@store');
Route::get('edit-category/{category_id}','CategoryController@get');
Route::get('delete-category/{category_id}','CategoryController@delete');
Route::post('update-category/{category_id}','CategoryController@update');

// -------------------------TYPE--------------------------

Route::get('list-type','TypeController@listType');
Route::get('add-type','TypeController@addType');
Route::post('save-type','TypeController@store');
Route::get('edit-type/{type_id}','TypeController@get');
Route::get('delete-type/{type_id}','TypeController@delete');
Route::post('update-type/{type_id}','TypeController@update');

// -------------------------GAME-------------------------

Route::get('list-games','GameController@listGame');
Route::get('new-games','GameController@addGame');
Route::post('save-games/{category_id}','GameController@saveGame');
Route::get('edit-games/{category_id}/{categories_id}','GameController@editGame');
Route::post('update-games/{object_id}','GameController@update');
Route::get('delete-games/{object_id}','GameController@delete');

// -------------------------APP-------------------------

Route::get('list-apps','AppController@listApp');
Route::get('new-apps','AppController@addApp');
Route::post('save-apps/{category_id}','AppController@saveApp');
Route::get('edit-apps/{category_id}/{categories_id}','AppController@editApp');
Route::post('update-apps/{object_id}','AppController@update');
Route::get('delete-apps/{object_id}','AppController@delete');



// TEST
Route::get('users','UserController@index');
