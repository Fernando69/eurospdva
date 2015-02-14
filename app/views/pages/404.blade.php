<!DOCTYPE html>
<html>
	<head>
		<title>404 Página no encontrada</title>
		<link rel="stylesheet" href="{{asset('css/404.css')}}"/>
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
		<header><h1>Error 404 página no encontrada</h1></header>
		<div class="wapper">
			<img src="{{asset('img/404.png')}}" alt="Error">
			<h2>Lo que buscas no está aquí :(</h2>
			<a href="{{URL::to('/')}}" class="btn">Volver al inicio</a>
		</div>
	</body>
</html>

