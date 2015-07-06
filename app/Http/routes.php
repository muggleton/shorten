<?php


Route::get('/', function () {
	return view('welcome');
});

Route::group(['prefix' => 'api'], function () {
	Route::resource('links', 'LinksController');
});