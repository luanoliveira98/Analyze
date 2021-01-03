<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/',         'HomeController@index')->name('home');
    Route::get('/logout',   'HomeController@index')->name('logout');


    Route::get('/{config}',          'Controller@index')->name('listar');
    Route::get('/{config}/inserir',  'Controller@create')->name('inserir');
    Route::post('/{config}',         'Controller@store')->name('salvar');
    Route::get('/{config}/{id}',     'Controller@edit')->name('editar');
    Route::put('/{config}/{id}',     'Controller@update')->name('atualizar');
    Route::delete('/{config}/{id}',  'Controller@destroy')->name('excluir');
});