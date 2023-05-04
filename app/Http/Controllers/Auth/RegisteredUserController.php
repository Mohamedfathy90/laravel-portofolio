<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\traits\ImagesTrait;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    
    use ImagesTrait;
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
     public function store(Request $request)
    {
        $user = $request->validate([
            'name' => ['required', 'string', 'max:255' , 'unique:users,name'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'image'  => ['image'],
            'checkbox' => ['accepted'],
        ], ['name'=>'Username has been already taken' , 'accepted'=>'you should accept terms and conditions']);

     
        if ($request->has('image')){
            $path = $this->saveimage(request('image'),"profile_images");
        }
        else{
            $path = "profile_images/nophoto.jpg";
        }
        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $path
        ]);

        event(new Registered($user));

        Auth::login($user);
        
        return response()->json(['url'=> RouteServiceProvider::HOME]);
    }
}
