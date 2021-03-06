<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('posts', 'PostController');

Route::resource('users', 'UserController');

Route::resource('jobs', 'JobController');

Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/users/{id}/proposals', 'UserController@showProposals');

// For jQuery
//Route::get('api/v1/users/{user}/posts', 'UserController@posts')->name('users.posts');

// in blade:
// $.get('<route'>, function (response) {
// console.dir(response)
//});