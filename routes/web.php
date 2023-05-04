<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutImageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\ProfileController;
use App\Models\About;
use App\Models\AboutImage;
use App\Models\HomeSlider;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main.index',
    ['slider'=>HomeSlider::find(1),
     'about' =>About::Find(1),
     'about_images'=>AboutImage::all(),
    ]);
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin/profile',[AdminController::class,'index'])->middleware('auth','verified');
Route::get('admin/edit/{user}',[AdminController::class,'create'])->middleware('auth','verified');
Route::post('admin/edit/{user}',[AdminController::class,'store'])->middleware('auth','verified');
Route::get('admin/password',[AdminController::class,'update_password_create'])->middleware('auth','verified');
Route::post('admin/password',[AdminController::class,'update_password_store'])->middleware('auth','verified');
Route::get('slider/edit',[HomeSliderController::class,'create'])->middleware('auth','verified');
Route::post('slider/edit',[HomeSliderController::class,'store'])->middleware('auth','verified');
Route::get('about_text/edit',[AboutController::class,'create'])->middleware('auth','verified');
Route::post('about_text/edit',[AboutController::class,'store'])->middleware('auth','verified');
Route::get('/about' , function(){
    return view('main.about',['about'=>About::find(1) , 'images'=>AboutImage::all()]);
});

Route::get('about_images/add',[AboutImageController::class,'create'])->middleware('auth','verified');
Route::post('about_images/add',[AboutImageController::class,'store'])->middleware('auth','verified');
Route::get('about_images/edit',[AboutImageController::class,'index'])->middleware('auth','verified');

Route::get('about_images/edit/{image}',[AboutImageController::class,'edit'])->middleware('auth','verified');
Route::patch('about_images/edit/{image}',[AboutImageController::class,'update'])->middleware('auth','verified');
Route::delete('about_images/delete/{image}',[AboutImageController::class,'destroy'])->middleware('auth','verified');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
