<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/mhs', 'MahasiswaController@mhs');
Route::get('/mhs/suratketerangan', 'MahasiswaController@formSKP');
Route::post('/mhs/suratketerangan/simpanSKP', 'MahasiswaController@simpanSKP');
Route::get('/mhs/prakp', 'MahasiswaController@formPraKP');
Route::get('/mhs/simpanPraKP', 'MahasiswaController@simpanPraKP');
Route::get('/mhs/kp', 'MahasiswaController@formKP');
Route::get('/mhs/simpankp', 'MahasiswaController@simpanKP');
Route::get('/mhs/usermhs', 'MahasiswaController@userMhs');
Route::get('/mhs/ujiankp', 'MahasiswaController@ujiankp');
Route::get('/mhs/logout', 'MahasiswaController@logout');

// Route Dosen
Route::get('/dosen', 'DosenController@login');
Route::get('/dosen/proseslogin', 'DosenController@proseslogin');
Route::get('/dosen/home', 'DosenController@home');
Route::get('/dosen/jadwalujian', 'DosenController@jadwalujian');
Route::get('/dosen/profile', 'DosenController@profile');
Route::get('/dosen/logout', 'DosenController@logout');

// Route Koor
Route::get('/koor', 'KoorController@login');
Route::get('/koor/proseslogin', 'KoorController@proseslogin');
Route::get('/koor/home', 'KoorController@home');
Route::get('/koor/suratketerangan', 'KoorController@suratketerangan');
Route::get('/koor/prosessetujuisk/{any:}', 'KoorController@prosessetujuisk');
Route::get('/koor/prosesbatalsk/{any:}', 'KoorController@prosesbatalsk');
Route::get('/koor/prakp', 'KoorController@prakp');
Route::get('/koor/prosessetujuiprakp/{any:}', 'KoorController@prosessetujuiprakp');
Route::get('/koor/prosesbatalprakp/{any:}', 'KoorController@prosesbatalprakp');
Route::get('/koor/kp', 'KoorController@kp');
Route::get('/koor/prosessetujuikp/{any:}', 'KoorController@prosessetujuikp');
Route::get('/koor/prosesbatalkp/{any:}', 'KoorController@prosesbatalkp');
Route::get('/koor/daftarkp', 'KoorController@daftarkp');
Route::get('/koor/bataskp', 'KoorController@bataskp');
Route::get('/koor/prosesbataskp', 'KoorController@prosesbataskp');
Route::get('/koor/jadwalkp', 'KoorController@jadwalkp');
Route::get('/koor/prosessetjadwal', 'KoorController@prosessetjadwal');
Route::get('/koor/profile', 'KoorController@profile');
Route::get('/koor/logout', 'KoorController@logout');




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
