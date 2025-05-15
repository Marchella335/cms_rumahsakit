<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Models\Dokter;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekamMedis = RekamMedis::with('dokter')->get();
        return view('rekam_medis.index', compact('rekamMedis'));
    }

    public function create()
    {
        $dokters = Dokter::all();
        return view('rekam_medis.create', compact('dokters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dokter_id' => 'required|exists:dokters,id',
            'hasil_pemeriksaan' => 'required',
            'riwayat_rekam_medis' => 'nullable',
        ]);

        RekamMedis::create($request->all());
        return redirect()->route('rekam-medis.index')->with('success', 'Data rekam medis berhasil ditambahkan.');
    }

    public function show(RekamMedis $rekamMedis)
    {
        return view('rekam_medis.show', compact('rekamMedis'));
    }

    public function edit($id)
{
    $rekamMedis = RekamMedis::findOrFail($id);
    $dokterList = Dokter::all(); // Ambil semua dokter

    return view('rekam_medis.edit', compact('rekamMedis', 'dokterList'));
}


    public function update(Request $request, RekamMedis $rekamMedis)
    {
        $request->validate([
            'dokter_id' => 'required|exists:dokters,id',
            'hasil_pemeriksaan' => 'required',
            'riwayat_rekam_medis' => 'nullable',
        ]);

        $rekamMedis->update($request->all());
        return redirect()->route('rekam-medis.index')->with('success', 'Data rekam medis berhasil diupdate.');
    }

    public function destroy(RekamMedis $rekamMedis)
    {
        $rekamMedis->delete();
        return redirect()->route('rekam-medis.index')->with('success', 'Data rekam medis berhasil dihapus.');
    }
}
