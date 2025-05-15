@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Dokter</h1>

    <form action="{{ route('dokter.store') }}" method="POST">
        @csrf
        @include('dokter.form')
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
