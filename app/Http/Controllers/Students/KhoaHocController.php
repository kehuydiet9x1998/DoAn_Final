<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;

class KhoaHocController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = KhoaHoc::paginate(7);
    return view('backend.students.khoahoc.courses', ['khoahocs' => $data]);
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
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $data = KhoaHoc::find($id);
    return view('backend.students.khoahoc.course-detail', ['khoahoc' => $data]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function edit(KhoaHoc $khoaHoc)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, KhoaHoc $khoaHoc)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function destroy(KhoaHoc $khoaHoc)
  {
    //
  }
}