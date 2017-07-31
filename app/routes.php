<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('coba', array('as' => 'coba', 'uses' =>'MainController@getCoba'));

#main
Route::get('/', array('as' => 'index', 'uses' =>'MainController@getHome'));
Route::get('index', array('as' => 'index', 'uses' =>'MainController@getHome'));
Route::get('panduan', array('as' => 'panduan', 'uses' =>'MainController@getPanduan'));
Route::get('dokumentasi', array('as' => 'dokumentasi', 'uses' =>'MainController@getDokumentasi'));
Route::get('aplikasi', array('as' => 'aplikasi', 'uses' =>'MainController@getAplikasi'));

#sleman
// Route::get('/sleman', array('as' => 'index-sleman', 'uses' =>'SlemanController@getHome'));
// Route::get('/sleman-index', array('as' => 'index-sleman', 'uses' =>'SlemanController@getHome'));
// Route::get('sleman/pendampingan', array('as' => 'sleman-pendampingan', 'uses' =>'SlemanController@getPendampingan'));
// Route::get('sleman/pilihanmenu', array('as' => 'sleman-pilihanmenu', 'uses' =>'SlemanController@getPilihanmenu'));


// Route::get('sleman/profil_self', array('as' => 'sleman-profilself', 'uses' =>'SlemanController@getProfilself'));
// Route::get('sleman/info_self', array('as' => 'sleman-infoself', 'uses' =>'SlemanController@getInfoself'));
// Route::get('sleman/profil', array('as' => 'sleman-profil', 'uses' =>'SlemanController@getProfil'));
// Route::get('sleman/info', array('as' => 'sleman-info', 'uses' =>'SlemanController@getInfo'));


// #bantul
// Route::get('/bantul', array('as' => 'index-bantul', 'uses' =>'BantulController@getHome'));
// Route::get('/bantul-index', array('as' => 'index-bantul', 'uses' =>'BantulController@getHome'));
// Route::get('bantul/pendampingan', array('as' => 'bantul-pendampingan', 'uses' =>'BantulController@getPendampingan'));
// Route::get('bantul/pilihanmenu', array('as' => 'bantul-pilihanmenu', 'uses' =>'BantulController@getPilihanmenu'));


// Route::get('bantul/profil_self', array('as' => 'bantul-profilself', 'uses' =>'BantulController@getProfilself'));
// Route::get('bantul/info_self', array('as' => 'bantul-infoself', 'uses' =>'BantulController@getInfoself'));
// Route::get('bantul/profil', array('as' => 'bantul-profil', 'uses' =>'BantulController@getProfil'));
// Route::get('bantul/info', array('as' => 'bantul-info', 'uses' =>'BantulController@getInfo'));



// #gunungkidul
// Route::get('/gunungkidul', array('as' => 'index-gunungkidul', 'uses' =>'GunungkidulController@getHome'));
// Route::get('/gunungkidul-index', array('as' => 'index-gunungkidul', 'uses' =>'GunungkidulController@getHome'));
// Route::get('gunungkidul/pendampingan', array('as' => 'gunungkidul-pendampingan', 'uses' =>'GunungkidulController@getPendampingan'));
// Route::get('gunungkidul/pilihanmenu', array('as' => 'gunungkidul-pilihanmenu', 'uses' =>'GunungkidulController@getPilihanmenu'));


// Route::get('gunungkidul/profil_self', array('as' => 'gunungkidul-profilself', 'uses' =>'GunungkidulController@getProfilself'));
// Route::get('gunungkidul/info_self', array('as' => 'gunungkidul-infoself', 'uses' =>'GunungkidulController@getInfoself'));
// Route::get('gunungkidul/profil', array('as' => 'gunungkidul-profil', 'uses' =>'GunungkidulController@getProfil'));
// Route::get('gunungkidul/info', array('as' => 'gunungkidul-info', 'uses' =>'GunungkidulController@getInfo'));


// #surabaya
// Route::get('/surabaya', array('as' => 'index-surabaya', 'uses' =>'SurabayaController@getHome'));
// Route::get('/surabaya-index', array('as' => 'index-surabaya', 'uses' =>'SurabayaController@getHome'));
// Route::get('surabaya/pendampingan', array('as' => 'surabaya-pendampingan', 'uses' =>'SurabayaController@getPendampingan'));
// Route::get('surabaya/pilihanmenu', array('as' => 'surabaya-pilihanmenu', 'uses' =>'SurabayaController@getPilihanmenu'));


// Route::get('surabaya/profil_self', array('as' => 'surabaya-profilself', 'uses' =>'SurabayaController@getProfilself'));
// Route::get('surabaya/info_self', array('as' => 'surabaya-infoself', 'uses' =>'SurabayaController@getInfoself'));
// Route::get('surabaya/profil', array('as' => 'surabaya-profil', 'uses' =>'SurabayaController@getProfil'));
// Route::get('surabaya/info', array('as' => 'surabaya-info', 'uses' =>'SurabayaController@getInfo'));

// #pemalang
// Route::get('/pml', array('as' => 'index-pemalang', 'uses' =>'PemalangController@getHome'));
// Route::get('/pml-index', array('as' => 'index-pemalang', 'uses' =>'PemalangController@getHome'));
// Route::get('pml/pendampingan', array('as' => 'pemalang-pendampingan', 'uses' =>'PemalangController@getPendampingan'));
// Route::get('pml/pilihanmenu', array('as' => 'pemalang-pilihanmenu', 'uses' =>'PemalangController@getPilihanmenu'));


// Route::get('pml/profil_self', array('as' => 'pemalang-profilself', 'uses' =>'PemalangController@getProfilself'));
// Route::get('pml/info_self', array('as' => 'pemalang-infoself', 'uses' =>'PemalangController@getInfoself'));
// Route::get('pml/profil', array('as' => 'pemalang-profil', 'uses' =>'PemalangController@getProfil'));
// Route::get('pml/info', array('as' => 'pemalang-info', 'uses' =>'PemalangController@getInfo'));


#daerah

Route::get('/{id}', array('as' => 'index-daerah', 'uses' =>'DaerahController@getHome'));
Route::get('/daerah-index{id}', array('as' => 'index-daerah', 'uses' =>'DaerahController@getHome'));
Route::get('/{id}/pendampingan', array('as' => 'daerah-pendampingan', 'uses' =>'DaerahController@getPendampingan'));
Route::get('/{id}/pilihanmenu', array('as' => 'daerah-pilihanmenu', 'uses' =>'DaerahController@getPilihanmenu'));

Route::get('/{id}/profil_self', array('as' => 'daerah-profilself', 'uses' =>'DaerahController@getProfilself'));
Route::get('/{id}/info_self', array('as' => 'daerah-infoself', 'uses' =>'DaerahController@getInfoself'));
Route::get('/{id}/profil', array('as' => 'daerah-profil', 'uses' =>'DaerahController@getProfil'));
Route::get('/{id}/info', array('as' => 'daerah-info', 'uses' =>'DaerahController@getInfo'));


