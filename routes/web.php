<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::name('membros.')->prefix('/membros')->group(function () {
        Route::get('/administracao', 'HomeController@index')->name('administracao');
        Route::get('/staff', 'HomeController@index')->name('staff');
        Route::get('/elenco', 'HomeController@index')->name('elenco');
    });

    Route::name('equipes.')->prefix('/equipes')->group(function () {
        Route::get('/', 'EquipeController@index')->name('lista');
    });
});