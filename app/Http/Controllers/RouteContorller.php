<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteContorller extends Controller
{
    //Go to Signup 
    public function GotoSignup()
    {
        return view("signup");
    }
    // go to sign in
    public function GotoSignin()
    {
        return view("signin");
    }
}
