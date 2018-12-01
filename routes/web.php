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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/test', 'ListingController@test')->name('test');
Route::post('/test', 'ListingController@test')->name('save');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/add-listing', 'ListingController@index')->name('add');
    Route::post('/save-item', 'ListingController@save')->name('add');

});


