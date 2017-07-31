<?php

class KlatenController extends BaseController {


	public function getHome()
	{
		return View::make('klaten.index');
	}

	public function getPendampingan()
	{
		return View::make('klaten.pendampingan');
	}

	public function getPilihanmenu()
	{
		return View::make('klaten.pilihanmenu');
	}
	public function getInfoself()
	{
		return View::make('klaten.infopilkada_self');
	}
	public function getProfilself()
	{
		return View::make('klaten.profil_self');
	}
	public function getInfo()
	{
		return View::make('klaten.infopilkada');
	}
	public function getProfil()
	{
		return View::make('klaten.profil');
	}

}