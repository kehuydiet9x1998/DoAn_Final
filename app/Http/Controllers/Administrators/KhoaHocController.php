<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper;
use App\Models\BaiGiang;
use App\Models\CaHoc;
use App\Models\KhoaHoc;
use App\Models\Level;
use App\Models\LoaiKhoaHoc;
use App\Models\PhongHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class KhoaHocController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $khoahocs = KhoaHoc::all();
    $loaikhoahocs = LoaiKhoaHoc::all();
    $levels = Level::all();

    return view(
      'backend.administrators.courses.courses',
      compact('khoahocs', 'loaikhoahocs', 'levels')
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    // return view(
    //   'backend.administrators.courses.add_course',
    //   compact('levels', 'loaikhoahocs')
    // );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // return $request->all();
    $data = $request->except('hinhanhkhoahoc');
    $course = KhoaHoc::create($data);
    foreach ($request['hinhanhkhoahoc'] as $key => $hinhanhkhoahoc) {
      $course->dsHinhAnh()->create([
        'duongdan' => $request->hinhanhkhoahoc[$key]->store('hinhanhkhoahoc'),
      ]);
    }
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\KhoaHoc  $course
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $khoahoc = KhoaHoc::find($id);
    return view(
      'backend.administrators.courses.show_course',
      compact('khoahoc')
    );
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\KhoaHoc  $course
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $khoahoc = KhoaHoc::find($id);
    $loaikhoahocs = LoaiKhoaHoc::all();
    $levels = Level::all();
    // $baigiang = BaiGiang::all()->where('khoa_hoc_id', $id);
    return view(
      'backend.administrators.courses.edit_course',
      compact('khoahoc', 'loaikhoahocs', 'levels')
    );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\KhoaHoc  $course
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, KhoaHoc $course)
  {
    // return $request->all();
    $course->fill($request->except('hinhanhkhoahoc'));
    if ($request->has('hinhanhkhoahoc')) {
      foreach ($request->file('hinhanhkhoahoc') as $hinhanh) {
        $course->dsHinhAnh()->create([
          'duongdan' => $hinhanh->store('hinhanhkhoahoc'),
          // 'khoa_hoc_id' => $course->id,
        ]);
      }
    }
    $course->save();
    return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\KhoaHoc  $course
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    KhoaHoc::where('id', '=', $id)->delete();
    return redirect(route('courses.index'));
  }
}