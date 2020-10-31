<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\LichSuHocPhi;
use Illuminate\Http\Request;

class PhieuThuController extends Controller
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
   * @param  \App\Models\LichSuHocPhi  $lichSuHocPhi
   * @return \Illuminate\Http\Response
   */
  public function show(LichSuHocPhi $phieuthu)
  {
    return view('backend.contact.hocphi.phieuthu_modal', compact('phieuthu'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\LichSuHocPhi  $lichSuHocPhi
   * @return \Illuminate\Http\Response
   */
  public function edit(LichSuHocPhi $lichSuHocPhi)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\LichSuHocPhi  $lichSuHocPhi
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, LichSuHocPhi $lichSuHocPhi)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\LichSuHocPhi  $lichSuHocPhi
   * @return \Illuminate\Http\Response
   */
  public function destroy(LichSuHocPhi $lichSuHocPhi)
  {
    //
  }
}
