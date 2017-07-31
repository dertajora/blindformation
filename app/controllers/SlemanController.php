<?php

class SlemanController extends BaseController {

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
		return View::make('sleman.index');
	}

	public function getPendampingan()
	{
		return View::make('sleman.pendampingan');
	}

	public function getPilihanmenu()
	{
		return View::make('sleman.pilihanmenu');
	}
	public function getInfoself()
	{
		return View::make('sleman.infopilkada_self');
	}
	public function getProfilself()
	{
		return View::make('sleman.profil_self');
	}
	public function getInfo()
	{
		return View::make('sleman.infopilkada');
	}
	public function getProfil()
	{
		return View::make('sleman.profil');
	}

}