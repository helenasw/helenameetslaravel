<?php

Auth::routes();

/** View the home page. Requires login. */
Route::get('/', 'HomeController@index')->name('home');

/** View the daily survey. Requires login. */
Route::get('survey', 'SurveyController@index');

/** Submit the survey and store the results. Requires login. */
Route::post('survey', 'AnswersController@storeMany');
