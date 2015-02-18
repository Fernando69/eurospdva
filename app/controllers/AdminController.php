<?php

class AdminController extends BaseController {

// Ingresar a la sección de noticias
	public function news()
	{
		if (Auth::check())
		{
			if (Auth::user()->user_level == "moderador" or Auth::user()->user_level == "administrador")
			{
				return View::make('panel.admin.news');
			}
			return Redirect::to('/panel');
		}
		return Redirect::to('/panel');
	}

// Estas funciones son para la sección de usuarios, editar, crear, borrar y listar

// ingresar a la sección de usuarios
	public function users()
	{
		if (Auth::check())
		{
			if (Auth::user()->user_level == "administrador")
			{
				$users = User::paginate();
				return View::make('panel.admin.users')->with('users', $users);
			}
			return Redirect::to('/panel');
		}
		return Redirect::to('/panel');
	}


// ver un usuario, de cualquier tipo
	public function show_user($id)
	{
		if (Auth::check())
		{
			if (Auth::user()->user_level == "administrador")
			{
				$userShow = User::find($id);

				if (is_null($userShow)){
					App::abort(404);
				}

				return View::make('panel.admin.showuser', $userShow);
			}

			return Redirect::to('/panel');
		}
		return Redirect::to('/panel');
	}

// editar un usuario, de cualquier tipo 
	public function edit_user ($id)
	{
		if (Auth::check())
		{
			if (Auth::user()->user_level == "administrador")
			{
				$userEdit = User::find($id);

				if (is_null($userEdit)){
					App::abort(404);
				}
				return View::make('panel.admin.edituser')->with('userEdit', $userEdit);
			}
			return Redirect::to('/panel');
		}
		return Redirect::to('/panel');
	}

// recibe los datos por post y realiza la edición del usuario

	public function edit_user_post($id)
	{

			$userEdit = User::find($id);

			if (is_null($userEdit)){
				App::abort(404);
			}

			$data = Input::all();

			$userEdit->fill($data);
			return Redirect::to('/panel/usuarios');

	}

	public function destroy_user($id)
	{
		User::destroy($id);

		return Redirect::to('/panel/usuarios');
	}

}
