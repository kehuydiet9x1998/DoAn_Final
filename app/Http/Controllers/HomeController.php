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
    switch (auth()->user()->role_id) {
      case '2':
        $user = auth()->user()->hocsinh;
        return view('backend.myhome', ['user' => $user]);
        break;
      case '3':
        $user = auth()->user()->giaovien;
        return view('backend.myhome', ['user' => $user]);
        break;
      case '4':
        $user = auth()->user()->nhanvien;
        break;
    }
  }
}