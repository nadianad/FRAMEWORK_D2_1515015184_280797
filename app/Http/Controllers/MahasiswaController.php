<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
    	return "Hello dari MahasiswaController";
    }
    public function tambah()
    {
    	return $this ->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'Nadia';
    	$mahasiswa->nim = '1515015184';
    	$mahasiswa->alamat = 'perjuangan 1';
    	$mahasiswa->pengguna_id = '1';
    	$mahasiswa->save();
    	return "data dengan nama {$mahasiswa->nama} telah disimpan";
    }
}
