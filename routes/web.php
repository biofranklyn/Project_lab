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

Route::get('/register',function() {
    return view('register');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/add',function(){
    return view('addFlower');
});

Route::get('/', 'MainController@muncul_homepage');
Route::get('/flower/{id}', 'MainController@muncul_flower');
Route::post('/add/flower', 'MainController@tambah_flower');