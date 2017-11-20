<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'mainController@main');
Route::get('/orders', 'ordersController@orders');
Route::get('/transport', 'transportController@transport');
Route::get('/tasks', 'tasksController@tasks');
Route::get('/config', 'configController@config');
Route::get('/about', 'mainController@about')->name('about');

Route::resource('Statistic','statisticController');
Route::resource('Lithuania','lithuaniaController');

// Countries

Route::get('/country/{slug}', 'countryController@getCountry');