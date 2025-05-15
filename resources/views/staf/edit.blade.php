@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Edit Data Staf</h1>
    <form action="{{ route('staf.update', $staf->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('staf.form', ['staf' => $staf])
        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('staf.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
