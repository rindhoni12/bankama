<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Galeri, Video};

class GaleriController extends Controller
{
    public function getAllGaleris()
    {
        $galeris = Galeri::latest()->get();        
        $video = Video::first();        
        return response()->json([
            "video_url" => $video->url,
            "data" => $galeris
        ], 200);
    }
}
