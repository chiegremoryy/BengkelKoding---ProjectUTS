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
                        <li class="breadcrumb-item"><a href="/dokter/dashboard">Dokter</a></li>
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
                            <h3 class="card-title">Form Edit Obat</h3>
                        </div>

                        <form method="POST" action="/dokter/obat/{{ $obat->id }}/edit">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_obat">Nama Obat</label>
                                    <input type="text" class="form-control" id="nama_obat" name="nama_obat"
                                        value="{{ $obat->nama_obat }}" />
                                </div>
                                <div class="form-group">
                                    <label for="kemasan">Kemasan</label>
                                    <input type="text" class="form-control" id="kemasan" name="kemasan"
                                        value="{{ $obat->kemasan }}" />
                                </div>
                                <div class="form-group">
                                    <label for="harega_obat">Harga</label>
                                    <input type="number" class="form-control" id="harega_obat" name="harga"
                                        value="{{ $obat->harga }}" />
                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">
                                    Update Obat
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection