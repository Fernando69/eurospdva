<!DOCTYPE html>
<html lang="es">

<head>
@section('head')
	<meta charset="UTF-8">
	<title>@yield('title') U.E. Colegio Don Bosco</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}">

	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/menu.css')}}">
	<link rel="stylesheet" href="{{asset('css/masterlayaout.css')}}">
@show
</head>


<body>

	@include('layaout.menu')

	@section('wappaer')

	<div class="wapper-log">

		@yield('content')

	</div>

	@show

	@section('js')
		<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
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