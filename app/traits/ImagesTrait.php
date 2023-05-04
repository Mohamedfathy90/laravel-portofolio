<?php
namespace App\traits;

trait ImagesTrait {

function saveimage($image , $folder_name){
    $image_name  = hexdec(uniqid()).".".$image->getClientOriginalExtension(); 
    $path = request()->file('image')->storeAs('profile_images' , $image_name);
}
}