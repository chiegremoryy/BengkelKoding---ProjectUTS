@extends('layouts.app')

@section('title', 'Pasien | Periksa')

@section('nav-item')
@include('pasien.components.navbar')
@endsection

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Periksa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Pasien</a></li>
                    <li class="breadcrumb-item active">Periksa</li>
                </ol>
            </div>
        </div>
    </div>
</div>

@include('pasien.periksa.create')

@endsection