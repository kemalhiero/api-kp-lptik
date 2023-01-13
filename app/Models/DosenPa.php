<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenPa extends Model
{
    use HasFactory;

    protected $table = 'dosen_pa';
    protected $primaryKey = 'id_pa';
}
