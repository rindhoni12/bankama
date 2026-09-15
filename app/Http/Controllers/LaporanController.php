<?php

namespace App\Http\Controllers;

use App\Models\{Laporan, KategoriLaporan};
use Illuminate\Http\Request;
use Storage;
use Str;

class LaporanController extends Controller
{
    // public function index()
    // {
    //     //
    // }

    public function spesific_index(Request $request)
    {
        $kategori_laporan = $request->query('kategori_laporan');
        $laporans = Laporan::where('kategori_laporan', $kategori_laporan)->get();
        return view('be.publikasi.spesificindex', compact('laporans'));
    }

    public function create()
    {
        $kategori_publikasis = KategoriLaporan::select('kategori_laporan')->get();
        return view('be.publikasi.create', compact('kategori_publikasis'));
    }

    public function store()
    {
        $publikasis = request()->validate([
            'pdfpath' => 'required|mimes:pdf|max:2048',
            'judul_laporan' => 'required',
            'tahun_laporan' => 'required',
            'kategori_laporan' => 'required',
        ]);
        $slugPdf = Str::slug(request()->judul_laporan);

        $pdfName = time() . '-' . $slugPdf;
        $pdfPath = request()->file('pdfpath');
        $file_name = $pdfName . '.' . $pdfPath->extension();
        $pdfPathurl = $pdfPath->storeAs("public/files/publikasis", $file_name);
        $publikasis['pdfpath'] = $file_name;
        $publikasis['judul_laporan'] = request()->judul_laporan;
        $publikasis['tahun_laporan'] = request()->tahun_laporan;
        $publikasis['kategori_laporan'] = request()->kategori_laporan;

        Laporan::create($publikasis);
        return redirect()->route('publikasi.spesific_index', ['kategori_laporan' => request()->kategori_laporan])->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Laporan $laporan)
    {
        $kategori_publikasis = KategoriLaporan::select('kategori_laporan')->get();
        return view('be.publikasi.edit', compact('laporan', 'kategori_publikasis'));
    }

    public function update(Laporan $laporan)
    {
        $publikasis = request()->validate([
            'pdfpath' => 'mimes:pdf|max:2048',
            'judul_laporan' => 'required',
            'tahun_laporan' => 'required',
            'kategori_laporan' => 'required',
        ]);
        $slugPdf = Str::slug(request()->judul_laporan);

        if (request()->file('pdfpath')) {
            Storage::delete("public/files/publikasis/".$laporan->pdfpath);

            $pdfName = time() . '-' . $slugPdf;
            $pdfPath = request()->file('pdfpath');
            $file_name = $pdfName . '.' . $pdfPath->extension();
            $pdfPathurl = $pdfPath->storeAs("public/files/publikasis", $file_name);
        } else {
            $file_name = $laporan->pdfpath;
        }
        $publikasis['pdfpath'] = $file_name;
        $publikasis['judul_laporan'] = request()->judul_laporan;
        $publikasis['tahun_laporan'] = request()->tahun_laporan;
        $publikasis['kategori_laporan'] = request()->kategori_laporan;

        $laporan->update($publikasis);
        return redirect()->route('publikasi.spesific_index', ['kategori_laporan' => request()->kategori_laporan])->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Laporan $laporan)
    {
        Storage::delete("public/files/publikasis/".$laporan->pdfpath);

        $laporan->delete();
        return redirect()->back()->with('danger', 'Data berhasil dihapus!');
    }
}
