<?php

namespace App\Http\Controllers;

use App\Models\LichSuHocPhi;
use App\Models\PhieuChi;
use Illuminate\Http\Request;

class PrintController extends Controller
{
  public function printPhieuThu($id)
  {
    return view('backend.contact.hocphi.print', [
      'phieuthu' => LichSuHocPhi::find($id),
    ]);
  }

  public function printPhieuChi($id)
  {
    return view('backend.contact.phieuchi.print', [
      'phieuchi' => PhieuChi::find($id),
    ]);
  }
}