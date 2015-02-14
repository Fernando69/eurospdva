<!DOCTYPE html>
<html lang="es">

<head>
@section('head')
	<meta charset="UTF-8">
	<title>@yield('title') U.E. Colegio Don Bosco</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<link rel="stylesheet" href="{{asset('css/menu.css')}}">
	<link rel="stylesheet" href="{{asset('css/masterlayaout.css')}}">
	<link rel="stylesheet" href="{{asset('css/panels.css')}}">
	@yield('addcss') 

@show
</head>


<body>

	@include('layaout.menu')

	@section('wappaer')
	
	<div class="menu">
		<ul class="nav nav-pills nav-stacked">
			<h3>Menú</h3>
			<li><a href="{{URL::to('/panel')}}"><b class="glyphicon glyphicon-home"></b> Inicio</a></li>
			<li><a href="{{URL::to('/panel/inscripciones')}}"><b class="glyphicon glyphicon-pencil"></b> Inscripciones</a></li>
			<li><a href="{{URL::to('/panel/constancias')}}"><b class="glyphicon glyphicon-education"></b> Constancias</a></li>
			<li><a href="{{URL::to('/panel/perfil')}}"><b class="glyphicon glyphicon-user"></b>Mi Perfil</a></li>
			<li><a href="{{URL::to('/panel/ayuda')}}"><b class="glyphicon glyphicon-question-sign"></b> Ayuda</a></li>
			<li><a href="{{URL::to('/panel/acerca')}}"><b class="glyphicon glyphicon-briefcase"></b> Acerca de</a></li>
		</ul>

		@if (Auth::user()->user_level == "administrador")
		<ul class="nav nav-pills nav-stacked">
			<h3>Admin.</h3>
			<li><a href="{{URL::to('/panel/acerca')}}"><b class="glyphicon glyphicon-duplicate"></b> Noticias</a></li>
			<li><a href="{{URL::to('/panel/usuarios')}}"><b class="glyphicon glyphicon-globe"></b> Usuarios</a></li>
		</ul>
		@endif

		@if (Auth::user()->user_level == "moderador")
		<ul class="nav nav-pills nav-stacked">
			<h3>Moderador</h3>
			<li><a href="{{URL::to('/panel/noticias')}}"> <b class="glyphicon glyphicon-pencil"></b> Noticias</a></li>
		</ul>
		@endif
	</div>

	<div class="wapper">
		<div class="subWapper">
			@yield('content')

		</div>
	</div>

	@show

	@section('js')
		<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
		@yield('addjs')
		<script>
		// configura la barra de busqueda
			$(document).ready(function(){
			    $("#btn-toggle, #btn-toggle2").click(function () { 
			        $('#wapper-form').addClass('down');
			        $('#wapper-form').removeClass('up');
			    })

			    $("#btn-toggle-off, #btn-toggle-off2").click(function () { 
			    	$('#wapper-form').addClass('up');
			        $('#wapper-form').removeClass('down');
			    })
			})

		</script>
	@show
</body>
</html>