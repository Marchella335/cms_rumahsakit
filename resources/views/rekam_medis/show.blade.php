@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Rekam Medis</h2>

    <div class="mb-3">
        <strong>Dokter:</strong> 
    @if ($rekamMedis->dokter)
    {{ $rekamMedis->dokter->nama_dokter }} ({{ $rekamMedis->dokter->spesialis }})
    @else
    <em>Data dokter tidak tersedia</em>
    @endif

    </div>

    <div class="mb-3">
        <strong>Hasil Pemeriksaan:</strong>
        <p>{{ $rekamMedis->hasil_pemeriksaan }}</p>
    </div>

    <div class="mb-3">
        <strong>Riwayat Rekam Medis:</strong>
        <p>{{ $rekamMedis->riwayat_rekam_medis ?? '-' }}</p>
    </div>

    <a href="{{ route('rekam-medis.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
