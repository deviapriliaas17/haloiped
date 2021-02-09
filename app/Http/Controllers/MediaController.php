<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\media;

class MediaController extends Controller
{
    public function saveImage($image, $from)
    {
        if($image != null){
            $getExtension = $image->getClientOriginalExtension();
            $name = "image-".$from."-".date("YmdHis").'.'.$getExtension;
            $image->storeAs('uploads',$name,'public_folder');

            $media  = new media();
            $media->image = $name;
            $media->alt = 'halo-iped';
            $media->description = 'this is description for image';
            $media->save();
            return $name;
        }else{
            return null;
        }

    }
}
