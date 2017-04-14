<?php
Route::get('/', 'PagesController@home');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



Route::resource('flyers', 'FlyersController');
Route::get('all', 'FlyersController@all');
Route::get('about', 'FlyersController@about');
Route::get('contact', 'FlyersController@contact');
Route::get('{zip}/{street}', 'FlyersController@show');
Route::get('{zip}/{street}/edit', 'FlyersController@edit');
Route::post('{zip}/{street}/flyers', 'FlyersController@update');


Route::post('{zip}/{street}/photos', 'PhotosController@store');
Route::delete('photos/{id}', 'PhotosController@destroy');
Route::delete('flyer/{id}', 'FlyersController@destroy');

