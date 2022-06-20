<?php

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

Route::get('/', function () {
    return view('mhs');
});

Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
//Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian')->name('cari');
Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');
Route::get('/mahasiswa/formmhs', 'MahasiswaController@formmhs');
Route::get('/mahasiswa/form', 'MahasiswaController@formmhs');
Route::post('/mahasiswa/simpanmhs', 'MahasiswaController@simpanmhs');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::put('/mahasiswa/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa');
Route::get('/mahasiswa/hapus/{id}', 'MahasiswaController@hapus');

Route::get('/user', 'AuthController@user');
Route::get('/user/formuser', 'AuthController@formuser');
Route::post('/user/simpanuser', 'AuthController@simpanuser');
Route::get('/user/edituser/{id}', 'AuthController@edituser');
Route::put('/user/updateuser/{id}', 'AuthController@updateuser');
Route::get('/user/hapususer/{id}', 'AuthController@hapususer');

Route::get('/login', 'AuthController@login');

Route::post('/user/ceklogin', 'AuthController@ceklogin');

Route::get('/logout', 'AuthController@logout');


