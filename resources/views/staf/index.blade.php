@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Daftar Staf</h1>
    <a href="{{ route('staf.create') }}" class="btn btn-primary mb-3">+ Tambah Staf</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Departemen</th>
                <th>Nomor Telepon</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stafs as $staf)
            <tr>
                <td>{{ $staf->nama }}</td>
                <td>{{ $staf->departemen }}</td>
                <td>{{ $staf->nomor_telepon }}</td>
                <td>Rp {{ number_format($staf->gaji, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('staf.edit', $staf->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('staf.destroy', $staf->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
