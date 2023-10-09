<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Photo;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;



class PhotoController extends Controller
{
    protected $mainFolder = 'public/';

    public function form()
    {
        return view('admin.form');
    }
    
  
    protected function makeAndStoreImage($sourcePath, $destinationPath)
    {
        try {
            // Use Intervention Image to manipulate the image
            $image = Image::make($sourcePath);
    
            // Store the manipulated image to the "storage/app/public/tour_images" directory
            Storage::disk('public')->put($destinationPath, $image->encode());
    
            return true;
        } catch (\Exception $e) {
            // Handle any exceptions that might occur during image processing
            return false;
        }
    }


    protected function savePhotoToDB($filename, $filenameThumb)
    {
        // Create a new Photo instance
        $photo = new Photo();
    
        // Set the photo's attributes
        $photo->filename = $filename;
        $photo->filename_thumb = $filenameThumb;
        // You can set other attributes if needed
    
        // Save the photo to the database
        if ($photo->save()) {
            return $photo; // Return the saved photo instance
        } else {
            return null; // Return null if the saving process fails
        }
    }
    
    public function upload(Request $request, $folder = 'tour_images')
    {
        $paths = $this->getPathImage($request);
    
        list($filename, $photoRealPath) = $paths;
    
        // Set image storage folder
        $path = $folder . '/' . $filename;
        $this->makeAndStoreImage($photoRealPath, $path);
    
        $photo = $this->savePhotoToDB($path, "gg");
        if (!$photo) {
            return false;
        }
        return $photo->id;
    }



    protected function getPathImage($request)
    {
        // File
        $photo = $request->file('photo');

        // Get file details
        $photoOrginalName = $photo->getClientOriginalName();
        $photoExt = $photo->getClientOriginalExtension();
        $photoRealPath = $photo->getRealPath();

        // Make filename with random
        $random = str_random(40);
        $filename = $random . '.' . $photoExt;

        return array($filename, $photoRealPath);
    }


}
