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

Route::get('/hello',function(){
    return 'Hello World!';
});

Route::get('/createUser', 'helloController@createUser');
Route::get('/createSession', 'helloController@createSession');
Route::get('/readSession', 'helloController@readSession');
Route::get('/flash', 'helloController@flash');


Route::get('/vakaras/{name}', 'helloController@labasVakaras');
Route::get('/turis/{x}/{y}/{z}', 'helloController@turis');

Route::get('/', 'contentController@home');
Route::get('/about', 'contentController@about')->name('about');

// Countries

Route::resource('region', 'regionController');
Route::resource('country', 'countryController');
Route::resource('continent', 'continentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'contentController@admin')->middleware('admin');


//Route::get('/logout', 'HomeController@logout')->name('logout');

Route::resource('statistic', 'statisticController');