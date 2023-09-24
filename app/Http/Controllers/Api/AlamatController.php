<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alamat;

class AlamatController extends Controller
{
    public function getAllAlamats()
    {
        $alamats = Alamat::all();        
        return response()->json([
            "data" => $alamats
        ]);
    }
}
