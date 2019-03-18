<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->name('api.')->group(function () {

    //Rotas de establishments
    Route::prefix('establishments')->group(function(){
		Route::get('/', 'EstablishmentController@index')->name('index_establishments');
		Route::get('/{id}', 'EstablishmentController@show')->name('single_establishments');
		Route::post('/', 'EstablishmentController@store')->name('store_establishments');
		Route::put('/{id}', 'EstablishmentController@update')->name('update_establishments');
		Route::delete('/{id}', 'EstablishmentController@delete')->name('delete_establishments');
	});
});
