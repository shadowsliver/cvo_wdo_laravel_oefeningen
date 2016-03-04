<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', [
        'uses'=>'GamesController@index',
        'as' => 'game.index'
    ]);

    Route::get('create', [
        'uses'=>'GamesController@create',
        'as' => 'game.create'
    ]);

    Route::post('create', [
        'uses'=>'GamesController@store',
        'as' => 'game.store'
    ]);

    Route::get('/{id}/confirm', [
        'as'=>'game.confirm',
        'uses'=>'GamesController@destroyConfirm'
    ]);

    Route::delete('/{id}/delete', [
        'as'=>'game.delete',
        'uses'=>'GamesController@destroy'
    ]);

    Route::get('/{id}/edit', [
        'as'=>'game.edit',
        'uses'=>'GamesController@edit'
    ]);

    Route::put('/{id}/edit', [
        'as'=>'game.update',
        'uses'=>'GamesController@update'
    ]);

});
