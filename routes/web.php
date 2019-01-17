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

Route::get('/', 'Home\HomeController@index')->name('home');
Route::get('the-series', 'Home\HomeController@index')->name('the-series.index');
Route::get('screenings', 'Home\HomeController@index')->name('screenings.index');
Route::get('press-kit', 'Home\HomeController@index')->name('press-kit.index');
Route::get('resources', 'Home\HomeController@index')->name('resources.index');
Route::get('contact-us', 'Home\HomeController@index')->name('contact-us.index');
