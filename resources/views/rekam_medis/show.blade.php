@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detail Rekam Medis</h4>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th>ID Rekam Medis</th>
                    <td>{{ $rekamMedis->id_rekam_medis }}</td>
                </tr>
                <tr>
                    <th>Dokter</th>
                    <td>
                        @if ($rekamMedis->dokter)
                            {{ $rekamMedis->dokter->nama_dokter }} ({{ $rekamMedis->dokter->spesialis }})
                        @else
                            <em>Data dokter tidak tersedia</em>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Staf</th>
                    <td>
                        @if ($rekamMedis->staf)
                            {{ $rekamMedis->staf->nama }} - {{ $rekamMedis->staf->departemen }}
                        @else
                            <em>Data staf tidak tersedia</em>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Pasien</th>
                    <td>
                        @if ($rekamMedis->pasien)
                            {{ $rekamMedis->pasien->nama }}
                        @else
                            <em>Data pasien tidak tersedia</em>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Hasil Pemeriksaan</th>
                    <td>{{ $rekamMedis->hasil_pemeriksaan }}</td>
                </tr>
                <tr>
                    <th>Riwayat Rekam Medis</th>
                    <td>{{ $rekamMedis->riwayat_rekam_medis ?? '-' }}</td>
                </tr>
            </table>

            <a href="{{ route('rekam-medis.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
