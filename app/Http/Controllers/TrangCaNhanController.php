<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TrangCaNhanController extends Controller
{
  public function show($id = null)
  {
    if ($id == null) {
      $user = auth()->user();
    } else {
      $user = User::find($id);
    }
    switch ($user->vaitro) {
      case 'student':
        $dslophoc = $user->hocSinh
          ->dsLopHoc()
          ->with('lophoc')
          ->get()
          ->pluck('lophoc');
        $data = $user;
        return view('backend.students.trangcanhan.trangcanhan', [
          'user' => $data,
          'lophocs' => $dslophoc,
        ]);
      case 'teacher':
        $dslophoc = $user->giaoVien->dslophoc;
        $data = $user;
        return view('backend.teachers.trangcanhan.trangcanhan', [
          'user' => $data,
          'lophocs' => $dslophoc,
        ]);
      case 'contact':
        $data = $user;

        return view('backend.contact.trangcanhan.trangcanhan', [
          'user' => $data,
        ]);
    }
  }
}