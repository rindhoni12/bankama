<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bunga;

class BungaController extends Controller
{
    public function getAllBungas()
    {
        $bungas = Bunga::all();        
        return response()->json([
            "data" => $bungas
        ]);
    }
}
