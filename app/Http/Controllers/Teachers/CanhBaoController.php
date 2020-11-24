<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\LopHoc;
use Auth;
use Illuminate\Http\Request;

class CanhBaoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $lophocs = auth()->user()->giaovien->dslophoc()->where('trangthai', '=', 'Đang hoạt động')->where('sobuoidahoc', '=', '9')->get();
    return view('backend.teachers.canhbao.canhbao', compact('lophocs'));
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
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function show(LopHoc $lopHoc)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function edit(LopHoc $lopHoc)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, LopHoc $lopHoc)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function destroy(LopHoc $lopHoc)
  {
    //
  }
}