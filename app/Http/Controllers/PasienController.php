<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // Tampilkan semua pasien (dengan pencarian)
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $pasiens = Pasien::where('nama', 'like', '%' . $search . '%')->get();
        } else {
            $pasiens = Pasien::all();
        }

        return view('pasien.index', compact('pasiens', 'search'));
    }

    // Form tambah pasien
    public function create()
    {
        return view('pasien.create');
    }

    // Simpan pasien baru
    public function store(Request $request)
    {
        $request->validate([
            'nama'            => 'required|string|max:255',
            'alamat'          => 'nullable|string',
            'jenis_kelamin'   => 'required|in:L,P',
            'usia'            => 'required|integer',
            'nomor_telepon'   => 'required|string|max:20',
            'status_pasien'   => 'required|string|max:255'
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil ditambahkan');
    }

    // Tampilkan detail pasien (opsional)
    public function show(Pasien $pasien)
    {
        return view('pasien.show', compact('pasien'));
    }

    // Form edit pasien
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    // Simpan perubahan
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama'            => 'required|string|max:255',
            'alamat'          => 'nullable|string',
            'jenis_kelamin'   => 'required|in:L,P',
            'usia'            => 'required|integer',
            'nomor_telepon'   => 'required|string|max:20',
            'status_pasien'   => 'required|string|max:255'
        ]);

        $pasien->update($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui');
    }

    // Halaman konfirmasi hapus
    public function delete($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.delete', compact('pasien'));
    }

    // Hapus data pasien
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil dihapus');
    }
}