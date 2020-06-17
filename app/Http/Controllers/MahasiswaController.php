<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function mhs(){
        return view('/mhs');
    }

    public function formSKP(){
        $skp = DB::table('surat_keterangan')->get();
        return view('suratketerangan', ['skp' => $skp]);
    }

    public function simpanSKP(Request $request){
        DB::table('surat_keterangan')->insert([
            'tahun' => $request->tahun,
            'semester' => $request->semester,
            'nim' => $request->nim,
            'isi_surat' => $request->isi_surat,
            'status' => 0
        ]);
        return redirect('/mhs/suratketerangan')->with('success','Data Saved');
    }

    public function formPraKP(){
        $prakp = DB::table('prakp')->get();
        $koor_kp = DB::table('koor_kp')->get();
        return view('prakp', ['prakp' => $prakp, 'koor_kp' => $koor_kp]);
    }

    public function simpanPraKP(Request $request){
        DB::table('prakp')->insert([
            'tahun' => $request->tahun,
            'semester' => $request->semester,
            'nim' => $request->nim,
            'judul' => $request->judul,
            'pembimbing' => $request->pembimbing,
            'status' => 0
        ]);
        return redirect('/mhs/prakp')->with('success','Data Saved');
    }

    public function formKP(){
        $kp = DB::table('kp')->get();
        return view('kp', ['kp' => $kp]);
    }

    public function simpanKP(Request $request){
        DB::table('kp')->insert([
            'tahun' => $request->tahun,
            'semester' => $request->semester,
            'nim' => $request->nim,
            'judul' => $request->judul,
            'tanggal_ujian' => '1111-11-11',
            'penguji' => 0,
            'status' => 0
        ]);
        return redirect('/mhs/kp')->with('success','Data Saved');
    }

    public function ujiankp(){
        $user_mhs = DB::table('mahasiswa')->where('google_Id', '=', session('key'))->get();
        $kp = DB::table('kp')->where('tanggal_ujian', '!=', '1111-11-11')->get();
        return view('ujiankp', ['kp' => $kp, 'mahasiswa' => $user_mhs]);
    }

    public function userMhs(){
        $user_mhs = DB::table('user')->where('google_Id', '=', session('key'))->get();
        return view('usermhs', ['mahasiswa' => $user_mhs]);
    }

    public function addNIM(){
        $user_mhs = DB::table('user')->where('google_Id', '=', session('key'))->first();
        return view('profileedit', ['mahasiswa' => $user_mhs]);
    }

    public function simpanNIM(Request $request){
        DB::table('user')->where('id', '=', $request->id)->update(['nim_nidn' => $request->nim]);
        return redirect('/mhs');
    }

    public function logout()
    {
        session(['key' => '']);
        return redirect('/');
    }
}
