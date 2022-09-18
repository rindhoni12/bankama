<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tabungan;

class TabunganController extends Controller
{
    public function createTabungan()
    {
        try {
            $tabungans = request()->validate([
                'jenis_produk' => 'required',
                'nama' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required|date',
                'alamat_domisili' => 'required',
                'no_hp' => 'required',
                'nik' => 'required',
                'foto_ktp' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);
    
            $imageName = time() . '-' . request()->nama;
            $foto_ktp = request()->file('foto_ktp');
            $file_name = $imageName . '.' . $foto_ktp->extension();
            $foto_ktp_url = $foto_ktp->storeAs("public/images/tabungans", $file_name);
            $tabungans['foto_ktp'] = $file_name;
    
            Tabungan::create($tabungans);
            return response()->json([
                "success" => true,
                "message" => 'Data berhasil disimpan!'
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => 'Terdapat kesalahan dalam menyimpan data!'
            ], 400);
        }
    }
}
