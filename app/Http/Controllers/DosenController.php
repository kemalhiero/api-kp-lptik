<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Bimbingan;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function listMahasiswaBimbingan()
    {
        $list = Bimbingan::where('id_dosen', 1)->get();
    }
}
