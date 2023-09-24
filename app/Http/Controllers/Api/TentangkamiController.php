<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tentangkami;

class TentangkamiController extends Controller
{
    public function getAllTentangkamis()
    {
        $tentangkamis = Tentangkami::first();        
        return response()->json([
            "data" => $tentangkamis
        ]);
    }
}
