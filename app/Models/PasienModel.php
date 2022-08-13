<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienModel extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $fillable = [
        'n_medis',
        'nik',
        'n_pasien',
        'jk',
        'umur',
        'alamat',
    ];
}
