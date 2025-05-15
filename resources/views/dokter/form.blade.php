@php
    $dokter = $dokter ?? null;
@endphp

<div class="mb-3">
    <label for="nama_dokter" class="form-label">Nama Dokter</label>
    <input type="text" name="nama_dokter" class="form-control" value="{{ old('nama_dokter', $dokter->nama_dokter ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="spesialis" class="form-label">Spesialis</label>
    <input type="text" name="spesialis" class="form-control" value="{{ old('spesialis', $dokter->spesialis ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="jadwal_praktek" class="form-label">Jadwal Praktek</label>
    <input type="text" name="jadwal_praktek" class="form-control" value="{{ old('jadwal_praktek', $dokter->jadwal_praktek ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="L" {{ old('jenis_kelamin', $dokter->jenis_kelamin ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
        <option value="P" {{ old('jenis_kelamin', $dokter->jenis_kelamin ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
    </select>
</div>

<div class="mb-3">
    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
    <input type="text" name="nomor_telepon" class="form-control" value="{{ old('nomor_telepon', $dokter->nomor_telepon ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="nomor_sip" class="form-label">Nomor SIP</label>
    <input type="text" name="nomor_sip" class="form-control" value="{{ old('nomor_sip', $dokter->nomor_sip ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="gaji" class="form-label">Gaji</label>
    <input type="number" name="gaji" step="0.01" class="form-control" value="{{ old('gaji', $dokter->gaji ?? '') }}" required>
</div>
