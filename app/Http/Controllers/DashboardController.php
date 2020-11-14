<?php

namespace App\Http\Controllers;

use App\Models\HocPhi;
use Illuminate\Http\Request;
use App\Models\KhoaHoc;
use App\Models\KhoanThu;
use App\Models\LopHoc;
use App\Models\PhieuChi;

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
        $date = getdate();
        $thanghientai = $date["mon"];
        $hocphis = HocPhi::all();
        $phieuchis = PhieuChi::all();
        $tongchi = 0;
        $tongthu = 0;
        for ($i = 0; $i < count($hocphis); $i++) {
          $ngaytao = $hocphis[$i]->created_at;
          if ($ngaytao = explode('-', $ngaytao)[1] == $thanghientai) {
            $tongthu = $tongthu + $hocphis[$i]->dadong;
          }
        }
        for ($i = 0; $i < count($phieuchis); $i++) {
          $ngaytao = $phieuchis[$i]->created_at;
          if ($ngaytao = explode('-', $ngaytao)[1] == $thanghientai) {
            $tongchi = $tongchi + $phieuchis[$i]->sotien;
          }
        }
        $khoahocs = KhoaHoc::all();
        $lophocs = LopHoc::all();
        return view('backend.contact.dashboard-contact', compact('khoahocs', 'lophocs', 'tongthu', 'tongchi'));
      default:
        return auth()->user()->role_id;
    }
  }
}