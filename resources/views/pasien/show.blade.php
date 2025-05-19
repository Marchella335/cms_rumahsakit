@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Pasien</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nama:</strong> {{ $pasien->nama }}</li>
        <li class="list-group-item"><strong>Alamat:</strong> {{ $pasien->alamat }}</li>
        <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin }}</li>
        <li class="list-group-item"><strong>Usia:</strong> {{ $pasien->usia }}</li>
        <li class="list-group-item"><strong>Nomor Telepon:</strong> {{ $pasien->nomor_telepon }}</li>
        <li class="list-group-item"><strong>Status Pasien:</strong> {{ $pasien->status_pasien }}</li>
    </ul>

    <a href="{{ route('pasien.index') }}" class="btn btn-primary mt-3">Kembali</a>
</div>
@endsection
