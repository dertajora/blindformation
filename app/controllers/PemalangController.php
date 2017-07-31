<?php

class PemalangController extends BaseController {


	public function getHome()
	{
		return View::make('pemalang.index');
	}

	public function getPendampingan()
	{
		return View::make('pemalang.pendampingan');
	}

	public function getPilihanmenu()
	{
		return View::make('pemalang.pilihanmenu');
	}
	public function getInfoself()
	{
		return View::make('pemalang.infopilkada_self');
	}
	public function getProfilself()
	{
		return View::make('pemalang.profil_self');
	}
	public function getInfo()
	{
		return View::make('pemalang.infopilkada');
	}
	public function getProfil()
	{
		return View::make('pemalang.profil');
	}

}