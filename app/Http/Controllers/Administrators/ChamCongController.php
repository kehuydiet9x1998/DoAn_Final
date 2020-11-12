<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\Checkin;
use App\Models\CheckIn as ModelsCheckIn;
use App\Models\ChucVu;
use App\Models\GiaoVien;
use App\Models\NhanVien;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChamCongController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $chucvus = ChucVu::all();

    return view(
      'backend.administrators.chamcong.list_cham_cong',
      compact('chucvus')
    );
  }

  public function filter($doituong, $ngaycham)
  {
    if ($doituong == 'giaovien') {
      $checkins = Checkin::all()->filter(function ($query) use ($ngaycham) {
        $temp = date('Y-m-d', strtotime($query->getRawOriginal('giocheckout')));
        return $temp == $ngaycham;
      });

      return view(
        'backend.administrators.chamcong.cham_cong_giao_vien',
        compact('checkins', 'ngaycham')
      );
    }
    if ($doituong == 'nhanvien') {
      foreach (Nhanvien::all() as $nhanvien) {
        $checkin = CheckIn::firstOrNew([
          'nhan_vien_id' => $nhanvien->id,
          'ngaycham' => $ngaycham,
        ]);
        $checkin->nhan_vien_id = $nhanvien->id;
        $checkin->ngaycham = $ngaycham;
        $checkin->save();
      }

      $checkins = Checkin::all()->filter(function ($query) use ($ngaycham) {
        $temp = date('Y-m-d', strtotime($query->getRawOriginal('ngaycham')));
        return $temp == $ngaycham;
      });

      return view(
        'backend.administrators.chamcong.cham_cong_nhan_vien',
        compact('checkins', 'ngaycham')
      );
    }
  }

  public function report()
  {
    return view('backend.administrators.chamcong.bangchamcong');
  }

  public function showreport($doituong, $thang)
  {
    if ($doituong == 'giaovien') {
      $checkins = Checkin::all()->filter(function ($query) use ($thang) {
        $temp = date('Y-m', strtotime($query->giocheckout));
        return $temp == $thang;
      });

      // Carbon::setLocale('vi');
      // $ngaydauthang = Carbon::createFromFormat('Y-m', $thang)->startOfMonth();
      // $ngaycuoithang = Carbon::createFromFormat('Y-m', $thang)->endOfMonth();
      // $timesheets = [];
      // foreach (GiaoVien::all() as $giaovien) {
      //   //prettier-ignore
      //   for($date = $ngaydauthang; $date->lt($ngaycuoithang); $date->addDays(1)){
      //     $timesheets[$giaovien->id][$date->format('d')] =  ;
      //   }
      // }

      return view(
        'backend.administrators.chamcong.ket_qua_cham_cong_giao_vien',
        compact('checkins', 'thang')
      );
    }
    if ($doituong == 'nhanvien') {
      $checkins = Checkin::all()->filter(function ($query) use ($thang) {
        $temp = date('Y-m', strtotime($query->getRawOriginal('ngaycham')));
        return $temp == $thang;
      });

      return view(
        'backend.administrators.chamcong.cham_cong_nhan_vien',
        compact('checkins', 'thang')
      );
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    foreach ($request->ketqua as $nhan_vien_id => $ketqua) {
      Checkin::where('nhan_vien_id', $nhan_vien_id)
        ->where('ngaycham', $request->ngaycham)
        ->update([
          'ketqua' => $ketqua,
          'trangthai' => 'Đã chấm công',
          'ghichu' => $request->ghichu[$nhan_vien_id],
        ]);
    }
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Checkin  $attendance
   * @return \Illuminate\Http\Response
   */
  public function show(Checkin $attendance)
  {
    return view(
      'backend.administrators.chamcong.show_cham_cong_giao_vien',
      compact('attendance')
    );
  }

  public function confirm(Checkin $attendance)
  {
    $attendance->trangthai = 'Đã xác nhận';
    $attendance->save();
  }

  public function cancel(Checkin $attendance)
  {
    $attendance->trangthai = 'Không hợp lệ';
    $attendance->save();
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Checkin  $attendance
   * @return \Illuminate\Http\Response
   */
  public function edit(Checkin $attendance)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Checkin  $attendance
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Checkin $attendance)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Checkin  $attendance
   * @return \Illuminate\Http\Response
   */
  public function destroy(Checkin $attendance)
  {
    // return $attendance;
    $attendance->delete();
    return back();
  }
}
