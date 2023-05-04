<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Image;

class HomeSliderController extends Controller
{
    public function create(){
        return view('admin.slider_edit' , [
            'slider' => HomeSlider::find(1)
        ]);
    
    }

    public function store(){

        request()->validate([
            'title' => ['required' , 'string'] , 
            'description' => ['required' , 'string'] ,
            'image'=> ['image'] ,
            'video' => ['url']
        ] , ['url'=>"Field should be a valid URL"]);

        $image_path = HomeSlider::find(1)->image;
        
        if(request()->has('image')){
        $image = request()->file('image'); 
        $image_path = "slider_images/".time().".".$image->getClientOriginalExtension();
        Image::make($image)->resize(636,852)->save("storage/".$image_path);
        }

        HomeSlider::where('id',1)->update([
            'title' => request('title'),
            'description' => request('description') ,
            'image' => $image_path,
            'video' => request('video')
        ]);

        toastr()->success('Home Slider update successfully') ;
        return back();
        
    }
    
}
