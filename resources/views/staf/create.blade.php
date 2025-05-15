@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Tambah Staf Baru</h1>
    <form action="{{ route('staf.store') }}" method="POST">
        @csrf
        @include('staf.form')
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('staf.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
