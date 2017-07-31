<?php

class DaerahController extends BaseController {


	public function getHome($id)
	{
		$jumlah = Calon::where('kota','=','klaten')->count();
			// $penelitian = Researchs::where('companion_id','!=',0)->paginate(10);
			// $jumlah = Researchs::where('status','=',0)->where('companion_id','==',0)->count();

		return View::make('daerah.index')->with('kota',$id);
	}

	public function getPendampingan($id)
	{
		return View::make('daerah.pendampingan')->with('kota',$id);
	}

	public function getPilihanmenu($id)
	{
		return View::make('daerah.pilihanmenu')->with('kota',$id);
	}
	public function getInfoself()
	{
		return View::make('daerah.infopilkada_self');
	}
	public function getProfilself($id)
	{

		$jumlah = Calon::where('kota','=',$id)->count();
		$calons = Calon::where('kota','=',$id)->orderBy('no_urut','asc')->get();
		$tipe_daerah = Calon::where('kota','=',$id)->pluck('tipe_daerah');
		
		
		return View::make('daerah.profil_self')
		->with('tipe_daerah',$tipe_daerah)
		->with('calons',$calons)
		->with('kota',$id)
		->with('jumlah',$jumlah);
	}
	public function getInfo($id)
	{
		return View::make('daerah.infopilkada')->with('kota',$id);
	}
	public function getProfil($id)
	{
		$jumlah = Calon::where('kota','=',$id)->count();
		$tipe_daerah = Calon::where('kota','=',$id)->pluck('tipe_daerah');
		
		
		$calons = Calon::where('kota','=',$id)->orderBy('no_urut','asc')->paginate(10);
		return View::make('daerah.profil')
		->with('tipe_daerah',$tipe_daerah)
		->with('kota',$id)
		->with('jumlah',$jumlah)
		->with('calons',$calons);
	}

}