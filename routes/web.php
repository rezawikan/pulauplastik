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
Route::get('the-series', 'TheSeries\TheSeriesController@index')->name('the-series.index');
Route::get('screenings', 'Screenings\ScreeningsController@index')->name('screenings.index');
Route::get('host-a-screening', 'Screenings\HostAScreeningController@index')->name('host-a-screening.index');
Route::post('host-a-screening', 'Screenings\HostAScreeningController@store')->name('host-a-screening.store');
Route::get('press-kit', 'PressKit\PressKitController@index')->name('press-kit.index');
Route::get('resources', 'Resources\ResourcesController@index')->name('resources.index');
Route::get('contact-us', 'ContactUs\ContactUsController@index')->name('contact-us.index');
Route::post('contact-us', 'ContactUs\ContactUsController@store')->name('contact-us.store');
