<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function createPengaduan()
    {
        try {
            $pengaduans = request()->validate([
                'nama' => 'required',
                'no_hp' => 'required',
                'pesan' => 'required',
            ]);
            Pengaduan::create($pengaduans);
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
