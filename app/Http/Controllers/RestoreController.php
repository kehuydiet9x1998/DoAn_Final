<?php

namespace App\Http\Controllers;

use Artisan;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
  public function restore($filename)
  {
    echo '<h1>Hệ thống đang phục hồi dữ liệu</h1>';
    echo '<p>Vui lòng không thoát hệ thống. Quá trình có thể mấy vài phút.</p>';
    Artisan::call('db:restore', ['--filename' => $filename]);
    return back();
  }

  public function restoreFromFile()
  {
    $filename = request()->file('filename');
    // return $filename;
    echo '<h1>Hệ thống đang phục hồi dữ liệu</h1>';
    echo '<p>Vui lòng không thoát hệ thống. Quá trình có thể mấy vài phút.</p>';
    Artisan::call('db:restore', ['--filename' => $filename]);
    return back();
  }
}