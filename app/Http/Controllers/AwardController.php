<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;
use Storage;

class AwardController extends Controller
{
    public function index()
    {
        $awards = Award::latest()->get();
        return view('be.tentang-kami.award.index', compact('awards'));
    }

    public function create()
    {
        return view('be.tentang-kami.award.create');
    }

    public function store()
    {
        $awards = request()->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $photo_image = request()->file('photo');
        $file_name = time() . '-' . $photo_image->getClientOriginalName();
        $photo_image_url = $photo_image->storeAs("public/images/awards", $file_name);
        $awards['photo'] = $file_name;

        Award::create($awards);
        return redirect(route('award.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function destroy(Award $award)
    {
        Storage::delete("public/images/awards/".$award->photo);

        $award->delete();
        return redirect(route('award.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
