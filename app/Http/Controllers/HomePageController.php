<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage as Home;

class HomePageController extends Controller
{
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
        if(!$home){
            $home = new Home();
            $home->fill($request->all())->save();
        }
        else{
            $home->fill($request->all())->update();
        }
        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
