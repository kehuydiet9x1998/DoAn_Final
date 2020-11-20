<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\HocPhi;
use App\Models\KhoanThu;
use DB;
use Illuminate\Http\Request;

class KhoanThuController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $this->authorize('tv_khoanthu');

    $khoanthus = DB::select(
      "select tenkhoanthu, sotien,
      sum(if( trangthai like N'Đã hoàn thành' , 1 , 0 )) as sohocsinhdadong,
      count(*) as sohocsinh
      from khoan_thu group by tenkhoanthu, sotien"
    );
    $hocphis = HocPhi::all();
    return view(
      'backend.contact.khoanthu.list_khoanthu',
      compact('khoanthus', 'hocphis')
    );
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
    $this->authorize('them_khoanthu');

    if (sizeof($request->hoc_phi_id) > 0) {
      foreach ($request->hoc_phi_id as $hoc_phi_id) {
        KhoanThu::updateOrInsert(
          [
            'hoc_phi_id' => $hoc_phi_id,
            'tenkhoanthu' => $request->tenkhoanthu,
            'sotien' => str_replace(',', '', $request->sotien),
          ],
          [
            // 'ngaybatdau' => $request->ngaybatdau,
            // 'ngayketthuc' => $request->ngayketthuc,
            'trangthai' => 'Chưa đóng',
          ]
        );
      }
    }

    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\KhoanThu  $khoanthu
   * @return \Illuminate\Http\Response
   */
  public function show(KhoanThu $khoanthu)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\KhoanThu  $khoanthu
   * @return \Illuminate\Http\Response
   */
  public function edit($tenkhoanthu)
  {
    $tenkhoanthu = urldecode($tenkhoanthu);
    $khoanthu = KhoanThu::firstWhere('tenkhoanthu', 'like', $tenkhoanthu);
    $hocphis = HocPhi::all();
    $khoanthu_hocphi = KhoanThu::where('tenkhoanthu', 'like', $tenkhoanthu)
      ->with('hocphi')
      ->get()
      ->pluck('hocphi');
    return view(
      'backend.contact.khoanthu.edit_khoanthu',
      compact('khoanthu', 'hocphis', 'khoanthu_hocphi')
    );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\KhoanThu  $khoanthu
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $tenkhoanthu)
  {
    $this->authorize('sua_khoanthu');

    if (sizeof($request->hoc_phi_id) > 0) {
      KhoanThu::where('tenkhoanthu', $tenkhoanthu)->forceDelete();

      foreach ($request->hoc_phi_id as $hoc_phi_id) {
        KhoanThu::updateOrInsert(
          [
            'hoc_phi_id' => $hoc_phi_id,
            'tenkhoanthu' => $request->tenkhoanthu,
            'sotien' => str_replace(',', '', $request->sotien),
          ],
          [
            // 'ngaybatdau' => $request->ngaybatdau,
            // 'ngayketthuc' => $request->ngayketthuc,
            'trangthai' => 'Chưa đóng',
          ]
        );
      }
    }

    return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\KhoanThu  $khoanthu
   * @return \Illuminate\Http\Response
   */
  public function destroy($tenkhoanthu)
  {
    $this->authorize('xoa_khoanthu');

    KhoanThu::where('tenkhoanthu', $tenkhoanthu)->delete();
  }
}