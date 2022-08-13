<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KondisiModel extends Model
{
    use HasFactory;
    protected $table = 'table_kondisi_pasien';
    protected $fillable = [
        'id_pasien',
        't_masuk',
        't_keluar',
        'bagian',
        'kmr',
        'id_dokter',
        'a_masuk',
        'd_masuk',
        'd_keluar',
        'dk_utama',
        'dk_tambahan',
        'dk_komplikasi',
        'p_akibat',
        'k_penyakit',
        'r_penyakit',
        'p_fisik',
        'konsultasi',
        'jo_tindakan',
        'terapi',
        'pasien_keluar',
        'c_keluar',
        'prognosa',
        'catatan'
    ];
}
