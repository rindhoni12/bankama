<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ilustrasi;
use Storage;

class IlustrasiController extends Controller
{
    public function index()
    {
        $ilustrasis = Ilustrasi::all();
        return view('be.ilustrasi.index', compact('ilustrasis'));
    }

    public function edit(Ilustrasi $ilustrasi)
    {
        return view('be.ilustrasi.edit', compact('ilustrasi'));
    }

    public function update(Ilustrasi $ilustrasi)
    {
        $ilustrasis = request()->validate([
            'banner' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            'posisi' => 'required',
        ]);

        if (request()->file('banner')) {
            Storage::delete("public/images/ilustrasis/".$ilustrasi->banner);

            $imageName = time() . '-' . request()->posisi;
            $thumbnail = request()->file('banner');
            $file_name = $imageName . '.' . $thumbnail->extension();
            $thumbnailurl = $thumbnail->storeAs("public/images/ilustrasis", $file_name);
        } else {
            $file_name = $ilustrasi->banner;
        }
        $ilustrasis['banner'] = $file_name;

        $ilustrasi->update($ilustrasis);
        return redirect(route('ilustrasi.index'))->with('info', 'Data berhasil diubah!');
    }
}
