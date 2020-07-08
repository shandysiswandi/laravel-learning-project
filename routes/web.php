<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@index')->name('index');
Route::get('/{id}', 'UserController@show')->name('show');
Route::post('/', 'UserController@store')->name('store');
