<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use App\Models\NhanXet;
use App\Models\NhanXetKhoaHoc;
use Illuminate\Http\Request;

class NhanXetKhoaHocController extends Controller
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
      ->hocsinh->dslophoc()
      ->with('lophoc.khoahoc')
      ->get()
      ->pluck('lophoc.khoahoc');
    // return $data;
    return view('backend.students.nhanxetkhoahoc.list_khoahoc', ['khoahocs' => $data]);
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
    $data = $request->all();
    NhanXetKhoaHoc::create($data);
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\NhanXet  $nhanXet
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $data = KhoaHoc::find($id);
    $nhanxet = KhoaHoc::find($id)->dsNhanXet()->orderBy('id', 'desc')->paginate(20);
    $user = auth()->user();
    // echo 'Nhận xét khóa hóc';
    //return $data;
    // echo '<pre>';
    // printf($data);
    // echo '</pre>';
    return view('backend.students.nhanxetkhoahoc.nhanxetkhoahoc', ['khoahoc' => $data, 'nhanxets' => $nhanxet], ['user' => $user]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\NhanXet  $nhanXet
   * @return \Illuminate\Http\Response
   */
  public function edit(KhoaHoc $khoahoc)
  {
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\NhanXet  $nhanXet
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, NhanXet $nhanXet)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\NhanXet  $nhanXet
   * @return \Illuminate\Http\Response
   */
  public function destroy(NhanXet $nhanXet)
  {
    //
  }
}
