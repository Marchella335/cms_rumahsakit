<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $pasien->nama ?? '') }}" required>
</div>

<div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $pasien->alamat ?? '') }}">
</div>

<div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="L" {{ old('jenis_kelamin', $pasien->jenis_kelamin ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
        <option value="P" {{ old('jenis_kelamin', $pasien->jenis_kelamin ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
    </select>
</div>

<div class="form-group">
    <label for="usia">Usia</label>
    <input type="number" name="usia" class="form-control" value="{{ old('usia', $pasien->usia ?? '') }}" required>
</div>

<div class="form-group">
    <label for="nomor_telepon">Nomor Telepon</label>
    <input type="text" name="nomor_telepon" class="form-control" value="{{ old('nomor_telepon', $pasien->nomor_telepon ?? '') }}" required>
</div>

<div class="form-group">
    <label for="status_pasien">Status Pasien</label>
    <input type="text" name="status_pasien" class="form-control" value="{{ old('status_pasien', $pasien->status_pasien ?? '') }}" required>
</div>
