<?php

namespace App\Http\Controllers;

use App\Models\DokterModel;
use App\Models\KondisiModel;
use App\Models\PasienModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function index()
    {
        $data = PasienModel::all();
        return view('pasien', compact('data'));
    }

    public function addPasien()
    {
        return view('addPasien');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'n_medis' => 'required|unique:pasien',
                'nik' => 'required|min:11|max: 16|unique:pasien',
                'n_pasien' => 'required',
                'jk' => 'required',
                'umur' => 'required',
                'alamat' => 'required',
            ]
        );

        PasienModel::create($validatedData);

        return redirect('/pasien');
    }

    public function detailPasien($id)
    {
        $data = PasienModel::findorfail($id);

        return view('detailPasien', compact('data'), [
            'dokter' => DokterModel::all()
        ]);
    }

    public function inputKondisi(Request $request)
    {
        $validatedData = $request->validate([
            'id_pasien' => '',
            't_masuk' => 'required',
            't_keluar' => 'required',
            'bagian' => 'required',
            'kmr' => 'required',
            'id_dokter' => 'required',
            'a_masuk' => 'required',
            'd_masuk' => 'required',
            'd_keluar' => 'required',
            'dk_utama' => '',
            'dk_tambahan' => '',
            'dk_komplikasi' => '',
            'p_akibat' => 'required',
            'k_penyakit' => 'required',
            'r_penyakit' => 'required',
            'p_fisik' => 'required',
            'konsultasi' => 'required',
            'jo_tindakan' => 'required',
            'terapi' => 'required',
            'pasien_keluar' => 'required',
            'c_keluar' => 'required',
            'prognosa' => 'required',
            'catatan' => 'required',

        ]);

        KondisiModel::create($validatedData);
        return redirect()->back();
    }
}
