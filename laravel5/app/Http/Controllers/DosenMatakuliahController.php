<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosenMatakuliah;

class DosenMatakuliahController extends Controller
{
    //
    public function awal(){
    
        return "halo";
    }
    public function tambah(){
        return $this -> simpan();
    }
    public function simpan(){
        $dosenmatakuliah = new dosenmatakuliah();
        $dosenmatakuliah ->dosen_id = '4';
        $dosenmatakuliah ->matakuliah_id = '2';
        $dosenmatakuliah -> save();
        return "data dengan id {$dosenmatakuliah->id} telah disimpan";
    }
}
