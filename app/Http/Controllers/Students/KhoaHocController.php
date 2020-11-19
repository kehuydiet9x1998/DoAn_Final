<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use DB;
use Illuminate\Http\Request;

class KhoaHocController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // $data = DB::table('khoa_hoc')
    //   ->leftJoin('lop_hoc', 'khoa_hoc.id', '=', 'lop_hoc.khoa_hoc_id')
    //   ->leftJoin('giao_vien', 'giao_vien.id', '=', 'lop_hoc.giao_vien_id')
    //   ->get();


    // $data = auth()
    //   ->user()
    //   ->hocsinh->dslophoc()
    //   ->with('lophoc.khoahoc')
    //   ->get()
    //   ->pluck('lophoc.khoahoc');

    //$data = KhoaHoc::paginate(7);
    // return $data;

    // $data = DB::table('loai_khoa_hoc')
    //   ->join('khoa_hoc', 'khoa_hoc.loai_khoa_hoc_id', '=', 'loai_khoa_hoc.id')
    //   ->where('khoa_hoc.id', $id)->get();
    // $tengiaovien = DB::table('khoa_hoc')
    //   ->Join('lop_hoc', 'lop_hoc.khoa_hoc_id', '=', 'khoa_hoc.id')
    //   ->Join('giao_vien', 'giao_vien.id', '=', 'lop_hoc.giao_vien_id')
    //   ->where('khoa_hoc.id', '=', 1)
    //   // ->select('giao_vien.hodem')
    //   ->get();
    // // ->value('hodem');
    // // ->value('hodem');

    // return $tengiaovien;
    return  view('backend.students.khoahoc.courses');

    //return view('backend.students.khoahoc.courses', ['khoahocs' => $data]);
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
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $data = KhoaHoc::find($id);
    return view('backend.students.khoahoc.course-detail', ['khoahoc' => $data]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function edit(KhoaHoc $khoaHoc)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, KhoaHoc $khoaHoc)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function destroy(KhoaHoc $khoaHoc)
  {
    //
  }
}