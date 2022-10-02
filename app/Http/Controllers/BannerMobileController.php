<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerMobile;
use Storage;

class BannerMobileController extends Controller
{
    public function index()
    {
        $banners = BannerMobile::all();
        return view('be.banner-mobile.index', compact('banners'));
    }

    public function edit(BannerMobile $banner)
    {
        return view('be.banner-mobile.edit', compact('banner'));
    }

    public function update(BannerMobile $banner)
    {
        $banners = request()->validate([
            'banner' => 'image|mimes:jpg,jpeg,png|max:2048',
            'no_slide' => 'required',
        ]);

        if (request()->file('banner')) {
            Storage::delete("public/images/banners-mobile/".$banner->banner);

            $imageName = time() . '-' . request()->no_slide;
            $thumbnail = request()->file('banner');
            $file_name = $imageName . '.' . $thumbnail->extension();
            $thumbnailurl = $thumbnail->storeAs("public/images/banners-mobile", $file_name);
        } else {
            $file_name = $banner->banner;
        }
        $banners['banner'] = $file_name;

        $banner->update($banners);
        return redirect(route('banner-mobile.index'))->with('info', 'Data berhasil diubah!');
    }
}
