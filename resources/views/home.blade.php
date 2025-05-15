@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h1>Selamat Datang di Rumah Sakit Cepat Sembuh</h1>
        <p class="lead">Kelola data staf, dokter, pasien,dan rekam medis dengan mudah.</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Staf</h5>
                        <p class="card-text">Kelola data staf yang bekerja di klinik.</p>
                        <a href="{{ route('staf.index') }}" class="btn btn-primary">Lihat Staf</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dokter</h5>
                        <p class="card-text">Kelola data dokter yang menangani pasien.</p>
                        <a href="{{ route('dokter.index') }}" class="btn btn-primary">Lihat Dokter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Rekam Medis</h5>
                        <p class="card-text">Lihat dan kelola rekam medis pasien yang ditangani dokter.</p>
                        <a href="{{ route('rekam-medis.index') }}" class="btn btn-primary">Lihat Rekam Medis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
