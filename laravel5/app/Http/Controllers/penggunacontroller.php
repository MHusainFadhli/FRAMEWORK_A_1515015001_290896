<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PenggunaController extends Controller
{

	public function awal()
{
	return "Hello dari PenggunaController";
	
}
public function tambah()
{
  return $this->simpan();  
}

public function simpan()
{

      $pengguna = new Pengguna();
      $pengguna -> username   = 'ferza';
      $pengguna -> password  = 'ferza';
      $pengguna ->save();
      return "data dengan username {$pengguna->username} telah disimpan";
  }

}
