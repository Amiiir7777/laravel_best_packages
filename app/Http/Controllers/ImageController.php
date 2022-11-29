<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function index()
    {
        return view('image.index');
    }

    public function imageStore(Request $request)
    {
        $image = $request->file('image');
        $input['image_name'] = time() . "." . $image->extension();
        $path = public_path('original_image');

        $img = Image::make($image->path());
        $img->resize(100,150, function ($const){
            $const->aspectRatio();
        })->save($path . "/" . $input['image_name']);

        $path2 = public_path('resized_image');
        $image->move($path2, $input['image_name']);
        return back()->with('success', 'image upload successfully');
    }
}
