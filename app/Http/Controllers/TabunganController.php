<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;

class TabunganController extends Controller
{
    public function ibwadiah()
    {
        $ibwadiahs = Tabungan::where('jenis_produk', 'tabungan_ib_wadiah')->get();
        return view('be.tabungan.ibwadiah', compact('ibwadiahs'));
    }

    public function ibhaji()
    {
        $ibhajis = Tabungan::where('jenis_produk', 'tabungan_ib_haji')->get();
        return view('be.tabungan.ibhaji', compact('ibhajis'));
    }

    public function ibpendidikan()
    {
        $ibpendidikans = Tabungan::where('jenis_produk', 'tabungan_ib_pendidikan')->get();
        return view('be.tabungan.ibpendidikan', compact('ibpendidikans'));
    }

    public function ibqurban()
    {
        $ibqurbans = Tabungan::where('jenis_produk', 'tabungan_ib_qurban')->get();
        return view('be.tabungan.ibqurban', compact('ibqurbans'));
    }

    public function ibsimuda()
    {
        $ibsimudas = Tabungan::where('jenis_produk', 'tabungan_ib_si_muda')->get();
        return view('be.tabungan.ibsimuda', compact('ibsimudas'));
    }

    public function show(Tabungan $tabungan)
    {
        return view('be.tabungan.show', compact('tabungan'));
    }
}
