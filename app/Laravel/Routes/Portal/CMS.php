<?php

Route::group(['as' => 'cms.', 'prefix' => 'cms'], function() {
    Route::get('home', ['as' => 'home', 'uses' => 'MainController@home']);
    Route::get('article', ['as' => 'article', 'uses' => 'MainController@article']);
    Route::get('about', ['as' => 'about', 'uses' => 'MainController@about']);
    Route::get('contact', ['as' => 'contact', 'uses' => 'MainController@contact']);
});