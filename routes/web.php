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
Route::get('/publication/post', 'PostController@createPost')->name('createP');
Route::post('/publication/post', 'PostController@storePost')->name('registerPost');
Route::get('/publication/post/show/{post}', 'PostController@show')->name('show');
Route::get('/home', 'ViewPostController@index');


Route::get('/admin/users','UserController@index');
Route::get('/admin/users/create','UserController@create');
Route::post('/admin/users','UserController@store');
Route::get('/admin/users{id}/edit','UserController@edit');
Route::get('/admin/users{id}/edit','UserController@update');
Route::post('/admin/users{id}/delete','UserController@destroy');

//ruta de editar publicación.
Route::get('/views/EditPost/{id}', 'ViewPostController@editPost');
