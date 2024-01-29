<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Navbar, Produklayanan, Jenisproduk};

class NavbarController extends Controller
{
    public function getJenisProdukNavbars()
    {
        $jenis_produks = Jenisproduk::select('id','jenis_produk')->get();

        return response()->json([
            "jenis_produk" => $jenis_produks
        ]);
    }

    public function getNavbarList(Request $request)
    {
        $list_by_jenis_produk = $request->query('jenis');
        
        $data_navbar_by_jenis_produk = Navbar::select('id','nama_produk','slug')->where('jenis_produk', $list_by_jenis_produk)->get();

        return response()->json([
            "navbar_list" => $data_navbar_by_jenis_produk
        ]);
    }

    public function getProdukLayananList(Request $request)
    {
        $list_by_kategori_slug = $request->query('slug');
        
        $data_produklayanan_by_kategori_slug = Produklayanan::where('jenis_tabungan', $list_by_kategori_slug)->get();

        return response()->json([
            "produklayanan_list" => $data_produklayanan_by_kategori_slug
        ]);
    }

    public function getDropdownTabunganList()
    {
        $tabungan_list = Produklayanan::where('jenis_produk', 'Penyimpanan Dana')->select('id','nama_produklayanan')->get();

        return response()->json([
            "tabungan_list" => $tabungan_list
        ]);
    }

    public function getDropdownPembiayaanList()
    {
        $pembiayaan_list = Produklayanan::where('jenis_produk', 'Penyaluran Dana')->select('id','nama_produklayanan')->get();

        return response()->json([
            "pembiayaan_list" => $pembiayaan_list
        ]);
    }
}
