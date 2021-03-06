<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/{author?}',['uses'=>'QuoteController@getIndex','as'=>'index']);

Route::post('/new', ['uses'=>'QuoteController@postQuote', 'as'=>'create']);

Route::get('/delete/{quote_id}', ['uses'=>'QuoteController@getDeleteQuote', 'as'=>'delete']);
// Route::group(['prefix'=>'do'],function(){
//
// });
