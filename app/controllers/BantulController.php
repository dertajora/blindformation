<?php

class BantulController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getHome()
	{
		return View::make('bantul.index');
	}

	public function getPendampingan()
	{
		return View::make('bantul.pendampingan');
	}

	public function getPilihanmenu()
	{
		return View::make('bantul.pilihanmenu');
	}
	public function getInfoself()
	{
		return View::make('bantul.infopilkada_self');
	}
	public function getProfilself()
	{
		return View::make('bantul.profil_self');
	}
	public function getInfo()
	{
		return View::make('bantul.infopilkada');
	}
	public function getProfil()
	{
		return View::make('bantul.profil');
	}

}