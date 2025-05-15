<?php

namespace App\Http\Controllers;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    
public function index()
{
    $dokters = Dokter::all();
    return view('dokter.index', compact('dokters'));
}

public function create()
{
    return view('dokter.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama_dokter' => 'required',
        'spesialis' => 'required',
        'jadwal_praktek' => 'required',
        'jenis_kelamin' => 'required|in:L,P',
        'nomor_telepon' => 'required',
        'nomor_sip' => 'required',
        'gaji' => 'required|numeric',
    ]);

    Dokter::create($request->all());

    return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil ditambahkan.');
}

public function edit(Dokter $dokter)
{
    return view('dokter.edit', compact('dokter'));
}

public function update(Request $request, Dokter $dokter)
{
    $request->validate([
        'nama_dokter' => 'required',
        'spesialis' => 'required',
        'jadwal_praktek' => 'required',
        'jenis_kelamin' => 'required|in:L,P',
        'nomor_telepon' => 'required',
        'nomor_sip' => 'required',
        'gaji' => 'required|numeric',
    ]);

    $dokter->update($request->all());

    return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil diperbarui.');
}

public function destroy(Dokter $dokter)
{
    $dokter->delete();
    return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil dihapus.');
}
public function delete($id)
{
    $dokter = Dokter::findOrFail($id);
    return view('DOKTER.delete', compact('dokter'));
}

}
