@extends('layaout.mastarlayaout')

@section('title')
Contacto | 
@stop

@section('content')

		<h1>Contáctanos</h1>

		{{Form::open(array('method' => 'POST', 'url' => '/contacto', 'class' => 'form-contacto'))}} 

		{{Form::label('nombre', 'Nombre y Apellido')}}
		{{Form::text('nombre', null, array('class' => 'form-control input-lg'))}}

		{{Form::label('asunto', 'Asunto')}}
		{{Form::text('asunto', null, array('class' => 'form-control input-lg'))}}

		{{Form::label('correo', 'Correo')}}
		{{Form::text('correo', null, array('class' => 'form-control input-lg'))}}

		{{Form::label('mensaje', 'Mensaje')}}
		{{Form::textarea('mensaje', null, array('class' => 'form-control'))}}

		{{Form::submit('Enviar', null, array('class' => 'form-control'))}}

		{{Form::close()}}

		<div class="googlemaps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d981.7490869107986!2d-68.00907065718205!3d10.180951262882141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e806773ac17abe9%3A0x59a8572a73add7cd!2sColegio+Don+Bosco!5e0!3m2!1ses!2sve!4v1405560174699" width="600" height="450" frameborder="0" style="border:0"></iframe>
		</div>
@stop