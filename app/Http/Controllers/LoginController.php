<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Socialite;
Use Str;
Use App\User;
use Illuminate\Support\Facades\DB;
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
    //$user = User::where('email',$google->email )->first();
    session(['key' => $google->id]);
    /*if($user)
    {
        return view('/mhs');
    }*/
    $check_user = DB::table('user')->where('email', '=', $google->email)->count();
    if($check_user > 0){
        $check_user2 = DB::table('user')->where('email', '=', $google->email)->first();
        if ($check_user2->status == 1) {
            if ($check_user2->nim_nidn == null) {
                return redirect('/mhs/addNIM');
            }else{
                return redirect('/mhs');
            }
        }else if($check_user2->status == 2){
            return redirect('/dosen/home');
        }else{
            return redirect('/koor/home');
        }
    }else{
        DB::table('user')->insert([
            'nama' => $google->name,
            'email' => $google->email,
            'google_Id' => $google->id,
            'updated_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
            'status' => 0
        ]);
        return redirect('/');
    }
    // $userlogin = new User;
    // $userlogin->nama= $google->name;
    // $userlogin->email= $google->email;
    // $userlogin->google_id= $google->id;
    // $userlogin->save();
    // return view('/mhs');
    }

    public function loginacid(){
        return view ('/mhs');
    }

}
