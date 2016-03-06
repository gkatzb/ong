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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'matematica'], function () {
    Route::get('/', 'MatematicaController@index');
    Route::group(['prefix' => 'atividades'], function () {
        Route::get('/{atividade}', ['uses' => 'MatematcaController@atividade']);
    });
});

Route::group(['prefix' => 'portugues'], function () {
    Route::get('/', 'PortuguesController@index');
    Route::group(['prefix' => 'atividades'], function () {
        Route::get('/{atividade}', ['uses' =>' PortuguesController@atividade']);
    });
});

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

Route::group(['middleware' => ['web']], function () {
    //
});
