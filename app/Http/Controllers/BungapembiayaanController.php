<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bungapembiayaan;

class BungapembiayaanController extends Controller
{
    public function index()
    {
        $bungapembiayaans = Bungapembiayaan::all();
        return view('be.bungapembiayaan.index', compact('bungapembiayaans'));
    }

    public function create()
    {
        return view('be.bungapembiayaan.create');
    }

    public function store()
    {
        $bungapembiayaans = request()->validate([
            'nama_pembiayaan' => 'required',
            'presentase_bunga' => 'required',
        ]);

        Bungapembiayaan::create($bungapembiayaans);
        return redirect(route('bungapembiayaan.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Bungapembiayaan $bungapembiayaan)
    {
        return view('be.bungapembiayaan.edit', compact('bungapembiayaan'));
    }

    public function update(Bungapembiayaan $bungapembiayaan)
    {
        $bungapembiayaans = request()->validate([
            'nama_pembiayaan' => 'required',
            'presentase_bunga' => 'required',
        ]);

        $bungapembiayaan->update($bungapembiayaans);
        return redirect(route('bungapembiayaan.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Bungapembiayaan $bungapembiayaan)
    {
        $bungapembiayaan->delete();
        return redirect(route('bungapembiayaan.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
