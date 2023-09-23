<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direksi;
use Storage;

class DireksiController extends Controller
{
    public function index()
    {
        $direksis = Direksi::get();
        return view('be.tentang-kami.direksi.index', compact('direksis'));
    }

    public function create()
    {
        return view('be.tentang-kami.direksi.create');
    }

    public function store()
    {
        $direksis = request()->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama' => 'required',
            'jabatan' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan_terakhir' => 'required',
            'dasar_pengangkatan' => 'required',
        ]);

        $photo_image = request()->file('photo');
        $file_name = time() . '-' . $photo_image->getClientOriginalName();
        $photo_image_url = $photo_image->storeAs("public/images/direksis", $file_name);
        $direksis['photo'] = $file_name;

        Direksi::create($direksis);
        return redirect(route('direksi.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Direksi $direksi)
    {
        return view('be.tentang-kami.direksi.edit', compact('direksi'));
    }

    public function update(Direksi $direksi)
    {
        $direksis = request()->validate([
            'photo' => 'image|mimes:jpg,jpeg,png|max:2048',
            'nama' => 'required',
            'jabatan' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan_terakhir' => 'required',
            'dasar_pengangkatan' => 'required',
        ]);

        if (request()->file('photo')) {
            Storage::delete("public/images/direksis/".$direksi->photo);

            $imageName = time() . '-' . request()->nama;
            $photo = request()->file('photo');
            $file_name = $imageName . '.' . $photo->extension();
            $photo_url = $photo->storeAs("public/images/direksis", $file_name);
        } else {
            $file_name = $direksi->photo;
        }
        $direksis['photo'] = $file_name;

        $direksi->update($direksis);
        return redirect(route('direksi.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Direksi $direksi)
    {
        Storage::delete("public/images/direksis/".$direksi->photo);

        $direksi->delete();
        return redirect(route('direksi.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
