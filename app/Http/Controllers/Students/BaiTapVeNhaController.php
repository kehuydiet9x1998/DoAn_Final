<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
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
    $data = DB::table('buoi_hoc')
      ->join('lop_hoc', 'lop_hoc.id', '=', 'buoi_hoc.lop_hoc_id')
      ->join('giao_vien', 'lop_hoc.giao_vien_id', '=', 'giao_vien.id')
      ->join('phan_lop', 'lop_hoc.id', '=', 'phan_lop.lop_hoc_id')
      ->where('phan_lop.hoc_sinh_id', '=', 1)
      ->select('lop_hoc.id', 'lop_hoc.tenlop', 'buoi_hoc.id', 'giao_vien.hodem', 'giao_vien.ten')->get();
    return view('backend.students.baitapvenha.homework', ['buoihocs' => $data]);
    // SELECT
    // lop_hoc.id,lop_hoc.tenlop,buoi_hoc.id,giao_vien.hodem,giao_vien.ten
    // FROM phan_lop,buoi_hoc,lop_hoc,giao_vien
    // WHERE lop_hoc.id = phan_lop.lop_hoc_id
    // and lop_hoc.id=buoi_hoc.lop_hoc_id
    // and phan_lop.hoc_sinh_id = 1
    // and lop_hoc.giao_vien_id = giao_vien.id
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
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function show($id = '')
  {
    // $data = DanhSachBaiTap::where('buoi_hoc_id', '=', $id);
    $data = DB::table('danh_sach_bai_tap')
      ->join('bai_tap', 'danh_sach_bai_tap.bai_tap_id', '=', 'bai_tap.id')
      ->where('buoi_hoc_id', '=', $id)
      ->select('danh_sach_bai_tap.*', 'bai_tap.*')->get();
    return view('backend.students.baitapvenha.homework-detail', ['btvn' => $data]);
    // SELECT * FROM danh_sach_bai_tap,bai_tap
    // WHERE danh_sach_bai_tap.bai_tap_id = bai_tap.id
    // and danh_sach_bai_tap.buoi_hoc_id = 1
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