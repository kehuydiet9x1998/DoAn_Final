<?php

namespace App\Http\Controllers\students;

use App\Http\Controllers\Controller;
use App\Models\NhanXet;
use App\Models\NhanXetHocSinh;
use Illuminate\Http\Request;

class XemNhanXetController extends Controller
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
    //
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
  public function showNhanXet($buoihocid, $lophocid, $khoahocid)
  {
    $idhocsinh = auth()->user()->hocsinh->id;
    $data =  NhanXetHocSinh::where('hoc_sinh_id', $idhocsinh)->where('buoi_hoc_id', $buoihocid)->where('lop_hoc_id', $lophocid)->first();

    return view('backend.students.xemnhanxet.xemnhanxet', ['nhanxet' => $data]);
  }
}
