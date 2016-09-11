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

Route::get('/', function () {
	return 'TODO: make landing page';
});

Auth::routes();