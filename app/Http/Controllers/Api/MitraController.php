<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function getAllMitras()
    {
        $mitras = Mitra::all();        
        return response()->json([
            "data" => $mitras
        ]);
    }
}
