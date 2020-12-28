<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/',         'HomeController@index')->name('home');
    Route::get('/logout',   'HomeController@index')->name('logout');

    Route::name('membros.')->prefix('/membros')->group(function () {
        Route::get('/administracao',    'HomeController@index')->name('administracao');
        Route::get('/staff',            'HomeController@index')->name('staff');
        Route::get('/elenco',           'HomeController@index')->name('elenco');
    });

    Route::name('equipes.')->prefix('/equipes')->group(function () {
        Route::get('/',         'EquipeController@index')->name('listar');
        Route::get('/inserir',  'EquipeController@create')->name('inserir');
        Route::post('/',        'EquipeController@store')->name('salvar');
        Route::get('/{id}',     'EquipeController@edit')->name('editar');
        Route::delete('/{id}',  'EquipeController@delete')->name('excluir');
    });
});