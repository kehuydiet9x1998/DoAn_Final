<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\ChucVu;
use App\Models\HocSinh;
use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $staffs = NhanVien::orderBy('ten', 'ASC')->paginate(10);
    $chucvu = ChucVu::all();
    return view('backend.administrators.staff.staffs', ['staffs' => $staffs, 'chucvu' => $chucvu]);
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
    NhanVien::create($data);
    return redirect(route('staffs.index'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\NhanVien  $nhanVien
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $staffs = NhanVien::findorFail($id);
    return view('backend.administrators.staff.show_staffs', ['staffs' => $staffs]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\NhanVien  $nhanVien
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data = NhanVien::find($id);
    $chucvu = ChucVu::all();
    return view('backend.administrators.staff.edit_staffs', ['staffs' => $data, 'chucvu' => $chucvu]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\NhanVien  $nhanVien
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $nhanvien = NhanVien::findorFail($id);
    $nhanvien->fill($request->all());
    $nhanvien->save();
    return redirect(route('staffs.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\NhanVien  $nhanVien
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    NhanVien::where('id', '=', $id)->delete();
    return redirect(route('staffs.index'));
  }
}
