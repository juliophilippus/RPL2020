<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});
 
Route::post('/login', 'LoginController@loginacid');
 
// Route Mahasiswa
Route::get('/mhs', 'MahasiswaController@mhs')->middleware(CheckLogin::class);
Route::get('/mhs/suratketerangan', 'MahasiswaController@formSKP')->middleware(CheckLogin::class);
Route::post('/mhs/suratketerangan/simpanSKP', 'MahasiswaController@simpanSKP')->middleware(CheckLogin::class);
Route::get('/mhs/prakp', 'MahasiswaController@formPraKP')->middleware(CheckLogin::class);
Route::get('/mhs/simpanPraKP', 'MahasiswaController@simpanPraKP')->middleware(CheckLogin::class);
Route::get('/mhs/kp', 'MahasiswaController@formKP')->middleware(CheckLogin::class);
Route::get('/mhs/simpankp', 'MahasiswaController@simpanKP')->middleware(CheckLogin::class);
Route::get('/mhs/usermhs', 'MahasiswaController@userMhs')->middleware(CheckLogin::class);
Route::get('/mhs/ujiankp', 'MahasiswaController@ujiankp')->middleware(CheckLogin::class);
Route::get('/mhs/logout', 'MahasiswaController@logout')->middleware(CheckLogin::class);
Route::get('/mhs/addNIM', 'MahasiswaController@addNIM')->middleware(CheckLogin::class);
Route::get('/mhs/simpanNIM', 'MahasiswaController@simpanNIM')->middleware(CheckLogin::class);

// Route Dosen
//Route::get('/dosen', 'DosenController@login');
//Route::get('/dosen', 'LoginController@loginacid');
//Route::get('/dosen/proseslogin', 'DosenController@proseslogin');
Route::get('/dosen/home', 'DosenController@home')->middleware(CheckLogin::class);
Route::get('/dosen/jadwalujian', 'DosenController@jadwalujian')->middleware(CheckLogin::class);
Route::get('/dosen/daftarbimbingan', 'DosenController@daftarbimbingan')->middleware(CheckLogin::class);
Route::get('/dosen/profile', 'DosenController@profile')->middleware(CheckLogin::class);
Route::get('/dosen/logout', 'DosenController@logout')->middleware(CheckLogin::class);

// Route Koor
//Route::get('/koor', 'KoorController@login')->middleware(CheckLogin::class);
//Route::get('/koor', 'LoginController@loginacid')->middleware(CheckLogin::class);
//Route::get('/koor/proseslogin', 'KoorController@proseslogin')->middleware(CheckLogin::class);
Route::get('/koor/home', 'KoorController@home')->middleware(CheckLogin::class);
Route::get('/koor/suratketerangan', 'KoorController@suratketerangan')->middleware(CheckLogin::class);
Route::get('/koor/prosessetujuisk/{any:}', 'KoorController@prosessetujuisk')->middleware(CheckLogin::class);
Route::get('/koor/prosesbatalsk/{any:}', 'KoorController@prosesbatalsk')->middleware(CheckLogin::class);
Route::get('/koor/prakp', 'KoorController@prakp')->middleware(CheckLogin::class);
Route::get('/koor/prosessetujuiprakp/{any:}', 'KoorController@prosessetujuiprakp')->middleware(CheckLogin::class);
Route::get('/koor/prosesbatalprakp/{any:}', 'KoorController@prosesbatalprakp')->middleware(CheckLogin::class);
Route::get('/koor/kp', 'KoorController@kp')->middleware(CheckLogin::class);
Route::get('/koor/prosessetujuikp/{any:}', 'KoorController@prosessetujuikp')->middleware(CheckLogin::class);
Route::get('/koor/prosesbatalkp/{any:}', 'KoorController@prosesbatalkp')->middleware(CheckLogin::class);
Route::get('/koor/daftarkp', 'KoorController@daftarkp')->middleware(CheckLogin::class);
Route::get('/koor/bataskp', 'KoorController@bataskp')->middleware(CheckLogin::class);
Route::get('/koor/prosesbataskp', 'KoorController@prosesbataskp')->middleware(CheckLogin::class);
Route::get('/koor/jadwalkp', 'KoorController@jadwalkp')->middleware(CheckLogin::class);
Route::get('/koor/prosessetjadwal', 'KoorController@prosessetjadwal')->middleware(CheckLogin::class);
Route::get('/koor/profile', 'KoorController@profile')->middleware(CheckLogin::class);
Route::get('/koor/logout', 'KoorController@logout')->middleware(CheckLogin::class);

// Route Admin
Route::get('/admin', 'AdminController@login');
Route::get('/admin/proseslogin', 'AdminController@proseslogin');
Route::get('/admin/home', 'AdminController@home');
Route::get('/admin/datausers', 'AdminController@datausers');
Route::get('/admin/ubahmhs/{any:}', 'AdminController@prosesubahusermahasiswa');
Route::get('/admin/ubahdosen/{any:}', 'AdminController@prosesubahuserdosen');
Route::get('/admin/logout', 'AdminController@logout');
Route::get('/admin/ubahkoor/{any:}', 'AdminController@ubahkoor');


Route::get('/koor/verifikasisuratket', 'KoorController@formVerifSKP');

Route::get('/koor/verifikasiprakpdankp', function () {
    return view('verifikasiprakpdankp');
});

Route::get('/koor/penjadwalanujian', function () {
    return view('penjadwalanujian');
});

Route::get('/koor/dafregiskp', function () {
    return view('dafregiskp');
});

Route::get('/koor/userkoor', function () {
    return view('userkoor');
});

Route::get('login/google', 'LoginController@google');
Route::get('login/google/redirect', 'LoginController@googleRedirect');
