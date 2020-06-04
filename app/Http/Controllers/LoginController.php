<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Socialite;
Use Str;
Use App\User;
// use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */


    public function google() {
       return Socialite::driver('google')->stateless()->redirect();              
    }

    public function googleRedirect() {
    //    return view('/mhs');
    $google = Socialite::driver('google')->stateless()->user();
    $user = User::where('email',$google->email )->first();
    session(['key' => $google->id]);
    if($user)
    {
        return view('/mhs');
    }
    $userlogin = new User;
    $userlogin->nama= $google->name;
    $userlogin->email= $google->email;
    $userlogin->google_id= $google->id;
    $userlogin->save();
    return view('/mhs');
    }

    public function loginacid(){
        return view ('/mhs');
    }

}
