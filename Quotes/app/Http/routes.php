<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', ['as' => 'quote.index', 'uses' => 'QuoteController@index']);
    Route::get('post/{id}', ['as' => 'quote.show', 'uses' => 'QuoteController@show']);


    Route::get('/create', [
        'as'=>'quote.create',
        'uses'=>'QuoteController@create'
    ]);

    Route::post('/create', [
        'as'=>'quote.store',
        'uses'=>'QuoteController@store'
    ]);

    Route::get('/{id}/delete', [
        'as'=>'quote.delete',
        'uses'=>'QuoteController@destroy'
    ]);

    Route::get('/{id}/edit', [
        'as' => 'quote.edit',
        'uses' => 'QuoteController@edit'
    ]);

    Route::put('/{id}/edit', [
        'as' => 'quote.update',
        'uses' => 'QuoteController@update'
    ]);
});
