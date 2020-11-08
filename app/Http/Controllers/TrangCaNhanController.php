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
    switch ($user->role_id) {
      case '1':
        $data = $user;
        return view('backend.administrators.trangcanhan', [
          'user' => $data,
        ]);
      case '2':
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
      case '3':
        $dslophoc = $user->giaoVien->dslophoc;
        $data = $user;
        return view('backend.teachers.trangcanhan.trangcanhan', [
          'user' => $data,
          'lophocs' => $dslophoc,
        ]);
      case '4':
        $data = $user;
        return view('backend.contact.trangcanhan.trangcanhan', [
          'user' => $data,
        ]);
    }
  }
}