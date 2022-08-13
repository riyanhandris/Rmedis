@extends('layouts.main')

@section('content')

<form class="user" action="/dokter/addDokter" method="post">
    @csrf
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="" class="form-label" style="margin-left: 2%">ID Karyawan</label>
            <input type="number" name="id_karyawan" class="form-control form-control-user @error('id_karyawan')
                is-invalid
            @enderror"
                placeholder="ID Karyawan" required value="{{ old('id_karyawan') }}">
        </div>
    </div>
    @error('id_karyawan')
    <div class="text-danger">
        {{ $message }}
    </div>     
    @enderror
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="" class="form-label" style="margin-left: 2%">Nama Dokter</label>
            <input type="text" name="n_dokter" class="form-control form-control-user @error('n_dokter')
                is-invalid
            @enderror" 
                placeholder="Nama Dokter" required value="{{ old('n_dokter') }}">
        </div>
    </div>
    @error('n_dokter')
    <div class="text-danger">
        {{ $message }}
    </div>     
    @enderror
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="" class="form-label" style="margin-left: 2%">Posisi</label>
            <input type="text" name="posisi" class="form-control form-control-user @error('posisi')
                is-invalid
            @enderror"
                placeholder="Posisi" required value="{{ old('posisi') }}">
        </div>
    </div>
    @error('posisi')
    <div class="text-danger">
        {{ $message }}
    </div>     
    @enderror

    <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
            <button type="submit" class="btn btn-primary btn-user btn-block">
            Save
            </button>
        </div> 
        <div class="col-sm-2 mb-3 mb-sm-0">
            <a href="/dokter" class="btn btn-danger btn-user btn-block">
            Cancel
            </a>
        </div>
    </div>
    <hr>
</form>
@endsection

