<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokterModel extends Model
{
    use HasFactory;

    protected $table = 'table_dokter';
    protected $fillable = [
        'id_karyawan',
        'n_dokter',
        'posisi',
    ];
}
