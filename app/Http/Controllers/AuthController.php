<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin (){
        return view ('login');
    }

    public function postLogin (Request $request){
        // dd('login ok');
        dd(\Auth::attempt(['email'=> $request->email, 'password'=> $request->password]));
    }
}
