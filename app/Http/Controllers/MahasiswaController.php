<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
  public function index(){
    $daftar_mahasiswa = Mahasiswa::all();
    $no = 1;
    //dd($daftar_mahasiswa);
    return view('mahasiswa.index', compact('daftar_mahasiswa', 'no'));
  }

  public function show($nim){
    $mahasiswa = Mahasiswa::whereNim($nim)->firstOrFail();

    return view('mahasiswa.show', compact('mahasiswa'));
  }

}
