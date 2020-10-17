<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\BuoiHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class BuoiHocController extends Controller
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
   * @param  \App\Models\BuoiHoc  $buoiHoc
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    if (FacadesRequest::ajax()) {
      $buoihoc = BuoiHoc::find($id);
      $class = BuoiHoc::find($id)->LopHoc->khoaHoc;
      return view(
        'backend.students.myclass.buoihoc',
        ['class' => $class, 'buoihoc' => $buoihoc]
      );
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\BuoiHoc  $buoiHoc
   * @return \Illuminate\Http\Response
   */
  public function edit(BuoiHoc $buoiHoc)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\BuoiHoc  $buoiHoc
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, BuoiHoc $buoiHoc)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\BuoiHoc  $buoiHoc
   * @return \Illuminate\Http\Response
   */
  public function destroy(BuoiHoc $buoiHoc)
  {
    //
  }
}