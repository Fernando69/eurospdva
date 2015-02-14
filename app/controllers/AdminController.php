<?php

class AdminController extends BaseController {

// Inicio
	public function news()
	{
		if (Auth::check())
		{
			if (Auth::user()->user_level == "moderador" or Auth::user()->user_level == "administrador")
			{
				return View::make('panel.news');
			}
		}
		return Redirect::to('/panel');
	}

	public function users()
	{
		if (Auth::check())
		{
			if (Auth::user()->user_level == "administrador")
			{
				return View::make('panel.users');
			}
		}
		return Redirect::to('/panel');
	}
}