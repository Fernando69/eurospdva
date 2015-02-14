@extends('layaout.panel')

@section('title')

	@if (Auth::user()->user_level == "administrador")
		Panel de Administración | 
	@endif

	@if (Auth::user()->user_level == "moderador")
		Panel de Moderador | 
	@endif

	@if (Auth::user()->user_level == "usuario")
		Panel de Usuario | 
	@endif

@stop

@section('content')

<div class="userbox"><span class="glyphicon glyphicon-user"></span></div>
<h2>Bienvenido(a), {{Auth::user()->name}} {{Auth::user()->last_name}}</h2>


<p class="bienvenida">Bienvenido a la nueva plataforma web de la Unidad Educativa Colegio “Don Bosco”, este es tu panel de usuario. Desde acá podrás administrar tu cuenta, gestionar trámites y disfrutar de todas las opciones disponibles hasta el momento. Esta plataforma la haces tú, foméntala y su crecimiento irá en acenso.</p>
<p class="bienvenida">¡Desplázate por los menús y accede a todo el contenido creado para ti!</p>

<a class="btn btn-info" href="{{URL::to('/salir')}}"><b class="glyphicon glyphicon-log-in"></b> Cerrar Sesión</a>

@stop