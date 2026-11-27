<?php

use Illuminate\Support\Facades\Route;
$namespace = "App\Laravel\Controllers\Api";

Route::group([
    'as' => "api.",
    'namespace' => $namespace,
    'middleware' => ["api"]
], function() {
    Route::get('/','SettingController@health')->name('health');

    include_once app_path("Laravel/Routes/Api/Auth.php");

    Route::group(['middleware' => "api.auth"],function(){
        Route::group(['prefix' => "profile",'as' => 'profile.'],function(){
            Route::post('info','ProfileController@show')->name('info');
        });

        Route::group(['prefix' => "articles",'as' => 'article.'],function(){
            Route::post('/',['as' => 'index', 'uses' => 'ArticleController@index']);
            Route::post('info/{id?}',[ 'as' => 'info', 'uses' => 'ArticleController@show']);  
            Route::post('create',['as' => 'create', 'uses' => 'ArticleController@store']);
            Route::post('edit/{id?}',['as' => 'edit', 'uses' => 'ArticleController@update']);
            Route::post('delete/{id?}',['as' => 'delete', 'uses' => 'ArticleController@destroy']);
        });
    });
});
