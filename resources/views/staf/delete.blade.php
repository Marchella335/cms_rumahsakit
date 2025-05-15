@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-primary">Hapus Data Staf</h2>

    <div class="alert alert-warning">
        <strong>Apakah Anda yakin ingin menghapus staf berikut?</strong>
    </div>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Nama:</strong> {{ $staf->nama }}</li>
        <li class="list-group-item"><strong>Departemen:</strong> {{ $staf->departemen }}</li>
        <li class="list-group-item"><strong>Nomor Telepon:</strong> {{ $staf->nomor_telepon }}</li>
        <li class="list-group-item"><strong>Gaji:</strong> Rp{{ number_format($staf->gaji, 0, ',', '.') }}</li>
    </ul>

    <form action="{{ route('staf.destroy', $staf->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ route('staf.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
