@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Tambah Pasien</h1>
    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
        @include('pasien.form')
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection