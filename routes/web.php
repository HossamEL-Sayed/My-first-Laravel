<?php

//main page
Route::view('/', 'index');

//Blocks
Route::resource('blocks', 'BlockController');
Route::post('blocks', array('as'=>'block', 'uses'=>'BlockController@store'));

//Categories
Route::resource('categories', 'CategoryController');
Route::post('categories', array('as'=>'category', 'uses'=>'CategoryController@store'));

//Tasks
Route::resource('tasks', 'TaskController');
Route::post('tasks', array('as'=>'task', 'uses'=>'TaskController@store'));

