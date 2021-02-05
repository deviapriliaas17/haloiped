<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blog;
use App\blogcategory as category;
use Validator;
use Str;
use rand;
use Auth;
use App\media;

class BlogController extends Controller
{
    public function categories()
    {
        $category = category::all();
        return $category->toJson();
    }
    public function blogs()
    {
        // $blogs = blog::orderBy('id','DESC')->get();
        $blogs = blog::with('category')->orderBy('id','DESC')->get();
        return response()->json($blogs,200);
    }
    public function EditCategory(Request $request, $id)
    {
        $category  = category::find($id);
        $validate = $request->validate([
            'name' => ['required']
        ]);

        $category->update([
            'name' => $validate['name']
        ]);

        return response()->json([
            'message' => 'success'
        ], 200);
    }
    public function DeleteCategory($id)
    {
        $category = category::find($id);
        $category->delete();

        return response()->json([
            'message' => 'success'
        ], 200);
    }
    public function CreateBlog(Request $request)
    {
        
        $image = $this->saveImage($request->file('image'));
        blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'published_at' => $request->publish,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->first->id,
            'slug' => str::slug($request->title,"-").rand(0,10000)
        ]);

        return response()->json([
            'message' => 'success'
        ], 200);
    }
    public function EditBlog(Request $request, $id)
    {
        $blog = blog::find($id);

        if($request->image)
        {
            $image = $this->saveImage($request->file);
            $blog->update([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $image,
                'published_at' => now(),
                'category_id' => $request->category_id,
                'user_id' => $request->user_id,
                'slug' => str::slug($request->title,"-").rand(0,10000) 
            ]);
        }
        else{
            $blog->update([
                'title' => $request->title,
                'content' => $request->content,
                'published_at' => now(),
                'category_id' => $request->category_id,
                'user_id' => $request->user_id,
                'slug' => str::slug($request->title,"-").rand(0,10000) 
            ]);
        }

        return response()->json([
            'message' => 'success'
        ], 200);
    }
    public function getDataBlog($id)
    {
        $blog = blog::with('category')->find($id);
        $media = media::where('image','like',$blog->image)->first();
        return response()->json([
            'blog' => $blog,
            'media' => $media
        ], 200);
    }
    public function getDataCategory($id)
    {
        $category = category::find($id);
        return response()->json($category,200);
    }
    public function CreateCategory(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required','string','min:3','max:20']
        ]);
        category::create([
            'name' => $validate['name']
        ]);

        return response()->json([
            'message' => 'success'
        ], 200);
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
