<?php

namespace App\Http\Controllers;

use App\Models\AboutImage;
use Illuminate\Http\Request;

class AboutImageController extends Controller
{
    public function create(){
        return view ('admin.about_image_add');
    }

    public function store(){   
        
    if(request()->has('image')){
    request()->validate([
        'image.*' => ['image']
    ], ['image.*'=>"All uploaded files should be images !!"]);
    

    foreach (request('image') as $image){
    $image_name = hexdec(uniqid()).".".$image->getClientOriginalExtension(); 
    $image->storeAs("about_images",$image_name);
    
    AboutImage::create([
         'url' => "about_images/".$image_name ,
     ]);
    }
    
    toastr()->success('new images added successfully');
    }

    else{
    toastr()->info('no new images havebeen added');
    }
    
    return back();

    }


    public function index(){
        return view('admin.all_about_images', [
            'images' =>AboutImage::all(),
        ]);
    }

    public function destroy(AboutImage $image){
        
        //AboutImage::destroy($image->id);
        return response()->json(['id'=>$image->id]);
    }

    public function edit(AboutImage $image) {
        return view('admin.edit_about_image',['image'=>$image]);
    }

    public function update(AboutImage $image){
        
        if(!request()->has('image')){
            toastr()->info('Image hasnot been updated'); 
        }
        else{
        request()->validate([
            'image'=>['image']
        ]);
        $image_name = hexdec(uniqid()).request('image')->getClientOriginalExtension();
        request()->file('image')->storeAs('about_images', $image_name);
        AboutImage::find($image->id)->update(['url'=>"about_images/".$image_name]);
        toastr()->success('Image has been updated successfully');
        }
        
        return back();
        
    }
}
