<?php

class UserController extends BaseController {

// Inicio
	public function profile()
	{
		return View::make('panel.profile');
	}

	public function help()
	{
		return View::make('panel.help');
	}

	public function about()
	{
		return View::make('panel.about');
	}

	public function inscripciones()
	{
		return View::make('panel.inscripciones');
	}

	public function constancias()
	{
		return View::make('panel.constancias');
	}

}