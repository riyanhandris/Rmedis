<?php

namespace App\Http\Controllers;

use App\Models\DokterModel;
use App\Http\Requests\StoreDokterModelRequest;
use App\Http\Requests\UpdateDokterModelRequest;

class DokterModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDokterModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDokterModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DokterModel  $dokterModel
     * @return \Illuminate\Http\Response
     */
    public function show(DokterModel $dokterModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DokterModel  $dokterModel
     * @return \Illuminate\Http\Response
     */
    public function edit(DokterModel $dokterModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDokterModelRequest  $request
     * @param  \App\Models\DokterModel  $dokterModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDokterModelRequest $request, DokterModel $dokterModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DokterModel  $dokterModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(DokterModel $dokterModel)
    {
        //
    }
}
