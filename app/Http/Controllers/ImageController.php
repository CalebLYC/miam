<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function apiRestoImage($id) {
        $image = Image::where('imageable_id', $id)->where('imageable_type', 'App\Models\Restaurant')->first();
        if ($image) {
            $path = storage_path('app/public/' . $image->url);
            if (file_exists($path)) {
                $file = file_get_contents($path);
                $type = mime_content_type($path);
                return response($file)->header('Content-Type', $type);
            }
        }
        return response()->json(['message' => 'Image not found'], 404);
    }

    public function apiPlatImage($id){
        $image = Image::all()->where('imageable_id', $id)->where('imageable_type', 'App\Models\Plat')->first();
        if($image){
            $path = storage_path('app/public/'.$image->url);
            if(file_exists($path)){
                $file = file_get_contents($path);
                $type = mime_content_type($path);
                return response($file)->header('Content-Type', $type);
            }
        }
    }

    public function apiRestoImageLink($id){
        $image = Image::where('imageable_id', $id)->where('imageable_type', 'App\Models\Restaurant')->first();
        $image->uri = Storage::url($image->url);
        return json_encode($image);
    }


    public function apiPlatImageLink($id){
        $image = Image::all()->where('imageable_id', $id)->where('imageable_type', 'App\Models\Plat')->first();
        $image->uri = Storage::url($image->url);
        return json_encode($image);
    }
}
