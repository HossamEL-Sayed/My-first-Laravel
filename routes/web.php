<?php

//main page

Route::get('/', function(){

	return view('index');
});

//Blocks

Route::get('/block', 'BlockController@index');

Route::get('/createBlock', 'BlockController@createBlock');

Route::post('/createBlock', 'BlockController@storeBlock');

Route::get('/showBlock/{block}', 'BlockController@showBlock');

Route::get('/editBlock/{block}', 'BlockController@editBlock');

Route::post('/editBlock/{block}', 'BlockController@updateBlock');

Route::get('/deleteBlock/{id}', 'BlockController@deleteBlock');

//Categories

Route::get('/category', 'CategoryController@index');

Route::get('/createCat', 'CategoryController@createCat');

Route::post('/createCat', 'CategoryController@storeCat');

Route::get('/showCat/{category}', 'CategoryController@showCat');

Route::get('/editCat/{category}', 'CategoryController@editCat');

Route::post('/editCat/{category}', 'CategoryController@updateCat');

Route::get('/deleteCat/{id}', 'CategoryController@deleteCat');


//Tasks

Route::post('/showCat/{category}', 'TaskController@storeCat');

Route::post('/showBlock/{block}', 'TaskController@storeBlock');

Route::get('/task', 'TaskController@index');

Route::get('/create', 'TaskController@create');

Route::post('/create', 'TaskController@store');

Route::get('/show/{task}', 'TaskController@show');

Route::get('/edit/{task}', 'TaskController@edit');

Route::post('/edit/{task}', 'TaskController@update');
	
Route::get('/delete/{id}', 'TaskController@delete');