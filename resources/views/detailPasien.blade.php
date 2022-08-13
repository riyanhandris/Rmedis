@extends('layouts.main')

@section('content')
<!-- Basic Card Example -->
<div class="col-lg-9">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
        </div>
        <div class="card-body">
            <table width='100%'>
                <tr>
                    <td>Nomor RM</td>
                    <td>: {{ $data->n_medis }}</td>
                    
                    <td>Jenis Kelamin</td>
                    <td>: {{ $data->jk }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: {{ $data->nik }}</td>

                    <td>Umur</td>
                    <td>: {{ $data->umur }}</td>
                </tr>
                <tr>
                    <td>Nama Pasien</td>
                    <td>: {{ $data->n_pasien }}</td>

                    <td>Alamat</td>
                    <td>: {{ $data->alamat }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>


{{-- Form Input Kondisi Pasien  --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Input Kondisi Pasien</h6>
    </div>
    <div class="card-body">
        <div class="col-lg-12">
            <form action="/pasien/addKondisi" method="post">
                @csrf

                <input type="hidden" name="id_pasien" value="{{ $data->id }}">
                <div class="form-group row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <label for="" class="form-label">Tanggal Masuk</label>
                        <input type="date" name="t_masuk" class="form-control @error('t_masuk')
                          is-invalid
                        @enderror" required value="{{ old('t_masuk') }}">
                      </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <label for="" class="form-label">Tanggal Keluar</label>
                      <input type="date" name="t_keluar" class="form-control @error('t_keluar')
                        is-invalid
                      @enderror" required value="{{ old('t_keluar') }}">
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <label for="" class="form-label">Bagian</label>
                      <input type="text" name="bagian" class="form-control @error('bagian')
                        is-invalid
                      @enderror" required value="{{ old('bagian') }}">
                  </div>
                  <div class="col-sm-3 mb-3 mb-sm-0">
                      <label for="" class="form-label">KMR</label>
                      <input type="text" name="kmr" class="form-control @error('kmr')
                        is-invalid
                      @enderror" required value="{{ old('kmr') }}" >
                  </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="" class="form-label">Dokter</label>
                      <select class="form-control" name="id_dokter">
                        <option disabled selected>Pilih dokter</option>\
                        @foreach ($dokter as $item)
                        <option value="{{ $item->id }}">{{ $item->n_dokter }}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="" class="form-label">Alasan Masuk</label>
                      <input type="text" name="a_masuk" class="form-control @error('a_masuk')
                        is-invalid
                      @enderror" required value="{{ old('a_masuk') }}" >
                  </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Diagnosa Masuk</label>
                        <input type="text" name="d_masuk" class="form-control @error('d_masuk')
                          is-invalid
                        @enderror" required value="{{ old('d_masuk') }}">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                          <label for="" class="form-label">Diagnosa Keluar</label>
                          <input type="text" name="d_keluar" class="form-control @error('d_keluar')
                            is-invalid
                          @enderror" required value="{{ old('d_keluar') }}">
                        </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0" style="margin: auto">
                    <label for="" class="form-label">Diagnosa Keluar/Utama</label>
                    <input type="text" name="dk_utama" class="form-control" value="{{ old('dk_utama') }}">
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0" style="margin: auto">
                    <label for="" class="form-label">Diagnosa Keluar/Tambahan</label>
                    <input type="text" name="dk_tambahan" class="form-control" value="{{ old('dk_tambahan') }}">
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0" style="margin: auto">
                    <label for="" class="form-label">Diagnosa Keluar/Komplikasi</label>
                    <input type="text" name="dk_komplikasi" class="form-control" value="{{ old('dk_komplikasi') }}">
                  </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Penyakit diakibatkan</label>
                        <input type="text" name="p_akibat" class="form-control @error('p_akibat')
                          is-invalid
                        @enderror" required value="{{ old('p_akibat') }}">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Kode Penyakit</label>
                        <input type="text" name="k_penyakit" class="form-control @error('k_penyakit')
                          is-invalid
                        @enderror" required value="{{ old('k_penyakit') }}">
                      </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Riwayat Penyakit</label>
                        <input type="text" name="r_penyakit" class="form-control @error('r_penyakit')
                          is-invalid
                        @enderror" required value="{{ old('r_penyakit') }}">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Pemerikasaan Fisik</label>
                        <input type="text" name="p_fisik" class="form-control @error('p_fisik')
                          is-invalid
                        @enderror" required value="{{ old('p_fisik') }}">
                      </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Konsultasi kepada</label>
                        <input type="text" name="konsultasi" class="form-control @error('konsultasi')
                          is-invalid
                        @enderror" required value="{{ old('konsultasi') }}">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Jenis Operasi/Tindakan</label>
                        <input type="text" name="jo_tindakan" class="form-control @error('jo_tindakan')
                          is-invalid
                        @enderror" required value="{{ old('jo_tindakan') }}">
                      </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Terapi yang diberikan</label>
                        <input type="text" name="terapi" class="form-control @error('terapi')
                          is-invalid
                        @enderror" required value="{{ old('terapi') }}">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Keadaan Pasien Keluar</label>
                        <select class="form-control" name="pasien_keluar">
                          <option disabled selected>Keadaan</option>
                          <option value="Sembuh">Sembuh</option>
                          <option value="Perbaikan">Perbaikan</option>
                          <option value="Tidak ada perbaikan">Tidak ada perbaikan</option>
                          <option value="Meninggal sebelum 48 jam">Meninggal sebelum 48 jam</option>
                          <option value="Meninggal sesudah 48 jam">Meninggal sesudah 48 jam</option>
                        </select>
                      </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Cara Keluar</label>
                        <select class="form-control" name="c_keluar">
                          <option disabled selected>Cara Keluar</option>
                          <option value="Atas Persetujuan">Atas Persetujuan</option>
                          <option value="Pulang Paksa">Pulang Paksa</option>
                          <option value="Dirujuk">Dirujuk</option>
                          <option value="Pindah RS lain">Pindah RS lain</option>
                          <option value="Lari">Lari</option>
                        </select>
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Prognosa</label>
                        <select class="form-control" name="prognosa">
                          <option disabled selected>Prognosa</option>
                          <option value="Progonsa baik">Atas Persetujuan</option>
                          <option value="Prognosa buruk">Pulang Paksa</option>
                          <option value="Prognosa ragu-ragu condong kearah baik">Prognosa ragu-ragu condong kearah baik</option>
                          <option value="Prognosa ragu-ragu condong kearah buruk">Prognosa ragu-ragu condong kearah buruk</option>
                          <option value="Prognosa buruk tidak memberikan harapan">Lari</option>
                        </select>
                      </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="" class="form-label">Catatan waktu keluar</label>
                        <input type="text" name="catatan" class="form-control @error('catatan')
                          is-invalid
                        @enderror" required value="{{ old('catatan') }}">
                      </div>
                </div>          
                  

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/pasien" class="btn btn-info">Cancel</a>
              </form>
        
        </div>
    </div>
</div>

<div class="row">
 
  <div class="col-lg-6">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kondisi</h6>
        </div>
        <div class="card-body">
          Adadadada
        </div>
    </div>
  
  </div>
</div>

@endsection