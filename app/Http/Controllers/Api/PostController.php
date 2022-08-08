<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function getAllPost()
    {
        $blogs = Blog::latest()->get();
        return PostResource::collection($blogs);
    }
}
