<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ilustrasi;

class IlustrasiController extends Controller
{
    public function getAllIlustrasis()
    {
        $ilustrasis = Ilustrasi::all();        
        return response()->json([
            "data" => $ilustrasis
        ]);
    }
}
