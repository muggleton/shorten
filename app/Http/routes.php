<?php


Route::get('/', function () {
	return view('index');
});

Route::group(['prefix' => 'api'], function () {
	Route::resource('links', 'LinksController');
});