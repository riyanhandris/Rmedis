@extends('layouts.main')

@section('content')

<div class="col-lg-8">
    <form action="/pasien/addPasien/add" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Nomor RM</label>
          <input type="number" name="n_medis" class="form-control @error('n_medis')
            is-invalid
          @enderror" required value="{{ old('n_medis') }}">
        </div>
        @error('n_medis')  
        <div class="text-danger">
          {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
          <label for="" class="form-label">NIK</label>
          <input type="number" name="nik" class="form-control @error('nik')
            is-invalid
          @enderror" required value="{{ old('nik') }}">
      </div>
      @error('nik')  
        <div class="text-danger">
          {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
            <label for="" class="form-label">Nama Pasien</label>
            <input type="text" name="n_pasien" class="form-control @error('n_pasien')
              is-invalid
            @enderror" required value="{{ old('n_pasien') }}" >
        </div>
        @error('n_pasien')  
        <div class="text-danger">
          {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
          <label for="" class="form-label">Jenis Kelamin</label>
          <select class="form-control" name="jk">
            <option disabled selected>Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select>
      </div>
        <div class="mb-3">
            <label for="" class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control @error('umur')
              is-invalid
            @enderror" required value="{{ old('umur') }}" >
        </div>
        @error('umur')  
        <div class="text-danger">
          {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
            <label for="" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control @error('alamat')
              is-invalid
            @enderror" required value="{{ old('alamat') }}">
          </div>
          @error('alamat')  
        <div class="text-danger">
          {{ $message }}
        </div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/pasien" class="btn btn-info">Cancel</a>
      </form>

</div>
@endsection