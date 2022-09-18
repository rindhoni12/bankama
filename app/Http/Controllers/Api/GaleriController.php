<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function getAllGaleris()
    {
        $galeris = Galeri::latest()->get();        
        return response()->json([
            "data" => $galeris
        ], 200);
    }
}
