<?php

namespace App\Http\Controllers;

use App\Models\CheckIn;
use App\Models\HocPhi;
use Illuminate\Http\Request;
use App\Models\KhoaHoc;
use App\Models\KhoanThu;
use App\Models\LopHoc;
use App\Models\Luong;
use App\Models\PhieuChi;

class DashboardController extends Controller
{

  public function index()
  {
    switch (auth()->user()->role_id) {
      case '3':
        $date = getdate();
        $thanghientai = $date["mon"];
        $giaovienid = auth()->user()->giaovien->id;
        $luongs = Luong::all();
        $checkins = CheckIn::all();
        $tienluong = 0;
        for ($i = 0; $i < count($luongs); $i++) {
          $thang = explode('-', $luongs[$i]->thang)[1];
          if ($thang == $thanghientai && $luongs[$i]->giao_vien_id == $giaovienid) {
            $tienluong = $luongs[$i]->thuclinh;
            break;
          }
        }
        $dunggio = 0;
        $muongio = 0;
        $kcheckin = 0;
        for ($i = 0; $i < count($checkins); $i++) {
          $thang = explode('-', $checkins[$i]->created_at)[1];
          if ($thang == $thanghientai && $checkins[$i]->giao_vien_id == $giaovienid) {
            if ($checkins[$i]->trangthai == 'Đúng giờ') {
              $dunggio++;
            }
            if ($checkins[$i]->trangthai == 'Muộn giờ') {
              $muongio++;
            }
            if ($checkins[$i]->trangthai == 'chưa checkin') {
              $kcheckin++;
            }
          }
        }
        return view('backend.teachers.dashboard-teacher', compact('tienluong', 'dunggio', 'muongio', 'kcheckin'));
      case '2':
        $phanlops = auth()->user()->hocsinh->dslophoc;
        return view('backend.students.dashboard-student', compact('phanlops'));
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