@extends('layaout.log')

@section('title')
Registrarse | 
@stop


@section('content')

	<h1>Registrarse</h1>
	
	{{Form::open(['URL' => 'registrarse', 'method' => 'POST', 'role' => 'form'])}}

	@if (Session::has('signin_error'))
		<br/>
		<span class="label label-danger">Error al registrar</span>
		<br/>
		<span class="label label-danger">Se detectó algún error en los campos</span>
	@endif
	
	{{Form::label('name', 'Nombre (Sólo un nombre)')}}
	{{Form::text('name', null, array('class' => 'form-control input-lg'))}}

	{{Form::label('last_name', 'Apellido (Sólo un apellido)')}}
	{{Form::text('last_name', null, array('class' => 'form-control input-lg'))}}

	{{Form::label('email', 'Correo eletrónico')}}
	{{Form::email('email', null, array('class' => 'form-control input-lg'))}}

	{{Form::label('password', 'Contraseña (Mínimo 9 caracteres)')}}
	{{Form::password('password', array('class' => 'form-control input-lg'))}}

	{{Form::label('password_confirmation', 'Repite la contraseña')}}
	{{Form::password('password_confirmation', array('class' => 'form-control input-lg'))}}

	{{Form::label('user_type', 'Tipo de Usuario')}}
	{{Form::select('user_type', array( 'alumno' => 'Alummno', 'representante' => 'Representante', 'otro' => 'Otro'), 1 )}}

	{{Form::submit('Enviar', null, array('class' => 'form-control'))}}

	{{Form::close()}}

@stop