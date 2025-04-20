@extends('layouts.app')

@section('title', 'Obat')

@section('nav-item')
    @include('dokter.components.navbar')
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Obat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dokter/dasboard">Dokter</a></li>
                        <li class="breadcrumb-item active">Obat</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Obat</h3>
                        </div>

                        <form method="POST" action="/dokter/obat">
                            @csrf
                            <div class="card-body">
                                {{-- <div class="form-group">
                                    <select class="form-control" name="user_id">
                                        <option selected>Open this select menu</option>
                                        @forelse ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                        @empty
                                            <option>User belum ada</option>
                                        @endforelse
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label for="nama_obat">Nama Obat</label>
                                    <input type="text" class="form-control" id="nama_obat" name="nama_obat"
                                        placeholder="Masukkan nama obat" />
                                </div>
                                <div class="form-group">
                                    <label for="kemasan">Kemasan</label>
                                    <input type="text" class="form-control" id="kemasan" name="kemasan"
                                        placeholder="Masukkan kemasan obat" />
                                </div>
                                <div class="form-group">
                                    <label for="harega_obat">Harga</label>
                                    <input type="number" class="form-control" id="harega_obat" name="harga"
                                        placeholder="Masukkan harga obat" />
                                </div>
                            </div>

                            <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-prescription-bottle-medical"></i> Masukkan Obat
                            </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="row">
              <div class="col-12">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Daftar Obat</h3>
              </div>
              <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Obat</th>
                    <th>Kemasan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($obats as $medicine)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $medicine->nama_obat }}</td>
                    <td>{{ $medicine->kemasan }}</td>
                    <td>Rp. {{ number_format($medicine->harga, 2) }}</td>
                    <td>
                    <a href="{{ url('/dokter/obat/' . $medicine->id . '/edit') }}" class="btn btn-warning btn-sm">
                        <i class="fa fa-pen"></i> Edit
                    </a>
                    <form action="/dokter/obat/{{ $medicine->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fa fa-eraser"></i> Hapus
                        </button>
                    </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
    </section>

@endsection