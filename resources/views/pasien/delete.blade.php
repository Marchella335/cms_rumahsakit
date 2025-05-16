@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Hapus Data Pasien</h1>

    <div class="alert alert-warning">
        <p>Apakah kamu yakin ingin menghapus data pasien berikut?</p>
    </div>

    <ul>
        <li><strong>Nama:</strong> {{ $pasien->nama }}</li>
        <li><strong>Alamat:</strong> {{ $pasien->alamat }}</li>
        <li><strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</li>
        <li><strong>Tanggal Lahir:</strong> {{ $pasien->tanggal_lahir->format('d M Y') }}</li>
        <li><strong>No. Telepon:</strong> {{ $pasien->nomor_telepon }}</li>
    </ul>

    <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection