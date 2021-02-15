<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MediaController;
use App\ContactPage as contact;

class ContactPageController extends Controller
{
    public function __construct(MediaController $MediaController){
        $this->MediaController = $MediaController;
    }

    public function getData()
    {
        $contact = contact::find(1);
        return response()->json($contact);
    }
    public function edit(Request $request)
    {
        $data = $request->all();
        $contact = contact::first();

        if($contact == null){

            $contact = new contact();
            if($request->file('section_1_image')){
                $image = $this->MediaController->saveImage($request->file('section_1_image'),'contact');
                $contact = new contact();
                $data['section_1_image'] = $image;
                $contact->fill($data)->save();
            }else{
               $contact->fill($data)->save(); 
            }
        }else{
            if($request->file('section_1_image')){
                $image = $this->MediaController->saveImage($request->file('section_1_image'),'contact');
                $data['section_1_image'] = $image;
                $contact->fill($data)->update();
            }else{
               $contact->fill($data)->update(); 
            }
        }
        return response()->json([
            'message' => 'success'
        ]);
    }
}
