<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\NhanXetHocSinh;
use Illuminate\Http\Request;

class NhanXetHocSinhController extends Controller
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
    $data = $request->all();
    //return $data;
    NhanXetHocSinh::create($data);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\NhanXetHocSinh  $nhanXetHocSinh
   * @return \Illuminate\Http\Response
   */
  public function show(NhanXetHocSinh $nhanXetHocSinh)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\NhanXetHocSinh  $nhanXetHocSinh
   * @return \Illuminate\Http\Response
   */
  public function edit(NhanXetHocSinh $nhanXetHocSinh)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\NhanXetHocSinh  $nhanXetHocSinh
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, NhanXetHocSinh $nhanXetHocSinh)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\NhanXetHocSinh  $nhanXetHocSinh
   * @return \Illuminate\Http\Response
   */
  public function destroy(NhanXetHocSinh $nhanXetHocSinh)
  {
    //
  }
  public function NhanXet($idhocsinh, $idbuoihoc, $idlophoc, $idkhoahoc)
  {
    $data = NhanXetHocSinh::where('hoc_sinh_id', $idhocsinh)
      ->where('buoi_hoc_id', $idbuoihoc)
      ->where('lop_hoc_id', $idlophoc)
      ->where('khoa_hoc_id', $idkhoahoc)
      ->first();
    return view('backend.teachers.classes.nhanxet-modal', [
      'nhanxet' => $data,
      'hocsinhid' => $idhocsinh,
      'buoihocid' => $idbuoihoc,
      'lophocid' => $idlophoc,
      'khoahocid' => $idkhoahoc,
    ]);
  }

  public function XemNhanXet($idhocsinh, $idbuoihoc, $idlophoc, $idkhoahoc)
  {
    $data = NhanXetHocSinh::where('hoc_sinh_id', $idhocsinh)
      ->where('buoi_hoc_id', $idbuoihoc)
      ->where('lop_hoc_id', $idlophoc)
      ->where('khoa_hoc_id', $idkhoahoc)
      ->first();
    return view('backend.teachers.classes.xemnhanxet-modal', [
      'nhanxet' => $data,
    ]);
  }
}