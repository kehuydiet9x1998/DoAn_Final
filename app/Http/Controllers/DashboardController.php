<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KhoaHoc;
use App\Models\LopHoc;
class DashboardController extends Controller
{
  public function index()
  {
    switch (auth()->user()->role_id) {
      case '3':
        return view('backend.teachers.dashboard-teacher');
      case '2':
        return view('backend.students.dashboard-student');
      case '1':
        return view('backend.dashboard');
      case '4':
        $khoahocs = KhoaHoc::all();
        $lophocs = LopHoc::all();
        return view('backend.contact.dashboard-contact', compact('khoahocs','lophocs'));
      default:
        return auth()->user()->role_id;
    }
  }
}
