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
    public function edit(Request $request)
    {
        $about = about::first();
        $image_1 = $this->MediaController->saveImage($request->file('image_1'),'about');
        $icon_1 = $this->MediaController->saveImage($request->file('icon_1'),'about');
        $icon_2 = $this->MediaController->saveImage($request->file('icon_2'),'about');
        $icon_3 = $this->MediaController->saveImage($request->file('icon_3'),'about');
        $image_3 = $this->MediaController->saveImage($request->file('image_3'),'about');
        if($about == null)
        {
            $about = new about();
            $data = $request->all();
            if($request->section_1_image){
                $data['section_1_image'] = $image_1;
            }
            if($request->section_1_icon_1){
                $data['section_2_icon_1'] = $icon_1;
            }
            if($request->section_1_icon_2){
                $data['section_2_icon_2'] = $icon_2;
            }
            if($request->section_1_icon_2){
                $data['section_2_icon_3'] = $icon_2;
            }
            if($request->section_1_icon_2){
                $data['section_3_image'] = $image_3;
            }
            $about->fill($data)->save();
        }
        else{
            if($request->file){
                $about->fill($data)->update;
            }
        }
        return response()->json([
            'message' => 'Success'
        ], 200);
    }
}
