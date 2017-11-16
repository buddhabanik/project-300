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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/ex', 'SessionsController@tem');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/student', 'RegisterController@studentcreate');
Route::post('/student', 'RegisterController@studentstore');

Route::get('/teacher', 'RegisterController@teachercreate');
Route::post('/teacher', 'RegisterController@teacherstore');

Route::get('/staff', 'RegisterController@staffcreate');
Route::post('/staff', 'RegisterController@staffstore');

