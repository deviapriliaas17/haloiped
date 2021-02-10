<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MediaController;
use App\PortfolioPage as portfolio;

class PortfolioPageController extends Controller
{
    public function __construct(MediaController $MediaController){
        $this->MediaController = $MediaController;
    }

    public function edit(Request $request)
    {
        $data = $request->all();
        $portfolio = portfolio::first();

        if($portfolio == null){

            $portfolio = new portfolio();
            if($request->file('image')){
                $image = $this->MediaController->saveImage($request->image,'portfolio');
                $portfolio = new portfolio();
                $data['section_1_image'] = $image;
                $portfolio->fill($data)->save();
            }else{
               $portfolio->fill($data)->save(); 
            }
        }else{
            if($request->file('image')){
                $image = $this->MediaController->saveImage($request->image,'portfolio');
                $data['section_1_image'] = $image;
                $portfolio->fill($data)->update();
            }else{
               $portfolio->fill($data)->update(); 
            }
        }
        return response()->json([
            'message' => 'success'
        ]);
    }
}
