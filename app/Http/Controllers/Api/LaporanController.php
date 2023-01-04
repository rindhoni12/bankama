<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Triwulan;
use App\Models\Gcg;

class LaporanController extends Controller
{
    public function getAllLaporan()
    {
        $triwulan = Triwulan::all();        
        $gcg = Gcg::all();

        return response()->json([
            "id" => 1,
            "judul" => "Laporan Triwulan",
            "content" => [
                "fitur" => $triwulan,
            ],
            "id_2" => 2,
            "judul_2" => "Laporan GCG",
            "content_2" => [
                "fitur_2" => $gcg,
            ]
        ], 200);
    }
}
