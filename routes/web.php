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

Route::get('/dangnhap', function () {
  return view('backend.dangnhap');
});
<<<<<<< HEAD

Route::get('/dashboard', function () {
  return view('backend.dashboard');
});

Route::get('/news-feed', function () {
  return view('backend.bantin');
});
=======
Route::get('/admin',function (){
    return view('dashboard.menu.index');
});
Route::view('/admin/home','dashboard.home.index');
>>>>>>> 9062036e0b3e7fb598fcba8432ba4cb1d5f9d67d
