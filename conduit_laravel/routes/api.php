<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Api'], function () {

    Route::post('users/login', 'AuthController@login');
    Route::post('users', 'AuthController@register');

    Route::get('user', 'UserController@index');
    Route::match(['put', 'patch'], 'user', 'UserController@update');

    Route::get('profiles/{user}', 'ProfileController@show');
    Route::post('profiles/{user}/follow', 'ProfileController@follow');
    Route::delete('profiles/{user}/follow', 'ProfileController@unFollow');

    Route::get('articles/feed', 'FeedController@index');
    Route::post('articles/{article}/favorite', 'FavoriteController@add');
    Route::delete('articles/{article}/favorite', 'FavoriteController@remove');

    Route::resource('articles', 'ArticleController', [
        'except' => [
            'create', 'edit'
        ]
    ]);

    Route::resource('articles/{article}/comments', 'CommentController', [
        'only' => [
            'index', 'store', 'destroy'
        ]
    ]);

    Route::get('tags', 'TagController@index');
    

    Route::get('devices', 'DeviceController@index');
    


    Route::post('contacto', 'ContactoController@sendEmail');

    Route::post('contact', 'ContactController@sendEmail');
    Route::post('pruebaf', function(){
        $array = array('1' => 'uno',
               '2' => 'dos',
               '3' => 'tres');
        return $array;
    });

    
});

/* Route::get('devices', function(){
        $array = array('1' => 'uno',
               '2' => 'devices');
        return $array;
    }); */