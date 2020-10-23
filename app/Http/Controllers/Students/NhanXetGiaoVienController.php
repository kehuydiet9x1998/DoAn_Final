<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\LopHoc;
use App\Models\NhanXetGiaoVien;
use App\Models\PhanLop;
use Illuminate\Http\Request;

class NhanXetGiaoVienController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = auth()
      ->user()
      ->hocsinh->dslophoc()->get();
    // ->with('lophoc.khoahoc')
    // ->get()
    // ->pluck('lophoc.khoahoc');
    // return view('backend.students.nhanxetgiaovien.list_giaovien', ['khoahocs' => $data]);
    return view('backend.students.nhanxetgiaovien.list_giaovien', ['dsphanlop' => $data]);
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
   * @param  \App\Models\NhanXetGiaoVien  $nhanXetGiaoVien
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $data =  PhanLop::find($id)->lopHoc;
    //return $data;
    return view('backend.students.nhanxetgiaovien.nhanxetgiaovien', ['lophoc' => $data]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\NhanXetGiaoVien  $nhanXetGiaoVien
   * @return \Illuminate\Http\Response
   */
  public function edit(NhanXetGiaoVien $nhanXetGiaoVien)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\NhanXetGiaoVien  $nhanXetGiaoVien
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, NhanXetGiaoVien $nhanXetGiaoVien)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\NhanXetGiaoVien  $nhanXetGiaoVien
   * @return \Illuminate\Http\Response
   */
  public function destroy(NhanXetGiaoVien $nhanXetGiaoVien)
  {
    //
  }
}