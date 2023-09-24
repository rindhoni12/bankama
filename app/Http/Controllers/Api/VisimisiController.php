<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visimisi;

class VisimisiController extends Controller
{
    public function getAllVisimisis()
    {
        $visimisis = Visimisi::first();        
        return response()->json([
            "data" => $visimisis
        ]);
    }
}
