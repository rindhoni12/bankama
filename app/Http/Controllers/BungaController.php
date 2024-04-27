<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bunga;

class BungaController extends Controller
{
    public function index()
    {
        $bungas = Bunga::all();
        return view('be.bunga.index', compact('bungas'));
    }

    public function create()
    {
        return view('be.bunga.create');
    }

    public function store()
    {
        $bungas = request()->validate([
            'jenis_investasi' => 'required',
            'nisbah' => 'required',
            'nama_bulan1' => 'required',
            'nama_bulan2' => 'required',
            'nama_bulan3' => 'required',
            'bunga_bulan1' => 'required',
            'bunga_bulan2' => 'required',
            'bunga_bulan3' => 'required',
        ]);

        Bunga::create($bungas);
        return redirect(route('bunga.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Bunga $bunga)
    {
        return view('be.bunga.edit', compact('bunga'));
    }

    public function update(Bunga $bunga)
    {
        $bungas = request()->validate([
            'jenis_investasi' => 'required',
            'nisbah' => 'required',
            'nama_bulan1' => 'required',
            'nama_bulan2' => 'required',
            'nama_bulan3' => 'required',
            'bunga_bulan1' => 'required',
            'bunga_bulan2' => 'required',
            'bunga_bulan3' => 'required',
        ]);

        $bunga->update($bungas);
        return redirect(route('bunga.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Bunga $bunga)
    {
        $bunga->delete();
        return redirect(route('bunga.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
