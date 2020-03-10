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
Route::get('/', 'HandlerController@landing')->name('landing');
Route::get('/login', 'AuthController@getLogin')->name('getLogin')->middleware('guest');

Route::get('/register', 'AuthController@getRegister')->name('getRegister')->middleware('guest');

Route::post('p/login', 'AuthController@postLogin')->name('postLogin');

Route::post('p/reg', 'AuthController@postRegister')->name('postRegister');

Route::get('/dashboard', 'HandlerController@dashboard')->name('dashboard');

Route::get('init', 'HandlerController@init')->name('init')->middleware('auth');

Route::resource('laporan', 'LaporanController');

Route::middleware('auth')->group(function (){

});

Route::post('/logout', 'AuthController@logout')->name('logout')->middleware('auth');