<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Storage;
use Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('be.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('be.blog.create');
    }

    public function store()
    {
        $blogs = request()->validate([
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        $slug = Str::slug(request()->judul);

        $imageName = time() . '-' . $slug;
        $thumbnail = request()->file('thumbnail');
        $file_name = $imageName . '.' . $thumbnail->extension();
        $thumbnailurl = $thumbnail->storeAs("public/images/blogs", $file_name);
        $blogs['thumbnail'] = $file_name;
        $blogs['slug'] = $slug;

        Blog::create($blogs);
        return redirect(route('blog.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function show(Blog $blog)
    {
        return view('be.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('be.blog.edit', compact('blog'));
    }

    public function update(Blog $blog)
    {
        $blogs = request()->validate([
            'thumbnail' => 'image|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        $slug = Str::slug(request()->judul);

        if (request()->file('thumbnail')) {
            Storage::delete("public/images/blogs/".$blog->thumbnail);

            $imageName = time() . '-' . $slug;
            $thumbnail = request()->file('thumbnail');
            $file_name = $imageName . '.' . $thumbnail->extension();
            $thumbnailurl = $thumbnail->storeAs("public/images/blogs", $file_name);
        } else {
            $file_name = $blog->thumbnail;
        }
        $blogs['thumbnail'] = $file_name;
        $blogs['slug'] = $slug;

        $blog->update($blogs);
        return redirect(route('blog.index'))->with('info', 'Data berhasil diubah!');
    }

    public function destroy(Blog $blog)
    {
        Storage::delete("public/images/blogs/".$blog->thumbnail);

        $blog->delete();
        return redirect(route('blog.index'))->with('danger', 'Data berhasil dihapus!');
    }
}
