<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use App\Models\LopHoc;
use Illuminate\Http\Request;
use PDF;

class BaoCaoLopHocController extends Controller
{
  private $idkhoahoc = 0;
  public function LopHoc()
  {
    $khoahocs = KhoaHoc::all();
    $lophocs = LopHoc::where('trangthai', '<>', 'Đã kết thúc')->get(); // t k bieeets tragj thas. r oke
    return view('backend.teachers.baocao.baocao', compact('lophocs', 'khoahocs'));
  }

  public function BaoCaoLopHoc($idkhoahoc)
  {
    if ($idkhoahoc == 0) {
      $lophocs = LopHoc::where('trangthai', '<>', 'Đã kết thúc')->get();
      return view('backend.teachers.baocao.printf', compact('lophocs'));
    } else {

      $lophocs = LopHoc::where('khoa_hoc_id', '=', "$idkhoahoc")->where('trangthai', '<>', 'Đã kết thúc')->get();
      return view('backend.teachers.baocao.printf', compact('lophocs'));
    }
  }
  public function TimKiem(Request $rq)
  {
    $khoahocs = KhoaHoc::all();
    if (empty($rq->select)) {
      $lophocs = LopHoc::where('trangthai', '<>', 'Đã kết thúc')->get();
      // $this->manglophoc = $lophocs;
      return view('backend.teachers.baocao.baocao', compact('lophocs', 'khoahocs'));
    } else {
      $khoa_hoc_id = KhoaHoc::where('tenkhoahoc', '=', "$rq->select")->first();
      $khoa_hoc_id = $khoa_hoc_id->id;
      $lophocs = LopHoc::where('khoa_hoc_id', '=', "$khoa_hoc_id")->where('trangthai', '<>', 'Đã kết thúc')->get();
      return view('backend.teachers.baocao.baocao', compact('lophocs', 'khoahocs', 'khoa_hoc_id'));
    }
  }
  // public function generatePDF()
  // {
  //   $lophocs = LopHoc::all();
  //   // share data to view
  //   view()->share('lophocs', $lophocs);
  //   $pdf = PDF::loadView('backend.teachers.baocao.printf', $lophocs);

  //   return $pdf->download('pdf_file.pdf');
  // }
}