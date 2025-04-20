@extends('layouts.app')

@section('title', 'Dokter | Obat')

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
                    <li class="breadcrumb-item"><a href="#">Dokter</a></li>
                    <li class="breadcrumb-item active">Obat</li>
                </ol>
            </div>
        </div>
    </div>
</div>

@include('dokter.obat.create')

@endsection