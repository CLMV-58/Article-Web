<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'account-management', 'as' => 'account-management.'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'AccountManagementController@index']);

    Route::get('create', ['as' => 'create', 'uses' => 'AccountManagementController@create']);
    Route::post('create', ['as' => 'store', 'uses' => 'AccountManagementController@store']);

    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'AccountManagementController@edit']);
    Route::post('edit/{id}', ['uses' => 'AccountManagementController@update']);

    Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'AccountManagementController@delete']);

    Route::get('{id}', ['as' => 'show', 'uses' => 'AccountManagementController@show']);
});

Route::group(['prefix' => 'user-management', 'as' => 'user-management.'], function () {

    Route::get('/', ['as' => 'index', 'uses' => 'UserManagementController@index']);

    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'UserManagementController@edit']);
    Route::post('edit/{id}', ['uses' => 'UserManagementController@update']);

    Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'UserManagementController@delete']);

    Route::get('{id}', ['as' => 'show', 'uses' => 'UserManagementController@show']);

});