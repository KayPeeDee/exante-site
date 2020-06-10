<?php

namespace App\Repositories;

use Intervention\Image\Facades\Image;

class MediaRepository{

    public function __construct(){}

    public function uploadImage($originalImage)
    {
        $extension = $originalImage->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        $image = Image::make($originalImage);
        $originalPath = public_path().'/images/';
        $image->save($originalPath.$fileName);
        return $fileName;
    }

    public function uploadFile($originalImage)
    {
        $extension = $originalImage->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        $originalPath = public_path().'/images/';
        $originalImage->move($originalPath, $fileName);
        return $fileName;
    }
}
