<?php

use Illuminate\Support\Facades\Route;
$namespace = "App\Laravel\Controllers\Web";

Route::group(['as' => "web.",
    'namespace' => $namespace,
    'middleware' => ["web"]
],function() {
    Route::get('/', ['as' => 'home', 'uses' => 'MainController@index']);
    Route::get('about', ['as' => 'about', 'uses' => 'MainController@about']);
    Route::get('listing', ['as' => 'listing', 'uses' => 'MainController@listing']);
    Route::get('contact', ['as' => 'contact', 'uses' => 'MainController@contact']);
    Route::get('article1', ['as' => 'article1', 'uses' => 'MainController@article1']);
    Route::get('article2', ['as' => 'article2', 'uses' => 'MainController@article2']);
    Route::get('article3', ['as' => 'article3', 'uses' => 'MainController@article3']);
});
