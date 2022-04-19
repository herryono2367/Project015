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

Route::group(['prefix' =>'/belajar'], function(){
    Route::group(['prefix' =>'admin'], function(){
    Route::get('/mahasiswa', function(){
        echo 'mahasiswa';
    });
    Route::get('/ubg/rpl/mahasiswa/{semester}/{nim}', function($semester, $nim){
        return 'mahasiswa rpl kampus ubg semester : ' .$semester .  '-NIM :' .$nim;
    });
    Route::redirect('/login', '/masuk');
    
    // route goub

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
});


Route::get('/', function () {
    return view('Welcome');
});

Route::get('/home', function(){
    return view('index');
});
Route::get('/kontak/{hp}', function($hp){
    return view('kontak',['handphone' =>$hp]);
    });
Route::get('/tentang-kami', function(){
     return view('tentang');
    });

//crud data

Route::get('customer', 'CustomerController@index');
Route::get('customer/create', 'CustomerController@create');
Route::post('customer/store', 'CustomerController@store');
Route::delete('/customers/{id}', 'CustomerController@destroy');
Route::post('customer/update', 'CustomerController@update');
Route::get('customer/edit/{id}', 'CustomerController@edit');

