@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pasien</h2>

    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('pasien.form')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
