@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Dokter</h1>

    <a href="{{ route('dokter.create') }}" class="btn btn-primary mb-3">+ Tambah Dokter</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Jadwal Praktek</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Telepon</th>
                <th>Nomor SIP</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dokters as $dokter)
            <tr>
                <td>{{ $dokter->nama_dokter }}</td>
                <td>{{ $dokter->spesialis }}</td>
                <td>{{ $dokter->jadwal_praktek }}</td>
                <td>{{ $dokter->jenis_kelamin }}</td>
                <td>{{ $dokter->nomor_telepon }}</td>
                <td>{{ $dokter->nomor_sip }}</td>
                <td>Rp {{ number_format($dokter->gaji, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
