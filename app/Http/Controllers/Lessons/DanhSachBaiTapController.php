<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use App\Models\DanhSachBaiTap;
use Illuminate\Http\Request;

class DanhSachBaiTapController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    for ($i = 0; $i < count($request['hoc_sinh_id']); $i++) {
      for ($j = 0; $j < count($request['bai_tap_id']); $j++) {
        $hoc_sinh_id = $request['hoc_sinh_id'][$i];
        $buoi_hoc_id = $request['buoi_hoc_id'];
        $bai_tap_id = $request['bai_tap_id'][$j];
        $chon_hoc_sinh = $request['chon_hoc_sinh'][$hoc_sinh_id];
        $chon_bai_tap = $request['chon_bai_tap'][$bai_tap_id];
        // echo "$hoc_sinh_id - $bai_tap_id <br>";
        if ($chon_hoc_sinh != -1 && $chon_bai_tap != -1) {
          DanhSachBaiTap::updateOrInsert(
            [
              'buoi_hoc_id' => $buoi_hoc_id,
              'hoc_sinh_id' => $hoc_sinh_id,
              'bai_tap_id' => $bai_tap_id,
            ],
            ['trangthai' => 'Chưa hoàn thành', 'diem' => '0']
          );
        } else {
          DanhSachBaiTap::where([
            'buoi_hoc_id' => $buoi_hoc_id,
            'hoc_sinh_id' => $hoc_sinh_id,
            'bai_tap_id' => $bai_tap_id,
          ])->forceDelete();
        }
      }
    }
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\DanhSachBaiTap  $danhSachBaiTap
   * @return \Illuminate\Http\Response
   */
  public function show(DanhSachBaiTap $danhSachBaiTap)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\DanhSachBaiTap  $danhSachBaiTap
   * @return \Illuminate\Http\Response
   */
  public function edit(DanhSachBaiTap $danhSachBaiTap)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\DanhSachBaiTap  $danhSachBaiTap
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, DanhSachBaiTap $danhSachBaiTap)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\DanhSachBaiTap  $danhSachBaiTap
   * @return \Illuminate\Http\Response
   */
  public function destroy(DanhSachBaiTap $danhSachBaiTap)
  {
    //
  }
}