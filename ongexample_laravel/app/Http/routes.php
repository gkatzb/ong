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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', array('as' => 'home', 'uses' => 'LoginController@login'));
    Route::group(['prefix' => '/'], function() {
        Route::get('login', array('as' => 'home', 'uses' => 'LoginController@login'));
        Route::post('login', array('as' => 'login', 'uses' => 'LoginController@do_login'));
        Route::get('materias', array('as' => 'materias', 'uses' => 'MateriasController@index'));
    });
});
