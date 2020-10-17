<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\GiaoVien;
use Illuminate\Http\Request;

class LichController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $dsLopHoc = auth()->user()->giaoVien->dsLopHoc;
    // return $dsLopHoc;
    return view('backend.teachers.calendar', compact('dsLopHoc'));
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
   * @param  \App\Models\GiaoVien  $giaoVien
   * @return \Illuminate\Http\Response
   */
  public function show(GiaoVien $giaoVien)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\GiaoVien  $giaoVien
   * @return \Illuminate\Http\Response
   */
  public function edit(GiaoVien $giaoVien)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\GiaoVien  $giaoVien
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, GiaoVien $giaoVien)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\GiaoVien  $giaoVien
   * @return \Illuminate\Http\Response
   */
  public function destroy(GiaoVien $giaoVien)
  {
    //
  }
}