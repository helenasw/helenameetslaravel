<?php

Route::get('daily-qs', function () {
    return view('daily-qs');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('daily-qs', 'AnswersController@storeMany');

Route::post('show-answers', 'AnswersController@index');
