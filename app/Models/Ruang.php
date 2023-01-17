<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 'ruang';
    protected $primaryKey = 'id_ruang';

    public function matkul()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }

    public function dosen()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
}
