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
	@yield('addcss') 

	<script src="{{asset('js/today.js')}}"></script>
@show
</head>


<body>

	@include('layaout.menu')

	@section('wappaer')

	<div class="wapper col-xs-12">

		<header class="col-lg-10 col-lg-offset-1">
			<div id="slider" class="carousel slide" data-ride="carousel">	

			  <!-- Wrapper for slides -->
			  	<div class="carousel-inner">
				    <div class="item active">
					    <img src="{{asset('img/slider_banner/1.jpg')}}">
				    </div>

				    <div class="item">
				    	<img src="{{asset('img/slider_banner/2.jpg')}}">
				    </div>

				    <div class="item">
				    	<img src="{{asset('img/slider_banner/3.jpg')}}">
				    </div>

				    <div class="item">
				    	<img src="{{asset('img/slider_banner/4.jpg')}}">
				    </div>

			  	</div>

				  <!-- Controls -->
				<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				  	<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#slider" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</header>

		<div class="section1 col-lg-8">
			<div class="icono"><p class="glyphicon glyphicon-pencil"></p></div>
				@yield('content')
		</div>

		<div class="section2 col-lg-3">

			<div class="sectionbox col-sm-5 col-sm-offset-1 col-lg-12">
				<span class="glyphicon glyphicon-calendar"></span>
				<h4>Frese del día</h4>
				<p><script>document.write(hoy);</script></p>
				<p><script>document.write(frase);</script></p>
			</div>

			<div class="sectionbox 1 col-sm-5 col-sm-offset-1 col-lg-12">
				<span class="glyphicon glyphicon-calendar"></span>
				<h4>Un día como hoy</h4>
				<p><script>document.write(comoHoy);</script></p>
			</div>

			<div class="sectionbox col-sm-5 col-sm-offset-1 col-lg-12">
				<span class="glyphicon glyphicon-file"></span>
				<h4>Ultimos posts</h4>
				<a href="" class="postnews">Post destacado 1</a>
				<a href="" class="postnews">Post destacado 2</a>
				<a href="" class="postnews">Post destacado 3</a>
				<a href="" class="postnews">Post destacado 4</a>
			</div>

			<div class="sectionbox col-sm-5 col-sm-offset-1 col-lg-12">
				<span class="glyphicon glyphicon-globe"></span>
				<h4 class="twitter">Siguenos en twitter</h4>
				<div id="time-line-Twitter">
					<a class="twitter-timeline" href="https://twitter.com/UECDonBosco" data-widget-id="482964434684346368">Tweets por @UECDonBosco</a>
					<script>
						!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
					</script>
				</div>
			</div>

		</div>

	</div>

	@show

	

	@section('footer')
	<footer class="col-xs-12">

		<div class="logo">
			<img src="{{asset('img/logo.png')}}">
    	</div>
		<div class="comunidad">
			<h4>Páginas de la comunidad</h4>
			<div class="me"><a href="http://www.me.gob.ve/"><p>ME</p></a></div>
			<div class="avec"><a href="http://www.avec.org.ve/"><p>AVEC</p></a></div>
			<div class="epa"><a href="http://www.epa.co.cr:9080/PortalEPA/inicio.do?codpais=VE"><p>EPA</p></a></div>
			<div class="siragon"><a href="http://www.siragon.com/ve/"><p>Síragon</p></a></div>
			<div class="lamigal"><a href="http://www.lamigal.com/"><p>Lamigal</p></a></div>
		</div>

		<div class="derechos">
		<p>Unidad Educativa Colegio Don Bosco © Copyright 2015 // Todos los derechos reservados.</p>
		<p>Página desarrollada por estudiantes de la institución.</p>
		</div>
	</footer>
	@show


	@section('js')
		<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
		@yield('addjs')
		<script>
		// configura el carousel de imagenes
			$(document).ready(function){
				$('.carousel').carousel({
					pause: none
				})			
			});
		</script>

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
		
		<script>
		// configura los botones de scroll
			$(document).ready(function(){
			    var ventana_alto = $(window).height();
				$('#IrArriba').hide();
				$(function(){
					$(window).scroll(function(){
						if($(this).scrollTop() > 200){
							$('#IrArriba').show(300);
						}else{
							$('#IrArriba').hide(300);
						}
					})
					$('#IrArriba span').click(function(){
						$('body,html').animate({
							scrollTop: 0
						}, 1000);
						return false;
					})
				})
			})
		</script>
	@show
</body>
</html>