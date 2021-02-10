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
    public function edit(Request $request)
    {
        $blog = blog::first();
        $data = $request->all();
        if($request->file('image')){
            $data['section_1_image'] = $this->MediaController->saveImage($request->file('image'),'blog');
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
