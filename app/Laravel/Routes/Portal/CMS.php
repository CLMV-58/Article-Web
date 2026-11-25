<?php

Route::group(['as' => 'cms.', 'prefix' => 'cms'], function() {
    Route::get('home', ['as' => 'home', 'uses' => 'MainController@home']);

    Route::get('article', ['as' => 'article', 'uses' => 'MainController@article']);

    Route::get('about', ['as' => 'about', 'uses' => 'CMS\AboutCMSController@index']);
    Route::post('about', ['as' => 'store', 'uses' => 'CMS\AboutCMSController@store']);

    Route::get('contact', ['as' => 'contact', 'uses' => 'MainController@contact']);

});