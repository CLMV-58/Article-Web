<?php

use Illuminate\Support\Facades\Route;
$namespace = "App\Laravel\Controllers\Api";

Route::group([
    'as' => "api.",
    'namespace' => $namespace,
    'middleware' => ["api"]
],function() {
    // Route::get('/','SettingController@health')->name('health');

    // Route::group(['prefix' => "auth",'as' => 'auth.'],function(){
    //     Route::post('register','AuthenticationController@register')->name('register');
    //     Route::post('login','AuthenticationController@login')->name('login');
    //     Route::post('logout','AuthenticationController@logout')->name('logout')->middleware(["api.auth"]);
    //     Route::post('refresh-token','AuthenticationController@refresh_token')->name('refresh_token')->middleware(["api.auth"]);
    //     Route::post('check-login','AuthenticationController@check_login')->name('check_login')->middleware(["api.auth"]);


    //     Route::post('register', ['as' => 'register', 'uses' => 'AuthenticationController@register']);
    //     Route::post('login', ['as' => 'login', 'uses' => 'AuthenticationController@login']);
    //     Route::post('logout', ['as' => 'logout', 'uses' => 'AuthenticationController@logout']);
    //     Route::post('refresh-token', ['as' => 'refresh_token', 'uses' => 'AuthenticationController@refresh_token']);
    //     Route::post('check-login', ['as' => 'check_login', 'uses' => 'AuthenticationController@check_login']);

    // });

    // Route::group(['middleware' => "api.auth"],function(){
    //     Route::group(['prefix' => "profile",'as' => 'profile.'],function(){
    //         Route::post('info','ProfileController@show')->name('info');
    //     });

        Route::group(['prefix' => "articles",'as' => 'article.'],function(){
            // Route::post('/','ArticleController@index')->name('index');
            // Route::post('info','ArticleController@show')->name('info')->middleware(["api.exist:article", "api.exist:own_article"]);
            // Route::post('create','ArticleController@store')->name('create');
            // Route::post('edit','ArticleController@update')->name('edit')->middleware(["api.exist:article", "api.exist:own_article"]);
            // Route::post('delete','ArticleController@destroy')->name('delete')->middleware(["api.exist:article", "api.exist:own_article"]);

            Route::post('/',['as' => 'index', 'uses' => 'ArticleController@index']);
            Route::post('info/{id?}',[ 'as' => 'info', 'uses' => 'ArticleController@show']);  
            Route::post('create',['as' => 'create', 'uses' => 'ArticleController@store']);
            Route::post('edit/{id?}',['as' => 'edit', 'uses' => 'ArticleController@update']);
            Route::post('delete/{id?}',['as' => 'delete', 'uses' => 'ArticleController@destroy']);
        });
    // });

});
