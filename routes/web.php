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

Auth::routes();
Route::get('/publication/post', 'PostController@createPost')->name('registerPost');
Route::post('/publication/post', 'PostController@storePost')->name('registraPost');
Route::get('/publication/post/show/{post}', 'PostController@show')->name('show');
Route::get('/home', 'PostController@index');
Route::post('/publication/post/{id}/update','UserController@update');
Route::get('/publication/post/{id}/delete','PostController@destroy');
Route::get('/publication/post/{id}','PostController@show');


Route::get('/admin/users','UserController@index');
Route::get('/admin/users/create','UserController@create');
Route::post('/admin/users','UserController@store');
Route::get('/admin/users/{id}/edit','UserController@edit');
Route::post('/admin/users/{id}/update','UserController@update');
Route::post('/admin/users/{id}/delete','UserController@destroy');