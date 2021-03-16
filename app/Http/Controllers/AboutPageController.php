<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutPage as about;
use App\Http\Controllers\MediaController;

class AboutPageController extends Controller
{
    public function __construct(MediaController $MediaController)
    {
        $this->MediaController = $MediaController;
    }
    public function index()
    {
        $about = about::first();
        return response()->json($about,200);
    }
    public function edit(Request $request)
    {
        $about = about::first();
        $data = $request->all();
        if($request->file('section_1_image')){
            $data['section_1_image'] = $this->MediaController->saveImage($request->file('section_1_image'),'about');
        }else{
            $data['section_1_image']  = $about->section_1_image;
        }
        if($request->file('section_1_icon_1')){
            $data['section_2_icon_1'] = $this->MediaController->saveImage($request->file('section_2_icon_1'),'about');
        }else{
            $data['section_2_icon_1']  = $about->section_2_icon_1;
        }
        if($request->file('section_2_icon_2')){
            $data['section_2_icon_2'] =$this->MediaController->saveImage($request->file('section_2_icon_2'),'about');
        }else{
            $data['section_2_icon_2']  = $about->section_2_icon_2;
        }
        if($request->file('section_1_icon_3')){
            $data['section_2_icon_3'] = $this->MediaController->saveImage($request->file('section_2_icon_3'),'about');
        }else{
            $data['section_2_icon_3']  = $about->section_2_icon_3;
        }
        if($request->file('section_3_image')){
            $data['section_3_image'] = $this->MediaController->saveImage($request->file('section_3_image'),'about');
        }else{
            $data['section_3_image']  = $about->section_3_image;
        }
    
        if($about == null)
        {
            $about = new about();
            $about->fill($data)->save();
        }
        else{
            $about->fill($data)->update();
        }
        return response()->json([
            'message' => 'Success'
        ], 200);
    }
}
