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
    return view('welcome');
});

Route::get('showcategories', 'categoryController@index');
Route::get('showcategoriesbyid/{id}', 'categoryController@show');
Route::get('deletecategory/{id}', 'categoryController@destroy');
Route::patch('categoryupdate/{data}','categoryController@update');
Route::post('addcategory', 'categoryController@add');


Route::get('showitems', 'itemController@index');
Route::get('showitemsbyid/{id}', 'itemController@show');
Route::get('deleteitem/{id}', 'itemController@destroy');
Route::patch('itemupdate/{data}','itemController@update');
Route::post('additem', 'itemController@add');

/*Route::get('/register', function () {
    return view('register');
});

Route::post('/register', 'teamController@add');*/

//Route::post('/register', 'teamController@add');
