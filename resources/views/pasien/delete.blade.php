@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Hapus Pasien</h2>
    <p>Apakah Anda yakin ingin menghapus data pasien <strong>{{ $pasien->nama }}</strong>?</p>

    <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
