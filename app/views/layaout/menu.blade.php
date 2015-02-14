	@section('menu')
		<nav class="navbar navbar-default" role="navigation">
			<!-- El logotipo y el icono que despliega el menú se agrupan
			para mostrarlos mejor en los dispositivos móviles -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Desplegar navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Agrupar los enlaces de navegación, los formularios y cualquier
			otro elemento que se pueda ocultar al minimizar la barra -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="{{URL::to('/')}}"><b class="glyphicon glyphicon-home"></b></a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Nosotros <b class="caret"></b></a>
						<ul class="dropdown-menu">
						    <li><a href="{{URL::to('/historia')}}">Nuestra Historia</a></li>
						    <li><a href="{{URL::to('/la-institucion')}}">La Institución</a></li>
						    <li role="presentation" class="divider visible-xs"></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Educación <b class="caret"></b></a>
						<ul class="dropdown-menu">
						    <li><a href="{{URL::to('/primaria')}}">Primaria</a></li>
						    <li><a href="{{URL::to('/media-basica')}}">Media Básica</a></li>
						    <li><a href="{{URL::to('/media-profesional')}}">Media Profesional</a></li>
						    <li role="presentation" class="divider visible-xs"></li>
						</ul>
					</li>
					<li><a href="{{URL::to('/informate')}}">Infórmate</a></li>
					<li><a href="{{URL::to('/galeria')}}">Galería</a></li>
					<li><a href="{{URL::to('/contacto')}}">Contacto</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="visible-sm visible-md visible-lg"><a id="btn-toggle"><b class="glyphicon glyphicon-search"></b></a></li>

					{{--Si hay algún usuario conectado, le muestra un menú apropiado a él--}}
					@if (Auth::check())
						<li class="dropdown"><a href="#" data-toggle="dropdown"><b class="dropdown-toggle glyphicon glyphicon-user"></b>{{Auth::user()->name}} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{URL::to('/panel')}}">Ingresar al panel</a></li>
								<li><a href="{{URL::to('/salir')}}">Cerrar sesión</a></li>
								<li role="presentation" class="divider visible-xs"></li>
							</ul>
						</li>

					@else
						<li class="dropdown"><a href="#" data-toggle="dropdown"><b class="dropdown-toggle glyphicon glyphicon-user"></b>Anónimo <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="{{URL::to('/entrar')}}">Iniciar sesión</a></li>
						  <li><a href="{{URL::to('/registrarse')}}">Registrarse</a></li>
						  <li role="presentation" class="divider visible-xs"></li>
						</ul>
					</li>

					@endif
				</ul>
			</div>
			<span class="visible-xs"><a id="btn-toggle2"><b class="glyphicon glyphicon-search"></b></a><span>
		</nav>
		<div id="wapper-form" class="up">
			<form id="form-toggle" class="navbar-form form-toggle" role="search">
				<input type="text" placeholder="Buscar...">
				<a id="btn-toggle-off" class="glyphicon glyphicon-remove"></a>
				<button type="submit" class="glyphicon glyphicon-search"></button>
			</form>
		</div>
	@show