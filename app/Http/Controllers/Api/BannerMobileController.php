<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerMobile;

class BannerMobileController extends Controller
{
    public function getAllBannersMobile()
    {
        $banners = BannerMobile::all();        
        return response()->json([
            "data" => $banners
        ]);
    }
}
