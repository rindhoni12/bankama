<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('be.banner.index', compact('banners'));
    }

    public function edit(Banner $banner)
    {
        return view('be.banner.edit', compact('banner'));
    }

    public function update(Banner $banner)
    {
        $banners = request()->validate([
            'banner' => 'image|mimes:jpg,jpeg,png|max:2048',
            'no_slide' => 'required',
        ]);

        if (request()->file('banner')) {
            Storage::delete("public/images/banners/".request()->no_slide);

            $imageName = request()->no_slide;
            $thumbnail = request()->file('banner');
            $file_name = $imageName . '.' . $thumbnail->extension();
            $thumbnailurl = $thumbnail->storeAs("public/images/banners", $file_name);
        } else {
            $file_name = $banner->banner;
        }
        $banners['banner'] = $file_name;

        $banner->update($banners);
        return redirect(route('banner.index'))->with('info', 'Data berhasil diubah!');
    }
}
