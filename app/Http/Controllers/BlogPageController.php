<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPage as blog;
use App\Http\Controllers\MediaController;

class BlogPageController extends Controller
{
    public function __construct(MediaController $MediaController)
    {
        $this->MediaController = $MediaController;
    }
    public function getData(){
        $blog = blog::first();
        return response()->json($blog);
    }
    public function edit(Request $request)
    {
        $blog = blog::first();
        $data = $request->all();
        if($request->file('section_1_image') != null){
            $data['section_1_image'] = $this->MediaController->saveImage($request->section_1_image,'blog');
        }else{
            $data['section_1_image'] = $blog->section_1_image;
        }

        if($blog == null){
            $blog = new blog();
            $blog->fill($data)->save();
        }
        else{
           $blog->fill($data)->update(); 
        }

        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
