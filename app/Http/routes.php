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

Route::group(['middleware' => ['web']], function () {
    Route::get('', ['as' => 'login', 'uses' => 'LoginController@index']);
    Route::get('/', ['as' => 'login', 'uses' => 'LoginController@index']);

    Route::group(['prefix' => '/'], function() {

        // Login routes
        Route::get('logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);
        Route::get('login', ['as' => 'login', 'uses' => 'LoginController@index']);
        Route::post('login', ['as' => 'login', 'uses' => 'LoginController@login']);
        Route::post('cadastrar', ['as' => 'cadastrar', 'uses' => 'LoginController@register']);
        Route::get('', ['as' => 'login', 'uses' => 'LoginController@index']);

        Route::get('desempenho/{user_id}', ['as' => 'desempenho', 'uses' => 'AtividadesController@desempenho']);
        Route::get('home/{user_id}', ['as' => 'home', 'uses' => 'MateriasController@index']);

        Route::get('materia/{materia_id}', ['as' => 'materia', 'uses' => 'MateriasController@atividade']);

        // Atividades
        Route::group(['prefix' => 'atividade'], function(){
            Route::get('{atividade_id}', ['as' => 'atividade', 'uses' => 'AtividadesController@index']);
            Route::get('concluido/{atividade_id}', ['as' => 'concluido', 'uses' => 'AtividadesController@concluido']);
            Route::post('desempenho', ['as' => 'desempenho', 'uses' => 'AtividadesController@cadastrarDesempenho']);
        });

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

/*Route::group(['middleware' => 'web'], function () {
    //Route::auth();

    Route::group(['prefix' => 'materias'], function() {
        Route::get('', ['as' => 'materias', 'uses' => 'MateriasController@index']);
       Route::get('/{user_id}', ['as' => 'materias', 'uses' => 'MateriasController@index']);
    });
});*/
/*
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
*/