<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use App\Models\CheckIn;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CheckInController extends Controller
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
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    if (auth()->user()->role->ten == 'teacher') {
      $date = Carbon::now('Asia/Ho_Chi_Minh');
      $giao_vien_id = auth()->user()->giaoVien->id;
      $data = [
        'giocheckin' => $date->toDateTimeString(),
        'giao_vien_id' => $giao_vien_id,
      ];
      if ($request->has('giocheckout')) {
        $data = [
          'giocheckout' => $date->toDateTimeString(),
          'giao_vien_id' => $giao_vien_id,
        ];
        $checkin = CheckIn::updateOrCreate(
          [
            'buoi_hoc_id' => request('buoi_hoc_id'),
          ],
          $data
        );

        $checkin->buoiHoc->trangthai = 'Đã kết thúc';
        $checkin->buoiHoc->save();
        $checkin->buoiHoc->lopHoc->sobuoidahoc += 1;
        $checkin->buoiHoc->lopHoc->save();
        if ($checkin->buoiHoc->lopHoc->sobuoidahoc == 10) {
          $checkin->buoiHoc->lopHoc->trangthai = 'Đã kết thúc';
          $checkin->buoiHoc->lopHoc->save();
        }
      } else {
        $checkin = CheckIn::updateOrCreate(
          [
            'buoi_hoc_id' => request('buoi_hoc_id'),
          ],
          $data
        );
        $checkin->buoiHoc->trangthai = 'Đang diễn ra';
        $checkin->buoiHoc->save();
      }
      $checkin->giao_vien_id = $giao_vien_id;
      $checkin->save();
    } else {
      return '<script>alert("Bạn không được phép checkin")</script>';
    }
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\CheckIn  $checkIn
   * @return \Illuminate\Http\Response
   */
  public function show(CheckIn $checkIn)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\CheckIn  $checkIn
   * @return \Illuminate\Http\Response
   */
  public function edit(CheckIn $checkIn)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\CheckIn  $checkIn
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, CheckIn $checkIn)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\CheckIn  $checkIn
   * @return \Illuminate\Http\Response
   */
  public function destroy(CheckIn $checkIn)
  {
    //
  }
}