<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alamat;

class AlamatController extends Controller
{
    public function index()
    {
        $alamats = Alamat::get();
        return view('be.tentang-kami.alamat.index', compact('alamats'));
    }

    public function create()
    {
        return view('be.tentang-kami.alamat.create');
    }

    public function store()
    {
        $alamats = request()->validate([
            'nama_cabang' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'no_hp' => 'required',
        ]);
        $alamats['flag'] = 'cabang';

        Alamat::create($alamats);
        return redirect(route('alamat.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Alamat $alamat)
    {
        return view('be.tentang-kami.alamat.edit', compact('alamat'));
    }

    public function update(Alamat $alamat)
    {
        $alamats = request()->validate([
            'nama_cabang' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'no_hp' => 'required',
        ]);
        $alamats['flag'] = 'cabang';

        $alamat->update($alamats);
        return redirect(route('alamat.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Alamat $alamat)
    {
        $alamat->delete();
        return redirect(route('alamat.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
