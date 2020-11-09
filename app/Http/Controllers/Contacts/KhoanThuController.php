<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\HocPhi;
use App\Models\KhoanThu;
use DB;
use Illuminate\Http\Request;

class KhoanThuController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $khoanthus = DB::select(
      "select tenkhoanthu, sotien,
      sum(if( trangthai like N'Đã hoàn thành' , 1 , 0 )) as sohocsinhdadong,
      count(*) as sohocsinh,
      ngaybatdau, ngayketthuc
      from khoan_thu group by tenkhoanthu, sotien, ngaybatdau, ngayketthuc"
    );
    $hocphis = HocPhi::all();
    return view(
      'backend.contact.khoanthu.list_khoanthu',
      compact('khoanthus', 'hocphis')
    );
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
   * @param  \App\Models\KhoanThu  $khoanthu
   * @return \Illuminate\Http\Response
   */
  public function show(KhoanThu $khoanthu)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\KhoanThu  $khoanthu
   * @return \Illuminate\Http\Response
   */
  public function edit(KhoanThu $khoanthu)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\KhoanThu  $khoanthu
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, KhoanThu $khoanthu)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\KhoanThu  $khoanthu
   * @return \Illuminate\Http\Response
   */
  public function destroy(KhoanThu $khoanthu)
  {
    //
  }
}