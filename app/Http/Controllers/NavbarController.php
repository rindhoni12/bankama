<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Navbar, Jenisproduk};
use Str;

class NavbarController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        return view('be.setting-navbar.navbar.index', compact('navbars'));
    }

    public function create()
    {
        $jenis_produks = Jenisproduk::select('jenis_produk')->get();
        return view('be.setting-navbar.navbar.create', compact('jenis_produks'));
    }

    public function store()
    {
        $navbars = request()->validate([
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
        ]);
        $slug = Str::slug(request()->nama_produk);

        $navbars['slug'] = $slug;

        Navbar::create($navbars);
        return redirect(route('navbar.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Navbar $navbar)
    {
        $jenis_produks = Jenisproduk::select('jenis_produk')->get();
        return view('be.setting-navbar.navbar.edit', compact('navbar','jenis_produks'));
    }

    public function update(Navbar $navbar)
    {
        $navbars = request()->validate([
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
        ]);
        $slug = Str::slug(request()->nama_produk);

        $navbars['slug'] = $slug;

        $navbar->update($navbars);
        return redirect(route('navbar.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Navbar $navbar)
    {
        $navbar->delete();
        return redirect(route('navbar.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
