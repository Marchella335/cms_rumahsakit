@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Rekam Medis</h2>

    <a href="{{ route('rekam-medis.create') }}" class="btn btn-success mb-3">+ Tambah Rekam Medis</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Dokter</th>
                <th>Spesialis</th>
                <th>Hasil Pemeriksaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rekamMedis as $rm)
                <tr>
                    <td>{{ $rm->dokter->nama_dokter }}</td>
                    <td>{{ $rm->dokter->spesialis }}</td>
                    <td>{{ Str::limit($rm->hasil_pemeriksaan, 50) }}</td>
                    <td>
                        <a href="{{ route('rekam-medis.show', $rm->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('rekam-medis.edit', $rm->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('rekam-medis.destroy', $rm->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
