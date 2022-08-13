@extends('layouts.main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Dokter</h6>
        </div>
        <br>
        <a href="/pasien/addPasien" class="btn btn-primary btn-icon-split" style="max-width: 10%; margin-left:2%;">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Add</span>
        </a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. RM</th>
                            <th>NIK</th>
                            <th>Nama Pasien</th>
                            <th>L/P</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->n_medis }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->n_pasien }}</td>
                            <td>{{ $item->jk }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>
                                <a href="/pasien/detail/{{ $item->id }}">
                                    Detail
                                </a>|
                                <a href="#">
                                    Edit
                                </a>|
                                <a href="#" >
                                    Hapus
                                </a>|
                                <a href="#">
                                    Print
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection