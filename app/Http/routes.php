<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'homeController@index'
]);

Route::group(['prefix' => 'user'],function(){
    Route::get('login', [
        'as'    => 'userLogin',
        'uses'  => 'sigkatAuthController@getLogin'
    ]);

    Route::post('login', [
        'as'    => 'cekLogin',
        'uses'  => 'sigkatAuthController@postLogin'
    ]);

    Route::get('logout', [
        'as'    => 'logout',
        'uses'  => 'sigkatAuthController@doLogout'
    ]);

});

Route::group(['prefix' => 'admin'], function(){

});

Route::group(['prefix' => 'forum'], function(){
    Route::get('/', [
        'as'     => 'forumMain',
        'uses'   => 'forumController@index'
    ]);
});

Route::group(['prefix' => 'sakramen'], function(){
    Route::get('/', [
        'as'     => 'sakramenMain',
        'uses'   => 'sakramenController@index'
    ]);
});

Route::group(['prefix' => 'kategorial'], function(){

});

Route::group(['prefix' => 'about'], function(){

});

