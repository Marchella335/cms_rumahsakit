@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Daftar Pasien</h1>

    <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">+ Tambah Pasien</a>

    {{-- Form Pencarian --}}
    <form method="GET" action="{{ route('pasien.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari nama pasien..." value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </form>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tabel Pasien --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Usia</th>
                <th>Nomor Telepon</th>
                <th>Status Pasien</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pasiens as $pasien)
                <tr>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>{{ $pasien->jenis_kelamin }}</td>
                    <td>{{ $pasien->usia }}</td>
                    <td>{{ $pasien->nomor_telepon }}</td>
                    <td>{{ $pasien->status_pasien }}</td>
                    <td>
                        <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('pasien.delete', $pasien->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Data tidak ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection