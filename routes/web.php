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

Route::get('/', function () {
    return Redirect()->route('admin.index');
});

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin.index');

    Route::get('/palavras', 'PalavrasController@index')->name('palavras.index');
    Route::get('/palavras/adicionar', 'PalavrasController@create')->name('palavras.create');
    Route::post('/palavras/adicionar', 'PalavrasController@store')->name('palavras.store');
    Route::get('/palavras/editar/{id}', 'PalavrasController@show')->name('palavras.show');
    Route::put('/palavras/editar/{id}', 'PalavrasController@update')->name('palavras.update');
    Route::delete('/palavras/delete', 'PalavrasController@destroy')->name('palavras.destroy');

    Route::get('/categorias', 'CategoriasController@index')->name('categorias.index');
    Route::get('/categorias/adicionar', 'CategoriasController@create')->name('categorias.create');
    Route::post('/categorias/adicionar', 'CategoriasController@store')->name('categorias.store');
    Route::get('/categorias/editar/{id}', 'CategoriasController@show')->name('categorias.show');
    Route::put('/categorias/editar/{id}', 'CategoriasController@update')->name('categorias.update');
    Route::delete('/categorias/delete', 'CategoriasController@destroy')->name('categorias.destroy');

    Route::get('/pesos', 'PesosController@index')->name('pesos.index');
    Route::get('/estatisticas', 'EstatisticasController@index')->name('estatisticas.index');
});

Auth::routes();
