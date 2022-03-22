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
    return view('Welcome');
});
Route::get('/mahasiswa', function(){
    echo 'mahasiswa';
});
Route::get('/ubg/rpl/mahasiswa/{semester}/{nim}', function($semester, $nim){
    return 'mahasiswa rpl kampus ubg semester : ' .$semester .  '-NIM :' .$nim;
});
Route::redirect('/login', '/masuk');

// route goub


Route::group(['prefix' =>'/admin'], function(){
    Route::get('/mahasiswa', function(){
        return 'Admin Mahasiswa';
    });
    Route::get('/dosen', function(){
        return 'Admin Dosen';
    });
    Route::get('/pegawai', function(){
        return 'Admin Pegawai';
    });
});




