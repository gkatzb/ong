<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
/*

Route::model('user' , 'App\User');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', array('as' => 'home', 'uses' => 'LoginController@login'));
    Route::group(['prefix' => '/'], function() {
        Route::get('login', array('as' => 'home', 'uses' => 'LoginController@login'));
        Route::post('login', array('as' => 'login', 'uses' => 'LoginController@do_login'));
    });
});

Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix' => '/'], function() {
        Route::get('materias/{userId}', array('before' => 'auth', 'as' => 'materias', 'uses' => 'MateriasController@index'));
        Route::group(['prefix' => 'materias'], function() {
            Route::get('/atividades/{materiaNome}', array('before' => 'auth', 'as' => 'atividades', 'uses' => 'AtividadesController@index'));
        });
    });
});
