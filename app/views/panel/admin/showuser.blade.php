@extends('layaout.panel')

@section('title')
Ver Usuario |
@stop

@section('content')

<div class="userbox">
	<span class="glyphicon glyphicon-user"></span>

	<h2>Ver Usuario</h2>
<table class="table table-bordered">

<tr>
	<td><strong>Nombre:</strong></td>
	<td>{{$name}}</td>

</tr>

<tr>
	<td><strong>Apellido:</strong></td>
	<td> {{$last_name}}</td>
</tr>

<tr>
	<td><strong>Correo:</strong> </td>
	<td>{{$email}}</td>
</tr>

<tr>
	<td><strong>Tipo de usuario:</strong></td> 
	<td>{{$user_type}}</td>
</tr>

<tr>
	<td><strong>Tipo de usuario:</strong></td> 
	<td>{{$user_level}}</td>
</tr>

<tr>
	<td><strong>Fecha de creación:</strong> </td>
	<td>{{$created_at}}</td>
</tr>

<tr>
	<td><strong>Última modificación:</strong> </td>
	<td>{{$updated_at}}</td>
</tr>
</table>


<a class="btn btn-primary"><b class="glyphicon glyphicon-pencil"></b> Editar Datos</a>
<a class="btn btn-danger"><b class="glyphicon glyphicon-remove-circle"></b> Eliminar Cuenta</a>

</div>
@stop
