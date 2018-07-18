<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => ['api'], 'namespace' => 'Admin'], function() {
    Route::post('usuario/registrar', 'APIRegisterController@register');
    Route::post('usuario/login', 'APILoginController@login');
});

Route::group(['middleware' => ['jwt.auth'], 'namespace' => 'Admin'], function() {
    Route::get('buscarPalavra', 'PalavrasController@buscarPalavra');
    Route::post('enviarPalavra', 'PalavrasController@enviarPalavra');
});