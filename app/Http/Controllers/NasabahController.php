<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use Storage;

class NasabahController extends Controller
{
    public function index()
    {
        $nasabahs = Nasabah::latest()->get();
        return view('be.nasabah.index', compact('nasabahs'));
    }

    public function create()
    {
        return view('be.nasabah.create');
    }

    public function store()
    {
        $nasabahs = request()->validate([
            'foto_ktp' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama' => 'required',
            'nik' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_produk' => 'required',
        ]);

        $imageName = time() . '-' . request()->nama;
        $foto_ktp = request()->file('foto_ktp');
        $file_name = $imageName . '.' . $foto_ktp->extension();
        $foto_ktp_url = $foto_ktp->storeAs("public/images/nasabahs", $file_name);
        $nasabahs['foto_ktp'] = $file_name;

        Nasabah::create($nasabahs);
        return redirect(route('nasabah.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function show(Nasabah $nasabah)
    {
        return view('be.nasabah.show', compact('nasabah'));
    }

    public function edit(Nasabah $nasabah)
    {
        return view('be.nasabah.edit', compact('nasabah'));
    }

    public function update(Nasabah $nasabah)
    {
        $nasabahs = request()->validate([
            'foto_ktp' => 'image|mimes:jpg,jpeg,png|max:2048',
            'nama' => 'required',
            'nik' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_produk' => 'required',
        ]);

        if (request()->file('foto_ktp')) {
            Storage::delete("public/images/nasabahs/".$nasabah->foto_ktp);

            $imageName = time() . '-' . request()->nama;
            $foto_ktp = request()->file('foto_ktp');
            $file_name = $imageName . '.' . $foto_ktp->extension();
            $foto_ktp_url = $foto_ktp->storeAs("public/images/nasabahs", $file_name);
        } else {
            $file_name = $nasabah->foto_ktp;
        }
        $nasabahs['foto_ktp'] = $file_name;

        $nasabah->update($nasabahs);
        return redirect(route('nasabah.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Nasabah $nasabah)
    {
        Storage::delete("public/images/nasabahs/".$nasabah->foto_ktp);

        $nasabah->delete();
        return redirect(route('nasabah.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
