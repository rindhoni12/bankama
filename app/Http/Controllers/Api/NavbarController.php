<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Navbar, Produklayanan, Jenisproduk};
use Str;

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

    public function getNavbarListAll()
    {
        $array_data = array();
        $jenis_produks = Jenisproduk::select('id','jenis_produk')->get();
        
        // Start of foreach the category of Jenis Produk 
        $ii = 1;
        foreach ($jenis_produks as $data) {
            $array_data_sub = array();

            $slug_jenis_produk = Str::slug($data->jenis_produk);
            $data_navbar_by_jenis_produk = Navbar::select('nama_produk')->where('jenis_produk', $data->jenis_produk)->get();

            $id = $ii;
            $to = "/" . $slug_jenis_produk;
            $name = strtoupper($data->jenis_produk);
            
            // Start to foreach data navbar 
            $i = 0; 
            foreach ($data_navbar_by_jenis_produk as $data_sub) {
                array_push($array_data_sub, array(
                    'to' => "./layanan-kami" . $to . "/" . $i,
                    'judul' => $data_navbar_by_jenis_produk[$i]->nama_produk,
                ));
                $i++;
            }
            // End to foreach data navbar 

            $ii++;

            // To insert all the data into one array 
            array_push($array_data, array(
                'id' => $id,
                'to' => $to,
                'name' => $name,
                'sub' => $array_data_sub,
            ));
        }
        // End of foreach the category of Jenis Produk 

        // To response client with the data 
        return response()->json([
            "navbar_all" => $array_data
        ]);
    }
}
