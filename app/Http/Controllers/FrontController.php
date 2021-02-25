<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage as home;
use App\User;
use App\skill;
use Auth;

class FrontController extends Controller
{
    public function __construct()
    {
        $getAdmin = user::first();
        $template = $getAdmin->template;

        $this->template = $template;

    }
    public function home()
    {
        $content = home::find(1);
        $skills = skill::orderBy('id','DESC')->limit(3)->get();
        // $focuses= focus::whereBetween('position',['1','3'])->get();
        // $focus = json_decode($focuses, true);
        // if($focuses->count() == 1){
        //     $focus = $focus[0];
        //     return response()->json([
        //         'message' => 'success',
        //         'focus_1' => $focus_1
        //     ]);
        // }
        // else if($focuses->count() == 2){
        //     $focus_1 = $focus[0];
        //     $focus_2 = $focus[1];
        //     return response()->json([
        //         'message' => 'success',
        //         'focus_1' => $focus_1,
        //         'focus_2' => $focus_2
        //     ]);
        // }
        // else{
        //     $focus_1 = $focus[0];
        //     $focus_2 = $focus[1];
        //     $focus_3 = $focus[2];
        //     return response()->json([
        //         'message' => 'success',
        //         'focus_1' => $focus_1,
        //         'focus_2' => $focus_2,
        //         'focus_3' => $focus_3
        //     ]);
        // }
        return view('template/'.$this->template.'/index', compact('content','skills'));
    }
}
