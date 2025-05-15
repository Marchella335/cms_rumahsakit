@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-primary">Hapus Data Dokter</h2>

    <div class="alert alert-warning">
        <strong>Apakah Anda yakin ingin menghapus dokter berikut?</strong>
    </div>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Nama:</strong> {{ $dokter->nama_dokter }}</li>
        <li class="list-group-item"><strong>Spesialis:</strong> {{ $dokter->spesialis }}</li>
        <li class="list-group-item"><strong>No. Telepon:</strong> {{ $dokter->nomor_telepon }}</li>
    </ul>

    <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
