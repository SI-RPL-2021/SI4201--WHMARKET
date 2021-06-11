<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view ('halamanlogin');
    }
    public function InputLogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('halamanlogin');
    }
    
}
