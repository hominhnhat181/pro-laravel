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



// Route::get('login', 'AdminLogin@loginPage');


// login
Route::get('login', 'AdminLogin@getLoginAdmin');
Route::get('logout', 'AdminLogin@getLogoutAdmin');
Route::post('login', 'AdminLogin@postLoginAdmin');

// admin
// Route::get('admin', 'adminController@categoryColum');
Route::get('admin', 'adminController@getIndexAdmin');
Route::get('admin', 'adminController@categoryColum');


// -------------------------CATEGORY-------------------------
Route::get('list-category','CategoryController@listCategory');
Route::get('add-category','CategoryController@addCategory');
Route::post('save-category','CategoryController@saveCategory');

Route::get('edit-category/{category_id}','CategoryController@editCategory');
Route::get('delete-category/{category_id}','CategoryController@deleteCategory');
Route::post('update-category/{category_id}','CategoryController@updateCategory');

// -------------------------OBJECT-------------------------
Route::get('list-object','ObjectController@listObject');
Route::get('add-object','ObjectController@addObject');
Route::post('save-object','ObjectController@saveObject');

// Route::get('edit-object/{object_id}','CategoryController@editCategory');
// Route::get('delete-object/{object_id}','CategoryController@deleteCategory');
// Route::post('update-object/{object_id}','CategoryController@updateCategory');