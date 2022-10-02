<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembiayaan;

class PembiayaanController extends Controller
{
    public function ibmurabahah()
    {
        $ibmurabahahs = Pembiayaan::where('jenis_produk', 'pembiayaan_ib_murabahah')->get();
        return view('be.pembiayaan.ibmurabahah', compact('ibmurabahahs'));
    }

    public function ibmusyarakah()
    {
        $ibmusyarakahs = Pembiayaan::where('jenis_produk', 'pembiayaan_ib_musyarakah')->get();
        return view('be.pembiayaan.ibmusyarakah', compact('ibmusyarakahs'));
    }

    public function ibmultijasa()
    {
        $ibmultijasas = Pembiayaan::where('jenis_produk', 'pembiayaan_ib_multijasa')->get();
        return view('be.pembiayaan.ibmultijasa', compact('ibmultijasas'));
    }

    public function ibgadaiemas()
    {
        $ibgadaiemas = Pembiayaan::where('jenis_produk', 'ib_gadai_emas')->get();
        return view('be.pembiayaan.ibgadaiemas', compact('ibgadaiemas'));
    }

    public function show(Pembiayaan $pembiayaan)
    {
        return view('be.pembiayaan.show', compact('pembiayaan'));
    }
}
