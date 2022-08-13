<?php

namespace App\Http\Controllers;

use App\Models\DokterModel;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $data = DokterModel::all();
        return view('dokter', compact('data'));
    }

    public function addDokter()
    {
        return view('addDokter');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_karyawan' => 'required|unique:table_dokter',
            'n_dokter' => 'required',
            'posisi' => 'required',
        ]);

        DokterModel::create($validatedData);

        return redirect('/dokter');
    }
}
