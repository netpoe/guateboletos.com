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

/**
 * FRONT EVENTS
 */
Route::group(['namespace' => 'Front'], function(){
    Route::get('/evento/{event}', 'EventsController@show')->name('front.events.show');
    Route::get('/evento/{event}/lugares', 'EventsController@seatSelection')->name('front.events.seat-selection');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
