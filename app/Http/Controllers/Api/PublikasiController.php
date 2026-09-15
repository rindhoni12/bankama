<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laporan;


class PublikasiController extends Controller
{
    public function getAllPublikasi()
    {
        $publikasis = Laporan::orderBy('tahun_laporan', 'desc')->get();

        $grouped = $publikasis->groupBy('kategori_laporan')->map(function ($items) {
            return $items->map(function ($item) {
                return [
                    'id'            => $item->id,
                    'judul_laporan' => $item->judul_laporan,
                    'tahun_laporan' => $item->tahun_laporan,
                    'pdf_url'       => $item->pdfpath,
                ];
            })->values();
        });

        return response()->json([
            'success' => true,
            'data' => $grouped,
        ], 200);
    }
}
