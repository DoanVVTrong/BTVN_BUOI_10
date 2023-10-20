<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/danh_sach_don_hang',function(){
    return view('danh_sach_don_hang');
});

Route::get('/danh_sach_san_pham',function(){
    return view('danh_sach_san_pham');
});
Route::get('/san_pham',function(){
    return view('san_pham');
});
