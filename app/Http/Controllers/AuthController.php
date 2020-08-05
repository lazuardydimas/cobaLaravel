<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller{
    public function register()
    {
        return view('register');
    }
    
    public function welcome(Request $request)
    {
        $nama_lengkap=$request["firstname"]." ".$request["lastname"];
        return view('welcome',['nama_lengkap' => $nama_lengkap]);
    }
}