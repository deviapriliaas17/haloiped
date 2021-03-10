<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage as home;
use App\{User, skill, focus, BlogPage, AboutPage, blog};
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
        $focuses= focus::whereBetween('position',['1','3'])->get();
        $focus = json_decode($focuses, true);
        $blogs = blog::all();
        return view('template/'.$this->template.'/index', compact('content','skills','focus','blogs'));
    }
    public function about()
    {
        $content = AboutPage::find(1);

        return view('template/'.$this->template.'/about', compact('content'));
    }
}
