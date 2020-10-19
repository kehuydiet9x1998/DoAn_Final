<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use App\Models\LopHoc;
use App\Models\NhanXetHocSinh;
use Illuminate\Http\Request;

class LopHocController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $classes = LopHoc::paginate(10);
    return view('backend.teachers.classes.classes', compact('classes'));
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
    $data = $request->all();
    NhanXetHocSinh::updateOrCreate(
      [
        'buoi_hoc_id' => $request['buoi_hoc_id'],
        'hoc_sinh_id' => $request['hoc_sinh_id'],
        'lop_hoc_id' => $request['lop_hoc_id'],
        'khoa_hoc_id' => $request['khoa_hoc_id'],
      ],
      $request->only([
        "khanangtiepthu",
        "khanangsangtao",
        "apdungkienthuc",
        "lambaitapvenha",
        "ythuchoctap",
        "tinhthanhoctap",
        "kynanglamviecnhom",
        "kynangthuyettrinh",
      ])
    );
    // $datanhanxet = NhanXetHocSinh::where('hoc_sinh_id', '=', $request->hoc_sinh_id)->where('lop_hoc_id', '=', $request->lop_hoc_id)->where('buoi_hoc_id', '=', $request->buoi_hoc_id)->get();
    // $nhanxet = NhanXetHocSinh::where('hoc_sinh_id', '=', '2')->get();
    // return $nhanxet;
    // NhanXetHocSinh::create($data);
    return back();
    // return $datanhanxet;
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function show(LopHoc $class)
  {
    return view('backend.teachers.classes.class_detail', compact('class'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function edit(LopHoc $lopHoc)
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
  public function update(Request $request, LopHoc $lopHoc)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function destroy(LopHoc $lopHoc)
  {
    //
  }
}