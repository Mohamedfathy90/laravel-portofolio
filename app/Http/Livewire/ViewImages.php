<?php

namespace App\Http\Livewire;

use App\Http\Controllers\AboutImageController;
use App\Models\AboutImage;
use Livewire\Component;

class ViewImages extends Component
{

    public $images ;
    
    public function render()
    {
        $this->images = AboutImage::all();
        return view('livewire.view-images',['images'=>$this->images]);
    }
    
    public function destroy($image){
    AboutImage::destroy($image);
    }
    
    

   
}
