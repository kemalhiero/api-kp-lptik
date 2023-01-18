<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
<<<<<<< HEAD
    protected $primaryKey = 'id_mhs';

    public function jurusan()
    {
        return $this->hasOne(Jurusan::class);
    }

    public function fakultas()
    {
        return $this->hasOne(Jurusan::class);
    }

    public function krs()
    {
        return $this->hasOne(Krs::class, 'id_mhs');
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function dosen()
    {
        return $this->belongsToMany(Dosen::class, 'bimbingan', 'id_mhs');
    }

    public function jadwal()
    {
        return $this->belongsToMany(MataKuliah::class, 'krs', 'id_mhs');
    }

    public function matkul()
    {
        return $this->belongsToMany(MataKuliah::class, 'khs', 'id_mhs');
    }

    public function getIdUser()
    {
      return $this->id;
    }

    
=======
>>>>>>> master
}

  
