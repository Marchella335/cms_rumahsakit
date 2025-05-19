<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'            => 'required|string|max:255',
            'alamat'          => 'nullable|string',
            'jenis_kelamin'   => 'required|in:L,P',
            'usia'            => 'required|int',
            'nomor_telepon'   => 'required|string|max:20',
            'status_pasien'   => 'required|string|max:255'
        ]);

        Pasien::create($request->all());
        return redirect()->route('pasien.index')
                         ->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function show(Pasien $pasien)
    {
        return view('pasien.show', compact('pasien'));
    }

    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama'            => 'required|string|max:255',
            'alamat'          => 'nullable|string',
            'jenis_kelamin'   => 'required|in:L,P',
            'usia'            => 'required|int',
            'nomor_telepon'   => 'required|string|max:20',
            'status_pasien'   => 'required|string|max:255'

        ]);

        $pasien->update($request->all());
        return redirect()->route('pasien.index')
                         ->with('success', 'Data pasien berhasil diperbarui');
    }

    public function delete($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.delete', compact('pasien'));
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasien.index')
                         ->with('success', 'Data pasien berhasil dihapus');
    }
}
