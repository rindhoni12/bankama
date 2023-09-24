<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktur;
use Storage;
use Str;

class StrukturController extends Controller
{
    public function index()
    {
        $strukturs = Struktur::all();
        return view('be.tentang-kami.struktur-organisasi.index', compact('strukturs'));
    }

    public function edit(Struktur $struktur)
    {
        return view('be.tentang-kami.struktur-organisasi.edit', compact('struktur'));
    }

    public function update(Struktur $struktur)
    {
        $strukturs = request()->validate([
            'pdfpath' => 'mimes:pdf|max:2048',
            'judul' => 'required',
        ]);
        $slugPdf = Str::slug(request()->judul);

        if (request()->file('pdfpath')) {
            Storage::delete("public/files/strukturs/".$struktur->pdfpath);

            $pdfName = time() . '-' . $slugPdf;
            $pdfPath = request()->file('pdfpath');
            $file_name = $pdfName . '.' . $pdfPath->extension();
            $pdfPathurl = $pdfPath->storeAs("public/files/strukturs", $file_name);
        } else {
            $file_name = $struktur->pdfpath;
        }
        $strukturs['pdfpath'] = $file_name;
        // $strukturs['judul'] = request()->judul;

        $struktur->update($strukturs);
        return redirect(route('struktur.index'))->with('info', 'Data berhasil diubah!');
    }
}
