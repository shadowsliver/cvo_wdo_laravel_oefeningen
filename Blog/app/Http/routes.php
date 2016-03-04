<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('login', ['as' => 'auth.loginform', 'uses'=>'Auth\AuthController@showLoginForm']);
    Route::post('login', ['as'=>'auth.login', 'uses'=>'Auth\AuthController@login']);
    Route::get('logout', ['as'=>'auth.logout', 'uses'=>'Auth\AuthController@logout']);

    Route::resource('admin/posts', 'Admin\PostsController');

    Route::get('/', ['as'=>'blog.index', 'uses'=>'BlogController@index']);
    Route::get('post/{id}', ['as'=>'blog.show', 'uses'=>'BlogController@show']);


});

