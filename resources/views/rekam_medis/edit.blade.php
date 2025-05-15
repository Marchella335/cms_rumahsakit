@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Rekam Medis</h2>

    <form action="{{ route('rekam-medis.update', $rekamMedis->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="dokter_id" class="form-label">Dokter</label>
            <select name="id_dokter" class="form-control">
            @foreach ($dokterList as $dokter)
           <option value="{{ $dokter->id }}" {{ $rekamMedis->id_dokter == $dokter->id ? 'selected' : '' }}>
            {{ $dokter->nama_dokter }} ({{ $dokter->spesialis }})
            </option>
            @endforeach
            </select>

            </div>

        <div class="mb-3">
            <label for="hasil_pemeriksaan" class="form-label">Hasil Pemeriksaan</label>
            <textarea name="hasil_pemeriksaan" class="form-control" required>{{ $rekamMedis->hasil_pemeriksaan }}</textarea>
        </div>

        <div class="mb-3">
            <label for="riwayat_rekam_medis" class="form-label">Riwayat Rekam Medis</label>
            <textarea name="riwayat_rekam_medis" class="form-control">{{ $rekamMedis->riwayat_rekam_medis }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
