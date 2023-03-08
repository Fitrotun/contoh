<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    public function tampil()
        {
            $data = Fakultas::all();
            return view('fakultas', ["data" => $data]);
        }
    
}
