<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\BuoiHoc;
use App\Models\DanhSachBaiTap;
use App\Models\HocSinh;
use Illuminate\Http\Request;

class BaiTapController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $dsbuoihoc = auth()
      ->user()
      ->giaovien->dslophoc()
      ->with('dsbuoihoc')
      ->get()
      ->pluck('dsbuoihoc')
      ->collapse();
    // return $dsbuoihoc;
    return view('backend.teachers.chambai', compact('dsbuoihoc'));
  }

  public function xembaitap($hocsinhid, $buoihocid)
  {
    $data = BuoiHoc::find($buoihocid)
      ->dsBaiTap()
      ->where('hoc_sinh_id', '=', $hocsinhid)
      ->get();
    return view('backend.students.baitapvenha.homework-result', [
      'btvn' => $data,
      'buoihoc' => BuoiHoc::find($buoihocid),
      'hocsinh' => HocSinh::find($hocsinhid),
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
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\BuoiHoc  $buoiHoc
   * @return \Illuminate\Http\Response
   */
  public function show(BuoiHoc $buoiHoc)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\BuoiHoc  $buoiHoc
   * @return \Illuminate\Http\Response
   */
  public function edit(BuoiHoc $buoiHoc)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\BuoiHoc  $buoiHoc
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, BuoiHoc $buoiHoc)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\BuoiHoc  $buoiHoc
   * @return \Illuminate\Http\Response
   */
  public function destroy(BuoiHoc $buoiHoc)
  {
    //
  }
}