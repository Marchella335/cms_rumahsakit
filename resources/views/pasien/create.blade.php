@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pasien</h2>

    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
        @include('pasien.form')
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
