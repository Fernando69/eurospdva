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
// Acciones del usuario
Route::get('registrarse', 'AuthController@signin');
Route::post('registrarse', 'AuthController@signin_post');
Route::get('entrar', 'AuthController@login');
Route::post('entrar', 'AuthController@login_post');
Route::get('salir', 'AuthController@logout');



// Estas rutas usa un layaout unico = panel.blade.php
Route::get('panel', 'AuthController@panel');
Route::get('panel/perfil', 'UserController@profile');
Route::get('panel/ayuda', 'UserController@help');
Route::get('panel/inscripciones', 'UserController@inscripciones');
Route::get('panel/constancias', 'UserController@constancias');
Route::get('panel/acerca', 'UserController@about');
Route::get('panel/noticias', 'AdminController@news');
Route::get('panel/usuarios', 'AdminController@users');





// Error 404 
App::missing(function($execption)
{
	return Response::view('pages.404', array(), 404);
});