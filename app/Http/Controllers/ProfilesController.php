<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class ProfilesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function show($user)
    {
        $user = User::find($user);
        if(!$user)
        {
            $data = array(
                'status' => 404,
                'message' => 'User Not Found'
            );
            return $data;
        }else{
            return view('home', [
                'user' => $user
            ]);
        }
       
    }
}
