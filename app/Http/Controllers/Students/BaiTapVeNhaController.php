<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\BaiTap;
use App\Models\BuoiHoc;
use App\Models\DanhSachBaiTap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaiTapVeNhaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $hocsinh = auth()->user()->hocsinh;
    $buoihoc = $hocsinh
      ->dsLopHoc()
      ->with('lopHoc.dsBuoiHoc')
      ->get()
      ->pluck('lopHoc.dsBuoiHoc')
      ->collapse()
      ->unique('id')
      ->values();
    return view('backend.students.baitapvenha.homework', [
      'buoihocs' => $buoihoc,
    ]);
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
    foreach ($request['bai_tap_id'] as $bai_tap_id) {
      $dapan = BaiTap::find($bai_tap_id)->dapan;
      if ($request->has($bai_tap_id)) {
        DanhSachBaiTap::updateOrCreate(
          [
            'buoi_hoc_id' => $request['buoi_hoc_id'],
            'bai_tap_id' => $bai_tap_id,
            'hoc_sinh_id' => $request['hoc_sinh_id'],
          ],
          [
            'chon' => $request[$bai_tap_id],
            'diem' => $dapan == $request[$bai_tap_id] ? 1 : 0,
            'trangthai' => 'Đã hoàn thành',
          ]
        );
      }
    }
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\LopHoc  $lopHoc'
   * @return \Illuminate\Http\Response
   */
  public function show($id = '')
  {
    $hocsinh = auth()->user()->hocsinh;
    $buoihoc = BuoiHoc::find($id);
    $data = BuoiHoc::find($id)
      ->dsBaiTap()
      ->where('hoc_sinh_id', '=', $hocsinh->id)
      ->get();
    if (count($data) > 0) {
      if ($data[0]->trangthai == 'Đã hoàn thành') {
        return view('backend.students.baitapvenha.homework-result', [
          'btvn' => $data,
          'buoihoc' => $buoihoc,
          'hocsinh' => auth()->user()->hocsinh,
        ]);
      }
    }

    return view('backend.students.baitapvenha.homework-detail', [
      'btvn' => $data,
      'buoihoc' => $buoihoc,
      'hocsinh' => auth()->user()->hocsinh,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function edit(BuoiHoc $lopHoc)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, BuoiHoc $lopHoc)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function destroy(BuoiHoc $lopHoc)
  {
    //
  }
}
