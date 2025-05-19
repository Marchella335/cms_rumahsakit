@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Hapus Rekam Medis</h2>
    <p>Apakah Anda yakin ingin menghapus data Rekam Medis <strong>{{ $rekam-medis->nama }}</strong>?</p>

    <form action="{{ route('rekam-medis.destroy', $rekam-medis->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ route('rekam-medis.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
