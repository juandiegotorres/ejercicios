<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UserController@index')->name('usuario.index');

Route::prefix('usuarios')->group(function () {
    Route::get('/crear', 'UserController@create')->name('usuario.create');
    Route::post('/guardar', 'UserController@store')->name('usuario.store');
    Route::get('/editar/{user}', 'UserController@edit')->name('usuario.edit');
    Route::put('/actualizar/{user}', 'UserController@update')->name('usuario.update');
    Route::put('/eliminar/{user}', 'UserController@delete')->name('usuario.delete');
});
