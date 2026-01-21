<?php

namespace App\Http\Controllers\admin;

use App\Models\TempImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TempImageController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:png,jpg,jpeg,gif,webp,avif'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'errors' => $validator->errors('image')
            ]);
        }

        $image = $request->image;

        $ext = $image->getClientOriginalExtension();
        $imageName = strtotime('now').'.'.$ext; 

        // Save data in temp images table
        $model = new TempImage();
        $model->name = $imageName;
        $model->save();

        // Save image in uploads/temp directory
        $image->move(public_path('uploads/temp'),$imageName);


        // Create small thumbnail here
        $sourcePath = public_path('uploads/temp/'.$imageName);
        $destPath = public_path('uploads/temp/thumb/'.$imageName);
        $manager = new ImageManager(Driver::class);
        $image = $manager->read($sourcePath);
        $image->coverDown(300, 300);
        $image->save($destPath);

        return response()->json([
            'status' => true,
            'data' => $model,
            'message' => 'Image uploaded successfully.'
        ]);

    }
}
