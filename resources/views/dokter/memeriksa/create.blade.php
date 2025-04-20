@extends('layouts.app')

@section('title', 'Memeriksa Pasien')

@section('nav-item')
    @include('dokter.components.navbar')
@endsection

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Memeriksa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/dokter/dashboard') }}">Dokter</a></li>
                    <li class="breadcrumb-item active">Memeriksa</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Daftar Pasien Menunggu Pemeriksaan</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pasien</th>
                            <th>Biaya Periksa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($showPasien as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pasien->nama }}</td>
                            <td>Rp {{ number_format($item->biaya_periksa, 0, ',', '.') }}</td>
                            <td>
                            <a href="{{ url('/dokter/memeriksa/' . $item->id . '/edit') }}" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-signature"></i> Lanjut Pemeriksaan
                            </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada data pasien untuk diperiksa.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
