<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\BlogCategory as category;
class BlogController extends Controller
{
    public function categories()
    {
        $category = category::orderBy('id','DESC')->get();
        return $category->toJson();
    }
    public function blogs()
    {
        $blogs = Blog::orderBy('id','DESC')->get();
        return $blogs->toJson();
    }
    public function CreateBlog(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|file',
            'alt' => 'required',
            'publish' => 'required',
            'status' => 'required',
        ]);

        $image = $this->saveImage($request->file('image'));

        Blog::create([
            'title' => $validate['title'],
            'content' => $validate['content'],
            'alt_image' => $validate['alt'],
            'published_post' => $validate['published_post'],
            'status' => $validate['status']
        ]);
    }

    public function saveImage($image)
    {

    }
}
