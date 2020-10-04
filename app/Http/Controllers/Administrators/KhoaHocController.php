<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use App\Models\Level;
use App\Models\LoaiKhoaHoc;
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
    $dskhoahoc = KhoaHoc::all();
    $levels = Level::all();
    $loaikhoahocs = LoaiKhoaHoc::all();
    return view(
      'backend.administrators.courses.courses',
      compact('khoahocs', 'levels', 'loaikhoahocs')
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $levels = Level::all();
    $loaikhoahocs = LoaiKhoaHoc::all();
    return view(
      'backend.administrators.courses.add_course',
      compact('levels', 'loaikhoahocs')
    );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->all();
    return KhoaHoc::create($data);
    return redirect(route('administrators.index'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function show(KhoaHoc $khoaHoc)
  {
    $levels = Level::all();
    $loaikhoahocs = LoaiKhoaHoc::all();
    return view(
      'backend.administrators.courses.show_course',
      compact('khoahoc', 'levels', 'loaikhoahocs')
    );
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function edit(KhoaHoc $khoaHoc)
  {
    $levels = Level::all();
    $loaikhoahocs = LoaiKhoaHoc::all();
    return view(
      'backend.administrators.courses.edit_course',
      compact('khoahoc', 'levels', 'loaikhoahocs')
    );
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
    $khoaHoc->fill($request->all());
    return redirect(route('administrators.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\KhoaHoc  $khoaHoc
   * @return \Illuminate\Http\Response
   */
  public function destroy(KhoaHoc $khoaHoc)
  {
    $khoaHoc->delete();
    return redirect(route('administrators.index'));
  }
}