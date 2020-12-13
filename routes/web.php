<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('admin.')->prefix('/admin')->group(function () {
    Route::get('/', 'HomeController@index');
});