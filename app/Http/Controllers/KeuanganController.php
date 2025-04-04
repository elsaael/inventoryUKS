<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;

class KeuanganController extends Controller
{
    public function index() {
        $keuangan = Keuangan::all();
        return view('keuangan.index', compact('keuangan'));
    }

    public function create() {
        return view('keuangan.create');
    }

    public function store(Request $request) {
        $request->validate([
            'keterangan' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        Keuangan::create($request->all());
        return redirect()->route('keuangan.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy($id) {
        Keuangan::find($id)->delete();
        return redirect()->route('keuangan.index')->with('success', 'Data berhasil dihapus!');
    }
}
