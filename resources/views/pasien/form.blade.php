<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $pasien->nama ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control">{{ old('alamat', $pasien->alamat ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" required>
        <option value="L" {{ (old('jenis_kelamin', $pasien->jenis_kelamin ?? '') == 'L') ? 'selected' : '' }}>Laki-laki</option>
        <option value="P" {{ (old('jenis_kelamin', $pasien->jenis_kelamin ?? '') == 'P') ? 'selected' : '' }}>Perempuan</option>
    </select>
</div>

<div class="mb-3">
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', isset($pasien) ? $pasien->tanggal_lahir->format('Y-m-d') : '') }}" required>
</div>

<div class="mb-3">
    <label>No. Telepon</label>
    <input type="text" name="nomor_telepon" class="form-control" value="{{ old('nomor_telepon', $pasien->nomor_telepon ?? '') }}" required>
</div>