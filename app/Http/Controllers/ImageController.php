<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ImageController extends Controller
{
    public function store(Request $request)
{
    $image_64 = $request['image_data']; //your base64 encoded data

    $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf
  
    $replace = substr($image_64, 0, strpos($image_64, ',')+1); 
  
  // find substring fro replace here eg: data:image/png;base64,
  
   $image = str_replace($replace, '', $image_64); 
  
   $image = str_replace(' ', '+', $image); 
  $imageName = Str::random(10).'.'.$extension;

   Storage::disk('public')->put($imageName, base64_decode($image));



    // if(!$request->hasFile('fileName')) {
    //     return response()->json(['upload_file_not_found'], 400);
    // }
 
    // $allowedfileExtension=['pdf','jpg','png'];
    // $file = $request->file('fileName'); 
    // $errors = [];

 
    //     $extension = $file->getClientOriginalExtension();
 
    //     $check = in_array($extension,$allowedfileExtension);
 
    //     if($check) {
    //         foreach($request->fileName as $mediaFiles) {
 
    //             $path = $mediaFiles->store('public/images');
    //             $name = $mediaFiles->getClientOriginalName();
      
    //             //store image file into directory and db
    //             $save = new Image();
    //             $save->image_name = $name;
    //             $save->image_path = $path;
    //             $save->save();
    //         }
    //     } else {
    //         return response()->json(['invalid_file_format'], 422);
    //     }
 
    //     return response()->json(['file_uploaded'], 200);
 



    // $base64_image = "$request->image_data"; // your base64 encoded     
    // echo $base64_image;
    // @list($type, $file_data) = explode(';', $base64_image);
    // @list(, $file_data) = explode(',', $file_data); 
    // $imageName = Str::random(10).'.'.'jpg';   
    // Storage::disk('local')->put($imageName, base64_decode($file_data));



    // $folderPath = "uploads/";
        
    // $base64Image = explode(";base64,", $request->image_data);
    // $explodeImage = explode("image/", $base64Image[0]);
    // $imageType = $explodeImage[1];
    // $image_base64 = base64_decode($base64Image[1]);
    // $file = $folderPath . uniqid() . '. '.$imageType;
    
    // file_put_contents($file, $image_base64);


    // list($extension, $content) = explode(';', $request->image_data);
    // $tmpExtension = explode('/', $extension);
    // preg_match('/.([0-9]+) /', microtime(), $m);
    // $fileName = sprintf('img%s%s.%s', date('YmdHis'), $m[1], $tmpExtension[1]);
    // $content = explode(',', $content)[1];
    // $storage = Storage::disk('public');

    // $checkDirectory = $storage->exists("local");

    // if (!$checkDirectory) {
    //     $storage->makeDirectory("local");
    // }

    // $storage->put("local" . '/' . $fileName, base64_decode($content), 'public');

    // return $fileName;
}
}
