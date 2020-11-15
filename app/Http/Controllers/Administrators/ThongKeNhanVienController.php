<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThongKeNhanVienController extends Controller
{
  public function index()
  {
    return view('backend.administrators.thongke.thongkenhanvien');
  }

  public function content($chucvu, $gioitinh)
  {
    return view('backend.administrators.thongke.thongkenhanvien_content');
  }
}