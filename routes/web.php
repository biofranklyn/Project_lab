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

Route::get('/login',function(){
    return view('login');
});

Route::get('/transaction',function(){
    return view('transactionHistory');
});

Route::get('/changepw',function(){
    return view('changePassword');
});

Route::get('/login',function(){
    return view('login');
});
Route::get('/loginauth','MainController@login');

Route::get('/flower/search','MainController@muncul_search');

Route::get('/logout','MainController@logout');

Route::get('/updatecategory/{id}','MainController@UpdateCategory');
Route::post('/updateCategory/homepage', 'MainController@tambah_update_category');

Route::get('/transactionDetail/{id}','MainController@muncul_td');
Route::post('/trDetail/{userid}', 'MainController@addtransaction');

Route::get('/cart/{id}','MainController@muncul_cart');
Route::post('/cart/{User_id}/{flower_id}', 'MainController@cart');

Route::get('/managecategory','MainController@atur_categori');

Route::get('/detail/{id}','MainController@muncul_detail');

Route::get('/','MainController@muncul_homepage');
Route::get('/hapus/{id}','MainController@hapus_category');

Route::get('/flower/{id}', 'MainController@muncul_flower');


Route::get('/add',function(){
    return view('addFlower');
});
Route::post('/add/flower', 'MainController@tambah_flower');

Route::get('/hapus/{id}','MainController@hapus_category');

Route::get('/update/{id}','MainController@muncul_update');
Route::post('/update/flower', 'MainController@tambah_update_flower');
Route::get('/flower/hapus/{id}','MainController@hapus');

Route::get('/register',function() {
    return view('register');
});
Route::post('/reg','MainController@register');

