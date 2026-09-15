<?php

namespace App\Http\Controllers;

use App\Models\KategoriLaporan;
use Illuminate\Http\Request;

class KategoriLaporanController extends Controller
{
    public function index()
    {
        $kategori_laporans = KategoriLaporan::get();
        return view('be.kategori-laporan.index', compact('kategori_laporans'));
    }

    public function create()
    {
        return view('be.kategori-laporan.create');
    }

    public function store()
    {
        $kategori_laporans = request()->validate([
            'kategori_laporan' => 'required',
        ]);

        KategoriLaporan::create($kategori_laporans);
        return redirect(route('kategorilaporan.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(KategoriLaporan $kategorilaporan)
    {
        return view('be.kategori-laporan.edit', compact('kategorilaporan'));
    }

    public function update(KategoriLaporan $kategorilaporan)
    {
        $kategori_laporans = request()->validate([
            'kategori_laporan' => 'required',
        ]);

        $kategorilaporan->update($kategori_laporans);
        return redirect(route('kategorilaporan.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(KategoriLaporan $kategorilaporan)
    {
        $kategorilaporan->delete();
        return redirect(route('kategorilaporan.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
