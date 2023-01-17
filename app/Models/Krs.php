<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_krs';
    

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'id_mhs');
    }

    public function matkul()
    {
        return $this->hasOne(MataKuliah::class, 'id_mk');
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id_krs');
    }
    
}
