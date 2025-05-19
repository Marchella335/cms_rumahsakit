@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Pasien</h2>

    <a href="{{ route('pasien.create') }}" class="btn btn-success mb-3">Tambah Pasien</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Usia</th>
                <th>Nomor Telepon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasiens as $pasien)
            <tr>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->usia }}</td>
                <td>{{ $pasien->nomor_telepon }}</td>
                <td>{{ $pasien->status_pasien }}</td>
                <td>
                    <a href="{{ route('pasien.show', $pasien->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('pasien.destroy', $pasien->id) }}"
                       onclick="event.preventDefault(); document.getElementById('delete-form-{{ $pasien->id }}').submit();"
                       class="btn btn-danger btn-sm">Hapus</a>
                    <form id="delete-form-{{ $pasien->id }}" action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
