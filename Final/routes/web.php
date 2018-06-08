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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('ForemanForm','foremanController@foremanonly');
Route::get('homepage','RequestsController@Homepage');
Route::resource('Enrg', 'engrController');
Route::resource('Foreman', 'foremanController');
Route::resource('Requests', 'RequestsController');
Route::get('/home', 'HomeController@index')->name('home');
