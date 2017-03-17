<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MataKuliah;

class MataKuliahController extends Controller
{
     public function awal()
    {
    	return "Hello dari MataKuliahController";
    }
    public function tambah()
    {
    	return $this ->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new MataKuliah();
    	$matakuliah->title = 'Pemrograman Visual';
    	$matakuliah->keterangan = 'Wajib';
    	$matakuliah->save();
    	return "data dengan title {$matakuliah->title} telah disimpan";
    }

}
