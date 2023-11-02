<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        if($request->has('image')){
            foreach($request->image as $image){ //$image is for multiple images
                $media = new media();
                $fileNameExt = $image->getClientOriginalName(); //this is for original image name saved in the device
                $fileName = $fileNameExt;

                $fileExt = $image->getClientOriginalExtension(); //this is for image extension like .png .jpg etc
                $fileNameToStore = $fileName . '_'.time() . '.' . $fileExt; //this is for unique image name...... same name xa vane time lea garda xutai xutai banauxa
                $image->storeAs('public/images', $fileNameToStore); //this is defining where to store images
                $media->design_id = $design->id;
                $media->image = $fileNameToStore;
                $media->save();
            }
        }

    }
}
