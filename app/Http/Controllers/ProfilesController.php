<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
    	
        return view('profiles.index', compact('user', 'follows'));
    }

    public function edit(\App\User $user){
        $this->authorize('update', $user->profile);
    	return view('profiles.edit', compact('user'));
    }
    public function update(User $user){
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => '',
            'description' => '',
            'url' => '',
            'image' => 'image'
        ]);
        
        if(request('image')){
            // stroe the image
            $imagePath = request('image')->store('profile', 'public');

            // edit the image
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
            $imageArray = ['image' => $imagePath];
        }

        $redirectPath = $user->id;

        // save the data into the database
        auth()->user()->profile->update(array_merge($data, $imageArray ?? [] ));
        return redirect("/profile/". $redirectPath);
    }
}