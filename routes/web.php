<?php


Route::get('/', 'TaskController@index');

Route::get('/create', 'TaskController@create');

Route::post('/create', 'TaskController@store');

Route::get('/read/{id}', 'TaskController@show');

Route::get('/edit/{id}', 'TaskController@edit');

Route::post('/edit/{id}', 'TaskController@update');
	
Route::get('/delete/{id}', 'TaskController@delete');