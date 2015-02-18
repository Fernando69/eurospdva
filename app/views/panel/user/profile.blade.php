@extends('layaout.panel')

@section('title')
Perfil |
@stop

@section('content')

<div class="userbox">
	<span class="glyphicon glyphicon-user"></span>

	<h2>Cuenta de usuario tipo:
	@if (Auth::user()->user_level == "administrador")Administrador@endif
	@if (Auth::user()->user_level == "moderador")Moderador@endif
	@if (Auth::user()->user_level == "usuario")Estándar@endif
	</h2>
<table class="table table-bordered">

<tr>
	<td><strong>Nombre:</strong></td>
	<td>{{Auth::user()->name}}</td>

</tr>

<tr>
	<td><strong>Apellido:</strong></td>
	<td> {{Auth::user()->last_name}}</td>
</tr>

<tr>
	<td><strong>Correo:</strong> </td>
	<td> {{Auth::user()->email}}</td>
</tr>

<tr>
	<td><strong>Tipo de usuario:</strong></td> 
	<td>{{Auth::user()->user_type}}</td>
</tr>

<tr>
	<td><strong>Fecha de creación:</strong> </td>
	<td>{{Auth::user()->created_at}}</td>
</tr>

<tr>
	<td><strong>Última modificación:</strong> </td>
	<td>{{Auth::user()->updated_at}}</td>
</tr>
</table>

	<a class="btn btn-primary"><b class="glyphicon glyphicon-pencil"></b> Editar Datos</a>
	<a class="btn btn-danger"><b class="glyphicon glyphicon-remove-circle"></b> Eliminar Cuenta</a>
</div>
@stop
