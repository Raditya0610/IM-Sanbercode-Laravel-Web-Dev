<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }

    public function welcome(Request $request){
        $firstName = $request->input('name');
        $lastName = $request->input("lastName");
        return view('welcome', compact('firstName', 'lastName'));
    }
}
