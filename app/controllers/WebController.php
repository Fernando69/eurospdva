<?php

class WebController extends BaseController {

// Inicio
	public function index()
	{
		return View::make('pages.home');
	}


// Sub menú Nosotros
	public function history()
	{
		return View::make('pages.history');
	}

	public function institution()
	{
		return View::make('pages.institution');
	}


// Sub menú Niveles Educativos
	public function primary()
	{
		return View::make('pages.primary');
	}

	public function basic()
	{
		return View::make('pages.basic');
	}

	public function professional()
	{
		return View::make('pages.professional');
	}	

// resto del menú
	public function news()
	{
		return View::make('pages.news');
	}

	public function gallery()
	{
		return View::make('pages.gallery');
	}	

	public function contact()
	{
		return View::make('pages.contact');
	}

	
}