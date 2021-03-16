<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobtype as type;

class JobTypeController extends Controller
{
    public function index()
    {
        $types = type::orderBy('position','DESC')->get();
        return response()->json([
            'types' => $types
        ]);
    }
    public function getData($id)
    {
        $type = type::find($id);
        return response()->json([
            'type' => $type
        ]);

    }
    public function store(Request $request)
    {
        $data = $request->all();
        $type = new type();
        $type->fill($data)->save();

        return response()->json([
            'message' => 'success'
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $type = type::find($id);
        $type->fill($data)->update();

        return response()->json([
            'message' => 'success'
        ], 200);
    }

    public function destroy($id)
    {
        $type = type::find($id);
        $type->delete();

        return response()->json([
            'message' => 'success'
        ], 200);
    }

}
