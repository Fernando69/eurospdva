<!DOCTYPE html>
<html lang="es">

<head>
@section('head')
	<meta charset="UTF-8">
	<title>U.E. Colegio Don Bosco</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}">

	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/menu.css')}}">
	<link rel="stylesheet" href="{{asset('css/home.css')}}">
@show
</head>

<body>
	
	@include('layaout.menu')
		
	@yield('content')
	
	@section('js')
		<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/backstretch.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
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
		// configura el slideshow de la section 1
			$(document).ready(function(){
			    var imagenes = [
			        "{{asset('img/fondo1.jpg')}}", 
			        "{{asset('img/fondo2.jpg')}}",
			        "{{asset('img/fondo3.jpg')}}",
			    ];
			    $(imagenes).each(function(){
			        $("<img/>")[0].src = this; 
			    });
			    var index = 0;
			    $.backstretch(imagenes[index], {speed: 800});
			    setInterval(function() {
			        index = (index >= imagenes.length - 1) ? 0 : index + 1;
			        $.backstretch(imagenes[index]);
			    }, 5000);
			});

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
							$('#IrAbajo').hide(300);
						}else{
							$('#IrAbajo').show(300);
							$('#IrArriba').hide(300);
						}
					})
					$('#IrArriba span').click(function(){
						$('body,html').animate({
							scrollTop: 0
						}, 1000);
						return false;
					})

					$('#IrAbajo span').click(function(){
						$('body,html').animate({
							scrollTop: ventana_alto
						}, 1000);
						return false;
					})
				})
			})
		</script>
	@show
</body>
</html>