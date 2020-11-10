<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\Checkin;
use App\Models\ChucVu;
use Illuminate\Http\Request;

class ChamCongController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $chucvus = ChucVu::all();

    return view(
      'backend.administrators.chamcong.list_cham_cong',
      compact('chucvus')
    );
  }

  public function filter($doituong, $ngaycham)
  {
    if ($doituong == 'giaovien') {
      //lọc các buổi học theo $ngaycham
      $checkins = Checkin::all()->filter(function ($query) use ($ngaycham) {
        $temp = date(
          'Y-m-d',
          strtotime($query->buoihoc->getRawOriginal('ngayhoc'))
        );
        return $temp == $ngaycham;
      });

      return view(
        'backend.administrators.chamcong.cham_cong_giao_vien',
        compact('checkins')
      );
    }
    if ($doituong == 'nhanvien') {
      return view('backend.administrators.chamcong.cham_cong_nhan_vien');
    }
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
   * @param  \App\Models\Checkin  $checkin
   * @return \Illuminate\Http\Response
   */
  public function show(Checkin $checkin)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Checkin  $checkin
   * @return \Illuminate\Http\Response
   */
  public function edit(Checkin $checkin)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Checkin  $checkin
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Checkin $checkin)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Checkin  $checkin
   * @return \Illuminate\Http\Response
   */
  public function destroy(Checkin $checkin)
  {
    //
  }
}