<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    switch (auth()->user()->vaitro) {
      case 'teacher':
        return view('backend.teachers.dashboard-teacher');
      case 'student':
        return view('backend.students.dashboard-student');
      case 'administrator':
        return view('backend.dashboard');
      case 'contact':
        return view('backend.contact.dashboard-contact');
      default:
        return auth()->user()->vaitro;
    }
  }
}