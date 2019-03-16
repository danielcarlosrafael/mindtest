<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//POSTAGEM
Route::group(['prefix' => 'postagem'], function(){
    Route::get('/', 'PostagemController@index');
    Route::get('/novo', 'PostagemController@create');
    Route::post('/novo/gravar', 'PostagemController@store');
    Route::get('/alterar/{id}', 'PostagemController@show');
    Route::post('/alteracao/alterar/{id}', 'PostagemController@update');
    Route::get('/deletar/{id}', 'PostagemController@destroy');
});

