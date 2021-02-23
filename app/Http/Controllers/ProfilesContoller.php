<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesContoller extends Controller
{
    //
    public function index() 
    {
        return view('home');
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('home', [
            'name' => $user->name
        ]);
    }
}
