<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $user = null;
    switch (auth()->user()->vaitro) {
      case 'student':
        $user = auth()->user()->hocsinh;
        return view('backend.myhome', ['user' => $user]);
        break;
      case 'teacher':
        $user = auth()->user()->giaovien;
        return view('backend.myhome', ['user' => $user]);
        break;
      case 'nhanvien':
        $user = auth()->user()->nhanvien;
        break;
    }
  }
}
