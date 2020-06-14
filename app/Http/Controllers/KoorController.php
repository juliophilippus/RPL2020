<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KoorController extends Controller
{
    public function login(){
        return view('koor.login');
    }

    public function proseslogin(Request $request){
        $jumlah = DB::table('koor_kp')
        	->where('email', '=', $request->email)
        	->where('password', '=', $request->password)
        	->count();
        if ($jumlah > 0) {
			$data = DB::table('koor_kp')
	        	->where('email', '=', $request->email)
	        	->where('password', '=', $request->password)
	        	->first();
        	session(['id_koor' => $data->id_koor]);
        	return redirect('/koor/home');
        }else{
        	return redirect('/koor');
        }
    }

    public function home()
    {
    	return view('koor.home');
    }

    public function suratketerangan()
    {
    	$sk = DB::table('surat_keterangan')->get();
    	return view('koor.suratketerangan', ['sk' => $sk]);
    }

    public function prosessetujuisk($id)
    {
    	DB::table('surat_keterangan')->where('id_skp', '=', $id)->update(['status' => 1]);
    	return redirect('/koor/suratketerangan');
    }

    public function prosesbatalsk($id)
    {
    	DB::table('surat_keterangan')->where('id_skp', '=', $id)->update(['status' => 0]);
    	return redirect('/koor/suratketerangan');
    }

    public function prakp()
    {
    	$prakp = DB::table('view_prakp')->get();
    	return view('koor.pengajuanprakp', ['prakp' => $prakp]);
    }

    public function prosessetujuiprakp($id)
    {
    	DB::table('prakp')->where('id_prakp', '=', $id)->update(['status' => 1]);
    	return redirect('/koor/prakp');
    }

    public function prosesbatalprakp($id)
    {
    	DB::table('prakp')->where('id_prakp', '=', $id)->update(['status' => 0]);
    	return redirect('/koor/prakp');
    }

    public function kp()
    {
    	$kp = DB::table('kp')->get();
    	return view('koor.pengajuankp', ['kp' => $kp]);
    }

    public function prosessetujuikp($id)
    {
    	DB::table('kp')->where('id_kp', '=', $id)->update(['status' => 1]);
    	return redirect('/koor/kp');
    }

    public function prosesbatalkp($id)
    {
    	DB::table('kp')->where('id_kp', '=', $id)->update(['status' => 0]);
    	return redirect('/koor/kp');
    }

    public function daftarkp()
    {
    	$kp = DB::table('view_kp')->where('status', '=', '1')->get();
    	return view('koor.daftarkp', ['kp' => $kp]);
    }

    public function bataskp()
    {
    	$kp = DB::table('view_kp')->where('status', '=', '1')->get();
    	return view('koor.bataskp', ['kp' => $kp]);
    }

    public function prosesbataskp(Request $request)
    {
    	$get_batas = DB::table('batas_kp_new')->where('id_kp', '=', $request->id_kp)->count();
    	if ($get_batas > 0) {
    		DB::table('batas_kp_new')->where('id_kp', '=', $request->id_kp)->update(['tanggal_batas' => $request->bataskp]);
    	}else{
    		DB::table('batas_kp_new')->insert([
    			'tanggal_batas' => $request->bataskp,
    			'id_kp' => $request->id_kp
    		]);
    	}
    	
    	return redirect('/koor/bataskp');
    }

    public function jadwalkp()
    {
    	$kp = DB::table('kp')->where('status', '=', '1')->get();
    	$dosen = DB::table('koor_kp')->get();
    	return view('koor.setjadwalkp', ['kp' => $kp, 'dosen' => $dosen]);
    }

    public function profile()
    {
        $user_mhs = DB::table('user')->where('google_Id', '=', session('key'))->get();
        return view('koor.profile', ['dosen' => $user_mhs]);
    }

    public function prosessetjadwal(Request $request)
    {
    	DB::table('kp')->where('id_kp', '=', $request->id_kp)->update(['penguji' => $request->penguji, 'tanggal_ujian' => $request->tanggal_ujian]);
    	return redirect('/koor/jadwalkp');
    }

    public function logout()
    {
        session(['id_koor' => '']);
        return redirect('/');
    }
}
