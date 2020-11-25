<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\HocPhi;
use App\Models\KhoanThu;
use App\Models\LichTraiNghiem;
use App\Models\LinhVuc;
use Carbon\Carbon;

class AjaxController extends Controller
{
    public function getTuanSau($numberweek){
        $data = LichTraiNghiem::all();
        $lichtrainghiems = $data->filter(
          function($item) use($numberweek){
            $time = new Carbon($item->thoigian);
            return $time->weekOfYear == $numberweek;
          }
        );
        return view('backend.contact.lichtrainghiem.week',compact('lichtrainghiems'));
    }
    public function getNgay($date)
    {
      $data = LichTraiNghiem::all();
      $lichtrainghiems = $data->filter(
        function ($item) use ($date) {
          $time = new Carbon($item->thoigian);
          return $time->toDateString() == $date;
        }
      );
      return view('backend.contact.lichtrainghiem.week', compact('lichtrainghiems'));
    }
    public function getTrangThai($trangthai)
  {
    $data = LichTraiNghiem::all();
    $lichtrainghiems = $data->filter(
      function ($item) use ($trangthai) {
        return $item->trangthai == $trangthai;
      }
    );
    return view('backend.contact.lichtrainghiem.week', compact('lichtrainghiems'));
  }
    public function getHocPhi($deadline){
        foreach (HocPhi::all() as $hocphi) {
          $hocphi->updateHocPhi();
        }
        $data = HocPhi::all();
        $khoanthu = KhoanThu::all();
        $hocphi = $data->filter(function ($item) use ($deadline){
          if($item->trangthai != 'Đã quá hạn') {
            $time = new Carbon($item->deadline);
            return $time->diffInDays($deadline) <= 7;
            }
        });
        return view(
          'backend.contact.hocphi.fillter',
          compact('khoanthu', 'hocphi')
        );
      }
    public function getDeadline($date){
        foreach (HocPhi::all() as $hocphi) {
          $hocphi->updateHocPhi();
        }
        $data = HocPhi::all();
        $khoanthu = KhoanThu::all();
        $hocphi = $data->filter(function ($item) use ($date){
          if($item->trangthai != 'Đã quá hạn') {
            $time = new Carbon($item->deadline);
            return $time->toDateString() == $date;
          }
        });
        return view(
          'backend.contact.hocphi.fillter',
          compact('khoanthu', 'hocphi')
        );
    }
    public function getNo($trangthai){
      foreach (HocPhi::all() as $hocphi) {
        $hocphi->updateHocPhi();
      }
      $data = HocPhi::all();
      $khoanthu = KhoanThu::all();
      $hocphi = $data->filter(function ($item) use ($trangthai){
          return $item->trangthai == $trangthai;
      });
      return view(
        'backend.contact.hocphi.fillter',
        compact('khoanthu', 'hocphi')
      );
    }
    public function getLinhVuc($loaikhoahoc){
      $data = LinhVuc::all();
      $linhvuc = $data->filter(
        function($item) use($loaikhoahoc){
          return $item->loai_khoa_hoc_id == $loaikhoahoc;
        }
      );
      foreach ($linhvuc as $lv){
        echo "<option value='".$lv->hocsinh->id."'>".$lv->hocsinh->hodem.' '.$lv->hocsinh->ten."</option>";
      }
    }
}
