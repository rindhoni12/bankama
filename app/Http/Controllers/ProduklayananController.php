<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Produklayanan, Navbar};
use Storage;
use Str;

class ProduklayananController extends Controller
{
    public function index()
    {
        $produklayanans = Produklayanan::all();
        return view('be.setting-navbar.produklayanan.index', compact('produklayanans'));
    }

    public function create()
    {
        $kategoris = Navbar::select('slug','nama_produk')->get();
        return view('be.setting-navbar.produklayanan.create', compact('kategoris'));
    }

    public function store()
    {
        $produklayanans = request()->validate([
            'foto_thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama_produklayanan' => 'required',
            'deskripsi' => 'required',
            'jenis_tabungan' => 'required',
        ]);
        $slug = Str::slug(request()->nama_produklayanan);

        $imageName = time() . '-' . $slug;
        $thumbnail = request()->file('foto_thumbnail');
        $file_name = $imageName . '.' . $thumbnail->extension();
        $thumbnailurl = $thumbnail->storeAs("public/images/produklayanans", $file_name);
        $produklayanans['foto_thumbnail'] = $file_name;

        Produklayanan::create($produklayanans);
        return redirect(route('produklayanan.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function show(Produklayanan $produklayanan)
    {
        return view('be.setting-navbar.produklayanan.show', compact('produklayanan'));
    }

    public function edit(Produklayanan $produklayanan)
    {
        $kategoris = Navbar::select('slug','nama_produk')->get();
        return view('be.setting-navbar.produklayanan.edit', compact('produklayanan','kategoris'));
    }

    public function update(Produklayanan $produklayanan)
    {
        $produklayanans = request()->validate([
            'foto_thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama_produklayanan' => 'required',
            'deskripsi' => 'required',
            'jenis_tabungan' => 'required',
        ]);
        $slug = Str::slug(request()->nama_produklayanan);

        if (request()->file('foto_thumbnail')) {
            Storage::delete("public/images/produklayanans/".$produklayanan->foto_thumbnail);

            $imageName = time() . '-' . $slug;
            $thumbnail = request()->file('foto_thumbnail');
            $file_name = $imageName . '.' . $thumbnail->extension();
            $thumbnailurl = $thumbnail->storeAs("public/images/produklayanans", $file_name);
        } else {
            $file_name = $produklayanan->foto_thumbnail;
        }
        $produklayanans['foto_thumbnail'] = $file_name;

        $produklayanan->update($produklayanans);
        return redirect(route('produklayanan.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Produklayanan $produklayanan)
    {
        Storage::delete("public/images/produklayanans/".$produklayanan->foto_thumbnail);

        $produklayanan->delete();
        return redirect(route('produklayanan.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
