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

Route::get('/home', 'PageController@dashboard')->name('dashboard');
Route::get('/discover', 'PageController@discover')->name('discover');
Route::get('/discover/whiskey', 'PageController@discoverSpirit');
Route::get('/discover/whiskey/{id}', 'PageController@discoverSingleSpirit');
Route::get('/contribute', 'PageController@contribute')->name('contribute');
Route::get('/contribute/spirit', 'PageController@contributeSpirit')->name('contributeSpirit');
Route::get('/contribute/distiller', 'PageController@contributeDistiller')->name('contributeDistiller');

Route::post('/contribute/spirit', 'SpiritController@createSpirit'); 
Route::post('/contribute/distiller', 'SpiritController@createDistiller');