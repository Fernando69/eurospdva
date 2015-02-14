<?php

class ModeratorController extends BaseController {

// Inicio
	public function index()
	{
		return View::make('admin.moderator');
	}
}