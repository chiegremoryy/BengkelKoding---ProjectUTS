@extends('layouts.app')

@section('title', 'Dokter | Memeriksa')

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
                    <li class="breadcrumb-item"><a href="#">Dokter</a></li>
                    <li class="breadcrumb-item active">Memeriksa</li>
                </ol>
            </div>
        </div>
    </div>
</div>

@include('dokter.memeriksa.create')

@endsection