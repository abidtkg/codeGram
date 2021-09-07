<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('post.create');
    }

    public function store(){
        //validate data
        $data = request()->validate([
            'caption'=> 'required',
            'image'=> 'required|image'
        ]);

        $image_path = request('image')->store('uploads', 'public');



        auth()->user()->posts()->create([
            'caption'=> $data['caption'],
            'image'=> $image_path
        ]);
        return redirect('/profile/'. auth()->user()->id);
    }
}
