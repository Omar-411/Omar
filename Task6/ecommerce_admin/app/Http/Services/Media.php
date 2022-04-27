<?php

namespace App\Http\Services;

use Illuminate\Http\UploadedFile;

class Media{
    public static function upload(UploadedFile $image, string $Location) :string {
        $imageName =$image->hashName(); //Hash image name 
        $image->move(public_path('assets/images/' .$Location), $imageName);
        return $imageName;
    }

    public static function delete(string $image, string $Location) :bool {
        if (file_exists(public_path("assets/images/products/{$Location}/{$image}"))) {
            unlink(public_path("assets/images/products/{$Location}/{$image}"));
            
            return true;
        }
        
        return false;
    }
}

