@extends('layaout.homelayaout')

@section('content')
	<div id="section1">
		<div class="boxlogo">
			<div class="hbox">
				<h1>U.E. Colegio Don Bosco</h1>
				<h2>200 años de Don Bosco</h2>
				<h2>100 años como colegio</h2>
		    </div>
		    <div class="logo">
				<img src="{{asset('img/logo.png')}}">
		    </div>
		</div>
		<div id="IrAbajo" class="p-btn-scroll1"><a href="javascript:void(0);"><span class="page-scroll glyphicon glyphicon-arrow-down  boton-rojo"></span></a></div>
    </div>

    <div id="section2">
        <h3>Noticias</h3>
        <div id="IrArriba" class="p-btn-scroll2"><a href="javascript:void(0);"><span class="page-scroll glyphicon glyphicon-arrow-up  boton-rojo"></span></a></div>

        <!--Slider-->
        <div class="col-lg-8">
			<div id="slider" class="carousel slide" data-ride="carousel">	

			  <!-- Wrapper for slides -->
			  	<div class="carousel-inner">
				    <div class="item active">
					    <img src="{{asset('img/slider_noti/1.jpg')}}">
					    <div class="carousel-caption">
					    <h4>¡Nueva fachada para el colegio!<h4>
					    </div>
				    </div>

				    <div class="item">
				    	<img src="{{asset('img/slider_noti/2.jpg')}}">
				    	<div class="carousel-caption">
				    	<h4>La semana Don Bosco esta por comenzar</h4>
				    	</div>
				    </div>

				    <div class="item">
				    	<img src="{{asset('img/slider_noti/3.jpg')}}">
				    	<div class="carousel-caption">
				    	<h4>Nuevo salón de computación donado por EPA</h4>
				    	</div>
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
		</div>

		<div id="social" class="col-lg-4">
		  	<h4>Nuestras Redes</h4>
		  	<div class="box-social">
			  	<a class="btn-social" href="https://www.facebook.com/UEDonBoscoValencia"><img src="{{asset('img/facebook.png')}}" alt="Facebook"/></a>
			  	<a class="btn-social" href="https://twitter.com/UECDonBosco"><img src="{{asset('img/twitter.png')}}" alt="Twitter"/></a>
			  	<a class="btn-social" href="https://plus.google.com/111163170675263875440/about"><img src="{{asset('img/googleplus.png')}}" alt="Google+"/></a>
			  	<a class="btn-social" href="https://www.youtube.com/channel/UCfsrtUsbg4NmAPgMcx5agWQ"><img src="{{asset('img/youtube.png')}}" alt="Youtube"/></a>
			</div>

		  	<h4>¿Aun no tienes cuenta?</h4>
		  	<div class="box-social box-login">
			  	<a href="/registrarse" class="btn-sign boton-rojo">Registrarse</a>
			  	<a href="/entrar" class="btn-log boton-rojo">Entrar</a>
			</div>
		</div>
    </div>
@stop

