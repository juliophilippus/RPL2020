<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function proseslogin(Request $request){
        $jumlah = DB::table('admin')
        	->where('username', '=', $request->username)
        	->where('password', '=', $request->password)
        	->count();
        if ($jumlah > 0) {
			$data = DB::table('admin')
	        	->where('username', '=', $request->username)
	        	->where('password', '=', $request->password)
	        	->first();
        	session(['id_admin' => $data->id]);
        	return redirect('/admin/home');
        }else{
        	return redirect('/admin');
        }
    }

    public function home()
    {
    	return view('admin.home');
    }

    public function datausers()
    {
    	$user = DB::table('user')->get();
    	return view('admin.user', ['user' => $user]);
    }

    public function prosesubahusermahasiswa($id)
    {
    	DB::table('user')->where('id', '=', $id)->update(['status' => 1]);
    	return redirect('/admin/datausers');
    }

    public function prosesubahuserdosen($id)
    {
        DB::table('user')->where('id', '=', $id)->update(['status' => 2]);
        return redirect('/admin/datausers');
    }

    public function ubahkoor($id)
    {
        DB::table('user')->where('id', '=', $id)->update(['status' => 3]);
        return redirect('/admin/datausers');
    }

    public function logout()
    {
        session(['key' => '']);
        return redirect('/admin');
    }
}
