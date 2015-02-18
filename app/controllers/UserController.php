<?php

class UserController extends BaseController {

// Inicio
	public function profile()
	{
		return View::make('panel.user.profile');
	}

	public function help()
	{
		return View::make('panel.user.help');
	}

	public function about()
	{
		return View::make('panel.user.about');
	}

	public function inscripciones()
	{
		return View::make('panel.user.inscripciones');
	}

	public function constancias()
	{
		return View::make('panel.user.constancias');
	}

}