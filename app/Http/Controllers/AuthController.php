<?php

namespace App\Http\Controllers;


class AuthController extends Controller{
    public function register()
    {
        return view('register');
    }
    
    public function welcome()
    {
        return view('welcome');
    }
    
}
