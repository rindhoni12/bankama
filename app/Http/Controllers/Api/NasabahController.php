<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nasabah;

class NasabahController extends Controller
{
    public function createNasabah()
    {
        

        try {
            $nasabahs = request()->validate([
                'foto_ktp' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'nama' => 'required',
                'nik' => 'required',
                'tgl_lahir' => 'required|date',
                'alamat' => 'required',
                'no_hp' => 'required',
                'jenis_produk' => 'required',
            ]);
    
            $imageName = time() . '-' . request()->nama;
            $foto_ktp = request()->file('foto_ktp');
            $file_name = $imageName . '.' . $foto_ktp->extension();
            $foto_ktp_url = $foto_ktp->storeAs("public/images/nasabahs", $file_name);
            $nasabahs['foto_ktp'] = $file_name;
    
            Nasabah::create($nasabahs);
            return response()->json([
                "success" => true,
                "message" => 'Data berhasil disimpan!'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => 'Terdapat kesalahan dalam menyimpan data!'
            ]);
        }
        
    }
}
