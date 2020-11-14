<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\HocSinh;
use App\Models\LopHoc;
use App\Models\PhanLop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PhanLopController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $classes = LopHoc::all();
    $hocsinhs = HocSinh::all();
    return view('backend.contact.phanlop', compact('classes', 'hocsinhs'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $lop_hoc_id = $request['lop_hoc_id'];
    $ngayvaolop = Carbon::now('Asia/Ho_Chi_Minh');
    foreach ($request['hoc_sinh_id'] as $hoc_sinh_id) {
      PhanLop::updateOrInsert(
        ['hoc_sinh_id' => $hoc_sinh_id, 'lop_hoc_id' => $lop_hoc_id],
        ['ngayvaolop' => $ngayvaolop]
      );
      $hocsinh = HocSinh::find($hoc_sinh_id);
      $hocsinh->trangthai = 'Chính thức';
      $hocsinh->save();
    }
    $lophoc = LopHoc::find($lop_hoc_id);
    $lophoc->siso = PhanLop::where('lop_hoc_id', $lop_hoc_id)->count();
    $lophoc->save();
    foreach ($request->hoc_sinh_id as $hoc_sinh_id) {
      $hocsinh = HocSinh::find($hoc_sinh_id)
        ->hocPhi->dsKhoanThu()
        ->create([
          'tenkhoanthu' => 'Học phí lớp ' . $lophoc->tenlop,
          'sotien' => $lophoc->khoaHoc->hocphi,
          'ngaybatdau' => now(),
          'ngayketthuc' => now()->addDays(30),
          'lop_hoc_id' => $lop_hoc_id,
          'trangthai' => 'Chưa đóng',
        ]);
    }
    return Redirect::back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\PhanLop  $phanlop
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $classes = LopHoc::all();
    $hocsinhs = HocSinh::all();
    $class = LopHoc::find($id);
    return view(
      'backend.administrators.classes.phan_lop_modal',
      compact('classes', 'hocsinhs', 'class')
    );
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\PhanLop  $phanlop
   * @return \Illuminate\Http\Response
   */
  public function edit(PhanLop $phanlop)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\PhanLop  $phanlop
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, PhanLop $phanlop)
  {
    return $request->all();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\PhanLop  $phanlop
   * @return \Illuminate\Http\Response
   */
  public function destroy(PhanLop $phanlop)
  {
    $phanlop->delete();
    return back();
  }
}
