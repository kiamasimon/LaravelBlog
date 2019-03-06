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
    return view('posts.index');
});

Route::get('/', 'PostController@getIndex')->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/author/posts', 'HomeController@getPostForm')->name('post.form');
Route::post('/author/posts', 'HomeController@createPost')->name('post.form');
Route::get('/author/posts/detail/{id}', 'HomeController@getPost')->name('post.detail');
Route::get('/author/posts/edit/{id}', 'HomeController@editPost')->name('post.edit');
Route::post('/author/posts/edit/{id}', 'HomeController@updatePost')->name('post.update');
Route::get('/author/posts/delete/{id}', 'HomeController@deletePost')->name('post.delete');
Route::get('/posts/read/{post_id}', 'PostController@getFullPost')->name('post.read');