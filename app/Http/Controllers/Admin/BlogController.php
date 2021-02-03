<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blog;
use App\blogcategory as category;
use Validator;
use Str;
use rand;
use App\media;

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
        
        $image = $this->saveImage($request->file('image'));
        blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'published_at' => now(),
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'slug' => str::slug($request->title,"-").rand(0,10000)
        ]);
        return 'true';
    }
    public function getDataBlog($id)
    {
        $blog = blog::find($id);
        return response()->json($blog);
    }

    public function CreateCategory(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required','string','min:3','max:20']
        ]);

        category::create([
            'name' => $validate['name']
        ]);

        return 'true';
    }

    public function saveImage($image)
    {
        $getExtension = $image->getClientOriginalExtension();
        $name = "blog-".date("YmdHis").'.'.$getExtension;
        $image->storeAs('uploads',$name,'public_folder');

        $media  = new media();
        $media->image = $name;
        $media->alt = 'halo-iped';
        $media->description = 'this is description for image';
        $media->save();
        return $name;
    }
}
