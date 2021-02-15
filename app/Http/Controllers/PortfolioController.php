<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MediaController;
use App\portfolio;

class PortfolioController extends Controller
{
    public function __construct(MediaController $MediaController)
    {
        $this->MediaController = $MediaController;
    }
    public function getData()
    {
        $portfolio = portfolio::find($id);
        return response()->json($portfolio);
    }
    public function index()
    {
        
        $portfolio = portfolio::orderBy('id','DESC')->get();
        
        return response()->json($portfolio);
    }
    public function store(Request $request)
    {
        $portfolio = new portfolio();
        $data = $request->all();
        if($request->image){
            $data['image'] = $this->MediaController->saveImage($request->file('image'),'portfolio');
        }
        $portfolio->fill($data)->save();
        return response()->json([
            'message' => 'success'
        ]);
    }
    public function edit(Request $request)
    {
        $portfolio = portfolio::find($id);
        $data = $request->all();
        if($request->file('image')){
            $data['image'] = $this->MediaController->saveImage($request->file('image'), 'portfolio');
            $portfolio->fill($data)->update();
        }
        return response()->json([
            'message' => 'success'
        ]);
    }

}
