<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\vista;


Auth::routes();

/* ruta para obligar iniciar sesion a inicio de sesion */
route::get('/', 'HomeController@index')->name('home');

/* ruta para todo los pocedimientos de controlador de usuarios ademas aqui esta filtradon el inicio de sesion   ->middleware('auth')*/
Route::resource('usuarios', 'UserController');

Route::resource('roles', 'RoleController');

/* ruta para todos los procedimientos de controlador de categorias */
Route::resource('categorias','CategoriaController');

/* ruta para todos los procedimientos de controlador de carreras */
Route::resource('carreras','CarreraController');