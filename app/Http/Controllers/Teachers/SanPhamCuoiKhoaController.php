<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\SanPhamCuoiKhoa;
use Illuminate\Http\Request;

class SanPhamCuoiKhoaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = SanPhamCuoiKhoa::paginate(30);
    $dslophoc = auth()->user()->giaoVien->dsLopHoc;
    return view('backend.teachers.sanphamcuoikhoa.items', ['sanphamcuoikhoas' => $data, 'dslophoc' => $dslophoc]);
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
    SanPhamCuoiKhoa::create($data);
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\SanPhamCuoiKhoa  $sanPhamCuoiKhoa
   * @return \Illuminate\Http\Response
   */
  public function show($id)

  {
    $data = SanPhamCuoiKhoa::find($id);
    return view('backend.teachers.sanphamcuoikhoa.showsanpham', ['sanpham' => $data]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\SanPhamCuoiKhoa  $sanPhamCuoiKhoa
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data = SanPhamCuoiKhoa::find($id);
    $dslophoc = auth()->user()->giaoVien->dsLopHoc;
    return view('backend.teachers.sanphamcuoikhoa.editsanpham', ['sanphamcuoikhoa' => $data, 'dslophoc' => $dslophoc]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\SanPhamCuoiKhoa  $sanPhamCuoiKhoa
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $sanpham = SanPhamCuoiKhoa::findOrFail($id);
    $sanpham->fill($request->all());
    $sanpham->save();
    return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\SanPhamCuoiKhoa  $sanPhamCuoiKhoa
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    SanPhamCuoiKhoa::where('id', $id)->delete();
    return back();
  }
}