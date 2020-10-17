<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use App\Models\BuoiHoc;
use App\Models\DiemDanh;
use DB;
use Illuminate\Http\Request;

class DiemDanhController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
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
      $hoc_sinh_id = $request['hoc_sinh_id'][$i];
      DiemDanh::updateOrInsert(
        [
          'buoi_hoc_id' => $request['buoi_hoc_id'],
          'hoc_sinh_id' => $hoc_sinh_id,
        ],
        $request['ghichu'][$i]
          ? [
            'ketqua' => $request['ketqua'][$hoc_sinh_id],
            'ghichu' => $request['ghichu'][$i],
          ]
          : [
            'ketqua' => $request['ketqua'][$hoc_sinh_id],
          ]
      );
    }
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\DiemDanh  $diemDanh
   * @return \Illuminate\Http\Response
   */
  public function show(DiemDanh $diemDanh)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\DiemDanh  $diemDanh
   * @return \Illuminate\Http\Response
   */
  public function edit(DiemDanh $diemDanh)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\DiemDanh  $diemDanh
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, DiemDanh $diemDanh)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\DiemDanh  $diemDanh
   * @return \Illuminate\Http\Response
   */
  public function destroy(DiemDanh $diemDanh)
  {
    //
  }
}