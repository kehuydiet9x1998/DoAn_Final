<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhanQuyenController extends Controller
{
  public function watchView($phanquyen)
  {
    $quyen = $phanquyen;
    return view('backend.dashboard', ['phanquyen' => $quyen]);
  }
}
