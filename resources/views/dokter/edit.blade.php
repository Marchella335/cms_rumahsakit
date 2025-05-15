@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Dokter</h1>

    <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
        @csrf @method('PUT')
        @include('dokter.form', ['dokter' => $dokter])
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
