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

/*Route::get('/', function () {
    return view('welcome');
});*/

// trar las vistas
Route::get('/', 'NotaController@inicio')->name('home');
Route::get('/agregar', 'NotaController@crear');
Route::get('/actualizar/{id}', 'NotaController@editar')->name('adit-nota');

// actions 
Route::post('/nota/add', 'NotaController@add')->name('add-nota');
Route::put('/nota/update/{id}', 'NotaController@update')->name('update-nota');
Route::delete('/nota/borrar/{id}', 'NotaController@borrar')->name('borrar-nota');

