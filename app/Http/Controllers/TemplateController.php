<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{template};
use Illuminate\Support\Facades\Crypt;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = template::orderBy('id','DESC')->get();
        return response()->json([
            'message' => 'success',
            'templates' => $templates
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $template = new template();
        $template->fill($data)->save();

        return response()->json([
            'message' => 'success'
        ]);
    }
    public function edit($id, Request $request)
    {
        $data = $request->all();
        $template = template::find(decrypt($id));
        $template->fill($data)->update();

        return response()->json([
            'message' => 'success'
        ]);
    }

    public function getData($id) 
    {
        $template = template::find(decrypt($id));
        return response()->json([
            'message' => 'success',
            'template' => $template
        ]);
    }
}
