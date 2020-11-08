<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('backend.contact.dashboard-contact');
      default:
        return auth()->user()->role_id;
    }
  }
}