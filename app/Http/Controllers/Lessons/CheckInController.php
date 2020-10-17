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
    $date = Carbon::now('Asia/Ho_Chi_Minh');
    $data = [
      'giocheckin' => $date->toTimeString(),
    ];
    if ($request->has('giocheckout')) {
      $data = [
        'giocheckout' => $date->toTimeString(),
      ];
    }
    CheckIn::updateOrCreate(['buoi_hoc_id' => request('buoi_hoc_id')], $data);
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
