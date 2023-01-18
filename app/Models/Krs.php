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
        return $this->belongsTo(Krs::class);
    }

    public function matkul()
    {
        return $this->hasOne(MataKuliah::class, 'id_mk');
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id_krs');
    }

    public function getIdMatkul(){
        return $this->jadwal->pluck('id_mk');
    }

    public function parentable()
    {
        return $this->morphTo();
    }

   
    
}
