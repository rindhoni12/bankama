<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bungapembiayaan;

class BungapembiayaanController extends Controller
{
    public function getAllBungaPembiayaans()
    {
        $bungapembiayaans = Bungapembiayaan::all();        
        return response()->json([
            "data" => $bungapembiayaans
        ]);
    }
}
