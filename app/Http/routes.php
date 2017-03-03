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
    Route::group(['prefix' => 'manajemen'], function(){
        Route::group(['prefix' => 'umat'],function(){
            Route::group(['prefix' => 'data'],function(){
                Route::get('/',[
                   'as'     => 'dataUmatAdmin',
                    'uses'  => 'umatController@filterData'
                ]);

                Route::post('/',[
                    'as'    => 'filterDataUmat',
                    'uses'  => 'umatController@filterData'
                ]);

                Route::get('/new',[
                    'as'    => 'tambahUmat',
                    'uses'  => 'umatController@showFormTambahUmat'
                ]);

                Route::post('new',[
                    'as'    => 'prosesTambahUmat',
                    'uses'  => 'umatController@prosesTambahUmat'
                ]);

                Route::post('upImage',[
                    'as'    => 'uploadUmatImage',
                    'uses'  => 'umatController@uploadImage'
                ]);
            });

            Route::group(['prefix' => 'keluarga'],function(){

            });

            Route::group(['prefix' => 'lingkungan'],function(){
                Route::get('/', [
                    'as'    => 'dataLingkungan',
                    'uses'  => 'lingkunganController@index'
                ]);

            });
        }) ;

        Route::group(['prefix' => 'konten'],function(){
            Route::group(['prefix' => 'bacaan'],function(){

            });

            Route::group(['prefix' => 'doa'],function(){

            });

            Route::group(['prefix' => 'pengumuman'],function(){

            });

            Route::group(['prefix' => 'sakramen'],function(){

            });

            Route::group(['prefix' => 'berita'],function(){

            });
        }) ;

        Route::group(['prefix' => 'forum'],function(){
            Route::group(['prefix' => 'topik'],function(){
                Route::group(['prefix' => 'kategori'],function(){
                    Route::group(['prefix' => 'posts'],function(){

                    });
                });
            });

            Route::group(['prefix' => 'user'],function(){


            });
        }) ;
    });
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

    Route::get('permandian',[
        'as'    => 'sakramenPermandian',
        'uses'  => 'sakramenController@permandian'
    ]);

    Route::get('krisma',[
        'as'    => 'sakramenKrisma',
        'uses'  => 'sakramenController@krisma'
    ]);

    Route::get('perkawinan',[
        'as'    => 'sakramenPerkawinan',
        'uses'  => 'sakramenController@perkawinan'
    ]);
});

Route::group(['prefix' => 'kategorial'], function(){
    Route::get('omk',[
        'as'    => 'kategorialOMK',
        'uses'  => 'kategorialController@omk'
    ]);

    Route::get('asmika',[
        'as'    => 'kategorialASMIKA',
        'uses'  => 'kategorialController@asmika'
    ]);

    Route::get('areka',[
        'as'    => 'kategorialAREKA',
        'uses'  => 'kategorialController@areka'
    ]);

    Route::get('misdinar',[
        'as'    => 'kategorialMisdinar',
        'uses'  => 'kategorialController@misdinar'
    ]);

    Route::get('kompak',[
        'as'    => 'kategorialKOMPAK',
        'uses'  => 'kategorialController@kompak'
    ]);

    Route::get('pik',[
        'as'    => 'kategorialPIK',
        'uses'  => 'kategorialController@pik'
    ]);

    Route::get('narwastu',[
        'as'    => 'kategorialNarwastu',
        'uses'  => 'kategorialController@narwastu'
    ]);

});


/**
 * Main content about
 */
Route::group(['prefix' => 'about'], function(){
    Route::get('about',[
        'as'     => 'aboutStasi',
        'uses'   => 'aboutController@aboutStasi'
    ]);

    Route::get('dps',[
        'as'    => 'aboutDPS',
        'uses'  => 'aboutController@aboutDPS'
    ]);
});

