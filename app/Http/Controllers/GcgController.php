<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gcg;
use Storage;
use Str;

class GcgController extends Controller
{
    public function index()
    {
        $gcgs = Gcg::all();
        return view('be.gcg.index', compact('gcgs'));
    }

    public function create()
    {
        return view('be.gcg.create');
    }

    public function store()
    {
        $gcgs = request()->validate([
            'pdfpath' => 'required|mimes:pdf|max:2048',
            'judul' => 'required',
            'tanggal' => 'required',
        ]);
        $slugPdf = Str::slug(request()->judul);

        $pdfName = time() . '-' . $slugPdf;
        $pdfPath = request()->file('pdfpath');
        $file_name = $pdfName . '.' . $pdfPath->extension();
        $pdfPathurl = $pdfPath->storeAs("public/files/gcgs", $file_name);
        $gcgs['pdfpath'] = $file_name;
        $gcgs['judul'] = request()->judul;
        $gcgs['tanggal'] = request()->tanggal;

        Gcg::create($gcgs);
        return redirect(route('gcg.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Gcg $gcg)
    {
        return view('be.gcg.edit', compact('gcg'));
    }

    public function update(Gcg $gcg)
    {
        $gcgs = request()->validate([
            'pdfpath' => 'mimes:pdf|max:2048',
            'judul' => 'required',
            'tanggal' => 'required',
        ]);
        $slugPdf = Str::slug(request()->judul);

        if (request()->file('pdfpath')) {
            Storage::delete("public/files/gcgs/".$gcg->pdfpath);

            $pdfName = time() . '-' . $slugPdf;
            $pdfPath = request()->file('pdfpath');
            $file_name = $pdfName . '.' . $pdfPath->extension();
            $pdfPathurl = $pdfPath->storeAs("public/files/gcgs", $file_name);
        } else {
            $file_name = $gcg->pdfpath;
        }
        $gcgs['pdfpath'] = $file_name;
        $gcgs['judul'] = request()->judul;
        $gcgs['tanggal'] = request()->tanggal;

        $gcg->update($gcgs);
        return redirect(route('gcg.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Gcg $gcg)
    {
        Storage::delete("public/files/gcgs/".$gcg->pdfpath);

        $gcg->delete();
        return redirect(route('gcg.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
