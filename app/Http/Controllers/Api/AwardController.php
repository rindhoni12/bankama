<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Award;

class AwardController extends Controller
{
    public function getAllAwards()
    {
        $awards = Award::all();        
        return response()->json([
            "data" => $awards
        ]);
    }
}
