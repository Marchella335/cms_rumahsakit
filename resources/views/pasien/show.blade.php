@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pasien</h1>

    <p><strong>Nama:</strong> {{ $pasien->nama }}</p>
    <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
    <p><strong>No. Telepon:</strong> {{ $pasien->nomor_telepon }}</p>
    <p><strong>Usia:</strong> {{ $pasien->usia }}</p>
    <p><strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin }}</p>
    <p><strong>Status Pasien:</strong> {{ $pasien->status_pasien }}</p>

    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection