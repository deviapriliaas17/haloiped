<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class AuthController extends Controller
{
    public function register(Request $request){

       
        $validation = $request->validate([
            'name' => 'required|max:75',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed',
        ]);
    

        $validation['password'] = bcrypt($request->password);

        $user = User::create($validation);
        $token = $user->createToken('authToken')->accessToken;

        return response()->json(['user' => $user, 'access_token' => $token]);
    }
    public function login(Request $request){
        
        $validation = $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);

        if(!auth()->attempt($validation)){
            return response()->json([
                'message' => 'Invalid Data'
            ]);
        }
        $token = auth()->user()->createToken('authToken')->accessToken;

        return response()->json([
            'user' => auth()->user(),
            'token' => $token,
        ]);
    }
}
