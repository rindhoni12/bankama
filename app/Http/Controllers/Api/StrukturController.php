<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Struktur;

class StrukturController extends Controller
{
    public function getAllStrukturs()
    {
        $strukturs = Struktur::first();        
        return response()->json([
            "data" => $strukturs
        ]);
    }
}
