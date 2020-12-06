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

Route::get('/viewManager',function(){
    return view('flowerManager');
});

Route::get('/detailCust',function(){
    return view('detailPageCustomer');
});

Route::get('/cart',function(){
    return view('cart');
});

Route::get('/transaction',function(){
    return view('transactionHistory');
});

Route::get('/transactionDetail',function(){
    return view('transactionDetail');
});

Route::get('/changepw',function(){
    return view('changePassword');
});

Route::get('/updatecat',function(){
    return view('updateCategory');
});

Route::get('/managecategory','MainController@atur_categori');
Route::get('/update/{id}','MainController@muncul_update');
Route::get('/detail/{id}','MainController@muncul_detail');
Route::get('/','MainController@muncul_homepage');
Route::get('/flower/{id}', 'MainController@muncul_flower');
Route::post('/add/flower', 'MainController@tambah_flower');
Route::post('/update/flower', 'MainController@tambah_update_category');