<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage as Home;
use App\Http\Controllers\MediaController;

class HomePageController extends Controller
{
    public function __construct(MediaController $MediaController){
        $this->MediaController = $MediaController;
    }
    public function index()
    {
        $home = Home::first();
        if($home == null){
            return response()->json([
                'message' => null
            ], 204);
        }
        else{
            return response()->json($home,200);
        }
    }
    public function edit(Request $request)
    {
        $home = Home::first();
        $data= $request->all();

        if($request->file('section_1_image') != null){
            $data['section_1_image'] = $this->MediaController->saveImage($request->file('section_1_image'),'Home');
        }else{
            $data['section_1_image'] = $home->section_1_image;
        }
        if($request->file('section_2_image') != null){
            $data['section_2_image'] = $this->MediaController->saveImage($request->file('section_2_image'),'Home');
        }else{
            $data['section_2_image'] = $home->section_2_image;
        }
        if($request->file('section_5_image') != null){
            $data['section_5_image'] = $this->MediaController->saveImage($request->file('section_5_image'),'Home');
        }else{
            $data['section_5_image'] = $home->section_5_image;
        }
        
        if(!$home){
            $home = new Home();
            $home->fill($data)->save();
        }
        else{
            $home->fill($data)->update();
        }
        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
