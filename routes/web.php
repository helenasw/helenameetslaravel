<?php

Route::get('daily-qs', 'DailyQsController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('daily-qs', 'AnswersController@storeMany');

Route::post('show-answers', 'AnswersController@index');
