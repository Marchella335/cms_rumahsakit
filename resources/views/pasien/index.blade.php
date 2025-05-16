@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Daftar Pasien</h1>
    <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasiens as $pasien)
            <tr>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>{{ $pasien->tanggal_lahir->format('d M Y') }}</td>
                <td>{{ $pasien->nomor_telepon }}</td>
                <td>
                    <a href="{{ route('pasien.show', $pasien->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('pasien.delete', $pasien->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection