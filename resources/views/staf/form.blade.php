<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $staf->nama ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="departemen" class="form-label">Departemen</label>
    <input type="text" class="form-control" id="departemen" name="departemen" value="{{ old('departemen', $staf->departemen ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon', $staf->nomor_telepon ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="gaji" class="form-label">Gaji</label>
    <input type="number" step="0.01" class="form-control" id="gaji" name="gaji" value="{{ old('gaji', $staf->gaji ?? '') }}" required>
</div>
