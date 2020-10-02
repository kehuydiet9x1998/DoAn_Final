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
Route::prefix('administrators')->group(function () {
  Route::get('courses', function () {
    return view('backend.administrators.courses');
  });
  Route::get('classes',function (){
    return view('backend.administrators.classes');
  });
  Route::get('staffs',function (){
    return view('backend.administrators.staffs');
  });
  Route::get('contracts',function (){
    return view('backend.administrators.contracts');
  });
});

Route::prefix('teachers')->group(function (){
  Route::get('calendar',function (){
    return view('backend.teachers.calendar');
  });
  Route::get('items',function (){
    return view('backend.teachers.items');
  });
});

Route::get('/dashboard', function () {
  return view('backend.dashboard');
});

Route::get('/news-feed', function () {
  return view('backend.bantin');
});

Route::get('/test', function () {
  return view('backend.test');
});

