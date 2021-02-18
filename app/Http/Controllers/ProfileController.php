<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\profile;
use App\Http\Controllers\MediaController;

class ProfileController extends Controller
{
    public function __construct(MediaController $mediacontroller){
        $this->MediaController = $mediacontroller;
    }
    public function edit(Request $request)
    {
        $id_profile = profile::whereHas('user', function($q) {
            $q->where('user_id',auth()->user()->id);
        })->pluck('id')->first();
        $auth = auth()->user()->id;

        if(empty($id_profile)){
            $profile = new profile();
            $data = $request->all();
            $data['user_id'] = auth()->user()->id;
            $data['image'] = $request->file('image') ? $this->MediaController->saveImage($request->file('image'),'profile') : '';
            $profile->fill($data)->save();
        }else{
            $profile = profile::find($id_profile);
            $data = $request->all();

            if($request->file('image')){
                $data['image'] = $this->MediaController->saveImage($request->file('image'),'profile');
            }else{
                $data['image'] = $profile->image;
            }
            $profile->fill($data)->update();
        }
       
        $user = user::find($auth);
        $user->name = $request->name;
        $user->save();
        
        return response()->json([
            'message' => 'success'
        ], 200);
    }

    public function getData()
    {
        $profile = profile::with('user')->whereHas('user', function($q) {
            $q->where('user_id',auth()->user()->id);
        })->first();
        if(empty($profile)){
            return response()->json([
                'message' => 'Failed',
            ]);
        }
        return response()->json($profile);
    }
}
