<?php

class MainController extends BaseController {

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
		return View::make('main.index');
	}
	public function getCoba()
	{
		return View::make('main.coba');
	}

	public function getDokumentasi()
	{
		return View::make('main.dokumentasi');
	}

	public function getPanduan()
	{
		return View::make('main.panduan');
	}
	public function getAplikasi()
	{
		return View::make('main.daerah');
	}

}