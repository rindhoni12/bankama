<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Galeri, Video};
use Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->get(); 
        $videos = Video::all();
        return view('be.galeri.index', compact('galeris', 'videos'));
    }

    public function create()
    {
        return view('be.galeri.create');
    }

    public function store()
    {
        $galeris = request()->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $photo_image = request()->file('photo');
        $file_name = time() . '-' . $photo_image->getClientOriginalName();
        $photo_image_url = $photo_image->storeAs("public/images/galeris", $file_name);
        $galeris['photo'] = $file_name;

        Galeri::create($galeris);
        return redirect(route('galeri.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function destroy(Galeri $galeri)
    {
        Storage::delete("public/images/galeris/".$galeri->photo);

        $galeri->delete();
        return redirect(route('galeri.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
