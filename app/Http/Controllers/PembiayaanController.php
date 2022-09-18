<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembiayaan;

class PembiayaanController extends Controller
{
    public function murabahah()
    {
        $murabahahs = Pembiayaan::where('jenis_produk', 'iB Murabahah')->get();
        return view('be.pembiayaan.murabahah', compact('murabahahs'));
    }

    public function musyarakah()
    {
        $musyarakahs = Pembiayaan::where('jenis_produk', 'iB Musyarakah')->get();
        return view('be.pembiayaan.musyarakah', compact('musyarakahs'));
    }

    public function multijasa()
    {
        $multijasas = Pembiayaan::where('jenis_produk', 'iB Multijasa')->get();
        return view('be.pembiayaan.multijasa', compact('multijasas'));
    }

    public function gadaiemas()
    {
        $gadaiemas = Pembiayaan::where('jenis_produk', 'iB Gadai Emas')->get();
        return view('be.pembiayaan.gadaiemas', compact('gadaiemas'));
    }

    public function show(Pembiayaan $pembiayaan)
    {
        return view('be.pembiayaan.show', compact('pembiayaan'));
    }
}
