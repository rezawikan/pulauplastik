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
Route::get('resources/infographic', 'Resources\ResourcesController@infographic')->name('infographic.index');
Route::get('resources/media', 'Resources\ResourcesController@media')->name('media.index');
Route::get('resources/others', 'Resources\ResourcesController@others')->name('others.index');
Route::get('contact-us', 'ContactUs\ContactUsController@index')->name('contact-us.index');
Route::post('contact-us', 'ContactUs\ContactUsController@store')->name('contact-us.store');

Auth::routes(['register' => false]);
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/infographic', 'Infographic\InfographicController@index')->name('dashboard.infographic.index');
    Route::get('/infographic/create', 'Infographic\InfographicController@create')->name('dashboard.infographic.create');
    Route::post('/infographic', 'Infographic\InfographicController@store')->name('dashboard.infographic.store');
    Route::put('/infographic/{infographic}', 'Infographic\InfographicController@update')->name('dashboard.infographic.update');
    Route::get('/infographic/{infographic}/edit', 'Infographic\InfographicController@edit')->name('dashboard.infographic.edit');
    Route::delete('/infographic/destroy/{id}', 'Infographic\InfographicController@destroy')->name('dashboard.infographic.destroy');

    Route::get('/media', 'Media\MediaController@index')->name('dashboard.media.index');
    Route::get('/media/create', 'Media\MediaController@create')->name('dashboard.media.create');
    Route::post('/media', 'Media\MediaController@store')->name('dashboard.media.store');
    Route::put('/media/{id}', 'Media\MediaController@update')->name('dashboard.media.update');
    Route::get('/media/{id}/edit', 'Media\MediaController@edit')->name('dashboard.media.edit');
    Route::delete('/media/destroy/{id}', 'Media\MediaController@destroy')->name('dashboard.media.destroy');

    Route::get('/other', 'Other\OtherController@index')->name('dashboard.other.index');
    Route::get('/other/create', 'Other\OtherController@create')->name('dashboard.other.create');
    Route::post('/other', 'Other\OtherController@store')->name('dashboard.other.store');
    Route::put('/other/{id}', 'Other\OtherController@update')->name('dashboard.other.update');
    Route::get('/other/{id}/edit', 'Other\OtherController@edit')->name('dashboard.other.edit');
    Route::delete('/other/destroy/{id}', 'Other\OtherController@destroy')->name('dashboard.other.destroy');

    Route::get('/othertype', 'OtherType\OtherTypeController@index')->name('dashboard.othertype.index');
    Route::get('/othertype/create', 'OtherType\OtherTypeController@create')->name('dashboard.othertype.create');
    Route::post('/othertype', 'OtherType\OtherTypeController@store')->name('dashboard.othertype.store');
    Route::put('/othertype/{id}', 'OtherType\OtherTypeController@update')->name('dashboard.othertype.update');
    Route::get('/othertype/{id}/edit', 'OtherType\OtherTypeController@edit')->name('dashboard.othertype.edit');
    Route::delete('/othertype/destroy/{id}', 'OtherType\OtherTypeController@destroy')->name('dashboard.othertype.destroy');

    Route::get('/otherlang', 'OtherLang\OtherLangController@index')->name('dashboard.otherlang.index');
    Route::get('/otherlang/create', 'OtherLang\OtherLangController@create')->name('dashboard.otherlang.create');
    Route::post('/otherlang', 'OtherLang\OtherLangController@store')->name('dashboard.otherlang.store');
    Route::put('/otherlang/{id}', 'OtherLang\OtherLangController@update')->name('dashboard.otherlang.update');
    Route::get('/otherlang/{id}/edit', 'OtherLang\OtherLangController@edit')->name('dashboard.otherlang.edit');
    Route::delete('/otherlang/destroy/{id}', 'OtherLang\OtherLangController@destroy')->name('dashboard.otherlang.destroy');
});
