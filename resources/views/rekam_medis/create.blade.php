@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Rekam Medis</h2>

    <form action="{{ route('rekam-medis.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="dokter_id" class="form-label">Dokter</label>
            <select name="dokter_id" class="form-select" required>
                <option value="">-- Pilih Dokter --</option>
                @foreach ($dokters as $dokter)
                    <option value="{{ $dokter->id }}">{{ $dokter->nama_dokter }} ({{ $dokter->spesialis }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="hasil_pemeriksaan" class="form-label">Hasil Pemeriksaan</label>
            <textarea name="hasil_pemeriksaan" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="riwayat_rekam_medis" class="form-label">Riwayat Rekam Medis</label>
            <textarea name="riwayat_rekam_medis" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
