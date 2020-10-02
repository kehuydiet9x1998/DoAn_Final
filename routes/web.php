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

Route::get('/khoa-hoc', function () {
  return view('backend.khoahoc.alldata');
});

Route::get('/admin/hocsinh', function () {
  return view('backend.hocsinh.datahocsinh');
});

Route::get('/admin/hocsinh/themhocsinh', function () {
  return view('backend.hocsinh.themhocsinh');
});

Route::get('/admin/lich-trai-nghiem', function () {
  return view('backend.lichtrainghiem.datalichtrainghiem');
});

Route::get('/admin/lich-trai-nghiem/them', function () {
  return view('backend.lichtrainghiem.themlichtrainghiem');
});

Route::get('/admin/nhan-xet', function () {
  return view('backend.nhanxet.datanhanxet');
});

Route::get('/admin/nhan-xet/themnhanxet', function () {
  return view('backend.nhanxet.themnhanxet');
});

Route::get('/admin/thoi-khoa-bieu', function () {
  return view('backend.thoikhoabieu.datathoikhoabieu');
});
