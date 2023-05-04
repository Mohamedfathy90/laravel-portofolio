<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create(){
    return view('admin.about_text', 
    ['about'=>About::find(1)]);
    }

    public function store(){
    About::find(1)->update([
        'title' => request('title'),
        'description' => request('description'),
        'excerpt' => request('excerpt'),
        'detailed_description' => request('detailed_description')
    ]);
    
    toastr()->success("About Area Updated Successfully");
    return back();
    }
}
