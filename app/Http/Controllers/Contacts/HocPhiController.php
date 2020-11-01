<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\ChiTietHocPhi;
use App\Models\HocCu;
use App\Models\HocPhi;
use App\Models\LichSuHocPhi;
use App\Models\KhoanThu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HocPhiController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $hocphi = HocPhi::orderBy('trangthai')->get();
    $khoanthu = KhoanThu::all();
    return view(
      'backend.contact.hocphi.ListHocPhi',
      compact('khoanthu', 'hocphi')
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
    $data = $request->only(['nhan_vien_id', 'hoc_phi_id']);
    $data['ngaydong'] = date('Y/m/d');
    $data['sotiendadong'] = str_replace(',', '', $request['sotiendadong']);
    $lichsu = LichSuHocPhi::create($data);
    foreach ($request['khoanthu'] as $khoan_thu_id) {
      $lichsu
        ->dsChiTiet()
        ->create(['khoan_thu_id' => $khoan_thu_id, 'dadong' => 1]);
      KhoanThu::find($khoan_thu_id)->update(['trangthai' => 'Đã hoàn thành']);
    }

    /* -------------------------------------------------------------------------- */
    /*                          update tinh trang hoc phi                         */
    /* -------------------------------------------------------------------------- */

    $hocphi = HocPhi::find($request['hoc_phi_id']);
    $hocphi->updateHocPhi();
    return Redirect::to('/contacts/print/' . $hocphi->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\HocPhi  $hocPhi
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $hocphi = HocPhi::find($id);

    $lsthu = LichSuHocPhi::all()->where('hoc_phi_id', $id);
    return view(
      'backend.contact.hocphi.lichsu_modal',
      compact('lsthu', 'hocphi')
    );
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\HocPhi  $hocPhi
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $hocphi = HocPhi::find($id);

    $khoanthu = KhoanThu::where(function ($query) use ($id) {
      $query->where('hoc_phi_id', $id)->where(function ($query) {
        $query->where('trangthai', 'Chưa đóng')->orWhere('trangthai', 'Còn nợ');
      });
    })->get();
    // $sotiencandong = LichSuHocPhi::where('hoc_phi_id', $id)->orderBy('created_at', 'desc')->first()->sotienconthieu;
    return view('backend.contact.hocphi.Edit_HocPhi_Modal', [
      'hocphi' => $hocphi,
      'khoanthu' => $khoanthu,
      // 'sotiencandong' => $sotiencandong,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\HocPhi  $hocPhi
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $hocphi = HocPhi::find($id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\HocPhi  $hocPhi
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    HocPhi::Where('id', '=', $id)->delete();
    return redirect(route('hocphis.index'));
  }

  public function tinhhocphi()
  {
    foreach (HocPhi::all() as $hocphi) {
      $hocphi->updateHocPhi();
    }

    return back();
  }
}