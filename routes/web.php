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

Route::get('daily-qs', function () {
    return view('daily-qs');
});

Route::post('daily-qs', 'AnswersController@storeMany');

Route::post('show-answers', 'AnswersController@index');