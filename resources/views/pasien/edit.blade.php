@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Data Pasien</h1>
    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('pasien.form')
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection