<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Esta ruta usa un layaout unico = homelayaout.blade.php
// Inicio
Route::get('/', 'WebController@index');

// Estas rutas usan un layaout común mastarlayaout.blade.php
// Sub menú Nosotros
Route::get('historia', 'WebController@history');
Route::get('la-institucion', 'WebController@institution');

// Sub menú Niveles Educativos
Route::get('primaria', 'WebController@primary');
Route::get('media-basica', 'WebController@basic');
Route::get('media-profesional', 'WebController@professional');

// resto del menú
Route::get('informate', 'WebController@news');
Route::get('galeria', 'WebController@gallery');
Route::get('contacto', 'WebController@contact');



// Estas rutas usan un layaout común log.blade.php
// Acciones del auth
// Estas rutas usar el AuthController
Route::get('registrarse', ['as' => 'register', 'uses' => 'AuthController@signin']);
Route::post('registrarse', ['as' => 'register_post', 'uses' => 'AuthController@signin_post']);

Route::get('entrar', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('entrar', ['as' => 'login_post', 'uses' => 'AuthController@login_post']);

Route::get('salir', ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::get('panel', ['as' => 'panel', 'uses' => 'AuthController@panel']);



// Estas rutas usa un layaout unico = panel.blade.php
// Estas rutas usan el UserController
Route::get('panel/perfil', ['as' => 'profile', 'uses' => 'UserController@profile']);
Route::get('panel/ayuda', ['as' => 'help', 'uses' => 'UserController@help']);
Route::get('panel/inscripciones', ['as' => 'inscripciones', 'uses' => 'UserController@inscripciones']);
Route::get('panel/constancias', ['as' => 'constancias', 'uses' => 'UserController@constancias']);
Route::get('panel/acerca', ['as' => 'about', 'uses' => 'UserController@about']);

// Estas rutas usan el AdminController
Route::get('panel/noticias', ['as' => 'news', 'uses' => 'AdminController@news']);

Route::get('panel/usuarios', ['as' => 'users', 'uses' => 'AdminController@users']);
Route::get('panel/usuarios/ver/{id}', ['as' => 'showUser', 'uses' => 'AdminController@show_user']);

Route::get('panel/usuarios/editar/{id}', ['as' => 'editUser', 'uses' => 'AdminController@edit_user']);
Route::put('panel/usuarios/editar/{id}', ['as' => 'editUser_post', 'uses' => 'AdminController@edit_user_post']);

Route::get('panel/usuarios/eliminar/{id}', ['as' => 'destroy', 'uses' => 'AdminController@destroy_user']);


// Error 404 
App::missing(function($execption)
{
	return Response::view('pages.404', array(), 404);
});

//{{Form::model($userEdit, ['route' => 'editUser_post', 'method' => 'PUT', 'role' => 'form', 'novalidate'])}}