<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function edit(Video $video)
    {
        return view('be.video.edit', compact('video'));
    }

    public function update(Video $video)
    {
        $videos = request()->validate([
            'url' => 'required',
        ]);

        $video->update($videos);
        return redirect(route('galeri.index'))->with('info', 'Link URL berhasil diubah!');
    }
}
