<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';

    public function jurusan()
    {
        return $this->hasOne(Jurusan::class);
    }

    public function fakultas()
    {
        return $this->hasOne(Jurusan::class);
    }

    public function mahasiwa()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }

    public function ruang()
    {
        return $this->belongsToMany(Ruang::class, 'jadwal', 'id_dosen');
    }

    public function matkul()
    {
        return $this->belongsToMany(MataKuliah::class, 'jadwal', 'id_dosen');
    }
}
