<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triwulan;
use Storage;
use Str;

class TriwulanController extends Controller
{
    public function index()
    {
        $triwulans = Triwulan::all();
        return view('be.triwulan.index', compact('triwulans'));
    }

    public function create()
    {
        return view('be.triwulan.create');
    }

    public function store()
    {
        $triwulans = request()->validate([
            'pdfpath' => 'required|mimes:pdf|max:2048',
            'judul' => 'required',
            'tanggal' => 'required',
        ]);
        $slugPdf = Str::slug(request()->judul);

        $pdfName = time() . '-' . $slugPdf;
        $pdfPath = request()->file('pdfpath');
        $file_name = $pdfName . '.' . $pdfPath->extension();
        $pdfPathurl = $pdfPath->storeAs("public/files/triwulans", $file_name);
        $triwulans['pdfpath'] = $file_name;
        $triwulans['judul'] = request()->judul;
        $triwulans['tanggal'] = request()->tanggal;

        Triwulan::create($triwulans);
        return redirect(route('triwulan.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Triwulan $triwulan)
    {
        return view('be.triwulan.edit', compact('triwulan'));
    }

    public function update(Triwulan $triwulan)
    {
        $triwulans = request()->validate([
            'pdfpath' => 'mimes:pdf|max:2048',
            'judul' => 'required',
            'tanggal' => 'required',
        ]);
        $slugPdf = Str::slug(request()->judul);

        if (request()->file('pdfpath')) {
            Storage::delete("public/files/triwulans/".$triwulan->pdfpath);

            $pdfName = time() . '-' . $slugPdf;
            $pdfPath = request()->file('pdfpath');
            $file_name = $pdfName . '.' . $pdfPath->extension();
            $pdfPathurl = $pdfPath->storeAs("public/files/triwulans", $file_name);
        } else {
            $file_name = $triwulan->pdfpath;
        }
        $triwulans['pdfpath'] = $file_name;
        $triwulans['judul'] = request()->judul;
        $triwulans['tanggal'] = request()->tanggal;

        $triwulan->update($triwulans);
        return redirect(route('triwulan.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Triwulan $triwulan)
    {
        Storage::delete("public/files/triwulans/".$triwulan->pdfpath);

        $triwulan->delete();
        return redirect(route('triwulan.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
