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

Route::get('/index', 'indexController@index')->name('index');  
Route::redirect('/','/index');

Route::get('/productos/{id}','ProductosController@listar')->name('listar_productos');
