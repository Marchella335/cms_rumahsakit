@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Staf</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $staf->NAMA }}</h5>
<p class="card-text"><strong>Departemen:</strong> {{ $staf->DEPARTEMEN }}</p>
<p class="card-text"><strong>Nomor Telepon:</strong> {{ $staf->NOMOR_TELEPON }}</p>
<p class="card-text"><strong>Gaji:</strong> Rp {{ number_format($staf->GAJI, 0, ',', '.') }}</p>

        </div>
    </div>

    <a href="{{ route('staf.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
