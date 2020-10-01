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
Route::get('/', function () {
  return view('frontend.trangchu');
});

Route::get('/dangnhap', function () {
  return view('backend.dangnhap');
});

Route::get('/dashboard/{phanquyen}', 'PhanQuyenController@watchView');

Route::get('/dashboard', function () {
  return view('backend.dashboard');
});

Route::get('/news-feed', function () {
  return view('backend.bantin');
});

Route::get('/test', function () {
  return view('backend.test');
});

