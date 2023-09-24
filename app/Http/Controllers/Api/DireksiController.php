<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Direksi;

class DireksiController extends Controller
{
    public function getAllDireksis()
    {
        $direksis = Direksi::all();        
        return response()->json([
            "data" => $direksis
        ]);
    }
}
