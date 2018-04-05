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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/thread/{id}',['as' => 'home.thread', 'uses'=>'AdminThreadsController@Thread']);

/** ROUTES **/
/** Admin Routes  **/
Route::get('/admin', function (){
    return view('admin.index');
});


/** Admin Routes Users **/

Route::resource('admin/users', "AdminUsersController");
Route::resource('admin/comments', "AdminCommentController");
Route::resource('admin/threads', "AdminThreadsController");
Route::resource('admin/categories', "AdminCategoriesController");
