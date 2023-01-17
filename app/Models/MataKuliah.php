<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $primaryKey = 'id_mk';

    public function mahasiwa()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }

    public function dosen()
    {
        return $this->belongsToMany(Dosen::class);
    }

    public function ruang()
    {
        return $this->belongsToMany(Ruang::class, 'jadwal', 'id_matkul');
    }

   
}
