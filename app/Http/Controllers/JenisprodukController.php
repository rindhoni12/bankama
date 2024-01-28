<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenisproduk;

class JenisprodukController extends Controller
{
    public function index()
    {
        $jenis_produks = Jenisproduk::get();
        return view('be.setting-navbar.jenis-produk.index', compact('jenis_produks'));
    }

    public function create()
    {
        return view('be.setting-navbar.jenis-produk.create');
    }

    public function store()
    {
        $jenis_produks = request()->validate([
            'jenis_produk' => 'required',
        ]);

        Jenisproduk::create($jenis_produks);
        return redirect(route('jenisproduk.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Jenisproduk $jenisproduk)
    {
        return view('be.setting-navbar.jenis-produk.edit', compact('jenisproduk'));
    }

    public function update(Jenisproduk $jenisproduk)
    {
        $jenis_produks = request()->validate([
            'jenis_produk' => 'required',
        ]);

        $jenisproduk->update($jenis_produks);
        return redirect(route('jenisproduk.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Jenisproduk $jenisproduk)
    {
        $jenisproduk->delete();
        return redirect(route('jenisproduk.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
