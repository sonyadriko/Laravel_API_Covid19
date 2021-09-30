<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', 'infoController@index');
Route::view('/','index')->name('dashboard');

Route::get('/data_ina', 'infoController@pageina');

Route::get('/data_global', 'infoController@pageglobal');

