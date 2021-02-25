<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\focus;

class FocusController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $focus = new focus();
        $focus->fill($data)->save();
        
        return response()->json([
            'message' => 'success'
        ], 200);
    }
    public function index()
    {
        $focuses = focus::orderBy('id','DESC')->get();
        return response()->json([
            'focuses' => $focuses
        ], 200);
    }
    public function getData($id)
    {
 
        $focuses = focus::find($id);    
        return response()->json([
            'focuses' => $focuses
        ]);
    }

    public function edit(Request $request, $id)
    {
        $focus = focus::find($id);
        $data = $request->all();

        $focus->fill($data)->update();

        return response()->json([
            'message' => 'success'
        ], 200);

    }
    
}
