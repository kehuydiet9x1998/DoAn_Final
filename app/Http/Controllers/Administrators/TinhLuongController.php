<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\Luong;
use Illuminate\Http\Request;

class TinhLuongController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('backend.administrators.tinhluong.tinhluong');
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

  public function filter($doituong, $thang)
  {
    if ($doituong == 'giaovien') {
      return view(
        'backend.administrators.tinhluong.danh_sach_luong_giao_vien',
        compact('thang')
      );
    }
    if ($doituong == 'nhanvien') {
      return view(
        'backend.administrators.tinhluong.danh_sach_luong_nhan_vien',
        compact('thang')
      );
    }
  }

  public function thanhtoan($id)
  {
    $luong = Luong::find($id);
    $luong->update(['trangthai' => 'Đã thanh toán']);
    session()->flash('doituong', $luong->doituong);
    return back();
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Luong::create($request->all());
    session()->flash('doituong', $request->doituong);
    session()->flash('thang', $request->thang);
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Luong  $luong
   * @return \Illuminate\Http\Response
   */
  public function show(Luong $luong)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Luong  $luong
   * @return \Illuminate\Http\Response
   */
  public function edit(Luong $luong)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Luong  $luong
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Luong $luong)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Luong  $luong
   * @return \Illuminate\Http\Response
   */
  public function destroy(Luong $luong)
  {
    //
  }
}