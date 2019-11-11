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
    return view('index');
});

// Route::get('/usuarios','UsuariosController@index');


Route::get('/usuarios', 'UsuariosController@getUsers');

// create
// Route::get('/create/usuario', 'UsuariosController@create');
// Route::post('/create/usuario', 'UsuarioController@store');

Route::get('/signin', 'UsuariosController@signIn');
Route::post('/signin', 'UsuariosController@store');