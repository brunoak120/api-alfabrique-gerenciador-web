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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('usuario/adicionar', 'UsuariosController@store')->name('usuarios.store');

Route::get('usuarios', 'UsuariosController@index')->name('usuarios.index');*/

/*Route::group(['middleware' => 'auth:api'], function () {

});*/

Route::group(['middleware' => ['api'], 'namespace' => 'Admin'], function() {
    Route::post('usuario/adicionar', 'UsuariosController@store');
    Route::get('buscarPalavra', 'PalavrasController@findWord');
});
