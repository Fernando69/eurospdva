<?php

class AuthController extends \BaseController {


	// si el usuario ya tiene sesión iniciada lo retorna al home al tratar de entrar la ruta de registrarse
	public function signin()
	{

		if (Auth::check())
		{
			return Redirect::to('/');
		}

		// sino, lo deja registrarse
		return View::make('pages.signin');
	}


	public function signin_post()
	{
		//Almacenando la data necesaria y creando las reglas de autentificación

		$data = Input::only(['name', 'last_name', 'email', 'password', 'password_confirmation']);

		$rules = [

			'name'		=>	'required|max:10',
			'last_name'	=>	'required|max:20',
			'email'		=>	'required|email|unique:users,email|max:50',
			'password'	=>	'required|confirmed|min:9|max:25',
			'password_confirmation'	=> 'required'
		];

		$validation = Validator::make($data, $rules);

		//Si la validación pasó y todo esta correcto guarda el usuario y lo redirecciona al inicio
		if ($validation->passes())
		{
			$password = Input::get('password');

			$user = new User;
			$user->name = Input::get('name');
			$user->last_name = Input::get('last_name');
			$user->email = Input::get('email');
			$user->password = Hash::make($password);
			$user->user_level = 3;
			$user->user_type = Input::get('user_type');

			$user->save();
		}

		//Si todo salió bien y ya guardó al usuario, inicia su sesión 
		$credentials = ['email' => $data['email'], 'password' => $data['password']];

		if (Auth::attempt($credentials))

		{
			return Redirect::to('/');
		}

		//Si algo salió mal y se generó un error se retorna a la vista de registro con el aviso de error
		return Redirect::back()->with('signin_error', 1);

		
	}


	public function login()
	{
		// si el usuario ya tiene sesión iniciada lo retorna al home al tratar de entrar la ruta de iniciar sesión 
		if (Auth::check())
		{
			return Redirect::to('/');
		}

	// sino, lo deja iniciar sesión
		return View::make('pages.login');
	}


	public function login_post()
	{
		
		// si el usuario y la contraseña son correctos, inicia sesión
		$data = Input::all();

		$credentials = ['email' => $data['email'], 'password' => $data['password']];

		if (Auth::attempt($credentials))
		{
			return Redirect::to('/');
		}

		//Si algo salió mal y se generó un error se retorna a la vista de inicio de sesión con el aviso de error
		return Redirect::back()->with('login_error', 1);
	}


	public function panel()
	{
		if (Auth::check())
		{
			return View::make('panel.dashboard');
		}

		return Redirect::to('/');
	}

	public function logout()
	{
		//cierra sesión
		Auth::logout();
		return Redirect::to('/');
	}


}
