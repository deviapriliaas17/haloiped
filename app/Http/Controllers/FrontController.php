<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage as home;
use App\User;
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
        return view('template/'.$this->template.'/index', compact('content'));
    }
}
