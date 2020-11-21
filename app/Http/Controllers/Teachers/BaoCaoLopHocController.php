<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\LopHoc;
use Illuminate\Http\Request;
use PDF;

class BaoCaoLopHocController extends Controller
{
  public function LopHoc()
  {
    // cais nayf laf si snah khacs ddungs k.um dung r.z
    $lophocs = LopHoc::where('trangthai', '<>', 'Đã kết thúc')->get(); // t k bieeets tragj thas. r oke
    return view('backend.teachers.baocao.baocao', compact('lophocs'));
  }

  public function BaoCaoLopHoc()
  {
    $lophocs = LopHoc::where('trangthai', '<>', 'Đã kết thúc')->get();
    return view('backend.teachers.baocao.printf', compact('lophocs'));
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