@extends('layaout.panel')

@section('title')
Usuarios |
@stop

@section('content')

    <div class="userbox">
        <span class="glyphicon glyphicon-user"></span>
        <h2>Usuarios</h2>
    </div>
  <table class="table table-bordered table-responsive">
    <tr>
    	<th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo</th>
        <th>Nivel</th>
        <th>Creación</th>
        <th>Acciones</th>
    </tr>
    @foreach ($users as $user)
    <tr>
   		<td>{{ $user->id }}</td>
        <td>{{ $user->name }} {{ $user->last_name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->user_type }}</td>
        <td>{{ $user->user_level }}</td>
        <td>{{ $user->created_at}}</td>
        <td>
        <a href="/panel/usuarios/ver/{{$user->id}}" class="btn btn-info btn-accion"><b class="glyphicon glyphicon glyphicon-eye-open"></b></a>
        <a href="/panel/usuarios/editar/{{$user->id}}" class="btn btn-warning btn-accion"><b class="glyphicon glyphicon glyphicon-pencil"></b></a>
        <a href="/panel/usuarios/eliminar/{{$user->id}}" class="btn btn-danger btn-accion"><b class="glyphicon glyphicon glyphicon-remove-circle"></b></a>
        </td>
    </tr>
    @endforeach
  </table>

  {{ $users->links() }}

@stop