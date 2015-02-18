@extends('layaout.log')

@section('title')
Entrar | 
@stop


@section('content')

	<h1>Iniciar Sesión</h1>
	
	{{Form::open(['URL' => 'entrar', 'method' => 'POST', 'role' => 'form'])}}

	@if (Session::has('login_error'))
		<br/>
		<span class="label label-danger">El usuario o la contraseña no son validos</span>
		<br/>
	@endif

	{{Form::label('email', 'Correo eletrónico')}}
	{{Form::text('email', null, array('placeholder' => 'Correo electrónico','class' => 'form-control input-lg'))}}

	{{Form::label('password', 'Contraseña')}}
	{{Form::password('password', array('placeholder' => 'Contraseña','class' => 'form-control input-lg'))}}

	{{Form::label('remember', 'Recuerdame')}}
    {{Form::checkbox('remember', true) }}

    <a href="">¿No recuerdas tu contraseña?</a>

	{{Form::submit('Enviar', null, array('class' => 'form-control'))}}

	{{Form::close()}}

	<p>¿No tienes cuenta? <a href="{{URL::to('/registrarse')}}">Regístrate</a> </p>   


@stop