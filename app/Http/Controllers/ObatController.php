<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        // Ambil semua data obat
        $obats = Obat::all();

        // Cari obat dengan stok kurang dari atau sama dengan 5 (bisa disesuaikan)
        $stokHabis = Obat::where('stok', '<=', 5)->get();

        // Kirim data ke view
        return view('obat.index', compact('obats', 'stokHabis'));
    }



    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer',
            'expired_date' => 'required|date'
        ]);

        Obat::create($request->all());
        return redirect()->route('obat.index')->with('success', 'Obat berhasil ditambahkan.');
    }

    public function edit(Obat $obat)
    {
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, Obat $obat)
    {
        $request->validate([
            'nama_obat' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer',
            'expired_date' => 'required|date'
        ]);

        $obat->update($request->all());
        return redirect()->route('obat.index')->with('success', 'Obat berhasil diperbarui.');
    }

    public function destroy(Obat $obat)
    {
        $obat->delete();
        return redirect()->route('obat.index')->with('success', 'Obat berhasil dihapus.');
    }
}
