<?php

class GunungkidulController extends BaseController {

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
		return View::make('gunungkidul.index');
	}

	public function getPendampingan()
	{
		return View::make('gunungkidul.pendampingan');
	}

	public function getPilihanmenu()
	{
		return View::make('gunungkidul.pilihanmenu');
	}
	public function getInfoself()
	{
		return View::make('gunungkidul.infopilkada_self');
	}
	public function getProfilself()
	{
		return View::make('gunungkidul.profil_self');
	}
	public function getInfo()
	{
		return View::make('gunungkidul.infopilkada');
	}
	public function getProfil()
	{
		return View::make('gunungkidul.profil');
	}

}