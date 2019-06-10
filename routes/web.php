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

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', 'postAdminController@index');
    Route::get('/admin/users', 'UserController@index');
    Route::get('/admin/users/create', 'UserController@create');
    Route::post('/admin/users', 'UserController@store');
    Route::get('/admin/users/{id}/edit', 'UserController@edit');
    Route::post('/admin/users/{id}/update', 'UserController@update');
    Route::post('/admin/users/{id}/delete', 'UserController@destroy');
    Route::post('/admin/users/{id}/delete', 'UserController@destroy');
    Route::get('/admin/posts', 'PostController@indexAdmin');
    Route::get('/admin/posts/edit/{post}', 'PostController@editAdmin')->name('editAdminPost');
    Route::put('/admin/posts/edit/{post}', 'PostController@updateAdmin')->name('updateAdminPost');
    Route::delete('/admin/posts/delete/{post}', 'PostController@destroy')->name('deletePost');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/publication/post', 'PostController@createPost')->name('registerPost');
    Route::post('/publication/post', 'PostController@storePost')->name('registraPost');
    Route::get('/publication/post/edit/{post}', 'PostController@edit')->name('edit');
    Route::get('/home', 'PostController@index');
    Route::put('/publication/post/{id}/update', 'PostController@update')->name('update');
    Route::delete('/publication/post/{id}/delete', 'PostController@destroy')->name('destroy');
    Route::get('/publication/post/{id}', 'PostController@show');

    Route::get('/admin', 'postAdminController@index');
    Route::get('/admin/users', 'UserController@index');
    Route::get('/admin/users/create', 'UserController@create');
    Route::post('/admin/users', 'UserController@store');
    Route::get('/admin/users/{id}/edit', 'UserController@edit');
    Route::post('/admin/users/{id}/update', 'UserController@update');
    Route::post('/admin/users/{id}/delete', 'UserController@destroy');
    Route::post('/admin/users/{id}/delete', 'UserController@destroy');
    Route::get('/admin/posts', 'PostController@indexAdmin');
    Route::get('/admin/posts/edit/{post}', 'PostController@editAdmin')->name('editAdminPost');
    Route::put('/admin/posts/edit/{post}', 'PostController@updateAdmin')->name('updateAdminPost');
    Route::delete('/admin/posts/delete/{post}', 'PostController@destroy')->name('deletePost');
});

Route::get('/views/EditPost/{id}', 'ViewPostController@editPost');
