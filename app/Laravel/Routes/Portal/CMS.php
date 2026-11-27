<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'cms.', 'prefix' => 'cms'], function() {
    Route::get('home', ['as' => 'home', 'uses' => 'CMS\HomeController@index']);
    Route::post('home', ['as' => 'home.store', 'uses' => 'CMS\HomeController@store']);

    Route::get('article', ['as' => 'articles', 'uses' => 'MainController@article']);

    Route::get('about', ['as' => 'about', 'uses' => 'CMS\AboutController@index']);
    Route::post('about', ['as' => 'about.store', 'uses' => 'CMS\AboutController@store']);

    Route::get('contact', ['as' => 'contact', 'uses' => 'CMS\ContactController@index']);
    Route::post('contact', ['as' => 'contact.store', 'uses' => 'CMS\ContactController@store']);

});