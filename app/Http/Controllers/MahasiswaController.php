<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function tampil()
        {
            $data = Mahasiswa::all();
            return view('mahasiswa', ["datamahasiswa" => $data]);
        }
}

