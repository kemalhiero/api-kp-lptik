<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khs extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_khs';

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
}