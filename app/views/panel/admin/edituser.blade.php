@extends('layaout.panel')

@section('title')
Editar Usuario|
@stop

@section('content')

<div class="userbox">
	<span class="glyphicon glyphicon-user"></span>

	<h2>Editar Usuario</h2>

	<div class="formUser">

		{{Form::model($userEdit, array('route' => array('editUser_post', $userEdit->id), 'method' => 'PUT'), array('role' => 'form'))}}
		@if (Session::has('edit_error'))
			<br/>
			<span class="label label-danger">Error al editar</span>
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
		{{Form::password('password', array( 'placeholder' => 'Contraseña', 'class' => 'form-control input-lg'))}}

		{{Form::label('password_confirmation', 'Repite la contraseña')}}
		{{Form::password('password_confirmation', array('placeholder' => 'De nuevo la contraseña', 'class' => 'form-control input-lg'))}}

		<div class="selectUser">
		{{Form::label('user_type', 'Tipo de Usuario:')}}
		{{Form::select('user_type', array( 'alumno' => 'Alummno', 'representante' => 'Representante', 'otro' => 'Otro'))}}

		{{Form::label('user_level', 'Nivel de Usuario:')}}
		{{Form::select('user_level', array( 'usuario' => 'Estándar', 'moderador' => 'Moderador', 'administrador' => 'Administrador'))}}
		</div>

		<div class="btn btn-success"><b class="glyphicon glyphicon-floppy-saved"></b>{{Form::submit('Guardar', null, array('class' => 'submit'))}}</div>
		<a href="{{URL::to('/panel/usuarios')}}" class="btn btn-danger"><b class="glyphicon glyphicon-remove-circle"></b> Volver listado</a>
		{{Form::close()}}

	</div>
</div>
@stop
