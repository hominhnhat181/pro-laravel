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
Route::get('luis', 'PageController@getIndex');
Route::get('luis', 'PageController@getMenu');
Route::get('contact','PageController@getContact');
Route::get('games', 'PageController@getGame');
Route::get('apps', 'PageController@getApp');
Route::get('types-{id}', 'PageController@getType');
Route::get('detail-{types_id}-{id}', 'PageController@getDetail');




// -------------------------LOGIN-------------------------
Route::get('login', 'AdminLogin@getLoginAdmin');
Route::get('logout', 'AdminLogin@getLogoutAdmin');
Route::post('login', 'AdminLogin@postLoginAdmin');

// -------------------------ADMIN-------------------------

Route::get('admin', 'adminController@getIndexAdmin');
Route::get('admin', 'adminController@categoryColum');

// -------------------------CATEGORY----------------------

Route::get('list-category','CategoryController@listCategory');
Route::get('add-category','CategoryController@addCategory');
Route::post('save-category','CategoryController@saveCategory');
Route::get('edit-category/{category_id}','CategoryController@editCategory');
Route::get('delete-category/{category_id}','CategoryController@deleteCategory');
Route::post('update-category/{category_id}','CategoryController@updateCategory');

// -------------------------TYPE--------------------------

Route::get('list-type','TypeController@listType');
Route::get('add-type','TypeController@addType');
Route::post('save-type','TypeController@saveType');

Route::get('edit-type/{type_id}','TypeController@editType');
Route::get('delete-type/{type_id}','TypeController@deleteType');
Route::post('update-type/{type_id}','TypeController@updateType');

// -------------------------OBJECT-------------------------

Route::get('list-object/{category_name}/{category_id}','ObjectController@listObject');
Route::get('add-object/{category_name}/{category_id}','ObjectController@addObject');
Route::post('save-object/{category_name}/{category_id}','ObjectController@saveObject');
Route::get('edit-object/{category_id}/{categories_id}','ObjectController@editObject');
Route::get('delete-object/{object_id}/{categories_id}','ObjectController@deleteObject');
Route::post('update-object/{category_name}/{category_id}','ObjectController@updateObject');