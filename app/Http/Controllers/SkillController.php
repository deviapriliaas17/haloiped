<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MediaController;
use App\skill;

class SkillController extends Controller
{
    public function __construct(MediaController $MediaController){
        $this->MediaController = $MediaController;
    }

    public function index()
    {
        $skills = skill::all();
        return response()->json($skills);
    }
    public function store(Request $request){
        $skill = new skill();
        $data = $request->all();
        $data['image'] = $this->MediaController->saveImage($request->image,'skill');
        $skill->fill($data)->save();

        return response()->json([
            'message' => 'success'
        ], 200);
    }
    public function getData($id){
        $skill = skill::find($id);
        return response()->json([
            'message' => 'success',
            'skill' => $skill
        ]);
    }
    public function update(Request $request, $id){
        $skill = skill::find($id);
        $data = $request->all();
        $data['image'] = $this->MediaController->saveImage($request->image,'skill');
        $skill->fill($data)->save();

        return response()->json([
            'message' => 'Berhasil'
        ]);
    }
}
