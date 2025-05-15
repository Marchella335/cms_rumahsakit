<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Http\Request;

class StafController extends Controller
{
    public function index()
    {
        $stafs = Staf::all();
        return view('staf.index', compact('stafs'));
    }

    public function create()
    {
        return view('staf.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'departemen' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'gaji' => 'required|numeric',
        ]);

        Staf::create($request->all());
        return redirect()->route('staf.index')->with('success', 'Data staf berhasil ditambahkan');
    }

    public function show(Staf $staf)
    {
        return view('staf.show', compact('staf'));
    }

    public function edit(Staf $staf)
    {
        return view('staf.edit', compact('staf'));
    }

    public function update(Request $request, Staf $staf)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'departemen' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'gaji' => 'required|numeric',
        ]);

        $staf->update($request->all());
        return redirect()->route('staf.index')->with('success', 'Data staf berhasil diperbarui');
    }

    public function destroy(Staf $staf)
    {
        $staf->delete();
        return redirect()->route('staf.index')->with('success', 'Data staf berhasil dihapus');
    }

    public function delete($id)
    {
    $staf = STAFModel::findOrFail($id);
    return view('STAF.delete', compact('staf'));
    }
}
