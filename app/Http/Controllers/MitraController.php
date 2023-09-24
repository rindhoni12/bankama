<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;
use Storage;

class MitraController extends Controller
{
    public function index()
    {
        $mitras = Mitra::get(); 
        return view('be.mitra.index', compact('mitras'));
    }

    public function create()
    {
        return view('be.mitra.create');
    }

    public function store()
    {
        $mitras = request()->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $photo_image = request()->file('photo');
        $file_name = time() . '-' . $photo_image->getClientOriginalName();
        $photo_image_url = $photo_image->storeAs("public/images/mitras", $file_name);
        $mitras['photo'] = $file_name;

        Mitra::create($mitras);
        return redirect(route('mitra.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function destroy(Mitra $mitra)
    {
        Storage::delete("public/images/mitras/".$mitra->photo);

        $mitra->delete();
        return redirect(route('mitra.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
